<?php

namespace App\Livewire\Feedback;

use App\Models\Connection as ModelsConnection;
use Livewire\Component;


use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\Rule;
class Connection extends Component
{
       public $phone = '';
    public $email = '';
    public $message = '';
    public $honeypot = '';
    public $form_time;

    protected function rules()
    {
        return [
            'phone' => 'nullable|string|max:20|regex:/^[\d\s\(\)\+-]*$/',
            'email' => 'nullable|email:rfc,dns|max:255',
            'message' => [
                'required',
                'string',
                'min:10',
                'max:1000',
                Rule::notIn(['http://', 'https://', 'www.']), // Защита от ссылок
                function ($attribute, $value, $fail) {
                    if (preg_match('/<[^>]*>/', $value)) {
                        $fail('Сообщение содержит HTML-теги.');
                    }
                },
            ],
        ];
    }

    public function mount()
    {
        $this->form_time = microtime(true);
    }

    public function submit()
    {
        $this->validate();

        // Honeypot проверка
        if ($this->honeypot !== '') {
            return;
        }

        // Проверка времени заполнения
        if ((microtime(true) - $this->form_time) < 3) {
            $this->addError('form', 'Форма заполнена слишком быстро!');
            return;
        }

        // Ограничение частоты запросов
        $executed = RateLimiter::attempt(
            'feedback-form:'.request()->ip(),
            3,
            function() {
                ModelsConnection::create([
                    'phone' => strip_tags($this->phone),
                    'email' => filter_var($this->email, FILTER_SANITIZE_EMAIL),
                    'message' => htmlspecialchars($this->message, ENT_QUOTES, 'UTF-8'),
                ]);
            },
            60
        );

        if (!$executed) {
            $this->addError('form', 'Слишком много попыток! Попробуйте позже.');
            return;
        }

        $this->reset(['phone', 'email', 'message']);
        session()->flash('success', 'Спасибо! Ваше сообщение отправлено.');
    }
    public function render()
    {
        return view('livewire.feedback.connection');
    }
}
