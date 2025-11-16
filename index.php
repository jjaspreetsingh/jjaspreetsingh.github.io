<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="nav-brand">
                <span class="logo">JS</span>
                <span class="name">Jaspreet Singh</span>
            </div>
            <div class="nav-links">
                <a href="index.php" class="nav-link active">Home</a>
                <a href="about.php" class="nav-link">About</a>
                <a href="projects.php" class="nav-link">Projects</a>
                <a href="contact.php" class="nav-link">Contact</a>
                <button id="theme-toggle" class="theme-toggle">🌙</button>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">Jaspreet Singh</h1>
                    <h2 class="hero-subtitle">INTP Developer & Problem Solver</h2>
                    <p class="hero-description">Analytical thinker passionate about Linux systems, Python development, and self-hosting solutions</p>
                    
                    <div class="hero-buttons">
                        <a href="projects.php" class="btn btn-primary">View Projects</a>
                        <a href="contact.php" class="btn btn-secondary">Get In Touch</a>
                    </div>
                    
                    <div class="social-links">
                        <a href="https://github.com/jjaspreetsingh" target="_blank" class="social-link">GitHub</a>
                        <a href="https://linkedin.com/in/jjaspreetsingh" target="_blank" class="social-link">LinkedIn</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="skills">
            <div class="container">
                <h2>Analytical Strengths</h2>
                <div class="skills-grid">
                    <div class="skill-card">
                        <h3>🧠 Problem Solving</h3>
                        <p>Breaking complex problems into logical components</p>
                    </div>
                    <div class="skill-card">
                        <h3>⚡ Quick Learning</h3>
                        <p>Rapidly adapting to new technologies and concepts</p>
                    </div>
                    <div class="skill-card">
                        <h3>🔍 Attention to Detail</h3>
                        <p>Meticulous approach to debugging and optimization</p>
                    </div>
                    <div class="skill-card">
                        <h3>💻 Technical Depth</h3>
                        <p>Deep understanding of systems and architectures</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Jaspreet Singh. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>