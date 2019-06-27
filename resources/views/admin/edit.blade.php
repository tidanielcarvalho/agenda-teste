{{-- PAGINA UTILIZADA PARA A EDIÇÃO DE CONTATOS --}}

{{-- Extends Layout --}}
@extends('layouts.backend')

{{-- Page Title --}}
@section('page-title', 'Agenda')

{{-- Page Subtitle --}}
@section('page-subtitle', 'Editar')

{{-- Header Extras to be Included --}}
@section('head-extras')
    @parent
@endsection

@section('content')

    <div class="col-md-10">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#settings" data-toggle="tab">Editar Contato</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="settings">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin::contacts.update', ['contact' => $contact->id]) }}">
                       
                        {{method_field('PUT')}}
                        @include('admin._form')

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="pull-right btn btn-primary">Alterar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
        <!-- ./col -->
            <!-- Adicionando JQuery -->


<!-- Adicionando Javascript -->

@endsection

{{-- Footer Extras to be Included --}}
@section('footer-extras')

@endsection
