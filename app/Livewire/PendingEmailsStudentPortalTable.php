<?php

namespace App\Livewire;

use App\Models\PendingEmailsStudentPortal;
use App\Models\Student;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
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
            ->query(Student::query())
            ->columns([
                TextColumn::make('student_no')
                    ->label('Student Number'),
                TextColumn::make('last_name')
                    ->label('Last Name'),
                TextColumn::make('first_name')
                    ->label('First Name'),
                TextColumn::make('middle_name')
                    ->label('Middle Name'),
                TextColumn::make('plm_email')
                    ->label('PLM Email Address'),
                TextColumn::make('Status')
                    ->default('Pending')
            ])
            ->defaultSort('student_no', 'asc');
    }
}