<!DOCTYPE html>
<html>
<head>
    <title>Nueva moto creada</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
</head>
<body>
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bike name: {{ $bike->name }}</h5>
                    <p class="card-text">Description: {{ $bike->description }}</p>
                    <p class="card-text">Status: {{ $bike->status }}</p>
                    <p class="card-text">Precio: {{ $bike->price }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
