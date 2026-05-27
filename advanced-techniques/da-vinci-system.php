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
        .tech-card { transition: all 0.3s ease; }
        .tech-card:hover { transform: translateY(-4px); }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased">

<?php require __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-brand-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid)"/>
        </svg>
    </div>
    <div class="absolute top-20 right-10 w-72 h-72 bg-brand-500 rounded-full filter blur-3xl opacity-20"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-accent rounded-full filter blur-3xl opacity-10"></div>

    <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-brand-500/20 border border-brand-400/30 rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span class="text-sm font-medium text-brand-300">Advanced Robotic Technology</span>
                </div>
                <h1 class="font-display text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-6">
                    Da Vinci Robotic<br>
                    <span class="text-brand-400">Surgery System</span>
                </h1>
                <p class="text-lg text-slate-300 leading-relaxed mb-8">
                    Experience the next generation of surgical precision with the FDA-cleared Da Vinci Surgical System. Dr. Kumar brings robotically-assisted hernia repair to Chennai with unmatched accuracy and control.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="../book-appointment.php" class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                        Schedule Consultation
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="#how-it-works" class="inline-flex items-center gap-2 border border-white/30 hover:border-white text-white font-medium px-6 py-3 rounded-lg transition">
                        How It Works
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-brand-600/20 to-brand-800/30 rounded-2xl p-8 border border-brand-400/20">
                    <svg class="w-full h-auto" viewBox="0 0 400 300" fill="none">
                        <!-- Robotic system illustration -->
                        <rect x="50" y="200" width="300" height="60" rx="10" fill="#1e293b" stroke="#0e7490" stroke-width="2"/>
                        <rect x="100" y="180" width="60" height="40" rx="5" fill="#334155" stroke="#0e7490" stroke-width="1.5"/>
                        <rect x="240" y="180" width="60" height="40" rx="5" fill="#334155" stroke="#0e7490" stroke-width="1.5"/>
                        <line x1="130" y1="160" x2="130" y2="80" stroke="#0e7490" stroke-width="3"/>
                        <line x1="270" y1="160" x2="270" y2="80" stroke="#0e7490" stroke-width="3"/>
                        <circle cx="130" cy="70" r="25" fill="#0e7490" stroke="#06b6d4" stroke-width="2"/>
                        <circle cx="270" cy="70" r="25" fill="#0e7490" stroke="#06b6d4" stroke-width="2"/>
                        <rect x="180" y="150" width="40" height="30" rx="5" fill="#334155" stroke="#0e7490" stroke-width="1.5"/>
                        <line x1="200" y1="140" x2="200" y2="60" stroke="#0e7490" stroke-width="3"/>
                        <circle cx="200" cy="55" r="20" fill="#f59e0b" stroke="#fbbf24" stroke-width="2"/>
                        <!-- Surgical arms -->
                        <path d="M130 70 L100 30" stroke="#06b6d4" stroke-width="2"/>
                        <path d="M270 70 L300 30" stroke="#06b6d4" stroke-width="2"/>
                        <path d="M200 55 L180 20" stroke="#fbbf24" stroke-width="2"/>
                        <!-- End effectors -->
                        <circle cx="100" cy="25" r="8" fill="#06b6d4"/>
                        <circle cx="300" cy="25" r="8" fill="#06b6d4"/>
                        <circle cx="175" cy="15" r="6" fill="#f59e0b"/>
                        <!-- Console representation -->
                        <rect x="150" y="230" width="100" height="40" rx="8" fill="#0e7490"/>
                        <rect x="160" y="235" width="80" height="25" rx="4" fill="#164e63"/>
                        <circle cx="185" cy="247" r="5" fill="#06b6d4"/>
                        <circle cx="215" cy="247" r="5" fill="#06b6d4"/>
                        <!-- Labels -->
                        <text x="200" y="290" text-anchor="middle" fill="#94a3b8" font-size="12">Da Vinci Xi System</text>
                    </svg>
                    <div class="mt-6 grid grid-cols-2 gap-4">
                        <div class="bg-slate-800/50 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-brand-400">3D</div>
                            <div class="text-sm text-slate-400">HD Visualization</div>
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-brand-400">720°</div>
                            <div class="text-sm text-slate-400">Articulated Movement</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Benefits -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Why Choose Robotic Surgery?</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">The Da Vinci system offers significant advantages over traditional laparoscopic surgery, particularly for complex hernia repairs.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="tech-card bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Enhanced 3D Visualization</h3>
                <p class="text-slate-600">Ten times magnification with true 3D depth perception allows Dr. Kumar to see critical structures with extraordinary clarity.</p>
            </div>

            <div class="tech-card bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Wristed Instruments</h3>
                <p class="text-slate-600">EndoWrist technology provides 7 degrees of freedom, mimicking human hand movements with superior precision inside the abdomen.</p>
            </div>

            <div class="tech-card bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Surgeon Control</h3>
                <p class="text-slate-600">Every movement is controlled by Dr. Kumar at a console, translating hand motions into precise instrument movements in real-time.</p>
            </div>

            <div class="tech-card bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Faster Recovery</h3>
                <p class="text-slate-600">Minimally invasive approach means less pain, smaller scars, and quicker return to normal activities compared to open surgery.</p>
            </div>

            <div class="tech-card bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Reduced Complications</h3>
                <p class="text-slate-600">Studies show robotic hernia repair has lower rates of recurrence and fewer wound infections compared to conventional methods.</p>
            </div>

            <div class="tech-card bg-white rounded-xl p-6 shadow-lg border border-slate-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.361 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Complex Cases Possible</h3>
                <p class="text-slate-600">Robotic technology enables repair of bilateral hernias, recurrent hernias, and large defects that may be challenging laparoscopically.</p>
            </div>
        </div>
    </div>
