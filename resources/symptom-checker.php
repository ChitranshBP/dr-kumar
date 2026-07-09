<?php
$page_title = 'Interactive Hernia Symptom Checker | Dr. Kumar';
$page_description = 'Concerned you might have a hernia? Use our interactive symptom checker to evaluate groin or abdominal bulges, pain, and next steps.';
$page_keywords = 'hernia symptom checker, hernia self test, do I have a hernia, inguinal hernia test, umbilical hernia signs, hernia emergency check, Dr. Kumar';
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-950 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-7xl mx-auto px-4 relative">
        <nav class="text-sm mb-6 text-brand-200">
            <a href="<?= $site['url'] ?>" class="hover:text-white transition">Home</a>
            <span class="mx-2">/</span>
            <span>Resources</span>
            <span class="mx-2">/</span>
            <span class="text-white">Hernia Symptom Checker</span>
        </nav>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Hernia Symptom Checker</h1>
        <p class="text-xl text-brand-100 max-w-2xl">Use this interactive self-assessment tool to check your symptoms and understand if they suggest an abdominal or groin hernia.</p>
    </div>
</section>

<!-- Symptom Checker Section -->
<section class="py-16 md:py-24 bg-slate-50 min-h-[600px] flex items-center justify-center">
    <div class="max-w-3xl w-full mx-auto px-4">
        
        <!-- Disclaimer Alert -->
        <div class="bg-amber-50 border-l-4 border-amber-500 p-4 rounded-r-2xl mb-8 shadow-sm">
            <div class="flex">
                <div class="shrink-0">
                    <svg class="h-5 h-5 text-amber-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-xs text-amber-800 leading-relaxed">
                        <strong>Medical Disclaimer:</strong> This symptom checker is an educational tool and does not constitute medical advice, diagnosis, or treatment. Always consult a qualified specialist like <a href="<?= $base_path ?>about-best-hernia-hospital-in-chennai.php" class="font-semibold underline">Dr. Kumar</a> for a professional physical examination.
                    </p>
                </div>
            </div>
        </div>

        <!-- Interactive Quiz Container -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-slate-100 relative overflow-hidden" id="quizContainer">
            
            <!-- Progress Bar -->
            <div class="w-full bg-slate-100 rounded-full h-2 mb-8 relative">
                <div class="bg-brand-600 h-2 rounded-full transition-all duration-300" id="progressBar" style="width: 20%;"></div>
            </div>

            <!-- Quiz Steps Form -->
            <div id="quizSteps">
                <!-- Step 1: Location -->
                <div class="quiz-step" data-step="1">
                    <span class="text-xs font-semibold text-brand-600 uppercase tracking-widest block mb-2">Step 1 of 5</span>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-6 font-display">Where do you notice the bulge or discomfort?</h2>
                    
                    <div class="space-y-3">
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q1_location" value="groin" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">In the groin area, scrotum, or inner thigh</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q1_location" value="navel" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">Near or inside the belly button (navel)</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q1_location" value="scar" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">Along or beneath a previous surgical incision/scar</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q1_location" value="abdomen" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">Upper abdomen (between breastbone and navel)</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q1_location" value="none" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">No visible bulge, but I feel pain or pressure in these areas</span>
                        </label>
                    </div>
                </div>

                <!-- Step 2: Behavior -->
                <div class="quiz-step hidden" data-step="2">
                    <span class="text-xs font-semibold text-brand-600 uppercase tracking-widest block mb-2">Step 2 of 5</span>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-6 font-display">When is the bulge or pain most noticeable?</h2>
                    
                    <div class="space-y-3">
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q2_behavior" value="strain" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">When standing, coughing, laughing, or heavy lifting</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q2_behavior" value="constant" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">It is constantly present and visible, even when I lie down</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q2_behavior" value="occasional" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">It appears and disappears randomly throughout the day</span>
                        </label>
                    </div>
                </div>

                <!-- Step 3: Pain / Discomfort -->
                <div class="quiz-step hidden" data-step="3">
                    <span class="text-xs font-semibold text-brand-600 uppercase tracking-widest block mb-2">Step 3 of 5</span>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-6 font-display">How would you describe the sensation?</h2>
                    
                    <div class="space-y-3">
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q3_sensation" value="dull" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">A dull ache, heavy pressure, or dragging sensation</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q3_sensation" value="sharp" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">Sharp, localized pain when moving or coughing</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q3_sensation" value="burning" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">A burning, tingling, or pulling feeling</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q3_sensation" value="none" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">No pain or discomfort at all, just a visible bulge</span>
                        </label>
                    </div>
                </div>

                <!-- Step 4: Reducibility -->
                <div class="quiz-step hidden" data-step="4">
                    <span class="text-xs font-semibold text-brand-600 uppercase tracking-widest block mb-2">Step 4 of 5</span>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-6 font-display">Can the bulge be gently pushed back inside?</h2>
                    
                    <div class="space-y-3">
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q4_reducibility" value="reducible" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">Yes, it goes back in easily when I lie down or push it gently</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q4_reducibility" value="irreducible" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">No, it is stuck outside and does not go back in at all</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="radio" name="q4_reducibility" value="none" class="w-5 h-5 text-brand-600">
                            <span class="text-slate-800 font-medium text-sm md:text-base">I don't have a visible bulge to push</span>
                        </label>
                    </div>
                </div>

                <!-- Step 5: Red Flags -->
                <div class="quiz-step hidden" data-step="5">
                    <span class="text-xs font-semibold text-brand-600 uppercase tracking-widest block mb-2">Step 5 of 5</span>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-2 font-display">Are you experiencing any of the following?</h2>
                    <p class="text-slate-500 text-xs mb-6">Select all that apply. If none apply, click Next to view results.</p>
                    
                    <div class="space-y-3">
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="checkbox" name="q5_redflags" value="nausea" class="w-5 h-5 text-brand-600 rounded">
                            <span class="text-slate-800 font-medium text-sm md:text-base">Nausea, vomiting, or inability to pass gas or stool</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="checkbox" name="q5_redflags" value="severe_pain" class="w-5 h-5 text-brand-600 rounded">
                            <span class="text-slate-800 font-medium text-sm md:text-base">Sudden, severe, or rapidly worsening pain at the bulge site</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="checkbox" name="q5_redflags" value="color" class="w-5 h-5 text-brand-600 rounded">
                            <span class="text-slate-800 font-medium text-sm md:text-base">The bulge has changed color (red, purple, or dark)</span>
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 hover:border-brand-500 hover:bg-brand-50/50 cursor-pointer transition has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                            <input type="checkbox" name="q5_redflags" value="fever" class="w-5 h-5 text-brand-600 rounded">
                            <span class="text-slate-800 font-medium text-sm md:text-base">Fever, chills, or dizziness</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Quiz Navigation -->
            <div class="flex items-center justify-between mt-8 pt-6 border-t border-slate-100">
                <button type="button" id="prevBtn" class="px-6 py-2.5 rounded-xl border border-slate-200 font-semibold text-slate-600 hover:bg-slate-50 transition invisible">Back</button>
                <button type="button" id="nextBtn" class="px-6 py-2.5 rounded-xl bg-brand-700 font-semibold text-white hover:bg-brand-800 transition disabled:opacity-50" disabled>Next</button>
            </div>
        </div>

        <!-- Results Container -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-slate-100 hidden" id="resultsContainer">
            <h2 class="font-display text-3xl font-bold text-slate-900 mb-6 text-center">Your Assessment Result</h2>
            
            <div class="space-y-6" id="resultsContent">
                <!-- Content generated via JavaScript -->
            </div>

            <div class="mt-12 flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="<?= $base_path ?>book-appointment.php" class="cta-btn w-full sm:w-auto text-center justify-center font-bold px-8 py-4 bg-gradient-to-r from-accent to-amber-500 text-white rounded-xl shadow-md hover:shadow-lg transition">
                    Book Physical Consultation
                </a>
                <button type="button" id="restartBtn" class="w-full sm:w-auto px-8 py-4 border border-slate-300 font-bold text-slate-700 rounded-xl hover:bg-slate-50 transition">
                    Take Quiz Again
                </button>
            </div>
        </div>

    </div>
