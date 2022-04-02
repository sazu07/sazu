<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
   public function __construct() 
   {
   	 $this->middleware('auth');
   }

   public function index()
   { 
   	 $all=User::all();
   	return view('admin.index', compact('all'));
   }
}
