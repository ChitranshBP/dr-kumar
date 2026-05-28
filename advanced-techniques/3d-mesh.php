<?php
require __DIR__ . '/../includes/header.php';
?>
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
<section class="relative bg-brand-950 text-white overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-brand-500 rounded-full filter blur-3xl opacity-10"></div>
        <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-accent rounded-full filter blur-3xl opacity-10"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-accent/20 border border-accent/30 rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.361 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                    <span class="text-sm font-medium text-accent">Advanced Mesh Technology</span>
                </div>
                <h1 class="font-display text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-6">
                    3D Mesh<br>
                    <span class="text-accent">Technology</span>
                </h1>
                <p class="text-lg text-slate-300 leading-relaxed mb-8">
                    Revolutionary three-dimensional mesh designed to match your body's anatomy perfectly. Experience superior hernia repair with better fit, less pain, and faster recovery.
                </p>
                <a href="../book-appointment.php" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-500 text-slate-900 font-semibold px-6 py-3 rounded-lg transition">
                    Learn About Your Options
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-brand-700/30 to-brand-900/50 rounded-2xl p-8 border border-brand-400/20">
                    <svg class="w-full" viewBox="0 0 400 300" fill="none">
                        <!-- 3D Mesh representation -->
                        <defs>
                            <linearGradient id="meshGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#f59e0b"/>
                                <stop offset="100%" style="stop-color:#d97706"/>
                            </linearGradient>
                            <filter id="glow">
                                <feGaussianBlur stdDeviation="3" result="coloredBlur"/>
                                <feMerge>
                                    <feMergeNode in="coloredBlur"/>
                                    <feMergeNode in="SourceGraphic"/>
                                </feMerge>
                            </filter>
                        </defs>
                        <!-- 3D Box representing the mesh -->
                        <path d="M100 200 L150 150 L250 150 L300 200 L250 250 L150 250 Z" fill="url(#meshGradient)" opacity="0.3" stroke="#f59e0b" stroke-width="2" filter="url(#glow)"/>
                        <path d="M150 150 L150 100 L250 100 L250 150" fill="none" stroke="#f59e0b" stroke-width="2"/>
                        <path d="M150 100 L200 80 L300 80 L300 200" fill="none" stroke="#f59e0b" stroke-width="1" opacity="0.5"/>
                        <!-- Mesh pattern on front face -->
                        <line x1="160" y1="160" x2="290" y2="160" stroke="#f59e0b" stroke-width="1" opacity="0.7"/>
                        <line x1="160" y1="180" x2="290" y2="180" stroke="#f59e0b" stroke-width="1" opacity="0.7"/>
                        <line x1="160" y1="200" x2="290" y2="200" stroke="#f59e0b" stroke-width="1" opacity="0.7"/>
                        <line x1="160" y1="220" x2="290" y2="220" stroke="#f59e0b" stroke-width="1" opacity="0.7"/>
                        <line x1="170" y1="150" x2="170" y2="250" stroke="#f59e0b" stroke-width="1" opacity="0.7"/>
                        <line x1="200" y1="150" x2="200" y2="250" stroke="#f59e0b" stroke-width="1" opacity="0.7"/>
                        <line x1="230" y1="150" x2="230" y2="250" stroke="#f59e0b" stroke-width="1" opacity="0.7"/>
                        <line x1="260" y1="150" x2="260" y2="250" stroke="#f59e0b" stroke-width="1" opacity="0.7"/>
                        <!-- 3D depth indicators -->
                        <path d="M100 200 L100 150 L150 100" stroke="#06b6d4" stroke-width="2"/>
                        <path d="M300 200 L300 150 L250 100" stroke="#06b6d4" stroke-width="2"/>
                        <!-- Corner markers -->
                        <circle cx="100" cy="200" r="6" fill="#06b6d4"/>
                        <circle cx="300" cy="200" r="6" fill="#06b6d4"/>
                        <circle cx="150" cy="150" r="6" fill="#06b6d4"/>
                        <circle cx="250" cy="150" r="6" fill="#06b6d4"/>
                        <circle cx="150" cy="250" r="6" fill="#06b6d4"/>
                        <circle cx="250" cy="250" r="6" fill="#06b6d4"/>
                        <!-- Label -->
                        <text x="200" y="280" text-anchor="middle" fill="#f59e0b" font-size="14" font-weight="bold">3D Anatomical Mesh</text>
                    </svg>
                    <div class="mt-6 grid grid-cols-2 gap-4">
                        <div class="bg-slate-800/50 rounded-lg p-4 text-center border border-slate-700">
                            <div class="text-2xl font-bold text-accent">Anatomical</div>
                            <div class="text-sm text-slate-400">Body-Matched Shape</div>
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-4 text-center border border-slate-700">
                            <div class="text-2xl font-bold text-accent">Self-Expanding</div>
                            <div class="text-sm text-slate-400">Perfect Fit Every Time</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What is 3D Mesh -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-brand-100 text-brand-700 rounded-full px-4 py-2 mb-6 text-sm font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    Mesh Technology
                </div>
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-6">What is 3D Mesh?</h2>
                <p class="text-lg text-slate-600 mb-6">
                    Traditional flat mesh has been the standard for decades, but 3D mesh represents a significant advancement in hernia repair technology. Unlike its flat predecessors, 3D mesh is pre-shaped to match the natural contours of the abdominal wall.
                </p>
                <p class="text-lg text-slate-600 mb-8">
                    This three-dimensional design allows the mesh to conform to your body's anatomy more naturally, reducing the risk of mesh folding, bunching, or displacement that can occur with flat mesh implants.
                </p>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-brand-50 rounded-xl p-4">
                        <svg class="w-8 h-8 text-brand-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <h4 class="font-semibold text-slate-800">FDA Approved</h4>
                        <p class="text-sm text-slate-600">Safety validated</p>
                    </div>
                    <div class="bg-brand-50 rounded-xl p-4">
                        <svg class="w-8 h-8 text-brand-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.361 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                        <h4 class="font-semibold text-slate-800">Permanent Material</h4>
                        <p class="text-sm text-slate-600">Long-lasting repair</p>
                    </div>
                </div>
            </div>
            <div class="bg-slate-50 rounded-2xl p-8">
                <svg class="w-full" viewBox="0 0 400 300" fill="none">
                    <!-- Comparison: Flat vs 3D -->
                    <text x="100" y="30" text-anchor="middle" fill="#64748b" font-size="14" font-weight="bold">Traditional Flat Mesh</text>
                    <text x="300" y="30" text-anchor="middle" fill="#0e7490" font-size="14" font-weight="bold">3D Mesh</text>

                    <!-- Flat mesh -->
                    <rect x="30" y="50" width="140" height="100" rx="5" fill="#94a3b8" stroke="#64748b" stroke-width="2"/>
                    <line x1="40" y1="60" x2="160" y2="60" stroke="#64748b" stroke-width="1"/>
                    <line x1="40" y1="80" x2="160" y2="80" stroke="#64748b" stroke-width="1"/>
                    <line x1="40" y1="100" x2="160" y2="100" stroke="#64748b" stroke-width="1"/>
                    <line x1="40" y1="120" x2="160" y2="120" stroke="#64748b" stroke-width="1"/>
                    <line x1="60" y1="50" x2="60" y2="150" stroke="#64748b" stroke-width="1"/>
                    <line x1="100" y1="50" x2="100" y2="150" stroke="#64748b" stroke-width="1"/>
                    <line x1="140" y1="50" x2="140" y2="150" stroke="#64748b" stroke-width="1"/>
                    <!-- Curved surface representation -->
                    <path d="M50 160 Q100 180 150 160" stroke="#94a3b8" stroke-width="2" fill="none"/>
                    <text x="100" y="195" text-anchor="middle" fill="#ef4444" font-size="10">Gap/Folding</text>
                    <!-- Arrow indicating problem -->
                    <path d="M100 170 L100 185" stroke="#ef4444" stroke-width="2" marker-end="url(#arrowhead)"/>

                    <!-- 3D Mesh -->
                    <path d="M230 50 L270 50 L300 80 L300 150 L270 170 L230 170 L200 150 L200 80 Z" fill="#f59e0b" opacity="0.3" stroke="#f59e0b" stroke-width="2"/>
                    <path d="M230 50 L270 50 L300 80 L300 150 L270 170 L230 170 L200 150 L200 80 Z" fill="none" stroke="#0e7490" stroke-width="2"/>
                    <!-- Mesh pattern -->
                    <line x1="210" y1="90" x2="290" y2="90" stroke="#0e7490" stroke-width="1" opacity="0.7"/>
                    <line x1="205" y1="110" x2="295" y2="110" stroke="#0e7490" stroke-width="1" opacity="0.7"/>
                    <line x1="205" y1="130" x2="295" y2="130" stroke="#0e7490" stroke-width="1" opacity="0.7"/>
                    <line x1="210" y1="150" x2="290" y2="150" stroke="#0e7490" stroke-width="1" opacity="0.7"/>
                    <!-- 3D depth lines -->
                    <line x1="200" y1="80" x2="200" y2="150" stroke="#0e7490" stroke-width="1" opacity="0.5"/>
                    <line x1="230" y1="50" x2="230" y2="170" stroke="#0e7490" stroke-width="1" opacity="0.5"/>
                    <line x1="270" y1="50" x2="270" y2="170" stroke="#0e7490" stroke-width="1" opacity="0.5"/>
                    <line x1="300" y1="80" x2="300" y2="150" stroke="#0e7490" stroke-width="1" opacity="0.5"/>
                    <!-- Curved surface representation -->
                    <path d="M200 180 Q250 200 300 180" stroke="#0e7490" stroke-width="2" fill="none"/>
                    <text x="250" y="215" text-anchor="middle" fill="#10b981" font-size="10">Contour Matching</text>
                    <path d="M250 195 L250 205" stroke="#10b981" stroke-width="2"/>

                    <!-- Labels -->
                    <text x="100" y="240" text-anchor="middle" fill="#64748b" font-size="12">May not conform to body shape</text>
                    <text x="250" y="240" text-anchor="middle" fill="#0e7490" font-size="12">Pre-shaped for anatomical fit</text>

                    <!-- Check marks for 3D -->
                    <circle cx="250" cy="260" r="12" fill="#10b981"/>
                    <path d="M244 260 L248 264 L256 256" stroke="white" stroke-width="2" fill="none"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Advantages of 3D Mesh -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Advantages of 3D Mesh Over Flat Mesh</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">The three-dimensional design provides significant clinical benefits compared to traditional flat mesh implants.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Better Anatomical Fit</h3>
                <p class="text-slate-600 text-sm">Pre-shaped to match the natural contours of your abdominal wall, reducing gaps and coverage issues.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Reduced Folding</h3>
                <p class="text-slate-600 text-sm">3D structure maintains its shape inside the body, minimizing mesh folding that can cause complications.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Stable Positioning</h3>
                <p class="text-slate-600 text-sm">The 3D shape helps the mesh stay in place without sutures or tackers in many cases.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Less Chronic Pain</h3>
                <p class="text-slate-600 text-sm">Better distribution of forces and reduced nerve irritation leads to less post-operative discomfort.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Lower Recurrence</h3>
                <p class="text-slate-600 text-sm">Superior coverage and stability contribute to lower hernia recurrence rates over time.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Faster Recovery</h3>
                <p class="text-slate-600 text-sm">Minimal fixation requirements mean less tissue trauma and quicker return to normal activities.</p>
            </div>
        </div>
    </div>
</section>

<!-- How 3D Mesh Works -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <svg class="w-full" viewBox="0 0 400 350" fill="none">
                    <!-- Cross-section view of body wall -->
                    <rect x="50" y="50" width="300" height="200" rx="10" fill="#fef3c7" stroke="#f59e0b" stroke-width="2"/>
                    <text x="200" y="30" text-anchor="middle" fill="#64748b" font-size="12">Abdominal Wall Cross-Section</text>

                    <!-- Layers -->
                    <rect x="60" y="60" width="280" height="40" rx="5" fill="#fecaca" stroke="#ef4444" stroke-width="1"/>
                    <text x="90" y="85" fill="#991b1b" font-size="9">Skin</text>

                    <rect x="60" y="100" width="280" height="30" rx="3" fill="#fde68a" stroke="#eab308" stroke-width="1"/>
                    <text x="90" y="120" fill="#a16207" font-size="9">Fat</text>

                    <rect x="60" y="130" width="280" height="60" rx="3" fill="#d1fae5" stroke="#22c55e" stroke-width="1"/>
                    <text x="90" y="165" fill="#15803d" font-size="9">Muscle</text>

                    <rect x="60" y="190" width="280" height="30" rx="3" fill="#fed7aa" stroke="#f97316" stroke-width="1"/>
                    <text x="90" y="210" fill="#c2410c" font-size="9">Peritoneum</text>

                    <!-- Hernia defect -->
                    <ellipse cx="200" cy="180" rx="40" ry="25" fill="#fef3c7" stroke="#ef4444" stroke-width="2" stroke-dasharray="4"/>
                    <text x="200" y="183" text-anchor="middle" fill="#dc2626" font-size="10">Hernia</text>

                    <!-- 3D Mesh placed -->
                    <path d="M140 140 L180 130 L220 130 L260 140 L260 190 L220 200 L180 200 L140 190 Z" fill="#0e7490" opacity="0.4" stroke="#0e7490" stroke-width="2"/>
                    <text x="200" y="175" text-anchor="middle" fill="white" font-size="9" font-weight="bold">3D MESH</text>

                    <!-- Mesh fixation points -->
                    <circle cx="150" cy="140" r="4" fill="#f59e0b"/>
                    <circle cx="250" cy="140" r="4" fill="#f59e0b"/>
                    <circle cx="150" cy="190" r="4" fill="#f59e0b"/>
                    <circle cx="250" cy="190" r="4" fill="#f59e0b"/>
                    <circle cx="200" cy="135" r="4" fill="#f59e0b"/>

                    <!-- Label pointing to mesh -->
                    <line x1="320" y1="165" x2="270" y2="165" stroke="#0e7490" stroke-width="1"/>
                    <text x="330" y="160" fill="#0e7490" font-size="10">3D Mesh</text>
                    <text x="330" y="173" fill="#64748b" font-size="9">spans defect</text>

                    <!-- Key -->
                    <rect x="70" y="280" width="260" height="50" rx="5" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1"/>
                    <text x="80" y="300" fill="#64748b" font-size="10" font-weight="bold">Legend:</text>
                    <circle cx="95" cy="315" r="4" fill="#f59e0b"/>
                    <text x="105" y="318" fill="#64748b" font-size="9">Fixation points</text>
                    <rect x="160" y="310" width="15" height="10" fill="#0e7490" opacity="0.4" stroke="#0e7490"/>
                    <text x="180" y="318" fill="#64748b" font-size="9">3D Mesh implant</text>
                </svg>
            </div>
            <div class="order-1 lg:order-2">
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-6">How 3D Mesh Works</h2>
                <p class="text-lg text-slate-600 mb-8">
                    The 3D mesh is designed to sit in the pre-peritoneal space, providing reinforcement from behind the hernia defect. Its three-dimensional shape allows it to conform to the natural contours of your abdominal wall.
                </p>

                <div class="space-y-6">
                    <div class="flex gap-4 items-start">
                        <div class="w-10 h-10 bg-brand-600 text-white rounded-full flex items-center justify-center font-bold flex-shrink-0">1</div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Placement</h4>
                            <p class="text-slate-600 text-sm">Dr. Kumar positions the 3D mesh in the pre-peritoneal space, exactly where it provides maximum support.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div class="w-10 h-10 bg-brand-600 text-white rounded-full flex items-center justify-center font-bold flex-shrink-0">2</div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Shape Conformity</h4>
                            <p class="text-slate-600 text-sm">The pre-shaped design automatically conforms to your anatomy, reducing the need for extensive shaping during surgery.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div class="w-10 h-10 bg-brand-600 text-white rounded-full flex items-center justify-center font-bold flex-shrink-0">3</div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Minimal Fixation</h4>
                            <p class="text-slate-600 text-sm">The 3D shape provides inherent stability, requiring fewer fixation points and reducing post-operative pain.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div class="w-10 h-10 bg-brand-600 text-white rounded-full flex items-center justify-center font-bold flex-shrink-0">4</div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Integration</h4>
                            <p class="text-slate-600 text-sm">Over time, the mesh integrates with your tissue, creating a strong, permanent repair.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recovery Benefits -->
<section class="py-16 lg:py-20 bg-gradient-to-br from-brand-700 to-brand-900 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold mb-4">Recovery Benefits with 3D Mesh</h2>
            <p class="text-lg text-brand-100 max-w-2xl mx-auto">Patients receiving 3D mesh often experience a more comfortable and faster recovery.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <div class="text-4xl font-bold text-accent mb-2">1-2</div>
                <div class="font-semibold">Days Hospital Stay</div>
                <div class="text-sm text-brand-200 mt-1">Most patients discharged quickly</div>
            </div>
            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <div class="text-4xl font-bold text-accent mb-2">1-2</div>
                <div class="font-semibold">Weeks to Resume Work</div>
                <div class="text-sm text-brand-200 mt-1">Depending on job requirements</div>
            </div>
            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <div class="text-4xl font-bold text-accent mb-2">Less</div>
                <div class="font-semibold">Pain Medication Needed</div>
                <div class="text-sm text-brand-200 mt-1">Reduced post-op discomfort</div>
            </div>
            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <div class="text-4xl font-bold text-accent mb-2">Minimal</div>
                <div class="font-semibold">Scar Visibility</div>
                <div class="text-sm text-brand-200 mt-1">Small laparoscopic incisions</div>
            </div>
        </div>
    </div>
</section>

<!-- Ideal Candidates -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12">
            <div class="bg-brand-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-slate-800 mb-6">Ideal Candidates for 3D Mesh</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Inguinal hernias (unilateral or bilateral)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Primary repair in adults</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Patients with moderate body weight</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Those seeking minimally invasive approach</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Patients concerned about post-operative pain</span>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-slate-800 mb-6">Materials Used</h3>
                <div class="space-y-4">
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                        <h4 class="font-semibold text-slate-800 mb-2">Polypropylene</h4>
                        <p class="text-slate-600 text-sm">The most common mesh material. Lightweight, strong, and well-studied with decades of clinical data supporting its safety and effectiveness.</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                        <h4 class="font-semibold text-slate-800 mb-2">Lightweight Design</h4>
                        <p class="text-slate-600 text-sm">Modern meshes use less material while maintaining strength, reducing foreign body sensation and improving comfort during recovery.</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-100">
                        <h4 class="font-semibold text-slate-800 mb-2">Anti-Adhesion Coating</h4>
                        <p class="text-slate-600 text-sm">Some 3D meshes feature specialized coatings on one side to minimize adhesion to abdominal organs when placed in direct contact.</p>
                    </div>
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
                <h4 class="font-semibold text-slate-800 mb-2">Is 3D mesh safe?</h4>
                <p class="text-slate-600">Yes, 3D mesh has been extensively studied and is FDA-approved for hernia repair. It has been used successfully in hundreds of thousands of procedures worldwide with a strong safety profile.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Will I feel the mesh after surgery?</h4>
                <p class="text-slate-600">Most patients do not feel the mesh once healing is complete. The 3D design helps distribute the implant more naturally within the body, reducing the sensation of a foreign object.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">How long does 3D mesh last?</h4>
                <p class="text-slate-600">The mesh is designed to be a permanent implant. It integrates with your tissue over time and provides long-lasting reinforcement of the abdominal wall.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Can I have an MRI with 3D mesh?</h4>
                <p class="text-slate-600">Most modern meshes are MRI-safe. You can typically undergo MRI scans at 1.5T and 3T field strengths. Always inform your radiologist about your implant before any imaging procedure.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 lg:py-20 bg-gradient-to-r from-accent to-amber-500">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-900 mb-4">Is 3D Mesh Right for Your Hernia?</h2>
        <p class="text-xl text-slate-800 mb-8">Dr. Kumar will evaluate your case and recommend the best mesh option for your specific situation.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="../book-appointment.php" class="inline-flex items-center gap-2 bg-slate-900 text-white font-semibold px-8 py-4 rounded-lg hover:bg-slate-800 transition">
                Schedule Consultation
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 border-2 border-slate-900 text-slate-900 font-semibold px-8 py-4 rounded-lg hover:bg-slate-900/10 transition">
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