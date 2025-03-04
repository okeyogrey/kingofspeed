<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - King Of Speed Collections</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-gray-800">King Of Speed</a>
            <div>
                <a href="/shop" class="text-gray-700 mx-3">Shop</a>
                <a href="/cart" class="text-gray-700 mx-3">Cart</a>
                <a href="/login" class="text-gray-700 mx-3">Login</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto p-6">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4 mt-10">
        <p>&copy; 2025 King Of Speed Collections. All rights reserved.</p>
    </footer>

</body>
</html>
