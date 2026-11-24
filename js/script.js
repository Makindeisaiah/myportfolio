
/* =========================================
   MAKINDE ISAIAH O. — PORTFOLIO JAVASCRIPT
========================================= */

document.addEventListener("DOMContentLoaded", () => {

    console.log("Makinde Isaiah Portfolio Loaded");

    /* =====================================
       1. LANGUAGE TRANSLATIONS
    ===================================== */

    const translations = {

        en: {
            navHome: "Home",
            navAbout: "About",
            navSkills: "Skills",
            navProjects: "Projects",
            navContact: "Contact",
            navCTA: "Let's Talk ↗",

            availability: "Available for opportunities",
            intro: "HELLO, I'M MAKINDE ISAIAH O.",

            heroTitle: `Building digital
                <span>experiences</span>
                that matter.`,

            heroDescription:
                "Full-Stack Web Developer & UI/UX Designer creating functional, intuitive and modern digital products.",

            heroWork: "Explore My Work ↗",
            heroContact: "Get In Touch",

            focus: "MY FOCUS",
            focusDescription: "Turning ideas into digital products.",

            aboutLabel: "01 / ABOUT ME",

            aboutTitle: `Design-minded developer.<br>
                <span>Developer-minded designer.</span>`,

            aboutDescription:
                "I'm a Full-Stack Web Developer and UI/UX Designer passionate about building digital products that combine thoughtful design with functional technology. I enjoy transforming ideas into practical, user-focused experiences.",

            locationLabel: "LOCATION",
            educationLabel: "EDUCATION",

            skillsLabel: "02 / WHAT I DO",
            skillsTitle: "Skills & Expertise.",

            projectsLabel: "03 / SELECTED WORK",
            projectsTitle: "Projects I've worked on.",

            projectsDescription:
                "A selection of digital products I've designed and developed.",

            educationLabelSection: "04 / EDUCATION",
            educationTitle: "My Academic Background.",

            contactLabel: "05 / GET IN TOUCH",
            contactTitle: "Have a project in mind?",

            contactDescription:
                "I'm open to internship opportunities, junior developer roles, freelance projects and collaborations.",

            footerText: "All rights reserved.",
            backToTop: "Back to top ↑"
        },

        fr: {
            navHome: "Accueil",
            navAbout: "À propos",
            navSkills: "Compétences",
            navProjects: "Projets",
            navContact: "Contact",
            navCTA: "Discutons ↗",

            availability: "Disponible pour de nouvelles opportunités",
            intro: "BONJOUR, JE SUIS MAKINDE ISAIAH O.",

            heroTitle: `Je crée des expériences
                <span>numériques</span>
                qui font la différence.`,

            heroDescription:
                "Développeur Web Full-Stack et Designer UI/UX, je crée des produits numériques modernes, fonctionnels et intuitifs.",

            heroWork: "Découvrir mes projets ↗",
            heroContact: "Me contacter",

            focus: "MON OBJECTIF",
            focusDescription: "Transformer les idées en produits numériques.",

            aboutLabel: "01 / À PROPOS",

            aboutTitle: `Développeur sensible au design.<br>
                <span>Designer sensible au développement.</span>`,

            aboutDescription:
                "Je suis développeur Web Full-Stack et designer UI/UX, passionné par la création de produits numériques qui associent un design réfléchi à une technologie fonctionnelle. J'aime transformer les idées en expériences pratiques et centrées sur l'utilisateur.",

            locationLabel: "LOCALISATION",
            educationLabel: "FORMATION",

            skillsLabel: "02 / MES SERVICES",
            skillsTitle: "Compétences et expertise.",

            projectsLabel: "03 / PROJETS SÉLECTIONNÉS",
            projectsTitle: "Mes réalisations.",

            projectsDescription:
                "Une sélection de produits numériques que j'ai conçus et développés.",

            educationLabelSection: "04 / FORMATION",
            educationTitle: "Mon parcours académique.",

            contactLabel: "05 / CONTACT",
            contactTitle: "Vous avez un projet en tête ?",

            contactDescription:
                "Je suis ouvert aux opportunités de stage, aux postes de développeur junior, aux projets freelance et aux collaborations.",

            footerText: "Tous droits réservés.",
            backToTop: "Retour en haut ↑"
        }

    };


    /* =====================================
       2. LANGUAGE SWITCHING
    ===================================== */

    const languageToggle =
        document.getElementById("languageToggle");

    const translatableElements =
        document.querySelectorAll("[data-i18n]");


    function changeLanguage(language) {

        const selectedLanguage =
            translations[language] ? language : "en";

        translatableElements.forEach(element => {

            const translationKey =
                element.getAttribute("data-i18n");

            const translation =
                translations[selectedLanguage][translationKey];

            if (translation !== undefined) {

                // These two headings intentionally contain HTML.
                if (
                    translationKey === "heroTitle" ||
                    translationKey === "aboutTitle"
                ) {
                    element.innerHTML = translation;
                } else {
                    element.textContent = translation;
                }

            }

        });

        document.documentElement.lang = selectedLanguage;

        if (languageToggle) {
            languageToggle.textContent =
                selectedLanguage === "en" ? "FR" : "EN";

            languageToggle.setAttribute(
                "aria-label",
                selectedLanguage === "en"
                    ? "Switch to French"
                    : "Passer en anglais"
            );
        }

        sessionStorage.setItem(
            "portfolioLanguage",
            selectedLanguage
        );

    }


    if (languageToggle) {

        languageToggle.addEventListener("click", () => {

            const currentLanguage =
                document.documentElement.lang || "en";

            const newLanguage =
                currentLanguage === "en" ? "fr" : "en";

            changeLanguage(newLanguage);

        });

    }


    // Restore the language selected during this session.
    const savedLanguage =
        sessionStorage.getItem("portfolioLanguage") || "en";

    changeLanguage(savedLanguage);


    /* =====================================
       3. SMOOTH NAVIGATION
    ===================================== */

    document.querySelectorAll('a[href^="#"]').forEach(link => {

        link.addEventListener("click", event => {

            const href = link.getAttribute("href");

            if (!href || href === "#") return;

            const target = document.querySelector(href);

            if (target) {

                event.preventDefault();

                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });

            }

        });

    });


    /* ========================================
       4. FOOTER YEAR
    ===================================== */

    const footerYear = document.querySelector("footer");

    if (footerYear) {

        const yearText = footerYear.querySelector("p");

        if (yearText) {

            yearText.innerHTML =
                yearText.innerHTML.replace(
                    /©\s*\d{4}/,
                    `© ${new Date().getFullYear()}`
                );

        }

    }

});
