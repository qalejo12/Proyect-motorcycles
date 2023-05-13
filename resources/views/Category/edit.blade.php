<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Editar Category</h2>
                <hr>
                <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description">{{ $category->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="priority">Prioridad:</label>
                        <select class="form-control" id="priority" name="priority" required>
                            <option value="">Seleccione una opción</option>
                            <option value="Alta" {{ $category->priority == 'Alta' ? 'selected' : '' }}>Alta</option>
                            <option value="Media" {{ $category->priority == 'Media' ? 'selected' : '' }}>Media</option>
                            <option value="Baja" {{ $category->priority == 'Baja' ? 'selected' : '' }}>Baja</option>
                        </select>
                    </div>



                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
