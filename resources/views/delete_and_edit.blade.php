{{-- table album with pictures and delete albums --}}
<h1>Table for view Data and make actions</h1>
@if (Session::has('success_delete_album'))
    <h3 style="color: red;font-weight: bold"> {{ Session::get('success_delete_album') }}</h3>
@elseif(Session::has('success_move_picture'))
    <h3 style="color: green;font-weight: bold"> {{ Session::get('success_move_picture') }}</h3>
@endif


<table style="border: 2px solid black">
    <thead>
        <tr>
            <td>Pictures For Albums</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @forelse($albums as $value_albums)
            <tr>
                <td style="color: blue;font-size: 20px">{{ $value_albums->name }}</td>
                <td>
                    <form action="{{ route('check_availability') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $value_albums->id }}" name="id_album">
                        <button style="color: red;font-weight: bold">remove Album</button>
                    </form>
                </td>
                @foreach ($value_albums->picture_for_albums as $value_picture_for_albums)
            <tr>
                <td>{{ $value_picture_for_albums->name }}</td>
                <td>
                    <form action="{{ route('edit_picture') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $value_picture_for_albums->id }}" name="id_picture">
                        <button>Edit Picture</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tr>
    @empty
        <tr>
            <td colspan="2" style="color: red">not inserted any albums yet , please insert an album firstly</td>
        </tr>
        @endforelse

    </tbody>
</table>
