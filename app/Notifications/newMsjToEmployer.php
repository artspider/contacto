<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class newMsjToEmployer extends Notification
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

    public function toArray($notifiable)
    {
        logger('en el toArray');
        logger($this->m);
        return [
            'expert_id' => $this->m['id'],
            'expert_name' => $this->m['name'],
            'expert_msg' => $this->m['message'],
        ];
    }


}
