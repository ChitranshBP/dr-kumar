<?php require_once __DIR__ . '/config.php'; ?>

<!-- ============== FOOTER ============== -->
<footer class="relative bg-slate-800 text-slate-300 overflow-hidden">

    <!-- Decorative Top Accent Bar -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-brand-500 via-cyan-400 to-brand-700"></div>

    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 32px 32px;"></div>

    <!-- Decorative Glow Blobs -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-brand-700/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-brand-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <!-- ============== CTA STRIP ============== -->
    <div class="relative border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 py-8 lg:py-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-4 text-center lg:text-left">
                    <div class="hidden sm:flex w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-500 to-brand-700 items-center justify-center shadow-lg shadow-brand-700/30 shrink-0">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-white font-display text-2xl lg:text-3xl font-bold leading-tight">Need a Hernia Consultation?</h3>
                        <p class="text-slate-200 text-base lg:text-lg mt-1 font-semibold">Speak with Dr. Kumar today — 29+ years of surgical excellence.</p>
                    </div>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-3">
                    <a href="tel:<?= $site['phone_link'] ?>" class="inline-flex items-center gap-2 bg-gradient-to-r from-accent to-amber-500 hover:from-amber-500 hover:to-amber-600 text-white font-bold px-6 py-3.5 rounded-full shadow-lg shadow-amber-500/20 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                        Call <?= $site['phone'] ?>
                    </a>
                    <a href="<?= $base_path ?>book-appointment.php" class="inline-flex items-center gap-2 bg-white/5 hover:bg-white/10 backdrop-blur text-white font-semibold px-6 py-3.5 rounded-full border border-white/15 hover:border-white/30 transition-all duration-300">
                        Book Online
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ============== MAIN FOOTER CONTENT ============== -->
    <div class="relative max-w-7xl mx-auto px-4 pt-16 pb-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8">

        <!-- BRAND COLUMN -->
        <div class="lg:col-span-4">
            <div class="mb-5">
                <div class="inline-flex items-center justify-center">
                    <img src="<?= $base_path ?>assets/logo/herniacare-final-logo.png" alt="Dr. Kumar - Hernia Care 360" class="h-20 mx-auto w-auto">
                </div>
            </div>

            <p class="text-base leading-relaxed text-slate-300 mb-5">
                Clinical Lead &amp; HOD, Department of Minimal Access, Robotic, Hernia &amp; Abdominal Wall Reconstruction Surgery at Billroth Hospital, Chennai.
            </p>

            <!-- Trust Stats -->
            <div class="grid grid-cols-3 gap-2 mb-6 p-4 rounded-2xl bg-white/5 border border-white/5">
                <div class="text-center">
                    <p class="text-white font-bold text-xl">29+</p>
                    <p class="text-slate-500 text-[10px] uppercase tracking-wider">Years</p>
                </div>
                <div class="text-center border-x border-white/5">
                    <p class="text-white font-bold text-xl">10K+</p>
                    <p class="text-slate-500 text-[10px] uppercase tracking-wider"> Hernia Surgeries</p>
                </div>
                <div class="text-center">
                    <p class="text-white font-bold text-xl">20K+</p>
                    <p class="text-slate-500 text-[10px] uppercase tracking-wider">Laparoscopic</p>
                </div>
            </div>

            <!-- Social Icons -->
            <div>
                <p class="text-sm uppercase tracking-widest text-slate-300 font-bold mb-3">Follow Us</p>
                <div class="flex gap-2.5">
                    <a href="<?= $site['social']['facebook'] ?>" aria-label="Facebook" target="_blank" rel="noopener" class="group w-10 h-10 rounded-xl bg-white/5 hover:bg-[#1877F2] border border-white/10 hover:border-[#1877F2] flex items-center justify-center text-slate-300 hover:text-white transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-500/30">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="<?= $site['social']['instagram'] ?>" aria-label="Instagram" target="_blank" rel="noopener" class="group w-10 h-10 rounded-xl bg-white/5 hover:bg-gradient-to-br hover:from-[#f09433] hover:via-[#dc2743] hover:to-[#cc2366] border border-white/10 hover:border-transparent flex items-center justify-center text-slate-300 hover:text-white transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-pink-500/30">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4 1 .5.4.8.9 1 1.4.2.4.4 1 .4 2.2.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-1 1.4-.4.5-.9.8-1.4 1-.4.2-1 .4-2.2.4-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-1-.5-.4-.8-.9-1-1.4-.2-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c.1-1.2.2-1.8.4-2.2.2-.6.5-1 1-1.4.4-.5.9-.8 1.4-1 .4-.2 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2zm0 5.3a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm5.6-.2a1.05 1.05 0 11-2.1 0 1.05 1.05 0 012.1 0zM12 9.5a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"/></svg>
                    </a>
                    <a href="<?= $site['social']['linkedin'] ?>" aria-label="LinkedIn" target="_blank" rel="noopener" class="group w-10 h-10 rounded-xl bg-white/5 hover:bg-[#0A66C2] border border-white/10 hover:border-[#0A66C2] flex items-center justify-center text-slate-300 hover:text-white transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-500/30">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="<?= $site['social']['youtube'] ?>" aria-label="YouTube" target="_blank" rel="noopener" class="group w-10 h-10 rounded-xl bg-white/5 hover:bg-[#FF0000] border border-white/10 hover:border-[#FF0000] flex items-center justify-center text-slate-300 hover:text-white transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-red-500/30">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5 6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 002.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 002.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8zM9.6 15.6V8.4l6.3 3.6-6.3 3.6z"/></svg>
                    </a>
                    <a href="https://wa.me/<?= $site['phone_link'] ?>" aria-label="WhatsApp" target="_blank" rel="noopener" class="group w-10 h-10 rounded-xl bg-white/5 hover:bg-[#25D366] border border-white/10 hover:border-[#25D366] flex items-center justify-center text-slate-300 hover:text-white transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-green-500/30">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.464 3.488"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- QUICK LINKS -->
        <div class="lg:col-span-2">
            <h3 class="relative text-white font-bold text-base uppercase tracking-wider mb-5 pb-2 inline-block">
                Quick Links
                <span class="absolute bottom-0 left-0 w-10 h-0.5 bg-gradient-to-r from-brand-500 to-brand-700 rounded-full"></span>
            </h3>
            <ul class="space-y-3 text-[15px]">
                <?php foreach ($nav as $label => $link): ?>
                    <li>
                        <a href="<?= $base_path . $link ?>" class="group flex items-center gap-2 text-slate-300 hover:text-white font-medium transition-colors duration-200">
                            <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                            <span><?= $label ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- TREATMENTS -->
        <div class="lg:col-span-3">
            <h3 class="relative text-white font-bold text-base uppercase tracking-wider mb-5 pb-2 inline-block">
                Treatments
                <span class="absolute bottom-0 left-0 w-10 h-0.5 bg-gradient-to-r from-brand-500 to-brand-700 rounded-full"></span>
            </h3>
            <ul class="space-y-3 text-[15px]">
                <li><a href="<?= $base_path ?>treatment/hernia-surgeon-in-chennai.php" class="group flex items-center gap-2 text-slate-300 hover:text-white font-medium transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    Hernia Surgery
                </a></li>
                <li><a href="<?= $base_path ?>treatment/best-laparoscopic-hernia-surgery-in-chennai.php" class="group flex items-center gap-2 text-slate-300 hover:text-white font-medium transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    Laparoscopic Surgery
                </a></li>
                <li><a href="<?= $base_path ?>best-robotic-hernia-surgery-in-chennai.php" class="group flex items-center gap-2 text-slate-300 hover:text-white font-medium transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    Robotic Surgery
                </a></li>
                <li><a href="<?= $base_path ?>treatment/etep-technique-expert-in-chennai.php" class="group flex items-center gap-2 text-slate-300 hover:text-white font-medium transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    eTEP Repair
                </a></li>
                <li><a href="<?= $base_path ?>treatment/mesh-hernia-repair-in-chennai.php" class="group flex items-center gap-2 text-slate-300 hover:text-white font-medium transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    Mesh Repair
                </a></li>
                <li><a href="<?= $base_path ?>treatment/recovery.php" class="group flex items-center gap-2 text-slate-300 hover:text-white font-medium transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    Recovery
                </a></li>
                <li><a href="<?= $base_path ?>treatment/abdominal-wall-reconstruction-in-chennai.php" class="group flex items-center gap-2 text-slate-300 hover:text-white font-medium transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    Abdominal Wall Reconstruction
                </a></li>
                <li><a href="<?= $base_path ?>treatment/diastasis-recti.php" class="group flex items-center gap-2 text-slate-300 hover:text-white font-medium transition-colors duration-200">
                    <svg class="w-3.5 h-3.5 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    <span>Diastasis Recti (Divarication of Recti)</span>
                </a></li>
            </ul>
        </div>

        <!-- HERNIA TYPES -->
        <div class="lg:col-span-3">
            <h3 class="relative text-white font-bold text-base uppercase tracking-wider mb-5 pb-2 inline-block">
                Hernia Types
                <span class="absolute bottom-0 left-0 w-10 h-0.5 bg-gradient-to-r from-brand-500 to-brand-700 rounded-full"></span>
            </h3>
            <div class="grid grid-cols-2 gap-x-3 gap-y-3 text-[15px]">
                <a href="<?= $base_path ?>my_types/inguinal-hernia-treatment-in-chennai.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Inguinal</a>
                <a href="<?= $base_path ?>my_types/umbilical-hernia-treatment-in-chennai.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Umbilical</a>
                <a href="<?= $base_path ?>my_types/incisional-hernia-treatment-in-chennai.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Incisional</a>
                <a href="<?= $base_path ?>my_types/ventral-hernia-treatment-in-chennai.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Ventral</a>
                <a href="<?= $base_path ?>my_types/hiatal-hernia-surgery-in-chennai.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Hiatal</a>
                <a href="<?= $base_path ?>my_types/femoral-hernia-treatment-in-chennai.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Femoral</a>
                <a href="<?= $base_path ?>my_types/strangulated-hernia-surgery-in-chennai.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Strangulated</a>
                <a href="<?= $base_path ?>my_types/sports-hernia.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Sports</a>
                <a href="<?= $base_path ?>special-considerations/complex-hernia-info.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Complex</a>
                <a href="<?= $base_path ?>my_types/recurrent-hernia.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Recurrent</a>
                <a href="<?= $base_path ?>my_types/rare-hernia.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Rare Types</a>
                <a href="<?= $base_path ?>my_types/epigastric-hernia-surgery-in-chennai.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Epigastric</a>
                <a href="<?= $base_path ?>my_types/rare-hernia.php#supraumbilical" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Supraumbilical</a>
                <a href="<?= $base_path ?>my_types/rare-hernia.php#lumbar" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Lumbar</a>
                <a href="<?= $base_path ?>my_types/rare-hernia.php#spigelian" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Spigelian</a>
                <a href="<?= $base_path ?>my_types/rare-hernia.php#diaphragmatic" class="text-slate-300 hover:text-white font-medium transition-colors duration-200 truncate">Diaphragmatic</a>
            </div>

            <!-- Learn More Mini Section -->
            <div class="mt-6 pt-5 border-t border-white/10">
                <h4 class="text-white text-sm uppercase tracking-wider font-bold mb-3">Learn More</h4>
                <ul class="space-y-2.5 text-[15px]">
                    <li><a href="<?= $base_path ?>hernia/what-is-hernia.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200">What is Hernia</a></li>
                    <li><a href="<?= $base_path ?>hernia/causes.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200">Causes</a></li>
                    <li><a href="<?= $base_path ?>hernia/symptoms.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200">Symptoms</a></li>
                    <li><a href="<?= $base_path ?>hernia/diagnosis.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200">Diagnosis</a></li>
                    <li><a href="<?= $base_path ?>hernia/complications.php" class="text-slate-300 hover:text-white font-medium transition-colors duration-200">Complications</a></li>
                    <li><a href="<?= $base_path ?>book-appointment.php" class="text-brand-300 hover:text-white font-bold transition-colors duration-200">Book Appointment →</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ============== CONTACT CARDS STRIP ============== -->
    <div class="relative border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 py-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Address Card -->
                <a href="https://maps.google.com/?q=<?= urlencode($site['address']) ?>" target="_blank" rel="noopener" class="group flex items-start gap-4 p-5 rounded-2xl bg-white/[0.03] hover:bg-white/[0.06] border border-white/5 hover:border-brand-500/30 transition-all duration-300">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-brand-500/20 to-brand-700/20 group-hover:from-brand-500 group-hover:to-brand-700 flex items-center justify-center text-brand-400 group-hover:text-white transition-all duration-300 shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs uppercase tracking-wider text-slate-400 font-bold mb-1.5">Visit Us</p>
                        <p class="text-white text-base font-semibold leading-snug"><?= $site['address'] ?></p>
                    </div>
                </a>

                <!-- Phone Card -->
                <a href="tel:<?= $site['phone_link'] ?>" class="group flex items-start gap-4 p-5 rounded-2xl bg-white/[0.03] hover:bg-white/[0.06] border border-white/5 hover:border-accent/30 transition-all duration-300">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-accent/20 to-amber-600/20 group-hover:from-accent group-hover:to-amber-600 flex items-center justify-center text-accent group-hover:text-white transition-all duration-300 shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs uppercase tracking-wider text-slate-400 font-bold mb-1.5">Call Us</p>
                        <p class="text-white text-base font-semibold"><?= $site['phone'] ?></p>
                        <p class="text-slate-400 text-sm mt-0.5 font-medium">24/7 Emergency Available</p>
                    </div>
                </a>

                <!-- Email Card -->
                <a href="mailto:<?= $site['email'] ?>" class="group flex items-start gap-4 p-5 rounded-2xl bg-white/[0.03] hover:bg-white/[0.06] border border-white/5 hover:border-cyan-400/30 transition-all duration-300">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-cyan-400/20 to-cyan-600/20 group-hover:from-cyan-400 group-hover:to-cyan-600 flex items-center justify-center text-cyan-400 group-hover:text-white transition-all duration-300 shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs uppercase tracking-wider text-slate-400 font-bold mb-1.5">Email Us</p>
                        <p class="text-white text-base font-semibold break-all"><?= $site['email'] ?></p>
                        <p class="text-slate-400 text-sm mt-0.5 font-medium">Replies within 24 hours</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- ============== BOTTOM BAR ============== -->
    <div class="relative border-t border-white/5 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
                <p class="text-slate-300 text-center md:text-left font-semibold">
                    &copy; <?= date('Y') ?> <?= $site['name'] ?>. All rights reserved.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-slate-300 font-medium">
                    <a href="<?= $base_path ?>privacy-policy.php" class="hover:text-white transition-colors duration-200">Privacy Policy</a>
                    <span class="w-1 h-1 rounded-full bg-slate-600"></span>
                    <a href="<?= $base_path ?>terms-conditions.php" class="hover:text-white transition-colors duration-200">Terms &amp; Conditions</a>
                    <span class="w-1 h-1 rounded-full bg-slate-600"></span>
                    <span class="text-slate-400">Made &amp; Designed by <a href="https://brandingpioneers.com/" target="_blank" rel="noopener" class="text-brand-400 hover:text-brand-300 font-bold transition-colors duration-200">Branding Pioneers</a></span>
                </div>
            </div>
        </div>
    </div>

