<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(){
    // Carregar a VIEW
    return view('users.index');

    }

    public function create(){
    // Carregar a VIEW
    return view('users.create');
}
    public function store(UserRequest $request){
    // Validar formulário
     $request->validated();
}
}