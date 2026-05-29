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
            <span class="text-accent font-medium">Hiatal Hernia</span>
        </nav>

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Diaphragm Hernia
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                Hiatal <span class="text-accent">Hernia</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Occurs when part of the stomach pushes through the diaphragm into the chest cavity. Closely linked to GERD and chronic acid reflux conditions.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                    Book Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="#gerd" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- GERD Connection Section -->
<section id="gerd" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Understanding
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                The GERD <span class="text-brand-700">Connection</span>
            </h2>
            <p class="text-slate-600 text-lg">Understanding the relationship between hiatal hernia and gastroesophageal reflux disease.</p>
        </div>

        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7">
                <h3 class="font-bold text-2xl text-slate-900 mb-6 font-display">How They Are Connected</h3>
                <p class="text-slate-600 leading-relaxed mb-6 text-lg">
                    The diaphragm has a natural opening called the hiatus where the esophagus passes through to connect with the stomach. When part of the stomach bulges through this opening, it is called a hiatal hernia.
                </p>
                <p class="text-slate-600 leading-relaxed mb-6 text-base">
                    This hernia disrupts the normal barrier mechanism that prevents stomach acid from flowing back into the esophagus, leading to chronic GERD symptoms.
                </p>
                <div class="p-4 bg-brand-100 rounded-xl border border-brand-200 mb-8">
                    <p class="text-sm text-brand-800">
                        <strong>Important:</strong> Over 90% of patients with GERD have some degree of hiatal hernia. Treating the hernia can significantly improve reflux symptoms.
                    </p>
                </div>

                <div class="grid sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-4 p-5 bg-white rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition">
                        <div class="w-10 h-10 rounded-xl bg-brand-100 flex items-center justify-center shrink-0 text-brand-700">
                            <span class="font-bold text-sm">01</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1 text-sm">Sliding Hiatal Hernia</h4>
                            <p class="text-slate-600 text-xs leading-relaxed">Most common type where the stomach slides up and down through the hiatus. Usually causes reflux symptoms.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-white rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition">
                        <div class="w-10 h-10 rounded-xl bg-brand-100 flex items-center justify-center shrink-0 text-brand-700">
                            <span class="font-bold text-sm">02</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1 text-sm">Paraesophageal Hernia</h4>
                            <p class="text-slate-600 text-xs leading-relaxed">Part of the stomach pushes alongside the esophagus. More concerning as it can lead to strangulation.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-white rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition sm:col-span-2">
                        <div class="w-10 h-10 rounded-xl bg-brand-100 flex items-center justify-center shrink-0 text-brand-700">
                            <span class="font-bold text-sm">03</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1 text-sm">Mixed Hernia</h4>
                            <p class="text-slate-600 text-xs leading-relaxed">Combines features of both sliding and paraesophageal types, carrying risks of both conditions.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div class="rounded-3xl overflow-hidden bg-white shadow-xl border border-slate-100 p-4 aspect-[4/3]">
                    <img src="<?= $base_path ?>assets/images/gerd-new.png" alt="Hiatal Hernia reflux connection" class="w-full h-full object-cover rounded-2xl">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Symptoms Section -->
<section class="py-16 md:py-24 bg-gradient-to-b from-white via-slate-50 to-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Symptoms
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Recognizing a <span class="text-brand-700">Hiatal Hernia</span>
            </h2>
        </div>

        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            <div class="lg:col-span-5">
                <div class="rounded-3xl overflow-hidden aspect-[4/5] shadow-xl border border-slate-100 relative group">
                    <img src="<?= $base_path ?>assets/images/doctor.png" alt="Symptom Consultation" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                    <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur-md p-5 rounded-2xl border border-slate-100 shadow-xl z-10">
                        <span class="text-xs font-bold text-brand-700 uppercase tracking-wider block mb-1">Expert Clinical Diagnosis</span>
                        <span class="text-xs text-slate-500 block leading-relaxed">A professional physical examination is the essential first step to confirm any hernia diagnosis.</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-7">
                <div class="grid sm:grid-cols-2 gap-5">
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition duration-300">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h3 class="font-bold text-slate-900 mb-1.5 text-base">Acid Reflux / Heartburn</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Burning sensation in the chest, especially after meals or when lying down. The most common symptom.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition duration-300">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <h3 class="font-bold text-slate-900 mb-1.5 text-base">Chest Pain</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Often mistaken for cardiac pain. Can be severe and accompanied by difficulty swallowing.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition duration-300">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                        </div>
                        <h3 class="font-bold text-slate-900 mb-1.5 text-base">Difficulty Swallowing</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Feeling of food stuck in the chest or throat. May indicate significant hernia size.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition duration-300">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <h3 class="font-bold text-slate-900 mb-1.5 text-base">Bloating & Gas</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Excessive burping and feeling of fullness even after small meals.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition duration-300">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-slate-900 mb-1.5 text-base">Regurgitation</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Sour or bitter-tasting acid coming back up into the mouth, especially at night.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition duration-300">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-slate-900 mb-1.5 text-base">Hoarseness</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Chronic throat irritation and voice changes from acid affecting the vocal cords.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Treatment Section -->
