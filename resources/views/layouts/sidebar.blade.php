<div class="sidebar">
    <!-- Botón para mostrar/ocultar sidebar en dispositivos móviles -->
    <button class="btn btn-dark d-md-none toggle-sidebar">
        <i class="bi bi-list"></i>
    </button>

    <ul class="navbar-nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">
                <i class="bi bi-house-door"></i>
                <span>Inicio</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-person"></i>
                <span>Perfil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-gear"></i>
                <span>Configuración</span>
            </a>
        </li>
        <!-- Otros elementos de menú -->
    </ul>
</div>

<style>
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
        position: absolute;
        top: 1rem;
        left: 1rem;
        z-index: 1000;
    }

    /* Media query para mostrar el botón de alternar en pantallas pequeñas */
    @media (max-width: 767px) {
        .toggle-sidebar {
            display: block;
        }
    }

    /* Media query para ocultar el sidebar en pantallas pequeñas */
    @media (max-width: 767px) {
        .sidebar {
            left: -250px; /* Ocultar el sidebar por completo en pantallas pequeñas */
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
        });
    });
</script>
