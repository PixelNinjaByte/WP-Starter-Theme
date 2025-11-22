<?php get_header(); ?>

<link rel="stylesheet" href="assets/css/style.css" />
<section class="hero hero-animated">
    <div class="hero-content">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
        <a href="#features" class="btn-primary">Explore Features</a>
    </div>
</section>


<section id="features" class="features">
    <div class="container">
        <h2>Theme Features</h2>
        <div class="feature-grid">

            <div class="feature-card">
                <h3>Lightweight</h3>
                <p>Clean code, no bloat, built for fast performance.</p>
            </div>

            <div class="feature-card">
                <h3>Developer-Friendly</h3>
                <p>Modular structure with organized files.</p>
            </div>

            <div class="feature-card">
                <h3>Customizable</h3>
                <p>Easily extendable Customizer settings and layout.</p>
            </div>

        </div>
    </div>
</section>
<canvas id="particle-bg"></canvas>

<?php get_footer(); ?>
