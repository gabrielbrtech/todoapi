<?php

namespace App\Http\Controllers;



use App\Http\Resources\TodoResource;
use App\Models\User;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    protected $namespace = 'App\Http\Controllers';


    public function __construct() {
        $this->middleware('auth:api');
    }

    public function index() {
        return TodoResource::collection(auth()->user()->todos);
    }
}
