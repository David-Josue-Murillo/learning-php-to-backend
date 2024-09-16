@extends('layouts.home')

@section('content')
<div class="container w-50 mx-auto">
    <h2 class="text-center mb-3">Configuración de mi cuenta</h2>
    <form method="POST" action="{{ route('update') }}" aria-label="Update-Profile">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="surname">Apellido</label>
            <input type="text" name="surname" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nick">Nick</label>
            <input type="text" name="nick" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3 w-100">Guardar Cambios</button>
    </form>
</div>
@endsection