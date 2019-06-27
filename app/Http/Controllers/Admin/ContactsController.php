<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Função utilizada para listar todos os contatos, utilizada em admin/list.blade.php
    public function index(Request $request)
    {
        \Session::flash('chave', 'valor');
        $contacts = Contact::all();
        return view('admin.result', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Função utilizada para abrir o formulário de criação de contato, utilizada em admin/edit.blade.php + _form.blade.php
    public function create()
    {
        return view('admin.create', ['contact' => new Contact()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Função utilizada para validar a CRIAÇÃO de um novo contato
    public function store(Request $request)
    {
        $this->_validate($request);
        $data = $request->all();
        Contact::create($data);
        return redirect()->route('admin::contacts.create')
            ->with('message', 'Contato cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Função utilizada para abrir o formulário de edição de um contato 
    // DE list.blade.php PARA edit.blade.php
    public function edit(Contact $contact)
    {
        return view('admin.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Função utilizada para validar a EDIÇÃO de um contato
    public function update(Request $request, Contact $contact)
    {
        $this->_validate($request);
        $data = $request->all();
        $contact->fill($data);
        $contact->save();
        return redirect()->route('admin::contacts.index')
            ->with('message', 'Contato alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Função utilizada para validar a EXCLUSÃO de um contato
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin::contacts.index')
            ->with('message', 'Contato excluído com sucesso.');
    }


    // Função utilizada para pesquisas 
    // Menu de pesquisas localizado no header-nav da plataforma
    public function search(Request $request)
    {
        $queryName = array();
        $queryEmail = array();
            
        $valor = $request->valor;
        if ($valor != null && $valor != '') 
        {
            $queryName[] = ['name', 'like', '%' . $valor . '%'];
            $queryEmail[] = ['email', 'like', '%' . $valor . '%'];
        }

        // $contacts = Contact::where($query)
        $contacts = Contact::where($queryName)
            ->orWhere($queryEmail)
            ->paginate()
            ->appends('name', $valor)
            ->appends('email', $valor);
        return view('admin.result', compact('contacts'));
    }


    // Função para validar os campos digitados
    public function _validate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:110',
            'phone' => 'required',
            'email' => 'required|email',
            'cep' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'ibge' => 'required',
        ]);
    }

}
