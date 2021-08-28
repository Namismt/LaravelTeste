@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="lead inline-block">
                        Area de Trabalho
                    </div>
                    <div>
                    <form class="inline" method="POST" action="{{ route('logout')}}">
                        @csrf
                        <button class="btn btn-dark" type="submit">Sair</button>
                    </form>
                    </div>
                    </div>
                <div class="card-body">
                    Você está logado!
                    <br>
                    <br>
                     <div class="d-flex align-items-between">
                             <a class="btn btn-success w-50 m-1 btn-lg" href="{{route('categorias.create')}}">Adicionar Categoria Nova</a>
                             <a class="btn btn-success w-50 m-1 btn-lg" href="{{route('categorias.index')}}">Mostrar Categorias</a>
                            </div>

                     <div class="d-flex align-items-between">
                             <a class="btn btn-success w-50 m-1 btn-lg" href="{{route('descricao.create')}}">Adicionar uma Descrição</a>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
