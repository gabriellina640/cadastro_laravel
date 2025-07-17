<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(){
    
    
    $users = User:: orderBydesc('id')->get();

  
        // Carregar a VIEW
    return view('users.index', ['users'=>$users]);

    }


public function show(User $user)
{
    return view('users.show', ['user' => $user]);
}


    public function create(){
    // Carregar a VIEW
    return view('users.create');
}
    public function store(UserRequest $request){
    // Validar formulário
    $request->validated();

     User::create([
  
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
     ]);

     return redirect()-> route('user.index')->with('success', 'Usuário cadastrado com sucesso!');
    }

         public function edit(User $user) 
{
         return view('users.edit', ['user' => $user]);
        
}

public function update(UserRequest $request, User $user)

{

//Validar o formulário
$request ->validated();

$user->update([

'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
]);
 return redirect()-> route('user.show',['user' => $user->id ])-> with('success', 'Usuário atualizado com sucesso!');

}
public function destroy(User $user)
{

$user->delete();
 return redirect()->route('user.index')->with('success', 'Usuário excluido com sucesso!');

 
}


}
    
