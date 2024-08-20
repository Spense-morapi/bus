<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $business = Business::all();
        if (count($business) == 0) {
            $bus = new Business();
            $bus->name = 'Test';
            $bus->save();


            $user_raw = User::where('name', 'admin')->first();
            if (!$user_raw) {
                $user = new User();
                $user->name = 'admin';
                $user->email = 'admin@admin.com';
                $user->business_id  = $bus->id;
                $user->password = Hash::make('12345678');
                $user->save();
            }
        }
    }
}
