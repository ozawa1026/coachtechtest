<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Management;

class ManagementController extends Controller
{
    public function index()
    {
        return view('index');
    }
}