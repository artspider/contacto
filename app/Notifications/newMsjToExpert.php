<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class newMsjToExpert extends Notification
{
    use Queueable;
    protected $m;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($mesagge)
    {
        $this->m = $mesagge;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        logger('en el toArray');
        logger($this->m);
        return [
            'employer_id' => $this->m['id'],
            'employer_name' => $this->m['name'],
            'employer_msg' => $this->m['message'],
        ];
    }
}
