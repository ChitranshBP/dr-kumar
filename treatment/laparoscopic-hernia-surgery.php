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
                Minimally Invasive Surgery
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                Laparoscopic<br>
                <span class="text-accent">Hernia Surgery</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Advanced minimally invasive techniques for hernia repair with less pain, smaller scars, and faster recovery. Dr. Kumar specializes in laparoscopic approaches.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#what-is-laparoscopic" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
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

<!-- What is Laparoscopic Hernia Repair -->
<section id="what-is-laparoscopic" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Understanding the Procedure</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    What is Laparoscopic Hernia Repair?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    Laparoscopic hernia repair is a minimally invasive surgical technique where the surgeon makes several small incisions (usually 0.5-1 cm) instead of one large incision. A laparoscope (a thin tube with a camera) is inserted through one of the incisions, providing a magnified view of the surgical area on a monitor.
                </p>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Specialized instruments are inserted through the other incisions to repair the hernia. A synthetic mesh is typically placed over the hernia defect and secured with sutures, staples, or tackers to reinforce the abdominal wall.
                </p>

                <div class="bg-brand-50 rounded-2xl p-6 border border-brand-100">
                    <h3 class="font-bold text-slate-900 mb-3">Key Advantages</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">Small, barely visible scars</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">Less post-operative pain</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <span class="text-slate-700">Faster return to daily activities</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                <h3 class="text-xl font-bold text-slate-900 mb-6">Types of Laparoscopic Approaches</h3>
                <div class="space-y-4">
                    <div class="bg-white rounded-xl p-5 shadow-sm border border-slate-100">
                        <h4 class="font-semibold text-slate-900 mb-2">TEP (Totally Extraperitoneal)</h4>
                        <p class="text-sm text-slate-600">The mesh is placed without entering the abdominal cavity, reducing risk of adhesions.</p>
                        <a href="treatment/tep-repair.php" class="inline-flex items-center gap-1 text-brand-700 text-sm font-semibold mt-3 hover:text-brand-800">
                            Learn about TEP
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                    <div class="bg-white rounded-xl p-5 shadow-sm border border-slate-100">
                        <h4 class="font-semibold text-slate-900 mb-2">TAPP (Transabdominal Preperitoneal)</h4>
                        <p class="text-sm text-slate-600">The peritoneum is opened to place the mesh, allowing visualization of the entire abdominal cavity.</p>
                        <a href="treatment/tapp-repair.php" class="inline-flex items-center gap-1 text-brand-700 text-sm font-semibold mt-3 hover:text-brand-800">
                            Learn about TAPP
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                    <div class="bg-white rounded-xl p-5 shadow-sm border border-slate-100">
                        <h4 class="font-semibold text-slate-900 mb-2">eTEP (extended View-Expanding)</h4>
                        <p class="text-sm text-slate-600">Advanced technique for complex hernias, allowing extended working space beyond traditional laparoscopy.</p>
                        <a href="treatment/etep-repair.php" class="inline-flex items-center gap-1 text-brand-700 text-sm font-semibold mt-3 hover:text-brand-800">
                            Learn about eTEP
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Over Open Surgery -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Why Choose Laparoscopic?</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Benefits Over Open Surgery
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Laparoscopic hernia repair offers significant advantages compared to traditional open surgery, making it the preferred choice for most patients.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-100 to-brand-50 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Smaller Incisions</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Only 3 small keyhole incisions (0.5-1 cm) compared to a 3-6 inch incision in open surgery. Results in minimal scarring.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-green-100 to-green-50 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Faster Recovery</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Most patients return to normal activities within 1-2 weeks, compared to 3-6 weeks with open surgery.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-accent/20 to-amber-50 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Less Pain</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Minimally invasive approach means less tissue damage, resulting in significantly less post-operative pain.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-100 to-purple-50 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Day Care Surgery</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Many laparoscopic hernia repairs are performed as day surgery, allowing you to go home the same day.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-100 to-blue-50 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Lower Infection Risk</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Smaller incisions mean less exposure of internal tissues, reducing the risk of surgical site infections.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-100 to-pink-50 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Bilateral Repair</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Both sides of the groin can be repaired through the same small incisions in one surgery.
                </p>
            </div>
        </div>

        <!-- Visual Comparison -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden">
            <div class="p-6 border-b border-slate-100 bg-slate-50">
                <h3 class="text-xl font-bold text-slate-900">Visual Comparison: Laparoscopic vs Open</h3>
            </div>
            <div class="grid md:grid-cols-2">
                <div class="p-8 border-r border-slate-100">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-accent flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900">Laparoscopic</h4>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">3 small keyhole incisions</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">Day surgery or 1-night stay</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">1-2 weeks recovery</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">Minimal post-op pain</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-700">Excellent cosmetic result</span>
                        </div>
                    </div>
                </div>
                <div class="p-8 bg-slate-50">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-slate-400 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900">Open Surgery</h4>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-slate-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-600">Single 3-6 inch incision</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-slate-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-600">1-3 day hospital stay</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-slate-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-600">3-6 weeks recovery</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-slate-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-600">Moderate to significant pain</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-slate-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            <span class="text-slate-600">More visible scar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Procedure Steps -->
