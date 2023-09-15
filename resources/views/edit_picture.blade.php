    <h1>choice the album you need to move the picture to it then click yes , OR click cancel if you need to return back
        with out changes </h1>
    <form action="{{ route('move_picture') }}" method="POST">
        @csrf
        <select name="id_album">
            @foreach ($albums as $value_albums)
                <option value="{{ $value_albums->id }}"> {{ $value_albums->name }} </option>
            @endforeach
        </select>
        <input type="hidden" value="{{ $id_picture }}" name="id_picture">
        <button>Yes</button>
    </form>
    <form action="{{ route('home') }}">
        <button>Cancel</button>
    </form>
