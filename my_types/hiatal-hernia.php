<?php
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden py-20 md:py-28">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=1920&q=80" alt="Medical consultation" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-950 via-brand-950/90 to-brand-950/70"></div>
    </div>
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

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="bg-white rounded-3xl shadow-2xl p-8 border border-slate-100">
                <h3 class="font-bold text-xl text-slate-900 mb-6">How They Are Connected</h3>
                <p class="text-slate-600 leading-relaxed mb-6 text-lg">
                    The diaphragm has a natural opening called the hiatus where the esophagus passes through to connect with the stomach. When part of the stomach bulges through this opening, it is called a hiatal hernia.
                </p>
                <p class="text-slate-600 leading-relaxed mb-6 text-base">
                    This hernia disrupts the normal barrier mechanism that prevents stomach acid from flowing back into the esophagus, leading to chronic GERD symptoms.
                </p>
                <div class="p-4 bg-brand-100 rounded-xl border border-brand-200">
                    <p class="text-sm text-brand-800">
                        <strong>Important:</strong> Over 90% of patients with GERD have some degree of hiatal hernia. Treating the hernia can significantly improve reflux symptoms.
                    </p>
                </div>
            </div>
            <div class="space-y-6">
                <div class="flex items-start gap-4 p-6 bg-white rounded-2xl shadow-sm border border-slate-100">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24 (M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 mb-2">Sliding Hiatal Hernia</h4>
                        <p class="text-slate-600 text-sm">Most common type where the stomach slides up and down through the hiatus. Usually causes reflux symptoms.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 bg-white rounded-2xl shadow-sm border border-slate-100">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 mb-2">Paraesophageal Hernia</h4>
                        <p class="text-slate-600 text-sm">Part of the stomach pushes alongside the esophagus. More concerning as it can lead to strangulation.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 bg-white rounded-2xl shadow-sm border border-slate-100">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 mb-2">Mixed Hernia</h4>
                        <p class="text-slate-600 text-sm">Combines features of both sliding and paraesophageal types, carrying risks of both conditions.</p>
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
                Symptoms
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Recognizing a <span class="text-brand-700">Hiatal Hernia</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Acid Reflux / Heartburn</h3>
                <p class="text-slate-600 text-sm">Burning sensation in the chest, especially after meals or when lying down. The most common symptom.</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Chest Pain</h3>
                <p class="text-slate-600 text-sm">Often mistaken for cardiac pain. Can be severe and accompanied by difficulty swallowing.</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Difficulty Swallowing</h3>
                <p class="text-slate-600 text-sm">Feeling of food stuck in the chest or throat. May indicate significant hernia size.</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24\"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Bloating & Gas</h3>
                <p class="text-slate-600 text-sm">Excessive burping and feeling of fullness even after small meals.</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Regurgitation</h3>
                <p class="text-slate-600 text-sm">Sour or bitter-tasting acid coming back up into the mouth, especially at night.</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Hoarseness</h3>
                <p class="text-slate-600 text-sm">Chronic throat irritation and voice changes from acid affecting the vocal cords.</p>
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
                Treatment
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold mb-4">
                Laparoscopic <span class="text-accent">Fundoplication</span>
            </h2>
            <p class="text-slate-300 text-lg">The gold standard surgical treatment for hiatal hernia and chronic GERD.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-8">
                <h3 class="font-bold text-xl mb-6">What is Fundoplication?</h3>
                <p class="text-slate-300 leading-relaxed mb-4 text-lg">
                    Fundoplication is a surgical procedure where the upper curve of the stomach (the fundus) is wrapped around the lower esophagus to reinforce the valve between the esophagus and stomach.
                </p>
                <p class="text-slate-300 leading-relaxed mb-6 text-base">
                    When performed laparoscopically, it offers all the benefits of minimally invasive surgery with excellent long-term outcomes.
                </p>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-accent/20 text-accent rounded-full text-sm font-medium">Gold Standard</span>
                    <span class="px-4 py-2 bg-brand-500/20 text-brand-300 rounded-full text-sm font-medium">Minimally Invasive</span>
                </div>
            </div>
            <div class="space-y-4">
                <div class="bg-white/5 backdrop-blur border border-white/10 rounded-xl p-6">
                    <h4 class="font-bold text-lg mb-3">Nissen Fundoplication</h4>
                    <p class="text-slate-400 text-sm">Full 360-degree wrap around the esophagus. Most common and effective for severe reflux.</p>
                </div>
                <div class="bg-white/5 backdrop-blur border border-white/10 rounded-xl p-6">
                    <h4 class="font-bold text-lg mb-3">Toupet Fundoplication</h4>
                    <p class="text-slate-400 text-sm">Partial 270-degree wrap. Often preferred for patients with weak esophageal motility.</p>
                </div>
                <div class="bg-white/5 backdrop-blur border border-white/10 rounded-xl p-6">
                    <h4 class="font-bold text-lg mb-3">Hiatal Hernia Repair</h4>
                    <p class="text-slate-400 text-sm">Performed simultaneously to return the stomach to its proper position and close the diaphragmatic opening.</p>
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