</footer>

<script>
(function() {
    // Global Premium FAQ toggle handler using Event Delegation for bulletproof robustness
    document.addEventListener('click', function(e) {
        const toggle = e.target.closest('.faq-toggle');
        if (!toggle) return;

        e.preventDefault();
        console.log('FAQ toggle clicked:', toggle);

        const item = toggle.closest('.faq-item');
        if (!item) return;

        const content = item.querySelector('.faq-content');
        const symbol = item.querySelector('.faq-symbol');
        const isOpen = item.classList.contains('active');

        console.log('FAQ state - Is open:', isOpen, 'Item:', item);

        // Close all other items in the same category/container
        const parentSection = item.closest('.space-y-4') || item.closest('.faq-category') || item.parentElement;
        if (parentSection) {
            parentSection.querySelectorAll('.faq-item').forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    const otherContent = otherItem.querySelector('.faq-content');
                    if (otherContent) otherContent.classList.add('hidden');

                    const otherSymbol = otherItem.querySelector('.faq-symbol');
                    if (otherSymbol) {
                        otherSymbol.textContent = '+';
                    }
                }
            });
        }

        // Toggle clicked item
        if (isOpen) {
            item.classList.remove('active');
            if (content) content.classList.add('hidden');
            if (symbol) {
                symbol.textContent = '+';
            }
            console.log('FAQ closed successfully');
        } else {
            item.classList.add('active');
            if (content) content.classList.remove('hidden');
            if (symbol) {
                symbol.textContent = '—';
            }
            console.log('FAQ opened successfully');
        }
    });
})();
</script>

