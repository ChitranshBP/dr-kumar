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
            <span class="text-accent font-medium">Femoral Hernia</span>
        </nav>

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Below the Groin
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                Femoral <span class="text-accent">Hernia</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Occurs in the femoral canal, located just below the groin crease. More common in women and requires prompt surgical attention due to higher strangulation risk.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                    Book Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="#anatomy" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- What is a Femoral Hernia -->
<section id="anatomy" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-100 px-3.5 py-1.5 rounded-full inline-block mb-4">Understanding</span>
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mb-6 leading-tight">
                    What is a Femoral Hernia?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5 text-lg">
                    A femoral hernia develops when tissue, usually part of the intestine, pushes through the femoral canal. This canal contains important structures like the femoral vein, artery, and nerve.
                </p>
                <p class="text-slate-600 leading-relaxed mb-6 text-base">
                    Located just below the groin ligament, femoral hernias appear as a bulge in the upper inner thigh. They are more common in women due to the wider female pelvis and changes during childbirth.
                </p>
                
                <!-- Danger Warning Card -->
                <div class="p-5 bg-rose-50 rounded-2xl border border-rose-100 shadow-sm mb-8">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-rose-500 flex items-center justify-center shrink-0 text-white shadow-md shadow-rose-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <div>
                            <p class="text-base text-rose-950 font-bold mb-1">Higher Strangulation Risk</p>
                            <p class="text-sm text-rose-800 leading-relaxed font-medium">Femoral hernias have a significantly higher risk of strangulation (up to 40%) compared to other hernias, making early surgical repair important.</p>
                        </div>
                    </div>
                </div>

                <div class="border-t border-slate-200/80 pt-8">
                    <h3 class="font-bold text-xl text-slate-900 mb-6">Why More Common in Women</h3>
                    <div class="grid sm:grid-cols-3 gap-5">
                        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition duration-300">
                            <div class="w-10 h-10 rounded-xl bg-brand-50 flex items-center justify-center text-brand-600 mb-4 border border-brand-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 text-sm mb-2">Wider Pelvis</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">The anatomical differences in the female pelvis create a larger femoral canal opening.</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition duration-300">
                            <div class="w-10 h-10 rounded-xl bg-brand-50 flex items-center justify-center text-brand-600 mb-4 border border-brand-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 0 0-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 text-sm mb-2">Pregnancy</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">Increased abdominal pressure during pregnancy and straining during delivery.</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition duration-300">
                            <div class="w-10 h-10 rounded-xl bg-brand-50 flex items-center justify-center text-brand-600 mb-4 border border-brand-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 text-sm mb-2">Age Factor</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">More common in older women due to progressive weakening of connective tissues.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-5">
                <div class="rounded-3xl overflow-hidden bg-white shadow-xl border border-slate-100 p-4 aspect-[4/3]">
                    <img src="<?= $base_path ?>assets/images/paraumbilical-new.png" alt="Femoral Hernia anatomy" class="w-full h-full object-cover rounded-2xl">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Surgical Options -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Surgical Options
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Treatment <span class="text-brand-700">Approaches</span>
            </h2>
            <p class="text-slate-600 text-lg">Dr. Kumar offers both open and laparoscopic surgical repair options tailored to each patient.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-3xl p-8 lg:p-10 border border-brand-100 hover:shadow-xl transition duration-300">
                <div class="w-16 h-16 rounded-2xl bg-brand-700 flex items-center justify-center mb-6 shadow-md shadow-brand-100">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="font-bold text-2xl text-slate-900 mb-4">Laparoscopic Repair</h3>
                <p class="text-slate-600 leading-relaxed mb-6 text-base font-medium">
                    Minimally Invasive approach using small incisions. Allows excellent visualization of the femoral canal and surrounding structures. Preferred for bilateral hernias or recurrence.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Smaller incisions, less scarring
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Faster recovery time
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Less post-operative pain
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Can repair both sides simultaneously
                    </li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-slate-100 rounded-3xl p-8 lg:p-10 border border-slate-200 hover:shadow-xl transition duration-300">
                <div class="w-16 h-16 rounded-2xl bg-brand-800 flex items-center justify-center mb-6 shadow-md shadow-slate-100">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                </div>
                <h3 class="font-bold text-2xl text-slate-900 mb-4">Open Surgical Repair</h3>
                <p class="text-slate-600 leading-relaxed mb-6 text-base font-medium">
                    Traditional approach with a single incision over the hernia site. Often preferred for emergency cases or very large femoral hernias.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Direct visualization of anatomy
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Ideal for emergency cases
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Mesh reinforcement included
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        High success rate
                    </li>
                </ul>
            </div>
        </div>

        <!-- Premium Showcase Banner -->
        <div class="mt-16 bg-gradient-to-br from-brand-900 to-slate-950 rounded-3xl p-8 lg:p-12 shadow-2xl relative overflow-hidden border border-white/10 text-white">
            <div class="absolute inset-0 opacity-5 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
            <div class="relative grid lg:grid-cols-12 gap-8 lg:gap-12 items-center z-10">
                <div class="lg:col-span-5">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] border border-white/10 shadow-2xl">
                        <img src="<?= $base_path ?>assets/images/tep-room.png" alt="Laparoscopic setup" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="lg:col-span-7">
                    <span class="inline-flex items-center gap-1.5 bg-accent/20 border border-accent/30 text-accent px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                        Laparoscopic Surgical Focus
                    </span>
                    <h3 class="font-display text-2xl lg:text-3xl font-bold mb-4 text-white">
                        Laparoscopic Repair of Femoral Hernias
                    </h3>
                    <p class="text-slate-300 text-sm leading-relaxed mb-6">
                        Choosing a laparoscopic approach for femoral hernia repair allows excellent visualization of the femoral canal and surrounding structures from the pre-peritoneal space. It avoids large incisions in the sensitive groin crease, reducing chronic pain risk and allowing for a rapid, comfortable recovery.
                    </p>
                    <div class="grid grid-cols-2 gap-4 text-xs font-semibold text-slate-200">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                            <span>Extrabdominal mesh placement</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                            <span>Faster back-to-work timeline</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recovery Section -->
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

        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6 text-center">
                <div class="text-4xl font-bold text-accent mb-2">1</div>
                <p class="text-slate-300 text-sm">Day Hospital Stay</p>
            </div>
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6 text-center">
                <div class="text-4xl font-bold text-accent mb-2">2-3</div>
                <p class="text-slate-300 text-sm">Days Light Activity</p>
            </div>
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6 text-center">
                <div class="text-4xl font-bold text-accent mb-2">4-6</div>
                <p class="text-slate-300 text-sm">Weeks Full Recovery</p>
            </div>
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6 text-center">
                <div class="text-4xl font-bold text-accent mb-2">>95%</div>
                <p class="text-slate-300 text-sm">Success Rate</p>
            </div>
        </div>

        <div class="mt-12 bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-8">
            <h3 class="font-bold text-xl mb-6">Post-Surgery Guidelines</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-300 text-sm">Avoid heavy lifting for 4-6 weeks</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-300 text-sm">Gradual return to normal activities</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-300 text-sm">Watch for signs of infection</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-300 text-sm">Keep incision clean and dry</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-300 text-sm">Follow-up as scheduled</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5 293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-300 text-sm">Report any unusual symptoms</span>
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

<?php require __DIR__ . '/../includes/footer.php'; ?>
