  {{-- create picture --}}
  <form action="{{ route('create_picture') }}" method="POST">
    @csrf
    <h1>create Picture</h1>
    <input placeholder="Name picture" type="text" name="name_picture" required>
    <select name="id_album" required>
        @forelse($albums as $value_albums)
            <option value="{{ $value_albums->id }}">{{ $value_albums->name }}</option>
        @empty
            <option selected value="">not inserted any albums yet , please insert an album firstly
            </option>
        @endforelse
    </select>
    <button>Save</button>
</form>
@if (Session::has('success_create_picture'))
    {{ Session::get('success_create_picture') }}
@endif
