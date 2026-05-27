<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function status()
    {
        return "Status OK";
    }

    public function clients()
    {
        return "All Clients";
    }
}
