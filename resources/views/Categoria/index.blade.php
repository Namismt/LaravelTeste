@extends('layouts.app')
@section('content')

<script src="{{ asset('js/ExampleComponent.vue')}}"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="lead bold inline-block">
                        Categorias
                    </div>
                    <div>
                   <a class="btn btn-dark" href="{{route('home')}}">Voltar</a>
                    </div>
                    </div>
                <div class="card-body">
                    @foreach ($categorias as $categoria)
                        <h4>{{$categoria->categorianome}}</h4>
                    <ul>
                    @foreach($categoria->descricao as $descr)
                            <li>{{$descr->descricaonome}}</li>
                    @endforeach
                    </ul>
                    
                    @endforeach
                    <div id="app">
                    <example-component></example-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js')}}"></script>
@endsection