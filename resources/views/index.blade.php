<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kue Kita</title>
    @vite('resources/css/app.css')
    
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto my-8 px-4 sm:px-6 lg:px-8">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Selamat Datang di Kue Kita</h1>
            <p class="text-gray-600">Temukan berbagai pilihan kue tradisional dan modern dengan rasa yang istimewa di sini.</p>
            <li><a href="{{ route('login') }}" class="text-black">Login</a></li>
            <li><a href="{{ route('about') }}" class="text-black">About</a></li>
            <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mt-4">
                Lihat Produk Kami
           
        </header>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="klepon.jpg" alt="Klepon" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold text-gray-800 mb-2">Klepon</h2>
                    <p class="text-gray-600">Kue beras ketan dengan isian gula merah yang meleleh di mulut.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="onde-onde.jpg" alt="Onde-onde" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold text-gray-800 mb-2">Onde-onde</h2>
                    <p class="text-gray-600">Kue berbentuk bulat dengan isian kacang hijau yang manis dan lembut.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="kue-lapis.jpg" alt="Kue Lapis" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold text-gray-800 mb-2">Kue Lapis</h2>
                    <p class="text-gray-600">Kue berlapis-lapis dengan tekstur lembut dan rasa manis yang pas.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="brownies.jpg" alt="Brownies" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold text-gray-800 mb-2">Brownies</h2>
                    <p class="text-gray-600">Kue cokelat yang padat dengan rasa yang kaya dan tekstur yang fudgy.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="red-velvet.jpg" alt="Red Velvet" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold text-gray-800 mb-2">Red Velvet</h2>
                    <p class="text-gray-600">Kue lembut berwarna merah dengan krim keju yang manis dan lembut.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="cheesecake.jpg" alt="Cheesecake" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold text-gray-800 mb-2">Cheesecake</h2>
                    <p class="text-gray-600">Kue keju dengan tekstur lembut dan rasa creamy yang memanjakan lidah.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-4 text-center">
        <p>&copy; 2024 Kue Kita. All rights reserved.</p>
    </footer>
</body>
</html>