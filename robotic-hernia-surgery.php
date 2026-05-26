<?php
require_once __DIR__ . '/../includes/config.php';

$page_title       = 'Robotic Hernia Surgery Chennai | Dr. Kumar - Da Vinci Hernia Specialist';
$page_description = 'Advanced robotic hernia surgery in Chennai with Dr. Kumar. Da Vinci robotic-assisted hernia repair with 3D visualization, precision control, and faster recovery.';
$page_keywords    = 'robotic hernia surgery Chennai, Da Vinci hernia repair, robotic surgeon Chennai, robotically assisted hernia, advanced hernia repair Chennai, minimally invasive robotic';
$page_url         = $site['url'] . 'robotic-hernia-surgery.php';
$page_image       = $site['url'] . 'assets/images/robotic-hernia.jpg';
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
<section class="relative bg-gradient-to-br from-slate-900 via-brand-900 to-slate-900 text-white overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-brand-500 rounded-full filter blur-3xl opacity-15"></div>
        <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-accent rounded-full filter blur-3xl opacity-10"></div>
        <svg class="absolute inset-0 w-full h-full opacity-5" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
                <pattern id="heroGrid" width="8" height="8" patternUnits="userSpaceOnUse">
                    <path d="M 8 0 L 0 0 0 8" fill="none" stroke="white" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#heroGrid)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-brand-500/20 border border-brand-400/30 rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span class="text-sm font-medium text-brand-300">Advanced Robotic Surgery</span>
                </div>
                <h1 class="font-display text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-6">
                    Robotic<br>
                    <span class="text-brand-400">Hernia Surgery</span>
                </h1>
                <p class="text-lg text-slate-300 leading-relaxed mb-8">
                    Experience the next generation of hernia repair with Da Vinci robotic surgery. Dr. Kumar brings unprecedented precision, 3D visualization, and enhanced control to your hernia surgery.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="book-appointment.php" class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                        Book Consultation
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="advanced-techniques/da-vinci-system.php" class="inline-flex items-center gap-2 border border-white/30 hover:border-white text-white font-medium px-6 py-3 rounded-lg transition">
                        Learn About Da Vinci
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="bg-gradient-to-br from-brand-600/20 to-brand-800/30 rounded-2xl p-8 border border-brand-400/20">
                    <svg class="w-full" viewBox="0 0 400 320" fill="none">
                        <!-- Robotic surgery visualization -->
                        <defs>
                            <linearGradient id="roboticGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#0e7490"/>
                                <stop offset="100%" style="stop-color:#0891b2"/>
                            </linearGradient>
                        </defs>

                        <!-- Patient area -->
                        <ellipse cx="200" cy="280" rx="100" ry="25" fill="#1e293b"/>
                        <rect x="120" y="200" width="160" height="80" rx="15" fill="#334155" stroke="#475569" stroke-width="2"/>
                        <text x="200" y="250" text-anchor="middle" fill="#94a3b8" font-size="10">Patient</text>

                        <!-- Trocar ports -->
                        <circle cx="150" cy="220" r="12" fill="#0e7490" stroke="#06b6d4" stroke-width="2"/>
                        <circle cx="200" cy="210" r="12" fill="#0e7490" stroke="#06b6d4" stroke-width="2"/>
                        <circle cx="250" cy="220" r="12" fill="#0e7490" stroke="#06b6d4" stroke-width="2"/>
                        <circle cx="175" cy="260" r="10" fill="#0e7490" stroke="#06b6d4" stroke-width="2"/>
                        <circle cx="225" cy="260" r="10" fill="#0e7490" stroke="#06b6d4" stroke-width="2"/>

                        <!-- Robotic arms -->
                        <line x1="100" y1="50" x2="150" y2="220" stroke="#475569" stroke-width="6" stroke-linecap="round"/>
                        <line x1="200" y1="30" x2="200" y2="210" stroke="#475569" stroke-width="6" stroke-linecap="round"/>
                        <line x1="300" y1="50" x2="250" y2="220" stroke="#475569" stroke-width="6" stroke-linecap="round"/>
                        <line x1="80" y1="80" x2="175" y2="260" stroke="#475569" stroke-width="5" stroke-linecap="round"/>
                        <line x1="320" y1="80" x2="225" y2="260" stroke="#475569" stroke-width="5" stroke-linecap="round"/>

                        <!-- End effectors -->
                        <circle cx="150" cy="220" r="8" fill="#f59e0b"/>
                        <circle cx="200" cy="210" r="10" fill="#06b6d4"/>
                        <circle cx="250" cy="220" r="8" fill="#f59e0b"/>
                        <circle cx="175" cy="260" r="6" fill="#06b6d4"/>
                        <circle cx="225" cy="260" r="6" fill="#06b6d4"/>

                        <!-- Surgeon console -->
                        <rect x="130" y="10" width="140" height="70" rx="10" fill="#1e293b" stroke="#0e7490" stroke-width="2"/>
                        <rect x="140" y="20" width="55" height="40" rx="5" fill="#0e7490" opacity="0.4"/>
                        <rect x="205" y="20" width="55" height="40" rx="5" fill="#0e7490" opacity="0.4"/>
                        <rect x="165" y="65" width="70" height="12" rx="4" fill="#334155"/>
                        <text x="200" y="95" text-anchor="middle" fill="#94a3b8" font-size="10">Surgeon Console</text>

                        <!-- Labels -->
                        <text x="200" y="165" text-anchor="middle" fill="#0e7490" font-size="12" font-weight="bold">Robotic-Assisted Hernia Repair</text>
                        <text x="200" y="180" text-anchor="middle" fill="#06b6d4" font-size="10">3D Vision + Wristed Instruments</text>

                        <!-- Key features -->
                        <rect x="50" y="130" width="60" height="25" rx="5" fill="#0e7490" opacity="0.5"/>
                        <text x="80" y="147" text-anchor="middle" fill="#ecfeff" font-size="8">3D Vision</text>

                        <rect x="290" y="130" width="60" height="25" rx="5" fill="#0e7490" opacity="0.5"/>
                        <text x="320" y="147" text-anchor="middle" fill="#ecfeff" font-size="8">Precision</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Robotic Surgery -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Why Choose Robotic Hernia Surgery?</h2>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">
                Robotic surgery combines the benefits of minimally invasive surgery with technological advantages that give Dr. Kumar enhanced capabilities for complex hernia repairs.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-xl p-6 border border-brand-100">
                <div class="w-14 h-14 bg-brand-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Enhanced 3D Visualization</h3>
                <p class="text-slate-600">Ten times magnification with true 3D depth perception. Dr. Kumar can see critical structures with extraordinary clarity, ensuring precise mesh placement and avoiding nerves.</p>
            </div>

            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-xl p-6 border border-brand-100">
                <div class="w-14 h-14 bg-brand-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Wristed Instruments</h3>
                <p class="text-slate-600">EndoWrist technology provides 7 degrees of freedom, mimicking and exceeding human hand movement. This allows precise manipulation in tight spaces impossible with straight laparoscopic tools.</p>
            </div>

            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-xl p-6 border border-brand-100">
                <div class="w-14 h-14 bg-brand-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Surgeon Control</h3>
                <p class="text-slate-600">Every movement is controlled by Dr. Kumar at the console. The robot translates his hand motions into precise instrument movements with tremor filtration and motion scaling.</p>
            </div>

            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-xl p-6 border border-brand-100">
                <div class="w-14 h-14 bg-brand-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Faster Recovery</h3>
                <p class="text-slate-600">Small keyhole incisions mean less pain, smaller scars, and quicker return to daily activities. Most patients go home the same day or after one night in the hospital.</p>
            </div>

            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-xl p-6 border border-brand-100">
                <div class="w-14 h-14 bg-brand-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Complex Cases Possible</h3>
                <p class="text-slate-600">Robotic technology enables repair of bilateral hernias, recurrent hernias, large defects, and complex ventral hernias that may be challenging with standard laparoscopy.</p>
            </div>

            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-xl p-6 border border-brand-100">
                <div class="w-14 h-14 bg-brand-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Lower Recurrence</h3>
                <p class="text-slate-600">Studies show robotic hernia repair has excellent long-term outcomes with recurrence rates comparable to or better than other techniques.</p>
            </div>
        </div>
    </div>
