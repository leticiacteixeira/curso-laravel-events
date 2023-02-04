@extends('layouts.main')

@section('title','Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1> Crie o seu evento <h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do evento:</label>
                <input type="file" id= "image" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="title">Data do Evento:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Adicione Item de Infraestrutura:</label>
                <div class="form-group">
                   <input type="checkbox" name="items[]" value="Cadeiras"><h5>Cadeiras</h5></div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"><h5>Palco</h5>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja"><h5>Cerveja</h5>
                </div>
            </div>
            <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food"><h5>Open Food</h5>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brinde"><h5>Brinde</h5>
                </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
</div>

@endsection
