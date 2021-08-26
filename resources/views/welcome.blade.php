@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-6 d-flex flex-column justify-content-center">
            <div class="py-3"><h1>Olá, seja bem vindo a minha página!</h1></div>
            <div><h4>Meu nome é Mayara Nami Tamataya e aqui eu conto um pouco sobre mim e entre outros assuntos diversos. Estou sempre aberta a novas opiniões.</h4></div>
            <div class="py-4"><a href="#" class="btn btn-primary">Envie sua opinião</a></div>

        </div>
        <div class="col-6">
            <div class="d-flex justify-content-end align-items-center">
            <img class="w-100 py-5 pl-5" src="{{asset('img/logo.png')}}" alt="Imagem principal">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="d-flex justify-content-center">
        <h2 class="font-weight-border">Assuntos Diversos</h2>
    </div>

</div>
@endsection