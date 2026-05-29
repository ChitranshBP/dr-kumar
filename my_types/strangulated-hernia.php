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
            <span class="text-accent font-medium">Strangulated Hernia</span>
        </nav>

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-red-500/30 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-red-500/50 shadow-sm">
                <span class="w-2 h-2 bg-red-400 rounded-full animate-pulse"></span>
                Medical Emergency
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-6">
                Strangulated <span class="text-red-400">Hernia</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                A life-threatening complication requiring immediate medical attention. When blood supply to herniated tissue is cut off, emergency surgery is essential.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-red-500 hover:bg-red-600 text-white font-bold px-7 py-3.5 rounded-full transition duration-300 shadow-lg hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    Call Emergency Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- What is Strangulated Hernia -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm bg-brand-100 px-3.5 py-1.5 rounded-full inline-block mb-4">Understanding</span>
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mb-6 leading-tight">
                    What is a Strangulated Hernia?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5 text-lg">
                    A strangulated hernia occurs when the blood supply to tissue trapped in a hernia is completely cut off. Without blood flow, the tissue begins to die, leading to a life-threatening medical emergency.
                </p>
                <p class="text-slate-600 leading-relaxed mb-6 text-base">
                    This can happen with any type of hernia but is more common with femoral hernias and incisional hernias. Once strangulation occurs, surgery within hours is essential to prevent tissue death and serious complications.
                </p>
                
                <!-- Emergency Alert Card -->
                <div class="p-5 bg-rose-50 rounded-2xl border border-rose-100 shadow-sm mb-8">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-rose-500 flex items-center justify-center shrink-0 text-white shadow-md shadow-rose-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <div>
                            <p class="text-base text-rose-950 font-bold mb-1">Time is Critical</p>
                            <p class="text-sm text-rose-800 leading-relaxed font-semibold">Strangulation can lead to tissue death, bowel obstruction, sepsis, and death if not treated surgically within 6 hours.</p>
                        </div>
                    </div>
                </div>

                <div class="border-t border-slate-200/80 pt-8">
                    <h3 class="font-bold text-xl text-slate-900 mb-6">Why Immediate Surgery is Needed</h3>
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition duration-300">
                            <div class="w-10 h-10 rounded-xl bg-rose-50 flex items-center justify-center text-rose-600 mb-4 border border-rose-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 text-sm mb-2">Tissue Death</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">Without blood supply, tissues die within hours, which may require extensive bowel resection surgery.</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition duration-300">
                            <div class="w-10 h-10 rounded-xl bg-rose-50 flex items-center justify-center text-rose-600 mb-4 border border-rose-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 text-sm mb-2">Bowel Obstruction</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">Strangulated intestines can lead to a complete digestive blockage causing severe nausea and swelling.</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition duration-300">
                            <div class="w-10 h-10 rounded-xl bg-rose-50 flex items-center justify-center text-rose-600 mb-4 border border-rose-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 text-sm mb-2">Sepsis Risk</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">Dead tissue releases dangerous toxins into the bloodstream, triggering life-threatening systemic sepsis.</p>
                        </div>
                        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition duration-300">
                            <div class="w-10 h-10 rounded-xl bg-rose-50 flex items-center justify-center text-rose-600 mb-4 border border-rose-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 0 0-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 text-sm mb-2">Mortality Risk</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">Any delay in treatment significantly increases systemic toxicity and patient mortality risk.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-5">
                <div class="rounded-3xl overflow-hidden bg-white shadow-xl border border-slate-100 p-4 aspect-[4/3]">
                    <img src="<?= $base_path ?>assets/images/hernia-surgery-new.png" alt="Strangulated Hernia anatomy" class="w-full h-full object-cover rounded-2xl">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Warning Signs Section -->
