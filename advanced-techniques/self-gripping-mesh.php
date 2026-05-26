<?php
require_once __DIR__ . '/../includes/config.php';

$page_title       = 'Self-Gripping Mesh for Hernia Repair | Dr. Kumar Chennai';
$page_description = 'Self-gripping mesh technology eliminates sutures for hernia repair. Dr. Kumar offers no-sutures mesh implantation in Chennai with reduced operative time and less chronic pain.';
$page_keywords    = 'self-gripping mesh hernia repair Chennai, sutureless mesh, self-fixating mesh, no-sutures hernia surgery, ProGrip mesh Chennai, reduced pain hernia repair';
$page_url         = $site['url'] . 'advanced-techniques/self-gripping-mesh.php';
$page_image       = $site['url'] . 'assets/images/self-gripping-mesh.jpg';
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
<section class="relative bg-gradient-to-br from-slate-900 via-teal-900 to-slate-900 text-white overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-teal-500 rounded-full filter blur-3xl opacity-10"></div>
        <div class="absolute bottom-0 left-1/4 w-72 h-72 bg-accent rounded-full filter blur-3xl opacity-10"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-teal-500/20 border border-teal-400/30 rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span class="text-sm font-medium text-teal-300">Innovation in Mesh Design</span>
                </div>
                <h1 class="font-display text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-6">
                    Self-Gripping<br>
                    <span class="text-teal-400">Mesh Technology</span>
                </h1>
                <p class="text-lg text-slate-300 leading-relaxed mb-8">
                    Revolutionary self-gripping mesh eliminates the need for sutures or tackers. Microgrip technology provides secure fixation without penetrating tissue, reducing pain and improving outcomes.
                </p>
                <a href="../book-appointment.php" class="inline-flex items-center gap-2 bg-teal-600 hover:bg-teal-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                    Discover This Option
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-teal-700/30 to-slate-800/50 rounded-2xl p-8 border border-teal-400/20">
                    <svg class="w-full" viewBox="0 0 400 300" fill="none">
                        <!-- Self-gripping mesh illustration -->
                        <defs>
                            <linearGradient id="gripGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#14b8a6"/>
                                <stop offset="100%" style="stop-color:#0d9488"/>
                            </linearGradient>
                        </defs>

                        <!-- Mesh base -->
                        <rect x="80" y="80" width="240" height="120" rx="10" fill="url(#gripGradient)" opacity="0.3" stroke="#14b8a6" stroke-width="2"/>

                        <!-- Grip elements visualization -->
                        <g fill="#0d9488">
                            <!-- Top row of grips -->
                            <rect x="90" y="90" width="4" height="8" rx="1"/>
                            <rect x="110" y="90" width="4" height="8" rx="1"/>
                            <rect x="130" y="90" width="4" height="8" rx="1"/>
                            <rect x="150" y="90" width="4" height="8" rx="1"/>
                            <rect x="170" y="90" width="4" height="8" rx="1"/>
                            <rect x="190" y="90" width="4" height="8" rx="1"/>
                            <rect x="210" y="90" width="4" height="8" rx="1"/>
                            <rect x="230" y="90" width="4" height="8" rx="1"/>
                            <rect x="250" y="90" width="4" height="8" rx="1"/>
                            <rect x="270" y="90" width="4" height="8" rx="1"/>
                            <rect x="290" y="90" width="4" height="8" rx="1"/>
                            <rect x="310" y="90" width="4" height="8" rx="1"/>

                            <!-- Second row of grips -->
                            <rect x="90" y="115" width="4" height="8" rx="1"/>
                            <rect x="130" y="115" width="4" height="8" rx="1"/>
                            <rect x="170" y="115" width="4" height="8" rx="1"/>
                            <rect x="210" y="115" width="4" height="8" rx="1"/>
                            <rect x="250" y="115" width="4" height="8" rx="1"/>
                            <rect x="290" y="115" width="4" height="8" rx="1"/>
                            <rect x="310" y="115" width="4" height="8" rx="1"/>

                            <!-- Third row of grips -->
                            <rect x="90" y="140" width="4" height="8" rx="1"/>
                            <rect x="110" y="140" width="4" height="8" rx="1"/>
                            <rect x="130" y="140" width="4" height="8" rx="1"/>
                            <rect x="150" y="140" width="4" height="8" rx="1"/>
                            <rect x="170" y="140" width="4" height="8" rx="1"/>
                            <rect x="190" y="140" width="4" height="8" rx="1"/>
                            <rect x="210" y="140" width="4" height="8" rx="1"/>
                            <rect x="230" y="140" width="4" height="8" rx="1"/>
                            <rect x="250" y="140" width="4" height="8" rx="1"/>
                            <rect x="270" y="140" width="4" height="8" rx="1"/>
                            <rect x="290" y="140" width="4" height="8" rx="1"/>
                            <rect x="310" y="140" width="4" height="8" rx="1"/>

                            <!-- Bottom row of grips -->
                            <rect x="90" y="165" width="4" height="8" rx="1"/>
                            <rect x="130" y="165" width="4" height="8" rx="1"/>
                            <rect x="170" y="165" width="4" height="8" rx="1"/>
                            <rect x="210" y="165" width="4" height="8" rx="1"/>
                            <rect x="250" y="165" width="4" height="8" rx="1"/>
                            <rect x="290" y="165" width="4" height="8" rx="1"/>
                            <rect x="310" y="165" width="4" height="8" rx="1"/>

                            <!-- Last row of grips -->
                            <rect x="90" y="185" width="4" height="8" rx="1"/>
                            <rect x="110" y="185" width="4" height="8" rx="1"/>
                            <rect x="130" y="185" width="4" height="8" rx="1"/>
                            <rect x="150" y="185" width="4" height="8" rx="1"/>
                            <rect x="170" y="185" width="4" height="8" rx="1"/>
                            <rect x="190" y="185" width="4" height="8" rx="1"/>
                            <rect x="210" y="185" width="4" height="8" rx="1"/>
                            <rect x="230" y="185" width="4" height="8" rx="1"/>
                            <rect x="250" y="185" width="4" height="8" rx="1"/>
                            <rect x="270" y="185" width="4" height="8" rx="1"/>
                            <rect x="290" y="185" width="4" height="8" rx="1"/>
                            <rect x="310" y="185" width="4" height="8" rx="1"/>
                        </g>

                        <!-- Label -->
                        <text x="200" y="230" text-anchor="middle" fill="#14b8a6" font-size="12" font-weight="bold">Microgrip Technology</text>
                        <text x="200" y="248" text-anchor="middle" fill="#5eead4" font-size="10">Self-fixating surface</text>

                        <!-- Key features -->
                        <rect x="80" y="260" width="100" height="35" rx="8" fill="#0f766e" opacity="0.5" stroke="#14b8a6" stroke-width="1"/>
                        <text x="130" y="280" text-anchor="middle" fill="#5eead4" font-size="9">No Sutures</text>
                        <text x="130" y="292" text-anchor="middle" fill="#5eead4" font-size="8">Required</text>

                        <rect x="190" y="260" width="100" height="35" rx="8" fill="#0f766e" opacity="0.5" stroke="#14b8a6" stroke-width="1"/>
                        <text x="240" y="280" text-anchor="middle" fill="#5eead4" font-size="9">Reduced</text>
                        <text x="240" y="292" text-anchor="middle" fill="#5eead4" font-size="8">Chronic Pain</text>

                        <rect x="300" y="260" width="100" height="35" rx="8" fill="#0f766e" opacity="0.5" stroke="#14b8a6" stroke-width="1"/>
                        <text x="350" y="280" text-anchor="middle" fill="#5eead4" font-size="9">Faster</text>
                        <text x="350" y="292" text-anchor="middle" fill="#5eead4" font-size="8">Surgery</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How Self-Gripping Mesh Works -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">How Self-Gripping Mesh Works</h2>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">
                Self-gripping mesh features microgrip technology on one surface, allowing it to cling to tissue without sutures, tacks, or glue. This innovation represents a significant advancement in hernia repair technique.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
                <svg class="w-full" viewBox="0 0 400 350" fill="none">
                    <!-- Comparison: Sutured vs Self-Gripping -->
                    <text x="200" y="30" text-anchor="middle" fill="#64748b" font-size="14" font-weight="bold">Traditional Sutured Mesh vs Self-Gripping Mesh</text>

                    <!-- Traditional mesh with sutures -->
                    <rect x="30" y="60" width="160" height="150" rx="8" fill="#f1f5f9" stroke="#94a3b8" stroke-width="2"/>
                    <text x="110" y="85" text-anchor="middle" fill="#64748b" font-size="11" font-weight="bold">Traditional Mesh</text>
                    <rect x="50" y="100" width="120" height="80" rx="5" fill="#cbd5e1"/>

                    <!-- Sutures representation -->
                    <line x1="70" y1="180" x2="70" y2="200" stroke="#ef4444" stroke-width="3"/>
                    <line x1="110" y1="180" x2="110" y2="200" stroke="#ef4444" stroke-width="3"/>
                    <line x1="150" y1="180" x2="150" y2="200" stroke="#ef4444" stroke-width="3"/>

                    <circle cx="70" cy="205" r="4" fill="#ef4444"/>
                    <circle cx="110" cy="205" r="4" fill="#ef4444"/>
                    <circle cx="150" cy="205" r="4" fill="#ef4444"/>

                    <text x="110" y="230" text-anchor="middle" fill="#ef4444" font-size="9">Multiple suture points</text>
                    <text x="110" y="245" text-anchor="middle" fill="#94a3b8" font-size="8">Potential nerve injury</text>

                    <!-- Self-gripping mesh -->
                    <rect x="210" y="60" width="160" height="150" rx="8" fill="#f0fdf4" stroke="#14b8a6" stroke-width="2"/>
                    <text x="290" y="85" text-anchor="middle" fill="#0d9488" font-size="11" font-weight="bold">Self-Gripping Mesh</text>
                    <rect x="230" y="100" width="120" height="80" rx="5" fill="#5eead4" opacity="0.5" stroke="#14b8a6" stroke-width="1"/>

                    <!-- Grip lines -->
                    <line x1="235" y1="105" x2="235" y2="175" stroke="#0d9488" stroke-width="1"/>
                    <line x1="260" y1="105" x2="260" y2="175" stroke="#0d9488" stroke-width="1"/>
                    <line x1="285" y1="105" x2="285" y2="175" stroke="#0d9488" stroke-width="1"/>
                    <line x1="310" y1="105" x2="310" y2="175" stroke="#0d9488" stroke-width="1"/>
                    <line x1="335" y1="105" x2="335" y2="175" stroke="#0d9488" stroke-width="1"/>

                    <!-- Arrows showing grip action -->
                    <path d="M350 120 L330 130" stroke="#14b8a6" stroke-width="2" marker-end="url(#arrowGreen)"/>
                    <path d="M350 150 L330 150" stroke="#14b8a6" stroke-width="2"/>
                    <path d="M350 180 L330 170" stroke="#14b8a6" stroke-width="2"/>

                    <text x="290" y="230" text-anchor="middle" fill="#14b8a6" font-size="9">No sutures needed</text>
                    <text x="290" y="245" text-anchor="middle" fill="#0d9488" font-size="8">Microgrips hold securely</text>

                    <!-- Result comparison -->
                    <rect x="30" y="270" width="340" height="70" rx="10" fill="#fef3c7" stroke="#f59e0b" stroke-width="2"/>
                    <text x="200" y="295" text-anchor="middle" fill="#b45309" font-size="12" font-weight="bold">Key Benefit: Eliminating Suture-Related Pain</text>
                    <text x="200" y="315" text-anchor="middle" fill="#92400e" font-size="10">Sutures and tackers can cause chronic groin pain. Self-gripping mesh eliminates</text>
                    <text x="200" y="330" text-anchor="middle" fill="#92400e" font-size="10">these fixation points, significantly reducing post-operative discomfort.</text>

                    <!-- Arrow definition -->
                    <defs>
                        <marker id="arrowGreen" markerWidth="10" markerHeight="10" refX="9" refY="3" orient="auto">
                            <path d="M0,0 L0,6 L9,3 z" fill="#14b8a6"/>
                        </marker>
                    </defs>
                </svg>
            </div>

            <div class="space-y-6">
                <div class="flex gap-4 items-start">
                    <div class="w-10 h-10 bg-teal-600 text-white rounded-xl flex items-center justify-center font-bold flex-shrink-0">1</div>
                    <div>
                        <h4 class="font-semibold text-slate-800 mb-1">Microgrip Surface</h4>
                        <p class="text-slate-600 text-sm">One side of the mesh has thousands of tiny microgrips that hold onto tissue when placed in contact, similar to hook-and-loop fasteners.</p>
                    </div>
                </div>

                <div class="flex gap-4 items-start">
                    <div class="w-10 h-10 bg-teal-600 text-white rounded-xl flex items-center justify-center font-bold flex-shrink-0">2</div>
                    <div>
                        <h4 class="font-semibold text-slate-800 mb-1">Simple Placement</h4>
                        <p class="text-slate-600 text-sm">Dr. Kumar positions the mesh and lightly presses it into place. The microgrips engage immediately, holding the mesh securely.</p>
                    </div>
                </div>

                <div class="flex gap-4 items-start">
                    <div class="w-10 h-10 bg-teal-600 text-white rounded-xl flex items-center justify-center font-bold flex-shrink-0">3</div>
                    <div>
                        <h4 class="font-semibold text-slate-800 mb-1">No Additional Fixation</h4>
                        <p class="text-slate-600 text-sm">Unlike traditional mesh, self-gripping mesh doesn't require sutures, tacks, or glue for most applications, eliminating fixation-related complications.</p>
                    </div>
                </div>

                <div class="flex gap-4 items-start">
                    <div class="w-10 h-10 bg-teal-600 text-white rounded-xl flex items-center justify-center font-bold flex-shrink-0">4</div>
                    <div>
                        <h4 class="font-semibold text-slate-800 mb-1">Immediate Security</h4>
                        <p class="text-slate-600 text-sm">The grip is instant and strong. The mesh stays in position while tissue integration occurs over the following months.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Benefits of Self-Gripping Mesh</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Reduced Operative Time</h3>
                <p class="text-slate-600 text-sm">No time spent placing sutures or tacks. Mesh placement is quick and secure, reducing overall surgical time.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Less Chronic Pain</h3>
                <p class="text-slate-600 text-sm">Studies show significantly lower rates of chronic groin pain compared to mesh fixed with sutures or tackers.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">No Foreign Material</h3>
                <p class="text-slate-600 text-sm">Eliminates risk of tackers or sutures being left as foreign bodies that can cause long-term nerve irritation.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Strong Initial Fixation</h3>
                <p class="text-slate-600 text-sm">The grip is immediate and strong from the moment of placement, providing security even before tissue integration begins.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Consistent Placement</h3>
                <p class="text-slate-600 text-sm">The mesh can be repositioned before final engagement, allowing for optimal placement without rush.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Ideal for Active Patients</h3>
                <p class="text-slate-600 text-sm">Particularly beneficial for younger, more active patients who may be at higher risk for suture-related complications.</p>
            </div>
        </div>
    </div>