</section>

<!-- How Robotic Surgery Works -->
<section id="how-it-works" class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-brand-100 text-brand-700 rounded-full px-4 py-2 mb-6 text-sm font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    Surgical Process
                </div>
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-6">How Robotic Hernia Repair Works</h2>
                <p class="text-lg text-slate-600 mb-8">The Da Vinci system translates Dr. Kumar's hand movements into micro-movements of tiny instruments inside your body, providing unmatched precision.</p>

                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-brand-600 text-white rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Console-Based Control</h4>
                            <p class="text-slate-600 text-sm">Dr. Kumar sits at a console with a 3D view of the surgical field and controls the robotic arms using specialized hand controls.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-brand-600 text-white rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Small Incisions</h4>
                            <p class="text-slate-600 text-sm">4-5 tiny keyhole incisions (5-8mm) are made, through which the robotic instruments and camera are introduced.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-brand-600 text-white rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Precise Mesh Placement</h4>
                            <p class="text-slate-600 text-sm">The robotic arms position mesh with sub-millimeter accuracy, ensuring optimal coverage of the hernia defect.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-brand-600 text-white rounded-full flex items-center justify-center font-bold">4</div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Secure Fixation</h4>
                            <p class="text-slate-600 text-sm">Absorbable tacks or self-gripping mesh secures the implant, with the robot providing steady hands for perfect placement.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-slate-100 to-brand-50 rounded-2xl p-8">
                <svg class="w-full" viewBox="0 0 400 350" fill="none">
                    <!-- Patient representation -->
                    <ellipse cx="200" cy="320" rx="120" ry="30" fill="#e2e8f0"/>
                    <rect x="140" y="220" width="120" height="100" rx="20" fill="#cbd5e1" stroke="#94a3b8" stroke-width="2"/>
                    <text x="200" y="280" text-anchor="middle" fill="#64748b" font-size="10">Patient</text>
                    <!-- Trocar positions -->
                    <circle cx="160" cy="240" r="15" fill="#0e7490" stroke="#06b6d4" stroke-width="2"/>
                    <circle cx="200" cy="230" r="15" fill="#0e7490" stroke="#06b6d4" stroke-width="2"/>
                    <circle cx="240" cy="240" r="15" fill="#0e7490" stroke="#06b6d4" stroke-width="2"/>
                    <circle cx="180" cy="280" r="12" fill="#0e7490" stroke="#06b6d4" stroke-width="2"/>
                    <circle cx="220" cy="280" r="12" fill="#0e7490" stroke="#06b6d4" stroke-width="2"/>
                    <!-- Instruments going in -->
                    <line x1="160" y1="240" x2="160" y2="150" stroke="#f59e0b" stroke-width="2"/>
                    <line x1="200" y1="230" x2="200" y2="130" stroke="#06b6d4" stroke-width="2"/>
                    <line x1="240" y1="240" x2="240" y2="150" stroke="#f59e0b" stroke-width="2"/>
                    <line x1="180" y1="280" x2="180" y2="180" stroke="#06b6d4" stroke-width="2"/>
                    <line x1="220" y1="280" x2="220" y2="180" stroke="#06b6d4" stroke-width="2"/>
                    <!-- End effectors in abdomen -->
                    <circle cx="160" cy="145" r="8" fill="#f59e0b"/>
                    <circle cx="200" cy="125" r="8" fill="#06b6d4"/>
                    <circle cx="240" cy="145" r="8" fill="#f59e0b"/>
                    <circle cx="180" cy="175" r="6" fill="#06b6d4"/>
                    <circle cx="220" cy="175" r="6" fill="#06b6d4"/>
                    <!-- Hernia representation -->
                    <ellipse cx="200" cy="165" rx="25" ry="20" fill="#fef3c7" stroke="#f59e0b" stroke-width="2" stroke-dasharray="4"/>
                    <text x="200" y="168" text-anchor="middle" fill="#b45309" font-size="8">Hernia</text>
                    <!-- Robot arms -->
                    <path d="M80 50 L160 145" stroke="#334155" stroke-width="8" stroke-linecap="round"/>
                    <path d="M200 30 L200 125" stroke="#334155" stroke-width="8" stroke-linecap="round"/>
                    <path d="M320 50 L240 145" stroke="#334155" stroke-width="8" stroke-linecap="round"/>
                    <!-- Console -->
                    <rect x="130" y="20" width="140" height="60" rx="10" fill="#1e293b" stroke="#0e7490" stroke-width="2"/>
                    <rect x="140" y="30" width="50" height="35" rx="5" fill="#0e7490" opacity="0.5"/>
                    <rect x="210" y="30" width="50" height="35" rx="5" fill="#0e7490" opacity="0.5"/>
                    <rect x="160" y="70" width="80" height="15" rx="5" fill="#334155"/>
                    <text x="200" y="12" text-anchor="middle" fill="#94a3b8" font-size="10">Surgeon Console</text>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Patient Benefits -->
