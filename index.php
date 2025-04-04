<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afif Fadilah - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-white text-gray-800">
    <!-- Header -->
    <header id="home" class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <nav class="flex items-center justify-between px-6 py-4">
            <h2 class="text-2xl font-bold">Apip<span class="text-yellow-300">Tech</span></h2>
            <button id="menu-toggle" class="md:hidden focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <ul id="menu" class="hidden md:flex space-x-6 items-center">
                <li><a href="#home" class="hover:text-yellow-300 transition">Home</a></li>
                <li><a href="#about" class="hover:text-yellow-300 transition">About</a></li>
                <li><a href="#portfolio" class="hover:text-yellow-300 transition">Portfolio</a></li>
                <li><a href="#contact" class="hover:text-yellow-300 transition">Contact</a></li>
            </ul>
        </nav>
        <div class="text-center py-20 px-4 animate-fade-in-up">
            <h4 class="text-xl mb-2">Hello! My Name is</h4>
            <h1 class="text-4xl md:text-5xl font-bold">Afif <span class="text-yellow-300">Fadilah</span></h1>
            <h3 class="text-2xl mt-2">I'm a Web Developer</h3>
            <form class="mt-6 flex flex-col md:flex-row justify-center gap-2" action="mailto:istme@apiptech.com">
                <input type="email" name="email" required placeholder="Input your Email"
                    class="px-4 py-2 rounded border w-full md:w-auto">
                <input type="submit" value="Let's Start"
                    class="bg-yellow-300 text-black font-semibold px-6 py-2 rounded hover:bg-yellow-400 transition">
            </form>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="py-20 px-6 bg-gray-50">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-10">
            <div class="flex-shrink-0 w-full md:w-1/2">
                <img src="img/bg-mashead.png" alt="Profile Image" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-bold mb-2">About Me</h2>
                <h5 class="text-xl font-semibold mb-4">Web Developer <span class="text-blue-600">& Data Analyst</span></h5>
                <p class="mb-4">I'm a Web Developer and Junior Data Analyst with passion for creating elegant, user-friendly websites and deriving meaningful insights from data.</p>
                <button onclick="window.location.href='mailto:istme@apiptech.com';"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded transition">Let's Talk</button>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="py-20 px-6">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold">Portfolio</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Example card -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center transition hover:-translate-y-1 hover:shadow-xl">
                <i class="fa-solid fa-shop text-4xl text-blue-600 mb-4"></i>
                <h5 class="text-xl font-semibold mb-2">Sales Page</h5>
                <p class="text-sm mb-4">Website promosi bisnis anda dengan tampilan profesional dan responsive.</p>
                <button onclick="openModal('Sales Page', 'Website promosi bisnis anda dengan tampilan profesional dan responsive.')"
                    class="text-blue-600 font-semibold hover:underline">Read More</button>
            </div>
            <!-- Add other cards similarly... -->
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 bg-blue-600 text-white text-center">
        <p class="text-xl mb-4">Senang sekali bisa menyapa anda</p>
        <a href="mailto:istme@apiptech.com"
            class="bg-white text-blue-600 font-semibold px-6 py-2 rounded hover:bg-gray-100 transition">Contact Me</a>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 text-center">
        <p class="font-bold">Afif Fadilah</p>
        <p class="mb-2">You can Find me On:</p>
        <div class="flex justify-center space-x-4 mb-2">
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <p class="text-sm">@ApipTech</p>
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
