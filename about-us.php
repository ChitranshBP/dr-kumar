<?php
require __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden py-20 md:py-28">
    <div class="absolute inset-0 opacity-15">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="hex" x="0" y="0" width="56" height="50" patternUnits="userSpaceOnUse">
                    <polygon points="28,2 54,17 54,49 28,64 2,49 2,17" fill="none" stroke="white" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#hex)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 z-10">
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-sm text-slate-300 mb-6 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full w-max border border-white/10">
            <a href="<?= $base_path ?>index.php" class="hover:text-white transition">Home</a>
            <span class="text-slate-500">/</span>
            <span class="text-accent font-medium">About Us</span>
        </nav>

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Meet Your Surgeon
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                A Legacy of<br>
                <span class="text-accent">Surgical Excellence</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                For over 29 years, Dr. Kumar has been at the forefront of advanced hernia and laparoscopic surgery in Chennai, transforming thousands of lives with cutting-edge techniques and compassionate care.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#doctor-profile" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                    Explore Profile
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7H3"/></svg>
                </a>
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    Book Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Doctor Profile Section -->
<section id="doctor-profile" class="py-12 md:py-16 bg-slate-50 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <!-- Left Column: Portrait & Floating Badges -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl bg-slate-100 aspect-[4/5] group border border-slate-200">
                    <img src="assets/images/dr-kumar-main.jpg" 
                         alt="Dr. Kumar - Advanced Hernia & Laparoscopic Surgeon" 
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/40 via-transparent to-transparent"></div>
                    
                    <!-- Bottom-Left Glassmorphic Badge -->
                    <div class="absolute bottom-5 left-5 right-5 bg-white/90 backdrop-blur-sm rounded-2xl p-4 shadow-xl border border-white/20 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-700 shrink-0 shadow-inner">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-sm leading-tight font-display">Dr. Kumar</p>
                            <p class="text-[11px] text-brand-600 font-semibold mt-0.5">Senior Consultant Surgeon</p>
                        </div>
                    </div>
                </div>

                <!-- Floating Statistics Badges -->
                <div class="absolute -bottom-6 -right-6 bg-white border border-slate-200 text-slate-900 rounded-3xl px-6 py-5 shadow-2xl hidden md:block hover:scale-105 transition duration-300 border-t-4 border-t-accent">
                    <p class="font-display text-4xl font-black text-slate-900 leading-none mb-1">29+</p>
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Years of Excellence</p>
                </div>
                <div class="absolute -top-6 -left-6 bg-white border border-slate-200 text-slate-900 rounded-3xl px-6 py-5 shadow-2xl hidden md:block hover:scale-105 transition duration-300 border-t-4 border-t-brand-700">
                    <p class="font-display text-4xl font-black text-brand-700 leading-none mb-1">10k+</p>
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Hernia Surgeries</p>
                </div>
            </div>

            <!-- Right Column: Biography Content -->
            <div class="lg:col-span-7">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">The Surgeon</span>
                <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-3 mb-6 leading-tight">
                    Pioneering Advanced<br>Hernia Surgery in Chennai
                </h2>
                <p class="text-slate-655 leading-relaxed text-base md:text-lg mb-6">
                    Dr. Kumar is a Senior Consultant in Minimal Access, Robotic, Advanced Hernia, and Abdominal Wall Reconstruction Surgery with an unparalleled track record of excellence spanning nearly three decades.
                </p>
                
                <!-- Key Achievements List -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed"><strong class="text-slate-900 font-semibold">Prestigious Background:</strong> Trained at Stanley Medical College and holds the prestigious MRCS from the Royal College of Surgeons of England.</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed"><strong class="text-slate-900 font-semibold">Specialized Advanced Techniques:</strong> Recognized expert in eTEP, TAR (Transversus Abdominis Release), and robotic-assisted surgeries, handling highly complex recurrent hernia cases across South India.</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed"><strong class="text-slate-900 font-semibold">Patient-First Philosophy:</strong> Committed to minimally invasive options that reduce recovery timelines, scarring, and post-operative discomfort.</p>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 hover:scale-105 shadow-md shadow-brand-700/10">
                        Schedule Consultation
                    </a>
                    <a href="book-appointment.php" class="inline-flex items-center gap-2 bg-white hover:bg-slate-50 text-slate-800 font-bold px-7 py-3.5 rounded-full border border-slate-200 transition duration-300 hover:scale-105 shadow-sm">
                        Book Appointment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Credentials Section -->
