<div class="sidebar-container">
    <!-- Botón para mostrar/ocultar sidebar en todos los dispositivos -->
    <button class="btn btn-light toggle-sidebar">
        <i class="bi bi-list"> Menu</i>
    </button>

    <div class="sidebar">
        <ul class="navbar-nav flex-column ps-3"> <!-- Aquí agregamos la clase ps-3 -->
            <li class="nav-item">
                <br>
                <br>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">
                    <i class="mdi mdi-google-downasaur custom-icon-size"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">
                    <i class="mdi mdi-egg-off custom-icon-size"></i>
                    <span>Categoria</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">
                    <i class="mdi mdi-radiology-box-outline custom-icon-size"></i>
                    <span>Productos</span>
                </a>
            </li>
            <!-- Otros elementos de menú -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('sales.index') }}">
                    <i class="mdi mdi-ghost-off-outline custom-icon-size"></i>
                    <span>Registro de ventas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-centos custom-icon-size"></i>
                    <span>lorep men up</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-cookie-alert-outline custom-icon-size"></i>
                    <span>lorep men up</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-cow-off custom-icon-size"></i>
                    <span>lorep men up</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-virus-outline custom-icon-size"></i>
                    <span>lorep men up</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<style>

    .custom-icon-size {
        font-size: 22px; /* Cambia este valor al tamaño deseado */
    }
    .sidebar-container {
        position: relative;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: -250px; /* Inicialmente oculto fuera de la pantalla */
        height: 100%;
        width: 250px;
        background-color: #343a40;
        padding-top: 1rem;
        transition: left 0.3s ease; /* Transición suave al mostrar/ocultar */
        z-index: 999; /* Asegurar que esté sobre otros contenidos */
    }

    .sidebar.open {
        left: 0; /* Mostrar el sidebar cuando está abierto */
    }

    .sidebar ul.navbar-nav {
        padding-left: 0;
    }

    .sidebar .nav-link {
        color: #dee2e6;
    }

    .sidebar .nav-link:hover {
        background-color: #495057;
    }

    .sidebar .active {
        background-color: #6c757d;
    }

    .sidebar .bi {
        margin-right: 0.5rem;
    }

    .sidebar span {
        font-size: 0.9rem;
    }

    /* Estilos para el botón de alternar */
    .toggle-sidebar {
        display: block;
        position: fixed;
        top: 1rem;
        left: 1rem;
        z-index: 1000;
    }

    .toggle-sidebar.active {
        background-color: #6c757d; /* Cambiar el color del botón cuando el sidebar está visible */
    }

    /* Media query para mostrar el sidebar en pantallas pequeñas */
    @media (max-width: 767px) {
        .sidebar {
            left: -250px; /* Ocultar el sidebar por completo en pantallas pequeñas */
        }
    }

    /* Media query para mostrar el sidebar y ocultar el botón en pantallas medianas y grandes */
    @media (min-width: 768px) {
        .sidebar {
            left: -250px; /* Ocultar el sidebar por completo en pantallas medianas y grandes */
        }

        .sidebar.open {
            left: 0; /* Mostrar el sidebar cuando está abierto */
        }

        .toggle-sidebar {
            display: block; /* Mostrar el botón de alternar en pantallas medianas y grandes */
        }
    }
</style>

<!-- Scripts -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Obtener referencia al botón de alternar y al sidebar
        const toggleButton = document.querySelector('.toggle-sidebar');
        const sidebar = document.querySelector('.sidebar');

        // Escuchar clics en el botón de alternar
        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('open'); // Alternar la clase 'open' en el sidebar
            toggleButton.classList.toggle('active'); // Alternar la clase 'active' en el botón
        });
    });
</script>
