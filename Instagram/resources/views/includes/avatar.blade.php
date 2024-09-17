@if(Auth::user()->image)
    <img src="{{ route('avatar', Auth::user()->image) }}" alt="Avatar" class="rounded-circle">
@endif