<section class="py-12 md:py-16 bg-white scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <!-- Left Column: Certifications & Highlights (lg:col-span-5) -->
            <div class="lg:col-span-5 space-y-6">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-2">Qualifications & Training</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
                    World-Class<br><span class="text-brand-700">Medical Credentials</span>
                </h2>
                <p class="text-slate-655 leading-relaxed text-sm md:text-base">
                    Rigorous training, continuous international education, and recognized qualifications ensure the highest standards of surgical safety and success.
                </p>

                <!-- Certifications Seal Callout Card -->
                <div class="bg-slate-50 border-l-4 border-l-brand-700 rounded-2xl p-6 shadow-sm flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-700 shrink-0 shadow-inner">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-900 text-sm mb-1 font-display">Royal College Recognized</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            Member of the Royal College of Surgeons of England, practicing surgical protocols in line with global clinical guidelines.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Line-Divided Credentials List (lg:col-span-7) -->
            <div class="lg:col-span-7">
                <div class="space-y-0 divide-y divide-slate-200 border-t border-b border-slate-200">
                    <!-- MBBS, MS -->
                    <div class="flex gap-4 items-start py-5 group">
                        <div class="shrink-0 w-12 h-12 rounded-xl bg-brand-50 border border-brand-100 text-brand-700 flex items-center justify-center font-bold text-base group-hover:bg-brand-700 group-hover:text-white transition duration-300 shadow-sm group-hover:scale-105">
                            01
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition font-display">MBBS, MS General Surgery</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Graduate and postgraduate surgical residency training at Stanley Medical College, Chennai—one of India's premier medical institutions.</p>
                        </div>
                    </div>

                    <!-- MRCS -->
                    <div class="flex gap-4 items-start py-5 group">
                        <div class="shrink-0 w-12 h-12 rounded-xl bg-accent/10 border border-accent/20 text-accent flex items-center justify-center font-bold text-base group-hover:bg-accent group-hover:text-white transition duration-300 shadow-sm group-hover:scale-105">
                            02
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-accent transition font-display">MRCS England</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Member of the Royal College of Surgeons of England. Certified surgical standards with international validation.</p>
                        </div>
                    </div>

                    <!-- FALS -->
                    <div class="flex gap-4 items-start py-5 group">
                        <div class="shrink-0 w-12 h-12 rounded-xl bg-brand-50 border border-brand-100 text-brand-700 flex items-center justify-center font-bold text-base group-hover:bg-brand-700 group-hover:text-white transition duration-300 shadow-sm group-hover:scale-105">
                            03
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-brand-700 transition font-display">FALS Hernia & Robotic</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Fellowship in Advanced Laparoscopic Surgery. Specialized subspecialty training in robotic and structural hernia repair.</p>
                        </div>
                    </div>

                    <!-- FMAS -->
                    <div class="flex gap-4 items-start py-5 group">
                        <div class="shrink-0 w-12 h-12 rounded-xl bg-accent/10 border border-accent/20 text-accent flex items-center justify-center font-bold text-base group-hover:bg-accent group-hover:text-white transition duration-300 shadow-sm group-hover:scale-105">
                            04
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-lg mb-1 group-hover:text-accent transition font-display">FMAS, FIAGES</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Fellow of Minimal Access Surgery and the Indian Association of Gastrointestinal Endosurgeons. Expert credentials in keyhole techniques.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Professional Memberships inline tags -->
        <div class="mt-12 bg-slate-50 rounded-2xl p-6 md:p-8 border border-slate-100">
            <h3 class="font-display text-base font-bold uppercase tracking-wider text-slate-400 text-center mb-6">Professional Memberships</h3>
            <div class="flex flex-wrap justify-center gap-3">
                <span class="inline-flex items-center gap-2 bg-white px-4 py-2.5 rounded-full border border-slate-200 shadow-sm text-xs font-semibold text-slate-700 hover:border-brand-200 transition">
                    <svg class="w-4 h-4 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Royal College of Surgeons, England
                </span>
                <span class="inline-flex items-center gap-2 bg-white px-4 py-2.5 rounded-full border border-slate-200 shadow-sm text-xs font-semibold text-slate-700 hover:border-brand-200 transition">
                    <svg class="w-4 h-4 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Association of Surgeons of India
                </span>
                <span class="inline-flex items-center gap-2 bg-white px-4 py-2.5 rounded-full border border-slate-200 shadow-sm text-xs font-semibold text-slate-700 hover:border-brand-200 transition">
                    <svg class="w-4 h-4 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Indian Medical Association
                </span>
                <span class="inline-flex items-center gap-2 bg-white px-4 py-2.5 rounded-full border border-slate-200 shadow-sm text-xs font-semibold text-slate-700 hover:border-brand-200 transition">
                    <svg class="w-4 h-4 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    SAGES Member
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="py-12 md:py-16 bg-brand-950 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-4 border border-white/10 shadow-sm">
                <span class="w-1.5 h-1.5 rounded-full bg-accent animate-pulse"></span>
                Recognition & Awards
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold mb-4 leading-tight">
                Honored for <span class="text-accent">Excellence</span>
            </h2>
            <p class="text-slate-300 text-base md:text-lg">Consistently recognized for surgical innovation and clinical commitment to patient outcomes.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Times Health Award -->
            <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 text-center hover:bg-white/10 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/5">
                <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-accent to-amber-600 flex items-center justify-center mb-6 shadow-lg shadow-accent/20 group-hover:scale-105 transition duration-300">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5a2 2 0 10-2 2h2zm0 0h4m-4 0H8m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-display text-2xl font-bold mb-2">Times Health Award</h3>
                <p class="text-accent font-bold text-sm tracking-wide uppercase mb-3">2025 & 2026 Winner</p>
                <p class="text-slate-400 text-xs leading-relaxed">Recognized as one of Chennai's finest hernia and laparoscopic surgeons for exceptional patient outcomes.</p>
            </div>

            <!-- Excellence in Hernia -->
            <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 text-center hover:bg-white/10 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-brand-500/5">
                <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-brand-400 to-brand-600 flex items-center justify-center mb-6 shadow-lg shadow-brand-500/20 group-hover:scale-105 transition duration-300">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"/></svg>
                </div>
                <h3 class="font-display text-2xl font-bold mb-2">Excellence in Hernia</h3>
                <p class="text-brand-300 font-bold text-sm tracking-wide uppercase mb-3">Surgical Innovation</p>
                <p class="text-slate-400 text-xs leading-relaxed">Acknowledged for pioneering advanced techniques like eTEP and TAR in complex abdominal wall reconstruction.</p>
            </div>

            <!-- Patient Choice Award -->
            <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 text-center hover:bg-white/10 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/5">
                <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-accent to-amber-600 flex items-center justify-center mb-6 shadow-lg shadow-accent/20 group-hover:scale-105 transition duration-300">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-display text-2xl font-bold mb-2">Patient Choice Award</h3>
                <p class="text-accent font-bold text-sm tracking-wide uppercase mb-3">5.0 Star Rating</p>
                <p class="text-slate-400 text-xs leading-relaxed">265+ verified patient reviews on Google, reflecting consistent excellence in empathetic care and outstanding outcomes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Hospital Affiliations -->