</section>

<!-- Ideal Candidates -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12">
            <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-slate-800 mb-6">Ideal Candidates for Self-Gripping Mesh</h3>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm">
                        <div class="w-10 h-10 bg-teal-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Young, Active Patients</h4>
                            <p class="text-slate-600 text-sm">Patients who are physically active benefit most from reduced fixation-related complications.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm">
                        <div class="w-10 h-10 bg-teal-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Inguinal Hernia Patients</h4>
                            <p class="text-slate-600 text-sm">Particularly effective for open inguinal hernia repair (Lichtenstein technique).</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm">
                        <div class="w-10 h-10 bg-teal-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Concerned About Chronic Pain</h4>
                            <p class="text-slate-600 text-sm">Patients specifically worried about post-herniorrhaphy pain syndrome may benefit from sutureless repair.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm">
                        <div class="w-10 h-10 bg-teal-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Bilateral Hernia Repair</h4>
                            <p class="text-slate-600 text-sm">When operating on both sides, reduced operative time is especially valuable.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-slate-800 mb-6">Important Considerations</h3>

                <div class="space-y-4">
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                        <h4 class="font-semibold text-slate-800 mb-2">Learning Curve</h4>
                        <p class="text-slate-600 text-sm">Surgeons need training on proper placement technique. Dr. Kumar has extensive experience with self-gripping mesh technology and ensures optimal placement.</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                        <h4 class="font-semibold text-slate-800 mb-2">Not for All Hernias</h4>
                        <p class="text-slate-600 text-sm">While excellent for many inguinal hernias, certain complex repairs or laparoscopic approaches may still benefit from alternative fixation methods.</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                        <h4 class="font-semibold text-slate-800 mb-2">Cost Considerations</h4>
                        <p class="text-slate-600 text-sm">Self-gripping mesh may cost slightly more than traditional mesh, but the benefits often outweigh this difference, especially considering reduced pain complications.</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                        <h4 class="font-semibold text-slate-800 mb-2">Evidence-Based</h4>
                        <p class="text-slate-600 text-sm">Multiple clinical studies and meta-analyses support the use of self-gripping mesh for reducing chronic pain after inguinal hernia repair.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clinical Evidence -->
