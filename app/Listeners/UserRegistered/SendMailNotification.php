<?php namespace App\Listeners\UserRegistered;

use App\Events\UserRegisteredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendMailNotification
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegisteredEvent $event
     *
     * @return void
     */
    public function handle(UserRegisteredEvent $event)
    {
        $user = $event->user;

        $data = [
            'name' => $user->name
        ];

        Mail::send('emails.new_user', $data, function ($mail) use ($user)
        {
            $mail->to($user->email, $user->name)
                 ->subject('Welcome, ' . $user->name);
        });
    }
}
