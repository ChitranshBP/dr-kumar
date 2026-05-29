<?php
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden py-20 md:py-28">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1504439468489-c8920d796a29?w=1920&q=80" alt="Medical consultation" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-950 via-brand-950/90 to-brand-950/70"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 z-10">
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full w-max border border-white/10">
            <a href="<?= $base_path ?>index.php" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <span class="text-slate-400">Hernia Types</span>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">Ventral Hernia</span>
        </nav>

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Anterior Abdominal Wall
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                Ventral <span class="text-accent">Hernia</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Occurs along the front midline of the abdomen when tissue pushes through a weak spot in the abdominal wall. Dr. Kumar offers expert minimally invasive repair.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                    Book Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="#location" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Location Section -->
<section id="location" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-100 px-3.5 py-1.5 rounded-full inline-block mb-4">Understanding</span>
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mt-3 mb-6">
                    Where Does It Occur?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5 text-lg">
                    A ventral hernia develops along the midline of the abdomen, specifically in the area from the breastbone (xiphoid process) to the belly button (umbilicus).
                </p>
                <p class="text-slate-600 leading-relaxed mb-6 text-base">
                    Unlike inguinal hernias that occur in the groin, ventral hernias appear in the front central part of the abdominal wall, often called the linea alba.
                </p>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-brand-100 text-brand-800 rounded-full text-sm font-medium">Midline Location</span>
                    <span class="px-4 py-2 bg-brand-100 text-brand-800 rounded-full text-sm font-medium">No Groin Involvement</span>
                    <span class="px-4 py-2 bg-brand-100 text-brand-800 rounded-full text-sm font-medium">Often Congenital</span>
                </div>
            </div>
            <div class="bg-white rounded-3xl shadow-2xl p-8 border border-slate-100">
                <h3 class="font-bold text-xl text-slate-900 mb-6">Ventral vs Incisional Hernia</h3>
                <div class="space-y-6">
                    <div class="p-4 bg-brand-50 rounded-xl">
                        <h4 class="font-semibold text-brand-800 mb-2">Primary Ventral Hernia</h4>
                        <p class="text-slate-600 text-sm">Occurs at natural weak points without any previous surgery. Can be present from birth (congenital) or develop over time.</p>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl">
                        <h4 class="font-semibold text-slate-700 mb-2">Incisional Hernia</h4>
                        <p class="text-slate-600 text-sm">A type of ventral hernia that occurs at the site of a previous surgical incision. Falls under the ventral hernia category.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Symptoms Section -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Recognition
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Signs & <span class="text-brand-700">Symptoms</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Visible Bulge</h3>
                <p class="text-slate-600 text-sm">A bulge along the midline of the abdomen that may become more noticeable when standing</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Pain or Discomfort</h3>
                <p class="text-slate-600 text-sm">Aching or burning sensation at the hernia site, often worsening with activity</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Reducible</h3>
                <p class="text-slate-600 text-sm">The bulge can often be pushed back in when lying down</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Progressive Growth</h3>
                <p class="text-slate-600 text-sm">Hernia may gradually increase in size over time if left untreated</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Heavy Sensation</h3>
                <p class="text-slate-600 text-sm">Feeling of heaviness or dragging in the abdomen</p>
            </div>

            <div class="bg-brand-100 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Emergency Signs</h3>
                <p class="text-slate-600 text-sm">Severe pain, vomiting, or skin changes - seek immediate medical attention</p>
            </div>
        </div>
    </div>
</section>

<!-- Treatment Section -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Treatment
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Treatment <span class="text-brand-700">Options</span>
            </h2>
            <p class="text-slate-600 text-lg">Dr. Kumar offers both laparoscopic and open surgical approaches tailored to your specific condition.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-2xl p-8 border border-brand-100">
                <div class="w-16 h-16 rounded-2xl bg-brand-700 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                </div>
                <h3 class="font-bold text-2xl text-slate-900 mb-4">Laparoscopic Repair</h3>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Minimally invasive approach using small incisions and a camera to guide surgical repair. Offers less pain, faster recovery, and better cosmetic outcomes.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Smaller incisions, minimal scarring
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Faster return to daily activities
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Less post-operative pain
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Reduced infection risk
                    </li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-slate-100 rounded-2xl p-8 border border-slate-200">
                <div class="w-16 h-16 rounded-2xl bg-brand-800 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="font-bold text-2xl text-slate-900 mb-4">Open Surgical Repair</h3>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Traditional approach with a single larger incision. Recommended for very large hernias or patients with specific medical conditions.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-brand-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Better for giant hernias
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-brand-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Direct visualization
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-brand-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Allows complex reconstruction
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-brand-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        May be combined with mesh
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Prevention Section -->
<section class="py-16 md:py-24 bg-brand-950 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-1.5 rounded-full text-sm font-medium mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Prevention
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold mb-4">
                Tips to <span class="text-accent">Prevent</span> Ventral Hernia
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-brand-700/50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Maintain Healthy Weight</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Excess abdominal fat increases pressure on the abdominal wall, weakening tissues over time.</p>
            </div>

            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-brand-700/50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Proper Lifting Technique</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Bend at the knees, not the waist, when lifting heavy objects to reduce strain on your abdomen.</p>
            </div>

            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-brand-700/50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Core Strengthening</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Regular exercises that strengthen abdominal muscles help support the anterior abdominal wall.</p>
            </div>

            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-brand-700/50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Treat Chronic Cough</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Persistent coughing increases abdominal pressure. Seek treatment for chronic respiratory conditions.</p>
            </div>

            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-brand-700/50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">High-Fiber Diet</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Prevents constipation and straining during bowel movements, reducing abdominal pressure.</p>
            </div>

            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-brand-700/50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Quit Smoking</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Smoking weakens connective tissues and impairs wound healing, increasing hernia risk.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-brand-950 text-white text-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <span class="text-accent text-xs font-bold uppercase tracking-wider bg-white/10 px-4 py-1.5 rounded-full mb-4 inline-block border border-white/10">Personalized Consultations</span>
        <h2 class="font-display text-3xl md:text-5xl font-bold mb-6">
            Ready to Discuss Your Treatment?
        </h2>
        <p class="text-lg text-slate-300 leading-relaxed mb-8 max-w-2xl mx-auto">
            Book an appointment with Dr. Kumar today for a comprehensive evaluation of your condition.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition shadow-lg shadow-accent/25 hover:scale-105">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Book Appointment
            </a>
        </div>
    </div>
</section>

<!-- Floating Call Button -->
<a href="tel:<?= $site['phone_link'] ?>" class="fixed bottom-6 right-6 z-50 group" aria-label="Call Dr. Kumar">
    <div class="relative flex items-center">
        <div class="absolute right-full mr-3 bg-white rounded-xl shadow-2xl p-4 whitespace-nowrap opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-x-2 group-hover:translate-x-0 border border-slate-100">
            <p class="font-bold text-slate-900"><?= $site['phone'] ?></p>
            <p class="text-sm text-slate-500">Tap to call</p>
        </div>
        <div class="w-14 h-14 bg-gradient-to-r from-brand-600 to-brand-700 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
            <svg class="w-6 h-6 text-white animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
        </div>
    </div>
</a>

<?php require __DIR__ . '/../includes/footer.php'; ?>