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
        @foreach ($pokedexs as $index => $item)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->type }}</td>
        <td>{{ $item->species }}</td>
        <td>{{ $item->height }}</td>
        <td>{{ $item->weight }}</td>
        <td>{{ $item->hp }}</td>
        <td>{{ $item->attack }}</td>
        <td>{{ $item->defense }}</td>
        <td>{{ $item->image_url }}</td>
        
        <td>
            <a class="btn btn-warning"
               href="{{ url('/pokedexs/'.$item->id.'/edit') }}">
               แก้ไข
            </a>
            <br>
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