<section class="py-16 lg:py-20 bg-gradient-to-br from-brand-700 to-brand-900 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold mb-4">Benefits for You as a Patient</h2>
            <p class="text-lg text-brand-100 max-w-2xl mx-auto">Robotic hernia surgery combines the benefits of minimally invasive surgery with unmatched surgical precision.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20">
                <svg class="w-10 h-10 text-accent mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h3 class="text-lg font-bold mb-2">Quicker Return Home</h3>
                <p class="text-brand-100 text-sm">Most patients go home the same day or after one night, compared to 2-3 days with open surgery.</p>
            </div>
            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20">
                <svg class="w-10 h-10 text-accent mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                <h3 class="text-lg font-bold mb-2">Less Post-Operative Pain</h3>
                <p class="text-brand-100 text-sm">Smaller incisions mean significantly less pain and reduced need for pain medications.</p>
            </div>
            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20">
                <svg class="w-10 h-10 text-accent mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h3 class="text-lg font-bold mb-2">Better Cosmetic Outcome</h3>
                <p class="text-brand-100 text-sm">Five small scars instead of one large incision, often barely visible after healing.</p>
            </div>
            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20">
                <svg class="w-10 h-10 text-accent mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                <h3 class="text-lg font-bold mb-2">Lower Recurrence</h3>
                <p class="text-brand-100 text-sm">Precise mesh placement leads to better long-term outcomes with lower hernia recurrence rates.</p>
            </div>
        </div>
    </div>
</section>

