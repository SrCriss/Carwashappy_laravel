<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carwashappy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/styles.css')
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Carwashappy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#agendar">Agendar</a>
                    </li>
                    <li class="nav-item">
                        <a class ="nav-link" href="{{ url('login') }}">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!--     <section>

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endif

        </div>
        @endif

</section> -->



        <!-- Hero Section -->
        <header id="inicio" class="hero-section">
            <div class="container text-center text-white">
                <h1 class="display-4">Carwashappy</h1>
                <p class="lead">Tu auto merece el mejor cuidado</p>
            </div>
        </header>

        <!-- Misión y Visión -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title text-center">Misión</h3>
                                <p class="card-text">
                                    Proporcionar servicios de lavado y cuidado automotriz de la más alta calidad,
                                    utilizando productos premium y técnicas innovadoras para superar las expectativas de
                                    nuestros clientes, mientras cuidamos el medio ambiente.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title text-center">Visión</h3>
                                <p class="card-text">
                                    Ser reconocidos como el servicio de autolavado líder en la región, destacando por
                                    nuestra excelencia en el servicio, innovación constante y compromiso con la
                                    satisfacción del cliente.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Servicios -->
        <section id="servicios" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-5">Nuestros Servicios</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Los servicios se cargarán dinámicamente aquí -->
                    @forelse ($servicios as $servicio)
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $servicio->nombre_servicio }}</h5>
                                    <p class="card-text">{{ $servicio->descripcion_servicio }}</p>
                                    <p class="card-text text-primary">
                                        <strong>Precio:</strong>
                                        ${{ number_format($servicio->precio_servicio, 0, ',', '.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p class="text-center">No hay servicios disponibles actualmente.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

    </div>
    </div>
    </section>

    <!-- Formulario de Reserva -->
    <section id="agendar" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Agenda tu Cita</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form method="POST" action="{{ route('citas.storeCliente') }}" id="ajaxForm" role="form"
                    enctype="multipart/form-data" class="card p-4">
                    @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido"  class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control" id="apellido" required>
                        </div>
                        <div class="mb-3">
                            <label for="nro_identificacion"  class="form-label">Nro. identificacion</label>
                            <input type="text" name="nro_identificacion" class="form-control" id="nro_identificacion" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" name="telefono" class="form-control" id="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="email"  class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_cita" class="form-label">Fecha</label>
                            <input type="date" name="fecha_cita" class="form-control" id="fecha_cita" required>
                        </div>
                        <div class="mb-3">
                            <label for="hora_cita" class="form-label">Hora</label>
                            <input type="time" name="hora_cita" class="form-control" id="hora_cita" required>
                        </div>
                        <div class="mb-3">
                            <label for="id_servicio" class="form-label">Servicio</label>
                            <select class="form-select" name="id_servicio" id="id_servicio" required>
                                <!-- Las opciones se cargarán dinámicamente -->
                                <option value="" disabled selected>Selecciona un Servicio</option>

                                @foreach ($servicios as $servicio)

                                    <option value="{{ $servicio->id }}">
                                    {{$servicio->nombre_servicio }} - ${{number_format($servicio->precio_servicio, 0, ',', '.')}}
                                    </option>
                                
                                @endforeach

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Agendar Cita</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>© 2024 Carwashappy. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>