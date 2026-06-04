<?php
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden py-20 md:py-28">
    <div class="relative max-w-7xl mx-auto px-4 z-10">
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full w-max border border-white/10">
            <a href="<?= $base_path ?>index.php" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <span class="text-slate-400">Hernia Types</span>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">Incisional Hernia</span>
        </nav>

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Post-Surgery Complication
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                Incisional <span class="text-accent">Hernia</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Occurs at the site of a previous surgical incision when tissue pushes through a weakened abdominal wall. Requires specialized abdominal wall reconstruction.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                    Book Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="#causes" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Causes Section -->
<section id="causes" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-100 px-3.5 py-1.5 rounded-full inline-block mb-4">Understanding</span>
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mt-3 mb-6">
                    What Causes Incisional Hernia?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5 text-lg">
                    An incisional hernia develops at the site of a previous surgical incision in the abdomen. The weakness occurs where the surgical cut healed, allowing abdominal contents to protrude.
                </p>
                <p class="text-slate-600 leading-relaxed mb-6 text-base">
                    Previous surgery is the primary cause. Any surgery that involves an incision in the abdominal wall can potentially lead to this condition, from appendectomy to C-section.
                </p>
                
                <div class="grid sm:grid-cols-2 gap-6 mb-8">
                    <div>
                        <h3 class="font-bold text-lg text-slate-900 mb-4">Common Trigger Surgeries:</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                    <svg class="w-3.5 h-3.5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                </div>
                                <span class="text-sm text-slate-700">Appendectomy</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                    <svg class="w-3.5 h-3.5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                </div>
                                <span class="text-sm text-slate-700">Gallbladder surgery</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                    <svg class="w-3.5 h-3.5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                </div>
                                <span class="text-sm text-slate-700">C-section or hysterectomy</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                    <svg class="w-3.5 h-3.5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                </div>
                                <span class="text-sm text-slate-700">Bowel or colon surgery</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <h3 class="font-bold text-xl text-slate-900 mb-4">Risk Factors</h3>
                <div class="grid sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3 p-4 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition">
                        <div class="w-8 h-8 rounded-lg bg-brand-50 text-brand-700 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-slate-900">Infection</h4>
                            <p class="text-xs text-slate-600">Previous wound infection increases risk significantly</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition">
                        <div class="w-8 h-8 rounded-lg bg-brand-50 text-brand-700 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-slate-900">Obesity</h4>
                            <p class="text-xs text-slate-600">Excess weight puts pressure on abdominal walls</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition">
                        <div class="w-8 h-8 rounded-lg bg-brand-50 text-brand-700 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-slate-900">Age & Healing</h4>
                            <p class="text-xs text-slate-600">Reduced healing capacity with age</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition">
                        <div class="w-8 h-8 rounded-lg bg-brand-50 text-brand-700 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-slate-900">Pregnancies</h4>
                            <p class="text-xs text-slate-600">Stretches abdominal muscles and incisions</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div class="rounded-3xl overflow-hidden bg-white shadow-xl border border-slate-100 p-4 aspect-[4/3]">
                    <img src="<?= $base_path ?>assets/images/incisional-new.png" alt="Incisional Hernia anatomy" class="w-full h-full object-cover rounded-2xl">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What to Expect Section -->
<section class="py-16 md:py-24 bg-brand-950 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-1.5 rounded-full text-sm font-medium mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Recovery
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold mb-4">
                What to <span class="text-accent">Expect</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6 text-center">
                <div class="text-4xl font-bold text-accent mb-2">1-2</div>
                <p class="text-slate-300 text-sm">Days Hospital Stay</p>
            </div>
            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6 text-center">
                <div class="text-4xl font-bold text-accent mb-2">4-6</div>
                <p class="text-slate-300 text-sm">Weeks Light Activity</p>
            </div>
            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6 text-center">
                <div class="text-4xl font-bold text-accent mb-2">6-8</div>
                <p class="text-slate-300 text-sm">Weeks Full Recovery</p>
            </div>
            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6 text-center">
                <div class="text-4xl font-bold text-accent mb-2"><5%</div>
                <p class="text-slate-300 text-sm">Recurrence Rate</p>
            </div>
        </div>

        <div class="mt-12 bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-8">
            <h3 class="font-bold text-xl mb-6">Recovery Tips</h3>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-300">Avoid heavy lifting for 6-8 weeks</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-300">Wear compression garment as recommended</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-300">Gradually increase activity levels</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-300">Follow a high-protein diet for healing</span>
                </div>
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

