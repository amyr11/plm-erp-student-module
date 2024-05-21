<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PendingEmailPLMEmail;
use App\Models\Student;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ListPendingEmailPLMEmail extends Component implements HasTable, HasForms
{
    use InteractsWithTable, InteractsWithForms;
    
    public function render()
    {
        return view('livewire.list-pending-email-p-l-m-email');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(
                PendingEmailPLMEmail::query()
                    ->join('students', 'pending_email_p_l_m_emails.student_id', '=', 'students.id')
                    ->select('pending_email_p_l_m_emails.*', 'students.student_no', 'students.last_name', 'students.first_name', 'students.middle_name', 'students.personal_email')
            )
            ->columns([
                TextColumn::make('student_no')
                    ->label('Student Number')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('last_name')
                    ->label('Last Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('first_name')
                    ->label('First Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('middle_name')
                    ->label('Middle Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('personal_email')
                    ->label('Personal Email')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->default('Pending')
                    ->sortable()
                    ->searchable(),
            ])
            ->defaultSort('student_no', 'asc')
            ->paginated();
    }
}