<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
<div class="container">
    <h1>Users</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo electrónico</th>
            <th>Show</th>
            <th>Delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="/users/{{$user->id}}" class="btn btn-primary">Show</a></td>
                <td>
                    <form action="/users/{{$user->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input
                            type="submit"
                            class="btn btn-danger"
                            value="Delete"
                            onclick="return confirm('¿Está seguro que desea eliminar el registro?')"
                        >
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="/users/create" class="btn btn-success">Add new user</a>
</div>
</x-app-layout>