<section id="procedure" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">The Procedure</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                How Laparoscopic Hernia Repair Works
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Understanding the procedure can help ease any anxiety about surgery. Here's what happens during laparoscopic hernia repair.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="relative">
                <div class="bg-gradient-to-br from-brand-700 to-brand-600 rounded-2xl p-6 text-white h-full">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20 text-white font-bold text-lg mb-4">1</span>
                    <h3 class="text-lg font-bold mb-2">Anesthesia</h3>
                    <p class="text-sm text-brand-100 leading-relaxed">
                        General anesthesia is administered, so you'll be asleep and pain-free throughout the procedure.
                    </p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-3 transform -translate-y-1/2">
                    <svg class="w-6 h-6 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                </div>
            </div>

            <div class="relative">
                <div class="bg-gradient-to-br from-accent to-amber-500 rounded-2xl p-6 text-white h-full">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20 text-white font-bold text-lg mb-4">2</span>
                    <h3 class="text-lg font-bold mb-2">Incisions</h3>
                    <p class="text-sm text-amber-100 leading-relaxed">
                        Three small incisions (5-10mm each) are made in the abdomen. Carbon dioxide gas inflates the abdomen for better visibility.
                    </p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-3 transform -translate-y-1/2">
                    <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                </div>
            </div>

            <div class="relative">
                <div class="bg-gradient-to-br from-green-600 to-green-500 rounded-2xl p-6 text-white h-full">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20 text-white font-bold text-lg mb-4">3</span>
                    <h3 class="text-lg font-bold mb-2">Repair</h3>
                    <p class="text-sm text-green-100 leading-relaxed">
                        The laparoscope guides the surgeon to gently push the hernia back and place a sterile mesh over the defect.
                    </p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-3 transform -translate-y-1/2">
                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                </div>
            </div>

            <div>
                <div class="bg-gradient-to-br from-purple-600 to-purple-500 rounded-2xl p-6 text-white h-full">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20 text-white font-bold text-lg mb-4">4</span>
                    <h3 class="text-lg font-bold mb-2">Closure</h3>
                    <p class="text-sm text-purple-100 leading-relaxed">
                        The mesh is secured, gas is released, and small incisions are closed with sutures or surgical glue.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-12 bg-brand-50 rounded-2xl p-8 border border-brand-100">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <div class="w-16 h-16 rounded-full bg-brand-700 flex items-center justify-center shrink-0">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div class="text-center md:text-left flex-1">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Duration of Surgery</h3>
                    <p class="text-slate-600">The procedure typically takes 30-90 minutes depending on the type and complexity of hernia. Most patients spend 2-4 hours in the hospital including recovery time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recovery Timeline -->
