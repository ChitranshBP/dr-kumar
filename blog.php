<?php
$page_title = 'Medical Insights & Surgical Blog | Dr. Kumar';
$page_description = 'Explore informative articles and surgical insights from Dr. Kumar, focusing on hernia treatments, laparoscopic repairs, robotic surgery, and patient recovery.';
$page_keywords = 'hernia blog, medical insights Chennai, robotic surgery articles, laparoscopy guide, hernia recovery tips';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="absolute top-1/4 right-0 w-96 h-96 bg-brand-500/20 rounded-full blur-[120px]"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <nav class="text-sm mb-6 text-brand-200">
            <a href="index.php" class="hover:text-white transition">Home</a>
            <span class="mx-2">/</span>
            <span class="text-white">Blog</span>
        </nav>
        
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10 shadow-sm">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Expert Medical Insights
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Surgical Insights & <span class="text-accent">Health Advice</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed max-w-2xl">
                Stay updated with the latest advancements in minimally invasive, laparoscopic, and robotic hernia surgery, along with practical recovery tips from Dr. Kumar.
            </p>
        </div>
    </div>
</section>

<!-- Search & Filtering Section -->
<section class="bg-slate-50 border-b border-slate-200/80 py-8 sticky top-[72px] z-30 shadow-sm">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
            <!-- Filter Tabs -->
            <div class="flex flex-wrap items-center gap-2" id="filterTabs">
                <button data-target="all" class="filter-btn bg-brand-700 text-white font-medium px-5 py-2.5 rounded-full text-sm shadow-sm transition duration-300">
                    All Articles
                </button>
                <button data-target="hernia" class="filter-btn bg-white text-slate-600 hover:bg-slate-100 font-medium px-5 py-2.5 rounded-full text-sm shadow-sm border border-slate-200 transition duration-300">
                    Hernia Surgery
                </button>
                <button data-target="recovery" class="filter-btn bg-white text-slate-600 hover:bg-slate-100 font-medium px-5 py-2.5 rounded-full text-sm shadow-sm border border-slate-200 transition duration-300">
                    Recovery Guides
                </button>
            </div>
            
            <!-- Search Bar -->
            <div class="relative w-full md:w-80">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" id="blogSearch" placeholder="Search articles..." class="w-full pl-10 pr-4 py-2.5 rounded-full border border-slate-200 bg-white text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 shadow-sm text-sm transition-all" />
            </div>
        </div>
    </div>
</section>

