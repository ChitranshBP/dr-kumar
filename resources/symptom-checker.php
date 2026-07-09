<?php
$page_title = 'Interactive Hernia Symptom Checker & Risk Assessment | Dr. Kumar';
$page_description = 'Concerned about a bulge or abdominal pain? Use our interactive Hernia Symptom Checker to assess your symptoms, evaluate risk levels, and get expert guidance.';
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid)"/>
        </svg>
    </div>
    <div class="max-w-7xl mx-auto px-4 relative">
        <nav class="text-sm mb-6 text-brand-200">
            <a href="<?= $base_path ?>index.php" class="hover:text-white transition">Home</a>
            <span class="mx-2">/</span>
            <a href="<?= $base_path ?>resources/patient-resources.php" class="hover:text-white transition">Resources</a>
            <span class="mx-2">/</span>
            <span class="text-white">Symptom Checker</span>
        </nav>
        <span class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-4 text-amber-300 border border-emerald-500/30">
            Self-Assessment Tool
        </span>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Hernia Symptom Checker</h1>
        <p class="text-xl text-brand-100 max-w-2xl">Concerned about abdominal discomfort or a visible bulge? Take this 1-minute interactive test to evaluate your symptoms and understand when to consult a specialist.</p>
    </div>
</section>

<!-- Symptom Checker Section -->
<section class="py-16 bg-slate-50 min-h-[600px] flex items-center">
    <div class="max-w-3xl mx-auto px-4 w-full">
        
        <!-- Wizard Card -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-slate-100 relative overflow-hidden" id="symptomCheckerCard">
            
            <!-- Progress Header -->
            <div id="wizardHeader" class="mb-8">
                <div class="flex items-center justify-between text-sm font-semibold text-slate-400 mb-3">
                    <span id="stepNumber">Step 1 of 4</span>
                    <span id="stepProgressPercent">25% Complete</span>
                </div>
                <div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
                    <div class="h-full bg-brand-600 transition-all duration-500 ease-out rounded-full" id="progressBar" style="width: 25%;"></div>
                </div>
            </div>

            <!-- Wizard Questions (JS handles active states) -->
            <div id="wizardContent">
                
                <!-- STEP 1: Symptom Location -->
                <div class="wizard-step" id="step1">
                    <h2 class="text-2xl font-bold text-slate-900 mb-2">Where is the lump, bulge, or discomfort located?</h2>
                    <p class="text-slate-500 mb-6">Select the primary area where you are experiencing symptoms.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="radio" name="location" value="groin" class="sr-only peer" required>
                            <span class="w-6 h-6 rounded-full border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-[''] peer-checked:after:w-2.5 peer-checked:after:h-2.5 peer-checked:after:bg-white peer-checked:after:rounded-full"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Groin or Scrotum</span>
                                <span class="block text-sm text-slate-500">Lower abdomen near the thigh crease, or scrotal swelling (Inguinal/Femoral)</span>
                            </div>
                        </label>

                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="radio" name="location" value="navel" class="sr-only peer">
                            <span class="w-6 h-6 rounded-full border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-[''] peer-checked:after:w-2.5 peer-checked:after:h-2.5 peer-checked:after:bg-white peer-checked:after:rounded-full"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Belly Button (Navel)</span>
                                <span class="block text-sm text-slate-500">Right at or immediately surrounding the navel center (Umbilical/Paraumbilical)</span>
                            </div>
                        </label>

                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="radio" name="location" value="scar" class="sr-only peer">
                            <span class="w-6 h-6 rounded-full border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-[''] peer-checked:after:w-2.5 peer-checked:after:h-2.5 peer-checked:after:bg-white peer-checked:after:rounded-full"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Near a Previous Surgical Scar</span>
                                <span class="block text-sm text-slate-500">Along or beneath the incision line of a prior abdominal surgery (Incisional)</span>
                            </div>
                        </label>

                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="radio" name="location" value="upper" class="sr-only peer">
                            <span class="w-6 h-6 rounded-full border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-[''] peer-checked:after:w-2.5 peer-checked:after:h-2.5 peer-checked:after:bg-white peer-checked:after:rounded-full"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Upper Abdomen</span>
                                <span class="block text-sm text-slate-500">Midline between the navel and the lower rib cage (Epigastric/Ventral)</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- STEP 2: Bulge Characterization -->
                <div class="wizard-step hidden" id="step2">
                    <h2 class="text-2xl font-bold text-slate-900 mb-2">What does the bulge or discomfort feel like?</h2>
                    <p class="text-slate-500 mb-6">Choose the statement that best matches your physical symptoms.</p>
                    
                    <div class="grid grid-cols-1 gap-4">
                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="radio" name="type" value="reducible" class="sr-only peer" required>
                            <span class="w-6 h-6 rounded-full border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-[''] peer-checked:after:w-2.5 peer-checked:after:h-2.5 peer-checked:after:bg-white peer-checked:after:rounded-full"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Visible bulge that disappears or flattens when lying down</span>
                                <span class="block text-sm text-slate-500">Bulges outwards when coughing, standing, lifting, or straining, but recedes easily</span>
                            </div>
                        </label>

                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="radio" name="type" value="nonreducible" class="sr-only peer">
                            <span class="w-6 h-6 rounded-full border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-[''] peer-checked:after:w-2.5 peer-checked:after:h-2.5 peer-checked:after:bg-white peer-checked:after:rounded-full"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Constant bulge that does NOT push back in or flatten</span>
                                <span class="block text-sm text-slate-500">Stays firm and prominent even when lying flat on your back (Incarcerated)</span>
                            </div>
                        </label>

                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="radio" name="type" value="pain_only" class="sr-only peer">
                            <span class="w-6 h-6 rounded-full border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-[''] peer-checked:after:w-2.5 peer-checked:after:h-2.5 peer-checked:after:bg-white peer-checked:after:rounded-full"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Localized pain, pressure, or pull, but NO visible bulge</span>
                                <span class="block text-sm text-slate-500">An aching or dragging sensation when active, but no outward swelling is visible</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- STEP 3: Warning signs -->
                <div class="wizard-step hidden" id="step3">
                    <h2 class="text-2xl font-bold text-slate-900 mb-2">Are you experiencing any warning or emergency signs?</h2>
                    <p class="text-slate-500 mb-6">Select all symptoms that you have experienced in the last 24-48 hours. (Select all that apply)</p>
                    
                    <div class="grid grid-cols-1 gap-4">
                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="checkbox" name="emergency" value="severe_pain" class="sr-only peer">
                            <span class="w-6 h-6 rounded-lg border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-['✓'] peer-checked:after:text-white peer-checked:after:font-bold peer-checked:after:text-sm"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition text-red-600">Severe, sudden, or worsening abdominal or groin pain</span>
                                <span class="block text-sm text-slate-500">Sharp pain at the bulge site that does not improve or ease off</span>
                            </div>
                        </label>

                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="checkbox" name="emergency" value="discoloration" class="sr-only peer">
                            <span class="w-6 h-6 rounded-lg border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-['✓'] peer-checked:after:text-white peer-checked:after:font-bold peer-checked:after:text-sm"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition text-red-600">The bulge has turned red, purple, or dark in color</span>
                                <span class="block text-sm text-slate-500">Signifies possible restricted blood flow to tissues (Strangulation danger)</span>
                            </div>
                        </label>

                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="checkbox" name="emergency" value="nausea" class="sr-only peer">
                            <span class="w-6 h-6 rounded-lg border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-['✓'] peer-checked:after:text-white peer-checked:after:font-bold peer-checked:after:text-sm"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Persistent nausea, vomiting, or fever</span>
                                <span class="block text-sm text-slate-500">Accompanied by abdominal distension and local swelling soreness</span>
                            </div>
                        </label>

                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="checkbox" name="emergency" value="constipation" class="sr-only peer">
                            <span class="w-6 h-6 rounded-lg border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-['✓'] peer-checked:after:text-white peer-checked:after:font-bold peer-checked:after:text-sm"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Inability to pass gas, have a bowel movement, or severe constipation</span>
                                <span class="block text-sm text-slate-500">Often points to a mechanical bowel obstruction caused by trapped organs</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- STEP 4: Duration / Progression -->
                <div class="wizard-step hidden" id="step4">
                    <h2 class="text-2xl font-bold text-slate-900 mb-2">How has the symptom changed over time?</h2>
                    <p class="text-slate-500 mb-6">Select the duration or progression of the symptoms you have noted.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="radio" name="duration" value="new" class="sr-only peer" required>
                            <span class="w-6 h-6 rounded-full border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-[''] peer-checked:after:w-2.5 peer-checked:after:h-2.5 peer-checked:after:bg-white peer-checked:after:rounded-full"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Recent Onset</span>
                                <span class="block text-sm text-slate-500">Discovered within the last few days, mild symptoms</span>
                            </div>
                        </label>

                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="radio" name="duration" value="growing" class="sr-only peer">
                            <span class="w-6 h-6 rounded-full border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-[''] peer-checked:after:w-2.5 peer-checked:after:h-2.5 peer-checked:after:bg-white peer-checked:after:rounded-full"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Gradual Progression</span>
                                <span class="block text-sm text-slate-500">Has been slowly growing larger or more painful over several weeks or months</span>
                            </div>
                        </label>

                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="radio" name="duration" value="recurrent" class="sr-only peer">
                            <span class="w-6 h-6 rounded-full border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-[''] peer-checked:after:w-2.5 peer-checked:after:h-2.5 peer-checked:after:bg-white peer-checked:after:rounded-full"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Recurrent Bulge</span>
                                <span class="block text-sm text-slate-500">Appeared near the site of a previous hernia mesh repair operation</span>
                            </div>
                        </label>

                        <label class="flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-brand-500 hover:bg-brand-50/20 cursor-pointer transition group relative">
                            <input type="radio" name="duration" value="constant" class="sr-only peer">
                            <span class="w-6 h-6 rounded-full border-2 border-slate-300 peer-checked:border-brand-600 peer-checked:bg-brand-600 flex items-center justify-center shrink-0 mt-0.5 peer-checked:after:content-[''] peer-checked:after:w-2.5 peer-checked:after:h-2.5 peer-checked:after:bg-white peer-checked:after:rounded-full"></span>
                            <div>
                                <span class="block font-bold text-slate-800 group-hover:text-brand-900 transition">Long-standing Bulge</span>
                                <span class="block text-sm text-slate-500">Has remained unchanged for several months or years without complications</span>
                            </div>
                        </label>
                    </div>
                </div>

            </div>

            <!-- Wizard Footer Action Buttons -->
            <div class="flex items-center justify-between border-t border-slate-100 mt-8 pt-6">
                <button type="button" id="prevBtn" class="invisible inline-flex items-center gap-2 text-slate-500 hover:text-slate-800 font-semibold px-4 py-2 transition" onclick="goPrev()">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    Back
                </button>
                <button type="button" id="nextBtn" class="bg-brand-700 hover:bg-brand-800 text-white font-semibold px-8 py-3.5 rounded-xl shadow-md transition hover:scale-[1.02] disabled:opacity-50 disabled:cursor-not-allowed" onclick="goNext()" disabled>
                    Next Step
                    <svg class="w-4 h-4 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </div>

            <!-- RESULT STATES (Initially hidden, generated dynamically via JS) -->
            <div id="wizardResult" class="hidden">
                <div class="text-center mb-8">
                    <!-- Dynamic Icon Container -->
                    <div id="resultIconContainer" class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border-4 border-white"></div>
                    <span id="resultBadge" class="text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full border mb-4 inline-block"></span>
                    <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-4" id="resultHeading"></h2>
                    <p class="text-slate-600 leading-relaxed max-w-2xl mx-auto" id="resultDescription"></p>
                </div>

                <!-- Recommendation Detail Card -->
                <div class="bg-slate-50 rounded-2xl p-6 md:p-8 border border-slate-100 mb-8" id="resultCard">
                    <h3 class="font-bold text-slate-900 text-lg mb-4">Recommended Next Steps:</h3>
                    <ul class="space-y-4 text-slate-700" id="resultActions"></ul>
                </div>

                <!-- CTA buttons -->
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="<?= $base_path ?>book-appointment.php" class="bg-gradient-to-r from-accent to-amber-500 hover:shadow-lg text-white font-bold px-8 py-4 rounded-xl shadow-md transition hover:scale-105 inline-flex items-center gap-2">
                        Book Priority Appointment
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="tel:<?= $site['phone_link'] ?>" class="bg-white hover:bg-slate-50 text-slate-800 font-bold px-8 py-4 rounded-xl border border-slate-200 shadow-sm transition hover:scale-105 inline-flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-600" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                        Call: <?= $site['phone'] ?>
                    </a>
                    <button type="button" class="w-full text-center text-sm font-semibold text-brand-700 hover:text-brand-900 hover:underline mt-4 transition block" onclick="restartChecker()">
                        Restart Assessment
                    </button>
                </div>
            </div>

        </div>

        <!-- Disclaimer Banner -->
        <div class="mt-8 bg-slate-100/80 rounded-2xl p-5 border border-slate-200 text-xs text-slate-500 leading-relaxed">
            <p class="font-bold uppercase tracking-wider text-[10px] text-slate-600 mb-2">⚠️ Medical Disclaimer</p>
            This online Hernia Symptom Checker is an educational self-assessment tool designed to provide general guidelines about common hernia symptoms. It is not a diagnostic instrument, does not constitute formal medical advice, and is not a substitute for a professional physical examination or clinical diagnosis by a qualified doctor. If you are experiencing sudden, severe pain, vomiting, or a discolored, non-reducible lump, please visit an emergency department immediately.
        </div>

    </div>
