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
                   <a class="btn btn-warning" href="{{route('home')}}">Voltar</a>
                    </div>
                    </div>
                <div class="card-body">
                    Adicionar uma descrição
                    <br>
                    <br>

                        <form action="{{route('descricao.store')}}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Selecione a Categoria da descrição</label>
                                    <select class="form-control" name="categoria_id" id="exampleFormControlSelect1">
                                    @foreach($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->categorianome}}</option>
                                    @endforeach
                                    </select>
                                </div>
                
                                <div class="form-group mt-4">
                                    <label for="categorias">Insira uma Descrição</label>
                                    <input type="text" class="form-control" name="descricaonome">
                                    @error('descricaonome')
                                        <div class="errror text-danger">{{$mensagem}}</div>
                                    @enderror
                                </div>
                            <button type="submit" class="btn btn-primary">
                                Envie sua descrição
                            </button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection