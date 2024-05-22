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
use Illuminate\Support\Facades\DB; // Make sure to include this

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
        ->query(
            Student::query()
                ->join('student_requests', 'students.id', '=', 'student_requests.student_id')
                ->join('payment_modes', 'student_requests.payment_mode_id', '=', 'payment_modes.id')
                ->join('student_request_statuses', 'student_requests.student_request_status_id', '=', 'student_request_statuses.id')
                ->join('requested_documents', 'student_requests.id', '=', 'requested_documents.student_request_id')
                ->join('document_types', 'requested_documents.document_type_id', '=', 'document_types.id')
                ->select(
                    'students.id',
                    'students.student_no',
                    'payment_modes.mode',
                    'student_requests.id as request_id',
                    'student_requests.purpose',
                    'student_requests.amount_paid',
                    'student_requests.receipt_no',
                    'student_requests.date_of_payment',
                    'student_request_statuses.status',
                    DB::raw('GROUP_CONCAT(document_types.document_name SEPARATOR ", ") as document_names'),
                    DB::raw('SUM(requested_documents.no_of_copies) as total_copies')
                )
                ->groupBy(
                    'students.id',
                    'students.student_no',
                    'payment_modes.mode',
                    'student_requests.id',
                    'student_requests.purpose',
                    'student_requests.amount_paid',
                    'student_requests.receipt_no',
                    'student_requests.date_of_payment',
                    'student_request_statuses.status'
                )
        )
        ->columns([
            TextColumn::make('student_no')
                ->label('Student Number')
                ->sortable(),
            TextColumn::make('mode')
                ->label('Payment Mode')
                ->sortable(),
            TextColumn::make('document_names')
                ->label('Document Types')
                ->sortable(),
            TextColumn::make('total_copies')
                ->label('Number of Copies')
                ->sortable(),
            TextColumn::make('purpose')
                ->label('Purpose')
                ->sortable(),
            TextColumn::make('amount_paid')
                ->label('Amount Paid')
                ->sortable(),
            TextColumn::make('receipt_no')
                ->label('Receipt Number')
                ->sortable(),
            TextColumn::make('date_of_payment')
                ->label('Date of Payment')
                ->date()
                ->sortable(),
            TextColumn::make('status')
                ->label('Status')
                ->sortable(),
        ])
        ->defaultSort('student_no', 'asc');
    }
}