<section class="py-16 md:py-24 bg-gradient-to-b from-white via-slate-50 to-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-rose-100 text-rose-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-rose-700"></span>
                Warning Signs
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Recognize the <span class="text-rose-600">Warning Signs</span>
            </h2>
            <p class="text-slate-600 text-lg">Seek immediate medical help if you experience any of these emergency symptoms.</p>
        </div>

        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <!-- Doctor Column on the Left -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-slate-100 aspect-[3/4]">
                    <img src="<?= $base_path ?>assets/images/doctor.png" alt="Emergency Consultation" class="w-full h-full object-cover">
                    <!-- Subtle Dark Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/40 via-transparent to-transparent"></div>
                </div>
                <!-- Floating Info Badge -->
                <div class="absolute -bottom-6 -right-6 md:right-4 bg-white rounded-2xl shadow-xl p-5 border border-slate-100 max-w-xs hover:scale-105 transition duration-300">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-rose-50 flex items-center justify-center text-rose-600 shrink-0 border border-rose-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-rose-600 font-bold uppercase tracking-wider">Seek Immediate Care</p>
                            <p class="text-sm font-bold text-slate-900 mt-0.5">Strangulated hernias require surgical intervention without delay.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emergency Signs on the Right -->
            <div class="lg:col-span-7">
                <div class="grid sm:grid-cols-2 gap-6">
                    <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 flex items-center justify-center text-rose-600 mb-4 border border-rose-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Severe Sudden Pain</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Intense, sudden pain at the hernia site that may spread to the entire abdomen rapidly.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 flex items-center justify-center text-rose-600 mb-4 border border-rose-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Red or Dark Bulge</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">The hernia bulge becomes red, purple, or dark colored, indicating trapped tissues are losing blood flow.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 flex items-center justify-center text-rose-600 mb-4 border border-rose-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Fever & Chills</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">High body temperature indicating infection, local toxicity, or active tissue necrotization.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 flex items-center justify-center text-rose-600 mb-4 border border-rose-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Nausea & Vomiting</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Inability to digest, pass gas, or pass stool, accompanied by sudden or repetitive vomiting.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 flex items-center justify-center text-rose-600 mb-4 border border-rose-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Unable to Reduce</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">A previously flexible or reducible hernia bulge can no longer be gently pushed back into the abdomen.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 flex items-center justify-center text-rose-600 mb-4 border border-rose-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Abdominal Swelling</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">The abdomen becomes swollen, tight, hard, and painful, indicating a progressive bowel blockage.</p>
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
                Emergency Treatment
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Surgical <span class="text-brand-700">Intervention</span>
            </h2>
            <p class="text-slate-600 text-lg">Strangulated hernia requires emergency surgery to restore blood supply and prevent tissue death.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-3xl p-8 lg:p-10 border border-brand-100 hover:shadow-xl transition duration-300">
                <div class="w-16 h-16 rounded-2xl bg-brand-700 flex items-center justify-center mb-6 shadow-md shadow-brand-100">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-2xl text-slate-900 mb-4">Emergency Surgery</h3>
                <p class="text-slate-600 leading-relaxed mb-6 text-base font-medium">
                    Immediate surgical intervention is required to restore blood flow to the trapped tissue. The surgeon will remove any dead tissue and repair the hernia with mesh reinforcement.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Performed on emergency basis
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        May require bowel resection
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Hospital stay required
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        IV antibiotics administered
                    </li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-slate-50 to-slate-100 rounded-3xl p-8 lg:p-10 border border-slate-200 hover:shadow-xl transition duration-300">
                <div class="w-16 h-16 rounded-2xl bg-brand-800 flex items-center justify-center mb-6 shadow-md shadow-slate-100">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-2xl text-slate-900 mb-4">Recovery Process</h3>
                <p class="text-slate-600 leading-relaxed mb-6 text-base font-medium">
                    Recovery from emergency strangulated hernia surgery is longer than elective surgery due to the complexity of the procedure and tissue involvement.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Extended hospital stay (5-10 days)
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Longer recovery period (6-8 weeks)
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        IV antibiotics for infection prevention
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 text-sm">
                        <svg class="w-4 h-4 text-brand-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Close monitoring for complications
                    </li>
                </ul>
            </div>
        </div>

        <!-- Premium Showcase Banner -->
        <div class="mt-16 bg-gradient-to-br from-brand-900 to-slate-950 rounded-3xl p-8 lg:p-12 shadow-2xl relative overflow-hidden border border-white/10 text-white">
            <div class="absolute inset-0 opacity-5 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
            <div class="relative grid lg:grid-cols-12 gap-8 lg:gap-12 items-center z-10">
                <div class="lg:col-span-5">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] border border-white/10 shadow-2xl">
                        <img src="<?= $base_path ?>assets/images/wound-care.png" alt="Wound recovery care" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="lg:col-span-7">
                    <span class="inline-flex items-center gap-1.5 bg-rose-500/20 border border-rose-500/30 text-rose-300 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                        Post-Surgical Excellence
                    </span>
                    <h3 class="font-display text-2xl lg:text-3xl font-bold mb-4 text-white">
                        Specialized Care Following Emergency Hernia Repair
                    </h3>
                    <p class="text-slate-300 text-sm leading-relaxed mb-6">
                        Because strangulated hernia surgeries involve compromised tissues, active wound care, careful monitoring, and post-operative support are crucial. Dr. Kumar's clinical team provides dedicated post-operative care, utilizing advanced wound recovery protocols and customized guidelines to ensure secure healing and minimize any risk of infection or recurrence.
                    </p>
                    <div class="grid grid-cols-2 gap-4 text-xs font-semibold text-slate-200">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-rose-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                            <span>Advanced wound care management</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-rose-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                            <span>24/7 recovery support line</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Prevention Section -->