</section>

<!-- When Robotic Is Recommended -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-6">When Is Robotic Recommended?</h2>
                <p class="text-lg text-slate-600 mb-8">
                    While robotic surgery can be used for most hernia repairs, it offers particular advantages in specific situations. Dr. Kumar will recommend robotic surgery when it provides the best outcome for your particular case.
                </p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm border border-slate-100">
                        <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Bilateral Hernia Repair</h4>
                            <p class="text-slate-600 text-sm">Repairing both sides simultaneously with the precision and control needed for optimal outcomes.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm border border-slate-100">
                        <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Recurrent Hernias</h4>
                            <p class="text-slate-600 text-sm">Patients who had previous repairs and need re-operation. Scar tissue makes precision even more critical.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm border border-slate-100">
                        <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.361 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Large or Complex Defects</h4>
                            <p class="text-slate-600 text-sm">Large incisional, ventral, or complex hernias requiring meticulous mesh placement and reconstruction.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm border border-slate-100">
                        <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Obese Patients</h4>
                            <p class="text-slate-600 text-sm">Better visualization helps navigate through thicker abdominal wall layers with precision.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white rounded-xl p-4 shadow-sm border border-slate-100">
                        <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Patients with Previous Mesh</h4>
                            <p class="text-slate-600 text-sm">When mesh removal and re-repair is needed, robotic precision is invaluable.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-brand-700 to-brand-900 rounded-2xl p-8 text-white">
                <h3 class="text-2xl font-bold mb-6">Dr. Kumar's Robotic Experience</h3>

                <div class="space-y-6 mb-8">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-brand-500 rounded-full flex items-center justify-center font-bold text-xl">29+</div>
                        <div>
                            <div class="font-semibold">Years of Surgical Experience</div>
                            <div class="text-brand-200 text-sm">Trained at Stanley Medical College</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-brand-500 rounded-full flex items-center justify-center font-bold text-xl">10K+</div>
                        <div>
                            <div class="font-semibold">Hernia Surgeries Performed</div>
                            <div class="text-brand-200 text-sm">Including complex repairs</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-brand-500 rounded-full flex items-center justify-center font-bold text-xl">20K+</div>
                        <div>
                            <div class="font-semibold">Laparoscopic Procedures</div>
                            <div class="text-brand-200 text-sm">Minimally invasive expertise</div>
                        </div>
                    </div>
                </div>

                <blockquote class="border-l-4 border-accent pl-4 italic text-brand-100 mb-6">
                    "Robotic surgery has transformed how we approach hernia repair. The enhanced visualization and precision allow outcomes that weren't possible before."
                </blockquote>

                <div class="flex flex-wrap gap-2">
                    <span class="bg-brand-700 px-3 py-1 rounded-full text-sm">Fellowship Trained</span>
                    <span class="bg-brand-700 px-3 py-1 rounded-full text-sm">Advanced Certification</span>
                    <span class="bg-brand-700 px-3 py-1 rounded-full text-sm">International Training</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Robotic vs Other Methods -->
