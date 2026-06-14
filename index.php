<?php

function project($projectName, $images, $title, $tags, $description)
{
    ?>
    
    <div class="project-card">
        <div class="project-image">
            <div class="slideshow">
                <?php foreach ($images as $image): ?>
                    <img src="<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($title) ?>">
                <?php endforeach; ?>
            </div>
        </div>

        <div class="project-content">
            <h3><?= htmlspecialchars($title) ?></h3>

            <div class="project-tags">
                <?php foreach ($tags as $tag): ?>
                    <span><?= htmlspecialchars($tag) ?></span>
                <?php endforeach; ?>
            </div>

            <p><?= htmlspecialchars($description) ?></p>

            <a href="details.php?project=<?= urlencode($projectName) ?>" class="project-link">
                View More →
            </a>
        </div>
    </div>

    <?php
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleo Christine Mianggi Sibungkil | UI/UX Portfolio</title>
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>

<!-- Navigation -->
<nav>
    <div class="nav-container">
        <a href="#" class="logo">Cleo | UI/UX Portfolio</a>
        <div class="nav-links">
            <a href="#work">Work</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <!-- <div class="hero-tag">👋 Available for freelance</div> -->
            <h1>Hello, world! 👋</h1>
            <p>I'm Cleo — a Computer Science grad who thinks great design and great code should come together. I get frustrated by clunky websites, so I learned how to fix them: from UX research to responsive frontend development.</p>
            <div class="hero-buttons">
                <a href="#work" class="btn btn-primary">View Work</a>
                <a href="assets/documents/resume.pdf" download="Resume_CleoChristineMianggiSibungkil.pdf" class="btn btn-secondary">Download Resume</a>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="work" class="projects">
    <div class="container">
        <h2>📌 Selected Work</h2>
        <div class="project-grid">
            
            <!-- Project 1 -->
            <?php 
            project(
                "laidup",
                [
                    "assets/images/laidup/1.png"

                ],
                "LaidUp",
                [
                    "Full-Stack Development",
                    "Web Development",
                    "Responsive Design"
                ],
                "A license and permit management system for Laid-Up Ships developed for Jabatan Pelabuhan dan Dermaga Sabah (JPDS) under the supervision of my former workplace supervisor at JPKN."
            );

            project(
                "esokong",
                [
                    "assets/images/esokong/1.png"

                ],
                "ESokongWPSC",
                [
                    "UI Design",
                    "Figma"
                ],
                "A landing page designed for ESokongWPSC, which is a license and permit management system for the Ministry of Tourism, Culture and Environment (KePKAS) under the supervision of my former workplace supervisor at JPKN."
            );

            project(
                "bayudata",
                [
                    "assets/images/bayudata/1.jpg",
                    "assets/images/bayudata/2.jpg",
                    "assets/images/bayudata/3.jpg",
                    "assets/images/bayudata/4.jpg"
                ],
                "BayuData",
                [
                    "Frontend Development",
                    "Web Development",
                    "Responsive Design"
                ],
                "Frontend development of a Sabah state government open data platform during internship, providing access to public datasets for analysis, learning, and innovation."
            );

            project(
                "medicine-reminder-app",
                [
                    "assets/images/fyp/1.png"
                ],
                "Medicine Reminder App for Elderly and Caretakers",
                [
                    "UI Design",
                    "Figma",
                    "Android Studio",
                    "Research & Development"
                ],
                "A mobile student community app prototype designed in Figma to help students connect with clubs, manage academic responsibilities, and communicate with one another through a centralized platform."
            );

            project(
                "aurtrip",
                [
                    "assets/images/aurtrip/1.png"
                ],
                "AurTrip",
                [
                    "UI Design",
                    "Figma"
                ],
                "A mobile activity booking app prototype inspired by travel and experience platforms such as Klook, designed to help users discover, browse, and book interesting activities."
            );

            project(
                "bus-app",
                [
                    "assets/images/bus/1.png"
                ],
                "Interface Design for a Bus Ticket Booking App",
                [
                    "UI Design",
                    "Figma"
                ],
                "A mobile bus ticketing app prototype designed in Figma, allowing users to book tickets, view upcoming journeys, access travel history, and track bus locations in real time."
            );

            project(
                "student-community-app",
                [
                    "assets/images/student-app/1.png"
                ],
                "Interface Design for a Student Community App",
                [
                    "UI Design",
                    "Figma"
                ],
                "A mobile student community app prototype designed in Figma to help students connect with clubs, manage academic responsibilities, and communicate with one another through a centralized platform."
            );
            
            ?>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <div class="about-grid">
        <div style="text-align: center;">
            <h2>About Me</h2>
            <p style="margin-bottom: 1rem; padding-inline:50px;">Computer Science graduate with practical experience contributing to real-world government systems, including
feature development, UI redesign, and system improvements. Adept at bridging technical functionality with user
experience, delivering solutions that enhance usability and efficiency. Continuously building expertise in modern
web development and interface design.</p>
        </div>
        <div style="padding-top: 2rem; border-top: 1px solid #eaeaea;">
            <h3>Tools & Skills</h3>
            <div class="skill-list">
                <span>Figma</span>
                <span>PHP / Laravel</span>
                <span>Bootstrap</span>
                <span>JavaScript</span>
                <span>Wireframing</span>
                <span>Prototyping</span>
                <span>HTML/CSS</span>
                <span>MySQL</span>
                <span>Git/GitHub</span>
                <span>Usability Testing</span>
            </div>
        </div>
            <div class="certifications">
                <h3>Certifications</h3>
                <div class="cert-grid">
                <div class="cert-item">
                    <span class="cert-badge">
                        <svg width="28" height="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                    </span>
                    <div style="flex: 1;">
                        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.5rem;">
                            <div>
                                <strong>Google UX Design Certificate</strong>
                                <span class="cert-date">2026</span>
                            </div>
                            <a href="https://www.coursera.org/account/accomplishments/specialization/16VGGF0DWCYX" target="_blank" rel="noopener noreferrer" class="cert-verify-link" title="Verify this certificate">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                    <polyline points="15 3 21 3 21 9" />
                                    <line x1="10" y1="14" x2="21" y2="3" />
                                </svg>
                                <span class="verify-text">Show Credential</span>
                            </a>
                        </div>
                        <p class="cert-skill">Completed a 8-course program covering: design thinking (empathize → define → ideate → prototype → test), UX research (interviews, usability studies, synthesis), and core concepts (user-centered design, accessibility, equity-focused design).</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="education">
                <h3>Education</h3>
                <div class="education-item">
                    <div class="education-header">
                        <img src="assets/images/ukm.png" alt="UKM Logo" class="education-logo">

                        <div>
                            <div class="education-degree">
                                Bachelor of Computer Science with Honours
                            </div>
                            <div class="education-school">
                                Universiti Kebangsaan Malaysia (UKM), Bangi, Selangor | 2021 – 2025
                            </div>
                        </div>
                    </div>

                    <div class="education-details">
                        <span class="education-badge">CGPA: 3.6</span>
                        <span class="education-badge">Mobile Application Development Club Member</span>
                    </div>

                    <p class="education-note">
                    • Majored in Software Technology
                    </p>
                    <p class="education-note">
                    • Final Year Project: Medicine reminder Android app for the elderly using Android Studio
                    </p>
                </div>
                <div class="education-item">
                    <div class="education-header">
                        <img src="assets/images/uitm.png" alt="UiTM Logo" class="education-logo">

                        <div>
                            <div class="education-degree">
                                Foundation in Science
                            </div>
                            <div class="education-school">
                                Universiti Teknologi MARA (UiTM), Dengkil, Selangor | 2020 – 2021
                            </div>
                        </div>
                    </div>

                    <div class="education-details">
                        <span class="education-badge">CGPA: 3.93</span>
                    </div>

                    <p class="education-note">
                    • Participated an in-campus volunteering activity
                    </p>
                </div>
            </div>
        </div>


    </div>
</section>

<section id="contact" class="contact">
    <div class="container">
        <h2>Let’s Connect!</h2>
        <p>I’m always happy to connect with other developers, designers, or anyone working on cool ideas. Don’t hesitate to reach out 👋</p>
        <a href="https://www.linkedin.com/in/cleosibungkil" target="_blank" class="btn-linkedin">
    <svg class="linkedin-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path fill="#0A66C2" d="M20.45 20.45h-3.56v-5.57c0-1.33-.02-3.05-1.86-3.05-1.86 0-2.14 1.45-2.14 2.95v5.67H9.33V9h3.41v1.56h.05c.47-.9 1.63-1.86 3.35-1.86 3.58 0 4.24 2.36 4.24 5.43v6.32zM5.34 7.43a2.07 2.07 0 1 1 0-4.14 2.07 2.07 0 0 1 0 4.14zM7.12 20.45H3.56V9h3.56v11.45z"/>
    </svg>
    <span>Connect on LinkedIn</span>
</a>
    </div>
</section>

<!-- Footer -->
<?php include 'footer.php' ?>

</body>
</html>

<script>
document.querySelectorAll('.project-card').forEach(card => {
    const slideshow = card.querySelector('.slideshow');
    if (!slideshow) return;

    const slides = slideshow.children.length;
    let index = 0;
    let interval;

    card.addEventListener('mouseenter', () => {
        interval = setInterval(() => {
            index = (index + 1) % slides;
            slideshow.style.transform = `translateX(-${index * 100}%)`;
        }, 1200);
    });

    card.addEventListener('mouseleave', () => {
        clearInterval(interval);
        index = 0;
        slideshow.style.transform = 'translateX(0)';
    });
});
</script>