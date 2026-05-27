<?php
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-brand-900 via-brand-800 to-slate-900 text-white overflow-hidden">
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
            <span class="inline-flex items-center gap-2 bg-accent/20 backdrop-blur px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Advanced Technique
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                eTEP Rives-Stoppa<br>
                <span class="text-accent">Hernia Repair</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Extended view totally extraperitoneal repair - a cutting-edge approach for complex abdominal wall hernias requiring advanced reconstruction.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#what-is-etep" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    Learn More
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7H3"/></svg>
                </a>
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-6 py-3 rounded-full border border-white/30 transition">
                    Book Consultation
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-white to-transparent"></div>
</section>

<!-- What is eTEP -->
<section id="what-is-etep" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Understanding eTEP</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    What is eTEP Rives-Stoppa Repair?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    eTEP stands for <strong>extended view Totally Extraperitoneal</strong>. It is an advanced minimally invasive technique based on the classic Rives-Stoppa repair, which has been adapted for modern laparoscopic and robotic surgery.
                </p>
                <p class="text-slate-600 leading-relaxed mb-6">
                    This technique creates an extended working space in the preperitoneal layer, allowing surgeons to perform complex repairs including mesh placement in the retrorectus space (behind the abdominal muscles) for maximum reinforcement.
                </p>

                <div class="bg-brand-50 rounded-2xl p-6 border border-brand-100">
                    <h3 class="font-bold text-slate-900 mb-4">Key Innovation</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        The eTEP approach extends the traditional TEP technique to treat complex hernias that would traditionally require open surgery, combining the benefits of minimally invasive surgery with robust repair principles.
                    </p>
                </div>
            </div>

            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                <h3 class="text-xl font-bold text-slate-900 mb-6">eTEP Evolution</h3>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-slate-300 flex items-center justify-center shrink-0">
                            <span class="text-white font-bold text-sm">1950s</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Rives-Stoppa Technique</h4>
                            <p class="text-sm text-slate-600">Classic open repair placing mesh in the retrorectus space.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-brand-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">TEP Adaptation</h4>
                            <p class="text-sm text-slate-600">Minimally invasive extraperitoneal approach for simpler hernias.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm border-l-4 border-accent">
                        <div class="w-10 h-10 rounded-lg bg-accent flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">eTEP Modern Era</h4>
                            <p class="text-sm text-slate-600">Extended-space technique for complex hernias using minimally invasive approach.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- For Complex Hernias -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">When It's Needed</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                eTEP for Complex Hernias
            </h2>
            <p class="text-slate-600 leading-relaxed">
                eTEP is specifically designed for hernias that are too complex for standard laparoscopic repair but would benefit from minimally invasive techniques.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div class="bg-white rounded-2xl shadow-lg p-6 border border-slate-100 hover:shadow-xl transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Large Ventral Hernias</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Hernias with wider defects that require more extensive mesh overlap for secure repair.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 border border-slate-100 hover:shadow-xl transition">
                <div class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Recurrent Hernias</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Hernias that have come back after previous repairs, often with scar tissue and altered anatomy.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 border border-slate-100 hover:shadow-xl transition">
                <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Incisional Hernias</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Hernias that develop at the site of previous surgical incisions.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 border border-slate-100 hover:shadow-xl transition">
                <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Multiple Hernias</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Patients with concurrent inguinal, ventral, and umbilical hernias requiring simultaneous repair.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 border border-slate-100 hover:shadow-xl transition">
                <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Contaminated Fields</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Situations where clean-contaminated surgery is anticipated, requiring careful technique.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 border border-slate-100 hover:shadow-xl transition">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Mesh Failure Cases</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Previous mesh complications requiring removal and replacement with reinforced repair.
                </p>
            </div>
        </div>

        <!-- TAR Addition -->
        <div class="bg-gradient-to-r from-brand-700 to-brand-600 rounded-2xl p-8 text-white">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="shrink-0">
                    <div class="w-20 h-20 rounded-2xl bg-white/20 flex items-center justify-center">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="text-2xl font-bold mb-3">eTEP + TAR for Maximum Repair</h3>
                    <p class="text-brand-100 leading-relaxed">
                        For the most complex cases, eTEP can be combined with <strong>TAR (Transversus Abdominis Release)</strong>, allowing surgeons to release additional muscles to create even more space for mesh placement. This provides the strongest possible repair for the most challenging hernias.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advantages -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <div class="bg-gradient-to-br from-brand-50 to-white rounded-2xl p-8 border border-brand-100">
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Advantages of eTEP Rives-Stoppa</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                            <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900">Robust Reinforcement</h4>
                                <p class="text-sm text-slate-600">Mesh in retrorectus space provides superior strength and lower recurrence.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                            <div class="w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900">Minimally Invasive Benefits</h4>
                                <p class="text-sm text-slate-600">All the benefits of laparoscopic surgery: less pain, faster recovery, smaller scars.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                            <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900">Reduced Mesh-Adhesion Risk</h4>
                                <p class="text-sm text-slate-600">Extraperitoneal mesh placement minimizes contact with abdominal organs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Why Choose eTEP</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    Advantages of eTEP Rives-Stoppa
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    The eTEP Rives-Stoppa technique combines the proven principles of open retrorectus mesh placement with modern minimally invasive surgery.
                </p>
                <p class="text-slate-600 leading-relaxed mb-6">
                    By placing mesh behind the rectus (six-pack) muscles, the repair is protected by the patient's own muscular tissues, creating a reconstruction that can withstand intra-abdominal pressure while minimizing mesh-related complications.
                </p>
                <div class="bg-slate-100 rounded-xl p-4">
                    <p class="text-sm text-slate-600">
                        <strong>Expertise Matters:</strong> eTEP is an advanced technique requiring specialized training. Dr. Kumar has extensive experience in complex hernia reconstruction.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Who Needs eTEP -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Patient Selection</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Who Needs eTEP Repair?
            </h2>
            <p class="text-slate-600 leading-relaxed">
                eTEP is not for every hernia. Dr. Kumar will determine if this advanced technique is appropriate for your specific situation.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 mb-12">
            <!-- Ideal Candidates -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border-t-4 border-green-600">
                <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                    <span class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    Ideal Candidates
                </h3>
                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Large or complex ventral/incisional hernias</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Recurrent hernias after previous repairs</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Patients wanting minimally invasive approach</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Multiple simultaneous hernias</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Good surgical candidates for complex repair</span>
                    </div>
                </div>
            </div>

            <!-- May Need Alternative -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border-t-4 border-amber-600">
                <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                    <span class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center">
                        <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </span>
                    May Require Alternative
                </h3>
                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-amber-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Very high-risk surgical patients</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-amber-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Emergency strangulated hernia</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-amber-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Severe adhesions from multiple surgeries</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-amber-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Very small, simple hernias (standard TEP/TAPP preferred)</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-amber-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-700">Significant bowel involvement requiring resection</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <p class="text-slate-600 max-w-2xl mx-auto">
                <strong>The right technique depends on your individual case.</strong> Dr. Kumar will conduct a thorough evaluation including physical examination and imaging studies to determine the optimal surgical approach for your hernia.
            </p>
        </div>
    </div>
