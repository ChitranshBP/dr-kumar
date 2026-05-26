<?php
require_once __DIR__ . '/../includes/config.php';

$page_title       = 'Enhanced Recovery After Surgery (ERAS) Protocol | Dr. Kumar Chennai';
$page_description = 'ERAS protocol for faster hernia surgery recovery. Dr. Kumar implements Enhanced Recovery After Surgery guidelines for minimal pain, faster mobilization, and quicker return to normal life.';
$page_keywords    = 'ERAS protocol Chennai, enhanced recovery after surgery, hernia recovery protocol, fast track hernia surgery Chennai, minimally invasive recovery';
$page_url         = $site['url'] . 'advanced-techniques/eras-protocol.php';
$page_image       = $site['url'] . 'assets/images/eras-protocol.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
    <link rel="canonical" href="<?= htmlspecialchars($page_url) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($page_url) ?>">
    <meta property="og:type" content="article">
    <link rel="icon" type="image/png" href="<?= $site['logo'] ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: { 50: '#ecfeff', 100: '#cffafe', 500: '#06b6d4', 600: '#0891b2', 700: '#0e7490', 800: '#155e75', 900: '#164e63' },
                        accent: '#f59e0b',
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
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
        .float-call { position: fixed; bottom: 24px; right: 24px; z-index: 50; }
        .float-call a { background: linear-gradient(135deg, #0e7490, #0891b2); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 20px rgba(14, 116, 144, 0.4); transition: all 0.3s ease; }
        .float-call a:hover { transform: scale(1.1); box-shadow: 0 6px 30px rgba(14, 116, 144, 0.5); }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased">

<?php require __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-violet-900 via-slate-900 to-slate-900 text-white overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/3 w-96 h-96 bg-violet-500 rounded-full filter blur-3xl opacity-10"></div>
        <div class="absolute bottom-0 right-1/3 w-72 h-72 bg-brand-500 rounded-full filter blur-3xl opacity-10"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-violet-500/20 border border-violet-400/30 rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <span class="text-sm font-medium text-violet-300">Modern Surgical Protocol</span>
                </div>
                <h1 class="font-display text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-6">
                    Enhanced Recovery<br>
                    <span class="text-violet-400">After Surgery</span>
                </h1>
                <p class="text-lg text-slate-300 leading-relaxed mb-8">
                    ERAS protocols represent a paradigm shift in surgical care. By optimizing every phase of your surgical journey, Dr. Kumar helps you recover faster, with less pain and fewer complications.
                </p>
                <a href="../book-appointment.php" class="inline-flex items-center gap-2 bg-violet-600 hover:bg-violet-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                    Start Your Recovery Journey
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-violet-700/30 to-slate-800/50 rounded-2xl p-8 border border-violet-400/20">
                    <svg class="w-full" viewBox="0 0 400 300" fill="none">
                        <!-- Recovery timeline visualization -->
                        <text x="200" y="30" text-anchor="middle" fill="#a78bfa" font-size="16" font-weight="bold">ERAS Recovery Timeline</text>

                        <!-- Timeline -->
                        <line x1="40" y1="70" x2="360" y2="70" stroke="#6366f1" stroke-width="4"/>
                        <circle cx="40" cy="70" r="10" fill="#6366f1"/>
                        <circle cx="120" cy="70" r="10" fill="#8b5cf6"/>
                        <circle cx="200" cy="70" r="10" fill="#a78bfa"/>
                        <circle cx="280" cy="70" r="10" fill="#c4b5fd"/>
                        <circle cx="360" cy="70" r="10" fill="#22c55e"/>

                        <!-- Labels -->
                        <text x="40" y="95" text-anchor="middle" fill="#c4b5fd" font-size="9">Pre-Op</text>
                        <text x="120" y="95" text-anchor="middle" fill="#c4b5fd" font-size="9">Surgery</text>
                        <text x="200" y="95" text-anchor="middle" fill="#c4b5fd" font-size="9">Day 1</text>
                        <text x="280" y="95" text-anchor="middle" fill="#c4b5fd" font-size="9">Day 2-3</text>
                        <text x="360" y="95" text-anchor="middle" fill="#c4b5fd" font-size="9">Discharge</text>

                        <!-- Phase boxes -->
                        <rect x="20" y="110" width="70" height="60" rx="6" fill="#4f46e5" opacity="0.3" stroke="#6366f1" stroke-width="1"/>
                        <text x="55" y="135" text-anchor="middle" fill="#e0e7ff" font-size="8">Counseling</text>
                        <text x="55" y="148" text-anchor="middle" fill="#a5b4fc" font-size="7">Nutrition</text>
                        <text x="55" y="160" text-anchor="middle" fill="#a5b4fc" font-size="7">No Fasting</text>

                        <rect x="95" y="110" width="70" height="60" rx="6" fill="#7c3aed" opacity="0.3" stroke="#8b5cf6" stroke-width="1"/>
                        <text x="130" y="135" text-anchor="middle" fill="#e0e7ff" font-size="8">Minimally</text>
                        <text x="130" y="148" text-anchor="middle" fill="#a5b4fc" font-size="7">Invasive</text>
                        <text x="130" y="160" text-anchor="middle" fill="#a5b4fc" font-size="7">Technique</text>

                        <rect x="170" y="110" width="70" height="60" rx="6" fill="#8b5cf6" opacity="0.3" stroke="#a78bfa" stroke-width="1"/>
                        <text x="205" y="135" text-anchor="middle" fill="#e0e7ff" font-size="8">Multimodal</text>
                        <text x="205" y="148" text-anchor="middle" fill="#a5b4fc" font-size="7">Pain Control</text>
                        <text x="205" y="160" text-anchor="middle" fill="#a5b4fc" font-size="7">Early Diet</text>

                        <rect x="245" y="110" width="70" height="60" rx="6" fill="#a78bfa" opacity="0.3" stroke="#c4b5fd" stroke-width="1"/>
                        <text x="280" y="135" text-anchor="middle" fill="#e0e7ff" font-size="8">Get Moving</text>
                        <text x="280" y="148" text-anchor="middle" fill="#a5b4fc" font-size="7">Walking</text>
                        <text x="280" y="160" text-anchor="middle" fill="#a5b4fc" font-size="7">Plan</text>

                        <rect x="320" y="110" width="70" height="60" rx="6" fill="#22c55e" opacity="0.3" stroke="#22c55e" stroke-width="1"/>
                        <text x="355" y="135" text-anchor="middle" fill="#dcfce7" font-size="8">Home in</text>
                        <text x="355" y="148" text-anchor="middle" fill="#86efac" font-size="8">1-2 Days</text>
                        <text x="355" y="160" text-anchor="middle" fill="#86efac" font-size="7">Fast Recovery</text>

                        <!-- Key stats -->
                        <rect x="100" y="200" width="200" height="80" rx="10" fill="#1e1b4b" opacity="0.5" stroke="#6366f1" stroke-width="2"/>
                        <text x="200" y="225" text-anchor="middle" fill="#fbbf24" font-size="14" font-weight="bold">ERAS Benefits</text>
                        <text x="130" y="248" text-anchor="middle" fill="#a78bfa" font-size="10">50% Less Pain</text>
                        <text x="200" y="248" text-anchor="middle" fill="#a78bfa" font-size="10">|</text>
                        <text x="270" y="248" text-anchor="middle" fill="#a78bfa" font-size="10">2x Faster</text>
                        <text x="200" y="268" text-anchor="middle" fill="#c4b5fd" font-size="9">Fewer complications</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What is ERAS -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">What is ERAS?</h2>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">
                Enhanced Recovery After Surgery (ERAS) is a evidence-based, multidisciplinary approach that optimizes the surgical experience from pre-operative preparation through post-operative recovery. Developed in Europe in the 1990s, ERAS has revolutionized how patients recover from surgery.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-violet-50 to-purple-50 rounded-xl p-6 border border-violet-100">
                <div class="w-12 h-12 bg-violet-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Evidence-Based</h3>
                <p class="text-slate-600 text-sm">Built on scientific research and proven outcomes from thousands of patients worldwide.</p>
            </div>

            <div class="bg-gradient-to-br from-violet-50 to-purple-50 rounded-xl p-6 border border-violet-100">
                <div class="w-12 h-12 bg-violet-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Multidisciplinary</h3>
                <p class="text-slate-600 text-sm">Involves surgeons, anesthesiologists, nurses, and physiotherapists working together.</p>
            </div>

            <div class="bg-gradient-to-br from-violet-50 to-purple-50 rounded-xl p-6 border border-violet-100">
                <div class="w-12 h-12 bg-violet-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Patient-Centered</h3>
                <p class="text-slate-600 text-sm">Focuses on your experience and actively involves you in your own recovery.</p>
            </div>

            <div class="bg-gradient-to-br from-violet-50 to-purple-50 rounded-xl p-6 border border-violet-100">
                <div class="w-12 h-12 bg-violet-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Proven Results</h3>
                <p class="text-slate-600 text-sm">Studies show ERAS reduces complications and shortens hospital stay significantly.</p>
            </div>
        </div>
    </div>
</section>

<!-- ERAS Components -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">ERAS Protocol Components</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Every phase of your surgical journey is optimized for better outcomes.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Pre-operative -->
            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-violet-100 rounded-xl flex items-center justify-center mb-4">
                    <span class="text-violet-700 font-bold text-xl">1</span>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Pre-Operative Preparation</h3>
                <ul class="space-y-2 text-slate-600 text-sm">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Pre-operative counseling and education
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        No prolonged fasting - drink clear fluids until 2 hours before surgery
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Carbohydrate loading to reduce surgical stress
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Pre-emptive pain management
                    </li>
                </ul>
            </div>

            <!-- Intra-operative -->
            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-violet-100 rounded-xl flex items-center justify-center mb-4">
                    <span class="text-violet-700 font-bold text-xl">2</span>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">During Surgery</h3>
                <ul class="space-y-2 text-slate-600 text-sm">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Minimally invasive surgical techniques
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Goal-directed fluid therapy
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Optimal anesthesia protocols
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Prevention of hypothermia
                    </li>
                </ul>
            </div>

            <!-- Post-operative -->
            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-violet-100 rounded-xl flex items-center justify-center mb-4">
                    <span class="text-violet-700 font-bold text-xl">3</span>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Post-Operative Care</h3>
                <ul class="space-y-2 text-slate-600 text-sm">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Multimodal pain management (reducing opioid reliance)
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Early mobilization - out of bed within hours
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Early oral nutrition - regular diet same day
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Regular audits and continuous improvement
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Pain Management -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-6">Advanced Pain Management</h2>
                <p class="text-lg text-slate-600 mb-6">
                    One of ERAS's greatest achievements is transforming pain management after surgery. By using multimodal approaches, patients experience less pain while avoiding the side effects of strong opioid medications.
                </p>

                <div class="space-y-6">
                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 bg-violet-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Multimodal Analgesia</h4>
                            <p class="text-slate-600 text-sm">Combining different pain medications that work through different mechanisms, allowing lower doses of each while providing superior pain relief.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 bg-violet-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Reduced Opioid Use</h4>
                            <p class="text-slate-600 text-sm">Patients on ERAS protocols typically need fewer or no opioid pain medications, avoiding side effects like drowsiness, nausea, and constipation.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 bg-violet-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Longer-Lasting Relief</h4>
                            <p class="text-slate-600 text-sm">Pre-operative and intra-operative pain blocking techniques extend pain relief well beyond the immediate postoperative period.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-violet-50 to-purple-50 rounded-2xl p-8">
                <svg class="w-full" viewBox="0 0 400 300" fill="none">
                    <text x="200" y="30" text-anchor="middle" fill="#4f46e5" font-size="14" font-weight="bold">Traditional vs ERAS Pain Control</text>

                    <!-- Traditional approach -->
                    <rect x="30" y="60" width="160" height="200" rx="10" fill="#fef2f2" stroke="#fca5a5" stroke-width="2"/>
                    <text x="110" y="85" text-anchor="middle" fill="#dc2626" font-size="12" font-weight="bold">Traditional</text>
                    <text x="110" y="102" text-anchor="middle" fill="#991b1b" font-size="9">High opioid reliance</text>

                    <!-- Pills representation -->
                    <rect x="50" y="120" width="30" height="20" rx="3" fill="#ef4444"/>
                    <text x="65" y="133" text-anchor="middle" fill="white" font-size="6">Opioid</text>
                    <rect x="85" y="120" width="30" height="20" rx="3" fill="#ef4444"/>
                    <text x="100" y="133" text-anchor="middle" fill="white" font-size="6">Opioid</text>
                    <rect x="120" y="120" width="30" height="20" rx="3" fill="#ef4444"/>
                    <text x="135" y="133" text-anchor="middle" fill="white" font-size="6">Opioid</text>

                    <text x="110" y="165" text-anchor="middle" fill="#64748b" font-size="9">Side effects:</text>
                    <text x="110" y="180" text-anchor="middle" fill="#dc2626" font-size="8">Nausea</text>
                    <text x="110" y="193" text-anchor="middle" fill="#dc2626" font-size="8">Constipation</text>
                    <text x="110" y="206" text-anchor="middle" fill="#dc2626" font-size="8">Drowsiness</text>
                    <text x="110" y="219" text-anchor="middle" fill="#dc2626" font-size="8">Delayed recovery</text>

                    <!-- Pain scale -->
                    <text x="110" y="245" text-anchor="middle" fill="#64748b" font-size="9">Pain score: 6-8</text>
                    <rect x="50" y="255" width="120" height="10" rx="5" fill="#ef4444"/>

                    <!-- ERAS approach -->
                    <rect x="210" y="60" width="160" height="200" rx="10" fill="#f0fdf4" stroke="#86efac" stroke-width="2"/>
                    <text x="290" y="85" text-anchor="middle" fill="#16a34a" font-size="12" font-weight="bold">ERAS Protocol</text>
                    <text x="290" y="102" text-anchor="middle" fill="#166534" font-size="9">Multimodal approach</text>

                    <!-- Different medications -->
                    <rect x="225" y="120" width="25" height="15" rx="2" fill="#06b6d4"/>
                    <text x="237" y="130" text-anchor="middle" fill="white" font-size="5">NSAID</text>
                    <rect x="255" y="120" width="25" height="15" rx="2" fill="#8b5cf6"/>
                    <text x="267" y="130" text-anchor="middle" fill="white" font-size="5">Gabapentin</text>
                    <rect x="285" y="120" width="25" height="15" rx="2" fill="#06b6d4"/>
                    <text x="297" y="130" text-anchor="middle" fill="white" font-size="5">Acetam.</text>
                    <rect x="315" y="120" width="25" height="15" rx="2" fill="#f59e0b"/>
                    <text x="327" y="130" text-anchor="middle" fill="white" font-size="5">Local</text>

                    <text x="290" y="165" text-anchor="middle" fill="#64748b" font-size="9">Benefits:</text>
                    <text x="290" y="180" text-anchor="middle" fill="#16a34a" font-size="8">Less nausea</text>
                    <text x="290" y="193" text-anchor="middle" fill="#16a34a" font-size="8">Clear mind</text>
                    <text x="290" y="206" text-anchor="middle" fill="#16a34a" font-size="8">Better mobility</text>
                    <text x="290" y="219" text-anchor="middle" fill="#16a34a" font-size="8">Faster recovery</text>

                    <!-- Pain scale -->
                    <text x="290" y="245" text-anchor="middle" fill="#64748b" font-size="9">Pain score: 2-4</text>
                    <rect x="225" y="255" width="60" height="10" rx="5" fill="#22c55e"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Early Mobilization -->
<section class="py-16 lg:py-20 bg-gradient-to-br from-violet-700 to-purple-800 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold mb-4">Early Mobilization Benefits</h2>
            <p class="text-lg text-violet-100 max-w-2xl mx-auto">Getting you moving sooner is one of the most important aspects of ERAS protocols.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <svg class="w-12 h-12 mx-auto mb-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h3 class="text-lg font-bold mb-2">Within 4-6 Hours</h3>
                <p class="text-violet-100 text-sm">Out of bed and walking with assistance shortly after surgery</p>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <svg class="w-12 h-12 mx-auto mb-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                <h3 class="text-lg font-bold mb-2">Prevents Complications</h3>
                <p class="text-violet-100 text-sm">Reduces risk of blood clots, pneumonia, and ileus</p>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <svg class="w-12 h-12 mx-auto mb-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                <h3 class="text-lg font-bold mb-2">Builds Confidence</h3>
                <p class="text-violet-100 text-sm">Patients feel empowered and in control of recovery</p>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <svg class="w-12 h-12 mx-auto mb-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                <h3 class="text-lg font-bold mb-2">Accelerates Healing</h3>
                <p class="text-violet-100 text-sm">Promotes circulation, bowel function, and overall recovery</p>
            </div>
        </div>
    </div>
</section>

<!-- Recovery Timeline -->
<section class="py-16 lg:py-20">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Your ERAS Recovery Timeline</h2>
        </div>

        <div class="space-y-6">
            <div class="flex gap-6 items-start">
                <div class="w-16 h-16 bg-violet-600 text-white rounded-xl flex items-center justify-center font-bold text-lg flex-shrink-0">AM</div>
                <div class="flex-1 bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                    <h4 class="font-semibold text-slate-800 mb-2">Before Surgery (Evening Before)</h4>
                    <p class="text-slate-600 text-sm">Clear carbohydrate drink, no solid food after midnight, continue medications as directed.</p>
                </div>
            </div>

            <div class="flex gap-6 items-start">
                <div class="w-16 h-16 bg-violet-600 text-white rounded-xl flex items-center justify-center font-bold text-lg flex-shrink-0">2h</div>
                <div class="flex-1 bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                    <h4 class="font-semibold text-slate-800 mb-2">2 Hours Before Surgery</h4>
                    <p class="text-slate-600 text-sm">Clear carbohydrate drink to optimize energy and reduce surgical stress response.</p>
                </div>
            </div>

            <div class="flex gap-6 items-start">
                <div class="w-16 h-16 bg-violet-600 text-white rounded-xl flex items-center justify-center font-bold text-lg flex-shrink-0">0</div>
                <div class="flex-1 bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                    <h4 class="font-semibold text-slate-800 mb-2">Day of Surgery</h4>
                    <p class="text-slate-600 text-sm">Minimally invasive procedure, multimodal pain prevention, recovery room mobilization begins.</p>
                </div>
            </div>

            <div class="flex gap-6 items-start">
                <div class="w-16 h-16 bg-violet-600 text-white rounded-xl flex items-center justify-center font-bold text-lg flex-shrink-0">+1</div>
                <div class="flex-1 bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                    <h4 class="font-semibold text-slate-800 mb-2">Post-Operative Day 1</h4>
                    <p class="text-slate-600 text-sm">Regular diet, walking in hallway, pain managed with oral medications, shower allowed.</p>
                </div>
            </div>

            <div class="flex gap-6 items-start">
                <div class="w-16 h-16 bg-emerald-500 text-white rounded-xl flex items-center justify-center font-bold text-lg flex-shrink-0">+2</div>
                <div class="flex-1 bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                    <h4 class="font-semibold text-slate-800 mb-2">Discharge Day (Usually Day 1-2)</h4>
                    <p class="text-slate-600 text-sm">Mobile, comfortable on oral pain medications, wound checked, discharge instructions reviewed, follow-up scheduled.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Frequently Asked Questions</h2>
        </div>

        <div class="space-y-4">
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Is ERAS only for robotic or laparoscopic surgery?</h4>
                <p class="text-slate-600">While ERAS principles work especially well with minimally invasive surgery, they can be applied to open surgeries as well. The goal is to optimize recovery regardless of surgical approach.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Will I go home the same day?</h4>
                <p class="text-slate-600">Many hernia repairs with ERAS are performed as day surgery, meaning you go home the same day. Some patients with larger hernias or medical considerations may stay one night. The goal is always safe, comfortable discharge as soon as appropriate.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">What if I have concerns about going home so soon?</h4>
                <p class="text-slate-600">Your safety is paramount. Dr. Kumar will only recommend discharge when you are medically ready. You will receive detailed instructions, emergency contact numbers, and follow-up appointments to ensure peace of mind.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Do I need to do anything special to prepare?</h4>
                <p class="text-slate-600">Yes. Pre-operative optimization is part of ERAS. This includes stopping smoking if needed, optimizing any chronic conditions, maintaining good nutrition, and following the specific instructions you receive before surgery.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 lg:py-20 bg-gradient-to-r from-violet-600 to-purple-700">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-white mb-4">Experience Faster Recovery with ERAS</h2>
        <p class="text-xl text-violet-100 mb-8">Dr. Kumar implements ERAS protocols to help you get back to your life sooner.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="../book-appointment.php" class="inline-flex items-center gap-2 bg-white text-violet-700 font-semibold px-8 py-4 rounded-lg hover:bg-violet-50 transition">
                Book Your Consultation
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 border-2 border-white text-white font-semibold px-8 py-4 rounded-lg hover:bg-white/10 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Call <?= $site['phone'] ?>
            </a>
        </div>
    </div>
</section>

<!-- Floating Call Button -->
<div class="float-call">
    <a href="tel:<?= $site['phone_link'] ?>" aria-label="Call Dr. Kumar">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
    </a>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>