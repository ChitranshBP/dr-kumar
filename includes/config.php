<?php
// Calculate base path dynamically to avoid broken assets or pages in subdirectories
$project_root = dirname(__DIR__);
$current_script = $_SERVER['SCRIPT_FILENAME'] ?? '';
if (!isset($base_path)) {
    $base_path = '';

    if (!empty($current_script)) {
        $root_std = str_replace('\\', '/', realpath($project_root));
        $script_std = str_replace('\\', '/', realpath($current_script));
        $relative = str_replace($root_std, '', $script_std);
        $relative = ltrim($relative, '/');
        $levels = substr_count($relative, '/');
        $base_path = str_repeat('../', $levels);
    }
}

$site = [
    'name'        => 'Dr. Kumar - Advanced Hernia & Laparoscopic Surgeon',
    'doctor'      => 'Dr. Kumar',
    'tagline'     => 'Advanced Abdominal Hernia & Laparoscopic Surgeon in Chennai',
    'phone'       => '+91 79042 17129',
    'phone_link'  => '+917904217129',
    'email'       => 'info@surgeondrkumar.com',
    'address'     => 'Chennai, Tamil Nadu, India',
    'url'         => 'https://surgeondrkumar.com/',
    'logo'        => 'assets/images/logo.png',
    'social'      => [
        'facebook'  => 'https://www.facebook.com/',
        'instagram' => 'https://www.instagram.com/',
        'linkedin'  => 'https://www.linkedin.com/',
        'youtube'   => 'https://www.youtube.com/',
    ],
];

// Flat navigation for simple loops or fallback lists (like the footer)
$nav = [
    'Home'              => 'index.php',
    'About Us'          => 'about-us.php',
    'Hernia Surgery'    => 'treatment/hernia-surgery.php',
    'Robotic Surgery'   => 'robotic-hernia-surgery.php',
    'Emergency Care'    => 'emergency-hernia-care.php',
    'Contact Us'        => 'contact.php',
];

// Structured multidimensional menu for the header (desktop mega-menu and mobile accordion)
$headerMenu = [
    [
        'label' => 'Home',
        'link'  => 'index.php',
    ],
    [
        'label' => 'About Us',
        'link'  => 'about-us.php',
    ],
    [
        'label' => 'Hernia Guide',
        'dropdown' => [
            [
                'title' => 'Understanding Hernia',
                'links' => [
                    ['label' => 'What is a Hernia?', 'link' => 'hernia/what-is-hernia.php'],
                    ['label' => 'Causes & Risks', 'link' => 'hernia/causes.php'],
                    ['label' => 'Symptoms & Signs', 'link' => 'hernia/symptoms.php'],
                    ['label' => 'Diagnosis Methods', 'link' => 'hernia/diagnosis.php'],
                    ['label' => 'Complications', 'link' => 'hernia/complications.php'],
                ]
            ],
            [
                'title' => 'Hernia Types',
                'links' => [
                    ['label' => 'Inguinal Hernia (Groin)', 'link' => 'my_types/inguinal-hernia.php'],
                    ['label' => 'Umbilical Hernia (Navel)', 'link' => 'my_types/umbilical-hernia.php'],
                    ['label' => 'Incisional Hernia (Scar)', 'link' => 'my_types/incisional-hernia.php'],
                    ['label' => 'Ventral Hernia (Abdomen)', 'link' => 'my_types/ventral-hernia.php'],
                    ['label' => 'Femoral Hernia (Groin)', 'link' => 'my_types/femoral-hernia.php'],
                    ['label' => 'Hiatal Hernia (Internal)', 'link' => 'my_types/hiatal-hernia.php'],
                    ['label' => 'Epigastric Hernia', 'link' => 'my_types/epigastric-hernia.php'],
                    ['label' => 'Strangulated (Emergency)', 'link' => 'my_types/strangulated-hernia.php'],
                ]
            ]
        ]
    ],
    [
        'label' => 'Treatments',
        'dropdown' => [
            [
                'title' => 'Surgical Procedures',
                'links' => [
                    ['label' => 'Hernia Surgery Overview', 'link' => 'treatment/hernia-surgery.php'],
                    ['label' => 'Laparoscopic Surgery', 'link' => 'treatment/laparoscopic-hernia-surgery.php'],
                    ['label' => 'Robotic Hernia Surgery', 'link' => 'robotic-hernia-surgery.php'],
                    ['label' => 'TAPP Repair Technique', 'link' => 'treatment/tapp-repair.php'],
                    ['label' => 'TEP Repair Technique', 'link' => 'treatment/tep-repair.php'],
                    ['label' => 'eTEP Repair Technique', 'link' => 'treatment/etep-repair.php'],
                ]
            ],
            [
                'title' => 'Mesh & Recovery',
                'links' => [
                    ['label' => 'Mesh Repair Technology', 'link' => 'treatment/mesh-repair.php'],
                    ['label' => 'Post-Op Recovery Process', 'link' => 'treatment/recovery.php'],
                ]
            ]
        ]
    ],
    [
        'label' => 'Advanced Tech',
        'dropdown' => [
            [
                'title' => 'Surgical Innovation',
                'links' => [
                    ['label' => 'Da Vinci Robotic System', 'link' => 'advanced-techniques/da-vinci-system.php'],
                    ['label' => '3D Mesh Implants', 'link' => 'advanced-techniques/3d-mesh.php'],
                    ['label' => 'Biological Mesh Options', 'link' => 'advanced-techniques/biological-mesh.php'],
                    ['label' => 'Self-Gripping Mesh Tech', 'link' => 'advanced-techniques/self-gripping-mesh.php'],
                    ['label' => 'ERAS Recovery Protocol', 'link' => 'advanced-techniques/eras-protocol.php'],
                ]
            ]
        ]
    ],
    [
        'label' => 'Patient Corner',
        'dropdown' => [
            [
                'title' => 'Special Considerations',
                'links' => [
                    ['label' => 'Complex Hernia Info', 'link' => 'special-considerations/complex-hernia-info.php'],
                    ['label' => 'Obesity & Hernia', 'link' => 'special-considerations/obesity.php'],
                    ['label' => 'Diabetes & Hernia', 'link' => 'special-considerations/diabetes.php'],
                    ['label' => 'Pregnancy & Hernia Care', 'link' => 'special-considerations/pregnancy.php'],
                    ['label' => 'Elderly Hernia Care', 'link' => 'special-considerations/elderly.php'],
                ]
            ],
            [
                'title' => 'Services & Consults',
                'links' => [
                    ['label' => 'Emergency Hernia Care', 'link' => 'emergency-hernia-care.php'],
                    ['label' => 'Online Consultation Portal', 'link' => 'online-consultation.php'],
                    ['label' => 'Expert Second Opinion', 'link' => 'second-opinion.php'],
                ]
            ],
            [
                'title' => 'Patient Resources',
                'links' => [
                    ['label' => 'Education & Resources', 'link' => 'resources/patient-resources.php'],
                    ['label' => 'FAQs', 'link' => 'resources/faqs.php'],
                    ['label' => 'Medical Glossary & Terms', 'link' => 'resources/glossary.php'],
                ]
            ]
        ]
    ],
    [
        'label' => 'Contact Us',
        'link'  => 'contact.php',
    ],
];

