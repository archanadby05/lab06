<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PersonController extends Controller
{
    public function index(?string $name = 'Tom Ford')
    {
        return "The name is $name";
    }
}
