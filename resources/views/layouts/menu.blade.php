<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt text-success"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('bridals.index') }}" class="nav-link {{ Request::is('bridals*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-ring text-success"></i>
        <p>Bridals</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('jewelleries.index') }}" class="nav-link {{ Request::is('jewelleries*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-gem text-success"></i>
        <p>Jewelleries</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('kids.index') }}" class="nav-link {{ Request::is('kids*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-child text-success"></i>
        <p>Kids</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('kings.index') }}" class="nav-link {{ Request::is('kings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-crown text-success"></i>
        <p>Kings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('lingeries.index') }}" class="nav-link {{ Request::is('lingeries*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-female text-success"></i>
        <p>Lingeries</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('shoes.index') }}" class="nav-link {{ Request::is('shoes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-shoe-prints text-success"></i>
        <p>Shoes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('wears.index') }}" class="nav-link {{ Request::is('wears*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tshirt text-success"></i>
        <p>Wears</p>
    </a>
</li>

<li class="nav-item has-treeview {{ Request::is('roles*') || Request::is('permissions*') || Request::is('user*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ Request::is('roles*') || Request::is('permissions*') || Request::is('user*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users-cog" style="color: green;"></i>
            <p>
                Users and Controls
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users-cog" style="color: green;"></i>
                    <p>Roles</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-key" style="color: green;"></i>
                    <p>Permissions</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users" style="color: green;"></i>
                    <p>Users</p>
                </a>
            </li>
        </ul>
    </li>