<!-- resources/views/sidebar.blade.php -->
<div class="sidebar">
    <ul>
        <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">Dashboard</a></li>
        <li><a href="{{ route('admin.users') }}" class="{{ request()->is('admin/users') ? 'active' : '' }}">Users</a></li>
        <li><a href="{{ route('admin.products') }}" class="{{ request()->is('admin/products') ? 'active' : '' }}">Products</a></li>
    </ul>
</div>
