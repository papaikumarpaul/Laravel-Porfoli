@extends('Layout.Main')
@section('content')
<?php
$projects = [
    [
        'title' => 'ImaxWater',
        'category' => 'laravel',
        'image' => 'images/imaxwater.png',
        'tech' => 'laravel',
        'link' => 'https://imaxwater.in'
    ],
    [
        'title' => 'Fastliq',
        'category' => 'laravel',
        'image' => 'images/Fastliq.png',
        'tech' => 'laravel',
        'link' => 'https://fastliq.com'
    ],
    [
        'title' => 'Spanvoice',
        'category' => 'wordpress',
        'image' => 'images/spanvoice.png',
        'tech' => 'Wordpress',
        'link' => 'https://spanvoice.org/'
    ],
    [
        'title' => 'Ahoitech',
        'category' => 'wordpress',
        'image' => 'images/ahoitech.png',
        'tech' => 'Wordpress',
        'link' => 'https://ahoitech.in'
    ],
    [
        'title' => 'Executivehunt',
        'category' => 'wordpress',
        'image' => 'images/executivehunt.png',
        'tech' => 'Wordpress',
        'link' => 'https://executivehunt.in'
    ],
    [
        'title' => 'promo',
        'category' => 'wordpress',
        'image' => 'images/promo.png',
        'tech' => 'Wordpress',
        'link' => 'https://fastliq.com/promo/'
    ],
    [
        'title' => 'Casalivings',
        'category' => 'wordpress',
        'image' => 'images/casalivings.png',
        'tech' => 'Wordpress',
        'link' => 'https://casalivings.in/'
    ],
];
?>
<div class="content-pages">
    <div class="sub-home-pages">
        <!-- Home Page Section -->
        <section id="home">
            <div class="title-block">
                <h2>Papai Kumar Paul</h2>
                {{-- <p>Web Developer</p> --}}
                <p class="software-title">I'm a <span id="typed-text" class="typed-underline"></span></p>

            </div>
            {{-- <div class="home-button">
                <a class="btn btn-primary " href="#contact" role="button"><i class="far fa-envelope"></i>Contact
                    Me</a>
                <a class="btn btn-primary " href="#contact" role="button"><i class="fas fa-briefcase"></i>Hire
                    Me</a>
                <a class="btn btn-primary"
                    href="https://drive.google.com/file/d/16B6y-c9OTbjHP6Ejmz4CCTCUysura4Js/view?usp=sharing"
                    role="button"><i class="fa-solid fa-file"></i>Resume</a>
            </div> --}}

        </section>

        <!-- About Me -->
        <section id="about-me">
            <div class="container">

                <div class="section-title">
                    <div class="title-main-page">
                        <div class="main-title">
                            <h4>About Me</h4>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <img src="images/HeroImage.jpg" class="img-fluid" alt="image">
                    </div>
                    <div class="col-lg-8">
                        <h3>Full Stack Web Developer & Wordpress Developer</h3>
                        <p class="about-content">
                            Hi, I'm Papai!
                            I completed my Bachelor's degree in Computer Science from the University of Burdwan. To
                            strengthen my development skills, I joined Newton School's full-stack web development
                            program, where I gained hands-on experience with technologies like Java, HTML, CSS,
                            JavaScript, React, Redux, Node.js, and MongoDB.

                            I’ve worked on various projects using these tools, which helped me build a strong interest
                            in the field of web development. Additionally, I am proficient in WordPress and Laravel,
                            allowing me to develop both dynamic websites and custom web applications.
                        </p>
                        <div class="col-lg-6">
                            <ul class="list-unstyled info-list">
                                <li><i class="bi bi-chevron-right text-primary"></i> <strong>Email:</strong>
                                    papaikumarpaul@gmail.com</li>
                                <li><i class="bi bi-chevron-right text-primary"></i> <strong>Phone:</strong> +91
                                    7362924074</li>
                                <li><i class="bi bi-chevron-right text-primary"></i> <strong>City:</strong> Paschim
                                    Medinipur, West Bengal, India</li>
                                <li><i class="bi bi-chevron-right text-primary"></i> <strong>Freelance:</strong>
                                    Available</li>
                            </ul>

                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- Skills -->
        <section id="skill">
            <div class="container">
                <div class="section-title">
                    <div class="title-main-page">
                        <div class="main-title">
                            <h4>Skills</h4>

                        </div>
                    </div>
                </div>
                <div class="row  justify-content-center text-center g-4">
                    <div class="col-6 col-md-2 mb-3">
                        <div class="skill-card text-center shadow-sm rounded p-3">
                            <img src="{{ asset('images/html.svg') }}" alt="HTML" class="img-fluid skill-icon mb-2">
                            <h6 class="mb-0">HTML</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 mb-3">
                        <div class="skill-card text-center shadow-sm rounded p-3">
                            <img src="{{ asset('images/css.svg') }}" alt="HTML" class="img-fluid skill-icon mb-2">
                            <h6 class="mb-0">CSS</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 mb-3">
                        <div class="skill-card text-center shadow-sm rounded p-3">
                            <img src="{{ asset('images/javascript.svg') }}" alt="HTML"
                                class="img-fluid skill-icon mb-2">
                            <h6 class="mb-0">JAVASCRIPT</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 mb-3">
                        <div class="skill-card text-center shadow-sm rounded p-3">
                            <img src="{{ asset('images/Wordpress.png') }}" alt="HTML" class="img-fluid skill-icon mb-2">
                            <h6 class="mb-0">WORDPRESS</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 mb-3">
                        <div class="skill-card text-center shadow-sm rounded p-3">
                            <img src="{{ asset('images/Laravel.5c1a2139.svg') }}" alt="HTML"
                                class="img-fluid skill-icon mb-2">
                            <h6 class="mb-0">LARAVEL</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 mb-3">
                        <div class="skill-card text-center shadow-sm rounded p-3">
                            <img src="{{ asset('images/Shopfy.png') }}" alt="HTML" class="img-fluid skill-icon mb-2">
                            <h6 class="mb-0">SHOPFY</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 mb-3">
                        <div class="skill-card text-center shadow-sm rounded p-3">
                            <img src="{{ asset('images/bootstrap.svg') }}" alt="HTML" class="img-fluid skill-icon mb-2">
                            <h6 class="mb-0">BOOTSTRAP</h6>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        {{-- Resume --}}
        <section id="resume">
            <div class="container">
                <div class="section-title">
                    <div class="title-main-page">
                        <div class="main-title">
                            <h4>Resume</h4>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="section-title">Summary</div>
                        <div class="timeline-entry">
                            <div class="sub-title">Papai Kumar Paul</div>
                            <p class="resumeDescription">
                                Innovative and deadline-driven developer and developing user-centered material from
                                initial concept to final, polished deliverable.
                            </p>
                        </div>

                        <div class="section-title">Education</div>
                        <div class="timeline-entry">
                            <div class="sub-title text-uppercase">Bachelor of Science</div>
                            <div class="timeline-date">2017 - 2020</div>
                            <p class="resumeDescription">The University of Burdwan, Purba Bardhaman, West Bengal.
                            </p>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <div class="section-title">Professional Experience</div>



                        <div class="timeline-entry">
                            <div class="sub-title">Frontend Developers</div>
                            <div class="timeline-date">Feb 2024 - Jun 2024</div>
                            <p class="resumeDescription">AcquX · Internship</p>
                            <p class="resumeDescription">Delhi, India</p>
                        </div>
                        <div class="timeline-entry">
                            <div class="sub-title">WordPress Developer & Laravel Developer</div>
                            <div class="timeline-date">Jun 2024 Present</div>
                            <p class="resumeDescription">Fastliq, Delhi </p>
                            <p class="resumeDescription">Delhi, India</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project -->
        <section id="project">
            <div class="container">
                <div class="section-title">
                    <div class="title-main-page">
                        <div class="main-title">
                            <h4>Project</h4>

                        </div>
                    </div>
                </div>
                <div class="text-center mb-4">
                    <button class="btn btn-outline-info filter-btn" data-filter="all">All</button>
                    <button class="btn btn-outline-info filter-btn" data-filter="wordpress">WordPress</button>
                    <button class="btn btn-outline-info filter-btn" data-filter="laravel">Laravel</button>

                </div>

                <div class="row" id="project-container">
                    @foreach ( $projects as $project )
                    <div class="col-12 col-md-6 mb-4 project-item" data-category="<?php echo $project['category']; ?>">
                        <div class="ele">
                            <div class="project-img">
                                <img src="<?php echo $project['image']; ?>" alt="">
                            </div>
                            <div class="project-data">
                                <h4>
                                    <?php echo $project['title']; ?>
                                </h4>
                                <span class="text-uppercase">
                                    <?php echo $project['tech']; ?>
                                </span>
                                <div class="project-attr">
                                    <a href="<?php echo $project['link']; ?>" target="_blank"><i
                                            class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-12 col-md-6 mb-4 project-item" data-category="wordpress">
                        <div class="ele">
                            <div class="project-img">
                                <img src="images/cv.png" alt="">
                            </div>
                            <div class="project-data">
                                <h4>Responsive Cv</h4>
                                <span>HTML, CSS and JS</span>
                                <div class="project-attr">
                                    <a href="#" target="_blank"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>


            </div>
        </section>

        <!-- what i do  -->
        <section id="whatido">
            <div class="container">
                <div class="section-title">
                    <div class="title-main-page">
                        <div class="main-title">
                            <h4>What I can Do</h4>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 iconbox">
                        <div class="icon">
                            <i class="bi bi-window"></i>
                        </div>
                        <h4 class="title">Web Design</h4>
                        <p>Web Design is not just what it looks like and feels like. Design is how it works.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 iconbox">
                        <div class="icon">
                            <i class="bi bi-hdd-rack"></i>
                        </div>
                        <h4 class="title">Web Development</h4>
                        <p>A Strategic approach to website design and development.</p>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 iconbox">
                        <div class="icon">
                            <i class="bi bi-window"></i>
                        </div>
                        <h4 class="title">Web Design</h4>
                        <p>Web Design is not just what it looks like and feels like. Design is how it works.</p>
                    </div> --}}
                </div>
            </div>
        </section>






        <!-- contact -->
        <section id="contact">
            <div class="container">
                <div class="section-title">
                    <div class="title-main-page">
                        <div class="main-title">
                            <h4>Contact Me</h4>
                            <p>Hey you, I am very much interested in speaking with you, Feel free to contact me</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="section-main-content col-wise">
                    <div class="contact-container ">

                        <div class="contact-form-container">
                            <form class="contact-form" id="form">
                                <input id="user_name" name="name" type="text" placeholder="Your Name">
                                <input id="user_email" name="input-email" type="text" placeholder="Your Email">
                                <textarea id="message" name="input-message" rows="4" cols=40
                                    placeholder="Message"></textarea>
                                <button class="btn btn-info sub-btn" onclick="submit()" type="submit">SEND
                                    MESSAGE</button>
                            </form>
                        </div>
                        <div class="my-details-container">
                            <h3> Contact Details </h3>
                            <div class="my-details-info-container">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>West Bengal, India</span>
                            </div>
                            <div class="my-details-info-container">
                                <i class="fas fa-mobile-alt"></i>
                                <span>+917362924074</span>
                            </div>
                            <div class="my-details-info-container">
                                <i class="far fa-envelope"></i>
                                <span>papaikumarpaul@gmail.com</span>
                            </div>
                        </div>
                    </div>

                    <div class="special-block-bg">
                        <div class="social-icon">
                            <h4>Follow me:</h4>
                            <ul class="social-media-link">
                                <li><a href="https://www.linkedin.com/in/papai-kumar-paul-292500232/" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://github.com/papaikumarpaul" target="_blank"><i
                                            class="fab fa-github"></i></a></li>

                                <li><a href="https://www.instagram.com/papai_kr__18/" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>

                            </ul>
                        </div>

                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="shadow rounded p-4">
                            <div class="col-lg-10 col-md-6 iconbox">
                                <div class="icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <h4 class="title">Location:</h4>
                                <p class="contact-description">Paschim Medinipur, West Bengal, India</p>
                            </div>
                            <div class="col-lg-10 col-md-6 iconbox">
                                <div class="icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <h4 class="title">Email:</h4>
                                <p class="contact-description">papaikumarpaul@gmail.com</p>
                            </div>
                            <div class="col-lg-10 col-md-6 iconbox">
                                <div class="icon">
                                    <i class="bi bi-phone"></i>
                                </div>
                                <h4 class="title">Call:</h4>
                                <p class="contact-description">+91-7362924074</p>
                            </div>
                            <div>
                                <img src="{{ asset('images/medinipur.png') }}" class="Chennai_Pinned"
                                    alt="Chennai_Pinned">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            projectItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>

@endsection