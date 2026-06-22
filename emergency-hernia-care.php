<?php
require __DIR__ . '/includes/header.php';
?>

<!-- Emergency Banner -->
<!-- <div class="bg-red-600 text-white py-3">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-center gap-2 text-center">
        <svg class="w-6 h-6 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
        </svg>
        <span class="font-bold text-lg">URGENT: If you suspect a strangulated hernia, call emergency services immediately!</span>
    </div>
</div> -->

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-red-700 via-red-600 to-red-800 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid)"/>
        </svg>
    </div>
    <div class="max-w-7xl mx-auto px-4 relative">
        <nav class="text-sm mb-6 text-red-200">
            <a href="<?= $site['url'] ?>" class="hover:text-white">Home</a>
            <span class="mx-2">/</span>
            <span class="text-white">Emergency Care</span>
        </nav>
        <div class="flex items-start gap-6">
            <div class="hidden md:block">
                <div class="w-20 h-20 rounded-full bg-white/20 flex items-center justify-center">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
            <div>
                <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Emergency Hernia Care</h1>
                <p class="text-xl text-red-100 max-w-2xl">24/7 guidance for hernia emergencies. Know the warning signs and get immediate help when you need it most.</p>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Contact Card -->
<section class="py-8 bg-slate-900">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-2xl p-6 md:p-8 text-white text-center">
            <h2 class="text-2xl font-bold mb-4">24/7 Emergency Helpline</h2>
            <p class="text-red-100 mb-6">For urgent hernia concerns and immediate guidance</p>
            <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center gap-3 bg-white text-red-700 font-bold text-xl px-8 py-4 rounded-xl hover:bg-red-50 transition w-full md:w-auto">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <?= $site['phone'] ?>
                </a>
                <a href="https://wa.me/<?= str_replace(['+', ' '], '', $site['phone']) ?>" class="inline-flex items-center justify-center gap-3 bg-green-600 text-white font-bold text-xl px-8 py-4 rounded-xl hover:bg-green-700 transition w-full md:w-auto">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    WhatsApp Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Warning Signs -->
<section class="py-16 bg-slate-50">
    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-slate-800 mb-4">Emergency Warning Signs</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Recognize these symptoms and seek immediate medical attention</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <!-- Warning 1 -->
            <div class="bg-white rounded-2xl shadow-sm border-2 border-red-200 p-6">
                <div class="w-14 h-14 rounded-full bg-red-100 flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-slate-800 text-lg mb-2">Severe Pain</h3>
                <p class="text-slate-600 text-sm">Sudden, intense pain at the hernia site that doesn't improve with rest or over-the-counter medication</p>
            </div>

            <!-- Warning 2 -->
            <div class="bg-white rounded-2xl shadow-sm border-2 border-red-200 p-6">
                <div class="w-14 h-14 rounded-full bg-red-100 flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-slate-800 text-lg mb-2">Skin Changes</h3>
                <p class="text-slate-600 text-sm">Redness, warmth, discoloration, or skin changes over the hernia bulge</p>
            </div>

            <!-- Warning 3 -->
            <div class="bg-white rounded-2xl shadow-sm border-2 border-red-200 p-6">
                <div class="w-14 h-14 rounded-full bg-red-100 flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-slate-800 text-lg mb-2">Firm Bulge</h3>
                <p class="text-slate-600 text-sm">The hernia bulge becomes hard, tense, or cannot be pushed back in</p>
            </div>

            <!-- Warning 4 -->
            <div class="bg-white rounded-2xl shadow-sm border-2 border-red-200 p-6">
                <div class="w-14 h-14 rounded-full bg-red-100 flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-slate-800 text-lg mb-2">Fever</h3>
                <p class="text-slate-600 text-sm">Fever above 100.4F (38C) combined with hernia symptoms</p>
            </div>

            <!-- Warning 5 -->
            <div class="bg-white rounded-2xl shadow-sm border-2 border-red-200 p-6">
                <div class="w-14 h-14 rounded-full bg-red-100 flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-slate-800 text-lg mb-2">Nausea/Vomiting</h3>
                <p class="text-slate-600 text-sm">Inability to pass gas or have bowel movements, nausea, or vomiting</p>
            </div>

            <!-- Warning 6 -->
            <div class="bg-white rounded-2xl shadow-sm border-2 border-red-200 p-6">
                <div class="w-14 h-14 rounded-full bg-red-100 flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-slate-800 text-lg mb-2">Rapid Symptoms</h3>
                <p class="text-slate-600 text-sm">Symptoms that develop and worsen rapidly over hours</p>
            </div>
        </div>

        <!-- Critical Alert -->
        <div class="bg-red-50 border-2 border-red-300 rounded-2xl p-6 md:p-8 text-center">
            <div class="w-16 h-16 rounded-full bg-red-600 flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-red-800 mb-3">Strangulated Hernia is a Medical Emergency</h3>
            <p class="text-red-700 mb-4 max-w-2xl mx-auto">
                When blood supply to herniated tissue is cut off, tissue can die within hours. This requires immediate surgery to prevent life-threatening complications.
            </p>
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center gap-2 bg-red-600 text-white font-bold text-lg px-8 py-4 rounded-xl hover:bg-red-700 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                Call Now: <?= $site['phone'] ?>
            </a>
        </div>
    </div>