<!-- Surgical Approaches -->
<section class="py-16 md:py-24 bg-gradient-to-b from-slate-50 to-white">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Surgical Approaches
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                How Dr. Kumar Repairs <span class="text-brand-700">Incisional Hernia</span>
            </h2>
            <p class="text-slate-600 text-lg">
                Dr. Kumar specializes in advanced <strong>minimally invasive</strong> techniques.
                <strong>Laparoscopic</strong> and <strong>Robotic</strong> approaches are preferred for faster recovery, less pain, and tiny scars. <strong>Open</strong> repair is reserved for select cases.
            </p>
        </div>

        <!-- TIER 1+2: Two large primary cards -->
        <div class="grid md:grid-cols-2 gap-6 lg:gap-8 mb-8">

            <!-- CARD 1: Advanced Laparoscopic (PREFERRED) -->
            <div class="relative bg-gradient-to-br from-brand-600 via-brand-700 to-brand-800 text-white rounded-3xl p-8 lg:p-10 shadow-2xl shadow-brand-700/30 hover:-translate-y-1 transition duration-300">
                <div class="absolute -top-3 left-8 bg-accent text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full shadow-md">
                    ★ Preferred Approach
                </div>
                <div class="w-16 h-16 rounded-2xl bg-white/15 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-display text-2xl lg:text-3xl font-bold mb-3">Advanced Laparoscopic Incisional Hernia Repair</h3>
                <p class="text-brand-100 text-sm font-semibold uppercase tracking-wider mb-5">
                    Minimally Invasive · Keyhole Surgery
                </p>
                <p class="text-slate-100 text-sm leading-relaxed mb-6">
                    Advanced laparoscopic incisional hernia repair using <strong>IPOM</strong> (Intraperitoneal Onlay Mesh) and <strong>eTEP-TAR</strong> techniques through 3–4 tiny incisions. Reinforces the previous surgical scar with wide mesh overlap, restoring abdominal wall integrity with minimal trauma.
                </p>
                <ul class="space-y-2.5 text-sm text-slate-100">
                    <li class="flex gap-2"><span class="text-accent">✓</span> IPOM & eTEP-TAR techniques</li>
                    <li class="flex gap-2"><span class="text-accent">✓</span> Wide mesh overlap</li>
                    <li class="flex gap-2"><span class="text-accent">✓</span> Faster recovery</li>
                    <li class="flex gap-2"><span class="text-accent">✓</span> Low recurrence rate</li>
                </ul>
            </div>

            <!-- CARD 2: Advanced Robotic (PREFERRED) -->
            <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white rounded-3xl p-8 lg:p-10 shadow-2xl shadow-slate-900/40 hover:-translate-y-1 transition duration-300">
                <div class="absolute -top-3 left-8 bg-accent text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full shadow-md">
                    ★ Preferred Approach
                </div>
                <div class="w-16 h-16 rounded-2xl bg-white/15 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="font-display text-2xl lg:text-3xl font-bold mb-3">Advanced Robotic Incisional Hernia Repair</h3>
                <p class="text-slate-300 text-sm font-semibold uppercase tracking-wider mb-5">
                    Latest Technology · 3D Vision
                </p>
                <p class="text-slate-200 text-sm leading-relaxed mb-6">
                    State-of-the-art advanced robotic platform enables complex <strong>Abdominal Wall Reconstruction (AWR)</strong> with <strong>TAR (Transversus Abdominis Release)</strong> for the largest incisional hernias. Unmatched 3D visualization and wristed instruments let Dr. Kumar reconstruct the abdominal wall layer by layer through tiny incisions.
                </p>
                <ul class="space-y-2.5 text-sm text-slate-200">
                    <li class="flex gap-2"><span class="text-accent">✓</span> Robotic TAR / component separation</li>
                    <li class="flex gap-2"><span class="text-accent">✓</span> 3D HD vision of entire wall</li>
                    <li class="flex gap-2"><span class="text-accent">✓</span> Wristed instrument precision</li>
                    <li class="flex gap-2"><span class="text-accent">✓</span> Best for giant incisional hernias</li>
                </ul>
            </div>
        </div>

        <!-- TIER 3: Open (de-emphasized) -->
        <div class="max-w-3xl mx-auto bg-slate-50 rounded-2xl p-6 border border-slate-200 mb-12">
            <div class="flex flex-col md:flex-row md:items-start gap-4">
                <div class="shrink-0">
                    <span class="inline-block bg-slate-300 text-slate-700 text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">
                        When Needed
                    </span>
                </div>
                <div>
                    <h3 class="font-bold text-lg text-slate-900 mb-1">Open Incisional Hernia Repair</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Time-tested open technique (mesh repair) reserved for select cases — large, infected, contaminated, or emergency hernias, and patients unsuitable for keyhole surgery.
                    </p>
                </div>
            </div>
        </div>

        <!-- SPECIALTY HIGHLIGHTS ROW -->
        <div class="border-t border-slate-200 pt-10">
            <p class="text-center text-xs font-bold uppercase tracking-widest text-slate-500 mb-6">Dr. Kumar's Specialty Focus</p>
            <div class="flex flex-wrap items-center justify-center gap-3 lg:gap-4">
                <a href="<?= $base_path ?>treatment/etep-repair.php" class="group flex items-center gap-3 bg-white hover:bg-accent border-2 border-accent/30 hover:border-accent rounded-2xl px-5 py-3 shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="w-10 h-10 rounded-xl bg-accent/15 group-hover:bg-white/20 flex items-center justify-center text-accent group-hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div>
                        <p class="font-bold text-sm text-slate-900 group-hover:text-white transition">eTEP Repair</p>
                        <p class="text-xs text-slate-500 group-hover:text-white/80 transition">Extended-view TEP — most advanced lap technique</p>
                    </div>
                </a>
                <a href="<?= $base_path ?>treatment/etep-repair.php" class="group flex items-center gap-3 bg-white hover:bg-accent border-2 border-accent/30 hover:border-accent rounded-2xl px-5 py-3 shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="w-10 h-10 rounded-xl bg-accent/15 group-hover:bg-white/20 flex items-center justify-center text-accent group-hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div>
                        <p class="font-bold text-sm text-slate-900 group-hover:text-white transition">AWR / TAR</p>
                        <p class="text-xs text-slate-500 group-hover:text-white/80 transition">Abdominal wall reconstruction with TAR/component separation</p>
                    </div>
                </a>
                <a href="<?= $base_path ?>special-considerations/complex-hernia-info.php" class="group flex items-center gap-3 bg-white hover:bg-accent border-2 border-accent/30 hover:border-accent rounded-2xl px-5 py-3 shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="w-10 h-10 rounded-xl bg-accent/15 group-hover:bg-white/20 flex items-center justify-center text-accent group-hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div>
                        <p class="font-bold text-sm text-slate-900 group-hover:text-white transition">Complex Hernia</p>
                        <p class="text-xs text-slate-500 group-hover:text-white/80 transition">Large, multi-recurrent, contaminated defects</p>
                    </div>
                </a>
                <a href="<?= $base_path ?>my_types/recurrent-hernia.php" class="group flex items-center gap-3 bg-white hover:bg-accent border-2 border-accent/30 hover:border-accent rounded-2xl px-5 py-3 shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="w-10 h-10 rounded-xl bg-accent/15 group-hover:bg-white/20 flex items-center justify-center text-accent group-hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div>
                        <p class="font-bold text-sm text-slate-900 group-hover:text-white transition">Recurrent Hernia</p>
                        <p class="text-xs text-slate-500 group-hover:text-white/80 transition">After previous repair — different anatomical plane</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>