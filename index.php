<?php
$page_title       = 'Dr. Kumar - Best Hernia, Laparoscopic & Robotic Surgeon in Chennai | Billroth Hospital';
$page_description = 'Dr. Kumar (MBBS, MS, MRCS England) - Senior Consultant at Billroth Hospitals, Chennai. 29+ years of expertise in laparoscopic hernia surgery, robotic surgery, gallbladder, GERD & abdominal wall reconstruction. 10,000+ hernia surgeries performed. Book your appointment today.';
$page_keywords    = 'best hernia surgeon Chennai, laparoscopic surgeon Chennai, robotic surgeon Chennai, Dr Kumar Billroth Hospital, AWR surgery Chennai, gallbladder surgery, eTEP, TAR, inguinal hernia surgery, umbilical hernia, incisional hernia, GERD treatment Chennai, piles surgery';

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/config.php';
?>

<section class="relative bg-slate-100 overflow-hidden pb-20 lg:pb-24">
    <div class="absolute inset-0 opacity-40 pointer-events-none">
        <svg class="absolute top-0 left-0 w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="dots" x="0" y="0" width="24" height="24" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1" fill="#cbd5e1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#dots)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto grid lg:grid-cols-2 items-stretch min-h-[600px]">
        <div class="px-6 lg:px-8 py-16 lg:py-24 flex flex-col justify-center">
            <p class="text-brand-700 font-semibold mb-3 tracking-wide">
                Welcome to Billroth Hospital
            </p>

            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] text-slate-900 mb-5">
                We Take Care<br>of Your Health
            </h1>

            <p class="text-slate-600 text-base md:text-lg leading-relaxed mb-8 max-w-lg">
                <strong><?= $site['doctor'] ?></strong> &mdash; Senior Consultant in Hernia, Laparoscopic &amp; Robotic Surgery with 29+ years of experience and 20,000+ successful procedures performed in Chennai.
            </p>

            <div class="flex flex-wrap gap-3">
                <a href="#about" class="inline-flex items-center justify-center bg-brand-700 hover:bg-brand-800 text-white font-semibold px-8 py-3 rounded-md shadow-md hover:shadow-lg transition">
                    About Us
                </a>
                <a href="#treatments" class="inline-flex items-center justify-center bg-white hover:bg-slate-50 text-slate-800 font-semibold px-8 py-3 rounded-md border border-slate-200 shadow-sm transition">
                    Our Services
                </a>
            </div>
        </div>

        <div class="relative h-80 lg:h-auto">
            <img src="assets\images\dr-kumar-main-removebg-preview.png"
                 alt="Dr. Kumar - Senior Laparoscopic & Robotic Surgeon at Billroth Hospital Chennai"
                 class="w-full h-full object-contain object-bottom"
                 loading="eager">
        </div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 -mt-20 lg:-mt-24 z-10">
        <div class="grid md:grid-cols-3 gap-5 md:gap-6">
            <?php
            $features = [
                [
                    'title' => 'Quality &amp; Safety',
                    'desc'  => 'Times Health Award 2026 winner. World-class sterile facilities and outcomes-driven protocols.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                ],
                [
                    'title' => 'Leading Technology',
                    'desc'  => 'Advanced robotic, laparoscopic, eTEP &amp; TAR techniques for faster recovery and minimal scarring.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12h3l3-9 6 18 3-9h3"/>',
                ],
                [
                    'title' => 'Experts by Experience',
                    'desc'  => '29+ years, 10,000+ hernia surgeries, 20,000+ laparoscopic procedures trusted across India.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>',
                ],
            ];
            foreach ($features as $f): ?>
                <div class="group bg-white rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition p-7 border-t-4 border-brand-700">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg bg-brand-50 text-brand-700 mb-4 group-hover:bg-brand-700 group-hover:text-white transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><?= $f['icon'] ?></svg>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg mb-2"><?= $f['title'] ?></h3>
                    <p class="text-slate-600 text-sm leading-relaxed"><?= $f['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>

<section id="about" class="relative py-12 md:py-14 overflow-hidden">
    <img src="assets/images/bg-about.jpg" alt="" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
    <div class="absolute inset-0 bg-white/90"></div>

    <div class="relative max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
        <div class="relative">
            <img src="assets/images/dr-kumar-main.jpg" alt="About Dr. Kumar" class="rounded-2xl shadow-xl w-full">
            <div class="absolute -bottom-6 -right-6 bg-accent text-white rounded-2xl px-6 py-5 shadow-xl hidden md:block">
                <p class="font-display text-3xl font-bold">29+</p>
                <p class="text-sm">Years of Excellence</p>
            </div>
        </div>

        <div>
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">About the Doctor</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-5">
                Pioneer in Laparoscopic &amp; Robotic Surgery in Chennai
            </h2>
            <p class="text-slate-600 mb-5 leading-relaxed">
                Dr. Kumar is one of the first surgeons in Chennai to perform laparoscopic hernia surgery, with extensive expertise in advanced techniques such as <strong>eTEP, TEP, TAPP, TAR, IPOM</strong> and complex Abdominal Wall Reconstruction (AWR).
            </p>
            <p class="text-slate-600 mb-6 leading-relaxed">
                A graduate of Stanley Medical College and a Member of the Royal College of Surgeons of England, he leads the Department of Minimal Access Surgery at Billroth Hospitals.
            </p>

            <div class="grid grid-cols-2 gap-4 mb-7">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-sm font-medium">MBBS, MS Surgery</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-sm font-medium">MRCS England</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-sm font-medium">FALS Hernia &amp; Robotic</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-sm font-medium">FMAS, FIAGES</span>
                </div>
            </div>

            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-6 py-3 rounded-full shadow transition">
                Schedule Consultation
            </a>
        </div>
    </div>
</section>

<section id="hernia" class="py-12 md:py-14 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-700 font-semibold uppercase tracking-wider text-sm">Hernia Specialist</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-4">
                Comprehensive Hernia Care
            </h2>
            <p class="text-slate-600">From simple inguinal hernias to complex abdominal wall reconstructions, Dr. Kumar offers the most advanced minimally invasive options.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $hernias = [
                ['Inguinal Hernia',   'assets/images/inguinal.avif'],
                ['Umbilical Hernia',  'assets/images/umbilical.avif'],
                ['Incisional Hernia', 'assets/images/incisional.avif'],
                ['Ventral Hernia',    'assets/images/ventral.jpg'],
            ];
            foreach ($hernias as [$t, $img]): ?>
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-1 transition group">
                    <div class="overflow-hidden h-44">
                        <img src="<?= $img ?>" alt="<?= $t ?> treatment Chennai" class="w-full h-full object-cover group-hover:scale-105 transition" loading="lazy">
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-lg text-slate-900 mb-2"><?= $t ?></h3>
                        <p class="text-sm text-slate-600">Advanced laparoscopic &amp; robotic repair with mesh reinforcement.</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-10 bg-white rounded-2xl p-8 grid md:grid-cols-3 gap-6 text-center shadow">
            <div>
                <p class="font-display text-3xl font-bold text-brand-700">eTEP &amp; TAR</p>
                <p class="text-sm text-slate-600 mt-2">Advanced techniques for complex hernias</p>
            </div>
            <div>
                <p class="font-display text-3xl font-bold text-brand-700">Daycare</p>
                <p class="text-sm text-slate-600 mt-2">Same-day discharge for select cases</p>
            </div>
            <div>
                <p class="font-display text-3xl font-bold text-brand-700">Meshless</p>
                <p class="text-sm text-slate-600 mt-2">Desadara technique available</p>
            </div>
        </div>
    </div>
</section>

<section id="treatments" class="relative py-12 md:py-14 bg-slate-50 overflow-hidden">
    <!-- Background pattern: medical plus signs -->
    <svg class="absolute inset-0 w-full h-full text-brand-700 opacity-[0.03] pointer-events-none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <pattern id="plus-pattern" x="0" y="0" width="50" height="50" patternUnits="userSpaceOnUse">
                <path d="M22 18h6v4h-6v6h-4v-6h-6v-4h6v-6h4v6z" fill="currentColor"/>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#plus-pattern)"/>
    </svg>

    <div class="relative max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Our Specialities
            </span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 mt-5 leading-tight">
                Specialised Care to <span class="text-brand-700">Restore</span><br>
                &amp; Protect Your Health
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6">
            <?php foreach (array_slice($treatments, 0, 8) as $t): ?>
                <a href="tel:<?= $site['phone_link'] ?>"
                   class="group relative flex flex-col rounded-2xl overflow-hidden bg-white shadow-sm hover:shadow-xl transition duration-300 hover:-translate-y-1">

                    <div class="p-5 flex flex-col flex-1">
                        <div class="flex items-start justify-between gap-2 mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-brand-700">
                                Speciality
                            </span>
                            <span class="shrink-0 w-7 h-7 rounded-full bg-slate-100 text-slate-600 group-hover:bg-brand-700 group-hover:text-white flex items-center justify-center transition group-hover:rotate-45">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                            </span>
                        </div>

                        <h3 class="font-display font-bold text-lg md:text-xl leading-snug text-slate-900 mb-2">
                            <?= $t['title'] ?>
                        </h3>

                        <p class="text-sm leading-relaxed text-slate-600 flex-1">
                            <?= $t['desc'] ?>
                        </p>
                    </div>

                    <div class="relative mx-3 mb-3 rounded-xl overflow-hidden aspect-[4/3] bg-slate-100">
                        <img src="<?= $t['img'] ?>"
                             alt="<?= $t['title'] ?> by Dr. Kumar Chennai"
                             loading="lazy"
                             class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-10">
            <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-brand-700 hover:bg-brand-800 text-white font-semibold px-7 py-3 rounded-full shadow-md hover:shadow-lg hover:-translate-y-0.5 transition">
                View All <?= count($treatments) ?> Treatments
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

<section id="why" class="relative py-12 md:py-14 overflow-hidden">
    <img src="assets/images/bg-why.jpg" alt="" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
    <div class="absolute inset-0 bg-white/95"></div>
    <div class="relative max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- LEFT: heading + image -->
        <div>
            <span class="inline-flex items-center gap-2 bg-brand-100 text-brand-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-5">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                Why Choose Us
            </span>

            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold leading-[1.15] text-slate-900 mb-8">
                Why Choose <span class="text-brand-700">Dr. Kumar</span> for<br>
                Your Surgical Journey?
            </h2>

            <div class="relative rounded-2xl overflow-hidden bg-slate-100 aspect-[4/3]">
                <img src="assets/images/dr-kumar-main.jpg"
                     alt="Dr. Kumar - Senior Laparoscopic & Robotic Surgeon, Chennai"
                     class="absolute inset-0 w-full h-full object-cover"
                     loading="lazy">
                <div class="absolute bottom-4 left-4 bg-white/95 backdrop-blur-sm rounded-xl px-4 py-3 shadow-lg flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-100 flex items-center justify-center">
                        <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-sm leading-tight">Times Health Award</p>
                        <p class="text-xs text-slate-500">2025 &middot; 2026 Winner</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT: feature list -->
        <div class="divide-y divide-slate-200">
            <?php
            $whys = [
                [
                    'title' => 'Pioneer Laparoscopic Surgeon',
                    'desc'  => 'One of the first surgeons in Chennai to perform laparoscopic hernia surgery, with 29+ years of operating-room mastery.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                ],
                [
                    'title' => 'Proven Surgical Outcomes',
                    'desc'  => '10,000+ hernia repairs and 20,000+ laparoscopic procedures delivering faster recovery and lasting results.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 13l4 4L19 5"/>',
                ],
                [
                    'title' => 'Latest Robotic Technology',
                    'desc'  => 'Advanced eTEP, TAR, TAPP &amp; IPOM techniques and robotic-assisted surgery for the most complex cases.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                ],
                [
                    'title' => 'Internationally Trained Expertise',
                    'desc'  => 'MRCS England &amp; member of multiple global surgical societies, bringing world-class standards to every procedure.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                ],
                [
                    'title' => 'Patient-First Care',
                    'desc'  => '5.0-star rating with 265+ verified Google reviews from patients who trust Dr. Kumar with their care.',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
                ],
            ];
            foreach ($whys as $w): ?>
                <div class="flex gap-4 items-start group py-5 first:pt-0 last:pb-0">
                    <div class="shrink-0 w-12 h-12 rounded-full bg-brand-50 group-hover:bg-brand-100 border border-brand-100 flex items-center justify-center transition">
                        <svg class="w-6 h-6 text-brand-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><?= $w['icon'] ?></svg>
                    </div>
                    <div class="flex-1 pt-1">
                        <h3 class="font-bold text-slate-900 text-lg mb-1.5"><?= $w['title'] ?></h3>
                        <p class="text-slate-600 text-sm leading-relaxed"><?= $w['desc'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="testimonials" class="relative py-12 md:py-14 overflow-hidden">
    <img src="assets/images/bg-testimonials.jpg" alt="" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
    <div class="absolute inset-0 bg-slate-50/90"></div>
    <div class="relative max-w-7xl mx-auto px-4">

        <!-- HEADER ROW: title left, rating right -->
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-10">
            <div>
                <span class="text-brand-700 font-bold uppercase tracking-[0.2em] text-xs mb-3 block">
                    Real Patient Outcomes
                </span>
                <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 leading-tight">
                    What Our Patients Say
                </h2>
            </div>
            <div class="flex items-center gap-3">
                <div class="flex text-amber-400">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.293z"/></svg>
                    <?php endfor; ?>
                </div>
                <p class="text-sm text-slate-600">
                    <span class="font-bold text-slate-900">5.0 avg</span> &middot; 265+ verified reviews
                </p>
            </div>
        </div>

        <?php
        $testimonials = [
            ['Ramesh K.',  'Hernia Patient',          'Chennai',     'Dr. Kumar performed my hernia surgery flawlessly &mdash; I was back to work within days and have had zero recurrence over the last two years.',                'border-brand-700'],
            ['Priya S.',   'Gallbladder Patient',     'Coimbatore',  'Best laparoscopic surgeon in Chennai. The surgery was painless and the entire team made the process comfortable and stress-free from start to finish.',     'border-amber-500'],
            ['Anand R.',   'Robotic Surgery Patient', 'Bangalore',   'I was nervous about robotic surgery, but Dr. Kumar explained every step clearly. Three weeks in, I am completely recovered. Highly recommend.',           'border-brand-700'],
            ['Suresh M.',  'GERD Patient',            'Madurai',     'After 5 years of acid reflux, the lap fundoplication changed my life. No more medication, no symptoms. Dr. Kumar is truly an expert in his field.',         'border-amber-500'],
            ['Lakshmi V.', 'AWR Patient',             'Chennai',     'My complex incisional hernia was repaired with eTEP. Dr. Kumar &amp; the Billroth team are simply the best &mdash; world-class care end to end.',           'border-brand-700'],
            ['Arjun T.',   'Inguinal Hernia Patient', 'Hyderabad',   'Daycare hernia surgery, home in 6 hours. Painless, scarless and back to gym in 2 weeks. Could not have asked for a better surgeon or experience.',         'border-amber-500'],
        ];
        ?>

        <!-- TESTIMONIAL SLIDER -->
        <div class="relative mb-8" id="reviewSlider">
            <div class="overflow-hidden">
                <div id="reviewTrack" class="flex snap-x snap-mandatory overflow-x-auto scroll-smooth gap-6 pb-2 -mx-2 px-2 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                    <?php foreach ($testimonials as [$name, $role, $place, $quote, $border]): ?>
                        <div class="snap-start shrink-0 w-full sm:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-3rem)/3)]">
                            <div class="relative bg-white rounded-lg shadow-sm hover:shadow-md transition overflow-hidden border-t-4 <?= $border ?> h-full">
                                <svg class="absolute top-4 right-4 w-16 h-16 text-slate-100" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/>
                                </svg>
                                <div class="relative p-7">
                                    <div class="flex text-amber-400 mb-4">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.293z"/></svg>
                                        <?php endfor; ?>
                                    </div>
                                    <p class="text-slate-700 italic leading-relaxed mb-6">"<?= $quote ?>"</p>
                                    <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                                        <div class="w-11 h-11 rounded-full bg-gradient-to-br from-brand-100 to-cyan-100 text-brand-700 flex items-center justify-center font-bold shrink-0">
                                            <?= strtoupper($name[0]) ?>
                                        </div>
                                        <div class="min-w-0">
                                            <p class="font-bold text-slate-900 leading-tight"><?= $name ?></p>
                                            <p class="text-xs text-brand-700 truncate"><?= $role ?> &middot; <?= $place ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Controls: prev / next + dots -->
            <div class="flex items-center justify-center md:justify-between gap-6 mt-7">
                <div class="hidden md:flex items-center gap-3">
                    <button type="button" id="reviewPrev" class="w-11 h-11 rounded-full border border-slate-200 bg-white hover:bg-brand-700 hover:border-brand-700 hover:text-white text-slate-700 shadow-sm flex items-center justify-center transition" aria-label="Previous review">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button type="button" id="reviewNext" class="w-11 h-11 rounded-full border border-slate-200 bg-white hover:bg-brand-700 hover:border-brand-700 hover:text-white text-slate-700 shadow-sm flex items-center justify-center transition" aria-label="Next review">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>

                <div id="reviewDots" class="flex items-center gap-2"></div>

                <div class="hidden md:block w-24"></div>
            </div>
        </div>

        <script>
            (function () {
                var track = document.getElementById('reviewTrack');
                var prev  = document.getElementById('reviewPrev');
                var next  = document.getElementById('reviewNext');
                var dotsW = document.getElementById('reviewDots');
                if (!track) return;

                var slides = Array.from(track.children);
                var perView = function () {
                    if (window.innerWidth >= 1024) return 3;
                    if (window.innerWidth >= 640)  return 2;
                    return 1;
                };
                var pageCount = function () { return Math.max(1, Math.ceil(slides.length / perView())); };
                var current = 0;

                function buildDots() {
                    dotsW.innerHTML = '';
                    for (var i = 0; i < pageCount(); i++) {
                        var b = document.createElement('button');
                        b.type = 'button';
                        b.className = 'transition-all rounded-full ' + (i === current ? 'w-8 h-2 bg-brand-700' : 'w-2 h-2 bg-slate-300 hover:bg-slate-400');
                        b.setAttribute('aria-label', 'Go to review ' + (i + 1));
                        (function (idx) { b.addEventListener('click', function () { goTo(idx); }); })(i);
                        dotsW.appendChild(b);
                    }
                }

                function goTo(page) {
                    current = (page + pageCount()) % pageCount();
                    var firstSlide = slides[Math.min(current * perView(), slides.length - 1)];
                    track.scrollTo({ left: firstSlide.offsetLeft - track.offsetLeft, behavior: 'smooth' });
                    buildDots();
                }

                prev.addEventListener('click', function () { goTo(current - 1); });
                next.addEventListener('click', function () { goTo(current + 1); });

                // Sync dots when user scrolls (e.g. swipes)
                var t;
                track.addEventListener('scroll', function () {
                    clearTimeout(t);
                    t = setTimeout(function () {
                        var idx = Math.round(track.scrollLeft / (slides[0].offsetWidth + 24));
                        var page = Math.floor(idx / perView());
                        if (page !== current) { current = page; buildDots(); }
                    }, 80);
                });

                window.addEventListener('resize', function () { buildDots(); });

                // Auto-advance every 6s, pause on hover
                var auto = setInterval(function () { goTo(current + 1); }, 6000);
                track.parentElement.parentElement.addEventListener('mouseenter', function () { clearInterval(auto); });

                buildDots();
            })();
        </script>

        <!-- STATS STRIP (moved from hero) -->
        <div class="bg-white rounded-lg shadow-sm border border-slate-100 overflow-hidden">
            <div class="grid grid-cols-2 md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-slate-100">
                <?php foreach ($stats as $stat): ?>
                    <div class="px-6 py-7 text-center hover:bg-slate-50 transition">
                        <p class="font-display text-3xl md:text-4xl font-bold text-brand-700 leading-none"><?= $stat['num'] ?></p>
                        <p class="text-xs md:text-sm text-slate-500 mt-2"><?= $stat['label'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="relative py-16 md:py-24 text-center text-white bg-gradient-to-br from-brand-800 via-brand-900 to-slate-900 overflow-hidden">
    <!-- Pattern overlay -->
    <svg class="absolute inset-0 w-full h-full text-white/[0.07] pointer-events-none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <pattern id="cta-plus" x="0" y="0" width="50" height="50" patternUnits="userSpaceOnUse">
                <path d="M22 18h6v4h-6v6h-4v-6h-6v-4h6v-6h4v6z" fill="currentColor"/>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#cta-plus)"/>
    </svg>

    <div class="relative max-w-3xl mx-auto px-4">
        <h2 class="font-display text-2xl md:text-4xl font-bold mb-4 leading-tight">
            Book Your <span class="text-accent">Consultation</span> Today
        </h2>
        <p class="text-brand-50 max-w-xl mx-auto mb-7">
            Expert advice from one of Chennai's most experienced laparoscopic &amp; robotic surgeons.
        </p>
        <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-amber-600 text-white font-semibold px-7 py-3.5 rounded-full shadow-lg hover:-translate-y-0.5 transition">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
            Call <?= $site['phone'] ?>
        </a>
    </div>
</section>

<a href="tel:<?= $site['phone_link'] ?>" class="fixed bottom-5 right-5 z-50 bg-accent hover:bg-amber-600 text-white w-14 h-14 rounded-full shadow-2xl flex items-center justify-center animate-bounce" aria-label="Call Now">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
</a>

<?php require __DIR__ . '/includes/footer.php'; ?>