<!-- Blog Listing Grid -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="blogGrid">
            
            <!-- Article 1: Can Hernia be Cured without Surgery? -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/can-hernia-be-cured-without-surgery.png" alt="Can Hernia be Cured without Surgery? {In 2026}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-brand-50 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full border border-brand-100 shadow-sm">
                        Hernia Guide
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>24 July 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="blog/can-hernia-be-cured-without-surgery.php" class="blog-title">Can Hernia be Cured without Surgery? {In 2026}</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        Read our complete 2026 medical guide on non-surgical hernia management, home care, risks, and expert surgical advice by Dr. Kumar.
                    </p>
                    <a href="blog/can-hernia-be-cured-without-surgery.php" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="recovery">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/why-is-my-stomach-bigger-after-hernia-surgery.jpg" alt="Why is my Stomach Bigger After Hernia Surgery?" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-emerald-50 text-emerald-700 text-xs font-semibold px-3 py-1 rounded-full border border-emerald-100 shadow-sm">
                        Recovery Guide
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>09 July 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="blog/why-is-my-stomach-bigger-after-hernia-surgery.php" class="blog-title">Why is my Stomach Bigger After Hernia Surgery?</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        Read our complete medical guide on stomach swelling after hernia surgery, bloating, timeline, and recovery tips.
                    </p>
                    <a href="blog/why-is-my-stomach-bigger-after-hernia-surgery.php" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="blog-card flex flex-col bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 group" data-category="hernia">
                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                    <img src="<?= $base_path ?>assets/images/hernia-come-back-after-surgery.jpg" alt="Can a Hernia Come Back After Surgery? {Complete Guide}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                    <span class="absolute top-4 left-4 bg-amber-50 text-amber-700 text-xs font-semibold px-3 py-1 rounded-full border border-amber-100 shadow-sm">
                        Hernia Surgery
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>04 July 2026</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-brand-700 transition">
                        <a href="blog/can-hernia-come-back-after-surgery.php" class="blog-title">Can a Hernia Come Back After Surgery? {Complete Guide}</a>
                    </h3>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed flex-1 blog-excerpt">
                        Read our complete medical guide on hernia recurrence, chances, causes, prevention, and treatment options by Dr. Kumar.
                    </p>
                    <a href="blog/can-hernia-come-back-after-surgery.php" class="inline-flex items-center gap-2 text-brand-700 font-semibold text-sm hover:text-brand-900 group/link transition mt-auto">
                        Read Full Article
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>

        </div>

        <!-- No Results Message -->
        <div id="noResults" class="hidden text-center py-16 bg-slate-50 rounded-3xl border border-dashed border-slate-200 mt-8">
            <svg class="w-16 h-16 text-slate-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="text-lg font-bold text-slate-800 mb-1">No articles found</h3>
            <p class="text-sm text-slate-500">Try adjusting your filters or search terms.</p>
        </div>

        <!-- Pagination (Hidden or Single Page since we have 2 posts) -->
        <div class="hidden items-center justify-center gap-2 mt-16" id="paginationControl">
            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-brand-700 text-white font-semibold text-sm shadow-md">1</span>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="relative bg-gradient-to-br from-brand-800 to-brand-950 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:20px_20px]"></div>
    
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/10">
            ✉️ Newsletter Signup
        </span>
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
            Stay Updated with Medical Insights
        </h2>
        <p class="text-slate-200 max-w-2xl mx-auto mb-8 leading-relaxed">
            Subscribe to our monthly newsletter to receive health tips, recovery checklists, and insights directly from Dr. Kumar.
        </p>
        
        <form class="max-w-lg mx-auto flex flex-col sm:flex-row gap-3" onsubmit="event.preventDefault(); alert('Thank you for subscribing!');">
            <input type="email" required placeholder="Enter your email address" class="flex-1 px-6 py-4 rounded-full text-slate-900 bg-white placeholder-slate-400 border border-transparent focus:outline-none focus:ring-2 focus:ring-accent text-sm" />
            <button type="submit" class="bg-accent hover:bg-amber-600 text-white font-bold px-8 py-4 rounded-full transition shadow-lg shadow-accent/20 hover:scale-105 text-sm whitespace-nowrap">
                Subscribe Now
            </button>
        </form>
    </div>
</section>

<!-- JS Script for Interactive Client-Side Filtering -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('blogSearch');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const blogCards = document.querySelectorAll('.blog-card');
    const noResults = document.getElementById('noResults');

    let currentCategory = 'all';
    let searchQuery = '';

    function filterPosts() {
        let visibleCount = 0;
        
        blogCards.forEach(card => {
            const category = card.getAttribute('data-category');
            const title = card.querySelector('.blog-title').textContent.toLowerCase();
            const excerpt = card.querySelector('.blog-excerpt').textContent.toLowerCase();
            
            const matchesCategory = currentCategory === 'all' || category === currentCategory;
            const matchesSearch = title.includes(searchQuery) || excerpt.includes(searchQuery);

            if (matchesCategory && matchesSearch) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Toggle 'No Results' Message
        if (visibleCount === 0) {
            noResults.classList.remove('hidden');
        } else {
            noResults.classList.add('hidden');
        }
    }

    searchInput.addEventListener('input', (e) => {
        searchQuery = e.target.value.toLowerCase().trim();
        filterPosts();
    });

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Reset visual active state for all buttons
            filterButtons.forEach(b => {
                b.classList.remove('bg-brand-700', 'text-white');
                b.classList.add('bg-white', 'text-slate-600', 'hover:bg-slate-100');
            });
            // Make current button active
            btn.classList.remove('bg-white', 'text-slate-600', 'hover:bg-slate-100');
            btn.classList.add('bg-brand-700', 'text-white');

            currentCategory = btn.getAttribute('data-target');
            filterPosts();
        });
    });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
