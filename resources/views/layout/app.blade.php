<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3" style="width: 250px;">
            <h3>Admin Panel</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link text-white">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link text-white">Users</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link text-white">Products</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="p-4" style="width: 100%;">
            <header class="mb-4">
                <h2>@yield('title')</h2>
            </header>
            @yield('content')
        </div>
    </div>
</body>
</html>