<!-- Floating Call Button (Bouncing) - Appears on All Pages -->
<a href="tel:<?= $site['phone_link'] ?>" class="floating-call-btn" aria-label="Call now">
    <span class="ripple"></span>
    <span class="ripple ripple-2"></span>
    <span class="ripple ripple-3"></span>
    <span class="floating-call-circle">
        <svg class="w-6 h-6 text-white relative z-10" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
        </svg>
    </span>
</a>

<style>
    .floating-call-btn {
        position: fixed;
        bottom: 90px;
        right: 24px;
        z-index: 9999;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #f59e0b;
        color: #ffffff;
        padding: 0;
        width: 56px;
        height: 56px;
        border-radius: 9999px;
        box-shadow: 0 10px 30px -5px rgba(245, 158, 11, 0.5), 0 8px 15px -6px rgba(0, 0, 0, 0.2);
        font-weight: 700;
        font-size: 15px;
        text-decoration: none;
        transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        animation: float-bounce 2s ease-in-out infinite;
        overflow: hidden;
    }

    .floating-call-circle {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        background: #ea580c;
        border-radius: 9999px;
        box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.15);
    }

    .floating-call-btn:hover {
        animation: none;
        background: #ea580c;
        transform: scale(1.08) translateY(-2px);
        box-shadow: 0 15px 40px -5px rgba(245, 158, 11, 0.6), 0 10px 20px -6px rgba(0, 0, 0, 0.25);
    }

    .floating-call-btn:active {
        transform: scale(0.95);
    }

    @keyframes float-bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .floating-call-label {
        display: none;
    }

    .floating-call-btn .ripple {
        position: absolute;
        inset: 0;
        border-radius: 9999px;
        background: rgba(245, 158, 11, 0.5);
        animation: ripple-expand 2s ease-out infinite;
        z-index: 0;
    }

    .floating-call-btn .ripple-2 {
        animation-delay: 0.66s;
    }

    .floating-call-btn .ripple-3 {
        animation-delay: 1.33s;
    }

    @keyframes ripple-expand {
        0% {
            transform: scale(1);
            opacity: 0.6;
        }
        100% {
            transform: scale(1.6);
            opacity: 0;
        }
    }

    @media (max-width: 1023px) {
        .floating-call-btn {
            bottom: 80px;
            right: 18px;
        }
    }
