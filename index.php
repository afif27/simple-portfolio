<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Afif Fadilah's Portfolio - Web Developer & Data Analyst">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Afif Fadilah - Web Developer Portfolio</title>
</head>
<body>
    <header class="hero">
        <nav>
            <h2 class="logo">Apip<span>Tech</span></h2>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
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
            <img src="img/bg-mashead.png" alt="Afif Fadilah" loading="lazy">
            <div class="about-text">
                <h2>About Me</h2>
                <h5>Web Developer <span>& Data Analyst</span></h5>
                <p>I'm a Web Developer and Junior Data Analyst with experience in creating modern web solutions.</p>
                <button type="button" onclick="window.location.href='mailto:istme@apiptech.com';">Let's Talk</button>
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <div class="title">
            <h2>Portfolio</h2>
        </div>
        <div class="portfolio-grid">
            <div class="card">
                <i class="fa-solid fa-shop" aria-hidden="true"></i>
                <h5>Sales Page</h5>
                <div class="card-content">
                    <p>Menyediakan jasa pembuatan website untuk promosi bisnis anda</p>
                    <a href="#" class="button read-more" data-title="Sales Page" data-content="Professional sales pages designed to convert visitors into customers with modern designs and optimized performance.">Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-basket-shopping" aria-hidden="true"></i>
                <h5>Point Of Sale</h5>
                <div class="card-content">
                    <p>Menyediakan jasa pembuatan aplikasi point of sale untuk pengolahan penjualan anda</p>
                    <a href="#" class="button read-more" data-title="Point Of Sale" data-content="Custom POS systems tailored to your business needs with inventory management, sales tracking, and reporting features.">Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-people-roof" aria-hidden="true"></i>
                <h5>Company Profile</h5>
                <div class="card-content">
                    <p>Menyediakan jasa pembuatan website untuk profile perusahaan anda</p>
                    <a href="#" class="button read-more" data-title="Company Profile" data-content="Professional company profile websites that showcase your brand and services with responsive design and modern aesthetics.">Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-user-clock" aria-hidden="true"></i>
                <h5>Absensi</h5>
                <div class="card-content">
                    <p>Menyediakan jasa pembuatan absensi berbasis web</p>
                    <a href="#" class="button read-more" data-title="Absensi" data-content="Web-based attendance systems with employee tracking, reporting, and management features.">Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-heart" aria-hidden="true"></i>
                <h5>Wedding Invitations</h5>
                <div class="card-content">
                    <p>Menyediakan jasa pembuatan undangan digital dalam bentuk website</p>
                    <a href="https://perginikahan.apiptech.com" class="button" target="_blank" rel="noopener">Visit Site</a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <p>Senang sekali bisa menyapa anda</p>
        <a href="mailto:istme@apiptech.com" class="button-dua">Contact Me</a>
    </section>

    <footer>
        <p>Afif Fadilah</p>
        <p>You can Find me On:</p>
        <div class="social">
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <p class="end">@ApipTech</p>
    </footer>

    <!-- Single Modal for all cards -->
    <div id="portfolioModal" class="modal">
        <div class="modal-content">
            <span class="close" aria-label="Close modal">&times;</span>
            <div class="modal-header">
                <h3 id="modalTitle"></h3>
            </div>
            <div class="modal-body">
                <p id="modalContent"></p>
            </div>
        </div>
    </div>

    <script>
        // Modal functionality
        const modal = document.getElementById("portfolioModal");
        const modalTitle = document.getElementById("modalTitle");
        const modalContent = document.getElementById("modalContent");
        const closeBtn = document.querySelector(".close");
        
        document.querySelectorAll(".read-more").forEach(button => {
            button.addEventListener("click", function(e) {
                e.preventDefault();
                modalTitle.textContent = this.dataset.title;
                modalContent.textContent = this.dataset.content;
                modal.style.display = "block";
            });
        });
        
        closeBtn.addEventListener("click", () => {
            modal.style.display = "none";
        });
        
        window.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.style.display = "none";
            }
        });
    </script>
</body>
</html>