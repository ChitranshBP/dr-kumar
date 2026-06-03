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
            <span class="text-accent font-medium">Recurrent Hernia</span>
        </nav>

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Re-operation Case
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                Recurrent <span class="text-accent">Hernia</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                A recurrent hernia is one that returns at the same site after a previous hernia repair. It is a complex problem requiring specialist evaluation and often an advanced surgical approach.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg shadow-accent/20 hover:scale-105">
                    Book Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="#about" class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur text-white font-bold px-7 py-3.5 rounded-full border border-white/30 transition duration-300 hover:scale-105">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-100 px-3.5 py-1.5 rounded-full inline-block mb-4">Understanding</span>
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mb-6 leading-tight">
                    What is a Recurrent Hernia?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5 text-lg">
                    A recurrent hernia occurs when a hernia that has been previously repaired &mdash; either by open or laparoscopic technique &mdash; returns at the same anatomical site. It may appear weeks, months, or even years after the original surgery.
                </p>
                <p class="text-slate-600 leading-relaxed mb-8 text-base">
                    Recurrence is one of the most challenging scenarios in hernia surgery. The previously operated tissue is scarred, anatomy is altered, and the optimal plane for mesh placement has already been used. Choosing a specialist with experience in re-operative abdominal wall reconstruction is critical to a durable outcome.
                </p>

                <div class="border-t border-slate-200/80 pt-8">
                    <h3 class="font-bold text-xl text-slate-900 mb-6">Key Characteristics</h3>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-sm flex items-start gap-3.5">
                            <div class="w-8 h-8 rounded-xl bg-brand-50 flex items-center justify-center shrink-0 text-brand-700 border border-brand-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm mb-1">Returns at Same Site</h4>
                                <p class="text-xs text-slate-500 leading-relaxed">Bulge re-appears in the area of a previous hernia repair.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-sm flex items-start gap-3.5">
                            <div class="w-8 h-8 rounded-xl bg-brand-50 flex items-center justify-center shrink-0 text-brand-700 border border-brand-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm mb-1">Variable Timing</h4>
                                <p class="text-xs text-slate-500 leading-relaxed">Recurrence may be early (within weeks) or late (years after original repair).</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-sm flex items-start gap-3.5">
                            <div class="w-8 h-8 rounded-xl bg-brand-50 flex items-center justify-center shrink-0 text-brand-700 border border-brand-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm mb-1">Scarred Tissue</h4>
                                <p class="text-xs text-slate-500 leading-relaxed">Prior surgery creates fibrosis and altered anatomy that complicates re-operation.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-sm flex items-start gap-3.5">
                            <div class="w-8 h-8 rounded-xl bg-brand-50 flex items-center justify-center shrink-0 text-brand-700 border border-brand-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm mb-1">Higher Re-Recurrence Risk</h4>
                                <p class="text-xs text-slate-500 leading-relaxed">Each subsequent repair carries a higher failure rate than the last.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="rounded-3xl overflow-hidden bg-white shadow-xl border border-slate-100 p-4 aspect-[4/3]">
                    <img src="<?= $base_path ?>assets/images/incisional-new.png" alt="Recurrent Hernia anatomy" class="w-full h-full object-cover rounded-2xl">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Signs & Symptoms Section -->
