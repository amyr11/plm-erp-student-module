<?php

namespace App\Livewire;

use App\Mail\StudentPortalCredentials;
use App\Models\PendingEmailsStudentPortal;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EmailAllButton extends Component
{
    public function sendEmails()
    {
        $students = PendingEmailsStudentPortal::all();

        foreach ($students as $student) {
            // Generate a random password
            $password = $this->generateRandomPassword();

            // Send the email
            Mail::to($student->plm_email)->send(new StudentPortalCredentials($student->student_no, $password));

            // Remove the student's student_no from PendingEmailsStudentPortal
            $student->delete();
        }

        // Show a success message
        session()->flash('message', 'Emails sent successfully!');
    }

    private function generateRandomPassword()
    {
        // Generate a random password
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
        $length = 10;
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $password;
    }

    public function render()
    {
        return view('livewire.email-all-button');
    }
}