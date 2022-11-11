<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Session;


class ClienteController extends Controller
{
    public function cadastrar(Request $request){
        $data = [];
        return view("cadastrar", $data);
    }

    public function salvarCliente(Request $request){
        echo ($request);
            $this->validate($request,[
                'nome' => 'required|min:3',
                'email' => 'required|e-mail',
                'password' => 'required',
                'endereco' => 'required',
                'numero' => 'required',
                'cidade' => 'required',
                'estado' => 'required',
                'cep' => 'required',
            ]);
            $usuario = new Usuario();
            $usuario->nome = $request->input('nome');
            $usuario->email = $request->input('email');
            $usuario->password = $request->input('password');
            $usuario->endereco = $request->input('endereco');
            $usuario->numero = $request->input('numero');
            $usuario->cidade = $request->input('cidade');
            $usuario->estado = $request->input('estado');
            $usuario->cep = $request->input('cep');
            if($usuario->save()) {
                Session::flash('mensagem', 'Cadastro realizado com sucesso');
               return redirect()->route("home"); 
            }
    
        }
    }
