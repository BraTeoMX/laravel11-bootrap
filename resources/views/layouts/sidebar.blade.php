<div class="sidebar">
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
        left: 0;
        height: 100%;
        width: 250px;
        /* Ancho del sidebar */
        background-color: #343a40;
        /* Color de fondo del sidebar */
        padding-top: 1rem;
        /* Espaciado superior */
    }

    .sidebar ul.navbar-nav {
        padding-left: 0;
        /* Elimina el padding izquierdo de la lista */
    }

    .sidebar .nav-link {
        color: #dee2e6;
        /* Color del texto */
    }

    .sidebar .nav-link:hover {
        background-color: #495057;
        /* Color de fondo al pasar el mouse */
    }

    .sidebar .active {
        background-color: #6c757d;
        /* Color de fondo del elemento activo */
    }

    .sidebar .bi {
        margin-right: 0.5rem;
        /* Espacio entre el ícono y el texto */
    }

    .sidebar span {
        font-size: 0.9rem;
        /* Tamaño de la fuente del texto */
    }
</style>
