<?php
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-brand-700 via-brand-600 to-teal-700 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 1200 600" preserveAspectRatio="xMidYMid slice">
            <defs>
                <pattern id="waves" width="80" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 0 20 Q 20 0 40 20 Q 60 40 80 20" fill="none" stroke="white" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#waves)"/>
        </svg>
    </div>
    <div class="max-w-7xl mx-auto px-4 py-16 md:py-24 relative">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 text-sm">
                <svg class="w-4 h-4 text-brand-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.259zm8.414 12.271a1 1 0 10-1.932-.518l.259.966a1 1 0 001.932.518l-.259-.966zm-8.414-6.271a1 1 0 10-.518-1.932l-.966.259a1 1 0 00.518 1.932l.966-.259zm8.414-6.271a1 1 0 10-.518 1.932l.966.259a1 1 0 00.518-1.932l-.966-.259z" clip-rule="evenodd"/></svg>
                <span>Diagnostic Methods</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Hernia Diagnosis
            </h1>
            <p class="text-lg md:text-xl text-brand-100 leading-relaxed mb-8">
                Understanding how hernias are diagnosed helps you prepare for your consultation. Most hernias can be identified through a thorough physical examination.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:+917904217129" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-500 text-white font-semibold px-6 py-3 rounded-lg transition shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    Book Appointment
                </a>
                <a href="treatment.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-semibold px-6 py-3 rounded-lg transition border border-white/20">
                    View Treatment Options
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
</section>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 py-12">

    <!-- Physical Examination -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-14 h-14 rounded-2xl bg-brand-100 flex items-center justify-center">
                <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Physical Examination</h2>
                <p class="text-slate-600">The first and often only step needed for diagnosis</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
            <div class="grid lg:grid-cols-2">
                <div class="p-8">
                    <h3 class="text-xl font-bold text-slate-800 mb-4">What to Expect During Your Exam</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 bg-brand-50 rounded-xl">
                            <div class="w-10 h-10 rounded-full bg-brand-700 text-white flex items-center justify-center font-bold shrink-0">1</div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Visual Inspection</h4>
                                <p class="text-slate-600 text-sm">Dr. Kumar will first observe the area while you stand, looking for visible bulges or asymmetry.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-brand-50 rounded-xl">
                            <div class="w-10 h-10 rounded-full bg-brand-700 text-white flex items-center justify-center font-bold shrink-0">2</div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Palpation</h4>
                                <p class="text-slate-600 text-sm">Gentle pressing on the area to feel the hernia, assess its size, and check if it's reducible.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-brand-50 rounded-xl">
                            <div class="w-10 h-10 rounded-full bg-brand-700 text-white flex items-center justify-center font-bold shrink-0">3</div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Cough Test</h4>
                                <p class="text-slate-600 text-sm">You'll be asked to cough while the doctor feels for a impulse or bulge - a classic diagnostic sign.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-brand-50 rounded-xl">
                            <div class="w-10 h-10 rounded-full bg-brand-700 text-white flex items-center justify-center font-bold shrink-0">4</div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Size Assessment</h4>
                                <p class="text-slate-600 text-sm">Measuring the hernia helps plan surgical approach and determine if imaging is needed.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-brand-50 to-cyan-50 p-8 flex items-center justify-center">
                    <!-- Examination illustration SVG -->
                    <svg viewBox="0 0 300 350" class="w-full max-w-xs h-auto">
                        <!-- Patient silhouette -->
                        <ellipse cx="150" cy="60" rx="35" ry="40" fill="#e2e8f0"/>
                        <rect x="115" y="95" width="70" height="120" rx="10" fill="#e2e8f0"/>
                        <rect x="100" y="215" width="35" height="100" rx="8" fill="#e2e8f0"/>
                        <rect x="165" y="215" width="35" height="100" rx="8" fill="#e2e8f0"/>

                        <!-- Hernia bulge highlighted -->
                        <ellipse cx="175" cy="180" rx="25" ry="20" fill="#fee2e2" stroke="#ef4444" stroke-width="3"/>
                        <path d="M 165 175 Q 175 165 185 175" fill="#ef4444" opacity="0.6"/>

                        <!-- Doctor's hand -->
                        <ellipse cx="180" cy="175" rx="15" ry="12" fill="#fecaca" stroke="#94a3b8" stroke-width="1"/>
                        <path d="M 175 165 L 185 160 L 190 165" fill="none" stroke="#94a3b8" stroke-width="2"/>

                        <!-- Labels -->
                        <text x="210" y="185" class="text-xs" fill="#dc2626" font-weight="bold">Hernia</text>
                        <line x1="195" y1="180" x2="205" y2="180" stroke="#ef4444" stroke-width="1"/>

                        <text x="80" y="120" class="text-xs" fill="#64748b">Physical exam</text>
                        <text x="80" y="135" class="text-xs" fill="#64748b">involves palpation</text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Imaging Tests -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center">
                <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Imaging Tests</h2>
                <p class="text-slate-600">When additional visualization is needed</p>
            </div>
        </div>

        <!-- Ultrasound -->
        <div class="bg-white rounded-2xl border border-slate-200 p-8 mb-6">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-800">Ultrasound</h3>
                            <span class="inline-block bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded">First-line imaging</span>
                        </div>
                    </div>
                    <p class="text-slate-600 mb-4">Sound waves create real-time images of the hernia. Quick, painless, and radiation-free.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-slate-800 text-sm mb-2">Used For:</h4>
                            <ul class="space-y-1 text-sm text-slate-600">
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Confirming uncertain diagnosis</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Small or hidden hernias</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Dynamic assessment (with cough)</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 text-sm mb-2">Advantages:</h4>
                            <ul class="space-y-1 text-sm text-slate-600">
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>No radiation</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Real-time imaging</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Affordable</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <svg viewBox="0 0 200 180" class="w-full max-w-xs h-auto">
                        <!-- Ultrasound probe -->
                        <rect x="80" y="140" width="40" height="30" rx="5" fill="#64748b"/>
                        <path d="M 85 140 L 85 120 L 115 120 L 115 140" fill="#94a3b8"/>

                        <!-- Sound waves -->
                        <path d="M 70 100 Q 60 90 70 80" fill="none" stroke="#3b82f6" stroke-width="1.5" opacity="0.6"/>
                        <path d="M 55 100 Q 45 90 55 80" fill="none" stroke="#3b82f6" stroke-width="1.5" opacity="0.4"/>
                        <path d="M 40 100 Q 30 90 40 80" fill="none" stroke="#3b82f6" stroke-width="1.5" opacity="0.2"/>
                        <path d="M 130 100 Q 140 90 130 80" fill="none" stroke="#3b82f6" stroke-width="1.5" opacity="0.6"/>
                        <path d="M 145 100 Q 155 90 145 80" fill="none" stroke="#3b82f6" stroke-width="1.5" opacity="0.4"/>
                        <path d="M 160 100 Q 170 90 160 80" fill="none" stroke="#3b82f6" stroke-width="1.5" opacity="0.2"/>

                        <!-- Body cross-section -->
                        <rect x="60" y="50" width="80" height="70" rx="10" fill="#e2e8f0" stroke="#94a3b8" stroke-width="2"/>

                        <!-- Hernia being scanned -->
                        <ellipse cx="120" cy="85" rx="20" ry="15" fill="#fee2e2" stroke="#ef4444" stroke-width="2"/>
                        <path d="M 112 82 Q 120 75 128 82" fill="#ef4444" opacity="0.6"/>

                        <text x="100" y="165" text-anchor="middle" class="text-xs" fill="#64748b">Ultrasound Probe</text>
                    </svg>
                </div>
            </div>
        </div>

        <!-- CT Scan -->
        <div class="bg-white rounded-2xl border border-slate-200 p-8 mb-6">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-800">CT Scan</h3>
                            <span class="inline-block bg-amber-100 text-amber-700 text-xs font-semibold px-2 py-1 rounded">Detailed imaging</span>
                        </div>
                    </div>
                    <p class="text-slate-600 mb-4">Cross-sectional X-ray images provide detailed view of the hernia and surrounding structures.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-slate-800 text-sm mb-2">Used For:</h4>
                            <ul class="space-y-1 text-sm text-slate-600">
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Complex or recurrent hernias</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Pre-surgical planning</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Suspected complications</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 text-sm mb-2">Advantages:</h4>
                            <ul class="space-y-1 text-sm text-slate-600">
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Comprehensive view</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Fast scan time</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Excellent for planning</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <svg viewBox="0 0 200 160" class="w-full max-w-xs h-auto">
                        <!-- CT Scanner outer ring -->
                        <ellipse cx="100" cy="80" rx="70" ry="60" fill="none" stroke="#64748b" stroke-width="8"/>
                        <ellipse cx="100" cy="80" rx="55" ry="45" fill="none" stroke="#94a3b8" stroke-width="3"/>

                        <!-- Patient table -->
                        <rect x="30" y="110" width="140" height="15" rx="3" fill="#94a3b8"/>
                        <rect x="45" y="125" width="110" height="10" rx="2" fill="#64748b"/>

                        <!-- Patient being scanned -->
                        <ellipse cx="100" cy="90" rx="25" ry="30" fill="#e2e8f0"/>

                        <!-- Hernia highlight -->
                        <circle cx="110" cy="95" r="8" fill="#fee2e2" stroke="#ef4444" stroke-width="2"/>

                        <!-- X-ray beam -->
                        <path d="M 40 60 L 100 90" fill="none" stroke="#ef4444" stroke-width="2" stroke-dasharray="4,4" opacity="0.7"/>
                        <path d="M 160 60 L 100 90" fill="none" stroke="#ef4444" stroke-width="2" stroke-dasharray="4,4" opacity="0.7"/>

                        <text x="100" y="150" text-anchor="middle" class="text-xs" fill="#64748b">CT Scanner Cross-section</text>
                    </svg>
                </div>
            </div>
        </div>

        <!-- MRI -->
        <div class="bg-white rounded-2xl border border-slate-200 p-8">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-teal-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-800">MRI</h3>
                            <span class="inline-block bg-teal-100 text-teal-700 text-xs font-semibold px-2 py-1 rounded">Best for soft tissue</span>
                        </div>
                    </div>
                    <p class="text-slate-600 mb-4">Magnetic resonance imaging provides detailed images without any radiation exposure.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-slate-800 text-sm mb-2">Used For:</h4>
                            <ul class="space-y-1 text-sm text-slate-600">
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Spigelian hernias</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Sports hernias (athletic pubalgia)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Failed previous repairs</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 text-sm mb-2">Advantages:</h4>
                            <ul class="space-y-1 text-sm text-slate-600">
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-teal-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>No radiation</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-teal-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Superior soft tissue contrast</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-teal-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    <span>Dynamic imaging possible</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <svg viewBox="0 0 200 180" class="w-full max-w-xs h-auto">
                        <!-- MRI machine outer -->
                        <rect x="30" y="20" width="140" height="130" rx="20" fill="#94a3b8"/>
                        <rect x="50" y="35" width="100" height="100" rx="15" fill="#64748b"/>

                        <!-- Patient tunnel -->
                        <ellipse cx="100" cy="85" rx="35" ry="40" fill="#1e293b"/>

                        <!-- Patient -->
                        <ellipse cx="100" cy="85" rx="20" ry="28" fill="#e2e8f0"/>

                        <!-- Hernia area -->
                        <circle cx="110" cy="90" r="6" fill="#fee2e2" stroke="#ef4444" stroke-width="2"/>

                        <!-- Magnetic field lines -->
                        <path d="M 50 60 Q 30 85 50 110" fill="none" stroke="#3b82f6" stroke-width="1" opacity="0.4"/>
                        <path d="M 150 60 Q 170 85 150 110" fill="none" stroke="#3b82f6" stroke-width="1" opacity="0.4"/>

                        <text x="100" y="170" text-anchor="middle" class="text-xs" fill="#64748b">MRI Machine</text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- When to Use Each Test -->
    <section class="mb-16">
        <div class="bg-slate-50 rounded-2xl p-8">
            <h3 class="text-2xl font-bold text-slate-800 mb-6 text-center">When Is Each Test Used?</h3>
            <div class="overflow-x-auto">
                <table class="w-full bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <thead>
                        <tr class="bg-brand-50">
                            <th class="text-left p-4 font-semibold text-slate-800">Situation</th>
                            <th class="text-left p-4 font-semibold text-slate-800">Recommended Test</th>
                            <th class="text-left p-4 font-semibold text-slate-800">Why</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 font-medium text-slate-800">Clear physical finding</td>
                            <td class="p-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">None needed</span></td>
                            <td class="p-4 text-slate-600">Physical exam alone is sufficient for diagnosis</td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 font-medium text-slate-800">Unclear diagnosis</td>
                            <td class="p-4"><span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-semibold">Ultrasound</span></td>
                            <td class="p-4 text-slate-600">Quick, accessible, real-time dynamic assessment</td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 font-medium text-slate-800">Complex incisional hernia</td>
                            <td class="p-4"><span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-semibold">CT Scan</span></td>
                            <td class="p-4 text-slate-600">Shows all layers and relation to other structures</td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 font-medium text-slate-800">Suspected athletic pubalgia</td>
                            <td class="p-4"><span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-sm font-semibold">MRI</span></td>
                            <td class="p-4 text-slate-600">Best for soft tissue and subtle abnormalities</td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 font-medium text-slate-800">Pre-operative planning</td>
                            <td class="p-4"><span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-semibold">CT Scan</span></td>
                            <td class="p-4 text-slate-600">Comprehensive view aids surgical planning</td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 font-medium text-slate-800">Pregnancy with hernia</td>
                            <td class="p-4"><span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-semibold">Ultrasound</span></td>
                            <td class="p-4 text-slate-600">No radiation, safe for mother and baby</td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 font-medium text-slate-800">Recurrent hernia after repair</td>
                            <td class="p-4"><span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-semibold">CT / MRI</span></td>
                            <td class="p-4 text-slate-600">Detailed assessment of scar tissue and recurrence</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="mb-16">
        <div class="bg-white rounded-2xl border border-slate-200 p-8">
            <h3 class="text-2xl font-bold text-slate-800 mb-6 text-center">Frequently Asked Questions</h3>
            <div class="space-y-4 max-w-3xl mx-auto">
                <div class="bg-slate-50 rounded-xl p-6" data-faq>
                    <button class="flex items-center justify-between w-full text-left" onclick="toggleFaq(this)">
                        <span class="font-semibold text-slate-800">Is the physical exam painful?</span>
                        <svg class="w-5 h-5 text-slate-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-content hidden mt-4 text-slate-600">
                        No, the physical examination is not painful. Dr. Kumar will gently palpate the area. You may feel discomfort only if the hernia is already painful. The cough test might cause brief pressure sensation.
                    </div>
                </div>
                <div class="bg-slate-50 rounded-xl p-6" data-faq>
                    <button class="flex items-center justify-between w-full text-left" onclick="toggleFaq(this)">
                        <span class="font-semibold text-slate-800">How long does imaging take?</span>
                        <svg class="w-5 h-5 text-slate-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-content hidden mt-4 text-slate-600">
                        Ultrasound takes 15-20 minutes. CT scans take 10-15 minutes. MRI takes 30-45 minutes. All are outpatient procedures with no recovery time needed.
                    </div>
                </div>
                <div class="bg-slate-50 rounded-xl p-6" data-faq>
                    <button class="flex items-center justify-between w-full text-left" onclick="toggleFaq(this)">
                        <span class="font-semibold text-slate-800">Will my insurance cover these tests?</span>
                        <svg class="w-5 h-5 text-slate-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-content hidden mt-4 text-slate-600">
                        Most insurance plans cover necessary diagnostic tests. Dr. Kumar's office can help verify coverage before scheduling. Health savings accounts (HSAs) can also be used for out-of-pocket costs.
                    </div>
                </div>
                <div class="bg-slate-50 rounded-xl p-6" data-faq>
                    <button class="flex items-center justify-between w-full text-left" onclick="toggleFaq(this)">
                        <span class="font-semibold text-slate-800">Do I need a referral for imaging?</span>
                        <svg class="w-5 h-5 text-slate-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-content hidden mt-4 text-slate-600">
                        Dr. Kumar can order imaging directly during your consultation. No separate referral is needed in most cases.
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- CTA Section -->
<section class="bg-gradient-to-r from-brand-700 to-brand-800 text-white py-16">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Get an Accurate Diagnosis Today</h2>
        <p class="text-brand-100 text-lg mb-8">Early and accurate diagnosis is the first step to effective treatment. Schedule your consultation with Dr. Kumar.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:+917904217129" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-500 text-white font-semibold px-8 py-4 rounded-xl transition shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Call: +91 79042 17129
            </a>
            <a href="complications.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-semibold px-8 py-4 rounded-xl transition border border-white/30">
                Learn About Complications
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- Related Pages -->
<section class="max-w-7xl mx-auto px-4 py-12">
    <h3 class="text-xl font-bold text-slate-800 mb-6">Continue Learning</h3>
    <div class="grid md:grid-cols-4 gap-4">
        <a href="what-is-hernia.php" class="flex items-center gap-3 p-4 bg-white rounded-xl border border-slate-200 hover:border-brand-300 transition">
            <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <span class="font-medium text-slate-800">What is Hernia</span>
        </a>
        <a href="causes.php" class="flex items-center gap-3 p-4 bg-white rounded-xl border border-slate-200 hover:border-brand-300 transition">
            <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </div>
            <span class="font-medium text-slate-800">Causes</span>
        </a>
        <a href="symptoms.php" class="flex items-center gap-3 p-4 bg-white rounded-xl border border-slate-200 hover:border-brand-300 transition">
            <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>
            <span class="font-medium text-slate-800">Symptoms</span>
        </a>
        <a href="complications.php" class="flex items-center gap-3 p-4 bg-white rounded-xl border border-slate-200 hover:border-brand-300 transition">
            <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <span class="font-medium text-slate-800">Complications</span>
        </a>
    </div>
</section>

<script>
function toggleFaq(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('.faq-icon');
    const isOpen = !content.classList.contains('hidden');

    document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
    document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('rotate-180'));

    if (!isOpen) {
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
    }
}
</script>

<!-- Floating Call Button -->
<a href="tel:+917904217129" class="fixed bottom-6 right-6 z-50 bg-brand-700 hover:bg-brand-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
</a>

<?php require __DIR__ . '/../includes/footer.php'; ?>