<section class="py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Robotic vs. Other Techniques</h2>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-xl shadow-lg border border-slate-100 overflow-hidden">
                <thead>
                    <tr class="bg-slate-800 text-white">
                        <th class="px-6 py-4 text-left font-semibold">Feature</th>
                        <th class="px-6 py-4 text-center font-semibold">Open Surgery</th>
                        <th class="px-6 py-4 text-center font-semibold">Laparoscopic</th>
                        <th class="px-6 py-4 text-center font-semibold bg-brand-700">Robotic</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr>
                        <td class="px-6 py-4 font-medium text-slate-800">Incision Size</td>
                        <td class="px-6 py-4 text-center text-slate-600">5-8 cm</td>
                        <td class="px-6 py-4 text-center text-slate-600">3-5mm</td>
                        <td class="px-6 py-4 text-center bg-brand-50 text-brand-700 font-semibold">3-5mm</td>
                    </tr>
                    <tr class="bg-slate-50">
                        <td class="px-6 py-4 font-medium text-slate-800">3D Visualization</td>
                        <td class="px-6 py-4 text-center text-slate-600">2D, Direct view</td>
                        <td class="px-6 py-4 text-center text-slate-600">2D on screen</td>
                        <td class="px-6 py-4 text-center bg-brand-50 text-brand-700 font-semibold">True 3D HD</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-slate-800">Instrument Range</td>
                        <td class="px-6 py-4 text-center text-slate-600">Full hand movement</td>
                        <td class="px-6 py-4 text-center text-slate-600">Limited, straight</td>
                        <td class="px-6 py-4 text-center bg-brand-50 text-brand-700 font-semibold">720° rotation</td>
                    </tr>
                    <tr class="bg-slate-50">
                        <td class="px-6 py-4 font-medium text-slate-800">Hospital Stay</td>
                        <td class="px-6 py-4 text-center text-slate-600">1-3 days</td>
                        <td class="px-6 py-4 text-center text-slate-600">Day surgery - 1 day</td>
                        <td class="px-6 py-4 text-center bg-brand-50 text-brand-700 font-semibold">Day surgery - 1 day</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-slate-800">Recovery Time</td>
                        <td class="px-6 py-4 text-center text-slate-600">3-6 weeks</td>
                        <td class="px-6 py-4 text-center text-slate-600">1-2 weeks</td>
                        <td class="px-6 py-4 text-center bg-brand-50 text-brand-700 font-semibold">1-2 weeks</td>
                    </tr>
                    <tr class="bg-slate-50">
                        <td class="px-6 py-4 font-medium text-slate-800">Best For Complexity</td>
                        <td class="px-6 py-4 text-center text-slate-600">Very complex cases</td>
                        <td class="px-6 py-4 text-center text-slate-600">Standard cases</td>
                        <td class="px-6 py-4 text-center bg-brand-50 text-brand-700 font-semibold">Complex + standard</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-slate-800">Bilateral Repair</td>
                        <td class="px-6 py-4 text-center text-slate-600">Good</td>
                        <td class="px-6 py-4 text-center text-slate-600">Challenging</td>
                        <td class="px-6 py-4 text-center bg-brand-50 text-brand-700 font-semibold">Excellent</td>
                    </tr>
                    <tr class="bg-slate-50">
                        <td class="px-6 py-4 font-medium text-slate-800">Recurrent Hernia</td>
                        <td class="px-6 py-4 text-center text-slate-600">Good</td>
                        <td class="px-6 py-4 text-center text-slate-600">Difficult</td>
                        <td class="px-6 py-4 text-center bg-brand-50 text-brand-700 font-semibold">Excellent</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Recovery Timeline -->
