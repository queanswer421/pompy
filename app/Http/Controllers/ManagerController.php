<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;
use App\Http\Resources\ManagerResource;

class ManagerController extends Controller
{
    public function index()
    {
        return new ManagerResource(Manager::all());
    }
}
