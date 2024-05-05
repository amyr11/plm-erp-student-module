<?php

namespace App\Livewire;

use App\Models\PendingEmailsStudentPortal;
use App\Models\Student;
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
            ->query(Student::query())
            ->columns([
                Tables\Columns\TextColumn::make('student_no')
                    ->label('Student Number')
                    ->sortable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->label('Last Name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('first_name')
                    ->label('First Name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('middle_name')
                    ->label('Middle Name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('plm_email')
                    ->label('PLM Email Address')
                    ->sortable(),
            ]);
    }
}