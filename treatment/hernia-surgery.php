<?php
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
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Treatment Guide
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                Hernia Surgery<br>
                <span class="text-accent">Options & Guide</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Everything you need to know about hernia surgery options, from consultation to recovery. Dr. Kumar offers personalized treatment plans for optimal outcomes.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#surgery-options" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    Surgery Options
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

<!-- Surgery Options Overview -->
<section id="surgery-options" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Surgical Approaches</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Hernia Surgery Options
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Modern hernia surgery offers multiple approaches. Dr. Kumar will recommend the most suitable technique based on your specific condition, hernia type, and overall health.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mb-16">
            <!-- Open Hernia Repair -->
            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition">
                <div class="bg-gradient-to-r from-brand-700 to-brand-600 p-6">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white">Open Hernia Repair</h3>
                            <p class="text-brand-100">Traditional Surgical Approach</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-slate-600 leading-relaxed mb-6">
                        A single incision is made near the hernia site. The surgeon pushes the protruding tissue back into place and repairs the weakened area with sutures, often using mesh for reinforcement.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">Suitable for all hernia types</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">Local or regional anesthesia possible</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">Often used for complex or recurrent hernias</span>
                        </div>
                    </div>
                    <div class="bg-slate-50 rounded-xl p-4">
                        <p class="text-sm text-slate-600"><strong>Recovery:</strong> 3-6 weeks for full recovery, may require hospital stay.</p>
                    </div>
                </div>
            </div>

            <!-- Laparoscopic Hernia Repair -->
            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition">
                <div class="bg-gradient-to-r from-accent to-amber-500 p-6">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white">Laparoscopic Repair</h3>
                            <p class="text-amber-100">Minimally Invasive Approach</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Small keyhole incisions are made, and a tiny camera (laparoscope) guides the surgeon. Special instruments repair the hernia with mesh placed through the incisions.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">Less pain and faster recovery</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">Better cosmetic results with minimal scarring</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">Ideal for bilateral and recurrent hernias</span>
                        </div>
                    </div>
                    <div class="bg-slate-50 rounded-xl p-4">
                        <p class="text-sm text-slate-600"><strong>Recovery:</strong> 1-3 weeks for return to normal activities.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comparison Table -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden">
            <div class="p-6 border-b border-slate-100">
                <h3 class="text-xl font-bold text-slate-900">Open vs. Laparoscopic: Quick Comparison</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-slate-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900">Feature</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900">Open Surgery</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900">Laparoscopic</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr class="hover:bg-slate-50">
                            <td class="px-6 py-4 text-sm font-medium text-slate-900">Incision Size</td>
                            <td class="px-6 py-4 text-sm text-slate-600">3-6 inches</td>
                            <td class="px-6 py-4 text-sm text-slate-600">3 small keyholes (0.5-1 cm each)</td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="px-6 py-4 text-sm font-medium text-slate-900">Hospital Stay</td>
                            <td class="px-6 py-4 text-sm text-slate-600">1-3 days typically</td>
                            <td class="px-6 py-4 text-sm text-slate-600">Often same-day discharge</td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="px-6 py-4 text-sm font-medium text-slate-900">Pain Level</td>
                            <td class="px-6 py-4 text-sm text-slate-600">Moderate to significant</td>
                            <td class="px-6 py-4 text-sm text-slate-600">Generally less pain</td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="px-6 py-4 text-sm font-medium text-slate-900">Recovery Time</td>
                            <td class="px-6 py-4 text-sm text-slate-600">3-6 weeks</td>
                            <td class="px-6 py-4 text-sm text-slate-600">1-3 weeks</td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="px-6 py-4 text-sm font-medium text-slate-900">Best For</td>
                            <td class="px-6 py-4 text-sm text-slate-600">Large, complex, or recurrent hernias</td>
                            <td class="px-6 py-4 text-sm text-slate-600">Most primary hernias, bilateral repair</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- When Surgery is Recommended -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Medical Necessity</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    When is Hernia Surgery Recommended?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Not all hernias require immediate surgery. Dr. Kumar will evaluate your condition and recommend surgery based on several factors including symptoms, hernia size, and risk of complications.
                </p>

                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Emergency Indicators</h4>
                            <p class="text-sm text-slate-600">Surgery is urgent if you experience severe pain, vomiting, inability to pass gas, or a tender bulge that won't push back in.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Elective Surgery</h4>
                            <p class="text-sm text-slate-600">Most hernias are repaired electively. Surgery is typically recommended when the hernia causes symptoms or is at risk of complications.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Watchful Waiting</h4>
                            <p class="text-sm text-slate-600">Small, painless hernias may be monitored. Your surgeon will advise on the best timing for your surgery.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 border border-slate-100">
                <h3 class="text-xl font-bold text-slate-900 mb-6">Factors Your Surgeon Considers</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-700 flex items-center justify-center shrink-0 mt-1">
                            <span class="text-white text-xs font-bold">1</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Hernia Type & Size</h4>
                            <p class="text-sm text-slate-600">Larger hernias and certain types often require surgical repair.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-700 flex items-center justify-center shrink-0 mt-1">
                            <span class="text-white text-xs font-bold">2</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Symptoms</h4>
                            <p class="text-sm text-slate-600">Pain, discomfort, or functional limitations indicate need for repair.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-700 flex items-center justify-center shrink-0 mt-1">
                            <span class="text-white text-xs font-bold">3</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Age & Overall Health</h4>
                            <p class="text-sm text-slate-600">Your fitness for surgery and recovery capacity.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-700 flex items-center justify-center shrink-0 mt-1">
                            <span class="text-white text-xs font-bold">4</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Risk of Strangulation</h4>
                            <p class="text-sm text-slate-600">Hernias at higher risk of complications may need earlier repair.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-700 flex items-center justify-center shrink-0 mt-1">
                            <span class="text-white text-xs font-bold">5</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Lifestyle Factors</h4>
                            <p class="text-sm text-slate-600">Activity level and occupation impact surgical timing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Surgery Preparation -->
