{{-- PÁGINA INICIAL DA PLATAFORMA --}}

{{-- Extends Layout --}}
@extends('layouts.backend')

{{-- Page Title --}}
@section('page-title', 'Inicio')

{{-- Page Subtitle --}}
@section('page-subtitle', 'Agenda')

{{-- Header Extras to be Included --}}
@section('head-extras')
    @parent
@endsection

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row text-center">
        <div>
            <h1><img src="agenda.png" style="width: 60px;"> Agenda de contatos!</h1>
        </div>
    </div>   
@endsection

{{-- Footer Extras to be Included --}}
@section('footer-extras')

@endsection
