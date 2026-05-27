<?php
require __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-brand-900 via-brand-800 to-slate-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-15">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="hex" x="0" y="0" width="56" height="50" patternUnits="userSpaceOnUse">
                    <polygon points="28,2 54,17 54,49 28,64 2,49 2,17" fill="none" stroke="white" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#hex)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-24 lg:py-32">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Meet Your Surgeon
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                A Legacy of<br>
                <span class="text-accent">Surgical Excellence</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                For over 29 years, Dr. Kumar has been at the forefront of advanced hernia and laparoscopic surgery in Chennai, transforming thousands of lives with cutting-edge techniques and compassionate care.
            </p>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-slate-50 to-transparent"></div>
</section>

<!-- Doctor Profile Section -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <img src="assets/images/dr-kumar-main.jpg" alt="Dr. Kumar - Advanced Hernia & Laparoscopic Surgeon" class="w-full h-auto">
                </div>
                <div class="absolute -bottom-6 -right-6 bg-accent text-white rounded-2xl px-6 py-5 shadow-xl hidden md:block">
                    <p class="font-display text-3xl font-bold">29+</p>
                    <p class="text-sm">Years of Excellence</p>
                </div>
                <div class="absolute -top-4 -left-4 bg-brand-700 text-white rounded-2xl px-5 py-4 shadow-xl hidden md:block">
                    <p class="font-display text-2xl font-bold">10,000+</p>
                    <p class="text-xs">Hernia Surgeries</p>
                </div>
            </div>

            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">The Doctor</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    Pioneering Advanced<br>Hernia Surgery in Chennai
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    Dr. Kumar is a Senior Consultant in Minimal Access, Robotic, Advanced Hernia, and Abdominal Wall Reconstruction Surgery with an unparalleled track record of excellence spanning nearly three decades.
                </p>
                <p class="text-slate-600 leading-relaxed mb-5">
                    Trained at Stanley Medical College and holding the prestigious MRCS (Member of the Royal College of Surgeons of England), Dr. Kumar has dedicated his career to advancing the field of laparoscopic and minimally invasive surgery.
                </p>
                <p class="text-slate-600 leading-relaxed mb-8">
                    As a recognized expert in advanced techniques including eTEP (Extended View Totally Extraperitoneal), TAR (Transversus Abdominis Release), and robotic-assisted surgery, he has become the trusted choice for complex hernia cases across South India.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-6 py-3 rounded-full shadow transition">
                        Schedule Consultation
                    </a>
                    <a href="book-appointment.php" class="inline-flex items-center gap-2 bg-white hover:bg-slate-50 text-slate-800 font-semibold px-6 py-3 rounded-full border border-slate-200 transition">
                        Book Appointment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Credentials Grid -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Qualifications & Training
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-6 mb-4">
                World-Class <span class="text-brand-700">Medical Credentials</span>
            </h2>
            <p class="text-slate-600 text-lg">Rigorous training and international recognition ensure the highest standards of surgical care.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-2xl p-6 border border-brand-100 hover:shadow-lg transition">
                <div class="w-14 h-14 rounded-xl bg-brand-700 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">MBBS, MS Surgery</h3>
                <p class="text-sm text-slate-600">Graduate and postgraduate training at Stanley Medical College, Chennai - one of India's premier medical institutions.</p>
            </div>

            <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-6 border border-amber-100 hover:shadow-lg transition">
                <div class="w-14 h-14 rounded-xl bg-amber-500 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">MRCS England</h3>
                <p class="text-sm text-slate-600">Member of the Royal College of Surgeons of England - internationally recognized surgical qualification.</p>
            </div>

            <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-6 border border-emerald-100 hover:shadow-lg transition">
                <div class="w-14 h-14 rounded-xl bg-emerald-600 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">FALS Hernia & Robotic</h3>
                <p class="text-sm text-slate-600">Fellowship in Advanced Laparoscopic Surgery with specialization in hernia and robotic procedures.</p>
            </div>

            <div class="bg-gradient-to-br from-purple-50 to-violet-50 rounded-2xl p-6 border border-purple-100 hover:shadow-lg transition">
                <div class="w-14 h-14 rounded-xl bg-purple-600 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">FMAS, FIAGES</h3>
                <p class="text-sm text-slate-600">Fellow of Minimal Access Surgery and Indian Association of Gastrointestinal Endosurgeons.</p>
            </div>
        </div>

        <!-- Professional Memberships -->
        <div class="mt-12 bg-slate-50 rounded-2xl p-8 border border-slate-100">
            <h3 class="font-display text-xl font-bold text-slate-900 mb-6 text-center">Professional Memberships</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="flex items-center gap-3">
                    <svg class="w-6 h-6 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700 font-medium">Royal College of Surgeons, England</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="w-6 h-6 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700 font-medium">Association of Surgeons of India</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="w-6 h-6 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700 font-medium">Indian Medical Association</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="w-6 h-6 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-slate-700 font-medium">SAGES Member</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="py-16 md:py-24 bg-gradient-to-br from-slate-900 via-brand-900 to-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-1.5 rounded-full text-sm font-medium mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Recognition & Awards
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
                Honored for <span class="text-accent">Excellence</span>
            </h2>
            <p class="text-slate-300 text-lg">Consistently recognized for surgical excellence and commitment to patient care.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-8 text-center hover:bg-white/10 transition">
                <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center mb-6 shadow-lg shadow-amber-500/30">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <h3 class="font-display text-2xl font-bold mb-2">Times Health Award</h3>
                <p class="text-accent font-semibold mb-3">2025 & 2026 Winner</p>
                <p class="text-slate-400 text-sm">Recognized as one of Chennai's finest hernia and laparoscopic surgeons for exceptional patient outcomes.</p>
            </div>

            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-8 text-center hover:bg-white/10 transition">
                <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-brand-400 to-brand-600 flex items-center justify-center mb-6 shadow-lg shadow-brand-500/30">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                </div>
                <h3 class="font-display text-2xl font-bold mb-2">Excellence in Hernia</h3>
                <p class="text-brand-400 font-semibold mb-3">Surgical Innovation</p>
                <p class="text-slate-400 text-sm">Acknowledged for pioneering advanced techniques like eTEP and TAR in hernia reconstruction.</p>
            </div>

            <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-8 text-center hover:bg-white/10 transition">
                <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center mb-6 shadow-lg shadow-emerald-500/30">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-display text-2xl font-bold mb-2">Patient Choice Award</h3>
                <p class="text-emerald-400 font-semibold mb-3">5.0 Star Rating</p>
                <p class="text-slate-400 text-sm">265+ verified patient reviews on Google, reflecting consistent excellence in care and outcomes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Hospital Affiliations -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Practice Locations
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-6 mb-4">
                Hospital <span class="text-brand-700">Affiliations</span>
            </h2>
            <p class="text-slate-600 text-lg">Dr. Kumar operates at leading hospitals in Chennai, ensuring access to world-class facilities and equipment.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-xl hover:border-brand-200 transition group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center group-hover:bg-brand-700 transition">
                        <svg class="w-6 h-6 text-brand-700 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900">Billroth Hospital</h3>
                </div>
                <p class="text-slate-600 text-sm">R分析的, Chennai - A premier healthcare institution equipped with advanced laparoscopic and robotic surgery infrastructure.</p>
                <p class="text-brand-700 text-sm font-medium mt-3">Primary Practice Location</p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-xl hover:border-brand-200 transition group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center group-hover:bg-brand-700 transition">
                        <svg class="w-6 h-6 text-brand-700 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900">Apollo Hospitals</h3>
                </div>
                <p class="text-slate-600 text-sm">Greams Road, Chennai - Leading multi-specialty hospital with state-of-the-art surgical facilities.</p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-xl hover:border-brand-200 transition group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center group-hover:bg-brand-700 transition">
                        <svg class="w-6 h-6 text-brand-700 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900">MIOT Hospitals</h3>
                </div>
                <p class="text-slate-600 text-sm">Manapakkam, Chennai - Renowned for advanced surgical care with cutting-edge technology.</p>
            </div>
        </div>
    </div>