</section>

<!-- When to Go to ER -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl font-bold text-slate-800 mb-4">When to Go to the Emergency Room</h2>
                <p class="text-slate-600 mb-6">
                    Some situations require going directly to the Emergency Room (ER) rather than calling our office:
                </p>
                <div class="space-y-4">
                    <div class="flex items-start gap-4 bg-green-50 rounded-xl p-4">
                        <svg class="w-6 h-6 text-green-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <div>
                            <h4 class="font-bold text-slate-800">Severe pain with vomiting</h4>
                            <p class="text-slate-600 text-sm">Intense abdominal pain combined with nausea/vomiting</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 bg-green-50 rounded-xl p-4">
                        <svg class="w-6 h-6 text-green-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <div>
                            <h4 class="font-bold text-slate-800">Signs of bowel obstruction</h4>
                            <p class="text-slate-600 text-sm">Cannot pass gas or have bowel movement for 24+ hours</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 bg-green-50 rounded-xl p-4">
                        <svg class="w-6 h-6 text-green-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <div>
                            <h4 class="font-bold text-slate-800">Blue or purple skin over hernia</h4>
                            <p class="text-slate-600 text-sm">Skin discoloration indicates compromised blood supply</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 bg-green-50 rounded-xl p-4">
                        <svg class="w-6 h-6 text-green-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <div>
                            <h4 class="font-bold text-slate-800">High fever with hernia pain</h4>
                            <p class="text-slate-600 text-sm">Temperature above 101F with hernia symptoms</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-slate-100 rounded-2xl p-6 md:p-8">
                <h3 class="text-xl font-bold text-slate-800 mb-4">Find Your Nearest ER</h3>
                <p class="text-slate-600 mb-4">In case of emergency, go to the nearest hospital with emergency services:</p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-brand-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Chennai Government Hospital Emergency
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-brand-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Nearest Multi-Specialty Hospital
                    </li>
                </ul>
                <div class="mt-6 pt-6 border-t border-slate-200">
                    <p class="text-slate-600 text-sm">
                        <strong>Note:</strong> If you can reach our office quickly, call ahead so we can prepare for your arrival.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What to Do Step by Step -->
<section class="py-16 bg-slate-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-slate-800 mb-4">Urgent Care Steps</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Follow these steps if you experience hernia emergency symptoms</p>
        </div>

        <div class="grid md:grid-cols-4 gap-6">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="w-16 h-16 rounded-full bg-brand-700 text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">1</div>
                <h3 class="font-bold text-slate-800 mb-2">Stay Calm</h3>
                <p class="text-slate-600 text-sm">Do not panic. Most hernia emergencies can be treated successfully with prompt care.</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center">
                <div class="w-16 h-16 rounded-full bg-brand-700 text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">2</div>
                <h3 class="font-bold text-slate-800 mb-2">Stop Eating</h3>
                <p class="text-slate-600 text-sm">Do not eat or drink anything. This may be needed if surgery is required.</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center">
                <div class="w-16 h-16 rounded-full bg-brand-700 text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">3</div>
                <h3 class="font-bold text-slate-800 mb-2">Call Us</h3>
                <p class="text-slate-600 text-sm">Call our emergency line immediately for guidance and to prepare for your arrival.</p>
            </div>

            <!-- Step 4 -->
            <div class="text-center">
                <div class="w-16 h-16 rounded-full bg-brand-700 text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">4</div>
                <h3 class="font-bold text-slate-800 mb-2">Get to ER</h3>
                <p class="text-slate-600 text-sm">If advised, go to nearest emergency room or call for emergency transport.</p>
            </div>
        </div>
    </div>
