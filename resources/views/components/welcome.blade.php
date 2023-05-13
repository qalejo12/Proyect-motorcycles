<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Barra de navegación -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="">Home page</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories.index')}}">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('bikes.index')}}">Motorcycle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index')}}">Users</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Slider de imágenes -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/post/gixxer-150-abs.png" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/post/v-strom-650-amarilla.png" class="d-block w-100" alt="Imagen 2">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- Sección de novedades -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <h2 class="text-center mb-5">Últimas novedades</h2>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/img/post/banner-interna-promocion.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Desafío Aventura DR 150 modelo 2023</h5>
                            <p class="card-text">Compra una motocicleta DR 150 cero kilómetros en los almacenes directos y/o concesionarios autorizados Suzuki en Antioquia, Córdoba o Sucre, y participa para ganar una motocicleta Vstrom 250 SX modelo 2023 cero kilómetros. Válido del 10 de Abril al 28 de Septiembre de 2023. La imagen del casco es de referencia. Para mayor información consulta términos y condiciones</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">$10.930.000</button>
                                </div>
                                <small class="text-muted">IVA Incluido</small>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="/img/post/v-strom-250-sx.png" alt="v-strom 250">
                        <div class="card-body">
                            <h5 class="card-title">Vstrom 250 SX modelo 2023</h5>
                            <p class="card-text">Sufi una marca de Grupo Bancolombia. Solicitud sujeta a estudio y cumplimiento de las políticas de la entidad que financia. Financiación hasta el 100% del valor comercial de la motocicleta. El cliente durante toda la vigencia del crédito pagará cuotas correspondientes a cargos adicionales, abono a capital e intereses remuneratorios a una tasa desde 2.31% M.V. equivalente al 31.53% E.A. y se otorgará siempre y cuando el cliente contrate los seguros Vida + ofrecidos por las entidades aseguradoras a través Sufi. De lo contrario se le ofertará una tasa de interés remuneratorio desde 2.41% M.V equivalente al 33.08% E.A. las tasas se determinarán de acuerdo con el perfil de riesgo establecido por la entidad financiera para cada cliente. Casco HRO-MX330DV color negro, talla (S,M,L), 40 unidades, siempre y cuando la moto sea financiada con Sufi, el beneficio es otorgado por Suzuki. Vigente para solicitudes de crédito radicadas con documentación completa del 16 al 30 de abril de 2023. Válida para motocicletas nuevas y usadas, de hasta 5 años de antigüedad, de servicio particular, de la marca Suzuki, referencia  V-STROM 250 SX modelo 2023, comercializados en los distribuidores oficiales de estas marcas a nivel nacional. Imágenes s de referencia y podrán variar. Bancolombia S.A. solo es responsable del producto financiero.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">$23.800.000</button>
                                </div>
                                <small class="text-muted">IVA Incluido</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
