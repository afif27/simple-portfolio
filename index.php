<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Portfolio</title>
</head>
<body>
    <div class="hero">
        <nav>
            <h2 class="logo"><p class="font-weight-bold">Apip<span>Tech</span></p></h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portofolio</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
            <div class="btn">Hello!!</div>
        </nav>
        <div class="content">
            <h4>Hello! My Name is</h4>
            <h1>Afif <span>Fadilah</span></h1>
            <h3>I'm a Web Developer</h3>
            <div class="news">
                <form action="mailto:istme@apiptech.com">
                    <input type="email" name="email" placeholder="input your Email" id="mail">
                    <input type="submit" value="Lets to Start" name="submit">
                </form>
            </div>
        </div>
    </div>

    <div class="about" id="about">
        <div class="main">
            <img src="img/bg-mashead.png" alt="">
            <div class="about-text">
                <h2>About Me</h2>
                <h5>Web Developer <span>& Data Analyst</span></h5>
                <p>I'm a Web Developer and Junior Data Analyst </p>
                <button type="button" onclick="window.location.href='mailto:istme@apiptech.com';" >Let's Talk</button>
            </div>
        </div>
    </div>

    <div class="service" id="portfolio">
        <div class="title">
            <h2>Portfolio</h2>
        </div>
        <div class="box">
            <div class="card">
                <i class="fa-solid fa-shop"></i>
                <h5 id="judul1">Sales Page</h5>
                <div class="pra">
                    <p>Menyediakan jasa pembuatan website untuk promosi bisnis anda</p>
                    <p style="text-align:center;"></p>
                    <a href="#" class="button" id="myBtn" name="openModal">Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-basket-shopping"></i>
                <h5 id="judul2">Point Of Sale</h5>
                <div class="pra">
                    <p>Menyediakan jasa pembuatan aplikasi point of sale untuk pengolahan bisnis anda</p>
                    <p style="text-align:center;"></p>
                    <a href="#" class="button" id="myBtn" >Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-people-roof"></i>
                <h5 id="judul3">Company Profile</h5>
                <div class="pra">
                    <p>Menyediakan jasa pembuatan website untuk profile perusahaan anda</p>
                    <p style="text-align:center;"></p>
                    <a href="#" class="button" id="myBtn">Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-user-clock"></i>
                <h5 id="judul4">Absensi</h5>
                <div class="pra">
                    <p>Menyediakan jasa pembuatan absensi berbasis web</p>
                    <p style="text-align:center;"></p>
                    <a href="#" class="button" id="myBtn">Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-user-clock"></i>
                <h5 id="judul4">wedding invitations website</h5>
                <div class="pra">
                    <p>Menyediakan jasa pembuatan undangan digital dalam bentuk website</p>
                    <p style="text-align:center;"></p>
                    <a href="https://perginikahan.apiptech.com" class="button" id="myBtn" target="_blank">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-me" id="contact">
        <p>Senang sekali bisa menyapa anda</p>
        <a href="mailto:istme@apiptech.com" class="button-dua">Contact Me</a>
    </div>
    <footer>
        <p>Afif Fadilah</p>
        <p>You can Find me On:</p>
        <div class="social">
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
        </div>
        <p class="end">@ApipTech</p>
    </footer>
    <!-- Modal-->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-header">
            <p id="judul"></p>
        </div>
        <div class="modal-body">
            <p id="isi">Menyediakan jasa pembuatan website untuk profile peruhahaan / kantor</p>
        </div>
        </div>
    </div>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-header">
            <p id="judul"></p>
        </div>
        <div class="modal-body">
            <p id="isi">Menyediakan jasa pembuatan website untuk promosi bisnis anda</p>
        </div>
        </div>
    </div>
    <!--end modal-->
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        // Get the button that opens the modal
        var btn = document.getElementsByName("openModal");
        var text = document.getElementById("judul1").textContent;
        document.getElementById("judul").innerHTML = text;  
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
        }
        </script>
</body>
</html>