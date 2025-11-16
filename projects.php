<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - <?php echo $site_title; ?></title>
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
                <a href="index.php" class="nav-link">Home</a>
                <a href="about.php" class="nav-link">About</a>
                <a href="projects.php" class="nav-link active">Projects</a>
                <a href="contact.php" class="nav-link">Contact</a>
                <button id="theme-toggle" class="theme-toggle">🌙</button>
            </div>
        </nav>
    </header>

    <main>
        <section class="projects">
            <div class="container">
                <h1>My Projects</h1>
                <div class="projects-grid">
                    <div class="project-card">
                        <h3>Self-Hosted Cloud</h3>
                        <p>Docker-based cloud infrastructure with automated deployment</p>
                        <span class="tech">Docker | Linux | Python</span>
                    </div>
                    <div class="project-card">
                        <h3>Network Monitoring Tool</h3>
                        <p>Real-time network analysis and security monitoring</p>
                        <span class="tech">Python | Linux | Security</span>
                    </div>
                    <div class="project-card">
                        <h3>Automated Backup System</h3>
                        <p>Cross-platform backup solution with encryption</p>
                        <span class="tech">Bash | Python | Security</span>
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