<?php
require_once __DIR__ . '/config.php';

$page_title       ??= 'Dr. Kumar - Best Advanced Hernia & Laparoscopic Surgeon in Chennai';
$page_description ??= 'Expert hernia treatment by Dr. Kumar in Chennai. Advanced laparoscopic, robotic & eTEP hernia surgery with 29+ years of experience.';
$page_keywords    ??= 'hernia surgery Chennai, best hernia surgeon Chennai, laparoscopic hernia repair';
$page_url         ??= $site['url'] . basename(dirname($_SERVER['PHP_SELF'])) . '/';
$page_image       ??= $site['url'] . 'assets/images/dr-kumar-main.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
    <meta name="author" content="<?= htmlspecialchars($site['doctor']) ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="<?= htmlspecialchars($page_url) ?>">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($page_url) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($page_image) ?>">
    <meta property="og:site_name" content="<?= htmlspecialchars($site['name']) ?>">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($page_image) ?>">

    <meta name="geo.region" content="IN-TN">
    <meta name="geo.placename" content="Chennai">
    <meta name="theme-color" content="#0e7490">

    <link rel="icon" type="image/png" href="<?= $site['logo'] ?>">
    <link rel="apple-touch-icon" href="<?= $site['logo'] ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50:  '#ecfeff',
                            100: '#cffafe',
                            500: '#06b6d4',
                            600: '#0891b2',
                            700: '#0e7490',
                            800: '#155e75',
                            900: '#164e63',
                        },
                        accent: '#f59e0b',
                    },
                    fontFamily: {
                        sans:    ['Inter', 'system-ui', 'sans-serif'],
                        display: ['"Playfair Display"', 'Georgia', 'serif'],
                    },
                },
            },
        };
    </script>

    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Playfair Display', serif; }
        .site-header { transition: box-shadow 0.3s ease, background 0.3s ease; }
        .site-header.scrolled { box-shadow: 0 4px 20px -4px rgba(15, 23, 42, 0.1); background: rgba(255,255,255,0.96); backdrop-filter: blur(14px); }
        .nav-link { position: relative; display: inline-flex; align-items: center; gap: 0.3rem; padding: 0.65rem 0.85rem; font-size: 13px; font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase; color: #334155; transition: color 0.2s ease; }
        .nav-link:hover, .nav-link.active { color: #0e7490; }
        .nav-link::after { content: ''; position: absolute; left: 0.85rem; right: 0.85rem; bottom: 0.4rem; height: 2px; background: #0e7490; transform: scaleX(0); transform-origin: left; transition: transform 0.25s ease; }
        .nav-link:hover::after, .nav-link.active::after { transform: scaleX(1); }
        .has-dropdown { position: relative; }
        .dropdown { position: absolute; top: 100%; left: 50%; transform: translateX(-50%) translateY(8px); min-width: 580px; background: white; border-radius: 0.75rem; box-shadow: 0 20px 50px -10px rgba(15, 23, 42, 0.2); padding: 1.25rem; opacity: 0; visibility: hidden; transition: all 0.25s ease; border-top: 3px solid #0e7490; }
        .has-dropdown:hover .dropdown { opacity: 1; visibility: visible; transform: translateX(-50%) translateY(0); }
        .dropdown::before { content: ''; position: absolute; top: -10px; left: 50%; transform: translateX(-50%); width: 16px; height: 16px; background: #0e7490; clip-path: polygon(50% 0, 100% 100%, 0 100%); }
        .cta-btn { display: inline-flex; align-items: center; gap: 0.5rem; background: #0e7490; color: white; font-weight: 600; font-size: 14px; padding: 0.7rem 1.5rem; border-radius: 0.375rem; transition: all 0.2s ease; white-space: nowrap; }
        .cta-btn:hover { background: #155e75; transform: translateY(-1px); box-shadow: 0 8px 20px -6px rgba(14, 116, 144, 0.5); }
        .hamburger span { transition: all 0.35s cubic-bezier(0.68,-0.55,0.27,1.55); transform-origin: center; }
        .hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        .hamburger.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
        .hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }
        .mobile-overlay { position: fixed; inset: 0; background: rgba(15, 23, 42, 0.5); backdrop-filter: blur(4px); opacity: 0; visibility: hidden; transition: all 0.3s ease; z-index: 60; }
        .mobile-overlay.open { opacity: 1; visibility: visible; }
        .mobile-drawer { position: fixed; top: 0; right: 0; width: min(85vw, 380px); height: 100vh; background: white; transform: translateX(100%); transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1); z-index: 70; display: flex; flex-direction: column; box-shadow: -20px 0 60px -20px rgba(15, 23, 42, 0.25); }
        .mobile-drawer.open { transform: translateX(0); }
        .mobile-link { display: flex; align-items: center; justify-content: space-between; padding: 0.95rem 1.25rem; font-size: 13px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; color: #334155; border-bottom: 1px solid #f1f5f9; transition: all 0.2s ease; }
        .mobile-link:hover { background: #f8fafc; color: #0e7490; padding-left: 1.5rem; }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased">

<!-- ============== MAIN HEADER ============== -->
<header class="site-header sticky top-0 z-40 bg-white border-b border-slate-100">
    <div class="relative max-w-7xl mx-auto px-4 lg:px-6">
        <nav class="flex items-center justify-between gap-6 py-3">
            <a href="index.php" class="flex items-center shrink-0">
                <img src="<?= $site['logo'] ?>" alt="Dr. Kumar" width="220" height="56" class="h-14 w-auto">
            </a>
            <ul class="hidden lg:flex items-center">
                <?php foreach ($nav as $label => $link):
                    $isDropdown = ($label === 'Advanced Hernia');
                ?>
                    <li class="<?= $isDropdown ? 'has-dropdown' : '' ?>">
                        <a href="<?= $link ?>" class="nav-link">
                            <?= $label ?>
                            <?php if ($isDropdown): ?>
                                <svg class="w-3 h-3 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                            <?php endif; ?>
                        </a>
                        <?php if ($isDropdown): ?>
                            <div class="dropdown">
                                <p class="text-xs font-bold uppercase tracking-wider text-brand-700 mb-3">Hernia Conditions</p>
                                <div class="grid grid-cols-2 gap-1">
                                    <?php foreach ($herniaConditions as $t): ?>
                                        <a href="my_types/<?= strtolower(str_replace(' ', '-', $t['title'])) ?>.php" class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-slate-700 hover:bg-brand-50 hover:text-brand-700 transition">
                                            <svg class="w-3.5 h-3.5 text-brand-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            <?= $t['title'] ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="flex items-center gap-1">
                <span class="hidden md:block w-px h-6 bg-slate-200 mx-2"></span>
                <a href="tel:<?= $site['phone_link'] ?>" class="cta-btn hidden md:inline-flex">
                    Appointment
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <button id="navToggle" class="hamburger lg:hidden flex flex-col justify-center items-center w-11 h-11 rounded-md hover:bg-slate-100 transition ml-1" aria-label="Toggle menu" aria-expanded="false">
                    <span class="block w-5 h-0.5 bg-slate-700 mb-1"></span>
                    <span class="block w-5 h-0.5 bg-slate-700 mb-1"></span>
                    <span class="block w-5 h-0.5 bg-slate-700"></span>
                </button>
            </div>
        </nav>
    </div>
</header>

<!-- ============== MOBILE DRAWER ============== -->
<div id="mobileOverlay" class="mobile-overlay lg:hidden"></div>
<aside id="mobileDrawer" class="mobile-drawer lg:hidden">
    <div class="flex items-center justify-between px-5 py-4 border-b border-slate-100">
        <img src="<?= $site['logo'] ?>" alt="Logo" class="h-10 w-auto">
        <button id="drawerClose" class="w-10 h-10 rounded-xl bg-slate-100 hover:bg-slate-200 flex items-center justify-center transition" aria-label="Close menu">
            <svg class="w-5 h-5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>
    <nav class="flex-1 overflow-y-auto px-4 py-4 space-y-1">
        <?php foreach ($nav as $label => $link): ?>
            <a href="<?= $link ?>" class="mobile-link js-drawer-close">
                <span><?= $label ?></span>
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        <?php endforeach; ?>
    </nav>
    <div class="border-t border-slate-100 p-5 space-y-3 bg-slate-50">
        <a href="tel:<?= $site['phone_link'] ?>" class="flex items-center gap-3 bg-white rounded-xl p-3 shadow-sm">
            <span class="w-10 h-10 rounded-xl bg-brand-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
            </span>
            <span class="leading-tight">
                <span class="block text-xs text-slate-500">Call us</span>
                <span class="block font-bold text-brand-800"><?= $site['phone'] ?></span>
            </span>
        </a>
        <a href="tel:<?= $site['phone_link'] ?>" class="flex items-center justify-center gap-2 bg-gradient-to-r from-accent to-amber-500 text-white font-semibold py-3.5 rounded-xl shadow-md hover:shadow-lg transition">
            Book Appointment
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</aside>

<script>
(function () {
    var toggle = document.getElementById('navToggle');
    var drawer = document.getElementById('mobileDrawer');
    var overlay = document.getElementById('mobileOverlay');
    var closeBtn = document.getElementById('drawerClose');
    var header = document.querySelector('.site-header');

    function setMenu(open) {
        drawer.classList.toggle('open', open);
        overlay.classList.toggle('open', open);
        toggle.classList.toggle('open', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        document.body.style.overflow = open ? 'hidden' : '';
    }
    toggle.addEventListener('click', function () { setMenu(!drawer.classList.contains('open')); });
    closeBtn.addEventListener('click', function () { setMenu(false); });
    overlay.addEventListener('click', function () { setMenu(false); });
    document.querySelectorAll('.js-drawer-close').forEach(function (a) {
        a.addEventListener('click', function () { setMenu(false); });
    });
    window.addEventListener('scroll', function () {
        header.classList.toggle('scrolled', window.scrollY > 20);
    });
})();
</script>

<!-- ============== PAGE CONTENT ============== -->
<main>