<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EmailAllButton extends Component
{
    public $studentCount;

    public function __construct($studentCount)
    {
        $this->studentCount = $studentCount;
    }

    public function render()
    {
        return view('components.email-all-button');
    }
}