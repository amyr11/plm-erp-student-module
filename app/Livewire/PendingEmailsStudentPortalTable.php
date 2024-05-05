<?php

namespace App\Livewire;

use App\Models\PendingEmailsStudentPortal;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Tables;
use Livewire\Component;

class PendingEmailsStudentPortalTable extends Component implements HasTable, HasForms
{
    use InteractsWithTable, InteractsWithForms;

    public function render()
    {
        return view('livewire.pending-emails-plm-email-table');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(PendingEmailsStudentPortal::query())
            ->columns([
                Tables\Columns\TextColumn::make('student_no')
            ]);
    }
}