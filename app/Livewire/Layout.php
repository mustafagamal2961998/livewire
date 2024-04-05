<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Layout extends Component
{
   
    public $users;

    
    public function render()
    {
        return view('livewire.layout');
    }
    public function delete(User $user){
        $user->delete();        
    }
}