</section>

<!-- Additional Information Panel -->
<section class="py-16 bg-white border-t border-slate-100">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="font-display text-2xl md:text-3xl font-bold text-slate-900 text-center mb-12">Learn More About Hernia Symptoms</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-md transition">
                <h3 class="font-bold text-slate-900 text-lg mb-3">Reducible Hernias</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">A reducible hernia is a defect where the bulging tissue can be gently pushed back inside the abdominal cavity, or slides back in when you lie down. While not an immediate emergency, they should still be evaluated by a surgeon as they will not heal naturally.</p>
                <a href="<?= $base_path ?>hernia/what-is-hernia.php" class="text-sm font-semibold text-brand-700 hover:text-brand-900">What is a hernia? →</a>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-md transition">
                <h3 class="font-bold text-slate-900 text-lg mb-3">Incarcerated Hernias</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">An incarcerated hernia occurs when the herniated loop of intestine or fat becomes trapped outside the abdominal wall and cannot be pushed back in. This requires prompt medical evaluation to prevent progression to strangulation.</p>
                <a href="<?= $base_path ?>hernia/complications.php" class="text-sm font-semibold text-brand-700 hover:text-brand-900">Read complications →</a>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-md transition">
                <h3 class="font-bold text-slate-900 text-lg mb-3">Strangulated Hernias</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">A strangulated hernia is a severe emergency where the blood supply to the trapped tissue is cut off, leading to tissue death (necrosis) and infection. Immediate surgery is required to release the obstruction and save the tissue.</p>
                <a href="<?= $base_path ?>my_types/strangulated-hernia-surgery-in-chennai.php" class="text-sm font-semibold text-brand-700 hover:text-brand-900">Strangulated hernia info →</a>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Script for Wizard -->
