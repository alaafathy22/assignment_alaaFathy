@if ($count_albums)
    <h1>the album not empty , The album has pictures , Do you need to remove album and his pictures ? , OR click cancel
        to return back and move picture to another album</h1>
    <form action="{{ route('delete_Album') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $id_album }}" name="id_album">
        <button>yes</button>
    </form>
@else
    <h1> please click yes to confirm , OR click cancel to return back </h1>
    <form action="{{ route('delete_Album') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $id_album }}" name="id_album">
        <button>yes</button>
    </form>
@endif

<form action="{{ route('home') }}" method="GET">
    <button>cancel</button>
</form>
