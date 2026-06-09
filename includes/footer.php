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
                        <p class="text-slate-400 text-sm lg:text-base mt-1">Speak with Dr. Kumar today — 29+ years of surgical excellence.</p>
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

            <p class="text-sm leading-relaxed text-slate-400 mb-5">
                Clinical Lead &amp; HOD, Minimal Access, Robotic, Hernia &amp; Abdominal Wall Reconstruction Surgery at Billroth Hospital, Chennai.
            </p>

            <!-- Trust Stats -->
            <div class="grid grid-cols-3 gap-2 mb-6 p-4 rounded-2xl bg-white/5 border border-white/5">
                <div class="text-center">
                    <p class="text-white font-bold text-lg">29+</p>
                    <p class="text-slate-500 text-[10px] uppercase tracking-wider">Years</p>
                </div>
                <div class="text-center border-x border-white/5">
                    <p class="text-white font-bold text-lg">10K+</p>
                    <p class="text-slate-500 text-[10px] uppercase tracking-wider">Surgeries</p>
                </div>
                <div class="text-center">
                    <p class="text-white font-bold text-lg">20K+</p>
                    <p class="text-slate-500 text-[10px] uppercase tracking-wider">Laparoscopic</p>
                </div>
            </div>

            <!-- Social Icons -->
            <div>
                <p class="text-xs uppercase tracking-widest text-slate-500 font-semibold mb-3">Follow Us</p>
                <div class="flex gap-2.5">
                    <a href="<?= $site['social']['facebook'] ?>" aria-label="Facebook" target="_blank" rel="noopener" class="group w-10 h-10 rounded-xl bg-white/5 hover:bg-[#1877F2] border border-white/10 hover:border-[#1877F2] flex items-center justify-center text-slate-300 hover:text-white transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#1877F2]/30">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.6 9.9V14.9H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.7l-.4 2.9h-2.3V22A10 10 0 0022 12z"/></svg>
                    </a>
                    <a href="<?= $site['social']['instagram'] ?>" aria-label="Instagram" target="_blank" rel="noopener" class="group w-10 h-10 rounded-xl bg-white/5 hover:bg-gradient-to-br hover:from-[#f09433] hover:via-[#dc2743] hover:to-[#cc2366] border border-white/10 hover:border-transparent flex items-center justify-center text-slate-300 hover:text-white transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-pink-500/30">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4 1 .5.4.8.9 1 1.4.2.4.4 1 .4 2.2.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-1 1.4-.4.5-.9.8-1.4 1-.4.2-1 .4-2.2.4-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-1-.5-.4-.8-.9-1-1.4-.2-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c.1-1.2.2-1.8.4-2.2.2-.6.5-1 1-1.4.4-.5.9-.8 1.4-1 .4-.2 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2zm0 5.3a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm5.6-.2a1.05 1.05 0 11-2.1 0 1.05 1.05 0 012.1 0zM12 9.5a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"/></svg>
                    </a>
                    <a href="<?= $site['social']['linkedin'] ?>" aria-label="LinkedIn" target="_blank" rel="noopener" class="group w-10 h-10 rounded-xl bg-white/5 hover:bg-[#0A66C2] border border-white/10 hover:border-[#0A66C2] flex items-center justify-center text-slate-300 hover:text-white transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#0A66C2]/30">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0H5a5 5 0 00-5 5v14a5 5 0 005 5h14a5 5 0 005-5V5a5 5 0 00-5-5zM8 19H5V8h3v11zM6.5 6.7a1.8 1.8 0 110-3.5 1.8 1.8 0 010 3.5zM20 19h-3v-5.6c0-3.4-4-3.1-4 0V19h-3V8h3v1.8c1.4-2.6 7-2.8 7 2.5V19z"/></svg>
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
            <h3 class="relative text-white font-semibold text-sm uppercase tracking-wider mb-5 pb-2 inline-block">
                Quick Links
                <span class="absolute bottom-0 left-0 w-8 h-0.5 bg-gradient-to-r from-brand-500 to-brand-700 rounded-full"></span>
            </h3>
            <ul class="space-y-2.5 text-sm">
                <?php foreach ($nav as $label => $link): ?>
                    <li>
                        <a href="<?= $base_path . $link ?>" class="group flex items-center gap-2 text-slate-400 hover:text-brand-400 transition-colors duration-200">
                            <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                            <span><?= $label ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- TREATMENTS -->
        <div class="lg:col-span-3">
            <h3 class="relative text-white font-semibold text-sm uppercase tracking-wider mb-5 pb-2 inline-block">
                Treatments
                <span class="absolute bottom-0 left-0 w-8 h-0.5 bg-gradient-to-r from-brand-500 to-brand-700 rounded-full"></span>
            </h3>
            <ul class="space-y-2.5 text-sm">
                <li><a href="<?= $base_path ?>treatment/hernia-surgery.php" class="group flex items-center gap-2 text-slate-400 hover:text-brand-400 transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    Hernia Surgery
                </a></li>
                <li><a href="<?= $base_path ?>treatment/laparoscopic-hernia-surgery.php" class="group flex items-center gap-2 text-slate-400 hover:text-brand-400 transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    Laparoscopic Surgery
                </a></li>
                <li><a href="<?= $base_path ?>robotic-hernia-surgery.php" class="group flex items-center gap-2 text-slate-400 hover:text-brand-400 transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    Robotic Surgery
                </a></li>
                <li><a href="<?= $base_path ?>treatment/etep-repair.php" class="group flex items-center gap-2 text-slate-400 hover:text-brand-400 transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    eTEP Repair
                </a></li>
                <li><a href="<?= $base_path ?>treatment/mesh-repair.php" class="group flex items-center gap-2 text-slate-400 hover:text-brand-400 transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    Mesh Repair
                </a></li>
                <li><a href="<?= $base_path ?>treatment/recovery.php" class="group flex items-center gap-2 text-slate-400 hover:text-brand-400 transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    Recovery
                </a></li>
                <li><a href="<?= $base_path ?>treatment/abdominal-wall-reconstruction.php" class="group flex items-center gap-2 text-slate-400 hover:text-brand-400 transition-colors duration-200">
                    <svg class="w-3 h-3 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    Abdominal Wall Reconstruction
                </a></li>
                <li><a href="<?= $base_path ?>treatment/diastasis-recti.php" class="group flex items-center gap-2 text-slate-400 hover:text-brand-400 transition-colors duration-200">
                    <svg class="w-3.5 h-3.5 text-brand-500/60 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    <span>Diastasis Recti (Divarication of Recti)</span>
                </a></li>
            </ul>
        </div>

        <!-- HERNIA TYPES -->
        <div class="lg:col-span-3">
            <h3 class="relative text-white font-semibold text-sm uppercase tracking-wider mb-5 pb-2 inline-block">
                Hernia Types
                <span class="absolute bottom-0 left-0 w-8 h-0.5 bg-gradient-to-r from-brand-500 to-brand-700 rounded-full"></span>
            </h3>
            <div class="grid grid-cols-2 gap-x-3 gap-y-2.5 text-sm">
                <a href="<?= $base_path ?>my_types/inguinal-hernia.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Inguinal</a>
                <a href="<?= $base_path ?>my_types/umbilical-hernia.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Umbilical</a>
                <a href="<?= $base_path ?>my_types/incisional-hernia.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Incisional</a>
                <a href="<?= $base_path ?>my_types/ventral-hernia.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Ventral</a>
                <a href="<?= $base_path ?>my_types/hiatal-hernia.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Hiatal</a>
                <a href="<?= $base_path ?>my_types/femoral-hernia.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Femoral</a>
                <a href="<?= $base_path ?>my_types/strangulated-hernia.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Strangulated</a>
                <a href="<?= $base_path ?>my_types/sports-hernia.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Sports</a>
                <a href="<?= $base_path ?>special-considerations/complex-hernia-info.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Complex</a>
                <a href="<?= $base_path ?>my_types/recurrent-hernia.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Recurrent</a>
                <a href="<?= $base_path ?>my_types/rare-hernia.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Rare</a>
                <a href="<?= $base_path ?>my_types/epigastric-hernia.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Epigastric</a>
                <a href="<?= $base_path ?>my_types/rare-hernia.php#supraumbilical" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Supraumbilical</a>
                <a href="<?= $base_path ?>my_types/rare-hernia.php#lumbar" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Lumbar</a>
                <a href="<?= $base_path ?>my_types/rare-hernia.php#spigelian" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Spigelian</a>
                <a href="<?= $base_path ?>my_types/rare-hernia.php#diaphragmatic" class="text-slate-400 hover:text-brand-400 transition-colors duration-200 truncate">Diaphragmatic</a>
            </div>

            <!-- Learn More Mini Section -->
            <div class="mt-6 pt-5 border-t border-white/5">
                <h4 class="text-white text-xs uppercase tracking-wider font-semibold mb-3">Learn More</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="<?= $base_path ?>hernia/what-is-hernia.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200">What is Hernia</a></li>
                    <li><a href="<?= $base_path ?>hernia/causes.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200">Causes</a></li>
                    <li><a href="<?= $base_path ?>hernia/symptoms.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200">Symptoms</a></li>
                    <li><a href="<?= $base_path ?>hernia/diagnosis.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200">Diagnosis</a></li>
                    <li><a href="<?= $base_path ?>hernia/complications.php" class="text-slate-400 hover:text-brand-400 transition-colors duration-200">Complications</a></li>
                    <li><a href="<?= $base_path ?>book-appointment.php" class="text-brand-400 hover:text-brand-300 font-semibold transition-colors duration-200">Book Appointment →</a></li>
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
                        <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold mb-1">Visit Us</p>
                        <p class="text-white text-sm font-medium leading-snug"><?= $site['address'] ?></p>
                    </div>
                </a>

                <!-- Phone Card -->
                <a href="tel:<?= $site['phone_link'] ?>" class="group flex items-start gap-4 p-5 rounded-2xl bg-white/[0.03] hover:bg-white/[0.06] border border-white/5 hover:border-accent/30 transition-all duration-300">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-accent/20 to-amber-600/20 group-hover:from-accent group-hover:to-amber-600 flex items-center justify-center text-accent group-hover:text-white transition-all duration-300 shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold mb-1">Call Us</p>
                        <p class="text-white text-sm font-medium"><?= $site['phone'] ?></p>
                        <p class="text-slate-500 text-xs mt-0.5">24/7 Emergency Available</p>
                    </div>
                </a>

                <!-- Email Card -->
                <a href="mailto:<?= $site['email'] ?>" class="group flex items-start gap-4 p-5 rounded-2xl bg-white/[0.03] hover:bg-white/[0.06] border border-white/5 hover:border-cyan-400/30 transition-all duration-300">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-cyan-400/20 to-cyan-600/20 group-hover:from-cyan-400 group-hover:to-cyan-600 flex items-center justify-center text-cyan-400 group-hover:text-white transition-all duration-300 shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold mb-1">Email Us</p>
                        <p class="text-white text-sm font-medium break-all"><?= $site['email'] ?></p>
                        <p class="text-slate-500 text-xs mt-0.5">Replies within 24 hours</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- ============== BOTTOM BAR ============== -->
    <div class="relative border-t border-white/5 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
                <p class="text-slate-500 text-center md:text-left">
                    &copy; <?= date('Y') ?> <?= $site['name'] ?>. All rights reserved.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-slate-500">
                    <a href="<?= $base_path ?>privacy-policy.php" class="hover:text-brand-400 transition-colors duration-200">Privacy Policy</a>
                    <span class="w-1 h-1 rounded-full bg-slate-700"></span>
                    <a href="<?= $base_path ?>terms-conditions.php" class="hover:text-brand-400 transition-colors duration-200">Terms &amp; Conditions</a>
                    <span class="w-1 h-1 rounded-full bg-slate-700"></span>
                    <span class="text-slate-600">Designed for patient care &amp; SEO performance.</span>
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

