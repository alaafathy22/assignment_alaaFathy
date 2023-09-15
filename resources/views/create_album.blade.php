 {{-- create Album --}}
 <form action="{{ route('create_Album') }}" method="POST">
    @csrf
    <h1>create Album</h1>
    <input required placeholder="Name Album" type="text" name="name_album">
    <button>Save</button>
</form>
@if (Session::has('success_create_album'))
    {{ Session::get('success_create_album') }}
@endif
