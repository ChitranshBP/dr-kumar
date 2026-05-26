<?php
$page_title       = 'TEP Hernia Repair - Totally Extraperitoneal Technique | Dr. Kumar';
$page_description = 'TEP (Totally Extraperitoneal) hernia repair: how it works, benefits, candidacy, and recovery. Learn about this minimally invasive mesh repair technique from Dr. Kumar in Chennai.';
$page_keywords    = 'TEP hernia repair, totally extraperitoneal hernia repair, endoscopic hernia repair, TEP vs TAPP, minimally invasive inguinal hernia, laparoscopic inguinal hernia';
$page_url         = $site['url'] . 'treatment/tep-repair.php';

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
                Minimally Invasive Technique
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                TEP Hernia<br>
                <span class="text-accent">Repair</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Totally Extraperitoneal repair - an advanced laparoscopic approach that avoids entering the abdominal cavity for optimal outcomes.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#how-it-works" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    How TEP Works
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

<!-- What is TEP -->
<section id="what-is-tep" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Understanding TEP</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    What is TEP Hernia Repair?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    TEP stands for <strong>Totally Extraperitoneal</strong> hernia repair. It is an advanced laparoscopic technique where the surgeon works in the space between the abdominal muscles and the peritoneum (the membrane lining the abdominal cavity) without actually entering the peritoneal cavity.
                </p>
                <p class="text-slate-600 leading-relaxed mb-6">
                    This approach allows the hernia to be repaired with mesh while keeping the abdominal cavity untouched, potentially reducing complications related to intra-abdominal surgery.
                </p>

                <div class="bg-brand-50 rounded-2xl p-6 border border-brand-100">
                    <h3 class="font-bold text-slate-900 mb-4">TEP at a Glance</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-3 bg-white rounded-xl">
                            <p class="text-2xl font-bold text-brand-700">30-60</p>
                            <p class="text-xs text-slate-500">Minutes surgery time</p>
                        </div>
                        <div class="text-center p-3 bg-white rounded-xl">
                            <p class="text-2xl font-bold text-brand-700">1-2</p>
                            <p class="text-xs text-slate-500">Weeks recovery</p>
                        </div>
                        <div class="text-center p-3 bg-white rounded-xl">
                            <p class="text-2xl font-bold text-brand-700">3</p>
                            <p class="text-xs text-slate-500">Small incisions</p>
                        </div>
                        <div class="text-center p-3 bg-white rounded-xl">
                            <p class="text-2xl font-bold text-brand-700">99%+</p>
                            <p class="text-xs text-slate-500">Success rate</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                <h3 class="text-xl font-bold text-slate-900 mb-6">Key Distinction: TEP vs TAPP</h3>

                <div class="space-y-4 mb-6">
                    <div class="p-4 bg-white rounded-xl border-l-4 border-brand-700">
                        <h4 class="font-semibold text-brand-700 mb-1">TEP - Outside the Peritoneum</h4>
                        <p class="text-sm text-slate-600">The surgeon works entirely in the preperitoneal space without breaching the peritoneal cavity.</p>
                    </div>
                    <div class="p-4 bg-white rounded-xl border-l-4 border-accent">
                        <h4 class="font-semibold text-accent mb-1">TAPP - Through the Peritoneum</h4>
                        <p class="text-sm text-slate-600">The surgeon enters the peritoneal cavity briefly to place the mesh, then closes the peritoneum.</p>
                    </div>
                </div>

                <div class="bg-brand-50 rounded-xl p-4">
                    <p class="text-sm text-slate-600">
                        <strong>TEP Advantage:</strong> Because TEP doesn't enter the abdominal cavity, there's theoretically lower risk of intra-abdominal organ injury and adhesions.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How TEP Works -->
