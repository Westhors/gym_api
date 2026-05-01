<?php

namespace App\Mail;

use App\Models\Teacher;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TeacherWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $teacher;

    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    public function build()
    {
        return $this->subject('🎉 مرحبًا بك في Teachers Market')
                    ->view('emails.teacher_welcome');
    }
}
