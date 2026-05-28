<?php
require __DIR__ . '/includes/layout.php';
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
                Upper Abdomen
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                Epigastric <span class="text-accent">Hernia</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Occurs in the epigastric region between the belly button and breastbone when tissue pushes through the linea alba muscles in the upper abdomen.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    Book Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="#about" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-6 py-3 rounded-full border border-white/30 transition">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-8 md:py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class bg-gradient-to-br from-brand-50 to-cyan-50 rounded-3xl p-8 lg:p-12 border border-brand-100">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Understanding</span>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                        What is an Epigastric Hernia?
                    </h2>
                    <p class="text-slate-600 leading-relaxed mb-5">
                        An epigastric hernia develops along the linea alba, the fibrous band in the center of the abdomen, specifically in the area between the belly button (umbilicus) and the breastbone (xiphoid process).
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        The linea alba is formed by the joining of the abdominal muscle sheaths at the midline. Small defects can allow fat from inside the abdomen to protrude, creating a visible or palpable bulge.
                    </p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-lg text-slate-900 mb-4">Key Characteristics</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">Located between umbilicus and xiphoid</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">Often small and may not grow large</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">More common in men</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">Usually present at birth (congenital)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8m0 0l8-8m-8 8l-8-8m8 8l8 8" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">May appear with strain or exertion</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Symptoms
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Signs & <span class="text-brand-700">Symptoms</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Visible Bulge</h3>
                <p class="text-slate-600 text-sm">A small bulge or lump felt between the belly button and chest, especially when standing or straining.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Pain or Discomfort</h3>
                <p class="text-slate-600 text-sm">Aching pain in the upper abdomen that may worsen with activity, coughing, or lifting heavy objects.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Intermittent Bulge</h3>
                <p class="text-slate-600 text-sm">The bulge may come and go, appearing more prominent during physical activity and reducing when lying down.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Festival Fullness</h3>
                <p class="text-slate-600 text-sm">Feeling of fullness or heaviness in the upper abdomen, particularly after meals.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">No Symptoms</h3>
                <p class="text-slate-600 text-sm">Many small epigastric hernias are incidentally discovered and cause no symptoms at all.</p>
            </div>

            <div class="bg-red-50 rounded-2xl p-6 shadow-sm border border-red-100 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Emergency Signs</h3>
                <p class="text-slate-600 text-sm">Severe pain, nausea, vomiting - may indicate strangulation requiring immediate medical attention.</p>
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
                Treatment <span class="text-brand-700">Approach</span>
            </h2>
            <p class="text-slate-600 text-lg">Treatment recommendations depend on hernia size, symptoms, and patient factors.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-slate-50 rounded-2xl p-8 text-center border border-slate-100">
                <div class="w-20 h-20 rounded-full bg-amber-100 flex items-center justify-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-amber-700">1</span>
                </div>
                <h3 class="font-bold text-xl text-slate-900 mb-3">Watchful Waiting</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Small, asymptomatic hernias may simply be monitored. Surgery may not be needed if no symptoms develop.
                </p>
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-amber-50 text-amber-700 rounded-full text-sm font-medium">
                    For small, painless hernias
                </span>
            </div>

            <div class="bg-brand-50 rounded-2xl p-8 text-center border border-brand-100">
                <div class="w-20 h-20 rounded-full bg-brand-700 flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">2</span>
                </div>
                <h3 class="font-bold text-xl text-slate-900 mb-3">Open Repair</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Traditional surgical repair with a small incision over the hernia site. Suitable for most epigastric hernias.
                </p>
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-brand-100 text-brand-700 rounded-full text-sm font-medium">
                    Most common approach
                </span>
            </div>

            <div class="bg-slate-50 rounded-2xl p-8 text-center border border-slate-100">
                <div class="w-20 h-20 rounded-full bg-emerald-100 flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-emerald-700">3</span>
                </div>
                <h3 class="font-bold text-xl text-slate-900 mb-3">Laparoscopic Repair</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Minimally invasive option with small incisions and a camera-guided approach. Faster recovery and less scarring.
                </p>
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-emerald-50 text-emerald-700 rounded-full text-sm font-medium">
                    Faster recovery
                </span>
            </div>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-brand-950 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-1.5 rounded-full text-sm font-medium mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Why Surgery?
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold mb-4">
                When <span class="text-accent">Repair is Needed</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-8">
                <h3 class="font-bold text-xl mb-6">Reasons for Surgical Repair</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Symptomatic hernias causing pain or discomfort</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Larger hernias (generally over 2cm)</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4it="odd"/></svg>
                        <span class="text-slate-300">Increasing in size over time</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Risk of strangulation or obstruction</span>
                    </div>
                </div>
            </div>
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-8">
                <h3 class="font-bold text-xl mb-6">Surgical Approach</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-brand-400 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Small incision directly over the hernia</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-brand-400 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Mesh reinforcement for larger defects</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-brand-400 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Daycare procedure for most cases</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-brand-400 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Excellent success rates with low recurrence</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
