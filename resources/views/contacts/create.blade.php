@extends('layouts.app')

@section('content')
    <h1>Create Contact</h1>

    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone">

        <label for="address">Address:</label>
        <input type="text" name="address" id="address">

        <button type="submit">Save</button>
    </form>
@endsection
