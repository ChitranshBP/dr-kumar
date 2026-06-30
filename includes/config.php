<?php
// Calculate base path dynamically to avoid broken assets or pages in subdirectories
$project_root = dirname(__DIR__);
$current_script = $_SERVER['SCRIPT_FILENAME'] ?? '';
// Respect base_path if already set (by build.php), only calculate if not set
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
    'name'        => 'DrKumar - Advanced Hernia , Laparoscopic & Robotic Surgeon',
    'doctor'      => 'Dr. Kumar',
    'tagline'     => 'Advanced Abdominal Hernia & Laparoscopic Surgeon in Chennai',
    'phone'       => '+91 89255 02759',
    'phone_link'  => '+918925502759',
    'email'       => 'drkumargastrosurgeon@gmail.com',
    'address'     => 'Chennai, Tamil Nadu, India',
    'url'         => 'https://herniacare360.com/',
    'logo'        => 'assets/images/logo.png',
    'social'      => [
        'facebook'  => 'https://www.facebook.com/people/DrKumar-Billroth-Hernia-Surgeon/61568089283882/',
        'instagram' => 'https://www.instagram.com/drkumar_billrothherniasurgeon',
        'linkedin'  => 'https://www.linkedin.com/in/dr-kumar-hernia-surgeon-19971b325',
        'youtube'   => 'https://www.youtube.com/@drkumarbillrothherniasurgeon',
    ],
];

// Flat navigation for simple loops or fallback lists (like the footer)
$nav = [
    'Home'                       => 'index.php',
    'About Us'                   => 'about-best-hernia-hospital-in-chennai.php',
    'Hernia Surgery'             => 'treatment/hernia-surgery-in-chennai.php',
    'Laparoscopic Hernia Surgery'=> 'treatment/laparoscopic-hernia-surgery-in-chennai.php',
    'Robotic Hernia Surgery'     => 'robotic-hernia-surgery.php',
    'Emergency Care'             => 'emergency-hernia-care.php',
    'Contact Us'                 => 'contact.php',
];

