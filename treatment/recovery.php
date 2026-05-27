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
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Post-Surgery Guide
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                Hernia Surgery<br>
                <span class="text-accent">Recovery Guide</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Everything you need to know about recovering from hernia surgery - from immediate post-op care to returning to normal activities.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#timeline" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    Recovery Timeline
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

<!-- Recovery Timeline -->
<section id="timeline" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Your Healing Journey</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Recovery Timeline
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Recovery varies based on the type of hernia repair performed. Here's a general timeline for laparoscopic and open hernia surgeries.
            </p>
        </div>

        <!-- Laparoscopic Timeline -->
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-accent flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-slate-900">Laparoscopic Hernia Repair</h3>
                    <p class="text-slate-500">TEP, TAPP, eTEP Techniques</p>
                </div>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <div class="relative">
                    <div class="absolute top-8 left-1/2 -translate-x-1/2 w-full h-0.5 bg-brand-200"></div>
                    <div class="bg-brand-50 rounded-2xl p-6 text-center relative z-10 border-t-4 border-brand-700">
                        <div class="w-16 h-16 rounded-full bg-brand-700 text-white flex items-center justify-center mx-auto mb-4 -mt-12">
                            <span class="text-xs font-bold">DAY</span>
                        </div>
                        <span class="text-xs font-bold text-brand-700 uppercase tracking-wider">Days 1-3</span>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 mb-3">Hospital Discharge</h4>
                        <ul class="text-sm text-slate-600 space-y-1 text-left">
                            <li>Mild pain at incision sites</li>
                            <li>Same-day or next-day discharge</li>
                            <li>Walking encouraged</li>
                            <li>Pain medication as needed</li>
                        </ul>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute top-8 left-1/2 -translate-x-1/2 w-full h-0.5 bg-brand-200"></div>
                    <div class="bg-accent/10 rounded-2xl p-6 text-center relative z-10 border-t-4 border-accent">
                        <div class="w-16 h-16 rounded-full bg-accent text-white flex items-center justify-center mx-auto mb-4 -mt-12">
                            <span class="text-xs font-bold">WEEK</span>
                        </div>
                        <span class="text-xs font-bold text-accent uppercase tracking-wider">Weeks 1-2</span>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 mb-3">Initial Recovery</h4>
                        <ul class="text-sm text-slate-600 space-y-1 text-left">
                            <li>Rest at home</li>
                            <li>Light walking daily</li>
                            <li>Avoid heavy lifting (>5kg)</li>
                            <li>Desk work may resume</li>
                        </ul>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute top-8 left-1/2 -translate-x-1/2 w-full h-0.5 bg-brand-200"></div>
                    <div class="bg-green-50 rounded-2xl p-6 text-center relative z-10 border-t-4 border-green-600">
                        <div class="w-16 h-16 rounded-full bg-green-600 text-white flex items-center justify-center mx-auto mb-4 -mt-12">
                            <span class="text-xs font-bold">WEEK</span>
                        </div>
                        <span class="text-xs font-bold text-green-600 uppercase tracking-wider">Weeks 2-4</span>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 mb-3">Building Strength</h4>
                        <ul class="text-sm text-slate-600 space-y-1 text-left">
                            <li>Light exercise OK</li>
                            <li>Most restrictions lifted</li>
                            <li>Normal daily activities</li>
                            <li>Follow-up appointment</li>
                        </ul>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-purple-50 rounded-2xl p-6 text-center relative z-10 border-t-4 border-purple-600">
                        <div class="w-16 h-16 rounded-full bg-purple-600 text-white flex items-center justify-center mx-auto mb-4 -mt-12">
                            <span class="text-xs font-bold">WEEKS</span>
                        </div>
                        <span class="text-xs font-bold text-purple-600 uppercase tracking-wider">Weeks 4-6</span>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 mb-3">Full Recovery</h4>
                        <ul class="text-sm text-slate-600 space-y-1 text-left">
                            <li>Heavy lifting OK</li>
                            <li>Return to exercise</li>
                            <li>Complete healing</li>
                            <li>Normal activities resume</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Open Surgery Timeline -->
        <div>
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-slate-500 flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-slate-900">Open Hernia Repair</h3>
                    <p class="text-slate-500">Traditional Surgical Approach</p>
                </div>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <div class="relative">
                    <div class="absolute top-8 left-1/2 -translate-x-1/2 w-full h-0.5 bg-slate-200"></div>
                    <div class="bg-slate-100 rounded-2xl p-6 text-center relative z-10 border-t-4 border-slate-500">
                        <div class="w-16 h-16 rounded-full bg-slate-500 text-white flex items-center justify-center mx-auto mb-4 -mt-12">
                            <span class="text-xs font-bold">DAY</span>
                        </div>
                        <span class="text-xs font-bold text-slate-600 uppercase tracking-wider">Days 1-7</span>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 mb-3">Hospital Stay</h4>
                        <ul class="text-sm text-slate-600 space-y-1 text-left">
                            <li>1-3 day hospital stay</li>
                            <li>Moderate pain expected</li>
                            <li>Wound care begins</li>
                            <li>First mobility steps</li>
                        </ul>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute top-8 left-1/2 -translate-x-1/2 w-full h-0.5 bg-slate-200"></div>
                    <div class="bg-amber-50 rounded-2xl p-6 text-center relative z-10 border-t-4 border-amber-600">
                        <div class="w-16 h-16 rounded-full bg-amber-600 text-white flex items-center justify-center mx-auto mb-4 -mt-12">
                            <span class="text-xs font-bold">WEEK</span>
                        </div>
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Weeks 1-2</span>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 mb-3">Home Recovery</h4>
                        <ul class="text-sm text-slate-600 space-y-1 text-left">
                            <li>Rest but be active</li>
                            <li>Keep wound clean/dry</li>
                            <li>Avoid heavy lifting</li>
                            <li>Gradually increasing mobility</li>
                        </ul>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute top-8 left-1/2 -translate-x-1/2 w-full h-0.5 bg-slate-200"></div>
                    <div class="bg-green-50 rounded-2xl p-6 text-center relative z-10 border-t-4 border-green-600">
                        <div class="w-16 h-16 rounded-full bg-green-600 text-white flex items-center justify-center mx-auto mb-4 -mt-12">
                            <span class="text-xs font-bold">WEEK</span>
                        </div>
                        <span class="text-xs font-bold text-green-600 uppercase tracking-wider">Weeks 3-4</span>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 mb-3">Improvement</h4>
                        <ul class="text-sm text-slate-600 space-y-1 text-left">
                            <li>Stitches removed (if any)</li>
                            <li>Light activities OK</li>
                            <li>Less pain medication</li>
                            <li>Driving may resume</li>
                        </ul>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-purple-50 rounded-2xl p-6 text-center relative z-10 border-t-4 border-purple-600">
                        <div class="w-16 h-16 rounded-full bg-purple-600 text-white flex items-center justify-center mx-auto mb-4 -mt-12">
                            <span class="text-xs font-bold">WEEKS</span>
                        </div>
                        <span class="text-xs font-bold text-purple-600 uppercase tracking-wider">Weeks 6-8+</span>
                        <h4 class="text-lg font-bold text-slate-900 mt-2 mb-3">Full Recovery</h4>
                        <ul class="text-sm text-slate-600 space-y-1 text-left">
                            <li>Full activities resume</li>
                            <li>Exercise OK</li>
                            <li>Complete tissue healing</li>
                            <li>Follow-up complete</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wound Care -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Incision Care</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    Wound Care Instructions
                </h2>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Proper wound care helps prevent infection and promotes healing. Follow these guidelines carefully after your hernia surgery.
                </p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Keep It Clean & Dry</h4>
                            <p class="text-sm text-slate-600">Cover your incision when bathing. Avoid soaking in bathtubs, swimming pools, or hot tubs until fully healed.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Watch for Signs of Infection</h4>
                            <p class="text-sm text-slate-600">Redness, warmth, swelling, increased pain, or drainage from the wound may indicate infection. Contact us immediately.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Follow Specific Instructions</h4>
                            <p class="text-sm text-slate-600">Your surgeon may have specific wound care instructions. Follow them precisely for the best outcome.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 border border-slate-100">
                <h3 class="text-xl font-bold text-slate-900 mb-6">Signs of Normal vs. Concerning Healing</h3>

                <div class="space-y-6">
                    <div>
                        <h4 class="font-semibold text-green-600 mb-3">Normal Healing</h4>
                        <div class="space-y-2">
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span class="text-sm text-slate-600">Mild redness around the incision</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span class="text-sm text-slate-600">Slight swelling for first few days</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span class="text-sm text-slate-600">Minor bruising or discoloration</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span class="text-sm text-slate-600">Numbness or tingling around incision</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold text-red-600 mb-3">Concerning Signs</h4>
                        <div class="space-y-2">
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-red-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                <span class="text-sm text-slate-600">Increasing redness spreading from incision</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-red-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                <span class="text-sm text-slate-600">Pus or excessive drainage</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-red-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                <span class="text-sm text-slate-600">Fever above 101F (38.3C)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-red-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                <span class="text-sm text-slate-600">Separation of incision edges</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Activity Restrictions -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Getting Back to Life</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Activity Restrictions After Hernia Surgery
            </h2>
            <p class="text-slate-600 leading-relaxed">
                While you want to get back to normal as soon as possible, following activity restrictions helps ensure proper healing and reduces the risk of recurrence.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-6 mb-12">
            <!-- First 2 Weeks -->
            <div class="bg-gradient-to-br from-brand-50 to-white rounded-2xl p-6 border border-brand-100">
                <div class="w-12 h-12 rounded-xl bg-brand-700 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-4">First 2 Weeks</h3>
                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">No lifting >5 kg (10 lbs)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">No strenuous exercise</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">No heavy housework</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">Light walking encouraged</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">Desk work OK</span>
                    </div>
                </div>
            </div>

            <!-- Weeks 3-4 -->
            <div class="bg-gradient-to-br from-accent/10 to-white rounded-2xl p-6 border border-accent/20">
                <div class="w-12 h-12 rounded-xl bg-accent flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-4">Weeks 3-4</h3>
                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">Light lifting OK</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">Light exercise OK</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">Still no heavy lifting</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">Driving resumed</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">Normal daily activities</span>
                    </div>
                </div>
            </div>

            <!-- After 4 Weeks -->
            <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 border border-green-100">
                <div class="w-12 h-12 rounded-xl bg-green-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-4">After 4-6 Weeks</h3>
                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">Heavy lifting OK</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">Exercise resume</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">Core exercises (gradually)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">Sports OK (non-contact)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-sm text-slate-700">Full activities resumed</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Important Note -->
        <div class="bg-brand-700 rounded-2xl p-8 text-white">
            <div class="flex items-start gap-6">
                <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-3">Important Recovery Note</h3>
                    <p class="text-brand-100 leading-relaxed">
                        These are general guidelines. Your surgeon may recommend modifications based on your specific procedure, overall health, and individual healing progress. Always follow the personalized instructions provided by Dr. Kumar's team.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Follow-up Appointments -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Stay on Track</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Follow-up Appointments
            </h2>
            <p class="text-slate-600 leading-relaxed">
                Regular follow-up visits ensure your recovery is progressing well and allow us to address any concerns promptly.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center border-t-4 border-brand-700">
                <div class="w-16 h-16 rounded-full bg-brand-100 flex items-center justify-center mx-auto mb-4">
                    <span class="text-brand-700 font-bold text-xl">1</span>
                </div>
                <span class="text-xs font-bold text-brand-700 uppercase tracking-wider">1-2 Weeks</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Initial Check</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Wound inspection, removal of sutures if needed, assessment of initial healing progress.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 text-center border-t-4 border-accent">
                <div class="w-16 h-16 rounded-full bg-accent/20 flex items-center justify-center mx-auto mb-4">
                    <span class="text-accent font-bold text-xl">2</span>
                </div>
                <span class="text-xs font-bold text-accent uppercase tracking-wider">4-6 Weeks</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Progress Review</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Evaluation of mobility, discussion of activity progression, assessment of any ongoing concerns.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 text-center border-t-4 border-green-600">
                <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-4">
                    <span class="text-green-600 font-bold text-xl">3</span>
                </div>
                <span class="text-xs font-bold text-green-600 uppercase tracking-wider">6-12 Months</span>
                <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">Long-term Check</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Final healing confirmation, long-term outcome assessment, lifestyle recommendations.
                </p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 border border-slate-100">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="flex-1">
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Need to Schedule or Have Questions?</h3>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        Don't wait for your scheduled appointment if you have concerns. Contact our office anytime if you experience unusual symptoms or have questions about your recovery.
                    </p>
                    <div class="flex items-center gap-2 text-sm text-slate-600">
                        <svg class="w-5 h-5 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                        <span>Emergency contact available 24/7</span>
                    </div>
                </div>
                <a href="tel:<?= $site['phone_link'] ?>" class="shrink-0 inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-6 py-4 rounded-full transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Warning Signs -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-red-600 font-semibold uppercase tracking-wider text-sm">Important</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Warning Signs to Watch For
            </h2>
            <p class="text-slate-600 leading-relaxed">
                While complications are rare, it's important to recognize warning signs that require immediate medical attention.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <!-- Infection -->
            <div class="bg-red-50 rounded-2xl p-6 border border-red-200">
                <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Signs of Infection</h3>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li>Fever above 101F (38.3C)</li>
                    <li>Increasing redness around incision</li>
                    <li>Warmth or significant swelling</li>
                    <li>Pus or unusual drainage</li>
                    <li>Foul-smelling discharge</li>
                </ul>
            </div>

            <!-- Recurrence -->
            <div class="bg-amber-50 rounded-2xl p-6 border border-amber-200">
                <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Signs of Recurrence</h3>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li>New bulge appearing at surgery site</li>
                    <li>Bulge increasing in size</li>
                    <li>Pain returning at repair site</li>
                    <li>Difficulty pushing bulge back</li>
                </ul>
            </div>

            <!-- Serious -->
            <div class="bg-slate-100 rounded-2xl p-6 border border-slate-300">
                <div class="w-12 h-12 rounded-xl bg-slate-200 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Emergency Signs</h3>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li>Severe pain not relieved by medication</li>
                    <li>Nausea/vomiting persists</li>
                    <li>Unable to pass gas or have bowel movement</li>
                    <li>Skin at bulge turns red/purple/dark</li>
                    <li>Chest pain or difficulty breathing</li>
                </ul>
            </div>
        </div>

        <!-- Emergency Box -->
        <div class="bg-gradient-to-r from-red-600 to-red-500 rounded-2xl p-8 text-white">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
                <div class="flex-1 text-center md:text-left">
                    <h3 class="text-xl font-bold mb-2">If You Experience Emergency Signs</h3>
                    <p class="text-red-100 leading-relaxed">
                        Go to your nearest emergency room or call emergency services immediately. Do not wait for your follow-up appointment.
                    </p>
                </div>
                <a href="tel:<?= $site['phone_link'] ?>" class="shrink-0 inline-flex items-center gap-2 bg-white text-red-600 font-semibold px-6 py-4 rounded-full hover:bg-red-50 transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Tips for Better Recovery -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Recovery Tips</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                Tips for a Better Recovery
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <div class="w-10 h-10 rounded-lg bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">Get Adequate Rest</h3>
                <p class="text-sm text-slate-600">Sleep is when your body heals. Aim for 7-9 hours of sleep and rest when tired.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">Stay Hydrated</h3>
                <p class="text-sm text-slate-600">Drink plenty of water to support healing and prevent constipation.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">Eat Nutritious Food</h3>
                <p class="text-sm text-slate-600">Focus on protein for tissue repair, and fiber to prevent constipation.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">Light Walking</h3>
                <p class="text-sm text-slate-600">Short walks promote circulation and help prevent blood clots.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <div class="w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">No Smoking</h3>
                <p class="text-sm text-slate-600">Smoking impairs healing and increases complication risk.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <div class="w-10 h-10 rounded-lg bg-pink-100 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">Maintain Healthy Weight</h3>
                <p class="text-sm text-slate-600">Extra weight increases stress on your repair. Maintain a healthy weight.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-24 bg-gradient-to-br from-brand-900 via-brand-800 to-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-6">
            Questions About Your Recovery?
        </h2>
        <p class="text-lg text-slate-200 leading-relaxed mb-8 max-w-2xl mx-auto">
            Dr. Kumar's team is here to support you throughout your recovery journey. Don't hesitate to reach out with any concerns.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                Contact Us
            </a>
            <a href="treatment/hernia-surgery.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold px-8 py-4 rounded-full border border-white/30 transition">
                Back to Surgery Options
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