<?php

namespace App\Livewire\Business;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Business extends Component
{
    public function render()
    {
        $business_id = Auth::user()->business_id;
        $businesses = Business::where('id',$business_id)->first();
        return view('livewire.business.business',compact('businesses'));
    }
}
