@extends('template.default')

@section('content')
    <h1>Pokedexs Update</h1>
    <form action="{{ url('/pokedexs/'.$pokedex_update->id) }}" method="post">
        @csrf
        @method('PUT')
        <lable for="name">Name</lable>
        <input class="form-control" type="text" name="name" id="name" value="{{$pokedex_update->name}}">
        <lable for="type">Type</lable>
        <input class="form-control" type="text" name="type" id="type" value="{{$pokedex_update->type}}">
        <lable for="species">Species</lable>
        <input class="form-control" type="text" name="species" id="species" value="{{$pokedex_update->species}}">
        <lable for="height">Height</lable>
        <input class="form-control" type="number" name="height" id="height" value="{{$pokedex_update->height}}">
        <lable for="weight">Weight</lable>
        <input class="form-control" type="number" name="weight" id="weight" value="{{$pokedex_update->weight}}">
        <lable for="hp">Hp</lable>
        <input class="form-control" type="float" name="hp" id="hp" value="{{$pokedex_update->hp}}">
        <lable for="attack">Attack</lable>
        <input class="form-control" type="float" name="attack" id="attack" value="{{$pokedex_update->attack}}">
        <lable for="defense">Defense</lable>
        <input class="form-control" type="float" name="defense" id="defense" value="{{$pokedex_update->defense}}">
        <lable for="image_url">image_url</lable>
        <input class="form-control" type="text" name="image_url" id="image_url" value="{{$pokedex_update->image_url}}">
        <br>
        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>
    @include('pokedexs.table')
@endsection