<section class="py-16 md:py-24 bg-gradient-to-b from-white via-slate-50 to-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Recognition
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Signs &amp; <span class="text-brand-700">Symptoms</span>
            </h2>
            <p class="text-slate-600 text-lg">Recurrence can present with the same symptoms as the original hernia, sometimes with a different pattern.</p>
        </div>

        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-slate-100 aspect-[3/4]">
                    <img src="<?= $base_path ?>assets/images/doctor.png" alt="Recurrent Hernia Consultation" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/40 via-transparent to-transparent"></div>
                </div>
                <div class="absolute -bottom-6 -right-6 md:right-4 bg-white rounded-2xl shadow-xl p-5 border border-slate-100 max-w-xs hover:scale-105 transition duration-300">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 flex items-center justify-center text-brand-700 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Specialist Referral</p>
                            <p class="text-sm font-bold text-slate-900 mt-0.5">Recurrent hernias need evaluation by an abdominal wall reconstruction expert.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7">
                <div class="grid sm:grid-cols-2 gap-6">
                    <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center text-brand-700 mb-4 border border-brand-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Reappearance of Bulge</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">A new or returning bulge at or near the site of a previous hernia repair.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center text-brand-700 mb-4 border border-brand-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Pain at Scar Site</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Aching, pulling, or burning pain localised to the area of the previous incision.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center text-brand-700 mb-4 border border-brand-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Sensation of Looseness</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">A feeling that the previous repair has loosened or given way at one edge.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center text-brand-700 mb-4 border border-brand-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Discomfort on Coughing</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Pain or visible bulge on coughing, lifting, or straining &mdash; as with a primary hernia.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center text-brand-700 mb-4 border border-brand-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Recurrence at Edge of Mesh</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">A new defect can form at the edge of the previously placed mesh &mdash; the most common site.</p>
                    </div>

                    <div class="bg-rose-50 rounded-2xl p-6 border border-rose-100 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 rounded-xl bg-rose-500 flex items-center justify-center text-white mb-4 shadow-md shadow-rose-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <h3 class="font-bold text-lg text-rose-950 mb-2">Emergency Signs</h3>
                        <p class="text-rose-800 text-sm leading-relaxed font-semibold">Sudden severe pain, redness, or non-reducible bulge requires urgent medical attention.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Treatment Section -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Treatment
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Treatment <span class="text-brand-700">Approaches</span>
            </h2>
            <p class="text-slate-600 text-lg">A recurrent hernia almost always requires surgery; the technique is chosen based on the previous repair and current anatomy.</p>
        </div>

        <div class="grid sm:grid-cols-3 gap-6">
            <div class="bg-white rounded-3xl p-8 text-center border border-slate-100 shadow-sm hover:shadow-lg transition duration-300 flex flex-col justify-between items-center">
                <div>
                    <div class="w-16 h-16 rounded-full bg-brand-50 flex items-center justify-center mx-auto mb-6 text-brand-700 border border-brand-100">
                        <span class="text-2xl font-bold">1</span>
                    </div>
                    <h3 class="font-bold text-2xl text-slate-900 mb-3">CT Mapping</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">
                        A contrast CT scan of the abdominal wall is essential to define the defect, the existing mesh, and the surrounding tissue quality before any re-operation.
                    </p>
                </div>
                <span class="inline-flex items-center gap-2 px-4 py-2 bg-slate-50 text-slate-700 rounded-full text-xs font-bold border border-slate-200">
                    First step always
                </span>
            </div>

            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-3xl p-8 text-center border border-brand-100 shadow-sm hover:shadow-lg transition duration-300 flex flex-col justify-between items-center">
                <div>
                    <div class="w-16 h-16 rounded-full bg-brand-700 flex items-center justify-center mx-auto mb-6 text-white shadow-md shadow-brand-100">
                        <span class="text-2xl font-bold">2</span>
                    </div>
                    <h3 class="font-bold text-2xl text-slate-900 mb-3">Laparoscopic / Robotic</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 font-medium">
                        If the previous repair was open, a minimally invasive approach using a different anatomical plane avoids scar tissue and allows wide mesh overlap.
                    </p>
                </div>
                <span class="inline-flex items-center gap-2 px-4 py-2 bg-brand-100 text-brand-700 rounded-full text-xs font-bold border border-brand-200">
                    Most common re-do approach
                </span>
            </div>

            <div class="bg-white rounded-3xl p-8 text-center border border-slate-100 shadow-sm hover:shadow-lg transition duration-300 flex flex-col justify-between items-center">
                <div>
                    <div class="w-16 h-16 rounded-full bg-brand-50 flex items-center justify-center mx-auto mb-6 text-brand-700 border border-brand-100">
                        <span class="text-2xl font-bold">3</span>
                    </div>
                    <h3 class="font-bold text-2xl text-slate-900 mb-3">Open AWR (TAR)</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">
                        For large or multiply recurrent defects, open abdominal wall reconstruction with transversus abdominis release (TAR) and component separation offers durable repair.
                    </p>
                </div>
                <span class="inline-flex items-center gap-2 px-4 py-2 bg-slate-50 text-slate-700 rounded-full text-xs font-bold border border-slate-200">
                    For complex cases
                </span>
            </div>
        </div>

        <!-- Premium Showcase Banner -->
        <div class="mt-16 bg-gradient-to-br from-brand-900 to-slate-950 rounded-3xl p-8 lg:p-12 shadow-2xl relative overflow-hidden border border-white/10 text-white">
            <div class="absolute inset-0 opacity-5 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
            <div class="relative grid lg:grid-cols-12 gap-8 lg:gap-12 items-center z-10">
                <div class="lg:col-span-5">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] border border-white/10 shadow-2xl">
                        <img src="<?= $base_path ?>assets/images/laparoscopic-precision.png" alt="Robotic recurrent hernia repair" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="lg:col-span-7">
                    <span class="inline-flex items-center gap-1.5 bg-accent/20 border border-accent/30 text-accent px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                        Specialist Approach
                    </span>
                    <h3 class="font-display text-2xl lg:text-3xl font-bold mb-4 text-white">
                        Robotic Repair for Recurrent Hernia
                    </h3>
                    <p class="text-slate-300 text-sm leading-relaxed mb-6">
                        For recurrent hernias, Dr. Kumar often uses the robotic platform to access fresh tissue planes away from the previous scar. This allows placement of a large, well-overlapping mesh with significantly lower re-recurrence rates &mdash; even after multiple prior repairs. The 3D vision and wristed instruments are particularly valuable in re-operative anatomy.
                    </p>
                    <div class="grid grid-cols-2 gap-4 text-xs font-semibold text-slate-200">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                            <span>Access to fresh tissue planes</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                            <span>Wider mesh overlap possible</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Complications Section -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Risks
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Potential <span class="text-brand-700">Complications</span>
            </h2>
            <p class="text-slate-600 text-lg">Untreated recurrent hernias grow over time and carry progressively higher surgical risk.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Enlargement Over Time</h3>
                <p class="text-slate-600 text-sm">A small recurrent defect will usually grow, making later repair more difficult and increasing complication risk.</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Strangulation Risk</h3>
                <p class="text-slate-600 text-sm">Recurrent hernias are at the same risk of strangulation as primary hernias &mdash; and may strangulate more easily through scarred tissue.</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-2">Mesh Infection</h3>
                <p class="text-slate-600 text-sm">Previous mesh that becomes exposed to bowel or skin during a recurrence can lead to chronic infection requiring mesh removal.</p>
            </div>
        </div>
    </div>