<script>
    (function() {
        var currentStep = 1;
        var totalSteps = 4;

        // Answers State
        var answers = {
            location: '',
            type: '',
            emergencies: [],
            duration: ''
        };

        // DOM elements
        var prevBtn = document.getElementById('prevBtn');
        var nextBtn = document.getElementById('nextBtn');
        var progressBar = document.getElementById('progressBar');
        var stepNumber = document.getElementById('stepNumber');
        var stepProgressPercent = document.getElementById('stepProgressPercent');
        var wizardHeader = document.getElementById('wizardHeader');
        var wizardContent = document.getElementById('wizardContent');
        var wizardResult = document.getElementById('wizardResult');
        
        // Listeners for step inputs
        document.querySelectorAll('input[name="location"]').forEach(function(el) {
            el.addEventListener('change', function() {
                answers.location = this.value;
                validateStep();
            });
        });

        document.querySelectorAll('input[name="type"]').forEach(function(el) {
            el.addEventListener('change', function() {
                answers.type = this.value;
                validateStep();
            });
        });

        document.querySelectorAll('input[name="emergency"]').forEach(function(el) {
            el.addEventListener('change', function() {
                var checkedArr = [];
                document.querySelectorAll('input[name="emergency"]:checked').forEach(function(checkbox) {
                    checkedArr.push(checkbox.value);
                });
                answers.emergencies = checkedArr;
                validateStep(); // Step 3 always valid (can be 0 or more selections)
            });
        });

        document.querySelectorAll('input[name="duration"]').forEach(function(el) {
            el.addEventListener('change', function() {
                answers.duration = this.value;
                validateStep();
            });
        });

        // Set visual borders on label checked
        function updateStyles() {
            document.querySelectorAll('#wizardContent label').forEach(function(label) {
                var input = label.querySelector('input');
                if (input && input.checked) {
                    label.classList.add('border-brand-500', 'bg-brand-50/20');
                    label.classList.remove('border-slate-200');
                } else {
                    label.classList.remove('border-brand-500', 'bg-brand-50/20');
                    label.classList.add('border-slate-200');
                }
            });
        }

        window.validateStep = function() {
            var valid = false;
            if (currentStep === 1 && answers.location) valid = true;
            if (currentStep === 2 && answers.type) valid = true;
            if (currentStep === 3) valid = true; // Step 3 is checkbox selection, none is acceptable
            if (currentStep === 4 && answers.duration) valid = true;

            nextBtn.disabled = !valid;
            updateStyles();
        };

        window.goNext = function() {
            if (currentStep < totalSteps) {
                // Hide current step
                document.getElementById('step' + currentStep).classList.add('hidden');
                currentStep++;
                // Show next step
                document.getElementById('step' + currentStep).classList.remove('hidden');
                
                // Update Progress UI
                var progress = (currentStep / totalSteps) * 100;
                progressBar.style.width = progress + '%';
                stepNumber.innerText = 'Step ' + currentStep + ' of ' + totalSteps;
                stepProgressPercent.innerText = Math.round(progress) + '% Complete';

                // Configure Back button visibility
                prevBtn.classList.remove('invisible');

                // If on last step, change button text
                if (currentStep === totalSteps) {
                    nextBtn.innerHTML = 'See Risk Assessment <svg class="w-4 h-4 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>';
                } else {
                    nextBtn.innerHTML = 'Next Step <svg class="w-4 h-4 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>';
                }

                validateStep();
            } else {
                showResults();
            }
        };

        window.goPrev = function() {
            if (currentStep > 1) {
                // Hide current step
                document.getElementById('step' + currentStep).classList.add('hidden');
                currentStep--;
                // Show prev step
                document.getElementById('step' + currentStep).classList.remove('hidden');

                // Update Progress UI
                var progress = (currentStep / totalSteps) * 100;
                progressBar.style.width = progress + '%';
                stepNumber.innerText = 'Step ' + currentStep + ' of ' + totalSteps;
                stepProgressPercent.innerText = Math.round(progress) + '% Complete';

                // Change button text back if needed
                nextBtn.innerHTML = 'Next Step <svg class="w-4 h-4 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>';

                if (currentStep === 1) {
                    prevBtn.classList.add('invisible');
                }

                validateStep();
            }
        };

        function showResults() {
            // Hide wizard questionnaire
            wizardHeader.classList.add('hidden');
            wizardContent.classList.add('hidden');
            document.getElementById('prevBtn').classList.add('hidden');
            document.getElementById('nextBtn').classList.add('hidden');

            // Show result section
            wizardResult.classList.remove('hidden');

            // Calculate Risk State
            var isEmergency = answers.emergencies.length > 0;
            var isNonReducible = answers.type === 'nonreducible';
            var isPainOnly = answers.type === 'pain_only';
            var isRecurrent = answers.duration === 'recurrent';

            var resultIconContainer = document.getElementById('resultIconContainer');
            var resultBadge = document.getElementById('resultBadge');
            var resultHeading = document.getElementById('resultHeading');
            var resultDescription = document.getElementById('resultDescription');
            var resultActions = document.getElementById('resultActions');
            var resultCard = document.getElementById('resultCard');

            var actionsHtml = '';

            if (isEmergency) {
                // EMERGENCY STATE
                resultIconContainer.className = "w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border-4 border-white bg-red-100 text-red-600";
                resultIconContainer.innerHTML = '<svg class="w-10 h-10 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>';
                
                resultBadge.className = "text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full border border-red-200 bg-red-50 text-red-700 mb-4 inline-block";
                resultBadge.innerText = 'Red Alert: Emergency Medical Evaluation Required';
                
                resultHeading.innerText = 'Potential Strangulated or Incarcerated Hernia';
                resultDescription.innerText = 'Your symptoms suggest that abdominal tissue (like a loop of intestine) is trapped in the hernia defect and its blood supply might be compromised. This is a critical medical issue that requires immediate professional evaluation.';
                
                resultCard.className = "bg-red-50/50 rounded-2xl p-6 md:p-8 border border-red-100 mb-8";
                
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">1</span><div><strong>Go to the nearest emergency department:</strong> Do not wait. Emergency surgery may be required to release the trapped organ.</div></li>';
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">2</span><div><strong>Do not eat or drink anything:</strong> In case emergency surgery is needed, keep your stomach completely empty.</div></li>';
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-red-100 text-red-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">3</span><div><strong>Do not try to forcefully push the bulge back in:</strong> Applying pressure can cause damage to already weakened bowel tissues.</div></li>';

            } else if (isNonReducible) {
                // HIGH RISK STATE
                resultIconContainer.className = "w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border-4 border-white bg-amber-100 text-amber-600";
                resultIconContainer.innerHTML = '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>';
                
                resultBadge.className = "text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full border border-amber-200 bg-amber-50 text-amber-700 mb-4 inline-block";
                resultBadge.innerText = 'High Priority: Urgent Surgical Assessment Needed';
                
                resultHeading.innerText = 'Incarcerated / Non-Reducible Hernia';
                resultDescription.innerText = 'A bulge that stays out and cannot be pushed back in is classified as incarcerated. While not immediately strangulated, it is at high risk of becoming an emergency. You should consult a hernia specialist promptly.';
                
                resultCard.className = "bg-amber-50/50 rounded-2xl p-6 md:p-8 border border-amber-100 mb-8";
                
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">1</span><div><strong>Schedule an urgent specialist consultation:</strong> Book an appointment with Dr. Kumar for a physical assessment within 24-48 hours.</div></li>';
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">2</span><div><strong>Avoid strenuous activities:</strong> Restrain from heavy lifting, core exercises, or activities that increase abdominal pressure.</div></li>';
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">3</span><div><strong>Monitor symptoms constantly:</strong> If you develop vomiting, severe pain, or skin color changes at the bulge, visit the ER immediately.</div></li>';

            } else if (isPainOnly) {
                // MODERATE STATE - PAIN ONLY OR DISCOMFORT
                resultIconContainer.className = "w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border-4 border-white bg-blue-100 text-blue-600";
                resultIconContainer.innerHTML = '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>';
                
                resultBadge.className = "text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full border border-blue-200 bg-blue-50 text-blue-700 mb-4 inline-block";
                resultBadge.innerText = 'Moderate Priority: Consult a Surgeon for Diagnosis';
                
                resultHeading.innerText = 'Abdominal Wall Pain / Possible Occult Hernia';
                resultDescription.innerText = 'Pain or pulling without a visible lump can be caused by an early-stage hernia (occult hernia), a muscle strain, or groin athletic injuries. A professional assessment and possible ultrasound are recommended to get a clear answer.';
                
                resultCard.className = "bg-blue-50/50 rounded-2xl p-6 md:p-8 border border-blue-100 mb-8";
                
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">1</span><div><strong>Consult a doctor for diagnosis:</strong> Book an outpatient appointment for a physical examination.</div></li>';
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">2</span><div><strong>Consider an ultrasound or CT scan:</strong> The specialist may request imaging to inspect the deeper muscle layers.</div></li>';
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">3</span><div><strong>Avoid aggressive stretching:</strong> Rest from heavy abdominal strains until you have a confirmed clinical diagnosis.</div></li>';

            } else {
                // NORMAL TYPICAL REDUCIBLE HERNIA STATE
                resultIconContainer.className = "w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border-4 border-white bg-emerald-100 text-emerald-600";
                resultIconContainer.innerHTML = '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>';
                
                resultBadge.className = "text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full border border-emerald-200 bg-emerald-50 text-emerald-700 mb-4 inline-block";
                resultBadge.innerText = 'Clinical Consultation Recommended';
                
                resultHeading.innerText = 'Probable Reducible Hernia';
                resultDescription.innerText = 'Your symptoms are highly consistent with a standard, reducible hernia. While it is reducible and not an immediate threat, hernias do not resolve on their own and will continue to grow over time. Elective surgical repair is the definitive cure.';
                
                resultCard.className = "bg-emerald-50/50 rounded-2xl p-6 md:p-8 border border-emerald-100 mb-8";
                
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">1</span><div><strong>Consult a hernia specialist:</strong> Book a consultation with Dr. Kumar to discuss surgical options like laparoscopic or robotic keyhole repair.</div></li>';
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">2</span><div><strong>Wear supportive garments:</strong> In some cases, a temporary truss or supportive binder can prevent strain during daily work.</div></li>';
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">3</span><div><strong>Prevent constipation and coughing:</strong> Eat high-fiber foods and drink plenty of water. Straining increases pressure and enlarges the hernia.</div></li>';
            }

            if (isRecurrent) {
                actionsHtml += '<li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">!</span><div><strong>Note regarding recurrence:</strong> Since you have had a previous repair, this requires a specialist experienced in complex revision surgery to safely inspect mesh margins.</div></li>';
            }

            resultActions.innerHTML = actionsHtml;
        }

        window.restartChecker = function() {
            // Reset Answers
            answers.location = '';
            answers.type = '';
            answers.emergencies = [];
            answers.duration = '';

            // Reset UI checks
            document.querySelectorAll('#wizardContent input').forEach(function(input) {
                input.checked = false;
            });
            updateStyles();

            // Reset Steps
            document.getElementById('step' + currentStep).classList.add('hidden');
            currentStep = 1;
            document.getElementById('step1').classList.remove('hidden');

            // Reset progress bar
            var progress = (currentStep / totalSteps) * 100;
            progressBar.style.width = progress + '%';
            stepNumber.innerText = 'Step ' + currentStep + ' of ' + totalSteps;
            stepProgressPercent.innerText = Math.round(progress) + '% Complete';

            // Show/Hide divs
            prevBtn.classList.add('invisible');
            prevBtn.classList.remove('hidden');
            nextBtn.classList.remove('hidden');
            nextBtn.innerHTML = 'Next Step <svg class="w-4 h-4 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>';
            
            wizardHeader.classList.remove('hidden');
            wizardContent.classList.remove('hidden');
            wizardResult.classList.add('hidden');

            validateStep();
        };

        // Initialize state
        validateStep();
    })();
</script>

<?php require __DIR__ . '/../includes/footer.php'; ?>
