<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Notifications\newMsjToEmployer;

use App\Employer;
use App\User;

class ExpertNotification extends Component
{
    public $expert;
    public $employer;
    public $employer_name;
    public $mensaje;

    public function mount()
    {
        $user = Auth::user();
        $this->expert = $user->usable;
        foreach ( $this->expert->unreadNotifications as $notification) {
            $notification->markAsRead();
        }
    }

    public function render()
    {
        logger($this->expert->notifications);
        return view('livewire.expert-notification', [
            'notifications' => $this->expert->notifications,
        ]);
    }

    public function selectSender($employer_id)
    {
        logger('En el selectSender' . $employer_id);
        $this->employer = Employer::find($employer_id);
        logger('Este es el employer' . $this->employer);
        $this->employer_name = $this->employer->nombre;
    }

    public function respondMessage()
    {
        logger('Entraando a respondMessage.');

        $validatedData = $this->validate([
            'mensaje' => 'required|min:5',
        ]);

        $msj = collect(["id" => $this->expert->id, "name" => $this->expert->nombre, "message" => $this->mensaje]);

        logger($msj);

        $this->employer->notify(new newMsjToEmployer($msj));
        logger('saliendo de respondMessage');
    }
}

