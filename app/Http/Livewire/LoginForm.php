<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
  public $name;
  public $email;
  public $password;
  public $type;
  public $remember_token;

    public function render()
    {
        return view('livewire.login-form');
    }

    public function login()
    {

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
