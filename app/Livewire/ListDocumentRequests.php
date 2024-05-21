<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;


class ListDocumentRequests extends Component implements HasTable, HasForms
{
    use InteractsWithTable, InteractsWithForms;
    
    public function render()
    {
        return view('livewire.list-document-requests');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Student::query())
            ->columns([
                TextColumn::make('student_no')
                    ->label('Student Number')
                    ->sortable(),
                TextColumn::make('last_name')
                    ->label('Last Name'),
                TextColumn::make('first_name')
                    ->label('First Name'),
                TextColumn::make('middle_name')
                    ->label('Middle Name'),
                TextColumn::make('personal_email')
                    ->label('Personal Email'),
                TextColumn::make('Status')
                    ->default('Pending'),
            ])
            ->defaultSort('student_no', 'asc')
            ->paginated(false);
    }
}