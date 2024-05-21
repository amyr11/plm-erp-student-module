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
                    'document_types.document_name',
                    'requested_documents.no_of_copies',
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
                ->label('Payment Mode'),
            TextColumn::make('document_name')
                ->label('Document Type'),
            TextColumn::make('no_of_copies')
                ->label('Number of Copies'),
            TextColumn::make('purpose')
                ->label('Purpose'),
            TextColumn::make('amount_paid')
                ->label('Amount Paid'),
            TextColumn::make('receipt_no')
                ->label('Receipt Number'),
            TextColumn::make('date_of_payment')
                ->label('Date of Payment')
                ->date(),
            TextColumn::make('status')
                ->label('Status'),
        ])
        ->defaultSort('student_no', 'asc');
    }
}