</section>

<!-- Philosophy Section -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Surgical Philosophy</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    Patient-Centered<br>Approach to Care
                </h2>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Dr. Kumar believes that every patient deserves personalized attention and treatment plans tailored to their specific condition, lifestyle, and goals. This philosophy drives every consultation, surgery, and follow-up interaction.
                </p>
                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Evidence-Based Practice</h4>
                            <p class="text-sm text-slate-600">Treatment decisions grounded in latest research and clinical guidelines.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Minimally Invasive First</h4>
                            <p class="text-sm text-slate-600">Whenever possible, prioritizing laparoscopic and robotic techniques for faster recovery.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Clear Communication</h4>
                            <p class="text-sm text-slate-600">Ensuring patients fully understand their condition and treatment options.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="bg-white rounded-3xl shadow-xl p-8 border border-slate-100">
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-6">Quick Facts</h3>
                    <div class="space-y-5">
                        <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                            <span class="text-slate-600">Hernia Surgeries</span>
                            <span class="font-bold text-brand-700 text-lg">10,000+</span>
                        </div>
                        <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                            <span class="text-slate-600">Laparoscopic Procedures</span>
                            <span class="font-bold text-brand-700 text-lg">20,000+</span>
                        </div>
                        <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                            <span class="text-slate-600">Years of Experience</span>
                            <span class="font-bold text-brand-700 text-lg">29+</span>
                        </div>
                        <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                            <span class="text-slate-600">Patient Rating</span>
                            <span class="font-bold text-accent text-lg">5.0 Stars</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-600">Google Reviews</span>
                            <span class="font-bold text-brand-700 text-lg">265+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-gradient-to-br from-brand-700 via-brand-800 to-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
            Ready to Meet Dr. Kumar?
        </h2>
        <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">
            Schedule a consultation to discuss your condition and explore personalized treatment options with Chennai's leading hernia surgeon.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Call Now
            </a>
            <a href="book-appointment.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition">
                Book Online
            </a>
        </div>
    </div>
</section>

<a href="tel:<?= $site['phone_link'] ?>" class="fixed bottom-5 right-5 z-50 bg-accent hover:bg-amber-600 text-white w-14 h-14 rounded-full shadow-2xl flex items-center justify-center animate-bounce" aria-label="Call Now">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
</a>

<?php require __DIR__ . '/includes/footer.php'; ?>
