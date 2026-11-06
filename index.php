<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Michael L. San Juan's personal portfolio showcasing web development, UI design, and 2D/3D art.">
    <title>My Portfolio | San Juan Michael L.</title>
    <link rel="stylesheet" href="style.css?v=4">
</head>
<body>

    <!-- NAVIGATION -->
    <header class="site-header">
        <nav class="navbar container">
            <a class="logo" href="#home">My<span>Portfolio</span></a>

            <button class="menu-toggle" id="menuToggle"
                aria-label="Toggle navigation"
                aria-expanded="false"
                aria-controls="navLinks"
                type="button">☰</button>

            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <!-- HOME / HERO -->
        <section class="hero" id="home">
            <div class="container hero-content">
                <div class="hero-text">
                    <p class="eyebrow">HELLO, I'M</p>
                    <h1>SAN JUAN <span>MICHAEL</span></h1>
                    <h2>IT Student | Aspiring Web Developer and 2D/3D Artist</h2>

                    <p class="hero-description">
                        I'm passionate about creating clean, responsive,
                        and user-friendly websites. I enjoy turning ideas
                        into functional and beautiful web experiences.
                        I also do 2D and 3D art, which I enjoy the most.
                    </p>

                    <div class="hero-actions">
                        <a href="#projects" class="button button-primary">
                            View My Projects →
                        </a>
                        <a href="#contact" class="button button-outline">
                            Contact Me
                        </a>
                    </div>
                </div>

                <div class="hero-art">
                    <div class="profile-frame">
                        <img src="images/profile.jpg"
                            alt="Michael's profile picture"
                            class="profile-picture">
                    </div>

                    <span class="spark spark-one">✦</span>
                    <span class="spark spark-two">♡</span>
                    <span class="spark spark-three">〰</span>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="section about" id="about">
            <div class="container about-grid">
                <div class="about-text">
                    <p class="eyebrow">GET TO KNOW ME</p>
                    <h2 class="section-title">About <span>Me</span></h2>

                    <p>
                        I'm an IT student with a strong interest in web
                        development, UI designing, and 2D/3D arts.
                        I enjoy learning new tools and building projects
                        that help me improve my technical skills.
                    </p>

                    <div class="facts">
                        <span>🎓 IT Student</span>
                        <span>💻 Web Developer | 2D/3D Artist | UI Designer</span>
                        <span>📍 Philippines</span>
                    </div>
                </div>

                <div class="quick-card">
                    <p class="eyebrow">A LITTLE ABOUT ME</p>
                    <h3>Quick Facts</h3>
                    <p><strong>Name:</strong> Michael L. San Juan</p>
                    <p><strong>Email:</strong> sanjuan386@gmail.com</p>
                    <p><strong>Location:</strong> Philippines</p>
                    <p><strong>Interests:</strong> Web Development, Art, and UI Design</p>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="section skills" id="skills">
            <div class="container">
                <p class="eyebrow">WHAT I KNOW</p>
                <h2 class="section-title">My <span>Skills</span></h2>

                <p class="section-intro">
                    Technologies and tools I am learning and using.
                </p>

                <div class="skill-list">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>Blender</span>
                    <span>Figma</span>
                    <span>Git</span>
                    <span>Ibis Paint</span>
                </div>
            </div>
        </section>


