<?php
$page_title       = 'TAPP Hernia Repair - Transabdominal Preperitoneal Technique | Dr. Kumar';
$page_description = 'TAPP (Transabdominal Preperitoneal) hernia repair: how it differs from TEP, benefits, procedure overview, and recovery. Expert TAPP surgery in Chennai by Dr. Kumar.';
$page_keywords    = 'TAPP hernia repair, transabdominal preperitoneal repair, TAPP vs TEP, laparoscopic inguinal hernia, hernia repair techniques, minimally invasive hernia';
$page_url         = $site['url'] . 'treatment/tapp-repair.php';

require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-brand-900 via-brand-800 to-slate-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                    <path d="M 60 0 L 0 0 0 60" fill="none" stroke="white" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-accent/20 backdrop-blur px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Laparoscopic Technique
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                TAPP Hernia<br>
                <span class="text-accent">Repair</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Transabdominal Preperitoneal repair - a versatile laparoscopic approach offering excellent visualization and outcomes for groin hernias.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#how-it-works" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    How TAPP Works
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7H3"/></svg>
                </a>
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-6 py-3 rounded-full border border-white/30 transition">
                    Book Consultation
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-white to-transparent"></div>
</section>

<!-- What is TAPP -->
<section id="what-is-tapp" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Understanding TAPP</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    What is TAPP Hernia Repair?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    TAPP stands for <strong>Transabdominal Preperitoneal</strong> hernia repair. It is a laparoscopic technique where the surgeon enters the peritoneal (abdominal) cavity briefly to access the preperitoneal space and place the mesh for hernia repair.
                </p>
                <p class="text-slate-600 leading-relaxed mb-6">
                    The key difference from TEP is that TAPP requires entering the abdominal cavity, which allows the surgeon to visualize the entire peritoneal cavity and identify any other hernias or pathology that might be present.
                </p>

                <div class="bg-brand-50 rounded-2xl p-6 border border-brand-100">
                    <h3 class="font-bold text-slate-900 mb-4">TAPP vs TEP: Key Differences</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b border-brand-200">
                                    <th class="py-2 text-left font-semibold text-slate-900">Aspect</th>
                                    <th class="py-2 text-left font-semibold text-brand-700">TAPP</th>
                                    <th class="py-2 text-left font-semibold text-slate-600">TEP</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-600">
                                <tr class="border-b border-slate-100">
                                    <td class="py-2">Peritoneal Entry</td>
                                    <td class="py-2 text-brand-700 font-medium">Yes - briefly</td>
                                    <td class="py-2">No</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2">Abdominal Visualization</td>
                                    <td class="py-2 text-brand-700 font-medium">Full view</td>
                                    <td class="py-2">Limited</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2">Other Pathology Detection</td>
                                    <td class="py-2 text-brand-700 font-medium">Yes</td>
                                    <td class="py-2">No</td>
                                </tr>
                                <tr>
                                    <td class="py-2">Technical Difficulty</td>
                                    <td class="py-2 text-brand-700 font-medium">Standard</td>
                                    <td class="py-2">Higher</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                <h3 class="text-xl font-bold text-slate-900 mb-6">When TAPP is Preferred</h3>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Full Pelvic Inspection</h4>
                            <p class="text-sm text-slate-600">Allows visualization of the entire abdominal cavity to detect other hernias or conditions.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Complex Hernias</h4>
                            <p class="text-sm text-slate-600">Better suited for hernias with potential intra-abdominal adhesions or scarring.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Surgeon Experience</h4>
                            <p class="text-sm text-slate-600">Many surgeons find TAPP more straightforward to learn and perform consistently.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Teaching Advantage</h4>
                            <p class="text-sm text-slate-600">Easier to teach and learn due to familiar anatomical view of the peritoneal cavity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How TAPP Differs from TEP -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Comparison</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                How TAPP Differs from TEP
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Both TAPP and TEP are excellent laparoscopic approaches. Understanding the differences helps in choosing the right technique.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 mb-12">
            <!-- TEP Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-brand-700 to-brand-600 p-6">
                    <h3 class="text-2xl font-bold text-white">TEP Approach</h3>
                    <p class="text-brand-100">Totally Extraperitoneal</p>
                </div>
                <div class="p-6">
                    <div class="space-y-4 mb-6">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">Entirely outside the peritoneal cavity</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">No pneumoperitoneum required</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">Technically demanding</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">Limited by previous surgery</span>
                        </div>
                    </div>
                    <div class="bg-brand-50 rounded-xl p-4">
                        <p class="text-sm text-slate-600"><strong>Best when:</strong> No other abdominal pathology suspected, bilateral repair desired, history of prior lower abdominal surgery is limited.</p>
                    </div>
                </div>
            </div>

            <!-- TAPP Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-accent to-amber-500 p-6">
                    <h3 class="text-2xl font-bold text-white">TAPP Approach</h3>
                    <p class="text-amber-100">Transabdominal Preperitoneal</p>
                </div>
                <div class="p-6">
                    <div class="space-y-4 mb-6">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">Briefly enters peritoneal cavity</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">Full pneumoperitoneum provides excellent view</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">More standardized technique</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">Can address other findings</span>
                        </div>
                    </div>
                    <div class="bg-accent/10 rounded-xl p-4">
                        <p class="text-sm text-slate-600"><strong>Best when:</strong> Other intra-abdominal pathology needs evaluation, hernia anatomy is complex, or surgeon has more TAPP experience.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 border border-slate-100">
            <h3 class="text-xl font-bold text-slate-900 mb-6 text-center">Both Techniques Share These Benefits</h3>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h4 class="font-semibold text-slate-900 mb-1">Small Incisions</h4>
                    <p class="text-xs text-slate-500">3 small keyholes</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h4 class="font-semibold text-slate-900 mb-1">Fast Recovery</h4>
                    <p class="text-xs text-slate-500">1-2 weeks typically</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h4 class="font-semibold text-slate-900 mb-1">Low Recurrence</h4>
                    <p class="text-xs text-slate-500">Less than 2%</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <h4 class="font-semibold text-slate-900 mb-1">Less Pain</h4>
                    <p class="text-xs text-slate-500">vs open surgery</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits of TAPP -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Advantages</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Benefits of TAPP Repair
            </h2>
            <p class="text-slate-600 leading-relaxed">
                TAPP repair offers several advantages that make it an excellent choice for many patients with groin hernias.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-brand-50 to-white rounded-2xl p-6 border border-brand-100">
                <div class="w-14 h-14 rounded-2xl bg-brand-700 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Excellent Visualization</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Full view of the entire peritoneal cavity allows the surgeon to identify and address other hernias or abdominal conditions during the same procedure.
                </p>
            </div>

            <div class="bg-gradient-to-br from-accent/10 to-white rounded-2xl p-6 border border-accent/20">
                <div class="w-14 h-14 rounded-2xl bg-accent flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">High Success Rate</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Studies show TAPP has excellent outcomes with very low recurrence rates, comparable to or better than other techniques.
                </p>
            </div>

            <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 border border-green-100">
                <div class="w-14 h-14 rounded-2xl bg-green-600 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Standardized Technique</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    More consistent and easier to learn, meaning more predictable outcomes across different surgeons.
                </p>
            </div>

            <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 border border-purple-100">
                <div class="w-14 h-14 rounded-2xl bg-purple-600 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Bilateral Access</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Both sides of the groin can be repaired through the same small incisions, ideal for patients with hernias on both sides.
                </p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 border border-blue-100">
                <div class="w-14 h-14 rounded-2xl bg-blue-600 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Quick Procedure</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Typically takes 30-60 minutes, allowing for efficient surgery scheduling and minimal time under anesthesia.
                </p>
            </div>

            <div class="bg-gradient-to-br from-pink-50 to-white rounded-2xl p-6 border border-pink-100">
                <div class="w-14 h-14 rounded-2xl bg-pink-600 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Minimal Scarring</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Three small keyhole incisions heal to become barely noticeable marks, providing excellent cosmetic results.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Procedure Overview -->
