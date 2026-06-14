<?php

include 'projects.php';

$project_name = $_GET['project'];

$project = getProjectData($projects,$project_name);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details | <?php echo $project['title'] ?></title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            background-color: #ffffff;
            color: #1a1a1a;
            line-height: 1.6;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Navigation */
        nav {
            padding: 24px 0;
            border-bottom: 1px solid #eaeaea;
            background-color: white;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            text-decoration: none;
            color: #1a1a1a;
        }

        .back-link {
            text-decoration: none;
            color: #4a4a4a;
            font-weight: 500;
        }

        .back-link:hover {
            color: #1a1a1a;
        }

        /* Hero Section */
        .case-hero {
            padding: 60px 0 40px;
            background-color: #f8f9fa;
        }

        .case-category {
            display: inline-block;
            background-color: #eaeaea;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 1.5rem;
        }

        .case-hero h1 {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        .case-subtitle {
            font-size: 1.25rem;
            color: #4a4a4a;
            max-width: 700px;
        }

        /* Stats Bar */
        .stats-bar {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 2rem;
            padding: 2rem 0;
            border-bottom: 1px solid #eaeaea;
            margin-bottom: 2rem;
        }

        .stat-item {
            flex: 1;
            min-width: 120px;
        }

        .stat-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #6c6c6c;
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 1rem;
            font-weight: 500;
            color: #1a1a1a;
        }

        /* Content Sections */
        .section {
            margin: 3rem 0;
        }

        .section h2 {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            letter-spacing: -0.01em;
        }

        .section h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin: 1.5rem 0 0.75rem;
        }

        .section p {
            margin-bottom: 1rem;
            color: #333;
        }

        /* Image Placeholders */
        .image-placeholder {
            background: linear-gradient(135deg, #e0e0e0 0%, #f0f0f0 100%);
            border-radius: 16px;
            padding: 60px 20px;
            text-align: center;
            margin: 2rem 0;
            border: 1px solid #eaeaea;
        }

        .image-caption {
            text-align: center;
            font-size: 0.875rem;
            color: #6c6c6c;
            margin-top: 0.5rem;
        }

        .two-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin: 2rem 0;
        }

        /* Quote Block */
        .quote-block {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 16px;
            border-left: 4px solid #1a1a1a;
            margin: 2rem 0;
        }

        .quote-text {
            font-size: 1.25rem;
            font-weight: 500;
            font-style: italic;
            margin-bottom: 0.5rem;
        }

        .quote-author {
            font-size: 0.875rem;
            color: #6c6c6c;
        }

        /* Process Timeline */
        .process-grid {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .process-step {
            display: flex;
            gap: 1.5rem;
            border-bottom: 1px solid #eaeaea;
            padding-bottom: 1.5rem;
        }

        .step-number {
            font-weight: 700;
            font-size: 1.5rem;
            color: #ccc;
            min-width: 50px;
        }

        .step-content h4 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        /* Metrics Grid */
        .metrics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
            text-align: center;
        }

        .metric-card {
            background-color: #f8f9fa;
            padding: 1.5rem;
            border-radius: 16px;
        }

        .metric-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1a1a1a;
        }

        .metric-label {
            font-size: 0.875rem;
            color: #6c6c6c;
            margin-top: 0.5rem;
        }

        /* Key Takeaway */
        .takeaway {
            background-color: #1a1a1a;
            color: white;
            padding: 2rem;
            border-radius: 16px;
            margin: 2rem 0;
        }

        .takeaway h3 {
            color: white;
            margin-bottom: 1rem;
        }

        .takeaway p {
            color: #ccc;
            margin-bottom: 0;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn-primary {
            background-color: #1a1a1a;
            color: white;
        }

        .btn-primary:hover {
            background-color: #333;
        }

        .next-project {
            text-align: center;
            padding: 4rem 0;
            border-top: 1px solid #eaeaea;
            margin-top: 3rem;
        }

        /* Footer */
        footer {
            padding: 32px 0;
            text-align: center;
            color: #6c6c6c;
            font-size: 0.875rem;
            border-top: 1px solid #eaeaea;
            background-color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .case-hero h1 { font-size: 2rem; }
            .two-columns { grid-template-columns: 1fr; gap: 1rem; }
            .stats-bar { flex-direction: column; gap: 1rem; }
            .process-step { flex-direction: column; gap: 0.5rem; }
            .step-number { min-width: auto; }
        }

        #projectCarousel {
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #dfdfdf;
        }

        #projectCarousel img {
            object-fit: cover;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.35);
            border-radius: 50%;
            width: 3rem;
            height: 3rem;
            background-size: 60%;
            transition: 0.2s ease;
        }

        .carousel-control-prev-icon:hover,
        .carousel-control-next-icon:hover {
            background-color: rgba(0, 0, 0, 0.6);
        }

        .carousel-image {
            position: relative;
            height: 420px; /* adjust as needed */
            overflow: hidden;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* bottom gradient / shadow */
        .carousel-image::after {
            content: '';
            position: absolute;
            inset: 0;
            box-shadow: inset 0 -40px 60px rgba(0, 0, 0, 0.18);
            pointer-events: none;
        }

        /* 🔥 fixed overlay relative to whole carousel */
        .image-counter {
            position: absolute;
            top: 12px;
            right: 12px;
            z-index: 20;

            background: rgba(0, 0, 0, 0.6);
            color: #fff;

            font-size: 12px;
            padding: 4px 10px;
            border-radius: 999px;

            backdrop-filter: blur(6px);
        }

        /* dark overlay behind caption area */
.glightbox-container .gslide-description {
    background: rgba(0, 0, 0, 0) !important;
    color: #fff !important;

    text-align: center;
    padding: 20px 24px;

    border-radius: 12px;
    max-width: 600px;
    margin: 0 auto;

    backdrop-filter: blur(10px);
}

/* center caption vertically + horizontally */
.glightbox-container .gslide-desc {
    display: flex;
    justify-content: center;
    align-items: center;
}

/* title text styling */
.glightbox-container .gslide-title {
    font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    color: #fff !important;
    font-size: 18px;
    font-weight: 500;
}

.figma-tip {
    position: relative;
    display: inline-block;
    padding: 10px 14px;
    background: #ffffff;
    border: 1px solid #dcdcdc;
    border-radius: 12px;
    font-size: 14px;
    color: #333;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 1rem;
}

.figma-tip::after {
    content: "";
    position: absolute;
    bottom: -10px;
    right: 18px;
    border-width: 10px 10px 0 0;
    border-style: solid;
    border-color: #ffffff transparent transparent transparent;
}

.figma-tip::before {
    content: "";
    position: absolute;
    bottom: -11px;
    right: 17px;
    border-width: 11px 11px 0 0;
    border-style: solid;
    border-color: #dcdcdc transparent transparent transparent;
}

iframe{
    width:100%;
}

.mobile-warning {
    display: none;
    background: #fff3cd;
    color: #856404;
    border: 1px solid #ffeeba;
    padding: 12px 14px;
    border-radius: 10px;
    font-size: 14px;
    margin-bottom: 12px;
    line-height: 1.4;
}

/* Show only on mobile */
@media (max-width: 768px) {
    .mobile-warning {
        display: block;
        text-align: center;
    }
    .figma-tip{
        display:none;
    }
}

.pdf-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 18px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.2s ease;
    border: 1px solid #ddd;
}

