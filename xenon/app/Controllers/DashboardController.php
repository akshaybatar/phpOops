<?php

namespace App\Controllers;

class DashboardController
{

    public function index()
    {
        $data = [
            ['id' => 1, 'name' => 'Akshay', 'lastname' => 'kumar'],
            ['id' => 2, 'name' => 'Akshit', 'lastname' => 'chaudhary']
        ];
        view('dashboard', ['data' => $data]);
    }

    public function logout()
    {

        $_SESSION = [];

        session_destroy();

        redirect('login');
    }
}