// Structured multidimensional menu for the header (desktop mega-menu and mobile accordion)
$headerMenu = [
    [
        'label' => 'Home',
        'link'  => 'index.php',
    ],
    [
        'label' => 'About Us',
        'link'  => 'about-best-hernia-hospital-in-chennai.php',
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
                    ['label' => 'Inguinal Hernia (Groin)', 'link' => 'my_types/inguinal-hernia-surgery-in-chennai.php'],
                    ['label' => 'Umbilical Hernia (Navel)', 'link' => 'my_types/umbilical-hernia-surgery-in-chennai.php'],
                    ['label' => 'Incisional Hernia (Scar)', 'link' => 'my_types/incisional-hernia-surgery-in-chennai.php'],
                    ['label' => 'Ventral Hernia (Abdomen)', 'link' => 'my_types/ventral-hernia-surgery-in-chennai.php'],
                    ['label' => 'Femoral Hernia (Groin)', 'link' => 'my_types/femoral-hernia-surgery-in-chennai.php'],
                    ['label' => 'Hiatal Hernia (Internal)', 'link' => 'my_types/hiatal-hernia-surgery-in-chennai.php'],
                    ['label' => 'Epigastric Hernia', 'link' => 'my_types/epigastric-hernia-surgery-in-chennai.php'],
                    ['label' => 'Strangulated (Emergency)', 'link' => 'my_types/strangulated-hernia-surgery-in-chennai.php'],
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
                    ['label' => 'Hernia Surgery Overview', 'link' => 'treatment/hernia-surgery-in-chennai.php'],
                    ['label' => 'Laparoscopic Surgery', 'link' => 'treatment/laparoscopic-hernia-surgery-in-chennai.php'],
                    ['label' => 'Robotic Hernia Surgery', 'link' => 'robotic-hernia-surgery.php'],
                    ['label' => 'TAPP Repair Technique', 'link' => 'treatment/tapp-repair-in-chennai.php'],
                    ['label' => 'TEP Repair Technique', 'link' => 'treatment/tep-repair-in-chennai.php'],
                    ['label' => 'eTEP Repair Technique', 'link' => 'treatment/etep-technique-expert-in-chennai.php'],
                    ['label' => 'Abdominal Wall Reconstruction', 'link' => 'treatment/abdominal-wall-reconstruction-in-chennai.php'],
                    ['label' => 'Diastasis Recti Repair', 'link' => 'treatment/diastasis-recti.php'],
                ]
            ],
            [
                'title' => 'Intra Operative Special Techniques',
                'links' => [
                    ['label' => 'Overview & Approach', 'link' => 'treatment/intra-operative-special-techniques.php'],
                ]
            ],
            [
                'title' => 'Mesh & Recovery',
                'links' => [
                    ['label' => 'Mesh Repair Technology', 'link' => 'treatment/mesh-hernia-repair-in-chennai.php'],
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
                    ['label' => 'Advanced Robotic Surgery', 'link' => 'advanced-techniques/da-vinci-system.php'],
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
                    ['label' => 'Hernia in Children', 'link' => 'special-considerations/hernia-in-children.php'],
                    ['label' => 'Chronic Pain after Surgery', 'link' => 'special-considerations/chronic-pain.php'],
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
    ['title' => 'Inguinal Hernia',              'img' => 'assets/images/inguinal-new.png',          'desc' => 'Laparoscopic &amp; Robotic TEP/TAPP repair for groin hernias with rapid recovery.',             'link' => 'my_types/inguinal-hernia-surgery-in-chennai.php'],
    ['title' => 'Umbilical Hernia',             'img' => 'assets/images/umbilical-new.png',          'desc' => 'Daycare mesh & meshless repair tailored to defect size.',                        'link' => 'my_types/umbilical-hernia-surgery-in-chennai.php'],
    ['title' => 'Incisional Hernia',            'img' => 'assets/images/incisional-new.png',        'desc' => 'Complex AWR with TAR & component separation techniques.',                        'link' => 'my_types/incisional-hernia-surgery-in-chennai.php'],
    ['title' => 'Ventral Hernia',               'img' => 'assets/images/ventral-new.png',           'desc' => 'Minimally invasive repair for abdominal wall defects.',                        'link' => 'my_types/ventral-hernia-surgery-in-chennai.php'],
    ['title' => 'Robotic Hernia Surgery',        'img' => 'assets/images/hernia-surgery-new.png',   'desc' => 'Advanced robotic-assisted precision surgery.',                                  'link' => 'robotic-hernia-surgery.php'],
    ['title' => 'Laparoscopic Surgery',          'img' => 'assets/images/laparoscopic-new.png',   'desc' => 'Minimally invasive keyhole surgery for faster recovery and minimal scarring.',           'link' => 'treatment/laparoscopic-hernia-surgery-in-chennai.php'],
    ['title' => 'TAPP Repair',                   'img' => 'assets/images/tapp-precision.png',       'desc' => 'Transabdominal preperitoneal repair for groin and ventral hernias.',                  'link' => 'treatment/tapp-repair-in-chennai.php'],
    ['title' => 'eTEP Repair',                  'img' => 'assets/images/etep-reconstruction.png',   'desc' => 'Enhanced totally extraperitoneal technique for complex hernias.',             'link' => 'treatment/etep-technique-expert-in-chennai.php'],
    ['title' => 'Hiatal Hernia',                 'img' => 'assets/images/gerd-new.png',              'desc' => 'Laparoscopic hiatus hernia repair with anti-reflux surgery.',                  'link' => 'my_types/hiatal-hernia-surgery-in-chennai.php'],
    ['title' => 'Abdominal Wall Reconstruction','img' => 'assets/images/laparoscopic-new.png',   'desc' => 'Advanced TAR & component separation for complex cases.',                        'link' => 'treatment/abdominal-wall-reconstruction-in-chennai.php'],
    ['title' => 'Emergency Hernia Care',         'img' => 'assets/images/complications_emergency.png','desc' => '24/7 emergency strangulated hernia management.',                               'link' => 'emergency-hernia-care.php'],
    ['title' => 'Hernia Mesh Repair',            'img' => 'assets/images/mesh-comparison-3d.png',   'desc' => '3D mesh, biological mesh, & self-gripping options.',                          'link' => 'treatment/mesh-hernia-repair-in-chennai.php'],
];

$stats = [
    ['num' => '29+',     'label' => 'Years Experience'],
    ['num' => '10,000+', 'label' => 'Hernia Surgeries'],
    ['num' => '5,000+',  'label' => 'Gallbladder Surgeries'],
    ['num' => '20,000+', 'label' => 'Laparoscopic Procedures'],
];
