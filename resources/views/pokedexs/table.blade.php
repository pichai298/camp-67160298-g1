<h1>Pokedexs Lists</h1>
    <table class="table">
        <thead>
        <tr>
            <td>No.</td>
            <td>Name</td>
            <td>Type</td>
            <td>Species</td>
            <td>Height</td>
            <td>Weight</td>
            <td>Hp</td>
            <td>Attack</td>
            <td>Defense</td>
            <td>Image_url</td>
        </tr>
        </thead>
        @foreach ($pokedexs as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->Type }}</td>
        <td>{{ $item->Species }}</td>
        <td>{{ $item->Height }}</td>
        <td>{{ $item->Weight }}</td>
        <td>{{ $item->Hp }}</td>
        <td>{{ $item->Attack }}</td>
        <td>{{ $item->Defense }}</td>
        <td>{{ $item->Image_url }}</td>
        <td>
            <a class="btn btn-warning"
               href="{{ url('/pokedexs/'.$item->id.'/edit') }}">
               แก้ไข
            </a>

            <form style="display:inline-block"
                  action="{{ url('/pokedexs/'.$item->id) }}"
                  method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">ลบ</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

