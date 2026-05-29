<?php
require __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 py-16 md:py-24 relative">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 text-sm">
                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <span>Meet Your Surgeon</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                About Dr. Kumar
            </h1>
            <p class="text-lg md:text-xl text-brand-100 leading-relaxed mb-8">
                A legacy of surgical excellence spanning nearly three decades. With 10,000+ hernia surgeries and 20,000+ laparoscopic procedures, Dr. Kumar is a pioneer in advanced abdominal hernia and minimally invasive surgery in Chennai.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-500 text-white font-semibold px-6 py-3 rounded-lg transition shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    Book Consultation
                </a>
                <a href="book-appointment.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-semibold px-6 py-3 rounded-lg transition border border-white/20 hover:-translate-y-0.5">
                    View Appointments
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 py-12">

    <!-- Doctor Profile Section -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-14 h-14 rounded-2xl bg-brand-100 flex items-center justify-center">
                <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Meet Dr. Kumar</h2>
                <p class="text-slate-600">Senior Consultant in Advanced Hernia & Laparoscopic Surgery</p>
            </div>
        </div>

        <div class="bg-gradient-to-r from-brand-50 to-cyan-50 rounded-2xl p-8 border border-brand-100">
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                <div class="flex-1 order-2 lg:order-1">
                    <h3 class="text-xl font-bold text-brand-800 mb-4">About the Surgeon</h3>
                    <p class="text-slate-700 leading-relaxed mb-4">
                        Dr. Kumar is a Senior Consultant in Minimal Access, Robotic, Advanced Hernia, and Abdominal Wall Reconstruction Surgery with an unparalleled track record spanning nearly three decades.
                    </p>
                    <p class="text-slate-700 leading-relaxed mb-6">
                        Trained at Stanley Medical College and holding the prestigious MRCS from the Royal College of Surgeons of England, he is a recognized expert in eTEP, TAR, and robotic-assisted surgeries across South India.
                    </p>

                    <div class="grid grid-cols-2 gap-3 mb-6">
                        <div class="flex items-center gap-2 text-sm text-slate-700">
                            <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            MBBS, MS Surgery
                        </div>
                        <div class="flex items-center gap-2 text-sm text-slate-700">
                            <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            MRCS England
                        </div>
                        <div class="flex items-center gap-2 text-sm text-slate-700">
                            <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            FALS Hernia & Robotic
                        </div>
                        <div class="flex items-center gap-2 text-sm text-slate-700">
                            <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            FMAS, FIAGES
                        </div>
                    </div>

                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-5 py-2.5 rounded-lg transition shadow-md hover:shadow-lg">
                        Schedule Consultation
                    </a>
                </div>
                <div class="lg:w-80 flex-shrink-0 order-1 lg:order-2">
                    <div class="rounded-2xl overflow-hidden shadow-lg bg-slate-100 aspect-[4/5] relative">
                        <img src="assets/images/dr-kumar-main.jpg" alt="Dr. Kumar" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-slate-900/90 to-transparent p-4">
                            <p class="font-bold text-white text-lg leading-tight">Dr. Kumar</p>
                            <p class="text-brand-300 text-sm">Senior Consultant Surgeon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Achievements -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center">
                <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Key Achievements</h2>
                <p class="text-slate-600">Milestones that define surgical excellence</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="group bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-12 h-12 rounded-full bg-brand-700 text-white font-bold text-xl flex items-center justify-center mb-4 font-display group-hover:scale-110 transition">01</div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Prestigious Training</h3>
                <p class="text-slate-600 text-sm">Trained at Stanley Medical College and holds MRCS from the Royal College of Surgeons of England — one of the world's most respected surgical bodies.</p>
            </div>

            <div class="group bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-12 h-12 rounded-full bg-brand-700 text-white font-bold text-xl flex items-center justify-center mb-4 font-display group-hover:scale-110 transition">02</div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Advanced Techniques</h3>
                <p class="text-slate-600 text-sm">Recognized expert in eTEP, TAR (Transversus Abdominis Release), and robotic-assisted surgeries — handling the most complex recurrent hernia cases.</p>
            </div>

            <div class="group bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-12 h-12 rounded-full bg-brand-700 text-white font-bold text-xl flex items-center justify-center mb-4 font-display group-hover:scale-110 transition">03</div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Proven Track Record</h3>
                <p class="text-slate-600 text-sm">10,000+ hernia repairs and 20,000+ laparoscopic procedures across South India — delivering faster recovery and lasting results.</p>
            </div>

            <div class="group bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-12 h-12 rounded-full bg-brand-700 text-white font-bold text-xl flex items-center justify-center mb-4 font-display group-hover:scale-110 transition">04</div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Minimally Invasive Pioneer</h3>
                <p class="text-slate-600 text-sm">One of the first surgeons in Chennai to perform laparoscopic hernia surgery with 29+ years of operating-room mastery in keyhole techniques.</p>
            </div>

            <div class="group bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-12 h-12 rounded-full bg-brand-700 text-white font-bold text-xl flex items-center justify-center mb-4 font-display group-hover:scale-110 transition">05</div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Patient-Centered Care</h3>
                <p class="text-slate-600 text-sm">5.0-star rating with 265+ verified Google reviews from patients who trust Dr. Kumar with their care and surgical outcomes.</p>
            </div>

            <div class="group bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition">
                <div class="w-12 h-12 rounded-full bg-brand-700 text-white font-bold text-xl flex items-center justify-center mb-4 font-display group-hover:scale-110 transition">06</div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">International Standards</h3>
                <p class="text-slate-600 text-sm">Member of multiple global surgical societies including SAGES, bringing world-class standards to every procedure in Chennai.</p>
            </div>
        </div>
    </section>

    <!-- Credentials Section -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-14 h-14 rounded-2xl bg-brand-100 flex items-center justify-center">
                <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Qualifications & Training</h2>
                <p class="text-slate-600">World-class medical credentials</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="group bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition border-t-4 border-t-brand-700">
                <div class="w-14 h-14 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center font-bold text-xl mb-5 font-display group-hover:bg-brand-700 group-hover:text-white transition">01</div>
                <h3 class="font-bold text-lg text-slate-800 mb-2 font-display">MBBS, MS Surgery</h3>
                <p class="text-slate-600 text-sm">Graduate and postgraduate surgical residency at Stanley Medical College — one of India's premier medical institutions.</p>
            </div>

            <div class="group bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition border-t-4 border-t-accent">
                <div class="w-14 h-14 rounded-xl bg-accent/10 text-accent flex items-center justify-center font-bold text-xl mb-5 font-display group-hover:bg-accent group-hover:text-white transition">02</div>
                <h3 class="font-bold text-lg text-slate-800 mb-2 font-display">MRCS England</h3>
                <p class="text-slate-600 text-sm">Member of the Royal College of Surgeons of England. Certified surgical standards with international validation.</p>
            </div>

            <div class="group bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition border-t-4 border-t-brand-700">
                <div class="w-14 h-14 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center font-bold text-xl mb-5 font-display group-hover:bg-brand-700 group-hover:text-white transition">03</div>
                <h3 class="font-bold text-lg text-slate-800 mb-2 font-display">FALS Hernia & Robotic</h3>
                <p class="text-slate-600 text-sm">Fellowship in Advanced Laparoscopic Surgery with specialized training in robotic and structural hernia repair.</p>
            </div>

            <div class="group bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition border-t-4 border-t-accent">
                <div class="w-14 h-14 rounded-xl bg-accent/10 text-accent flex items-center justify-center font-bold text-xl mb-5 font-display group-hover:bg-accent group-hover:text-white transition">04</div>
                <h3 class="font-bold text-lg text-slate-800 mb-2 font-display">FMAS, FIAGES</h3>
                <p class="text-slate-600 text-sm">Fellow of Minimal Access Surgery and Indian Association of Gastrointestinal Endosurgeons. Expert in keyhole techniques.</p>
            </div>
        </div>

        <!-- Professional Memberships -->
        <div class="bg-slate-50 rounded-2xl p-6 md:p-8 border border-slate-100">
            <h3 class="text-base font-bold uppercase tracking-wider text-slate-500 text-center mb-6">Professional Memberships</h3>
            <div class="flex flex-wrap justify-center gap-3">
                <span class="inline-flex items-center gap-2 bg-white px-4 py-2.5 rounded-full border border-slate-200 shadow-sm text-xs font-semibold text-slate-700 hover:border-brand-200 hover:text-brand-700 transition">
                    <svg class="w-4 h-4 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Royal College of Surgeons, England
                </span>
                <span class="inline-flex items-center gap-2 bg-white px-4 py-2.5 rounded-full border border-slate-200 shadow-sm text-xs font-semibold text-slate-700 hover:border-brand-200 hover:text-brand-700 transition">
                    <svg class="w-4 h-4 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Association of Surgeons of India
                </span>
                <span class="inline-flex items-center gap-2 bg-white px-4 py-2.5 rounded-full border border-slate-200 shadow-sm text-xs font-semibold text-slate-700 hover:border-brand-200 hover:text-brand-700 transition">
                    <svg class="w-4 h-4 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Indian Medical Association
                </span>
                <span class="inline-flex items-center gap-2 bg-white px-4 py-2.5 rounded-full border border-slate-200 shadow-sm text-xs font-semibold text-slate-700 hover:border-brand-200 hover:text-brand-700 transition">
                    <svg class="w-4 h-4 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    SAGES Member
                </span>
            </div>
        </div>
    </section>

    <!-- Awards Section -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center">
                <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5a2 2 0 10-2 2h2zm0 0h4m-4 0H8m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Recognition & Awards</h2>
                <p class="text-slate-600">Honored for surgical excellence</p>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition text-center border-t-4 border-t-accent">
                <div class="w-16 h-16 mx-auto rounded-full bg-accent/10 flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5a2 2 0 10-2 2h2zm0 0h4m-4 0H8m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-xl text-slate-800 mb-2 font-display">Times Health Award</h3>
                <p class="text-accent font-bold text-sm uppercase tracking-wide mb-3">2025 & 2026 Winner</p>
                <p class="text-slate-600 text-sm">Recognized as one of Chennai's finest hernia and laparoscopic surgeons for exceptional patient outcomes.</p>
            </div>

            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition text-center border-t-4 border-t-brand-700">
                <div class="w-16 h-16 mx-auto rounded-full bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"/></svg>
                </div>
                <h3 class="font-bold text-xl text-slate-800 mb-2 font-display">Surgical Innovation</h3>
                <p class="text-brand-700 font-bold text-sm uppercase tracking-wide mb-3">Excellence in Hernia</p>
                <p class="text-slate-600 text-sm">Acknowledged for pioneering advanced techniques like eTEP and TAR in complex abdominal wall reconstruction.</p>
            </div>

            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition text-center border-t-4 border-t-accent">
                <div class="w-16 h-16 mx-auto rounded-full bg-accent/10 flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-bold text-xl text-slate-800 mb-2 font-display">Patient Choice Award</h3>
                <p class="text-accent font-bold text-sm uppercase tracking-wide mb-3">5.0 Star Rating</p>
                <p class="text-slate-600 text-sm">265+ verified patient reviews on Google, reflecting consistent excellence in empathetic care and outcomes.</p>
            </div>
        </div>
    </section>

    <!-- Hospital Affiliations -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-14 h-14 rounded-2xl bg-brand-100 flex items-center justify-center">
                <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Hospital Affiliations</h2>
                <p class="text-slate-600">Practice locations in Chennai</p>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition border-t-4 border-t-brand-700">
                <h3 class="font-bold text-lg text-slate-800 mb-2 font-display">Billroth Hospital</h3>
                <p class="text-slate-600 text-sm mb-3">RA Puram, Chennai — A premier healthcare institution equipped with advanced laparoscopic and robotic surgery infrastructure.</p>
                <span class="inline-flex items-center gap-1.5 text-brand-700 text-xs font-bold uppercase tracking-wider">
                    <span class="w-1.5 h-1.5 bg-brand-600 rounded-full animate-ping"></span>
                    Primary Practice
                </span>
            </div>

            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition border-t-4 border-t-accent">
                <h3 class="font-bold text-lg text-slate-800 mb-2 font-display">Apollo Hospitals</h3>
                <p class="text-slate-600 text-sm mb-3">Greams Road, Chennai — Leading multi-specialty tertiary care hospital with state-of-the-art emergency and surgical facilities.</p>
                <span class="text-slate-500 text-xs font-semibold uppercase tracking-wider">Visiting Consultant</span>
            </div>

            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition border-t-4 border-t-brand-500">
                <h3 class="font-bold text-lg text-slate-800 mb-2 font-display">MIOT International</h3>
                <p class="text-slate-600 text-sm mb-3">Manapakkam, Chennai — Globally renowned healthcare hub for advanced keyhole surgeries and robotic reconstructions.</p>
                <span class="text-slate-500 text-xs font-semibold uppercase tracking-wider">Visiting Consultant</span>
            </div>
        </div>
    </section>

    <!-- Practice Statistics -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center">
                <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Practice Statistics</h2>
                <p class="text-slate-600">Numbers that reflect experience and trust</p>
            </div>
        </div>

        <div class="bg-slate-50 rounded-2xl p-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div>
                    <p class="font-display text-4xl font-bold text-brand-700 mb-2">29+</p>
                    <p class="text-sm text-slate-600 font-semibold">Years Experience</p>
                </div>
                <div>
                    <p class="font-display text-4xl font-bold text-brand-700 mb-2">10,000+</p>
                    <p class="text-sm text-slate-600 font-semibold">Hernia Surgeries</p>
                </div>
                <div>
                    <p class="font-display text-4xl font-bold text-brand-700 mb-2">20,000+</p>
                    <p class="text-sm text-slate-600 font-semibold">Laparoscopic Procedures</p>
                </div>
                <div>
                    <p class="font-display text-4xl font-bold text-accent mb-2">5.0</p>
                    <p class="text-sm text-slate-600 font-semibold">Star Rating (265+ Reviews)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Surgical Philosophy -->
    <section class="mb-16">
        <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl bg-brand-100 flex items-center justify-center">
                <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Surgical Philosophy</h2>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="w-10 h-10 rounded-lg bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Evidence-Based Medicine</h3>
                <p class="text-slate-600 text-sm">Every treatment plan is built strictly upon validated clinical research, national registry data, and internationally proven surgical methods.</p>
            </div>

            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="w-10 h-10 rounded-lg bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Minimally Invasive First</h3>
                <p class="text-slate-600 text-sm">Dr. Kumar prioritizes laparoscopic and robotic keyhole repairs to minimize recovery time, lower infection rates, and reduce post-op pain.</p>
            </div>

            <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="w-10 h-10 rounded-lg bg-brand-50 text-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-800 mb-2">Clear Communication</h3>
                <p class="text-slate-600 text-sm">No medical jargon. We map out diagnosis details, mesh alternatives, potential risks, and recovery phases clearly to empower patients.</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="text-center mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-brand-50 px-3 py-1.5 rounded-full mb-4 inline-block">FAQ</span>
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 leading-tight">
                Frequently asked questions
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6 items-start">
            <div class="space-y-4">
                <div class="faq-item active bg-brand-700 text-white rounded-2xl overflow-hidden transition-all duration-300 border border-transparent shadow-md">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-white text-base md:text-lg leading-snug transition-colors duration-300">What is Dr. Kumar's area of specialization?</span>
                        <span class="faq-symbol text-2xl font-light bg-brand-800 text-white w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">&#8212;</span>
                    </button>
                    <div class="faq-content px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-white/20 mb-4 transition-all duration-300"></div>
                        <p class="text-brand-50 text-sm md:text-base leading-relaxed transition-colors duration-300">Dr. Kumar specializes in Advanced Hernia Surgery, Abdominal Wall Reconstruction, and Minimally Invasive (Laparoscopic & Robotic) Surgery. He is a recognized expert in complex recurrent hernias using advanced techniques like eTEP, TAR, TAPP, and IPOM.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What hospital does Dr. Kumar operate at?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-brand-100 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Dr. Kumar primarily operates at Billroth Hospital, RA Puram. He also serves as a Visiting Consultant at Apollo Hospitals (Greams Road) and MIOT International (Manapakkam).</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">How can I book a consultation?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-brand-100 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">You can call Dr. Kumar directly at +91 79042 17129, use our online appointment booking form, or visit any of his practice locations. Early consultation is recommended to discuss your condition and treatment options.</p>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">What advanced techniques does Dr. Kumar offer?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-brand-100 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Dr. Kumar offers eTEP (Extended View Totally Extraperitoneal), TAR (Transversus Abdominis Release), TAPP, TEP, IPOM, and robotic-assisted hernia repairs. He also provides daytime daycare surgery and the Desarda (meshless) technique for eligible patients.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Why choose Dr. Kumar for hernia surgery?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                        <div class="h-px bg-brand-100 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">With 29+ years of experience and 10,000+ hernia surgeries, Dr. Kumar is one of Chennai's most experienced hernia surgeons. His internationally recognized credentials (MRCS England), pioneering use of advanced techniques, and consistently excellent patient outcomes make him a trusted choice.</p>
                    </div>
                </div>

                <div class="faq-item bg-brand-50/60 hover:bg-brand-100/60 rounded-2xl overflow-hidden transition-all duration-300 border border-brand-100/20">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 select-none focus:outline-none">
                        <span class="font-display font-bold text-slate-900 text-base md:text-lg leading-snug transition-colors duration-300">Does Dr. Kumar offer second opinions?</span>
                        <span class="faq-symbol text-2xl font-light bg-white text-brand-700 w-8 h-8 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-all duration-300">+</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 transition-all duration-300">
                    <div class="h-px bg-brand-100 mb-4 transition-all duration-300"></div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed transition-colors duration-300">Yes, Dr. Kumar offers second opinions for complex hernia cases, recurrent hernias, and patients considering revision surgery. Requesting a second opinion is a standard and encouraged practice in surgical care.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- CTA Section -->
