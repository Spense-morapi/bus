<?php

namespace App\Livewire\Business;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Business as BusinessModel;

class Business extends Component
{
    public function render()
    {
        $business_id = Auth::user()->business_id;
        $businesses = BusinessModel::find($business_id);
        return view('livewire.business.business',compact('businesses'));
    }
}
