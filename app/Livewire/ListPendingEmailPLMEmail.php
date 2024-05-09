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
                PendingEmailPLMEmail::with('student')
                ->join('students', 'pending_email_p_l_m_emails.student_id', '=', 'students.id')
            )
            ->columns([
                TextColumn::make('student.student_no')
                    ->label('Student Number')
                    ->sortable(),
                TextColumn::make('student.last_name')
                    ->label('Last Name'),
                TextColumn::make('student.first_name')
                    ->label('First Name'),
                TextColumn::make('student.middle_name')
                    ->label('Middle Name'),
                TextColumn::make('student.plm_email')
                    ->label('PLM Email Address'),
                TextColumn::make('Status')
                    ->default('Pending'),
            ])
            ->defaultSort('student.student_no', 'asc');
    }
}