<section class="py-12 md:py-16 bg-white scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">Practice Locations</span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-3 mb-6">
                Hospital <span class="text-brand-700">Affiliations</span>
            </h2>
            <p class="text-slate-655 leading-relaxed text-base md:text-lg">Dr. Kumar operates at leading hospitals in Chennai, ensuring access to world-class facilities and state-of-the-art equipment.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Billroth Hospital -->
            <div class="group bg-white rounded-3xl border border-slate-200/80 p-6 shadow-sm hover:shadow-xl hover:border-brand-200 transition-all duration-300 hover:-translate-y-1 border-t-4 border-t-brand-700">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-700 shrink-0 shadow-inner group-hover:bg-brand-700 group-hover:text-white transition duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900 font-display group-hover:text-brand-700 transition">Billroth Hospital</h3>
                </div>
                <p class="text-slate-600 text-xs leading-relaxed">RA Puram, Chennai - A premier healthcare institution equipped with advanced laparoscopic and robotic surgery infrastructure.</p>
                <p class="text-brand-700 text-xs font-bold uppercase tracking-wider mt-4 inline-flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 bg-brand-600 rounded-full animate-ping"></span>
                    Primary Practice Location
                </p>
            </div>

            <!-- Apollo Hospitals -->
            <div class="group bg-white rounded-3xl border border-slate-200/80 p-6 shadow-sm hover:shadow-xl hover:border-brand-200 transition-all duration-300 hover:-translate-y-1 border-t-4 border-t-accent">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-accent/10 border border-accent/20 flex items-center justify-center text-accent shrink-0 shadow-inner group-hover:bg-accent group-hover:text-white transition duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900 font-display group-hover:text-accent transition">Apollo Hospitals</h3>
                </div>
                <p class="text-slate-600 text-xs leading-relaxed">Greams Road, Chennai - Leading multi-specialty tertiary care hospital with state-of-the-art emergency and surgical facilities.</p>
                <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider mt-4">Visiting Consultant</p>
            </div>

            <!-- MIOT Hospitals -->
            <div class="group bg-white rounded-3xl border border-slate-200/80 p-6 shadow-sm hover:shadow-xl hover:border-brand-200 transition-all duration-300 hover:-translate-y-1 border-t-4 border-t-brand-500">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-600 shrink-0 shadow-inner group-hover:bg-brand-600 group-hover:text-white transition duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900 font-display group-hover:text-brand-600 transition">MIOT International</h3>
                </div>
                <p class="text-slate-600 text-xs leading-relaxed">Manapakkam, Chennai - Globally renowned healthcare hub for advanced keyhole surgeries and robotic reconstructions.</p>
                <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider mt-4">Visiting Consultant</p>
            </div>
        </div>
    </div>
