<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Motorcycles') }}
        </h2>
    </x-slot>


    <div class="container p-6">
        <h1>Motorcycles</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th scope="col">Show</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bikes as $bike)
                <tr>
                    <td><img src="img/post/{{ $bike->image }}" alt="{{ $bike->name }}" width="100"></td>
                    <td>{{ $bike->name }}</td>
                    <td>{{ $bike->price }}</td>
                    <td>{{ $bike->status ? 'Disponible' : 'Agotado' }}</td>
                    <td>{{ $bike->description }}</td>
                    <td>{{ $bike->category->name }}</td>
                    <td><a href="/bikes/{{$bike->slug}}" class="btn btn-primary">Show</a></td>
                    <td>
                        <form action="/bikes/{{$bike->slug}}" method="post">
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
        <a href="/bikes/create" class="btn btn-success">Add new bike</a>
    </div>


</x-app-layout>