<section class="py-16 lg:py-20 bg-gradient-to-br from-brand-700 to-brand-900 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold mb-4">Robotic Hernia Surgery Recovery</h2>
            <p class="text-lg text-brand-100 max-w-2xl mx-auto">Most patients experience a faster, more comfortable recovery with robotic surgery.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <div class="text-4xl font-bold text-accent mb-2">Same Day</div>
                <div class="font-semibold mb-2">Surgery</div>
                <p class="text-brand-100 text-sm">Procedure takes 1-2 hours. Most patients discharged within 4-6 hours.</p>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <div class="text-4xl font-bold text-accent mb-2">Day 1-2</div>
                <div class="font-semibold mb-2">Light Activity</div>
                <p class="text-brand-100 text-sm">Walking, light activities. May return to desk work within a few days.</p>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <div class="text-4xl font-bold text-accent mb-2">Week 1-2</div>
                <div class="font-semibold mb-2">Full Recovery</div>
                <p class="text-brand-100 text-sm">Return to most activities. Driving, light exercise resume.</p>
            </div>

            <div class="bg-white/10 backdrop-blur rounded-xl p-6 border border-white/20 text-center">
                <div class="text-4xl font-bold text-accent mb-2">Week 4-6</div>
                <div class="font-semibold mb-2">Full Activities</div>
                <p class="text-brand-100 text-sm">Heavy lifting and strenuous exercise after Dr. Kumar's clearance.</p>
            </div>
        </div>
    </div>