<section class="py-16 md:py-24 bg-brand-950 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-1.5 rounded-full text-sm font-medium mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Prevention
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold mb-4">
                How to <span class="text-accent">Prevent</span> Strangulation
            </h2>
            <p class="text-slate-300 text-lg">Early intervention and lifestyle management can prevent this emergency.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-brand-700/50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Don't Wait</h3>
                <p class="text-slate-400 text-sm leading-relaxed">If you have a hernia, don't wait for symptoms to worsen. Consult a surgeon for evaluation and potential elective repair.</p>
            </div>

            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-brand-700/50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Avoid Straining</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Avoid heavy lifting, chronic coughing, and constipation. These activities increase abdominal pressure and can trigger strangulation.</p>
            </div>

            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-brand-700/50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Know Warning Signs</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Be aware of the symptoms of strangulation. Quick recognition and immediate medical attention can save your life.</p>
            </div>

            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-brand-700/50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Maintain Healthy Weight</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Excess weight increases abdominal pressure and risk of hernia complications. A healthy weight reduces stress on the abdominal wall.</p>
            </div>

            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-brand-700/50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Regular Check-ups</h3>
                <p class="text-slate-400 text-sm leading-relaxed">If you have a known hernia, regular follow-ups with your surgeon help monitor the condition and plan elective repair when needed.</p>
            </div>

            <div class="bg-brand-800/50 backdrop-blur border border-brand-700/30 rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl bg-brand-700/50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Emergency Plan</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Know the nearest emergency room. If warning signs appear, don't delay - go immediately to the nearest hospital.</p>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Contact -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="bg-gradient-to-br from-brand-50 to-cyan-50 rounded-3xl p-8 lg:p-12 border border-brand-100">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    Emergency Care Available
                </h2>
                <p class="text-slate-600 text-lg">
                    If you suspect a strangulated hernia, seek immediate medical attention. Dr. Kumar's team is available for emergency consultations.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="w-16 h-16 rounded-full bg-brand-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </div>
                    <h3 class="font-bold text-xl text-slate-900 mb-2">Call Now</h3>
                    <a href="tel:<?= $site['phone_link'] ?>" class="text-brand-700 font-semibold text-lg hover:text-brand-800"><?= $site['phone'] ?></a>
                </div>
                <div>
                    <div class="w-16 h-16 rounded-full bg-brand-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-xl text-slate-900 mb-2">Location</h3>
                    <p class="text-slate-600"><?= $site['address'] ?></p>
                </div>
                <div>
                    <div class="w-16 h-16 rounded-full bg-brand-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-xl text-slate-900 mb-2">Availability</h3>
                    <p class="text-slate-600">24/7 Emergency Services</p>
                </div>
            </div>
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