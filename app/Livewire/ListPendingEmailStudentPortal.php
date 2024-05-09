<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PendingEmailStudentPortal;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;


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
            ->query(PendingEmailStudentPortal::with('student'))
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
                TextColumn::make('student.personal_email')
                    ->label('Personal Email'),
                TextColumn::make('Status')
                    ->default('Pending'),
            ])
            ->defaultSort('student.student_no', 'asc')
            ->paginated(false);
    }
}