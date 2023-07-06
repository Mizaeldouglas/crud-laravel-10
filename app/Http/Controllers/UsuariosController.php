<?php

namespace App\Http\Controllers;
use App\Http\Requests\FormRequestUsuarios;
use App\Models\User;
use App\Models\Componetes;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function __construct(User $usuario)
    {
        $this->usuario = $usuario;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findUsuarios = $this->usuario->getUsuariosPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.usuarios.paginacao', compact('findUsuarios', 'pesquisar'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscarRegistro = User::find($id);
        $buscarRegistro->delete();
        return response()->json(['success' => true]);
    }

    public function cadastrarUsuarios(FormRequestUsuarios $request)
    {
        if ($request->method() == 'POST') {
            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
            User::create($data);
            Toastr::success('Cadastrado com Sucesso');
            return redirect()->route('usuarios.index');
        }
        return view('pages.usuarios.create');
    }

    public function atualizarUsuarios(Request $request, $id)
    {
        if ($request->method() == 'PUT') {
            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
            $buscaRegistro = User::find($id);
            $buscaRegistro->update($data);

            return redirect()->route('usuarios.index');
        }
        $findUsuarios = User::where('id', '=',$id )->first();

        return view('pages.usuarios.update',compact('findUsuarios'));
    }
}
