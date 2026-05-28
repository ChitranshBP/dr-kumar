<?php
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-slate-800 via-slate-700 to-slate-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 1200 600" preserveAspectRatio="xMidYMid slice">
            <defs>
                <pattern id="dots" width="30" height="30" patternUnits="userSpaceOnUse">
                    <circle cx="15" cy="15" r="1.5" fill="white"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#dots)"/>
        </svg>
    </div>
    <div class="max-w-7xl mx-auto px-4 py-16 md:py-24 relative">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6 text-sm">
                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/></svg>
                <span>Risk Factors & Prevention</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Causes of Hernia
            </h1>
            <p class="text-lg md:text-xl text-slate-300 leading-relaxed mb-8">
                Understanding what causes hernias helps you recognize your risk factors and make informed decisions about prevention and early treatment.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:+917904217129" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-500 text-white font-semibold px-6 py-3 rounded-lg transition shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    Book Consultation
                </a>
                <a href="symptoms.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-semibold px-6 py-3 rounded-lg transition border border-white/20">
                    View Symptoms
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 py-12">

    <!-- Common Causes -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-14 h-14 rounded-2xl bg-brand-100 flex items-center justify-center">
                <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Common Causes of Hernia</h2>
                <p class="text-slate-600">Primary factors that contribute to hernia development</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Heavy Lifting -->
            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Heavy Lifting</h3>
                <p class="text-slate-600 text-sm">Improper lifting techniques or lifting weights beyond your capacity puts excessive strain on the abdominal wall, creating or worsening weak spots.</p>
            </div>

            <!-- Chronic Coughing -->
            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Chronic Coughing</h3>
                <p class="text-slate-600 text-sm">Persistent coughing from conditions like COPD, asthma, or allergies creates repeated pressure on the abdominal wall muscles.</p>
            </div>

            <!-- Straining -->
            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Chronic Straining</h3>
                <p class="text-slate-600 text-sm">Straining during bowel movements (constipation) or urination puts sustained pressure on weak areas of the abdominal wall.</p>
            </div>

            <!-- Previous Surgery -->
            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-pink-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Previous Surgery</h3>
                <p class="text-slate-600 text-sm">Any surgical incision in the abdomen creates a potential weak point. Even after healing, the scar tissue is inherently weaker than original tissue.</p>
            </div>

            <!-- Pregnancy -->
            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Pregnancy</h3>
                <p class="text-slate-600 text-sm">The growing uterus puts pressure on abdominal muscles, and hormonal changes relax connective tissues, increasing hernia risk.</p>
            </div>

            <!-- Obesity -->
            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Obesity</h3>
                <p class="text-slate-600 text-sm">Excess body weight increases intra-abdominal pressure and weakens abdominal muscles over time.</p>
            </div>
        </div>
    </section>

    <!-- Risk Factors Comparison -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center">
                <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Risk Factor Comparison</h2>
                <p class="text-slate-600">Understanding how different factors affect hernia risk</p>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-xl border border-slate-200 overflow-hidden">
                <thead>
                    <tr class="bg-slate-50">
                        <th class="text-left p-4 font-semibold text-slate-800">Risk Factor</th>
                        <th class="text-center p-4 font-semibold text-slate-800">Risk Level</th>
                        <th class="text-left p-4 font-semibold text-slate-800">Affected Hernia Types</th>
                        <th class="text-left p-4 font-semibold text-slate-800">Prevention Tips</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 font-medium text-slate-800">Heavy Weight Lifting</td>
                        <td class="p-4 text-center"><span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-semibold">High</span></td>
                        <td class="p-4 text-slate-600">Inguinal, Incisional, Ventral</td>
                        <td class="p-4 text-slate-600">Use proper technique, lift with legs, avoid max weights</td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 font-medium text-slate-800">Obesity</td>
                        <td class="p-4 text-center"><span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-semibold">High</span></td>
                        <td class="p-4 text-slate-600">Inguinal, Umbilical, Incisional</td>
                        <td class="p-4 text-slate-600">Maintain healthy weight, core strengthening</td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 font-medium text-slate-800">Chronic Coughing</td>
                        <td class="p-4 text-center"><span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-sm font-semibold">Moderate</span></td>
                        <td class="p-4 text-slate-600">Inguinal, Ventral</td>
                        <td class="p-4 text-slate-600">Treat underlying condition, coughing exercises</td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 font-medium text-slate-800">Previous Surgery</td>
                        <td class="p-4 text-center"><span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-sm font-semibold">Moderate</span></td>
                        <td class="p-4 text-slate-600">Incisional</td>
                        <td class="p-4 text-slate-600">Follow post-op instructions, avoid strain during recovery</td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 font-medium text-slate-800">Multiple Pregnancies</td>
                        <td class="p-4 text-center"><span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-sm font-semibold">Moderate</span></td>
                        <td class="p-4 text-slate-600">Umbilical, Ventral</td>
                        <td class="p-4 text-slate-600">Core strengthening, healthy weight during pregnancy</td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 font-medium text-slate-800">Age (50+)</td>
                        <td class="p-4 text-center"><span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-sm font-semibold">Moderate</span></td>
                        <td class="p-4 text-slate-600">All types increase with age</td>
                        <td class="p-4 text-slate-600">Regular checkups, maintain muscle strength</td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 font-medium text-slate-800">Family History</td>
                        <td class="p-4 text-center"><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-semibold">Increased</span></td>
                        <td class="p-4 text-slate-600">Inguinal, Umbilical</td>
                        <td class="p-4 text-slate-600">Be aware of symptoms, regular self-examination</td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 font-medium text-slate-800">Smoking</td>
                        <td class="p-4 text-center"><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-semibold">Increased</span></td>
                        <td class="p-4 text-slate-600">All types</td>
                        <td class="p-4 text-slate-600">Quit smoking, reduces chronic cough</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Age-Related Factors -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-14 h-14 rounded-2xl bg-brand-100 flex items-center justify-center">
                <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Age-Related Factors</h2>
                <p class="text-slate-600">How age affects hernia risk</p>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold">0-18</div>
                    <h3 class="font-bold text-slate-800">Children & Teens</h3>
                </div>
                <ul class="space-y-2 text-sm text-slate-700">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-blue-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Congenital umbilical hernias common</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-blue-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Most resolve by age 4-5</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-blue-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Indirect inguinal hernias more common</span>
                    </li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-100">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-full bg-green-500 text-white flex items-center justify-center font-bold">19-50</div>
                    <h3 class="font-bold text-slate-800">Young Adults</h3>
                </div>
                <ul class="space-y-2 text-sm text-slate-700">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Physical activity increases risk</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Inguinal hernias most common</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Workplace lifting hazards</span>
                    </li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-purple-50 to-violet-50 rounded-xl p-6 border border-purple-100">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-full bg-purple-500 text-white flex items-center justify-center font-bold">50+</div>
                    <h3 class="font-bold text-slate-800">Seniors</h3>
                </div>
                <ul class="space-y-2 text-sm text-slate-700">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-purple-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Muscle weakness naturally occurs</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-purple-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Multiple hernia types possible</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-purple-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Higher complication risk</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Lifestyle Factors -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-14 h-14 rounded-2xl bg-brand-100 flex items-center justify-center">
                <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Lifestyle Factors</h2>
                <p class="text-slate-600">Daily habits that affect hernia risk</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
            <div class="grid md:grid-cols-2">
                <div class="p-8 border-b md:border-b-0 md:border-r border-slate-200">
                    <h3 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Protective Factors
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 bg-green-50 rounded-lg">
                            <div class="w-10 h-10 rounded-lg bg-green-500 text-white flex items-center justify-center shrink-0">1</div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Regular Exercise</h4>
                                <p class="text-sm text-slate-600">Strengthening core muscles helps support the abdominal wall and reduce strain on weak points.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-green-50 rounded-lg">
                            <div class="w-10 h-10 rounded-lg bg-green-500 text-white flex items-center justify-center shrink-0">2</div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Healthy Weight</h4>
                                <p class="text-sm text-slate-600">Maintaining a healthy BMI reduces pressure on abdominal muscles and connective tissues.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-green-50 rounded-lg">
                            <div class="w-10 h-10 rounded-lg bg-green-500 text-white flex items-center justify-center shrink-0">3</div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Proper Lifting Technique</h4>
                                <p class="text-sm text-slate-600">Bend at the knees, keep back straight, and let leg muscles do the work when lifting heavy objects.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-green-50 rounded-lg">
                            <div class="w-10 h-10 rounded-lg bg-green-500 text-white flex items-center justify-center shrink-0">4</div>
                            <div>
                                <h4 class="font-semibold text-slate-800">High-Fiber Diet</h4>
                                <p class="text-sm text-slate-600">Prevents constipation and straining during bowel movements, reducing abdominal pressure.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Risk Factors to Avoid
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 bg-red-50 rounded-lg">
                            <div class="w-10 h-10 rounded-lg bg-red-500 text-white flex items-center justify-center shrink-0">1</div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Smoking</h4>
                                <p class="text-sm text-slate-600">Causes chronic coughing and weakens connective tissues throughout the body.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-red-50 rounded-lg">
                            <div class="w-10 h-10 rounded-lg bg-red-500 text-white flex items-center justify-center shrink-0">2</div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Sedentary Lifestyle</h4>
                                <p class="text-sm text-slate-600">Weak core muscles and poor posture increase vulnerability to hernias.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-red-50 rounded-lg">
                            <div class="w-10 h-10 rounded-lg bg-red-500 text-white flex items-center justify-center shrink-0">3</div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Poor Nutrition</h4>
                                <p class="text-sm text-slate-600">Lack of protein and vitamins impairs tissue repair and weakens connective tissues.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-red-50 rounded-lg">
                            <div class="w-10 h-10 rounded-lg bg-red-500 text-white flex items-center justify-center shrink-0">4</div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Heavy Alcohol Use</h4>
                                <p class="text-sm text-slate-600">Increases intra-abdominal pressure and can cause liver disease leading to fluid buildup.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prevention Checklist -->
    <section class="mb-16">
        <div class="bg-gradient-to-r from-brand-50 to-cyan-50 rounded-2xl p-8 border border-brand-100">
            <h3 class="text-2xl font-bold text-slate-800 mb-6 text-center">Hernia Prevention Checklist</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                    <svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700">Use proper lifting technique</span>
                </div>
                <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                    <svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700">Maintain healthy weight</span>
                </div>
                <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                    <svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700">Exercise core muscles</span>
                </div>
                <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                    <svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700">Eat high-fiber diet</span>
                </div>
                <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                    <svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700">Treat chronic cough</span>
                </div>
                <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                    <svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700">Quit smoking</span>
                </div>
                <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                    <svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700">Stay physically active</span>
                </div>
                <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                    <svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700">Avoid heavy lifting if possible</span>
                </div>
                <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                    <svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700">Know family history</span>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- CTA Section -->
