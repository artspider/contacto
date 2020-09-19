<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Notifications\newMsjToExpert;

use App\Expert;
use App\User;

class EmployerNotification extends Component
{
    public $expert;
    public $employer;
    public $expert_name;
    public $mensaje;

    public function mount()
    {
        $user = Auth::user();
        $this->employer = $user->usable;
        foreach ( $this->employer->unreadNotifications as $notification) {
            $notification->markAsRead();
        }
    }

    public function render()
    {
        return view('livewire.employer-notification', [
            'notifications' => $this->employer->notifications,
        ]);
    }

    public function selectSender($expert_id)
    {
        logger('En el selectSender' . $expert_id);
        $this->expert = Expert::find($expert_id);
        logger('Este es el Expert' . $this->expert);
        $this->expert_name = $this->expert->nombre;
    }

    public function respondMessage()
    {
        logger('Entrando a respondMessage del Employer');

        $validatedData = $this->validate([
            'mensaje' => 'required|min:5|max:64',
        ]);

        $msj = collect(["id" => $this->employer->id, "name" => $this->employer->nombre, "message" => $this->mensaje]);

        logger($msj);

        $this->expert->notify(new newMsjToExpert($msj));
        logger('saliendo de respondMessage Employer');
    }

}
