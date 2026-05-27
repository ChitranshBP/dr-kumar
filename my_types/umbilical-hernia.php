<?php
require __DIR__ . '/includes/layout.php';
?>

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
                Common in Adults & Children
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                Umbilical <span class="text-accent">Hernia</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed mb-8 max-w-2xl">
                Occurs near the belly button when abdominal tissue pushes through the umbilical ring. Treatment options include mesh repair and meshless techniques.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-full transition">
                    Book Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-white to-transparent"></div>
</section>

<section class="py-16 md:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Understanding</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">
                    What is an Umbilical Hernia?
                </h2>
                <p class="text-slate-600 leading-relaxed mb-5">
                    An umbilical hernia occurs when part of the intestine or abdominal tissue pushes through the abdominal wall near the belly button (umbilicus). It appears as a bulge at or near the navel.
                </p>
                <p class="text-slate-600 leading-relaxed mb-8">
                    Common in infants but also affects adults, particularly after pregnancy, weight gain, or previous surgery. Dr. Kumar offers both mesh and non-mesh repair options.
                </p>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-brand-100 text-brand-800 rounded-full text-sm font-medium">Daycare Available</span>
                    <span class="px-4 py-2 bg-brand-100 text-brand-800 rounded-full text-sm font-medium">Mesh Repair</span>
                    <span class="px-4 py-2 bg-brand-100 text-brand-800 rounded-full text-sm font-medium">Meshless Option</span>
                </div>
            </div>
            <div class="bg-white rounded-3xl shadow-2xl p-8 border border-slate-100">
                <h3 class="font-bold text-xl text-slate-900 mb-6">When to Seek Treatment</h3>
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <span class="text-slate-700">Pain that worsens or doesn't subside</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <span class="text-slate-700">Bulge increasing in size</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <span class="text-slate-700">Difficulty with daily activities</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <span class="text-slate-700">Signs of skin discoloration</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-6 mb-4">
                Treatment <span class="text-brand-700">Options</span>
            </h2>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                </div>
                <h3 class="font-bold text-xl text-slate-900 mb-3">Mesh Repair</h3>
                <p class="text-slate-600 text-sm">Standard approach using a synthetic mesh to reinforce the abdominal wall with excellent long-term results and low recurrence.</p>
            </div>
            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="font-bold text-xl text-slate-900 mb-3">Meshless Repair</h3>
                <p class="text-slate-600 text-sm">For select patients, using自身组织 reconstruction for natural healing without synthetic materials.</p>
            </div>
            <div class="bg-slate-50 rounded-2xl p-6 hover:shadow-lg transition">
                <div class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-xl text-slate-900 mb-3">Laparoscopic Repair</h3>
                <p class="text-slate-600 text-sm">Minimally invasive approach with smaller incisions, less pain, and faster recovery compared to open surgery.</p>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>