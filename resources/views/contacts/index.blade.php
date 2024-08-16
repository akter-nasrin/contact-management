@extends('layouts.app')

@section('content')
    <h1>Contacts</h1>

    <form method="GET" action="{{ route('contacts.index') }}">
    <input type="text" name="search" placeholder="Search by name or email" value="{{ request('search') }}">
    <button type="submit">Search</button>
    <select name="sort" onchange="this.form.submit()">
        <option value="">Sort By</option>
        <option value="name" {{ request('sort') === 'name' ? 'selected' : '' }}>Name</option>
        <option value="created_at" {{ request('sort') === 'created_at' ? 'selected' : '' }}>Date</option>
    </select>
</form>
    <a href="{{ route('contacts.create') }}">Create New Contact</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>
                        <a href="{{ route('contacts.show', $contact) }}">View</a>
                        <a href="{{ route('contacts.edit', $contact) }}">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $contacts->links() }}
@endsection
