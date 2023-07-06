<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link{{ request()->is('dashboard*') ? ' active' : '' }}" href="{{ route('dashboard.index') }}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ request()->is('vendas*') ? ' active' : '' }}" href="{{ route('vendas.index') }}">
                    <span data-feather="file"></span>
                    Vendas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ request()->is('produtos*') ? ' active' : '' }}" href="{{ route('produtos.index') }}">
                    <span data-feather="shopping-cart"></span>
                    Produtos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ request()->is('clientes*') ? ' active' : '' }}" href="{{ route('clientes.index') }}">
                    <span data-feather="users"></span>
                    Clientes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ request()->is('usuarios*') ? ' active' : '' }}" href="{{ route('usuarios.index') }}">
                    <span data-feather="users"></span>
                    Usuarios
                </a>
            </li>
        </ul>
    </div>
</nav>
