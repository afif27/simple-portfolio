<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afif Fadilah - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-blue-600 text-white py-6">
        <nav class="container mx-auto flex justify-between items-center px-6">
            <h2 class="text-3xl font-bold">Apip<span class="text-yellow-400">Tech</span></h2>
            <button id="menu-toggle" class="md:hidden text-white text-2xl"><i class="fa-solid fa-bars"></i></button>
            <ul id="nav-menu" class="hidden md:flex space-x-6">
                <li><a href="#home" class="hover:text-yellow-300">Home</a></li>
                <li><a href="#about" class="hover:text-yellow-300">About</a></li>
                <li><a href="#portfolio" class="hover:text-yellow-300">Portfolio</a></li>
                <li><a href="#contact" class="hover:text-yellow-300">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="home" class="flex flex-col items-center text-center py-16 bg-gradient-to-r from-blue-500 to-blue-700 text-white">
        <h4 class="text-xl">Hello! My Name is</h4>
        <h1 class="text-4xl font-bold">Afif <span class="text-yellow-400">Fadilah</span></h1>
        <h3 class="text-2xl">I'm a Web Developer</h3>
        <div class="mt-6">
            <form action="mailto:istme@apiptech.com" class="flex flex-col md:flex-row gap-2">
                <input type="email" name="email" placeholder="Input your Email" required
                    class="p-3 rounded-md text-gray-900 focus:outline-none">
                <button type="submit" class="bg-yellow-400 px-5 py-3 rounded-md text-gray-900 font-bold">Let's Start</button>
            </form>
        </div>
    </section>
    
    <section id="about" class="py-16 container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <img src="img/bg-mashead.png" alt="Profile Image" class="rounded-lg shadow-md">
            <div>
                <h2 class="text-3xl font-bold">About Me</h2>
                <h5 class="text-xl text-blue-600">Web Developer & Data Analyst</h5>
                <p class="mt-4">I specialize in creating elegant, user-friendly websites and deriving meaningful insights from data.</p>
                <button class="mt-4 bg-blue-600 text-white px-5 py-2 rounded-md shadow-md hover:bg-blue-700">Let's Talk</button>
            </div>
        </div>
    </section>
    
    <section id="portfolio" class="py-16 bg-gray-200">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-6">Portfolio</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="fa-solid fa-shop text-4xl text-blue-600"></i>
                    <h5 class="text-xl font-semibold mt-2">Sales Page</h5>
                    <p class="mt-2">Menyediakan jasa pembuatan website untuk promosi bisnis.</p>
                    <a href="#" class="text-blue-600 font-semibold">Read More</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="fa-solid fa-basket-shopping text-4xl text-blue-600"></i>
                    <h5 class="text-xl font-semibold mt-2">Point Of Sale</h5>
                    <p class="mt-2">Aplikasi kasir berbasis web untuk bisnis Anda.</p>
                    <a href="#" class="text-blue-600 font-semibold">Read More</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="fa-solid fa-user-clock text-4xl text-blue-600"></i>
                    <h5 class="text-xl font-semibold mt-2">Absensi</h5>
                    <p class="mt-2">Aplikasi absensi berbasis web dengan fitur modern.</p>
                    <a href="#" class="text-blue-600 font-semibold">Read More</a>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="bg-blue-700 text-white py-6 mt-16">
        <div class="text-center">
            <p>Afif Fadilah</p>
            <p>You can Find me On:</p>
            <div class="flex justify-center space-x-4 mt-2">
                <a href="#" class="text-white text-2xl"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#" class="text-white text-2xl"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="text-white text-2xl"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <p class="mt-4">@ApipTech</p>
        </div>
    </footer>
     <!-- Modal -->
     <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2">
            <div class="flex justify-between items-center mb-4">
                <h3 id="modalTitle" class="text-xl font-bold"></h3>
                <button onclick="closeModal()" class="text-gray-600 hover:text-black">&times;</button>
            </div>
            <p id="modalContent"></p>
        </div>
    </div>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', () => {
            document.getElementById('menu').classList.toggle('hidden');
        });

        function openModal(title, content) {
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalContent').textContent = content;
            document.getElementById('modal').classList.remove('hidden');
            document.getElementById('modal').classList.add('flex');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>

    <style>
        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out;
        }
    </style>
</body>
</html>