<!-- PROJECTS -->
<section class="section projects" id="projects">
    <div class="container">
        <p class="eyebrow">A FEW THINGS I'VE BUILT</p>
        <h2 class="section-title">My <span>Projects</span></h2>

        <p class="section-intro">
            Explore my websites and creative projects.
        </p>

        <div class="project-grid">

            <!-- PROJECT 1: STREETFLEX -->
            <article class="project-card">
                <div class="live-preview">
                    <a href="https://streetflex.vercel.app/index.html"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="Visit StreetFlex website">
                        <img src="images/streetflex.jpg"
                             alt="Screenshot preview of the StreetFlex website">
                    </a>
                </div>

                <div class="project-body">
                    <p class="project-category">WEB DEVELOPMENT</p>
                    <h3>StreetFlex</h3>
                    <p>
                        A website I developed, showcasing my web
                        design and development skills.
                    </p>
                    <a href="https://streetflex.vercel.app/index.html"
                       target="_blank" rel="noopener noreferrer"
                       class="project-link">
                        Visit StreetFlex ↗
                    </a>
                </div>
            </article>

            <!-- PROJECT 2: CARSELL -->
            <article class="project-card">
                <div class="live-preview">
                    <a href="https://carsell-seven.vercel.app/home"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="Visit CarSell website">
                        <img src="images/carsell.jpg"
                             alt="Screenshot preview of the CarSell website">
                    </a>
                </div>

                <div class="project-body">
                    <p class="project-category">WEB APPLICATION</p>
                    <h3>CarSell</h3>
                    <p>
                        A car selling website built with React, showcasing
                        my front-end development skills.
                    </p>
                    <a href="https://carsell-seven.vercel.app/home"
                       target="_blank" rel="noopener noreferrer"
                       class="project-link">
                        Visit CarSell ↗
                    </a>
                </div>
            </article>

            <!-- PROJECT 3: GENSHIN IMPACT GUIDE -->
            <article class="project-card">
                <div class="live-preview">
                    <a href="https://iframe-website-rbvd.vercel.app/"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="Visit Genshin Impact Guide website">
                        <img src="images/genshin.png"
                             alt="Genshin Impact Guide website preview">
                    </a>
                </div>

                <div class="project-body">
                    <p class="project-category">WEB DEVELOPMENT</p>
                    <h3>Genshin Impact Guide</h3>
                    <p>
                        A Genshin Impact guide website featuring
                        character information, weapons, events,
                        news, trailers, and useful game resources.
                    </p>
                    <a href="https://iframe-website-rbvd.vercel.app/"
                       target="_blank" rel="noopener noreferrer"
                       class="project-link">
                        Visit Genshin Guide ↗
                    </a>
                </div>
            </article>

            <!-- PROJECT 4: BLENDER 3D ENVIRONMENT -->
            <article class="project-card">
                <div class="live-preview">
                    <a href="images/board.gif"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="View Blender 3D environment">
                        <img src="images/board.gif"
                             alt="Blender 3D floating island environment">
                    </a>
                </div>

                <div class="project-body">
                    <p class="project-category">3D ART / BLENDER</p>
                    <h3>Floating Island Environment</h3>
                    <p>
                        A 3D environment created using Blender,
                        featuring a floating island, rocky mountains,
                        vegetation, trees, and a small ancient temple.
                    </p>
                    <a href="images/board.gif"
                       target="_blank" rel="noopener noreferrer"
                       class="project-link">
                        View Full Project ↗
                    </a>
                </div>
            </article>

            <!-- PROJECT 5: FIGMA 1 -->
            <article class="project-card">
                <div class="live-preview">
                    <a href="images/figma1v.gif"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="View Figma design 1">
                        <img src="images/figma1v.gif"
                             alt="Figma UI design preview 1">
                    </a>
                </div>

                <div class="project-body">
                    <p class="project-category">UI DESIGN / FIGMA</p>
                    <h3>Figma Design 1</h3>
                    <p>
                        A UI design prototype created in Figma.
                    </p>
                    <a href="images/figma1v.gif"
                       target="_blank" rel="noopener noreferrer"
                       class="project-link">
                        View Full Project ↗
                    </a>
                </div>
            </article>

            <!-- PROJECT 6: FIGMA 2 -->
            <article class="project-card">
                <div class="live-preview">
                    <a href="images/figma2v.gif"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="View Figma design 2">
                        <img src="images/figma2v.gif"
                             alt="Figma UI design preview 2">
                    </a>
                </div>

                <div class="project-body">
                    <p class="project-category">UI DESIGN / FIGMA</p>
                    <h3>Figma Design 2</h3>
                    <p>
                        A UI design prototype created in Figma.
                    </p>
                    <a href="images/figma2v.gif"
                       target="_blank" rel="noopener noreferrer"
                       class="project-link">
                        View Full Project ↗
                    </a>
                </div>
            </article>

        </div>
    </div>
</section>


        <!-- CONTACT -->
        <section class="section contact" id="contact">
            <div class="container contact-grid">
                <div class="contact-info">
                    <p class="eyebrow">LET'S CONNECT</p>
                    <h2 class="section-title">Contact <span>Me</span></h2>

                    <p>
                        Feel free to reach out if you have any questions
                        or want to discuss a project.
                    </p>

                    <ul class="contact-details">
                        <li>
                            <span class="contact-icon">✉</span>
                            <a href="mailto:sanjuan386@gmail.com">
                                sanjuan386@gmail.com
                            </a>
                        </li>

                        <li>
                            <span class="contact-icon">☎</span>
                            <span>+63 912 345 6789</span>
                        </li>

                        <li>
                            <span class="contact-icon">⌖</span>
                            <span>Philippines</span>
                        </li>
                    </ul>
                </div>

                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <input type="text" id="name" name="name"
                            placeholder="Your Name"
                            autocomplete="name" required>

                        <input type="email" id="email" name="email"
                            placeholder="Your Email"
                            autocomplete="email" required>
                    </div>

                    <textarea id="message" name="message" rows="5"
                        placeholder="Your Message" required></textarea>

                    <button type="submit" class="button button-primary">
                        Send Message →
                    </button>

                    <p class="form-note" id="formStatus" aria-live="polite">
                        This opens a ready-to-send email draft to me.
                    </p>
                </form>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container footer-inner">
            <p>
                © <span id="year"></span> Michael L. San Juan. All rights reserved.
            </p>
            <a href="#home">Back to top ↑</a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>