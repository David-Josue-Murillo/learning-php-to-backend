@extends('layouts.app')

<div class="container w-50 mx-auto mt-5">
    <h2 class="text-center mb-3">Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group mb-2">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-2 w-100">Login</button>
    </form>
</div>
