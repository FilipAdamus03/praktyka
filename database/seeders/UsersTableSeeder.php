<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

DB::table('users')->insert([
    'name' => 'Filip Adamus',
    'email' => 'filip.adamus@onet.eu',
    'password' => Hash::make('password'),
]);

