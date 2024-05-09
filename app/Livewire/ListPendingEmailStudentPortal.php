<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PendingEmailStudentPortal;
use App\Models\Student;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class ListPendingEmailStudentPortal extends Component implements HasTable, HasForms
{
    use InteractsWithTable, InteractsWithForms;
    
    public function render()
    {
        return view('livewire.list-pending-email-student-portal');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(PendingEmailStudentPortal::query())
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
                TextColumn::make('entry_date')
                    ->label('Entry Date'),
                TextColumn::make('Status')
                    ->default('Pending')
            ])
            ->defaultSort('student_no', 'asc');
    }
}