</body>
</html>

<!-- Mobile Sticky Bottom Navbar -->
<div class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-slate-200 shadow-[0_-4px_20px_rgba(0,0,0,0.1)] z-50 px-1 py-2">
    <div class="flex items-center justify-center max-w-md mx-auto">
        <!-- Social Icons with Labels - Equally Spaced -->
        <div class="flex items-center justify-between w-full">
            <a href="<?= $site['social']['facebook'] ?>" target="_blank" rel="noopener" class="flex flex-col items-center">
                <div class="w-8 h-8 rounded-full bg-[#1877F2] hover:bg-[#166fe5] text-white flex items-center justify-center transition">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.6 9.9V14.9H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.7l-.4 2.9h-2.3V22A10 10 0 0022 12z"/></svg>
                </div>
                <span class="text-[7px] text-slate-500 font-medium mt-0.5">Facebook</span>
            </a>
            <a href="<?= $site['social']['instagram'] ?>" target="_blank" rel="noopener" class="flex flex-col items-center">
                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-[#f09433] via-[#e6683c] via-[#dc2743] to-[#cc2366] text-white hover:opacity-90 flex items-center justify-center transition">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4 1 .5.4.8.9 1 1.4.2.4.4 1 .4 2.2.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-1 1.4-.4.5-.9.8-1.4 1-.4.2-1 .4-2.2.4-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-1-.5-.4-.8-.9-1-1.4-.2-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c.1-1.2.2-1.8.4-2.2.2-.6.5-1 1-1.4.4-.5.9-.8 1.4-1 .4-.2 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2zm0 5.3a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm5.6-.2a1.05 1.05 0 11-2.1 0 1.05 1.05 0 012.1 0zM12 9.5a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"/></svg>
                </div>
                <span class="text-[7px] text-slate-500 font-medium mt-0.5">Instagram</span>
            </a>
            <a href="<?= $site['social']['youtube'] ?>" target="_blank" rel="noopener" class="flex flex-col items-center">
                <div class="w-8 h-8 rounded-full bg-[#FF0000] hover:bg-[#e60000] text-white flex items-center justify-center transition">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5 6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 002.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 002.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8zM9.6 15.6V8.4l6.3 3.6-6.3 3.6z"/></svg>
                </div>
                <span class="text-[7px] text-slate-500 font-medium mt-0.5">YouTube</span>
            </a>
            <a href="tel:<?= $site['phone_link'] ?>" aria-label="Call Dr. Kumar" class="flex flex-col items-center">
                <div class="w-8 h-8 rounded-full bg-[#0891b2] hover:bg-[#0e7490] text-white flex items-center justify-center transition">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                </div>
                <span class="text-[7px] text-slate-500 font-medium mt-0.5">Call</span>
            </a>
            <a href="https://wa.me/<?= $site['phone_link'] ?>" aria-label="WhatsApp" target="_blank" rel="noopener" class="flex flex-col items-center">
                <div class="w-8 h-8 rounded-full bg-[#25D366] hover:bg-[#1da851] text-white flex items-center justify-center transition">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.464 3.488"/></svg>
                </div>
                <span class="text-[7px] text-slate-500 font-medium mt-0.5">WhatsApp</span>
            </a>
            <a href="<?= $base_path ?>book-appointment.php" class="flex flex-col items-center">
                <div class="w-8 h-8 rounded-full bg-gradient-to-r from-brand-600 to-brand-700 hover:from-brand-700 hover:to-brand-800 text-white flex items-center justify-center transition shadow-md">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <span class="text-[7px] text-slate-500 font-medium mt-0.5">Book Now</span>
            </a>
        </div>
    </div>
</div>

<!-- Floating WhatsApp Button (Desktop View Only) -->
<a href="https://wa.me/<?= $site['phone_link'] ?>" target="_blank" rel="noopener" class="hidden lg:flex fixed bottom-24 right-6 z-50 group" aria-label="WhatsApp Dr. Kumar">
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
