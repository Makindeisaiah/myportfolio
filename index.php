
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Makinde Isaiah O. | Full-Stack Developer & UI/UX Designer</title>

    <meta name="description" content="Makinde Isaiah O. is a Full-Stack Web Developer and UI/UX Designer based in Abidjan, Côte d'Ivoire.">
    <meta name="theme-color" content="#10111b">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- NAVIGATION -->
    <header class="navbar">
        <a href="#home" class="logo">M<span>.</span>ISAIAH</a>

        <nav aria-label="Main navigation">
            <a href="#home" data-i18n="navHome">Home</a>
            <a href="#about" data-i18n="navAbout">About</a>
            <a href="#skills" data-i18n="navSkills">Skills</a>
            <a href="#projects" data-i18n="navProjects">Projects</a>
            <a href="#contact" data-i18n="navContact">Contact</a>
        </nav>

        <div class="nav-actions">
            <button class="language-toggle" id="languageToggle" type="button">
                FR
            </button>

            <a href="#contact" class="nav-button" data-i18n="navCTA">
                Let's Talk ↗
            </a>
        </div>
    </header>

    <main>

        <!-- HERO -->
        <section class="hero" id="home">

            <div class="hero-content">

                <span class="availability">
                    <span class="dot"></span>
                    <span data-i18n="availability">Available for opportunities</span>
                </span>

                <p class="intro" data-i18n="intro">
                    HELLO, I'M MAKINDE ISAIAH O.
                </p>

                <h1 data-i18n="heroTitle">
                    Building digital
                    <span>experiences</span>
                    that matter.
                </h1>

                <p class="hero-description" data-i18n="heroDescription">
                    Full-Stack Web Developer & UI/UX Designer creating functional, intuitive and modern digital products.
                </p>

                <div class="hero-buttons">
                    <a href="#projects" class="primary-button" data-i18n="heroWork">
                        Explore My Work ↗
                    </a>

                    <a href="#contact" class="secondary-button" data-i18n="heroContact">
                        Get In Touch
                    </a>
                </div>

                <div class="hero-socials">
                    <a href="https://www.linkedin.com/in/isaiah-makinde-0203b0228" target="_blank" rel="noopener noreferrer">LinkedIn ↗</a>
                    <a href="https://github.com/Makindeisaiah" target="_blank" rel="noopener noreferrer">GitHub ↗</a>
                    <a href="https://www.behance.net/isaiaholuwato" target="_blank" rel="noopener noreferrer">Behance ↗</a>
                </div>

            </div>

            <div class="hero-side">
                <div class="hero-card">

                    <!-- Add your professional photo here -->
                    <div class="profile-image">
                        <img src="assets/images/profile.jpg"
                             alt="Makinde Isaiah O.">
                    </div>

                    <span data-i18n="focus">MY FOCUS</span>

                    <h3>Design.</h3>
                    <h3>Develop.</h3>
                    <h3 class="purple">Deliver.</h3>

                    <p data-i18n="focusDescription">
                        Turning ideas into digital products.
                    </p>

                </div>
            </div>

        </section>

        <!-- ABOUT -->
        <section class="about" id="about">

            <p data-i18n="aboutLabel">01 / ABOUT ME</p>

            <h2 data-i18n="aboutTitle">
                Design-minded developer.<br>
                <span>Developer-minded designer.</span>
            </h2>

            <p data-i18n="aboutDescription">
                I'm a Full-Stack Web Developer and UI/UX Designer passionate about building digital products that combine thoughtful design with functional technology. I enjoy transforming ideas into practical, user-focused experiences.
            </p>

            <div class="about-details">
                <div>
                    <span data-i18n="locationLabel">LOCATION</span>
                    <h3>Abidjan, Côte d'Ivoire</h3>
                </div>

                <div>
                    <span data-i18n="educationLabel">EDUCATION</span>
                    <h3>HND Computer Engineering</h3>
                </div>
            </div>

        </section>

        <!-- SKILLS -->
        <section class="skills" id="skills">

            <p data-i18n="skillsLabel">02 / WHAT I DO</p>

            <h2 data-i18n="skillsTitle">Skills & Expertise.</h2>

            <div class="skills-grid">

                <article class="skill-card">
                    <span>01</span>
                    <h3>Frontend Development</h3>
                    <p>HTML, CSS, JavaScript, responsive web development.</p>
                </article>

                <article class="skill-card">
                    <span>02</span>
                    <h3>Backend Development</h3>
                    <p>PHP, MySQL, SQL, database management and server-side development.</p>
                </article>

                <article class="skill-card">
                    <span>03</span>
                    <h3>UI/UX Design</h3>
                    <p>Figma, wireframing, interface design and interactive prototyping.</p>
                </article>

                <article class="skill-card">
                    <span>04</span>
                    <h3>CMS & No-Code</h3>
                    <p>WordPress, Webflow and website management.</p>
                </article>

            </div>

        </section>

        <!-- PROJECTS -->
        <section class="projects" id="projects">

            <p data-i18n="projectsLabel">03 / SELECTED WORK</p>

            <h2 data-i18n="projectsTitle">Projects I've worked on.</h2>

            <p class="section-description" data-i18n="projectsDescription">
                A selection of digital products I've designed and developed.
            </p>

            <div class="project-grid">

                <article class="project-card">
                    <span>01 / EVENT TECHNOLOGY</span>
                    <h3>Ticketa</h3>
                    <p>End-to-end event ticketing and management ecosystem.</p>
                    <div class="project-tags">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>UI/UX</span>
                    </div>
                    <small>Full-Stack Development & UI/UX Design</small>
                </article>

                <article class="project-card">
                    <span>02 / AVIATION TECHNOLOGY</span>
                    <h3>PaceJet</h3>
                    <p>Premium private jet charter booking app concept.</p>
                    <div class="project-tags">
                        <span>Figma</span>
                        <span>Prototyping</span>
                        <span>UI/UX</span>
                    </div>
                    <small>UI/UX Design Only</small>
                </article>

                <article class="project-card">
                    <span>03 / FINTECH</span>
                    <h3>MagicPay</h3>
                    <p>All-in-one digital wallet and financial services app concept.</p>
                    <div class="project-tags">
                        <span>Figma</span>
                        <span>Fintech</span>
                        <span>UI/UX</span>
                    </div>
                    <small>UI/UX Design Only</small>
                </article>

                <article class="project-card">
                    <span>04 / DIGITAL MEDIA</span>
                    <h3>De Saint's Parrot</h3>
                    <p>Nigerian news publishing and content management platform.</p>
                    <div class="project-tags">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>CMS</span>
                    </div>
                    <small>Full-Stack Development</small>
                    <a href="https://dsparrot.com" target="_blank" rel="noopener noreferrer">
                        Visit Live Website ↗
                    </a>
                </article>

            </div>

        </section>

        <!-- EDUCATION -->
        <section class="education" id="education">

            <p data-i18n="educationLabelSection">04 / EDUCATION</p>

            <h2 data-i18n="educationTitle">My Academic Background.</h2>

            <div class="education-card">
                <span>2025</span>
                <h3>Higher National Diploma (HND)</h3>
                <p>Computer Engineering</p>
                <p>D.S. Adegbenro ICT Polytechnic, Itori, Ogun State, Nigeria.</p>
            </div>

        </section>

        <!-- CONTACT -->
        <section class="contact" id="contact">

            <p data-i18n="contactLabel">05 / GET IN TOUCH</p>

            <h2 data-i18n="contactTitle">Have a project in mind?</h2>

            <p data-i18n="contactDescription">
                I'm open to internship opportunities, junior developer roles, freelance projects and collaborations.
            </p>

            <div class="contact-links">

                <a href="mailto:makindeisaiah2002@gmail.com">
                    Email Me ↗
                </a>

                <a href="https://wa.me/2250502111286" target="_blank" rel="noopener noreferrer">
                    WhatsApp ↗
                </a>

                <a href="https://www.linkedin.com/in/isaiah-makinde-0203b0228" target="_blank" rel="noopener noreferrer">
                    LinkedIn ↗
                </a>

            </div>

        </section>

    </main>

    <footer>
        <p>© 2026 Makinde Isaiah O. <span data-i18n="footerText">All rights reserved.</span></p>
        <a href="#home" data-i18n="backToTop">Back to top ↑</a>
    </footer>

    <script src="js/script.js"></script>

</body>
</html>
