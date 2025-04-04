<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Afif Fadilah - Portfolio</title>
</head>
<body>
    <header class="hero" id="home">
        <nav>
            <h2 class="logo">Apip<span>Tech</span></h2>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#portfolio" class="nav-link">Portfolio</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="btn">Hello!!</div>
        </nav>
        <div class="content">
            <h4>Hello! My Name is</h4>
            <h1>Afif <span>Fadilah</span></h1>
            <h3>I'm a Web Developer</h3>
            <div class="news">
                <form action="mailto:istme@apiptech.com">
                    <input type="email" name="email" placeholder="Input your Email" id="mail" required>
                    <input type="submit" value="Let's Start" name="submit">
                </form>
            </div>
        </div>
    </header>

    <section class="about" id="about">
        <div class="main">
            <div class="about-img">
                <img src="img/bg-mashead.png" alt="Profile Image">
            </div>
            <div class="about-text">
                <h2>About Me</h2>
                <h5>Web Developer <span>& Data Analyst</span></h5>
                <p>I'm a Web Developer and Junior Data Analyst with passion for creating elegant, user-friendly websites and deriving meaningful insights from data. With expertise in various web technologies and analytical tools, I can help bring your digital vision to life.</p>
                <button type="button" onclick="window.location.href='mailto:istme@apiptech.com';">Let's Talk</button>
            </div>
        </div>
    </section>

    <section class="service" id="portfolio">
        <div class="title">
            <h2>Portfolio</h2>
        </div>
        <div class="box">
            <div class="card">
                <i class="fa-solid fa-shop"></i>
                <h5 class="service-title" data-id="sales">Sales Page</h5>
                <div class="pra">
                    <p>Menyediakan jasa pembuatan website untuk promosi bisnis anda</p>
                    <a href="#" class="button open-modal" data-id="sales">Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-basket-shopping"></i>
                <h5 class="service-title" data-id="pos">Point Of Sale</h5>
                <div class="pra">
                    <p>Menyediakan jasa pembuatan aplikasi point of sale untuk pengolahan penjualan anda</p>
                    <a href="#" class="button open-modal" data-id="pos">Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-people-roof"></i>
                <h5 class="service-title" data-id="company">Company Profile</h5>
                <div class="pra">
                    <p>Menyediakan jasa pembuatan website untuk profile perusahaan anda</p>
                    <a href="#" class="button open-modal" data-id="company">Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-user-clock"></i>
                <h5 class="service-title" data-id="attendance">Absensi</h5>
                <div class="pra">
                    <p>Menyediakan jasa pembuatan absensi berbasis web</p>
                    <a href="#" class="button open-modal" data-id="attendance">Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-heart"></i>
                <h5 class="service-title" data-id="wedding">Wedding Invitations</h5>
                <div class="pra">
                    <p>Menyediakan jasa pembuatan undangan digital dalam bentuk website</p>
                    <a href="https://perginikahan.apiptech.com" class="button" target="_blank">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-me" id="contact">
        <p>Senang sekali bisa menyapa anda</p>
        <a href="mailto:istme@apiptech.com" class="button-dua">Contact Me</a>
    </section>

    <footer>
        <p>Afif Fadilah</p>
        <p>You can Find me On:</p>
        <div class="social">
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <p class="end">@ApipTech</p>
    </footer>

    <!-- Modal-->
    <div id="serviceModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">
                <p id="modalTitle"></p>
            </div>
            <div class="modal-body">
                <p id="modalContent"></p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>