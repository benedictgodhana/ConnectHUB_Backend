<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
   {
    return view('Admin.permisions.index');
   } 
}