<section class="bg-gradient-to-r from-brand-700 to-brand-800 text-white py-16">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Meet Dr. Kumar?</h2>
        <p class="text-brand-100 text-lg mb-8">Schedule a private clinical consultation in Chennai to discuss your condition and map out a tailored surgical treatment plan.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-500 text-white font-semibold px-8 py-4 rounded-xl transition shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.1.549V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Call: <?= $site['phone'] ?>
            </a>
            <a href="book-appointment.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-semibold px-8 py-4 rounded-xl transition border border-white/30">
                Book Online Appointment
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- Related Pages -->
<section class="max-w-7xl mx-auto px-4 py-12">
    <h3 class="text-xl font-bold text-slate-800 mb-6">Navigate</h3>
    <div class="grid md:grid-cols-4 gap-4">
        <a href="index.php" class="flex items-center gap-3 p-4 bg-white rounded-xl border border-slate-200 hover:border-brand-300 transition">
            <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
            </div>
            <span class="font-medium text-slate-800">Home</span>
        </a>
        <a href="hernia.php" class="flex items-center gap-3 p-4 bg-white rounded-xl border border-slate-200 hover:border-brand-300 transition">
            <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <span class="font-medium text-slate-800">Hernia Conditions</span>
        </a>
        <a href="contact.php" class="flex items-center gap-3 p-4 bg-white rounded-xl border border-slate-200 hover:border-brand-300 transition">
            <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <span class="font-medium text-slate-800">Contact</span>
        </a>
        <a href="book-appointment.php" class="flex items-center gap-3 p-4 bg-white rounded-xl border border-slate-200 hover:border-brand-300 transition">
            <div class="w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            <span class="font-medium text-slate-800">Book Appointment</span>
        </a>
    </div>
</section>

<!-- Floating Call Button -->
<a href="tel:<?= $site['phone_link'] ?>" class="fixed bottom-6 right-6 z-50 bg-brand-700 hover:bg-brand-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
</a>

<?php require __DIR__ . '/includes/footer.php'; ?>