.pdf-btn:hover {
    transform: translateY(-2px);
}

.btn-primary {
    background-color: #1a1a1a;
    color: white;
    border: none;
}

.btn-primary:hover {
    background-color: #333;
    transform: translateY(-2px);
}

.btn-secondary {
    background-color: transparent;
    color: #1a1a1a;
    border: 1px solid #1a1a1a;
}

.btn-secondary:hover {
    background-color: #f0f0f0;
}
    </style>
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>

<!-- Navigation -->
<nav>
    <div class="nav-container">
        <a href="index.php" class="back-link">← Back to Portfolio</a>
    </div>
</nav>

<!-- Case Study Hero -->
<section class="case-hero">
    <div class="container">
        <div class="case-category"><?php echo $project['category'] ?></div>
        <h1><?php echo $project['title'] ?></h1>
        <p class="case-subtitle"><?php echo $project['intro'] ?></p>
    </div>
</section>

<div class="container">
    <!-- Stats Bar -->
    <div class="stats-bar">
        <div class="stat-item">
            <div class="stat-label">Timeline</div>
            <div class="stat-value" id="stat-timeline"><?php echo $project['stats']['timeline'] ?></div>
        </div>
        <div class="stat-item">
            <div class="stat-label">My Role</div>
            <div class="stat-value" id="stat-role"><?php echo $project['stats']['role'] ?></div>
        </div>
        <div class="stat-item">
            <div class="stat-label">Team</div>
            <div class="stat-value" id="stat-team"><?php echo $project['stats']['team'] ?></div>
        </div>
        <div class="stat-item">
            <div class="stat-label">Tools</div>
            <div class="stat-value" id="stat-tools"><?php echo $project['stats']['tools'] ?></div>
        </div>
    </div>

    <!-- Overview Section -->
    <!-- <div class="section">
        <h2>Overview</h2>
        <p><strong>The problem:</strong> MediTrack's existing appointment booking flow had a 68% drop-off rate at step 3 of 5. Users reported feeling overwhelmed by too many form fields, unclear pricing, and lack of progress indicators.</p>
        <p><strong>The solution:</strong> A redesigned 3-step progressive disclosure flow with clear pricing transparency, auto-saved progress, and a persistent progress bar.</p>
        <p><strong>The outcome:</strong> Task completion rate increased from 68% to 92%, average booking time dropped from 4.2 min to 2.5 min, and CSAT scores rose 32%.</p>
    </div> -->

    <!-- Research Section -->
    <!-- <div class="section">
        <h2>🔍 User Research</h2>
        <p>To understand the root causes, I conducted:</p>
        <ul style="margin-left: 1.5rem; margin-bottom: 1rem;">
            <li>8 user interviews with existing patients</li>
            <li>Analytics review of drop-off points</li>
            <li>Competitive analysis of 4 telemedicine apps</li>
            <li>15 usability tests of the current flow</li>
        </ul>
        
        <div class="quote-block">
            <div class="quote-text">“I never know if I'm almost done. I keep clicking next and more forms keep appearing.”</div>
            <div class="quote-author">— Sarah, interview participant</div>
        </div>

        <div class="image-placeholder">
            📊 [Insert: User journey map or research insights graphic]
            <div class="image-caption">Fig 1: Key pain points identified during user interviews</div>
        </div>

        <h3>Key Insights</h3>
        <ul style="margin-left: 1.5rem;">
            <li><strong>Uncertainty:</strong> 73% of users couldn't estimate remaining steps</li>
            <li><strong>Information overload:</strong> 5-step form had 18 fields, many unnecessary</li>
            <li><strong>Trust issue:</strong> Pricing only shown at final step</li>
            <li><strong>No recovery:</strong> Accidental back button erased all progress</li>
        </ul>
    </div> -->

    <!-- Persona Section -->
    <!-- <div class="section">
        <h2>👤 Personas</h2>
        <div class="two-columns">
            <div class="image-placeholder" style="padding: 30px;">
                🧑‍⚕️ <strong>Busy Parent Maria</strong><br>
                "I need to book sick visits in under 2 minutes"
                <div class="image-caption">Goals: Speed, clarity, mobile-first</div>
            </div>
            <div class="image-placeholder" style="padding: 30px;">
                👴 <strong>Senior Patient Robert</strong><br>
                "The app must be easy to read and navigate"
                <div class="image-caption">Needs: Large text, clear buttons, low cognitive load</div>
            </div>
        </div>
    </div> -->

    <!-- Ideation Section -->
    <!-- <div class="section">
        <h2>💡 Ideation & Wireframes</h2>
        <p>I explored three different approaches to restructure the flow:</p>
        <ul style="margin-left: 1.5rem; margin-bottom: 1rem;">
            <li><strong>Option A:</strong> Single-page long form (tested poorly)</li>
            <li><strong>Option B:</strong> 3-step wizard with progress indicator (✅ selected)</li>
            <li><strong>Option C:</strong> Chat-based conversational UI (interesting but high dev cost)</li>
        </ul>
        
        <div class="image-placeholder">
            ✏️ [Insert: Low-fidelity wireframes of the 3-step flow]
            <div class="image-caption">Fig 2: Early wireframes exploring step breakdown and progress indicator placement</div>
        </div>
    </div> -->

    <!-- Design Section -->
    <!-- <div class="section">
        <h2>🎨 Final Design</h2>
        <p>Based on iterative testing, I delivered a high-fidelity design with these key improvements:</p>
        
        <div class="image-placeholder">
            📱 [Insert: Final high-fidelity mockups - 3-5 key screens]
            <div class="image-caption">Fig 3: Final designs showing progress bar, simplified forms, and upfront pricing</div>
        </div>

        <h3>Key Design Decisions</h3>
        <ul style="margin-left: 1.5rem;">
            <li><strong>Persistent progress bar:</strong> Users always know where they are (reduced anxiety by 41%)</li>
            <li><strong>Auto-save:</strong> No data loss on accidental back navigation</li>
            <li><strong>Upfront pricing card:</strong> Insurance estimate shown at step 1 (increased trust)</li>
            <li><strong>Reduced fields:</strong> 18 → 9 fields (removed non-essential questions)</li>
        </ul>
    </div> -->

    <!-- Testing Section -->
    <!-- <div class="section">
        <h2>🧪 Usability Testing</h2>
        <p>After building an interactive prototype, I ran 2 rounds of moderated testing with 10 participants each.</p>
        
        <div class="process-grid">
            <div class="process-step">
                <div class="step-number">Round 1</div>
                <div class="step-content">
                    <h4>Issues found: 7</h4>
                    <p>Major: Date picker was hard to use on mobile. Minor: "Continue" button color lacked contrast.</p>
                </div>
            </div>
            <div class="process-step">
                <div class="step-number">Round 2</div>
                <div class="step-content">
                    <h4>Issues found: 2</h4>
                    <p>Both minor — fixed within 24 hours. System Usability Scale (SUS) score: 82/100.</p>
                </div>
            </div>
        </div>
    </div> -->

    <div class="section">
        <h2 class="mb-0">Overview</h2>
        <p><?= nl2br($project['description']) ?></p>
    </div>

    <div class="section">
        <h2 class="mb-4">Results</h2>

    <?php if (isset($project['figma']) && (!empty($project['figma']))) { 
        
        echo '<div style="display:flex;width:100%;justify-content:end;"><div class="figma-tip">
                    Fullscreen for a better view!
              </div></div>';

        echo '<div class="mobile-warning">
                📱 <strong>Mobile View Notice:</strong> <br>This prototype is best experienced on desktop for full interaction.
            </div>';
        echo $project['figma'];

        echo '
        <div class="project-resource mt-3 d-flex justify-content-end">
            <a href="'. htmlspecialchars($project["figma-editor"]) . '"
            target="_blank"
            rel="noopener noreferrer"
            class="pdf-btn btn-secondary">
                <img src="assets/images/figma.png" width="15" height="15" alt="Figma icon" class="icon">
                Open in Figma
            </a>
        </div>
        ';
        
    }?>

    
