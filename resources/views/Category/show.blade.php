<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">{{ $category->name }}</h1>
                        <span class="fw-bold">Description:</span>
                        <p class="card-text">{{ $category->description }}</p>
                        <p class="card-text">
                            <span class="fw-bold">Priority:</span>
                            @if ($category->priority === 'Alta')
                                <span class="badge bg-danger">{{ $category->priority }}</span>
                            @elseif ($category->priority === 'Media')
                                <span class="badge bg-warning text-dark">{{ $category->priority }}</span>
                            @else
                                <span class="badge bg-success">{{ $category->priority }}</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-8 mx-auto">
                <h2 class="mb-4">Products in {{ $category->name }}</h2>
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach ($category->bikes as $bike)
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="{{asset('img/post/')}}/{{$bike->image}}" alt="{{ $bike->name }}" width="700" class="img-fluid mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $bike->name }}</h5>
                                            <p class="card-text">{{ $bike->description }}</p>
                                            <p class="card-text"><strong>Price:</strong> ${{ number_format($bike->price, 2) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
