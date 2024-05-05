<?php

namespace App\Livewire;

use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms;
use Livewire\Component;

class ListPendingEmails extends Component
{
    public function render()
    {
        return view('livewire.list-pending-emails');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(ListPendingEmails::query())
            ->columns([]);
    }
}