</section>

<!-- When to Repair Section -->
<section class="py-16 md:py-24 bg-brand-950 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-1.5 rounded-full text-sm font-medium mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Why Surgery?
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold mb-4">
                When <span class="text-accent">Re-Repair is Needed</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-8">
                <h3 class="font-bold text-xl mb-6">Indications for Re-Operation</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Symptomatic recurrent hernia with pain or bulge</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Increasing size on serial imaging</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Failed previous mesh repair with edge recurrence</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Incarceration, strangulation, or obstruction</span>
                    </div>
                </div>
            </div>
            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-8">
                <h3 class="font-bold text-xl mb-6">Surgical Approach</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-brand-400 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Switch to a different anatomical plane from the prior repair</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-brand-400 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Larger mesh overlap (typically 5&ndash;8 cm in all directions)</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-brand-400 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Robotic or laparoscopic approach preferred when feasible</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-brand-400 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-slate-300">Open AWR (TAR) reserved for large or multiply recurrent defects</span>
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
        <span class="text-accent text-xs font-bold uppercase tracking-wider bg-white/10 px-4 py-1.5 rounded-full mb-4 inline-block border border-white/10">Specialist Consultation</span>
        <h2 class="font-display text-3xl md:text-5xl font-bold mb-6">
            A Recurrent Hernia Deserves a Specialist Opinion
        </h2>
        <p class="text-lg text-slate-300 leading-relaxed mb-8 max-w-2xl mx-auto">
            Book an appointment with Dr. Kumar for a CT-based evaluation and a tailored plan for durable re-repair.
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