</style>

</body>
</html>

<!-- Mobile Sticky Bottom Navbar -->
<div class="lg:hidden fixed bottom-0 left-0 right-0 z-50">
    <!-- Backdrop with gradient + blur -->
    <div class="absolute inset-0 bg-white/95 backdrop-blur-md border-t border-slate-200/80 shadow-[0_-8px_24px_rgba(0,0,0,0.08)]"></div>

    <!-- Decorative top accent -->
    <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-brand-400 via-cyan-400 to-brand-600"></div>

    <div class="relative flex items-center justify-center max-w-md mx-auto px-2 py-2.5">
        <div class="flex items-center justify-between w-full gap-1">

            <!-- Facebook -->
            <a href="<?= $site['social']['facebook'] ?>" target="_blank" rel="noopener" class="group flex flex-col items-center gap-1 flex-1 py-1 rounded-xl hover:bg-slate-50 transition-all duration-200" aria-label="Facebook">
                <div class="relative w-10 h-10 rounded-2xl bg-[#1877F2] flex items-center justify-center shadow-sm shadow-blue-500/30 group-hover:scale-110 group-active:scale-95 transition-transform duration-200">
                    <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </div>
                <span class="text-[9px] text-slate-600 font-semibold leading-none tracking-wide">Facebook</span>
            </a>

            <!-- Instagram -->
            <a href="<?= $site['social']['instagram'] ?>" target="_blank" rel="noopener" class="group flex flex-col items-center gap-1 flex-1 py-1 rounded-xl hover:bg-slate-50 transition-all duration-200" aria-label="Instagram">
                <div class="relative w-10 h-10 rounded-2xl flex items-center justify-center overflow-hidden shadow-sm shadow-pink-500/30 group-hover:scale-110 group-active:scale-95 transition-transform duration-200">
                    <img src="<?= $base_path ?>assets/logo/instagram.svg" alt="Instagram" class="w-full h-full object-cover">
                </div>
                <span class="text-[9px] text-slate-600 font-semibold leading-none tracking-wide">Instagram</span>
            </a>

            <!-- YouTube -->
            <a href="<?= $site['social']['youtube'] ?>" target="_blank" rel="noopener" class="group flex flex-col items-center gap-1 flex-1 py-1 rounded-xl hover:bg-slate-50 transition-all duration-200" aria-label="YouTube">
                <div class="relative w-10 h-10 rounded-2xl bg-[#FF0000] flex items-center justify-center shadow-sm shadow-red-500/30 group-hover:scale-110 group-active:scale-95 transition-transform duration-200">
                    <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M21.582 6.186a2.506 2.506 0 0 0-1.768-1.768C18.254 4 12 4 12 4s-6.254 0-7.814.418A2.506 2.506 0 0 0 2.418 6.186C2 7.746 2 12 2 12s0 4.254.418 5.814a2.506 2.506 0 0 0 1.768 1.768C5.746 20 12 20 12 20s6.254 0 7.814-.418a2.506 2.506 0 0 0 1.768-1.768C22 16.254 22 12 22 12s0-4.254-.418-5.814zM10 15.464V8.536L16 12l-6 3.464z"/>
                    </svg>
                </div>
                <span class="text-[9px] text-slate-600 font-semibold leading-none tracking-wide">YouTube</span>
            </a>

            <!-- WhatsApp -->
            <a href="https://wa.me/<?= $site['phone_link'] ?>" target="_blank" rel="noopener" class="group flex flex-col items-center gap-1 flex-1 py-1 rounded-xl hover:bg-slate-50 transition-all duration-200" aria-label="WhatsApp">
                <div class="relative w-10 h-10 rounded-2xl bg-[#25D366] flex items-center justify-center shadow-sm shadow-green-500/30 group-hover:scale-110 group-active:scale-95 transition-transform duration-200">
                    <span class="absolute -top-0.5 -right-0.5 w-2.5 h-2.5 bg-green-400 rounded-full ring-2 ring-white animate-pulse"></span>
                    <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/>
                    </svg>
                </div>
                <span class="text-[9px] text-slate-600 font-semibold leading-none tracking-wide">WhatsApp</span>
            </a>

            <!-- Book Now (primary CTA) -->
            <a href="<?= $base_path ?>book-appointment.php" class="group flex flex-col items-center gap-1 flex-1 py-1 rounded-xl transition-all duration-200" aria-label="Book appointment">
                <div class="relative w-10 h-10 rounded-2xl bg-gradient-to-br from-brand-500 via-brand-600 to-brand-700 flex items-center justify-center shadow-md shadow-brand-500/40 ring-1 ring-white/20 group-hover:scale-110 group-active:scale-95 group-hover:shadow-lg group-hover:shadow-brand-500/50 transition-all duration-200">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <rect x="3" y="4" width="18" height="18" rx="2.5"/>
                        <path d="M16 2v4M8 2v4M3 10h18"/>
                        <path d="M12 14v4M10 16h4"/>
                    </svg>
                </div>
                <span class="text-[9px] text-brand-700 font-bold leading-none tracking-wide">Book Now</span>
            </a>

        </div>
    </div>
</div>

<!-- Floating WhatsApp Button (Desktop View Only) -->
<a href="https://wa.me/<?= $site['phone_link'] ?>" target="_blank" rel="noopener" class="hidden lg:flex fixed bottom-6 right-6 z-50 group" aria-label="WhatsApp Dr. Kumar">
    <div class="relative flex items-center">
        <!-- Hover tooltip/label -->
        <div class="absolute right-full mr-3 bg-white rounded-xl shadow-2xl p-4 whitespace-nowrap opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-x-2 group-hover:translate-x-0 border border-slate-100">
            <p class="font-bold text-slate-900"><?= $site['phone'] ?></p>
            <p class="text-sm text-slate-500">WhatsApp Us</p>
        </div>
        <!-- Button circle -->
        <div class="w-14 h-14 bg-[#25D366] hover:bg-[#20ba5a] text-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 shadow-green-500/20">
            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.464 3.488"/></svg>
        </div>
    </div>
</a>
