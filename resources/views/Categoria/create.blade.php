@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="lead bold inline-block">
                        Area de Trabalho
                    </div>
                    <div>
                   <a class="btn btn-dark" href="{{route('home')}}">Voltar</a>
                    </div>
                    </div>
                <div class="card-body">
                    Adicionar nova Categoria
                    <br>
                    <br>

                        <form method="POST" action="{{route('categorias.store')}}">
                            @csrf
                                <div class="form-group mt-4">
                                    <label for="categorias">Insira uma Categoria</label>
                                    <input type="text" class="form-control" name="categorianome">
                                    @error('categorianome')
                                        <div class="errror text-danger">{{$mensagem}}</div>
                                    @enderror
                                </div>
                            <button type="submit" class="btn btn-primary">
                                Envie sua categoria
                            </button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection