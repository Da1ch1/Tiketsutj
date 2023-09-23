<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class="bi bi-speedometer2" style="font-size: 1.2rem;"></i><span>Dashboard</span>
    </a>
</li>

<li class="side-menus {{ Request::is('usuarios') ? 'active' : '' }}">
    <a class="nav-link" href="/usuarios">
        <i class="bi bi-people" style="font-size: 1.2rem;"></i><span>Usuarios</span>
    </a>
</li>

<li class="side-menus {{ Request::is('roles') ? 'active' : '' }}">
    <a class="nav-link" href="/roles">
        <i class="bi bi-toggles" style="font-size: 1.2rem;"></i><span>Roles</span>
    </a>
</li>

<li class="side-menus {{ Request::is('soportes') ? 'active' : '' }}">
    <a class="nav-link" href="/soportes">
        <i class="bi bi-display" style="font-size: 1.2rem;"></i><span>Soporte</span>
    </a>
</li>

<li class="side-menus {{ Request::is('clientepolizas') ? 'active' : '' }}">
    <a class="nav-link" href="/clientepolizas">
        <i class="bi bi-person-workspace" style="font-size: 1.2rem;"></i><span>Espacios</span>
    </a>
</li>

<li class="side-menus ">
    <a class="nav-link" href="#">
        <i class="bi bi-cash-stack" style="font-size: 1.2rem;"></i><span>Finanzas</span>
    </a>
</li>

<li class="side-menus ">
    <a class="nav-link" href="#">
        <i class="bi bi-people" style="font-size: 1.2rem;"></i><span>Quejas</span>
    </a>
</li>