<!-- When Robotic Is Recommended -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12">
            <div>
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-6">When Is Robotic Recommended?</h2>
                <p class="text-lg text-slate-600 mb-8">While robotic surgery can be used for most hernia repairs, it is particularly beneficial in certain situations.</p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 bg-brand-50 rounded-xl p-4">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <div>
                            <h4 class="font-semibold text-slate-800">Bilateral Hernias</h4>
                            <p class="text-slate-600 text-sm">Repair of hernias on both sides simultaneously with precision.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 bg-brand-50 rounded-xl p-4">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <div>
                            <h4 class="font-semibold text-slate-800">Recurrent Hernias</h4>
                            <p class="text-slate-600 text-sm">Patients who had previous repairs and need re-operation.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 bg-brand-50 rounded-xl p-4">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <div>
                            <h4 class="font-semibold text-slate-800">Large or Complex Defects</h4>
                            <p class="text-slate-600 text-sm">Big hernias, incisional hernias, or ventral hernias requiring meticulous mesh placement.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 bg-brand-50 rounded-xl p-4">
                        <svg class="w-6 h-6 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <div>
                            <h4 class="font-semibold text-slate-800">Obese Patients</h4>
                            <p class="text-slate-600 text-sm">Better visualization helps navigate through thicker abdominal wall.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-slate-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-slate-800 mb-6">Dr. Kumar's Robotic Experience</h3>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-brand-600 rounded-full flex items-center justify-center text-white font-bold text-lg">29+</div>
                        <div>
                            <div class="font-semibold text-slate-800">Years of Surgical Experience</div>
                            <div class="text-sm text-slate-500">Trained at Stanley Medical College</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-brand-600 rounded-full flex items-center justify-center text-white font-bold text-lg">10K+</div>
                        <div>
                            <div class="font-semibold text-slate-800">Hernia Surgeries Performed</div>
                            <div class="text-sm text-slate-500">Including complex repairs</div>
                        </div>
                    </div>
                </div>

                <blockquote class="border-l-4 border-accent pl-4 italic text-slate-600 mb-6">
                    "Robotic surgery has transformed how we approach complex hernia repairs. The enhanced visualization and precision allow us to achieve outcomes that weren't possible before."
                </blockquote>

                <div class="flex flex-wrap gap-3">
                    <span class="bg-slate-200 text-slate-700 px-3 py-1 rounded-full text-sm">Fellowship Training</span>
                    <span class="bg-slate-200 text-slate-700 px-3 py-1 rounded-full text-sm">Advanced Robotic Certification</span>
                    <span class="bg-slate-200 text-slate-700 px-3 py-1 rounded-full text-sm">International Exposure</span>
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
            <p class="text-lg text-slate-600">Common questions about robotic hernia surgery</p>
        </div>

        <div class="space-y-4">
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Is robotic surgery the same as being operated on by a robot?</h4>
                <p class="text-slate-600">No. The robot is a tool controlled entirely by Dr. Kumar. There is no artificial intelligence making decisions. Every movement is performed by your surgeon at a console, providing enhanced precision but maintaining complete human control.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Will I have less pain with robotic surgery?</h4>
                <p class="text-slate-600">Yes, most patients report significantly less pain compared to open surgery. The smaller incisions and precise tissue handling contribute to a more comfortable recovery. Many patients need only over-the-counter pain relievers after the first few days.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">How long is the recovery?</h4>
                <p class="text-slate-600">Most patients return to light activities within a few days and to full work within 1-2 weeks, depending on the nature of their job. Heavy lifting should be avoided for 4-6 weeks as directed by Dr. Kumar.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Is robotic surgery covered by insurance?</h4>
                <p class="text-slate-600">Hernia repair, whether performed robotically, laparoscopically, or open, is typically covered by health insurance. Our team will help verify your coverage and explain any out-of-pocket costs before your procedure.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 lg:py-20 bg-gradient-to-r from-brand-700 to-brand-800">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-white mb-4">Ready to Explore Robotic Hernia Repair?</h2>
        <p class="text-xl text-brand-100 mb-8">Schedule a consultation with Dr. Kumar to find out if robotic surgery is right for your hernia.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="../book-appointment.php" class="inline-flex items-center gap-2 bg-white text-brand-700 font-semibold px-8 py-4 rounded-lg hover:bg-brand-50 transition">
                Book Consultation
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