</section>

<!-- Recovery -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Healing Journey</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                eTEP Recovery Expectations
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Recovery from eTEP is typically longer than standard laparoscopic hernia repair due to the complexity of the procedure, but still significantly faster than open abdominal wall reconstruction.
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-6 mb-12">
            <div class="bg-brand-50 rounded-2xl p-6 text-center border-t-4 border-brand-700">
                <span class="text-xs font-bold text-brand-700 uppercase tracking-wider">Week 1</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Hospital Stay</h3>
                <p class="text-sm text-slate-600">1-3 day hospital stay typical. Pain management and initial mobility.</p>
            </div>

            <div class="bg-accent/10 rounded-2xl p-6 text-center border-t-4 border-accent">
                <span class="text-xs font-bold text-accent uppercase tracking-wider">Weeks 2-3</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Home Recovery</h3>
                <p class="text-sm text-slate-600">Rest at home. Light walking. Pain gradually decreasing. No work.</p>
            </div>

            <div class="bg-green-50 rounded-2xl p-6 text-center border-t-4 border-green-600">
                <span class="text-xs font-bold text-green-600 uppercase tracking-wider">Weeks 4-6</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Gradual Return</h3>
                <p class="text-sm text-slate-600">Desk work OK. Light activities. Continued healing of abdominal wall.</p>
            </div>

            <div class="bg-purple-50 rounded-2xl p-6 text-center border-t-4 border-purple-600">
                <span class="text-xs font-bold text-purple-600 uppercase tracking-wider">Weeks 6-8+</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Full Recovery</h3>
                <p class="text-sm text-slate-600">Return to all activities including heavy lifting and exercise.</p>
            </div>
        </div>

        <!-- Special Instructions -->
        <div class="bg-slate-50 rounded-2xl p-8 border border-slate-200">
            <h3 class="text-xl font-bold text-slate-900 mb-6">eTEP Recovery Special Considerations</h3>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-semibold text-slate-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        Important for Best Results
                    </h4>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Wear abdominal binder as directed (typically 4-6 weeks)</li>
                        <li>Avoid core exercises for at least 8 weeks</li>
                        <li>Sleep with head elevated initially to reduce tension</li>
                        <li>Report any unusual swelling or bulge immediately</li>
                        <li>Maintain healthy weight to reduce stress on repair</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        Warning Signs - Contact Immediately
                    </h4>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>High fever (>101F) or chills</li>
                        <li>Increasing redness, warmth, or drainage from incision</li>
                        <li>New bulge appearing at surgical site</li>
                        <li>Severe pain not relieved by medication</li>
                        <li>Difficulty breathing or chest pain</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-24 bg-gradient-to-br from-brand-900 via-brand-800 to-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-6">
            Do You Have a Complex Hernia?
        </h2>
        <p class="text-lg text-slate-200 leading-relaxed mb-8 max-w-2xl mx-auto">
            Dr. Kumar specializes in advanced hernia reconstruction including eTEP. If you've been told your hernia is too complex, schedule a consultation.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Book Consultation
            </a>
            <a href="treatment/recovery.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition">
                View Recovery Guide
            </a>
        </div>
    </div>
</section>

<!-- Floating Call Button -->
<a href="tel:<?= $site['phone_link'] ?>" class="fixed bottom-6 right-6 z-50 group" aria-label="Call Dr. Kumar">
    <div class="relative flex items-center">
        <div class="absolute right-full mr-3 bg-white rounded-xl shadow-2xl p-4 whitespace-nowrap opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-x-2 group-hover:translate-x-0">
            <p class="font-bold text-slate-900"><?= $site['phone'] ?></p>
            <p class="text-sm text-slate-500">Tap to call</p>
        </div>
        <div class="w-14 h-14 bg-gradient-to-r from-brand-600 to-brand-700 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
            <svg class="w-6 h-6 text-white animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
        </div>
    </div>
</a>

<?php require __DIR__ . '/../includes/footer.php'; ?>