<section id="how-it-works" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">The Procedure</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                How TEP Repair Works
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Understanding the TEP procedure can help ease any anxiety about surgery. Here's a step-by-step overview.
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-brand-200"></div>

                <div class="space-y-8">
                    <!-- Step 1 -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-700 to-brand-600 flex items-center justify-center shrink-0 z-10 shadow-lg">
                            <span class="text-white font-bold text-xl">1</span>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Anesthesia & Positioning</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                General anesthesia is administered. The patient lies flat on their back with a slight head-down tilt. The surgeon makes a small incision below the umbilicus.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-accent to-amber-500 flex items-center justify-center shrink-0 z-10 shadow-lg">
                            <span class="text-white font-bold text-xl">2</span>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Creating the Workspace</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                A balloon dissector is inserted and inflated to create a working space in the preperitoneal area. Carbon dioxide gas may be used to maintain this space, but without entering the abdominal cavity.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-600 to-green-500 flex items-center justify-center shrink-0 z-10 shadow-lg">
                            <span class="text-white font-bold text-xl">3</span>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Hernia Identification</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                The laparoscope is introduced, and the surgeon visualizes the hernia defect. The hernia sac is gently reduced (pushed back) into the abdomen.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-600 to-purple-500 flex items-center justify-center shrink-0 z-10 shadow-lg">
                            <span class="text-white font-bold text-xl">4</span>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Mesh Placement</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                A mesh is inserted and positioned to cover the hernia defect and surrounding weak area. The mesh is typically self-fixating or secured with tissue glue or absorbable tacks.
                            </p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="relative flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-pink-600 to-pink-500 flex items-center justify-center shrink-0 z-10 shadow-lg">
                            <span class="text-white font-bold text-xl">5</span>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 border border-slate-100">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Closure</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                The instruments are removed, and small incisions are closed with sutures or surgical glue. No drains are typically needed.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits of TEP -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Advantages</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Benefits of TEP Repair
            </h2>
            <p class="text-slate-600 leading-relaxed">
                TEP repair offers several advantages, particularly for inguinal (groin) hernias. Here's why it may be the preferred approach.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-brand-50 to-white rounded-2xl p-6 border border-brand-100">
                <div class="w-14 h-14 rounded-2xl bg-brand-700 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">No Peritoneal Entry</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    By staying outside the peritoneal cavity, TEP avoids risks associated with entering the abdominal space, including bowel injury and adhesions.
                </p>
            </div>

            <div class="bg-gradient-to-br from-accent/10 to-white rounded-2xl p-6 border border-accent/20">
                <div class="w-14 h-14 rounded-2xl bg-accent flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Reduced Chronic Pain</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Some studies suggest TEP may result in less chronic groin pain compared to other techniques due to minimal nerve disturbance.
                </p>
            </div>

            <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 border border-green-100">
                <div class="w-14 h-14 rounded-2xl bg-green-600 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Day Surgery Option</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Many TEP procedures can be performed as outpatient surgery, allowing you to go home the same day with minimal hospital time.
                </p>
            </div>

            <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 border border-purple-100">
                <div class="w-14 h-14 rounded-2xl bg-purple-600 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Excellent Visualization</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    The preperitoneal space provides direct access to the hernia site and surrounding anatomical structures for precise repair.
                </p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 border border-blue-100">
                <div class="w-14 h-14 rounded-2xl bg-blue-600 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Bilateral Repair</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Both sides can be repaired through the same small incisions in one procedure, avoiding additional surgery.
                </p>
            </div>

            <div class="bg-gradient-to-br from-pink-50 to-white rounded-2xl p-6 border border-pink-100">
                <div class="w-14 h-14 rounded-2xl bg-pink-600 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Minimal Scarring</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Three small keyhole incisions result in barely visible scars, providing excellent cosmetic outcomes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Who is a Candidate -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Am I a Candidate?</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    Who is a Candidate for TEP?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-6">
                    TEP is an excellent option for many patients with inguinal hernias. Dr. Kumar will evaluate your specific condition to determine if TEP is the right approach for you.
                </p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Ideal Candidates</h4>
                            <p class="text-sm text-slate-600">Primary (first-time) inguinal hernias, bilateral hernias, younger patients with good tissue quality.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Considered Candidates</h4>
                            <p class="text-sm text-slate-600">Patients with previous lower abdominal surgery may still be candidates depending on the type of prior surgery.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">May Require Alternative</h4>
                            <p class="text-sm text-slate-600">Large irreducible hernias, very complex hernias, or history of multiple abdominal surgeries may require TAPP or open repair.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 border border-slate-100">
                <h3 class="text-xl font-bold text-slate-900 mb-6">Factors Dr. Kumar Considers</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-700 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <span class="text-slate-700">Hernia type and size</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-700 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <span class="text-slate-700">Whether it's primary or recurrent</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-700 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <span class="text-slate-700">Previous abdominal or pelvic surgery</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-700 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <span class="text-slate-700">Overall health and anesthesia fitness</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-700 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <span class="text-slate-700">Patient preference</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-700 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <span class="text-slate-700">Surgeon's expertise and experience</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recovery -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Getting Back to Normal</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                TEP Recovery Timeline
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Recovery from TEP repair is typically quick. Most patients return to normal activities within 1-2 weeks.
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-6 mb-12">
            <div class="bg-brand-50 rounded-2xl p-6 text-center border-t-4 border-brand-700">
                <span class="text-xs font-bold text-brand-700 uppercase tracking-wider">Day 1</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Immediate</h3>
                <p class="text-sm text-slate-600">Mild discomfort at incision sites. Most patients discharged same day or next morning.</p>
            </div>

            <div class="bg-accent/10 rounded-2xl p-6 text-center border-t-4 border-accent">
                <span class="text-xs font-bold text-accent uppercase tracking-wider">Days 2-3</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Rest Period</h3>
                <p class="text-sm text-slate-600">Light activities only. Pain medication as needed. Walking encouraged.</p>
            </div>

            <div class="bg-green-50 rounded-2xl p-6 text-center border-t-4 border-green-600">
                <span class="text-xs font-bold text-green-600 uppercase tracking-wider">Days 4-7</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Gradual Return</h3>
                <p class="text-sm text-slate-600">Most discomfort subsides. May return to desk work. Avoid heavy lifting.</p>
            </div>

            <div class="bg-purple-50 rounded-2xl p-6 text-center border-t-4 border-purple-600">
                <span class="text-xs font-bold text-purple-600 uppercase tracking-wider">Weeks 2+</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Full Activities</h3>
                <p class="text-sm text-slate-600">Return to normal activities including light exercise. Heavy lifting after 4-6 weeks.</p>
            </div>
        </div>

        <div class="bg-slate-50 rounded-2xl p-8 border border-slate-200">
            <h3 class="text-xl font-bold text-slate-900 mb-6">Recovery Tips</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Do's
                    </h4>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Walk regularly to promote healing</li>
                        <li>Keep incision sites clean and dry</li>
                        <li>Wear loose, comfortable clothing</li>
                        <li>Follow activity restrictions provided</li>
                        <li>Attend follow-up appointments</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                        <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                        Don'ts
                    </h4>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Heavy lifting (>5 kg) for 4-6 weeks</li>
                        <li>Strenuous exercise or core workouts</li>
                        <li>Driving while on pain medication</li>
                        <li>Swimming or baths until cleared</li>
                        <li>Ignoring warning signs of complications</li>
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
            Is TEP Repair Right for Your Hernia?
        </h2>
        <p class="text-lg text-slate-200 leading-relaxed mb-8 max-w-2xl mx-auto">
            Dr. Kumar will evaluate your condition and recommend the most appropriate surgical technique for your specific needs.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Book Consultation
            </a>
            <a href="treatment/tapp-repair.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition">
                Compare with TAPP
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
