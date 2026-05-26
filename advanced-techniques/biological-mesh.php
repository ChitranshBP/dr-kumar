<?php
require_once __DIR__ . '/../includes/config.php';

$page_title       = 'Biological Mesh for Hernia Repair | Dr. Kumar Chennai';
$page_description = 'Biological mesh implants for complex hernia repairs. Dr. Kumar offers human dermis and porcine biological mesh options in Chennai, particularly for contaminated surgical fields.';
$page_keywords    = 'biological mesh hernia repair Chennai, porcine mesh, human dermis mesh, contaminated field hernia, complex hernia repair Chennai, biological implant';
$page_url         = $site['url'] . 'advanced-techniques/biological-mesh.php';
$page_image       = $site['url'] . 'assets/images/biological-mesh.jpg';
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
<section class="relative bg-gradient-to-br from-emerald-900 via-slate-900 to-slate-900 text-white overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-500 rounded-full filter blur-3xl opacity-10"></div>
        <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-brand-500 rounded-full filter blur-3xl opacity-10"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-emerald-500/20 border border-emerald-400/30 rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                    <span class="text-sm font-medium text-emerald-300">Biological Implant Technology</span>
                </div>
                <h1 class="font-display text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-6">
                    Biological<br>
                    <span class="text-emerald-400">Mesh</span>
                </h1>
                <p class="text-lg text-slate-300 leading-relaxed mb-8">
                    A breakthrough approach for complex hernia repairs, especially in contaminated fields. Biological mesh provides a natural scaffold for your body's own tissue regeneration.
                </p>
                <a href="../book-appointment.php" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                    Learn About Options
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-emerald-700/30 to-slate-800/50 rounded-2xl p-8 border border-emerald-400/20">
                    <svg class="w-full" viewBox="0 0 400 280" fill="none">
                        <!-- DNA/Cell inspired biological illustration -->
                        <defs>
                            <linearGradient id="bioGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#10b981"/>
                                <stop offset="100%" style="stop-color:#059669"/>
                            </linearGradient>
                        </defs>

                        <!-- Mesh representation with organic feel -->
                        <ellipse cx="200" cy="140" rx="120" ry="80" fill="url(#bioGradient)" opacity="0.2" stroke="#10b981" stroke-width="2"/>
                        <ellipse cx="200" cy="140" rx="100" ry="60" fill="url(#bioGradient)" opacity="0.3" stroke="#10b981" stroke-width="1.5"/>
                        <ellipse cx="200" cy="140" rx="80" ry="40" fill="url(#bioGradient)" opacity="0.4" stroke="#34d399" stroke-width="1"/>

                        <!-- Biological cells/cross-links -->
                        <circle cx="130" cy="120" r="12" fill="#10b981" opacity="0.6"/>
                        <circle cx="170" cy="100" r="10" fill="#34d399" opacity="0.5"/>
                        <circle cx="230" cy="110" r="14" fill="#10b981" opacity="0.5"/>
                        <circle cx="270" cy="130" r="11" fill="#34d399" opacity="0.6"/>
                        <circle cx="150" cy="160" r="13" fill="#10b981" opacity="0.5"/>
                        <circle cx="200" cy="170" r="15" fill="#34d399" opacity="0.4"/>
                        <circle cx="250" cy="160" r="12" fill="#10b981" opacity="0.6"/>

                        <!-- Fiber connections -->
                        <line x1="130" y1="120" x2="170" y2="100" stroke="#10b981" stroke-width="1" opacity="0.5"/>
                        <line x1="170" y1="100" x2="230" y2="110" stroke="#10b981" stroke-width="1" opacity="0.5"/>
                        <line x1="230" y1="110" x2="270" y2="130" stroke="#10b981" stroke-width="1" opacity="0.5"/>
                        <line x1="150" y1="160" x2="200" y2="170" stroke="#34d399" stroke-width="1" opacity="0.5"/>
                        <line x1="200" y1="170" x2="250" y2="160" stroke="#34d399" stroke-width="1" opacity="0.5"/>

                        <!-- Regeneration arrows -->
                        <path d="M80 200 L80 220 L70 215 M80 220 L90 215" stroke="#10b981" stroke-width="2"/>
                        <path d="M320 200 L320 220 L310 215 M320 220 L330 215" stroke="#10b981" stroke-width="2"/>
                        <text x="80" y="235" text-anchor="middle" fill="#6ee7b7" font-size="10">Cell</text>
                        <text x="80" y="245" text-anchor="middle" fill="#6ee7b7" font-size="10">Infiltration</text>
                        <text x="320" y="235" text-anchor="middle" fill="#6ee7b7" font-size="10">Tissue</text>
                        <text x="320" y="245" text-anchor="middle" fill="#6ee7b7" font-size="10">Regeneration</text>

                        <!-- Label -->
                        <text x="200" y="30" text-anchor="middle" fill="#10b981" font-size="14" font-weight="bold">Biological Scaffold</text>
                        <text x="200" y="48" text-anchor="middle" fill="#6ee7b7" font-size="11">Natural Tissue Remodeling</text>
                    </svg>
                    <div class="mt-6 grid grid-cols-3 gap-3">
                        <div class="bg-slate-800/50 rounded-lg p-3 text-center border border-slate-700">
                            <svg class="w-6 h-6 text-emerald-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            <div class="text-xs text-slate-400">Natural</div>
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 text-center border border-slate-700">
                            <svg class="w-6 h-6 text-emerald-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            <div class="text-xs text-slate-400">Infection-Resistant</div>
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 text-center border border-slate-700">
                            <svg class="w-6 h-6 text-emerald-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            <div class="text-xs text-slate-400">Remodels</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What is Biological Mesh -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">What is Biological Mesh?</h2>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">
                Biological mesh is a revolutionary implant derived from human or animal tissue that serves as a scaffold for your body's own tissue regeneration. Unlike synthetic mesh, it is eventually replaced by your own tissue, providing a more natural repair.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl p-8 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-4">Human Dermis (Allograft)</h3>
                <p class="text-slate-600 mb-4">
                    Derived from donated human skin tissue, human dermis mesh undergoes rigorous processing to remove cells while preserving the natural collagen structure and extracellular matrix.
                </p>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Processed and sterilized human tissue
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        No risk of animal-related concerns
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Excellent integration properties
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-4">Porcine (Pig) Dermis</h3>
                <p class="text-slate-600 mb-4">
                    Porcine dermis is sourced from pig skin and processed to remove cells while maintaining the natural collagen architecture. It provides similar benefits to human dermis at a lower cost.
                </p>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Decellularized porcine tissue
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Proven track record in hernia repair
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Readily available supply
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- When Biological Mesh is Used -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-accent/20 text-slate-800 rounded-full px-4 py-2 mb-6 text-sm font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    Clinical Indications
                </div>
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-6">When is Biological Mesh Recommended?</h2>
                <p class="text-lg text-slate-600 mb-6">
                    Biological mesh is typically reserved for complex situations where synthetic mesh may carry higher risks. Dr. Kumar will evaluate your case to determine if biological mesh is the best option for you.
                </p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm border border-slate-100">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Contaminated Fields</h4>
                            <p class="text-slate-600 text-sm">When hernia repair must be performed in the presence of infection or potential contamination (bowel perforation, stoma reversal, etc.).</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm border border-slate-100">
                        <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Previous Mesh Infection</h4>
                            <p class="text-slate-600 text-sm">Patients who have had infected synthetic mesh removed may benefit from biological mesh in subsequent repairs.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm border border-slate-100">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.361 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Immunocompromised Patients</h4>
                            <p class="text-slate-600 text-sm">Patients with compromised immune systems may have better outcomes with biological rather than synthetic implants.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm border border-slate-100">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Complex/Recurrent Hernias</h4>
                            <p class="text-slate-600 text-sm">Large, complex, or multiply recurrent hernias where enhanced healing is desirable.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <svg class="w-full" viewBox="0 0 400 400" fill="none">
                    <!-- Timeline of biological mesh integration -->
                    <text x="200" y="30" text-anchor="middle" fill="#0e7490" font-size="16" font-weight="bold">Biological Mesh Integration Timeline</text>

                    <!-- Timeline line -->
                    <line x1="50" y1="80" x2="350" y2="80" stroke="#cbd5e1" stroke-width="4"/>
                    <circle cx="50" cy="80" r="12" fill="#0e7490"/>
                    <circle cx="150" cy="80" r="12" fill="#0891b2"/>
                    <circle cx="250" cy="80" r="12" fill="#06b6d4"/>
                    <circle cx="350" cy="80" r="12" fill="#22c55e"/>

                    <!-- Time labels -->
                    <text x="50" y="105" text-anchor="middle" fill="#64748b" font-size="10">Implant</text>
                    <text x="150" y="105" text-anchor="middle" fill="#64748b" font-size="10">Week 2</text>
                    <text x="250" y="105" text-anchor="middle" fill="#64748b" font-size="10">Month 3</text>
                    <text x="350" y="105" text-anchor="middle" fill="#64748b" font-size="10">1+ Years</text>

                    <!-- Stage 1 -->
                    <rect x="20" y="130" width="80" height="100" rx="8" fill="#f1f5f9" stroke="#e2e8f0" stroke-width="1"/>
                    <text x="60" y="155" text-anchor="middle" fill="#0e7490" font-size="10" font-weight="bold">Initial</text>
                    <text x="60" y="170" text-anchor="middle" fill="#64748b" font-size="9">Scaffold in place</text>
                    <circle cx="40" cy="195" r="8" fill="#0e7490" opacity="0.3"/>
                    <circle cx="60" cy="195" r="8" fill="#0e7490" opacity="0.4"/>
                    <circle cx="80" cy="195" r="8" fill="#0e7490" opacity="0.3"/>
                    <text x="60" y="220" text-anchor="middle" fill="#64748b" font-size="8">Mesh structure intact</text>

                    <!-- Stage 2 -->
                    <rect x="120" y="130" width="80" height="100" rx="8" fill="#ecfeff" stroke="#cffafe" stroke-width="1"/>
                    <text x="160" y="155" text-anchor="middle" fill="#0891b2" font-size="10" font-weight="bold">Early Healing</text>
                    <text x="160" y="170" text-anchor="middle" fill="#64748b" font-size="9">Cells infiltrate</text>
                    <circle cx="135" cy="195" r="8" fill="#0891b2" opacity="0.5"/>
                    <circle cx="155" cy="190" r="8" fill="#0891b2" opacity="0.7"/>
                    <circle cx="175" cy="200" r="8" fill="#0891b2" opacity="0.6"/>
                    <circle cx="185" cy="190" r="6" fill="#0891b2" opacity="0.4"/>
                    <text x="160" y="220" text-anchor="middle" fill="#64748b" font-size="8">Blood vessels form</text>

                    <!-- Stage 3 -->
                    <rect x="220" y="130" width="80" height="100" rx="8" fill="#cffafe" stroke="#a5f3fc" stroke-width="1"/>
                    <text x="260" y="155" text-anchor="middle" fill="#06b6d4" font-size="10" font-weight="bold">Remodeling</text>
                    <text x="260" y="170" text-anchor="middle" fill="#64748b" font-size="9">Tissue grows</text>
                    <circle cx="235" cy="195" r="8" fill="#06b6d4" opacity="0.6"/>
                    <circle cx="260" cy="190" r="12" fill="#22c55e" opacity="0.5"/>
                    <circle cx="285" cy="195" r="8" fill="#06b6d4" opacity="0.6"/>
                    <text x="260" y="220" text-anchor="middle" fill="#64748b" font-size="8">Collagen deposition</text>

                    <!-- Stage 4 -->
                    <rect x="300" y="130" width="80" height="100" rx="8" fill="#d1fae5" stroke="#a7f3d0" stroke-width="1"/>
                    <text x="340" y="155" text-anchor="middle" fill="#10b981" font-size="10" font-weight="bold">Complete</text>
                    <text x="340" y="170" text-anchor="middle" fill="#64748b" font-size="9">Native tissue</text>
                    <ellipse cx="340" cy="195" rx="35" ry="20" fill="#22c55e" opacity="0.4"/>
                    <ellipse cx="340" cy="195" rx="25" ry="14" fill="#22c55e" opacity="0.6"/>
                    <text x="340" y="220" text-anchor="middle" fill="#64748b" font-size="8">Strong, natural repair</text>

                    <!-- Result box -->
                    <rect x="100" y="280" width="200" height="60" rx="10" fill="#10b981" opacity="0.1" stroke="#10b981" stroke-width="2"/>
                    <text x="200" y="305" text-anchor="middle" fill="#065f46" font-size="12" font-weight="bold">Result: Native Tissue Reinforcement</text>
                    <text x="200" y="325" text-anchor="middle" fill="#047857" font-size="10">Mesh gradually replaced by patient's own tissue</text>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Advantages Section -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Advantages of Biological Mesh</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Biological mesh offers several unique benefits, particularly in challenging clinical scenarios.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Infection Resistance</h3>
                <p class="text-slate-600 text-sm">Biological mesh has better resistance to infection and can be used safely in contaminated fields where synthetic mesh would be contraindicated.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Natural Remodeling</h3>
                <p class="text-slate-600 text-sm">The body's cells gradually replace the mesh with native tissue, resulting in a repair that is fully integrated into your body.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Reduced Adhesions</h3>
                <p class="text-slate-600 text-sm">Biological materials tend to cause fewer adhesions to intra-abdominal organs compared to some synthetic meshes.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">No Long-Term Foreign Body</h3>
                <p class="text-slate-600 text-sm">Once fully remodeled, there is minimal permanent foreign material left in the body, which may reduce long-term complications.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Preserved Extracellular Matrix</h3>
                <p class="text-slate-600 text-sm">The natural collagen structure provides scaffolding for tissue growth while maintaining mechanical strength during healing.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Biocompatible</h3>
                <p class="text-slate-600 text-sm">Biological mesh is well-tolerated by the body with minimal inflammatory response compared to synthetic alternatives.</p>
            </div>
        </div>
    </div>
