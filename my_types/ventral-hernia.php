<?php
require __DIR__ . '/../includes/layout.php';
?>

<section class="relative bg-brand-950 text-white overflow-hidden">
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
                Anterior Abdominal Wall
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                Ventral <span class="text-accent">Hernia</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Occurs along the front midline of the abdomen when tissue pushes through a weak spot in the abdominal wall. Dr. Kumar offers expert minimally invasive repair.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    Book Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="#location" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-6 py-3 rounded-full border border-white/30 transition">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<section id="location" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Understanding</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    Where Does It Occur?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    A ventral hernia develops along the midline of the abdomen, specifically in the area from the breastbone (xiphoid process) to the belly button (umbilicus).
                </p>
                <p class="text-slate-600 leading-relaxed mb-6">
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

<section class="py-16 md:py-24 bg-white">
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
                <div class="w-16 h-16 rounded-2xl bg-slate-700 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8. 003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="font-bold text-2xl text-slate-900 mb-4">Open Surgical Repair</h3>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Traditional approach with a single larger incision. Recommended for very large hernias or patients with specific medical conditions.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-slate-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Better for giant hernias
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-slate-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Direct visualization
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-slate-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Allows complex reconstruction
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-slate-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        May be combined with mesh
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

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
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Maintain Healthy Weight</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Excess abdominal fat increases pressure on the abdominal wall, weakening tissues over time.</p>
            </div>

            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Proper Lifting Technique</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Bend at the knees, not the waist, when lifting heavy objects to reduce strain on your abdomen.</p>
            </div>

            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Core strengthening</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Regular exercises that strengthen abdominal muscles help support the anterior abdominal wall.</p>
            </div>

            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Treat Chronic Cough</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Persistent coughing increases abdominal pressure. Seek treatment for chronic respiratory conditions.</p>
            </div>

            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">High-Fiber Diet</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Prevents constipation and straining during bowel movements, reducing abdominal pressure.</p>
            </div>

            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Quit Smoking</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Smoking weakens connective tissues and impairs wound healing, increasing hernia risk.</p>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/layout-footer.php'; ?>
