<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - 4business</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .admin-sidebar {
            width: 250px;
            background: var(--color-dark);
            color: white;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 20px 0;
        }
        .admin-sidebar a {
            display: block;
            padding: 10px 20px;
            color: #ccc;
            text-decoration: none;
        }
        .admin-sidebar a:hover, .admin-sidebar a.active {
            background: rgba(255,255,255,0.1);
            color: white;
        }
        .admin-content {
            margin-left: 250px;
            padding: 20px;
        }
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
    </style>
</head>
<body>

<div class="admin-sidebar">
    <div style="padding: 0 20px 20px; font-size: 1.2rem; font-weight: bold; border-bottom: 1px solid #333; margin-bottom: 10px;">
        Admin Panel
    </div>
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
    <a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">Products</a>
    <a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">Categories</a>
    <a href="#" onclick="alert('Coming Soon')">Leads</a>
    <a href="#" onclick="alert('Coming Soon')">Settings</a>
    <div style="margin-top: 50px; border-top: 1px solid #333; padding-top: 10px;">
        <a href="{{ url('/') }}">View Site</a>
    </div>
</div>

<div class="admin-content">
    @yield('content')
</div>

</body>
</html>