</section>

<!-- Cost Considerations -->
<section class="py-16 lg:py-20 bg-gradient-to-br from-slate-800 to-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold mb-4">Cost Considerations</h2>
            <p class="text-lg text-slate-300 max-w-2xl mx-auto">Understanding the investment in biological mesh for your hernia repair.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20">
                <h3 class="text-xl font-bold text-white mb-4">Investment in Your Health</h3>
                <p class="text-slate-300 mb-4">
                    Biological mesh typically costs more than synthetic mesh due to the complex processing required to ensure safety and efficacy. However, this investment may be justified in complex cases.
                </p>
                <ul class="space-y-2 text-slate-300 text-sm">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Higher upfront cost than synthetic mesh
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        May reduce need for future revision surgery
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Potential for better outcomes in high-risk cases
                    </li>
                </ul>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20">
                <h3 class="text-xl font-bold text-white mb-4">Insurance & Coverage</h3>
                <p class="text-slate-300 mb-4">
                    Coverage for biological mesh varies by insurance plan. Dr. Kumar's office will help verify your benefits and discuss options.
                </p>
                <ul class="space-y-2 text-slate-300 text-sm">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Pre-authorization assistance available
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Flexible payment options
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Transparent pricing discussion
                    </li>
                </ul>
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
                <h4 class="font-semibold text-slate-800 mb-2">Is biological mesh permanent?</h4>
                <p class="text-slate-600">The mesh itself is gradually replaced by your body's own tissue over time (typically 1-2 years). What remains is native tissue reinforced by the remodeling process, so the repair is effectively permanent.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Why is biological mesh more expensive?</h4>
                <p class="text-slate-600">The processing required to safely prepare biological tissue (removing cells while preserving the collagen scaffold) is complex and expensive. Each piece of mesh undergoes rigorous testing for safety and efficacy.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Can I choose biological mesh for any hernia?</h4>
                <p class="text-slate-600">Biological mesh is typically reserved for specific clinical situations. For straightforward, clean hernia repairs, synthetic mesh is usually the standard of care. Dr. Kumar will recommend the most appropriate option for your individual case.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Are there religious concerns with porcine mesh?</h4>
                <p class="text-slate-600">Porcine mesh may not be suitable for patients who avoid pork products for religious or cultural reasons. Human dermis mesh is available as an alternative for such patients.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 lg:py-20 bg-gradient-to-r from-emerald-600 to-emerald-700">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-white mb-4">Need a Complex Hernia Repair?</h2>
        <p class="text-xl text-emerald-100 mb-8">Dr. Kumar has extensive experience with both standard and biological mesh for all types of hernia repairs.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="../book-appointment.php" class="inline-flex items-center gap-2 bg-white text-emerald-700 font-semibold px-8 py-4 rounded-lg hover:bg-emerald-50 transition">
                Schedule Consultation
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