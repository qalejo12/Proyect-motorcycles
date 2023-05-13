<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show user') }}
        </h2>
    </x-slot>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Detalle de Usuario</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <p><strong>Nombre:</strong></p>
                    <p><strong>Email:</strong></p>
                </div>
                <div class="col-md-8">
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->email }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
