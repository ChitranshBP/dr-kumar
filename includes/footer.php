<?php require_once __DIR__ . '/config.php'; ?>

<footer class="bg-slate-900 text-slate-300">
    <div class="max-w-7xl mx-auto px-4 py-14 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

        <div>
            <img src="<?= $base_path ?>assets/images/herniacare360-new-logo.png" alt="Dr. Kumar Logo" class="h-16 w-auto mb-4 bg-white rounded-md p-2">
            <p class="text-sm leading-relaxed mb-4">
                Clinical Lead &amp; HOD, Minimal Access, Robotic, Hernia &amp; Abdominal Wall Reconstruction Surgery at Billroth Hospital, Chennai.
            </p>
            <div class="flex gap-3">
                <a href="<?= $site['social']['facebook'] ?>" aria-label="Facebook" class="bg-[#1877F2] hover:bg-[#166fe5] w-9 h-9 rounded-full flex items-center justify-center text-white transition">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.6 9.9V14.9H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.7l-.4 2.9h-2.3V22A10 10 0 0022 12z"/></svg>
                </a>
                <a href="<?= $site['social']['instagram'] ?>" aria-label="Instagram" class="bg-gradient-to-br from-[#f09433] via-[#e6683c] via-[#dc2743] to-[#cc2366] w-9 h-9 rounded-full flex items-center justify-center text-white transition hover:opacity-90">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4 1 .5.4.8.9 1 1.4.2.4.4 1 .4 2.2.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-1 1.4-.4.5-.9.8-1.4 1-.4.2-1 .4-2.2.4-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-1-.5-.4-.8-.9-1-1.4-.2-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c.1-1.2.2-1.8.4-2.2.2-.6.5-1 1-1.4.4-.5.9-.8 1.4-1 .4-.2 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2zm0 5.3a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm5.6-.2a1.05 1.05 0 11-2.1 0 1.05 1.05 0 012.1 0zM12 9.5a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"/></svg>
                </a>
                <a href="<?= $site['social']['linkedin'] ?>" aria-label="LinkedIn" class="bg-[#0A66C2] hover:bg-[#0958a8] w-9 h-9 rounded-full flex items-center justify-center text-white transition">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0H5a5 5 0 00-5 5v14a5 5 0 005 5h14a5 5 0 005-5V5a5 5 0 00-5-5zM8 19H5V8h3v11zM6.5 6.7a1.8 1.8 0 110-3.5 1.8 1.8 0 010 3.5zM20 19h-3v-5.6c0-3.4-4-3.1-4 0V19h-3V8h3v1.8c1.4-2.6 7-2.8 7 2.5V19z"/></svg>
                </a>
                <a href="<?= $site['social']['youtube'] ?>" aria-label="YouTube" class="bg-[#FF0000] hover:bg-[#e60000] w-9 h-9 rounded-full flex items-center justify-center text-white transition">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5 6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 002.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 002.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8zM9.6 15.6V8.4l6.3 3.6-6.3 3.6z"/></svg>
                </a>
            </div>
        </div>

        <div>
            <h3 class="text-white font-semibold text-lg mb-4">Quick Links</h3>
            <ul class="space-y-2 text-sm">
                <?php foreach ($nav as $label => $link): ?>
                    <li><a href="<?= $base_path . $link ?>" class="hover:text-brand-500 transition"><?= $label ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div>
            <h3 class="text-white font-semibold text-lg mb-4">Treatments</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="<?= $base_path ?>treatment/hernia-surgery.php" class="hover:text-brand-500">Hernia Surgery</a></li>
                <li><a href="<?= $base_path ?>treatment/laparoscopic-hernia-surgery.php" class="hover:text-brand-500">Laparoscopic Surgery</a></li>
                <li><a href="<?= $base_path ?>robotic-hernia-surgery.php" class="hover:text-brand-500">Robotic Surgery</a></li>
                <li><a href="<?= $base_path ?>treatment/etep-repair.php" class="hover:text-brand-500">eTEP Repair</a></li>
                <li><a href="<?= $base_path ?>treatment/mesh-repair.php" class="hover:text-brand-500">Mesh Repair</a></li>
                <li><a href="<?= $base_path ?>treatment/recovery.php" class="hover:text-brand-500">Recovery</a></li>
                <li><a href="<?= $base_path ?>treatment/hernia-surgery.php" class="hover:text-brand-500">Abdominal Wall Reconstruction</a></li>
                <li><a href="<?= $base_path ?>special-considerations/pregnancy.php" class="hover:text-brand-500">Diastasis Recti (Divarication of Recti)</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-white font-semibold text-lg mb-4">Hernia Types</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="<?= $base_path ?>my_types/inguinal-hernia.php" class="hover:text-brand-500">Inguinal Hernia</a></li>
                <li><a href="<?= $base_path ?>my_types/umbilical-hernia.php" class="hover:text-brand-500">Umbilical Hernia</a></li>
                <li><a href="<?= $base_path ?>my_types/incisional-hernia.php" class="hover:text-brand-500">Incisional Hernia</a></li>
                <li><a href="<?= $base_path ?>my_types/ventral-hernia.php" class="hover:text-brand-500">Ventral Hernia</a></li>
                <li><a href="<?= $base_path ?>my_types/hiatal-hernia.php" class="hover:text-brand-500">Hiatal Hernia</a></li>
                <li><a href="<?= $base_path ?>my_types/femoral-hernia.php" class="hover:text-brand-500">Femoral Hernia</a></li>
                <li><a href="<?= $base_path ?>my_types/strangulated-hernia.php" class="hover:text-brand-500">Strangulated Hernia</a></li>
                <li><a href="<?= $base_path ?>my_types/sports-hernia.php" class="hover:text-brand-500">Sports Hernia</a></li>
                <li><a href="<?= $base_path ?>special-considerations/complex-hernia-info.php" class="hover:text-brand-500">Complex Hernia</a></li>
                <li><a href="<?= $base_path ?>my_types/recurrent-hernia.php" class="hover:text-brand-500">Recurrent Hernia</a></li>
                <li><a href="<?= $base_path ?>my_types/rare-hernia.php" class="hover:text-brand-500">Rare Hernia</a></li>
                <li><a href="<?= $base_path ?>my_types/epigastric-hernia.php" class="hover:text-brand-500">Epigastric Hernia</a></li>
                <li><a href="#" class="hover:text-brand-500">Supraumbilical Hernia</a></li>
                <li><a href="#" class="hover:text-brand-500">Lumbar Hernia</a></li>
                <li><a href="#" class="hover:text-brand-500">Spigelian Hernia</a></li>
                <li><a href="#" class="hover:text-brand-500">Diaphragmatic Hernia</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-white font-semibold text-lg mb-4">Learn More</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="<?= $base_path ?>hernia/what-is-hernia.php" class="hover:text-brand-500">What is Hernia</a></li>
                <li><a href="<?= $base_path ?>hernia/causes.php" class="hover:text-brand-500">Causes</a></li>
                <li><a href="<?= $base_path ?>hernia/symptoms.php" class="hover:text-brand-500">Symptoms</a></li>
                <li><a href="<?= $base_path ?>hernia/diagnosis.php" class="hover:text-brand-500">Diagnosis</a></li>
                <li><a href="<?= $base_path ?>hernia/complications.php" class="hover:text-brand-500">Complications</a></li>
                <li><a href="<?= $base_path ?>book-appointment.php" class="hover:text-brand-500">Book Appointment</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-white font-semibold text-lg mb-4">Contact Us</h3>
            <ul class="space-y-3 text-sm">
                <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-brand-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                    <span><?= $site['address'] ?></span>
                </li>
                <li class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-brand-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    <a href="tel:<?= $site['phone_link'] ?>" class="hover:text-brand-500"><?= $site['phone'] ?></a>
                </li>
                <li class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-brand-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg>
                    <a href="mailto:<?= $site['email'] ?>" class="hover:text-brand-500"><?= $site['email'] ?></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 py-5 flex flex-col md:flex-row justify-between items-center gap-2 text-sm">
            <p>&copy; <?= date('Y') ?> <?= $site['name'] ?>. All rights reserved.</p>
            <p>Designed for patient care &amp; SEO performance.</p>
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
<div class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-slate-200 shadow-[0_-4px_20px_rgba(0,0,0,0.1)] z-50 px-4 py-3">
    <div class="flex items-center justify-between gap-3 max-w-md mx-auto">
        <!-- Social Icons -->
        <div class="flex items-center gap-2">
            <a href="<?= $site['social']['facebook'] ?>" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-[#1877F2] hover:bg-[#166fe5] text-white flex items-center justify-center transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.6 9.9V14.9H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.7l-.4 2.9h-2.3V22A10 10 0 0022 12z"/></svg>
            </a>
            <a href="<?= $site['social']['instagram'] ?>" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-gradient-to-br from-[#f09433] via-[#e6683c] via-[#dc2743] to-[#cc2366] text-white hover:opacity-90 flex items-center justify-center transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4 1 .5.4.8.9 1 1.4.2.4.4 1 .4 2.2.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-1 1.4-.4.5-.9.8-1.4 1-.4.2-1 .4-2.2.4-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-1-.5-.4-.8-.9-1-1.4-.2-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c.1-1.2.2-1.8.4-2.2.2-.6.5-1 1-1.4.4-.5.9-.8 1.4-1 .4-.2 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2zm0 5.3a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm5.6-.2a1.05 1.05 0 11-2.1 0 1.05 1.05 0 012.1 0zM12 9.5a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"/></svg>
            </a>
            <a href="<?= $site['social']['youtube'] ?>" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-[#FF0000] hover:bg-[#e60000] text-white flex items-center justify-center transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5 6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 002.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 002.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8zM9.6 15.6V8.4l6.3 3.6-6.3 3.6z"/></svg>
            </a>
            <a href="tel:<?= $site['phone_link'] ?>" aria-label="Call Dr. Kumar" class="w-10 h-10 rounded-full bg-[#25D366] hover:bg-[#1da851] text-white flex items-center justify-center transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
            </a>
        </div>

        <!-- Book Now Button -->
        <a href="<?= $base_path ?>book-appointment.php" class="flex-1 flex items-center justify-center gap-2 bg-gradient-to-r from-brand-600 to-brand-700 hover:from-brand-700 hover:to-brand-800 text-white font-semibold px-6 py-3 rounded-full shadow-md transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            Book Now
        </a>
    </div>
</div>