</section>

<!-- Non-Emergency Guidance -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-amber-50 border border-amber-200 rounded-2xl p-6 md:p-8">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-full bg-amber-500 flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">When It's Not an Emergency</h3>
                    <p class="text-slate-600 mb-4">Contact our office during regular hours if you experience:</p>
                    <ul class="grid md:grid-cols-2 gap-3 text-slate-700">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-amber-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Mild discomfort or aching
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-amber-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Small, reducible bulge
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-amber-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Bulge that appears with activity
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-amber-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Scheduled appointment requests
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="contact.php" class="inline-flex items-center gap-2 text-brand-700 font-semibold hover:text-brand-800">
                            Contact our office
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ for Emergencies -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-brand-50 px-3 py-1.5 rounded-full mb-4 inline-block">🤷‍♂️ FAQ</span>
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 leading-tight">
                Frequently asked questions
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6 items-start">
            <!-- Left Column -->
            <div class="space-y-4">
                <!-- Item 1 (Active) -->
                <div class="faq-item active bg-brand-700 text-white rounded-2xl overflow-hidden transition-all duration-300 border border-transparent shadow-md">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-white text-base md:text-lg leading-snug transition-colors duration-300">How do I know if my hernia is strangulated?</span>
                        <span class="faq-symbol text-2xl font-light bg-brand-800 text-white w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">—</span>
                    </button>
                    <div class="faq-content px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-brand-50 text-sm md:text-base leading-relaxed transition-colors duration-300">Strangulation occurs when blood supply is cut off. Warning signs include: severe sudden pain, bulge that's hard and tender, skin redness or discoloration, fever, nausea/vomiting, and inability to pass gas. If you experience these, seek emergency care immediately.</p>
                    </div>
                </div>

                <!-- Item 3 (Inactive) -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What information should I have ready when calling?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Have ready: your name and contact details, description of symptoms and when they started, any fever readings, your current medications, and whether you've had previous hernia surgery. This helps us assess urgency and prepare for your arrival.</p>
                    </div>
                </div>

                <!-- Item 5 (Inactive) -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What happens in emergency hernia surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Emergency hernia surgery typically involves releasing trapped tissue, checking for damage, repairing the hernia with mesh if appropriate, and possibly removing dead tissue. It's usually done under general anesthesia. Recovery may be longer than planned surgery but the goal is to prevent life-threatening complications.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-4">
                <!-- Item 2 (Inactive) -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Can I wait to see if symptoms improve?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">If you have emergency warning signs (severe pain, skin changes, fever, vomiting, firm bulge), do not wait. Contact us or go to the ER immediately. Tissue damage can occur within hours. For mild symptoms, you can schedule a regular appointment.</p>
                    </div>
                </div>

                <!-- Item 4 (Inactive) -->
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Is it safe to drive with hernia pain?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">If you have severe pain, suspected strangulation, or symptoms that could impair your driving, call for emergency transport or have someone else drive. Safety first - if you're unsure, call our emergency line for guidance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="bg-gradient-to-r from-red-600 to-red-700 py-16">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Don't Wait - Get Help Now</h2>
        <p class="text-red-100 text-lg mb-8 max-w-2xl mx-auto">If you suspect a hernia emergency, time is critical. Contact us immediately for guidance.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center justify-center gap-3 bg-white text-red-700 font-bold text-xl px-8 py-4 rounded-xl hover:bg-red-50 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                Call: <?= $site['phone'] ?>
            </a>
            <a href="https://wa.me/<?= str_replace(['+', ' '], '', $site['phone']) ?>" class="inline-flex items-center justify-center gap-3 bg-green-600 text-white font-bold text-xl px-8 py-4 rounded-xl hover:bg-green-700 transition">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>