<section class="bg-gradient-to-r from-brand-700 to-brand-800 text-white py-16">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Concerned About Your Hernia Risk?</h2>
        <p class="text-brand-100 text-lg mb-8">Dr. Kumar can assess your risk factors and recommend preventive measures or treatment options.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:+917904217129" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-500 text-white font-semibold px-8 py-4 rounded-xl transition shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Call: +91 79042 17129
            </a>
            <a href="diagnosis.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-semibold px-8 py-4 rounded-xl transition border border-white/30">
                Learn About Diagnosis
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
        <a href="symptoms.php" class="flex items-center gap-3 p-4 bg-white rounded-xl border border-slate-200 hover:border-brand-300 transition">
            <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>
            <span class="font-medium text-slate-800">Symptoms</span>
        </a>
        <a href="diagnosis.php" class="flex items-center gap-3 p-4 bg-white rounded-xl border border-slate-200 hover:border-brand-300 transition">
            <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
            </div>
            <span class="font-medium text-slate-800">Diagnosis</span>
        </a>
        <a href="complications.php" class="flex items-center gap-3 p-4 bg-white rounded-xl border border-slate-200 hover:border-brand-300 transition">
            <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <span class="font-medium text-slate-800">Complications</span>
        </a>
    </div>
</section>

<!-- Floating Call Button -->
<a href="tel:+917904217129" class="fixed bottom-6 right-6 z-50 bg-brand-700 hover:bg-brand-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
</a>

<?php require __DIR__ . '/../includes/footer.php'; ?>