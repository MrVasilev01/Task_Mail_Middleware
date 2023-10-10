<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Mail\SendMail;
use Mail;

class SendToAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send-to-all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending emails to all the users.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            $email[] = $user->email;
        }

        $mailData = [
            'title' => 'This email is send to all users',
            'content' => 'Content',
        ];

        Mail::to($email)->send(new SendMail($mailData));

        $this->info('The emails are sent successfully!');
    }
}
