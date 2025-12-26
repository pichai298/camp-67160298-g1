@extends('template.default')

@section('content')
<h1>Flight Create</h1>
<form action="{{url('/filghts')}}" method="post">
    @csrt
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" id="name" value="{{$flight_update->name}}">
    <label for="airline">Airline</label>
    <input class="form-control" type="text" name="airline" id="airline" value="{{$flight_update->airline}}">
    <label for="number_of_seats">Number of Seats</label>
    <input class="form-control" type="text" name="number_of_seats" id="nanumber_of_seatse" value="{{$flight_update->nanumber_of_seatse}}">
    <label for="price">Price</label>
    <input class="form-control" type="text" name="price" id="price" value="{{$flight_update->price}}">
    <button class="btn btn-primary" type="submit">บันทึก</button>

</form>
<h1>Flight Lists</h1>
<table>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>airline</td>
        <td>number_of_seats</td>
        <td>price</td>
        <td></td>
    </tr>
    <?php foreach($flight as $item){?>
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->airline}}</td>
        <td>{{$item->number_of_seats}}</td>
        <td>{{$item->price}}</td>
        <td>
            <a href="{{url('/flight'.$item->id.'/edit')}}">
                แก้ไข
            </a>
            / ลบ</td>
    </tr>
    <?php}
</table>

@endsection
