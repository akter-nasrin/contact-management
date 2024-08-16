@extends('layouts.app')

@section('content')
    <h1>Edit Contact</h1>

    <form method="POST" action="{{ route('contacts.update', $contact) }}">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $contact->name }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $contact->email }}" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="{{ $contact->phone }}">

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" value="{{ $contact->address }}">

        <button type="submit">Update</button>
    </form>
@endsection
