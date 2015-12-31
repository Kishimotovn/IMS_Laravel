<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CreateUserRequest;
use App\Post;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['createUser','returnUser','show', 'index', 'edit', 'update']]);
        $this->middleware('auth');
        $this->middleware('api', ['only' => 'returnUser']);
    }

    function show($id) {
        $person = User::findOrFail($id);
        $applied_companies = $person->companies()->get();
        return view('users.show', compact('person', 'applied_companies'));
    }

    function index()
    {
        $user = Auth::user();
        $posts = Post::latest('id')->get();
        $companies = Company::all();
        $users = User::all();
        return view('users.index', compact('user', 'posts', 'companies', 'users'));
    }

    function create()
    {
        return view('users.create');
    }

    function store(CreateUserRequest $request) {
        $person = User::Create($request->all());
        $person->password = bcrypt($request['password']);
        $person->save();

        return redirect('users');
    }

    function edit($id) {
        $person = User::findOrFail($id);

        return view('users.edit', compact('person'));
    }

    function update(CreateUserRequest $request, $id) {
        $person = User::findOrFail($id);

        $person->update($request->all());

        return redirect('users');
    }

    function reg($company_id) {
        Auth::user()->companies()->attach($company_id);

        return redirect('users');
    }

    function unreg($company_id) {
        Auth::user()->companies()->detach($company_id);
        return redirect('users');
    }

    function returnUser($user_id) {
        return User::findOrFail($user_id);
    }

    function createUser(Request $request) {
        $person = User::Create($request->all());
        $person->password = bcrypt($request['password']);
        $person->save();

        return $person;
    }

    function showUserList() {
        $people = User::all();

        return view('users.list', compact('people'));
    }
}
