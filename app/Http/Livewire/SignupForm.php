<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\User;
use App\expert;
use App\employer;
use Illuminate\Support\Facades\Hash;

class SignupForm extends Component
{
  public $name;
  public $email;
  public $email_verified_at;
  public $password;
  public $password_confirmation;
  public $type;
  public $remember_token;
  public $created_at;
  public $updated_at;
  public $morph_id;

    public function render()
    {
        return view('livewire.signup-form');
    }

    public function submit()
    {
      logger('En el submit');
      logger('el valor de type es: ' . $this->type);
      $data = $this->validate([
        'name' => 'required|min:6',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed|min:6',
        // 'password_confirmation' => 'required|same:password',
        'type' => 'required',
      ]);

      logger([$data]);

      $role = $this->type;

      if ($role == '1'){
        $role_name = 'App\Employer';
        $this->morph_id = Employer::create([
          'nombre' => $this->name,
          'created_at' => now(),
          'updated_at' => now(),
        ]);
      }elseif($role == '2')
      {
        $role_name = 'App\Expert';
        $this->morph_id = Expert::create([
          'nombre' => $this->name,
          'email' => $this->email,
          'created_at' => now(),
          'updated_at' => now(),

        ]);
      }

      logger($role_name);


     $user = User::create([
       'name' => $this->name,
       'email' => $this->email,
       'password' => Hash::make($this->password),
       'type' => $this->type,
       'usable_type' => $role_name,
       'usable_id' => $this->morph_id->id,
       'created_at' => now(),
       'updated_at' => now(),
     ]);



     return redirect()->to('login');

     /* if ($user->type == 'expert')
     {
      logger([$data]);
      return redirect()->to('ingresar');
     }
     //     session()->flash('message', '¡Se ha creado tu cuenta!.');
     */
  }
}
