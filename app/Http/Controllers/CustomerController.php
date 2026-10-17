<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'LeBron James',
                'email' => 'kingjames@example.com',
                'phone' => '09171234567'
            ],
            [
                'id' => 2,
                'name' => 'Kevin Durant',
                'email' => 'slimreaper@example.com',
                'phone' => '09181234567'
            ],
            [
                'id' => 3,
                'name' => 'Steph Curry',
                'email' => 'chefcurry@example.com',
                'phone' => '09191234567'
            ],
            [
                'id' => 4,
                'name' => 'Kawhi Leonard',
                'email' => 'theklaw@example.com',
                'phone' => '09201234567'
            ],
            [
                'id' => 5,
                'name' => 'James Harden',
                'email' => 'thebeard@example.com',
                'phone' => '09211234567'
            ],
        ];

        return view('customers', compact('customers'));
    }
}