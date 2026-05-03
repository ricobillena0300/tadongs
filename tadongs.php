<?php
$profilePhoto = 'arvein-photo.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arvein Genelaso | Solar Panel Installer</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #101828;
            background: #f4f7f4;
            line-height: 1.6;
        }

        a {
            color: inherit;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 20;
            background: rgba(244, 247, 244, 0.92);
            border-bottom: 1px solid rgba(16, 24, 40, 0.08);
            backdrop-filter: blur(16px);
        }

        .nav {
            width: min(1120px, calc(100% - 32px));
            margin: 0 auto;
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 22px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            text-decoration: none;
        }

        .brand-mark {
            width: 42px;
            height: 42px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            color: #ffffff;
            background: #0f3f3c;
            box-shadow: 0 0 0 5px rgba(30, 174, 152, 0.18);
        }

        .brand small {
            display: block;
            color: #64748b;
            font-size: 0.74rem;
            letter-spacing: 0.14em;
            text-transform: uppercase;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-links a {
            padding: 10px 12px;
            color: #344054;
            font-size: 0.92rem;
            font-weight: 700;
            text-decoration: none;
        }

        .nav-links a:hover {
            color: #0f766e;
        }

        .hero {
            position: relative;
            min-height: 82svh;
            display: grid;
            align-items: end;
            overflow: hidden;
            color: #ffffff;
            background: #071b1f;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(90deg, rgba(7, 27, 31, 0.96) 0%, rgba(7, 27, 31, 0.78) 36%, rgba(7, 27, 31, 0.2) 70%),
                url("<?php echo htmlspecialchars($profilePhoto, ENT_QUOTES, 'UTF-8'); ?>");
            background-size: cover;
            background-position: center 22%;
            transform: scale(1.01);
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: auto 0 0;
            height: 34%;
            background: linear-gradient(0deg, rgba(7, 27, 31, 0.9), rgba(7, 27, 31, 0));
        }

        .hero-content {
            position: relative;
            z-index: 2;
            width: min(1120px, calc(100% - 32px));
            margin: 0 auto;
            padding: 112px 0 56px;
        }

        .eyebrow {
            width: fit-content;
            margin: 0 0 18px;
            padding: 8px 12px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 999px;
            color: #f5c542;
            background: rgba(255, 255, 255, 0.08);
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 0.16em;
            text-transform: uppercase;
        }

        h1,
        h2,
        h3,
        p {
            margin-top: 0;
        }

        h1 {
            max-width: 760px;
            margin-bottom: 16px;
            font-size: clamp(3.2rem, 9vw, 7.4rem);
            line-height: 0.88;
            letter-spacing: 0;
        }

        .hero-copy {
            max-width: 640px;
            margin-bottom: 28px;
            color: #dcefed;
            font-size: clamp(1rem, 2.2vw, 1.25rem);
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 40px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 48px;
            padding: 0 18px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-weight: 800;
            text-decoration: none;
        }

        .button-primary {
            color: #062126;
            background: #f5c542;
        }

        .button-secondary {
            color: #ffffff;
            border-color: rgba(255, 255, 255, 0.28);
            background: rgba(255, 255, 255, 0.1);
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            max-width: 760px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 8px;
            overflow: hidden;
            background: rgba(6, 33, 38, 0.72);
        }

        .stat {
            min-height: 92px;
            padding: 18px;
            border-right: 1px solid rgba(255, 255, 255, 0.12);
        }

        .stat:last-child {
            border-right: 0;
        }

        .stat strong {
            display: block;
            color: #f5c542;
            font-size: 1.25rem;
        }

        .stat span {
            color: #c6dcda;
            font-size: 0.92rem;
        }

        .section {
            padding: 78px 0;
        }

        .section.alt {
            background: #ffffff;
        }

        .container {
            width: min(1120px, calc(100% - 32px));
            margin: 0 auto;
        }

        .section-heading {
            display: grid;
            grid-template-columns: minmax(0, 0.8fr) minmax(0, 1.2fr);
            gap: 32px;
            align-items: end;
            margin-bottom: 34px;
        }

        .section-kicker {
            margin-bottom: 8px;
            color: #0f766e;
            font-size: 0.78rem;
            font-weight: 900;
            letter-spacing: 0.14em;
            text-transform: uppercase;
        }

        h2 {
            margin-bottom: 0;
            color: #0b2730;
            font-size: clamp(2rem, 4vw, 3.4rem);
            line-height: 1;
            letter-spacing: 0;
        }

        .section-heading p {
            margin-bottom: 0;
            color: #52606d;
            font-size: 1.03rem;
        }

        .about-layout {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 28px;
            align-items: stretch;
        }

        .portrait {
            min-height: 560px;
            border-radius: 8px;
            overflow: hidden;
            background: #0b2730;
        }

        .portrait img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            object-position: center 20%;
        }

        .about-copy {
            display: grid;
            gap: 18px;
            align-content: center;
        }

        .feature-panel {
            padding: 28px;
            border: 1px solid #d9e4df;
            border-radius: 8px;
            background: #ffffff;
        }

        .feature-panel.dark {
            color: #ffffff;
            border-color: transparent;
            background: #0f3f3c;
        }

        .feature-panel.dark p {
            color: #d9f2ee;
        }

        .feature-panel h3 {
            margin-bottom: 10px;
            color: inherit;
            font-size: 1.4rem;
        }

        .feature-panel p {
            margin-bottom: 0;
            color: #52606d;
        }

        .skill-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
        }

        .skill-item {
            min-height: 138px;
            padding: 22px;
            border: 1px solid #d9e4df;
            border-radius: 8px;
            background: #ffffff;
        }

        .skill-number {
            display: block;
            margin-bottom: 22px;
            color: #0f766e;
            font-size: 0.8rem;
            font-weight: 900;
            letter-spacing: 0.12em;
        }

        .skill-item h3 {
            margin-bottom: 8px;
            font-size: 1.05rem;
        }

        .skill-item p {
            margin-bottom: 0;
            color: #667085;
            font-size: 0.95rem;
        }

        .timeline {
            display: grid;
            gap: 18px;
        }

        .timeline-item {
            display: grid;
            grid-template-columns: 170px minmax(0, 1fr);
            gap: 26px;
            padding: 26px 0;
            border-top: 1px solid #d9e4df;
        }

        .timeline-date {
            color: #0f766e;
            font-weight: 900;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .timeline-item h3 {
            margin-bottom: 6px;
            color: #0b2730;
            font-size: 1.55rem;
        }

        .timeline-item p {
            max-width: 760px;
            margin-bottom: 0;
            color: #52606d;
        }

        .hobby-band {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
        }

        .hobby {
            min-height: 220px;
            padding: 28px;
            border-radius: 8px;
            color: #ffffff;
            background: #0f3f3c;
        }

        .hobby:nth-child(2) {
            color: #101828;
            background: #f5c542;
        }

        .hobby h3 {
            margin-bottom: 10px;
            font-size: 1.7rem;
        }

        .hobby p {
            margin-bottom: 0;
            max-width: 420px;
        }

        .footer {
            padding: 32px 0;
            color: #d9f2ee;
            background: #071b1f;
        }

        .footer .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .footer p {
            margin-bottom: 0;
        }

        @media (max-width: 820px) {
            .nav {
                align-items: flex-start;
                flex-direction: column;
                padding: 16px 0;
            }

            .nav-links {
                width: 100%;
                overflow-x: auto;
                padding-bottom: 2px;
            }

            .hero {
                min-height: 78svh;
            }

            .hero::before {
                background-image:
                    linear-gradient(180deg, rgba(7, 27, 31, 0.72) 0%, rgba(7, 27, 31, 0.88) 72%),
                    url("<?php echo htmlspecialchars($profilePhoto, ENT_QUOTES, 'UTF-8'); ?>");
                background-position: center 16%;
            }

            .hero-content {
                padding-top: 90px;
            }

            .hero-stats,
            .section-heading,
            .about-layout,
            .skill-grid,
            .timeline-item,
            .hobby-band {
                grid-template-columns: 1fr;
            }

            .hero-stats {
                max-width: 100%;
            }

            .stat {
                border-right: 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.12);
            }

            .stat:last-child {
                border-bottom: 0;
            }

            .portrait {
                min-height: 440px;
            }

            .section {
                padding: 58px 0;
            }

            .footer .container {
                align-items: flex-start;
                flex-direction: column;
            }
        }

        @media (max-width: 520px) {
            .nav,
            .container,
            .hero-content {
                width: min(100% - 24px, 1120px);
            }

            .brand {
                font-size: 0.96rem;
            }

            .brand-mark {
                width: 38px;
                height: 38px;
            }

            .nav-links a {
                padding: 8px 10px;
                font-size: 0.86rem;
            }

            h1 {
                font-size: clamp(3rem, 17vw, 4.6rem);
            }

            .hero-actions {
                flex-direction: column;
            }

            .button {
                width: 100%;
            }

            .feature-panel,
            .skill-item,
            .hobby {
                padding: 22px;
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <nav class="nav" aria-label="Main navigation">
            <a class="brand" href="#top">
                <span class="brand-mark">AG</span>
                <span>
                    Arvein Genelaso
                    <small>Solar Installer</small>
                </span>
            </a>
            <div class="nav-links">
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#experience">Experience</a>
                <a href="#hobbies">Hobbies</a>
            </div>
        </nav>
    </header>

    <main id="top">
        <section class="hero" aria-label="Arvein Genelaso introduction">
            <div class="hero-content">
                <p class="eyebrow">Available for installation work</p>
                <h1>Arvein Genelaso</h1>
                <p class="hero-copy">
                    Solar panel installer with steady hands, outdoor grit, and a clean-energy
                    mindset built for reliable work on real job sites.
                </p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#experience">View Experience</a>
                    <a class="button button-secondary" href="#skills">See Skills</a>
                </div>
                <div class="hero-stats" aria-label="Quick profile details">
                    <div class="stat">
                        <strong>Profession</strong>
                        <span>Solar Panel Installer</span>
                    </div>
                    <div class="stat">
                        <strong>Strength</strong>
                        <span>Team-ready field work</span>
                    </div>
                    <div class="stat">
                        <strong>Hobbies</strong>
                        <span>Basketball and gaming</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section alt" id="about">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <p class="section-kicker">Personal Website</p>
                        <h2>Built for clean energy work.</h2>
                    </div>
                    <p>
                        Arvein brings a practical attitude to solar installation: prepared,
                        focused, and ready to support the crew from setup to cleanup.
                    </p>
                </div>

                <div class="about-layout">
                    <div class="portrait">
                        <img
                            src="<?php echo htmlspecialchars($profilePhoto, ENT_QUOTES, 'UTF-8'); ?>"
                            alt="Arvein Genelaso standing by the water"
                        >
                    </div>
                    <div class="about-copy">
                        <div class="feature-panel dark">
                            <h3>Profile</h3>
                            <p>
                                Motivated worker focused on safe, neat, and dependable solar
                                panel installation. Comfortable working outdoors, following
                                instructions, preparing materials, and supporting teams on-site.
                            </p>
                        </div>
                        <div class="feature-panel">
                            <h3>Career Objective</h3>
                            <p>
                                To continue growing as a solar panel installer and contribute
                                to quality renewable energy projects through discipline,
                                teamwork, and willingness to learn.
                            </p>
                        </div>
                        <div class="feature-panel">
                            <h3>Personal Details</h3>
                            <p>Name: Arvein Genelaso<br>Sex: Male<br>Profession: Solar Panel Installer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="skills">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <p class="section-kicker">Skills</p>
                        <h2>Job-site ready basics.</h2>
                    </div>
                    <p>
                        The core skills for installation work: practical preparation, safety,
                        tools, teamwork, and support during panel mounting.
                    </p>
                </div>

                <div class="skill-grid">
                    <div class="skill-item">
                        <span class="skill-number">01</span>
                        <h3>Solar Panel Mounting</h3>
                        <p>Supports panel placement, alignment, and installation tasks.</p>
                    </div>
                    <div class="skill-item">
                        <span class="skill-number">02</span>
                        <h3>Site Preparation</h3>
                        <p>Helps organize materials, clear work areas, and prepare setups.</p>
                    </div>
                    <div class="skill-item">
                        <span class="skill-number">03</span>
                        <h3>Basic Electrical Support</h3>
                        <p>Assists with simple wiring support under proper instruction.</p>
                    </div>
                    <div class="skill-item">
                        <span class="skill-number">04</span>
                        <h3>Tool Handling</h3>
                        <p>Uses common installation tools with care and attention.</p>
                    </div>
                    <div class="skill-item">
                        <span class="skill-number">05</span>
                        <h3>Team Coordination</h3>
                        <p>Works with the crew to keep tasks moving cleanly.</p>
                    </div>
                    <div class="skill-item">
                        <span class="skill-number">06</span>
                        <h3>Safety Awareness</h3>
                        <p>Follows procedures and keeps the work area controlled.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section alt" id="experience">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <p class="section-kicker">Experience</p>
                        <h2>Hands-on installation work.</h2>
                    </div>
                    <p>
                        Focused on dependable field support, clean installation habits, and
                        steady improvement on renewable energy projects.
                    </p>
                </div>

                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-date">Current Role</div>
                        <div>
                            <h3>Solar Panel Installer</h3>
                            <p>
                                Assists with solar panel setup, mounting, material preparation,
                                basic wiring support, and worksite cleanup while following
                                safety procedures and project instructions.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">Work Style</div>
                        <div>
                            <h3>Reliable Field Support</h3>
                            <p>
                                Brings discipline, teamwork, and focus to outdoor job sites,
                                with a willingness to learn from experienced installers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="hobbies">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <p class="section-kicker">Off the Clock</p>
                        <h2>Competitive energy stays on.</h2>
                    </div>
                    <p>
                        Basketball and online gaming keep the reflexes sharp, the team sense
                        alive, and the mind ready for the next challenge.
                    </p>
                </div>

                <div class="hobby-band">
                    <div class="hobby">
                        <h3>Basketball</h3>
                        <p>Fast movement, teamwork, timing, and confidence under pressure.</p>
                    </div>
                    <div class="hobby">
                        <h3>Online Gaming</h3>
                        <p>Strategy, focus, quick decisions, and staying cool in close rounds.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>Arvein Genelaso</p>
            <p>Solar Panel Installer</p>
        </div>
    </footer>
</body>
</html>
