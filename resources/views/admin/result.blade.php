{{-- ESSE ARQUIVO É UTILIZADO PARA VISUALIZAR TODOS OS CONTATOS CADASTRADOS E NAS PESQUISAS REALIZADAS--}}

{{-- Extends Layout --}}
@extends('layouts.backend')

{{-- Page Title --}}
@section('page-title', 'Agenda')

{{-- Page Subtitle --}}
@section('page-subtitle', 'Contatos')

{{-- Header Extras to be Included --}}
@section('head-extras')
    @parent
@endsection

@section('content')

{{-- Mensagens de EDIÇÃO e EXCLUSÃO --}}
@include('admin.message')

    <table id="example" class="display" style="width:100%; background-color: white;">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>CEP</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                
                    <td>{{ $contact->phone }}</td>
                
                    <td>{{ $contact->email }}</td>
                
                    <td>{{ $contact->cep }}</td>
                
                    <td>
                        {{-- EDITAR --}}
                        <a class="btn-sm btn-primary" href="{{ route('admin::contacts.edit',['contact' => $contact->id]) }}"><span class='glyphicon glyphicon-pencil'></span></a>    
                        <span style="color:white;">--</span>

                        {{-- EXCLUIR --}}
                        <a class="btn-sm btn-danger" href="{{ route('admin::contacts.destroy',['contact' => $contact->id]) }}"onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete{{ $contact->id }}').submit();}"><span class='glyphicon glyphicon-trash'></span></a>
                        <form id="form-delete{{ $contact->id }}"style="display: none" action="{{ route('admin::contacts.destroy',['contact' => $contact->id]) }}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                        </form>    
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>        

        <!-- ./col -->
@endsection

{{-- Footer Extras to be Included --}}
@section('footer-extras')

@endsection