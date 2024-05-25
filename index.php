<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express</title>
    <link rel="icon" sizes="196x196" type="image/x-icon" href="assets/image/LOGO.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-...your-hash-code..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style/main.css">
    <link rel="stylesheet" href="assets/style/Home.css">
</head>

<body>

    <?php 
     require_once("./assets/template/header.html");
    ?>

    <section class="main-section section">
        <div class="container">
            <div class="box">
                <img src="assets/image/LOGO2.png" alt="Site logo">
            </div>
            <div class="box">
                <h1>Travel is easier than ever.</h1>
                <p>Express is a website dedicated to providing exceptional services to travelers.</p>
            </div>
        </div>

    </section>

    <section>
        <hr />
        <div class="tickets">
            <h1>Total tickets</h1>
            <p>0</p>
            <i class="fas fa-ticket-alt"></i>
        </div>
        <hr />
    </section>

    <section class="features-section section">
        <div class="container" id="appointments">
            <div class="travel-cards bus">
                <div class="slideshow-container">
                    <!-- Bus slides -->
                    <div class="BusSlides fade">
                        <div class="numbertext">1 / 4</div>
                        <img src="assets/image/CTA.png" alt="CTA">
                    </div>
                    <div class="BusSlides fade">
                        <div class="numbertext">2 / 4</div>
                        <img src="assets/image/eg.png" alt="EG">
                    </div>
                    <div class="BusSlides fade">
                        <div class="numbertext">3 / 4</div>
                        <img src="assets/image/go.png" alt="GO">
                    </div>
                    <div class="BusSlides fade">
                        <div class="numbertext">4 / 4</div>
                        <img src="assets/image/white.png" alt="White">
                    </div>
                </div>

                <h2>Bus</h2>
                <p>Travel by bus</p>
                <a href="#" class="btn btn-primary">Go to</a>
            </div>
            <div class="travel-cards train">
                <div class="slideshow-container">
                    <!-- Train slides -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 4</div>
                        <img src="assets/image/MWASLAT MASR.png" alt="MWASLAT MASR">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 4</div>
                        <img src="assets/image/LRT.png" alt="LRT">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 4</div>
                        <img src="assets/image/horas.png" alt="Horas">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 4</div>
                        <img src="assets/image/ENR.png" alt="ENR">
                    </div>
                </div>

                <h2>Train</h2>
                <p>Travel by train</p>
                <a href="#" class="btn btn-primary">Go to</a>
            </div>
        </div>
    </section>

    <section class="service-section section">
        <div class="container" id="appointments">
            <div class="cards">
                <button type="button">
                    <i class="fas fa-map-marker-alt service-icon"></i>
                    <h3>Tracking</h3>
                    <p>Enhancing your travel with accurate real-time tracking of buses and trains.</p>
                </button>
            </div>
            <div class="cards">
                <button type="button">
                    <i class="fas fa-ticket-alt service-icon"></i>
                    <h3>Tickets</h3>
                    <p>Quick ticket purchase with easy payment process.</p>
                </button>
            </div>
            <div class="cards">
                <button type="button">
                    <i class="far fa-clock service-icon"></i>
                    <h3>Appointments</h3>
                    <p>Providing accurate information about flight schedules to facilitate planning.</p>
                </button>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="btns">
                <a href="#" class="btn btn-primary">Contact us</a>
                <a href="#" class="btn btn-primary">Report a problem</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div>
                <p>&copy; 2024 Wasal feen. All rights reserved.</p>
                <span>
                    <a href="#">Privacy Policy</a> |
                    <a href="#">Terms of Service</a>
                </span>
            </div>
            <div>
                <!-- Social media icons -->
                <i class="fab fa-facebook"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fas fa-envelope"></i>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-...your-hash-code..." crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="assets/script/home.js"></script>

</body>

</html>