<section id="preparation" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Before Surgery</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Surgery Preparation Tips
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Proper preparation helps ensure a smooth surgery and faster recovery. Follow these guidelines provided by Dr. Kumar's team.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div class="bg-gradient-to-br from-brand-50 to-white rounded-2xl p-6 border border-brand-100">
                <div class="w-12 h-12 rounded-xl bg-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Pre-Operative Tests</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Blood tests, ECG, and chest X-ray may be required. Your medical history will be reviewed to ensure you're fit for anesthesia.
                </p>
            </div>

            <div class="bg-gradient-to-br from-accent/10 to-white rounded-2xl p-6 border border-accent/20">
                <div class="w-12 h-12 rounded-xl bg-accent flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Medications</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Inform your surgeon about all medications. Blood thinners may need to be stopped. Some supplements should be avoided before surgery.
                </p>
            </div>

            <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 border border-green-100">
                <div class="w-12 h-12 rounded-xl bg-green-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Fasting Instructions</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Typically, no food or drink after midnight before surgery. Clear fluids may be allowed up to 2 hours before the procedure.
                </p>
            </div>

            <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 border border-purple-100">
                <div class="w-12 h-12 rounded-xl bg-purple-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Quit Smoking</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Stop smoking at least 2 weeks before surgery. Smoking impairs healing and increases surgical risks.
                </p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 border border-blue-100">
                <div class="w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Arrange Support</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Someone should drive you home after surgery. Plan for help at home for the first few days during initial recovery.
                </p>
            </div>

            <div class="bg-gradient-to-br from-pink-50 to-white rounded-2xl p-6 border border-pink-100">
                <div class="w-12 h-12 rounded-xl bg-pink-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Comfortable Clothing</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Wear loose, comfortable clothes on the day of surgery. Leave jewelry and valuables at home.
                </p>
            </div>
        </div>

        <!-- Checklist Card -->
        <div class="bg-gradient-to-r from-brand-700 to-brand-600 rounded-2xl p-8 text-white">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="flex-1">
                    <h3 class="text-2xl font-bold mb-4">Surgery Day Checklist</h3>
                    <div class="grid md:grid-cols-2 gap-3">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span class="text-sm">Arrive on time at the hospital</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span class="text-sm">Bring identification and insurance documents</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span class="text-sm">List of current medications</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span class="text-sm">Wear loose, comfortable clothing</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span class="text-sm">Remove nail polish and makeup</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span class="text-sm">Someone to accompany you home</span>
                        </div>
                    </div>
                </div>
                <div class="shrink-0">
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white text-brand-700 font-semibold px-6 py-4 rounded-full hover:bg-slate-100 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                        Questions? Call Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recovery Overview -->
<section id="recovery" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Post-Surgery</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Recovery Overview
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Modern hernia surgery techniques allow for faster recovery than ever before. Here's what to expect after your procedure.
            </p>
        </div>

        <!-- Timeline -->
        <div class="max-w-4xl mx-auto mb-12">
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-brand-200"></div>
                <div class="space-y-8">
                    <!-- Immediate -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-brand-700 flex items-center justify-center shrink-0 z-10">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <span class="text-xs font-semibold text-brand-700 uppercase tracking-wider">Immediate - First 24 Hours</span>
                            <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">Post-Op Recovery</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                You may experience some grogginess from anesthesia. Pain is usually mild and manageable with prescribed medication. Most patients can walk within hours of surgery.
                            </p>
                        </div>
                    </div>

                    <!-- First Week -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-accent flex items-center justify-center shrink-0 z-10">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <span class="text-xs font-semibold text-accent uppercase tracking-wider">Days 1-7</span>
                            <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">First Week at Home</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Rest as needed but aim to walk regularly. Keep the wound clean and dry. Avoid driving, heavy lifting (>5 kg), and strenuous activities. Most patients return to desk work within 1 week.
                            </p>
                        </div>
                    </div>

                    <!-- Weeks 2-4 -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-green-600 flex items-center justify-center shrink-0 z-10">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <span class="text-xs font-semibold text-green-600 uppercase tracking-wider">Weeks 2-4</span>
                            <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">Gradual Return to Activities</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Most patients can resume light exercise and normal daily activities. Avoid heavy lifting for 4-6 weeks. Follow your surgeon's specific guidance on activity progression.
                            </p>
                        </div>
                    </div>

                    <!-- Full Recovery -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-brand-800 flex items-center justify-center shrink-0 z-10">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <span class="text-xs font-semibold text-brand-800 uppercase tracking-wider">Weeks 6-8</span>
                            <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">Full Recovery</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Most patients achieve full recovery by 6-8 weeks. You can typically return to all normal activities including heavy lifting. Continue any prescribed physical therapy exercises.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center">
            <a href="treatment/recovery.php" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-8 py-4 rounded-full transition">
                Detailed Recovery Guide
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-24 bg-gradient-to-br from-brand-900 via-brand-800 to-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-6">
            Ready to Discuss Your Hernia Treatment Options?
        </h2>
        <p class="text-lg text-slate-200 leading-relaxed mb-8 max-w-2xl mx-auto">
            Dr. Kumar will evaluate your condition and recommend the most suitable surgical approach for your specific needs.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Book Consultation
            </a>
            <a href="treatment/laparoscopic-hernia-surgery.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition">
                Learn About Laparoscopic Repair
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