<section id="how-it-works" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">The Procedure</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                TAPP Procedure Overview
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Understanding the TAPP procedure helps patients feel more comfortable about their surgery.
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-brand-200"></div>

                <div class="space-y-8">
                    <!-- Step 1 -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-700 to-brand-600 flex items-center justify-center shrink-0 z-10 shadow-lg">
                            <span class="text-white font-bold text-xl">1</span>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Anesthesia & Preparation</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                General anesthesia is administered. The patient lies flat, and the surgeon makes a small incision near the umbilicus to create pneumoperitoneum (carbon dioxide inflation of the abdominal cavity).
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-accent to-amber-500 flex items-center justify-center shrink-0 z-10 shadow-lg">
                            <span class="text-white font-bold text-xl">2</span>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Trocar Placement</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                The laparoscope and working instruments are introduced through 2-3 small ports. The entire peritoneal cavity is inspected for other hernias or abnormalities.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-600 to-green-500 flex items-center justify-center shrink-0 z-10 shadow-lg">
                            <span class="text-white font-bold text-xl">3</span>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Peritoneum Incision</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                A precise incision is made in the peritoneum (lining of the abdominal cavity) above the hernia. This allows access to the preperitoneal space where the mesh will be placed.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-600 to-purple-500 flex items-center justify-center shrink-0 z-10 shadow-lg">
                            <span class="text-white font-bold text-xl">4</span>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Hernia Reduction & Mesh Placement</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                The hernia sac is gently reduced. A mesh is positioned to cover the hernia defect and surrounding weak area. The mesh is secured with tacks, sutures, or glue.
                            </p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-pink-600 to-pink-500 flex items-center justify-center shrink-0 z-10 shadow-lg">
                            <span class="text-white font-bold text-xl">5</span>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Peritoneum Closure</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                The peritoneum is carefully closed with sutures or tacks to cover the mesh. This prevents organs from contacting the mesh and reduces adhesion risk.
                            </p>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-slate-600 to-slate-500 flex items-center justify-center shrink-0 z-10 shadow-lg">
                            <span class="text-white font-bold text-xl">6</span>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Closure & Recovery</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Carbon dioxide is released, instruments are removed, and small incisions are closed. Patients typically recover in the hospital for a few hours before discharge.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recovery -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Healing Process</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                TAPP Recovery Expectations
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Recovery from TAPP repair is typically smooth and relatively quick. Here's what to expect.
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-6 mb-12">
            <div class="bg-brand-50 rounded-2xl p-6 text-center border-t-4 border-brand-700">
                <span class="text-xs font-bold text-brand-700 uppercase tracking-wider">Day 1-2</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Hospital Discharge</h3>
                <p class="text-sm text-slate-600">Most patients go home the same day or next morning. Mild discomfort is normal.</p>
            </div>

            <div class="bg-accent/10 rounded-2xl p-6 text-center border-t-4 border-accent">
                <span class="text-xs font-bold text-accent uppercase tracking-wider">Days 3-7</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Initial Healing</h3>
                <p class="text-sm text-slate-600">Rest at home. Light walking is encouraged. Pain should be minimal.</p>
            </div>

            <div class="bg-green-50 rounded-2xl p-6 text-center border-t-4 border-green-600">
                <span class="text-xs font-bold text-green-600 uppercase tracking-wider">Weeks 2-3</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Activity Increase</h3>
                <p class="text-sm text-slate-600">Return to desk work. Light exercise OK. Heavy lifting still restricted.</p>
            </div>

            <div class="bg-purple-50 rounded-2xl p-6 text-center border-t-4 border-purple-600">
                <span class="text-xs font-bold text-purple-600 uppercase tracking-wider">Weeks 4-6</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Full Recovery</h3>
                <p class="text-sm text-slate-600">Return to all normal activities including exercise and heavy lifting.</p>
            </div>
        </div>

        <div class="bg-slate-50 rounded-2xl p-8 border border-slate-200">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="flex-1">
                    <h3 class="text-xl font-bold text-slate-900 mb-4">When to Contact Dr. Kumar</h3>
                    <div class="grid md:grid-cols-2 gap-3">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                            <span class="text-sm text-slate-600">Fever above 101F</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                            <span class="text-sm text-slate-600">Increasing pain or redness</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                            <span class="text-sm text-slate-600">Signs of infection at incision</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                            <span class="text-sm text-slate-600">Difficulty urinating</span>
                        </div>
                    </div>
                </div>
                <a href="tel:<?= $site['phone_link'] ?>" class="shrink-0 inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-6 py-4 rounded-full transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-24 bg-gradient-to-br from-brand-900 via-brand-800 to-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-6">
            Ready to Discuss TAPP Repair?
        </h2>
        <p class="text-lg text-slate-200 leading-relaxed mb-8 max-w-2xl mx-auto">
            Dr. Kumar will evaluate your condition and recommend the most appropriate surgical technique for your specific needs.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Book Consultation
            </a>
            <a href="treatment/etep-repair.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition">
                Learn About eTEP
            </a>
        </div>
    </div>
</section>

<!-- Floating Call Button -->
<a href="tel:<?= $site['phone_link'] ?>" class="fixed bottom-6 right-6 z-50 group" aria-label="Call Dr. Kumar">
    <div class="relative flex items-center">
        <div class="absolute right-full mr-3 bg-white rounded-xl shadow-2xl p-4 whitespace-nowrap opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-x-2 group-hover:translate-x-0">
            <p class="font-bold text-slate-900"><?= $site['phone'] ?></p>
            <p class="text-sm text-slate-500">Tap to call</p>
        </div>
        <div class="w-14 h-14 bg-gradient-to-r from-brand-600 to-brand-700 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
            <svg class="w-6 h-6 text-white animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
        </div>
    </div>
</a>

<?php require __DIR__ . '/../includes/footer.php'; ?>