<?php if (!empty($project['images'])) { ?>

<!-- Results Section -->
<div id="projectCarousel" class="carousel slide mt-4" data-bs-ride="carousel">

<!-- Indicators -->
<!-- <div class="carousel-indicators">
    <?php foreach ($project['images'] as $index => $image): ?>
        <button type="button"
            data-bs-target="#projectCarousel"
            data-bs-slide-to="<?= $index ?>"
            class="<?= $index === 0 ? 'active' : '' ?>">
        </button>
    <?php endforeach; ?>
</div> -->

<div class="image-counter">
<span class="current">1</span> / <span class="total"></span>
</div>

<!-- Slides -->
<div class="carousel-inner">

    <?php foreach ($project['images'] as $index => $img): ?>
        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">

        <div class="carousel-image">
            <a href="<?= $img['src'] ?>" class="glightbox" data-gallery="bayudata" data-title="<?= $img['desc'] ?>">
                <img src="<?= $img['src'] ?>" alt="Project image">
            </a>
        </div>

        <div class="p-3 text-center bg-light">
            <small class="text-muted">
                <?= $img['desc'] ?>
            </small>
        </div>

        </div>
    <?php endforeach; ?>

</div>

<!-- Controls -->
<button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
</button>

</div>

<?php } ?>
    </div>

    <div class="section">
        <div class="takeaway">
            <h3 class="mt-0">✨ Key Takeaways</h3>
            <p><?= $project['takeaways'] ?></p>
        </div>
    </div>

    <!-- Reflection -->
    <div class="section">
        <h2>Reflection</h2>
        <p><?= $project['reflection'] ?></p>
    </div>
    
    <?php if (!empty($project['pdf'])): ?>
    <!-- Additional Documentation -->
     <div class="section">
        <h2>Additional Documentation</h2>
        <div class="project-resource">
            <a href="<?= htmlspecialchars($project['pdf']) ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="pdf-btn btn-primary">
                📄 View Technical Report
            </a>
        </div>
     </div>
    <?php endif; ?>
    <!-- Next Project -->
    <!-- <div class="next-project">
        <p style="margin-bottom: 1rem; color: #6c6c6c;">Next case study →</p>
        <a href="#" class="btn btn-primary">FinFlow Dashboard: Building a Scalable Design System</a>
    </div> -->
</div>

<!-- Footer -->
<?php include 'footer.php' ?>

<!-- Bootstrap JS (required for carousel, dropdowns, etc.) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const lightbox = GLightbox({
        selector: ".glightbox"
    });

const carousel = document.querySelector("#projectCarousel");
const items = carousel.querySelectorAll(".carousel-item");

const currentEl = carousel.querySelector(".image-counter .current");
const totalEl = carousel.querySelector(".image-counter .total");

let currentIndex = 0;

// set total
totalEl.textContent = items.length;

// update function
function updateCounter(index) {
    currentEl.textContent = index + 1;
}

// initial value
updateCounter(0);

// listen to Bootstrap slide event
carousel.addEventListener("slide.bs.carousel", function (event) {
    updateCounter(event.to);
});

});
</script>

</body>
</html>

