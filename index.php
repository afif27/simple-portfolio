<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afif Fadilah - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#20b2aa',
                        dark: '#191919',
                        darker: '#101010',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwind">
        @layer components {
            .nav-link {
                @apply relative font-semibold text-lg text-white hover:text-primary transition-all duration-300;
            }
            .nav-link:hover::after {
                @apply w-full;
            }
            .nav-link::after {
                content: '';
                @apply absolute w-0 h-0.5 bg-primary bottom-[-5px] left-0 transition-all duration-300;
            }
            .btn {
                @apply bg-primary text-white font-bold py-2 px-6 rounded-full border-2 border-transparent transition-all duration-300 shadow-lg hover:scale-105 hover:shadow-xl cursor-pointer;
            }
            .service-card {
                @apply h-[350px] w-full sm:w-[300px] p-5 bg-dark rounded-xl m-4 relative text-center transition-all duration-300 shadow-lg hover:-translate-y-2 hover:shadow-xl flex flex-col justify-between;
            }
        }
    </style>
</head>

<body class="bg-darker text-white overflow-x-hidden scroll-smooth">
    <header id="home" class="w-full h-screen bg-cover bg-center bg-no-repeat relative" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.8)), url(img/bg-mashead.png)">
        <nav class="flex items-center justify-between p-6 lg:px-[8%] relative z-10 flex-wrap">
            <h2 class="text-white text-3xl md:text-4xl font-bold cursor-pointer">Apip<span class="text-primary">Tech</span></h2>
            
            <div class="block md:hidden cursor-pointer hamburger">
                <span class="block w-6 h-0.5 bg-white my-1.5"></span>
                <span class="block w-6 h-0.5 bg-white my-1.5"></span>
                <span class="block w-6 h-0.5 bg-white my-1.5"></span>
            </div>
            
            <ul class="hidden md:flex justify-between items-center nav-menu">
                <li class="mx-4"><a href="#home" class="nav-link">Home</a></li>
                <li class="mx-4"><a href="#about" class="nav-link">About</a></li>
                <li class="mx-4"><a href="#portfolio" class="nav-link">Portfolio</a></li>
                <li class="mx-4"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            
            <div class="hidden md:block btn">Helloasas!!</div>
        </nav>
        
        <div class="absolute top-1/2 left-[8%] transform -translate-y-1/2 w-4/5 md:w-3/5 content">
            <h4 class="text-primary text-base md:text-lg uppercase tracking-wider">Hello! My Name is</h4>
            <h1 class="text-white text-4xl sm:text-5xl md:text-6xl font-bold my-3 leading-tight shadow-md">Afif <span class="text-primary">Fadilah</span></h1>
            <h3 class="text-white text-xl md:text-2xl mb-8">I'm a Web Developer</h3>
            
            <div class="news">
                <form action="mailto:istme@apiptech.com" class="w-full max-w-md relative">
                    <input type="email" name="email" placeholder="Input your Email" id="mail" required class="w-full py-3.5 px-4 pr-32 border-2 border-primary outline-none rounded-full text-base">
                    <input type="submit" value="Let's Start" name="submit" class="absolute right-1.5 top-1.5 py-2.5 px-5 rounded-full bg-primary text-white border-none outline-none shadow-md cursor-pointer font-bold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                </form>
            </div>
        </div>
    </header>

    <section id="about" class="py-24 bg-dark">
        <div class="w-[90%] max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="flex-1 min-w-[300px] max-w-[500px] overflow-hidden rounded-2xl shadow-xl">
                <img src="img/bg-mashead.png" alt="Profile Image" class="w-full h-auto transition-all duration-300 hover:scale-105">
            </div>
            
            <div class="flex-1 min-w-[300px] p-5 text-center md:text-left">
                <h2 class="text-white text-4xl md:text-5xl mb-5 capitalize relative pb-3 inline-block">
                    About Me
                    <span class="absolute bottom-0 left-0 md:left-auto w-16 h-1 bg-primary"></span>
                </h2>
                <h5 class="text-white text-xl md:text-2xl mb-5 capitalize">Web Developer <span class="text-primary">& Data Analyst</span></h5>
                <p class="text-gray-200 leading-relaxed text-base md:text-lg mb-8">
                    I'm a Web Developer and Junior Data Analyst with passion for creating elegant, user-friendly websites and deriving meaningful insights from data. With expertise in various web technologies and analytical tools, I can help bring your digital vision to life.
                </p>
                <button type="button" onclick="window.location.href='mailto:istme@apiptech.com';" class="bg-primary text-white font-bold py-3 px-8 rounded-full border-2 border-transparent transition-all duration-300 shadow-md hover:bg-transparent hover:border-primary hover:text-primary hover:-translate-y-1 hover:shadow-lg text-base">
                    Let's Talk
                </button>
            </div>
        </div>
    </section>

    <section id="portfolio" class="py-24 bg-darker w-full">
        <div class="title mb-16">
            <h2 class="text-white text-4xl md:text-5xl text-center mx-auto relative pb-5 w-fit">
                Portfolio
                <span class="absolute w-20 h-1 bg-primary bottom-0 left-1/2 transform -translate-x-1/2"></span>
            </h2>
        </div>
        
        <div class="flex justify-center items-center flex-wrap gap-6 p-5">
            <div class="service-card">
                <i class="fa-solid fa-shop text-5xl text-center text-primary my-6 block"></i>
                <h5 class="text-white text-xl mb-4 service-title" data-id="sales">Sales Page</h5>
                <div class="pra">
                    <p class="text-gray-300 text-base leading-relaxed mb-6">Menyediakan jasa pembuatan website untuk promosi bisnis anda</p>
                    <a href="#" class="bg-primary text-white font-bold py-2 px-6 rounded-full border-2 border-transparent inline-block transition-all duration-300 hover:bg-transparent hover:border-primary hover:text-primary open-modal" data-id="sales">Read More</a>
                </div>
            </div>
            
            <div class="service-card">
                <i class="fa-solid fa-basket-shopping text-5xl text-center text-primary my-6 block"></i>
                <h5 class="text-white text-xl mb-4 service-title" data-id="pos">Point Of Sale</h5>
                <div class="pra">
                    <p class="text-gray-300 text-base leading-relaxed mb-6">Menyediakan jasa pembuatan aplikasi point of sale untuk pengolahan penjualan anda</p>
                    <a href="#" class="bg-primary text-white font-bold py-2 px-6 rounded-full border-2 border-transparent inline-block transition-all duration-300 hover:bg-transparent hover:border-primary hover:text-primary open-modal" data-id="pos">Read More</a>
                </div>
            </div>
            
            <div class="service-card">
                <i class="fa-solid fa-people-roof text-5xl text-center text-primary my-6 block"></i>
                <h5 class="text-white text-xl mb-4 service-title" data-id="company">Company Profile</h5>
                <div class="pra">
                    <p class="text-gray-300 text-base leading-relaxed mb-6">Menyediakan jasa pembuatan website untuk profile perusahaan anda</p>
                    <a href="#" class="bg-primary text-white font-bold py-2 px-6 rounded-full border-2 border-transparent inline-block transition-all duration-300 hover:bg-transparent hover:border-primary hover:text-primary open-modal" data-id="company">Read More</a>
                </div>
            </div>
            
            <div class="service-card">
                <i class="fa-solid fa-user-clock text-5xl text-center text-primary my-6 block"></i>
                <h5 class="text-white text-xl mb-4 service-title" data-id="attendance">Absensi</h5>
                <div class="pra">
                    <p class="text-gray-300 text-base leading-relaxed mb-6">Menyediakan jasa pembuatan absensi berbasis web</p>
                    <a href="#" class="bg-primary text-white font-bold py-2 px-6 rounded-full border-2 border-transparent inline-block transition-all duration-300 hover:bg-transparent hover:border-primary hover:text-primary open-modal" data-id="attendance">Read More</a>
                </div>
            </div>
            
            <div class="service-card">
                <i class="fa-solid fa-heart text-5xl text-center text-primary my-6 block"></i>
                <h5 class="text-white text-xl mb-4 service-title" data-id="wedding">Wedding Invitations</h5>
                <div class="pra">
                    <p class="text-gray-300 text-base leading-relaxed mb-6">Menyediakan jasa pembuatan undangan digital dalam bentuk website</p>
                    <a href="https://perginikahan.apiptech.com" class="bg-primary text-white font-bold py-2 px-6 rounded-full border-2 border-transparent inline-block transition-all duration-300 hover:bg-transparent hover:border-primary hover:text-primary" target="_blank">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="w-full bg-cover bg-center bg-fixed h-[300px] flex items-center flex-col justify-center text-center" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(img/bg-mashead.png)">
        <p class="text-white text-3xl md:text-4xl font-bold mb-8 max-w-[80%]">Senang sekali bisa menyapa anda</p>
        <a href="mailto:istme@apiptech.com" class="bg-primary text-white font-bold py-3 px-8 rounded-full border-2 border-transparent transition-all duration-300 shadow-md hover:bg-transparent hover:border-primary hover:-translate-y-1 hover:shadow-lg inline-block">Contact Me</a>
    </section>

    <footer class="relative w-full py-16 bg-dark flex flex-col items-center justify-center">
        <p class="text-3xl text-white mb-5 font-bold">Afif Fadilah</p>
        <p class="text-lg text-gray-300 text-center mb-5 max-w-lg">You can Find me On:</p>
        <div class="flex mb-8">
            <a href="#" class="w-12 h-12 flex items-center justify-center bg-primary rounded-full mx-2 text-white text-xl transition-all duration-300 shadow-md hover:-translate-y-1 hover:shadow-lg">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="#" class="w-12 h-12 flex items-center justify-center bg-primary rounded-full mx-2 text-white text-xl transition-all duration-300 shadow-md hover:-translate-y-1 hover:shadow-lg">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="#" class="w-12 h-12 flex items-center justify-center bg-primary rounded-full mx-2 text-white text-xl transition-all duration-300 shadow-md hover:-translate-y-1 hover:shadow-lg">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
        <p class="text-primary mt-5 text-base">@ApipTech</p>
    </footer>

    <!-- Portfolio Modal -->
    <div id="portfolioModal" class="fixed hidden inset-0 z-50 w-full h-full overflow-auto bg-black bg-opacity-70 animate-fadeIn">
        <div class="bg-dark mx-auto my-[10%] p-8 border-2 border-primary rounded-xl w-[80%] max-w-2xl shadow-2xl relative animate-slideIn">
            <span class="text-primary text-3xl font-bold absolute top-4 right-6 transition-all duration-300 hover:text-white hover:scale-110 cursor-pointer close">&times;</span>
            <h3 id="modalTitle" class="text-center text-2xl text-white font-bold mb-5 border-b-2 border-primary pb-4"></h3>
            <p id="modalDescription" class="text-left text-white text-lg leading-relaxed py-5"></p>
        </div>
    </div>

    <script>
        // Add animations to Tailwind config
        if (typeof tailwind !== 'undefined') {
            tailwind.config.theme.extend.keyframes = {
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' }
                },
                slideIn: {
                    '0%': { transform: 'translateY(-50px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' }
                }
            };
            
            tailwind.config.theme.extend.animation = {
                fadeIn: 'fadeIn 0.3s',
                slideIn: 'slideIn 0.3s'
            };
        }

        // Modal data and functionality
        const modalData = {
            sales: {
                title: 'Sales Page',
                desc: 'Website promosi bisnis anda dengan tampilan profesional dan responsive, cocok untuk memperkenalkan produk/jasa anda secara online.'
            },
            pos: {
                title: 'Point of Sale',
                desc: 'Aplikasi kasir modern berbasis web yang membantu proses penjualan dan laporan stok barang secara realtime.'
            },
            company: {
                title: 'Company Profile',
                desc: 'Website untuk menampilkan profil perusahaan, layanan, visi misi, dan portofolio profesional untuk menarik calon klien.'
            },
            attendance: {
                title: 'Absensi',
                desc: 'Aplikasi absensi online berbasis web dengan fitur clock-in/out, laporan kehadiran, dan dashboard admin.'
            }
        };

        const modal = document.getElementById('portfolioModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalDesc = document.getElementById('modalDescription');
        const closeBtn = document.querySelector('.close');

        document.querySelectorAll('.open-modal').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const id = this.dataset.id;
                modalTitle.innerText = modalData[id].title;
                modalDesc.innerText = modalData[id].desc;
                modal.style.display = 'block';
            });
        });

        closeBtn.onclick = () => modal.style.display = 'none';
        window.onclick = (e) => {
            if (e.target === modal) modal.style.display = 'none';
        };
        
        // Mobile navigation
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');
        
        if (hamburger) {
            hamburger.addEventListener('click', () => {
                hamburger.classList.toggle('active');
                navMenu.classList.toggle('hidden');
                navMenu.classList.toggle('flex');
                navMenu.classList.toggle('flex-col');
                navMenu.classList.toggle('w-full');
                navMenu.classList.toggle('bg-dark');
                navMenu.classList.toggle('absolute');
                navMenu.classList.toggle('top-16');
                navMenu.classList.toggle('left-0');
                navMenu.classList.toggle('py-4');
            });
        }
    </script>
</body>

</html>