<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Motorcycle') }}
        </h2>
    </x-slot>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img/post/')}}/{{$bike->image}}" alt="{{ $bike->name }}" width="700" class="img-fluid mb-3">
            </div>
            <div class="col-md-6">
                <h3>{{$bike->name}}</h3>
                <table class="table">
                    <tbody>
                    <tr>
                        <th>Price</th>
                        <td>{{$bike->price}}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{$bike->description}}</td>
                    </tr>
                    <tr>
                        <th>Availability</th>

                        <td><span class="{{$bike->status ? 'badge bg-success' : 'badge bg-danger'}}">{{$bike->status ? 'Disponible' : 'Agotado'}}</span></td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{$bike->category->name}}</td>
                    </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="{{ route('bikes.edit', $bike->slug) }}" class="btn btn-primary">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
