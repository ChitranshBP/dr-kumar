<?php
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden py-20 md:py-28">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1631815588090-d4bf27d1b03b?w=1920&q=80" alt="Medical consultation" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-950 via-brand-950/90 to-brand-950/70"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 z-10">
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full w-max border border-white/10">
            <a href="<?= $base_path ?>index.php" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <span class="text-slate-400">Hernia Types</span>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">Inguinal Hernia</span>
        </nav>

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Most Common Hernia Type
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                Inguinal <span class="text-accent">Hernia</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                The most common type of hernia, occurring in the groin area. Dr. Kumar specializes in advanced minimally invasive repair techniques for optimal outcomes.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                    Book Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="#types" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- What is Inguinal Hernia -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-100 px-3.5 py-1.5 rounded-full inline-block mb-4">Understanding</span>
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mb-6 leading-tight">
                    What is an Inguinal Hernia?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5 text-lg">
                    An inguinal hernia occurs when tissue, such as part of the intestine, pushes through a weak spot in the abdominal muscles near the groin. It appears as a bulge in the groin or scrotum and is more common in men.
                </p>
                <p class="text-slate-600 leading-relaxed mb-8 text-base">
                    Dr. Kumar offers the full spectrum of inguinal hernia repair techniques, from traditional open surgery to advanced laparoscopic approaches including eTEP, TEP, and TAPP procedures.
                </p>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-brand-100 text-brand-800 rounded-full text-sm font-medium">eTEP Repair</span>
                    <span class="px-4 py-2 bg-brand-100 text-brand-800 rounded-full text-sm font-medium">TEP Repair</span>
                    <span class="px-4 py-2 bg-brand-100 text-brand-800 rounded-full text-sm font-medium">TAPP Repair</span>
                    <span class="px-4 py-2 bg-brand-100 text-brand-800 rounded-full text-sm font-medium">Open Repair</span>
                </div>
            </div>
            <div class="relative">
                <div class="bg-white rounded-3xl shadow-2xl p-8 border border-slate-100">
                    <h3 class="font-bold text-xl text-slate-900 mb-6">Types of Inguinal Hernia</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 bg-brand-50 rounded-xl">
                            <div class="w-10 h-10 rounded-lg bg-brand-700 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900">Indirect Inguinal Hernia</h4>
                                <p class="text-sm text-slate-600">Passes through the internal inguinal ring, following the path the testicles took during development</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-xl">
                            <div class="w-10 h-10 rounded-lg bg-brand-700 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900">Direct Inguinal Hernia</h4>
                                <p class="text-sm text-slate-600">Pushes directly through the back wall of the inguinal canal, more common in older men</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-xl">
                            <div class="w-10 h-10 rounded-lg bg-brand-700 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900">Bilateral Inguinal Hernia</h4>
                                <p class="text-sm text-slate-600">When hernias occur on both sides of the groin simultaneously</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Symptoms Section -->
<section id="types" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Recognition
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Signs & Symptoms
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Visible Bulge</h3>
                <p class="text-slate-600 text-sm">A bulge in the groin area that may become more noticeable when standing or straining</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Pain or Discomfort</h3>
                <p class="text-slate-600 text-sm">Aching sensation in the groin, especially when bending, lifting, or coughing</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Heavy Feeling</h3>
                <p class="text-slate-600 text-sm">Feeling of heaviness or dragging in the groin area</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Swelling</h3>
                <p class="text-slate-600 text-sm">Swelling around the testicles in men</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Reducible</h3>
                <p class="text-slate-600 text-sm">Bulge may disappear when lying down and can be pushed back in</p>
            </div>

            <div class="bg-brand-100 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Emergency Signs</h3>
                <p class="text-slate-600 text-sm">Severe pain, nausea, vomiting - seek immediate medical attention</p>
            </div>
        </div>
    </div>
</section>

<!-- Treatment Options -->
<section class="py-16 md:py-24 bg-brand-950 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-1.5 rounded-full text-sm font-medium mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Treatment Options
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold mb-4">
                Advanced Repair <span class="text-accent">Techniques</span>
            </h2>
            <p class="text-slate-300 text-lg">Dr. Kumar specializes in multiple approaches to ensure the best outcome for your specific condition.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition">
                <div class="w-14 h-14 rounded-xl bg-brand-500/20 flex items-center justify-center mb-5">
                    <span class="text-xl font-bold text-accent">eTEP</span>
                </div>
                <h3 class="font-bold text-xl mb-3">eTEP RS</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Extended view Totally Extraperitoneal repair. The most advanced technique for excellent outcomes with minimal recovery.
                </p>
            </div>

            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition">
                <div class="w-14 h-14 rounded-xl bg-brand-500/20 flex items-center justify-center mb-5">
                    <span class="text-xl font-bold text-accent">TEP</span>
                </div>
                <h3 class="font-bold text-xl mb-3">TEP Repair</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Totally Extraperitoneal repair. Pre-peritoneal approach keeping the abdominal cavity unopened.
                </p>
            </div>

            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition">
                <div class="w-14 h-14 rounded-xl bg-brand-500/20 flex items-center justify-center mb-5">
                    <span class="text-xl font-bold text-accent">TAPP</span>
                </div>
                <h3 class="font-bold text-xl mb-3">TAPP Repair</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Transabdominal Preperitoneal repair. Provides excellent visualization of the entire abdominal wall.
                </p>
            </div>

            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition">
                <div class="w-14 h-14 rounded-xl bg-brand-500/20 flex items-center justify-center mb-5">
                    <span class="text-xl font-bold text-accent">OPEN</span>
                </div>
                <h3 class="font-bold text-xl mb-3">Open Repair</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Traditional open Lichtenstein repair with mesh reinforcement for those not suitable for laparoscopic surgery.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-100 px-3.5 py-1.5 rounded-full inline-block mb-4">Why Dr. Kumar</span>
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mt-3 mb-6">
                    Expert Care for Inguinal Hernia
                </h2>
                <p class="text-slate-600 leading-relaxed mb-8 text-lg">
                    With over 29 years of experience and thousands of successful inguinal hernia repairs, Dr. Kumar offers unparalleled expertise in both open and minimally invasive techniques.
                </p>
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">10,000+ Surgeries</h4>
                            <p class="text-slate-600 text-sm">Extensive experience in inguinal hernia repair</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">All Techniques Available</h4>
                            <p class="text-slate-600 text-sm">eTEP, TEP, TAPP, and open repair</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Daycare Options</h4>
                            <p class="text-slate-600 text-sm">Most patients discharged same day</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-3xl p-8 lg:p-10">
                <div class="text-center mb-8">
                    <h3 class="font-display text-2xl font-bold text-slate-900 mb-2">Quick Facts</h3>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                        <p class="text-3xl font-bold text-brand-700">30-60</p>
                        <p class="text-sm text-slate-500">Minutes Surgery Time</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                        <p class="text-3xl font-bold text-brand-700">1-2</p>
                        <p class="text-sm text-slate-500">Days Recovery</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                        <p class="text-3xl font-bold text-brand-700">99%</p>
                        <p class="text-sm text-slate-500">Success Rate</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                        <p class="text-3xl font-bold text-brand-700"><1%</p>
                        <p class="text-sm text-slate-500">Recurrence</p>
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
            Book an appointment with Dr. Kumar today for a comprehensive evaluation of your condition.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition shadow-lg shadow-accent/25 hover:scale-105">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Book Appointment
            </a>
            <a href="<?= $base_path ?>my_types/inguinal-hernia.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition hover:scale-105">
                Learn More
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