<section class="py-16 md:py-24 bg-brand-950 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-1.5 rounded-full text-sm font-medium mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Treatment Options
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold mb-4">
                Laparoscopic <span class="text-accent">Fundoplication</span>
            </h2>
            <p class="text-slate-300 text-lg">The gold-standard surgical treatment for hiatal hernia and chronic GERD.</p>
        </div>

        <div class="grid sm:grid-cols-3 gap-6">
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition duration-300">
                <div class="w-12 h-12 rounded-xl bg-brand-500/20 flex items-center justify-center mb-5 text-accent font-bold">360°</div>
                <h4 class="font-bold text-xl mb-3 text-white">Nissen Fundoplication</h4>
                <p class="text-slate-400 text-sm leading-relaxed">Full 360-degree stomach wrap around the lower esophagus. The most common and effective technique for severe reflux control.</p>
            </div>
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition duration-300">
                <div class="w-12 h-12 rounded-xl bg-brand-500/20 flex items-center justify-center mb-5 text-accent font-bold">270°</div>
                <h4 class="font-bold text-xl mb-3 text-white">Toupet Fundoplication</h4>
                <p class="text-slate-400 text-sm leading-relaxed">Partial 270-degree wrap. Often preferred for patients who have weak esophageal motility to avoid postoperative swallowing issues.</p>
            </div>
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition duration-300">
                <div class="w-12 h-12 rounded-xl bg-brand-500/20 flex items-center justify-center mb-5 text-accent font-bold">HERNIA</div>
                <h4 class="font-bold text-xl mb-3 text-white">Hiatal Hernia Repair</h4>
                <p class="text-slate-400 text-sm leading-relaxed">Performed simultaneously to restore the stomach to its correct position below the diaphragm and close the hiatal opening.</p>
            </div>
        </div>

        <!-- Feature Showcase Banner -->
        <div class="mt-12 bg-gradient-to-br from-brand-900 to-slate-950 rounded-3xl p-8 lg:p-12 shadow-2xl relative overflow-hidden border border-white/10 text-white">
            <div class="absolute inset-0 opacity-5 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
            <div class="relative grid lg:grid-cols-12 gap-8 lg:gap-12 items-center z-10">
                <div class="lg:col-span-5">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] border border-white/10 shadow-2xl">
                        <img src="<?= $base_path ?>assets/images/laparoscopic-precision.png" alt="Laparoscopic precision" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="lg:col-span-7">
                    <span class="inline-flex items-center gap-1.5 bg-accent/20 border border-accent/30 text-accent px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                        Minimally Invasive Excellence
                    </span>
                    <h3 class="font-display text-2xl lg:text-3xl font-bold mb-4 text-white">
                        Advanced GERD Control & hiatal repair
                    </h3>
                    <p class="text-slate-300 text-sm leading-relaxed mb-6">
                        By wrapping the upper portion of the stomach (fundus) around the lower esophagus, a new functional valve is reconstructed. This prevents acid reflux while allowing normal swallowing. Under Dr. Kumar's precision, hiatal repair combined with laparoscopic fundoplication offers long-term relief from medication dependency.
                    </p>
                    <div class="grid grid-cols-2 gap-4 text-xs font-semibold text-slate-200">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                            <span>Permanent relief from GERD</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                            <span>Eliminate acid medication dependence</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                            <span>Cosmetic 5-port keyhole surgery</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                            <span>Typical 2-day recovery time</span>
                        </div>
                    </div>
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
            Book an appointment with Dr. Kumar today for a comprehensive evaluation and personalised treatment plan.
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
