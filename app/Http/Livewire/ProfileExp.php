<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileExp extends Component
{


    public function render()
    {
        return view('livewire.profile-exp');
    }

    public function login()
    {

      $this->validate([
        'type' => 'required',
      ]);

      $data = $this->validate([
        'email' => 'required|email|string',
        'password' => 'required|min:6',
      ]);

      if ( Auth::attempt($data) )
      {

        $role = Auth::user()->type;
        logger($role);
        if ($role == '1')
        {
          logger("en employer");
          return redirect()->to('employer');
        }
        elseif ($role == '2')
        {
          logger("en expert");
          return redirect()->to('expert');
        }

      }

      session()->flash('error', 'Tus credenciales no coinciden con los datos del servidor');

    }
}
