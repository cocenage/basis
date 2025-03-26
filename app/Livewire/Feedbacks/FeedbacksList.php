<?php

namespace App\Livewire\Feedbacks;

use App\Models\Feedback;
use Livewire\Component;
use Livewire\Attributes\Computed;

class FeedbacksList extends Component
{
    #[Computed()]
    public function feedbacks()
    {
        return Feedback::where('is_active', 1)
            ->get();
    }
    public function render()
    {
        return view('livewire.feedbacks.feedbacks-list', [
            'feedbacks' => $this->feedbacks(),
        ]);
    }
}
