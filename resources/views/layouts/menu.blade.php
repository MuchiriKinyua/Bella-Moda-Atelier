<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('bridals.index') }}" class="nav-link {{ Request::is('bridals*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Bridals</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('jewelleries.index') }}" class="nav-link {{ Request::is('jewelleries*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Jewelleries</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('kids.index') }}" class="nav-link {{ Request::is('kids*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Kids</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('kings.index') }}" class="nav-link {{ Request::is('kings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Kings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('lingeries.index') }}" class="nav-link {{ Request::is('lingeries*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Lingeries</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('shoes.index') }}" class="nav-link {{ Request::is('shoes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Shoes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('wears.index') }}" class="nav-link {{ Request::is('wears*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Wears</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Permissions</p>
    </a>
</li>
