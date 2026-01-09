@extends('template.default')

@section('content')
    <h1>Pokedexs Create</h1>
    <form action="{{url('/pokedexs')}}" method="post">
        @csrf
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name">
        <div class="row">
            <div class="col">
                <label for="type">Type</label>
                <input class="form-control" type="text" name="type" id="type">
            </div>
            <div class="col">
                <label for="species">Species</label>
                <input class="form-control" type="text" name="species" id="species">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="height">Height</label>
                <input class="form-control" type="text" name="height" id="height">
            </div>
            <div class="col">
               <label for="weight">Weight</label>
                <input class="form-control" type="text" name="weight" id="weight">
            </div>
        </div>

        <label for="hp">Hp</label>
        <input class="form-control" type="text" name="hp" id="hp">
        <label for="attack">Attack</label>
        <input class="form-control" type="text" name="attack" id="attack">
        <label for="defense">Defense</label>
        <input class="form-control" type="text" name="defense" id="defense">
        <label for="image_url">Image_url</label>
        <input class="form-control" type="text" name="image_url" id="image_url">
        <br>
        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>
    @include('pokedexs.table')
@endsection
