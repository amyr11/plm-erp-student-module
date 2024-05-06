<?php

namespace App\Livewire;

use App\Models\PendingEmailsPlmEmail;
use App\Models\Student;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Livewire\Component;

class PendingEmailsPlmEmailTable extends Component implements HasTable, HasForms
{
    use InteractsWithTable, InteractsWithForms;

    public function render()
    {
        return view('livewire.pending-emails-plm-email-table');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query((PendingEmailsPlmEmail::query()))
            ->query((Student::query()))
            ->columns([
                TextColumn::make('student_no')
                    ->label('Student Number'),
                TextColumn::make('last_name')
                    ->label('Last Name'),
                TextColumn::make('first_name')
                    ->label('First Name'),
                TextColumn::make('middle_name')
                    ->label('Middle Name'),
                TextColumn::make('entry_year')
                    ->label('Entry Year'),
                TextColumn::make('Status')
                    ->default('Pending')
            ])
            ->defaultSort('student_no', 'asc');
    }
}