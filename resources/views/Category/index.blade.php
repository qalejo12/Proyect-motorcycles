<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <h1 class="alert alert-success text-center">Categories List</h1>
    </div>
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Priority</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->priority}}</td>
                    <td><a href="/categories/{{$category->slug}}" class="btn btn-primary">Show</a></td>
                    <td><a href="/categories/{{$category->slug}}/edit" class="btn btn-success">Edit</a></td>
                    <td>
                        <form action="/categories/{{$category->slug}}" method="post">
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
        <a href="/categories/create" class="btn btn-success">Add new category</a>
    </div>

</x-app-layout>

