<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoStoreRequest;
use App\Http\Requests\TodoUdpateRequest;
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


    public function show(Todo $todo) {
        $todo->load('tasks');
        return new TodoResource($todo);
    }

    public function store(TodoStoreRequest $request) {
        $input = $request->validated();

        $todo = auth()->user()->todos()->create($input);

        return new TodoResource($todo);
    }

    public function update(Todo $todo, TodoUdpateRequest $request) {
        $input = $request->validated();

        $todo->fill($input);
        $todo->save();

        return new TodoResource($todo->fresh());
    }

    public function destroy(Todo $todo) {
        $todo->delete();
    }
}
