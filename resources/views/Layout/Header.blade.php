<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Papai Kumar Paul</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/HeroImage.jpg') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- font awesom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

</head>

<body>
    <header class="header">
        <div class="header-content">
            <div class="profile-picture-block">
                <div class="my-photo">
                    <img src="{{ asset('images/HeroImage.jpg') }}" alt="Image">
                </div>
            </div>

            <!-- Header Head -->
            <div class="site-title-block">
                <div class="site-title">Papai Kumar Paul</div>
                {{-- <div class="site-para">Web Developer</div> --}}
                {{-- <div class="software-title">I'm a <span id="typed-text" class="typed-underline"></span></div> --}}
            </div>

            <!-- Navigation -->
            <div class="site-nav">
                <!-- main menu -->
                <ul class="header-main-menu" id="header-main-menu">
                    <li><a href="#home"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#about-me"><i class="fas fa-user-tie"></i> About Me</a></li>
                    <li><a href="#skill"><i class="fas fa-tools"></i> Skills</a></li>
                    <li><a href="#resume"><i class="fas fa-book-reader"></i> Resume</a></li>
                    <li><a href="#project"><i class="fas fa-business-time"></i> Projects</a></li>
                    <li><a href="#whatido"><i class="fas fa-concierge-bell"></i> Services</a></li>
                    <!-- <li><a href="#achievement"><i class="fas fa-trophy"></i> Achievements</a></li> -->
                    <li><a href="#contact"><i class="fas fa-paper-plane"></i> Contact</a></li>
                </ul>
                <div class="social-icons mt-3 iconbox-profile">
                    <a href="https://www.facebook.com/papaikumarpaul.kumar" target="_blank"
                        class="me-3 text-primary text-decoration-none">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/papaikumarpaul/" target="_blank"
                        class="me-3 text-primary text-decoration-none">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                </div>

                <!-- Designed by para -->
                <div class="copyrights">@ Design by Papai Kumar Paul.</div>
            </div>
            <!-- /Navigation -->
        </div>
    </header>
    <div class="responsive-header">
        <div class="responsive-header-name">
            <img class="responsive-logo" src="images/HeroImage.jpg" alt="" />
            Papai Kumar Paul
        </div>
        <span class="responsive-icon" id="menu-tab"><i class="fas fa-bars"></i></span>
    </div>