</section>

<!-- Other Advanced Techniques -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Complete Your Recovery Arsenal</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Dr. Kumar offers multiple advanced techniques for a customized approach to your hernia repair.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="advanced-techniques/3d-mesh.php" class="bg-white rounded-xl p-6 shadow-lg border border-slate-100 hover:border-brand-300 hover:shadow-xl transition group">
                <div class="w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center mb-4 group-hover:bg-accent/30 transition">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.361 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-2">3D Mesh Technology</h4>
                <p class="text-slate-600 text-sm">Anatomically-shaped mesh for better fit and coverage.</p>
            </a>

            <a href="advanced-techniques/self-gripping-mesh.php" class="bg-white rounded-xl p-6 shadow-lg border border-slate-100 hover:border-brand-300 hover:shadow-xl transition group">
                <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-teal-200 transition">
                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-2">Self-Gripping Mesh</h4>
                <p class="text-slate-600 text-sm">No sutures needed, reduced chronic pain risk.</p>
            </a>

            <a href="advanced-techniques/biological-mesh.php" class="bg-white rounded-xl p-6 shadow-lg border border-slate-100 hover:border-brand-300 hover:shadow-xl transition group">
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-emerald-200 transition">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-2">Biological Mesh</h4>
                <p class="text-slate-600 text-sm">For contaminated fields and complex repairs.</p>
            </a>

            <a href="advanced-techniques/eras-protocol.php" class="bg-white rounded-xl p-6 shadow-lg border border-slate-100 hover:border-brand-300 hover:shadow-xl transition group">
                <div class="w-12 h-12 bg-violet-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-violet-200 transition">
                    <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-2">ERAS Protocol</h4>
                <p class="text-slate-600 text-sm">Enhanced recovery with evidence-based care.</p>
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 lg:py-20">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-slate-800 mb-4">Frequently Asked Questions</h2>
        </div>

        <div class="space-y-4">
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Is robotic surgery the same as the robot operating on me?</h4>
                <p class="text-slate-600">No. The Da Vinci system is a sophisticated tool controlled entirely by Dr. Kumar. There is no artificial intelligence making surgical decisions. Every movement is performed by your surgeon at a console, providing enhanced precision while maintaining complete human control.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Will I have less pain with robotic surgery?</h4>
                <p class="text-slate-600">Yes, most patients report significantly less pain compared to open surgery. The smaller incisions and precise tissue handling contribute to a more comfortable recovery. Many patients need only over-the-counter pain relievers after the first few days.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">How long is the recovery for robotic hernia surgery?</h4>
                <p class="text-slate-600">Most patients return to light activities within a few days and to full work within 1-2 weeks, depending on the nature of their job. Heavy lifting should be avoided for 4-6 weeks as directed by Dr. Kumar.</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <h4 class="font-semibold text-slate-800 mb-2">Is robotic hernia surgery covered by insurance?</h4>
                <p class="text-slate-600">Hernia repair, whether performed robotically, laparoscopically, or open, is typically covered by health insurance. Our team will help verify your coverage and explain any out-of-pocket costs before your procedure.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 lg:py-20 bg-gradient-to-r from-brand-700 to-brand-800">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-white mb-4">Ready to Experience Robotic Hernia Surgery?</h2>
        <p class="text-xl text-brand-100 mb-8">Schedule a consultation with Dr. Kumar to find out if robotic surgery is the right choice for your hernia.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="book-appointment.php" class="inline-flex items-center gap-2 bg-white text-brand-700 font-semibold px-8 py-4 rounded-lg hover:bg-brand-50 transition">
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