<section class="py-16 lg:py-20 bg-gradient-to-br from-teal-700 to-cyan-800 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold mb-4">Clinical Evidence</h2>
            <p class="text-lg text-teal-100 max-w-2xl mx-auto">Self-gripping mesh is supported by extensive clinical research and real-world outcomes.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <div class="text-4xl font-bold text-accent mb-2">50%</div>
                <div class="font-semibold mb-2">Less Chronic Pain</div>
                <p class="text-teal-200 text-sm">Compared to sutured repair in published studies</p>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <div class="text-4xl font-bold text-accent mb-2">15-20</div>
                <div class="font-semibold mb-2">Minutes Saved</div>
                <p class="text-teal-200 text-sm">Average operative time reduction per case</p>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <div class="text-4xl font-bold text-accent mb-2">98%</div>
                <div class="font-semibold mb-2">Patient Satisfaction</div>
                <p class="text-teal-200 text-sm">High satisfaction rates in long-term follow-up</p>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <div class="text-4xl font-bold text-accent mb-2"><1%</div>
                <div class="font-semibold mb-2">Recurrence Rate</div>
                <p class="text-teal-200 text-sm">Equivalent or better than traditional techniques</p>
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
                <h4 class="font-semibold text-slate-800 mb-2">Is self-gripping mesh as strong as sutured mesh?</h4>
                <p class="text-slate-600">Yes. Studies show that the microgrip technology provides fixation strength equivalent to or greater than traditional sutures, especially in the early post-operative period when security is most critical.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Can the mesh be repositioned if needed?</h4>
                <p class="text-slate-600">Yes, one advantage of self-gripping mesh is that it can be lifted and repositioned before the microgrips fully engage. This allows Dr. Kumar to ensure optimal placement before final fixation.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Will I feel the microgrips after surgery?</h4>
                <p class="text-slate-600">No. Once the mesh is in place, the grip elements are on the underside facing tissue. You should not feel anything from the grip technology. The mesh integrates with tissue over time.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Is self-gripping mesh suitable for laparoscopic surgery?</h4>
                <p class="text-slate-600">While primarily used in open surgery, self-gripping mesh can be adapted for laparoscopic approaches in certain situations. Dr. Kumar will recommend the most appropriate technique for your specific case.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 lg:py-20 bg-gradient-to-r from-teal-600 to-cyan-600">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-white mb-4">Interested in Self-Gripping Mesh?</h2>
        <p class="text-xl text-teal-100 mb-8">Dr. Kumar will evaluate your hernia and determine if self-gripping mesh is the best option for you.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="../book-appointment.php" class="inline-flex items-center gap-2 bg-white text-teal-700 font-semibold px-8 py-4 rounded-lg hover:bg-teal-50 transition">
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