</section>

<!-- Inline Quiz Engine Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const steps = document.querySelectorAll('.quiz-step');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const progressBar = document.getElementById('progressBar');
    const quizContainer = document.getElementById('quizContainer');
    const resultsContainer = document.getElementById('resultsContainer');
    const resultsContent = document.getElementById('resultsContent');
    const restartBtn = document.getElementById('restartBtn');
    
    let currentStep = 1;
    const totalSteps = steps.length;
    const answers = {
        location: '',
        behavior: '',
        sensation: '',
        reducibility: '',
        redflags: []
    };

    // Listen to changes to enable Next button
    quizContainer.addEventListener('change', function () {
        validateStep();
    });

    function validateStep() {
        const activeStep = steps[currentStep - 1];
        let isValid = false;

        if (currentStep === 5) {
            // Checkbox step is optional (none of red flags can be selected)
            isValid = true;
        } else {
            const checkedInputs = activeStep.querySelectorAll('input:checked');
            if (checkedInputs.length > 0) {
                isValid = true;
            }
        }
        nextBtn.disabled = !isValid;
    }

    function updateStep() {
        // Show/hide steps
        steps.forEach((step, idx) => {
            if (idx + 1 === currentStep) {
                step.classList.remove('hidden');
            } else {
                step.classList.add('hidden');
            }
        });

        // Update progress bar
        const progressPercentage = (currentStep / totalSteps) * 100;
        progressBar.style.width = `${progressPercentage}%`;

        // Update Back button visibility
        if (currentStep === 1) {
            prevBtn.classList.add('invisible');
        } else {
            prevBtn.classList.remove('invisible');
        }

        // Update Next button text
        if (currentStep === totalSteps) {
            nextBtn.textContent = 'Submit';
        } else {
            nextBtn.textContent = 'Next';
        }

        validateStep();
    }

    nextBtn.addEventListener('click', function () {
        // Save answers
        const activeStep = steps[currentStep - 1];
        if (currentStep === 1) {
            answers.location = activeStep.querySelector('input:checked').value;
        } else if (currentStep === 2) {
            answers.behavior = activeStep.querySelector('input:checked').value;
        } else if (currentStep === 3) {
            answers.sensation = activeStep.querySelector('input:checked').value;
        } else if (currentStep === 4) {
            answers.reducibility = activeStep.querySelector('input:checked').value;
        } else if (currentStep === 5) {
            answers.redflags = [];
            activeStep.querySelectorAll('input:checked').forEach(cb => {
                answers.redflags.push(cb.value);
            });
        }

        if (currentStep < totalSteps) {
            currentStep++;
            updateStep();
        } else {
            // Submit & Show Results
            quizContainer.classList.add('hidden');
            resultsContainer.classList.remove('hidden');
            renderResults();
        }
    });

    prevBtn.addEventListener('click', function () {
        if (currentStep > 1) {
            currentStep--;
            updateStep();
        }
    });

    restartBtn.addEventListener('click', function () {
        // Clear choices
        quizContainer.querySelectorAll('input').forEach(input => input.checked = false);
        currentStep = 1;
        answers.location = '';
        answers.behavior = '';
        answers.sensation = '';
        answers.reducibility = '';
        answers.redflags = [];
        
        resultsContainer.classList.add('hidden');
        quizContainer.classList.remove('hidden');
        updateStep();
    });

    function renderResults() {
        let html = '';
        const isEmergency = answers.redflags.length > 0 || answers.reducibility === 'irreducible';

        if (isEmergency) {
            // RED CARD: Medical Emergency
            html += `
                <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-2xl shadow-sm">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-red-100 text-red-700 rounded-full flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-red-900 mb-2">URGENT: Immediate Evaluation Recommended</h3>
                            <p class="text-red-700 text-sm leading-relaxed mb-4">
                                You reported symptoms (like severe pain, color changes, stuck bulge, or vomiting) that can indicate an <strong>incarcerated</strong> or <strong>strangulated hernia</strong>. This occurs when hernia tissue becomes trapped, losing its blood supply. This is a surgical emergency.
                            </p>
                            <a href="<?= $base_path ?>emergency-hernia-care.php" class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-bold text-sm px-5 py-2.5 rounded-lg shadow transition">
                                Go to Emergency Care Guide
                            </a>
                        </div>
                    </div>
                </div>
            `;
        }

        // Analysis Cards
        let likelyHernia = 'Unspecified Abdominal Hernia';
        let detailText = '';
        
        if (answers.location === 'groin') {
            likelyHernia = 'Inguinal or Femoral Hernia (Groin)';
            detailText = 'Groin hernias represent over 75% of all hernia cases. They are caused by a weak spot in the inguinal canal or femoral ring. Dr. Kumar specializes in minimally invasive keyhole procedures (TEP, TAPP, eTEP) to reinforce this area with lightweight meshes.';
        } else if (answers.location === 'navel') {
            likelyHernia = 'Umbilical Hernia (Navel)';
            detailText = 'An umbilical hernia occurs near the belly button due to a weakness in the umbilical ring. It is very common in adults. Small hernias can be repaired with direct suture, whereas larger ones usually require mesh placement.';
        } else if (answers.location === 'scar') {
            likelyHernia = 'Incisional Hernia (Scar Hernia)';
            detailText = 'Incisional hernias form through a scar from a previous abdominal surgery. They can grow larger over time. Dr. Kumar performs robotic and laparoscopic Abdominal Wall Reconstruction (AWR) with mesh to repair these complex defects.';
        } else if (answers.location === 'abdomen') {
            likelyHernia = 'Epigastric Hernia';
            detailText = 'Epigastric hernias occur along the midline of the abdomen above the navel. They are usually small but can pinch fat or bowel tissues, causing dull aches or dragging sensations.';
        } else {
            likelyHernia = 'Possible Early Hernia or Strain';
            detailText = 'If you feel localized pain or pressure but don\'t see a visible bulge, it could indicate a hidden hernia (like an early inguinal or hiatal hernia) or a deep abdominal muscle strain. A physical exam and ultrasound/CT scan are required to verify.';
        }

        html += `
            <div class="bg-slate-50 rounded-2xl p-6 md:p-8 border border-slate-200 shadow-sm mt-4">
                <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block mb-1">Assessment Analysis</span>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Possible Condition: <span class="text-brand-700">${likelyHernia}</span></h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">${detailText}</p>
                
                <h4 class="font-bold text-slate-900 text-sm mb-3">Answers Summary:</h4>
                <ul class="space-y-2 text-xs text-slate-500 pl-2">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        <span>Location of bulge/pain: <strong class="text-slate-700">${answers.location.toUpperCase()}</strong></span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        <span>Bulge behavior: <strong class="text-slate-700">${answers.behavior.toUpperCase()}</strong></span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        <span>Primary sensation: <strong class="text-slate-700">${answers.sensation.toUpperCase()}</strong></span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        <span>Reducibility: <strong class="text-slate-700">${answers.reducibility.toUpperCase()}</strong></span>
                    </li>
                </ul>
            </div>
        `;

        resultsContent.innerHTML = html;
    }

    // Init
    updateStep();
});
</script>

<?php require __DIR__ . '/../includes/footer.php'; ?>
