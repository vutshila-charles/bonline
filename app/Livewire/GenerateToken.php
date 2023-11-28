<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class GenerateToken extends Component
{
    public $token;

    public function generateAuthToken()
    {
        $authenticatedUserId = auth()->user()->id;
        $user = User::find($authenticatedUserId);
        $this->token = $user->createToken('token-name', ['server:update'])->plainTextToken;
        Log::info($this->token);
        session()->flash('message', 'Token Generated Successfully.  Please copy the token and keep it safe.');   
    }
    public function render()
    {
        return view('livewire.generate-token')->layout('layouts.app');
    }

    
}