$herniaConditions = [
    ['title' => 'Inguinal Hernia',    'img' => 'assets/images/inguinal-new.png',        'desc' => 'eTEP, TEP & TAPP repair for groin hernias in adults.'],
    ['title' => 'Umbilical Hernia',   'img' => 'assets/images/umbilical-new.png',       'desc' => 'Mesh & meshless repair tailored to defect size.'],
    ['title' => 'Incisional Hernia',  'img' => 'assets/images/incisional-new.png',      'desc' => 'Complex AWR with TAR & component separation techniques.'],
    ['title' => 'Ventral Hernia',     'img' => 'assets/images/ventral-new.png',          'desc' => 'Minimally invasive ventral hernia repair.'],
    ['title' => 'Paraumbilical',      'img' => 'assets/images/paraumbilical-new.png',   'desc' => 'Daycare paraumbilical hernia surgery with mesh.'],
];

$treatments = [
    ['title' => 'Hernia Surgery',     'img' => 'assets/images/hernia-surgery-new.png',  'desc' => 'Advanced laparoscopic & robotic hernia repair with faster recovery.'],
    ['title' => 'Gallbladder Stone',  'img' => 'assets/images/gallbladder-new.png',     'desc' => 'Laparoscopic cholecystectomy for safe, scar-minimal removal.'],
    ['title' => 'Laparoscopic',       'img' => 'assets/images/laparoscopic-new.png',    'desc' => 'Keyhole surgery for GI, hernia & more.'],
    ['title' => 'GERD / Reflux',       'img' => 'assets/images/gerd-new.png',            'desc' => 'Lap fundoplication for chronic acid reflux.'],
    ['title' => 'Piles / Hemorrhoids', 'img' => 'assets/images/piles-new.png',           'desc' => 'Laser & stapler hemorrhoidectomy.'],
    ['title' => 'Anal Fissure',       'img' => 'assets/images/fissure-new.png',         'desc' => 'Painless treatment with sphincterotomy.'],
    ['title' => 'Appendix',            'img' => 'assets/images/appendix-new.png',        'desc' => 'Laparoscopic appendectomy, 24-hour discharge.'],
    ['title' => 'Anal Fistula',        'img' => 'assets/images/fistula-new.png',         'desc' => 'Sphincter-sparing fistula surgery.'],
    ['title' => 'Breast Surgery',      'img' => 'assets/images/breast-new.png',          'desc' => 'Lumpectomy, mastectomy & oncoplastic care.'],
    ['title' => 'Thyroid Surgery',     'img' => 'assets/images/thyroid-new.png',         'desc' => 'Total & hemi thyroidectomy with nerve monitoring.'],
];

$stats = [
    ['num' => '29+',     'label' => 'Years Experience'],
    ['num' => '10,000+', 'label' => 'Hernia Surgeries'],
    ['num' => '5,000+',  'label' => 'Gallbladder Surgeries'],
    ['num' => '20,000+', 'label' => 'Laparoscopic Procedures'],
];