<section id="recovery" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Healing Journey</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Laparoscopic Hernia Repair Recovery Timeline
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Recovery from laparoscopic hernia repair is typically faster and more comfortable than open surgery. Here's what to expect.
            </p>
        </div>

        <!-- Timeline Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-brand-700">
                <span class="text-xs font-bold text-brand-700 uppercase tracking-wider">Day 1-3</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Initial Recovery</h3>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Mild pain at incision sites</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Rest but walk regularly</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Same-day or next-day discharge</span>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-accent">
                <span class="text-xs font-bold text-accent uppercase tracking-wider">Week 1</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">At Home</h3>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Resume light activities</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Avoid lifting >5 kg</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Desk work acceptable</span>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-green-600">
                <span class="text-xs font-bold text-green-600 uppercase tracking-wider">Weeks 2-4</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Building Strength</h3>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-green-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Light exercise OK</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-green-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Most restrictions lifted</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-green-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Normal daily activities</span>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-purple-600">
                <span class="text-xs font-bold text-purple-600 uppercase tracking-wider">Weeks 4-6</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Full Recovery</h3>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-purple-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Heavy lifting OK</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-purple-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Return to exercise</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-purple-600 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>Complete healing</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Key Points -->
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-slate-100">
            <h3 class="text-xl font-bold text-slate-900 mb-6">Important Recovery Notes</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Do's
                    </h4>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Walk regularly to promote circulation</li>
                        <li>Keep the incision site clean and dry</li>
                        <li>Follow surgeon's instructions on wound care</li>
                        <li>Attend follow-up appointments</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                        <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                        Don'ts
                    </h4>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Lift heavy objects (above 5-10 kg) for 4-6 weeks</li>
                        <li>Engage in strenuous exercise</li>
                        <li>Drive while on pain medication</li>
                        <li>Soak in baths or swim until cleared</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison with Other Techniques -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Making the Choice</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Choosing the Right Technique
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Dr. Kumar will recommend the most suitable approach based on your specific condition. Here's how laparoscopic repair compares to other techniques.
            </p>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full min-w-[700px] bg-white rounded-2xl shadow-lg overflow-hidden">
                <thead class="bg-gradient-to-r from-brand-700 to-brand-600 text-white">
                    <tr>
                        <th class="px-6 py-4 text-left font-semibold">Technique</th>
                        <th class="px-6 py-4 text-left font-semibold">Best For</th>
                        <th class="px-6 py-4 text-left font-semibold">Recovery</th>
                        <th class="px-6 py-4 text-left font-semibold">Scarring</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-brand-50">
                        <td class="px-6 py-4 font-medium text-slate-900">Laparoscopic (Standard)</td>
                        <td class="px-6 py-4 text-sm text-slate-600">Most primary hernias, bilateral repairs</td>
                        <td class="px-6 py-4 text-sm text-slate-600">1-2 weeks</td>
                        <td class="px-6 py-4 text-sm text-slate-600">3 small keyholes</td>
                    </tr>
                    <tr class="hover:bg-brand-50 bg-brand-50/50">
                        <td class="px-6 py-4 font-medium text-brand-700">TEP</td>
                        <td class="px-6 py-4 text-sm text-slate-600">Groin hernias, patients wanting to avoid peritoneal entry</td>
                        <td class="px-6 py-4 text-sm text-slate-600">1-2 weeks</td>
                        <td class="px-6 py-4 text-sm text-slate-600">3 small keyholes</td>
                    </tr>
                    <tr class="hover:bg-brand-50">
                        <td class="px-6 py-4 font-medium text-slate-900">TAPP</td>
                        <td class="px-6 py-4 text-sm text-slate-600">Hernias requiring full pelvic inspection</td>
                        <td class="px-6 py-4 text-sm text-slate-600">1-2 weeks</td>
                        <td class="px-6 py-4 text-sm text-slate-600">3 small keyholes</td>
                    </tr>
                    <tr class="hover:bg-brand-50">
                        <td class="px-6 py-4 font-medium text-slate-900">eTEP</td>
                        <td class="px-6 py-4 text-sm text-slate-600">Complex, large, or recurrent hernias</td>
                        <td class="px-6 py-4 text-sm text-slate-600">2-4 weeks</td>
                        <td class="px-6 py-4 text-sm text-slate-600">Small keyholes</td>
                    </tr>
                    <tr class="hover:bg-brand-50">
                        <td class="px-6 py-4 font-medium text-slate-900">Open Repair</td>
                        <td class="px-6 py-4 text-sm text-slate-600">Very large hernias, patients not candidates for laparoscopy</td>
                        <td class="px-6 py-4 text-sm text-slate-600">3-6 weeks</td>
                        <td class="px-6 py-4 text-sm text-slate-600">Single larger incision</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-24 bg-gradient-to-br from-brand-900 via-brand-800 to-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-6">
            Is Laparoscopic Hernia Repair Right for You?
        </h2>
        <p class="text-lg text-slate-200 leading-relaxed mb-8 max-w-2xl mx-auto">
            Dr. Kumar will evaluate your condition and recommend the most suitable surgical approach for optimal outcomes.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Book Consultation
            </a>
            <a href="treatment/mesh-repair.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition">
                Learn About Mesh Repair
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