</section>

<!-- Philosophy & Statistics Section -->
<section class="py-12 md:py-16 bg-slate-50 border-t border-b border-slate-100 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <!-- Left Column: Philosophy List (lg:col-span-7) -->
            <div class="lg:col-span-7">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-50 px-3.5 py-1.5 rounded-full inline-block mb-4">Surgical Philosophy</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6 leading-tight">
                    Patient-Centered<br>Approach to Care
                </h2>
                <p class="text-slate-655 leading-relaxed mb-8 text-sm md:text-base">
                    Dr. Kumar believes that every patient deserves personalized attention and a treatment plan customized to their specific anatomy, lifestyle, and recovery goals. This surgical philosophy shapes every decision.
                </p>

                <!-- Premium Line-Divided Philosophy List -->
                <div class="space-y-0 divide-y divide-slate-200 border-t border-b border-slate-200">
                    <!-- Evidence-Based Practice -->
                    <div class="flex gap-4 items-start py-5 group">
                        <div class="shrink-0 w-10 h-10 rounded-full bg-brand-50 text-brand-700 flex items-center justify-center group-hover:bg-brand-700 group-hover:text-white transition duration-300 shadow-sm group-hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base mb-0.5 group-hover:text-brand-700 transition">Evidence-Based Medicine</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Every treatment plan is built strictly upon validated clinical research, national registry data, and internationally proven surgical methods.</p>
                        </div>
                    </div>
                    
                    <!-- Minimally Invasive First -->
                    <div class="flex gap-4 items-start py-5 group">
                        <div class="shrink-0 w-10 h-10 rounded-full bg-brand-50 text-brand-700 flex items-center justify-center group-hover:bg-brand-700 group-hover:text-white transition duration-300 shadow-sm group-hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base mb-0.5 group-hover:text-brand-700 transition">Minimally Invasive First</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Dr. Kumar prioritizes laparoscopic and robotic keyhole repairs to minimize recovery time, lower infection rates, and reduce post-op pain.</p>
                        </div>
                    </div>

                    <!-- Clear Communication -->
                    <div class="flex gap-4 items-start py-5 group">
                        <div class="shrink-0 w-10 h-10 rounded-full bg-brand-50 text-brand-700 flex items-center justify-center group-hover:bg-brand-700 group-hover:text-white transition duration-300 shadow-sm group-hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base mb-0.5 group-hover:text-brand-700 transition">Clear & Direct Communication</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">No medical jargon. We map out diagnosis details, mesh alternatives, potential risks, and recovery phases clearly to empower patients.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Quick Facts Dashboard Block (lg:col-span-5) -->
            <div class="lg:col-span-5">
                <div class="bg-white rounded-3xl p-8 border border-slate-200/80 shadow-md">
                    <h3 class="font-display font-bold text-slate-900 text-xl mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"/><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"/></svg>
                        Practice Statistics
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between pb-3.5 border-b border-slate-100">
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Hernia Surgeries</span>
                            <span class="font-bold text-brand-700 text-xl font-display">10,000+</span>
                        </div>
                        <div class="flex items-center justify-between pb-3.5 border-b border-slate-100">
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Laparoscopic Procedures</span>
                            <span class="font-bold text-brand-700 text-xl font-display">20,000+</span>
                        </div>
                        <div class="flex items-center justify-between pb-3.5 border-b border-slate-100">
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Years of Experience</span>
                            <span class="font-bold text-brand-700 text-xl font-display">29+</span>
                        </div>
                        <div class="flex items-center justify-between pb-3.5 border-b border-slate-100">
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Patient Rating</span>
                            <span class="font-bold text-accent text-xl font-display">5.0 Stars</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Google Reviews</span>
                            <span class="font-bold text-brand-700 text-xl font-display">265+</span>
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
        <span class="text-accent text-xs font-bold uppercase tracking-wider bg-white/10 px-4 py-1.5 rounded-full mb-4 inline-block border border-white/10">Personalized Care</span>
        <h2 class="font-display text-3xl md:text-5xl font-bold mb-6">
            Ready to Meet Dr. Kumar?
        </h2>
        <p class="text-lg text-slate-300 leading-relaxed mb-8 max-w-2xl mx-auto">
            Schedule a private clinical consultation in Chennai to discuss your condition and map out a tailored surgical treatment plan.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-8 py-4 rounded-full transition shadow-lg shadow-accent/25 hover:scale-105">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Schedule Consultation
            </a>
            <a href="book-appointment.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition hover:scale-105">
                Book Online Appointment
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

<?php require __DIR__ . '/includes/footer.php'; ?>
