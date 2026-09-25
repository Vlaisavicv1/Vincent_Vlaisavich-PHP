<?php

// My Personal information
$firstName    = 'Vincent';
$lastName     = 'Vlaisavich';
$fullName     = $firstName . ' ' . $lastName;
$jobTitle     = 'Seeking Cybersecurity Internship; Soc, Redteam, Analyst ';
$email        = 'Vlaisavicv1@mymail.nku.edu';
$phone        = '(859) 666-6969 (anonymized)';
$phoneLink    = preg_replace('/[^0-9+]/', '', $phone);
$linkedin     = 'www.linkedin.com/in/vincent-vlaisavich/';
$github       = 'github.com/Vlaisavicv1';
$website      = 'yourwebsite.com (to be created)';
$profileImage = 'assets/images/Vlaisavich_Profile_Happi.jpg';

// Text labels 
$pageTitle       = $fullName . "'s Resume";
$pageDescription = $fullName . "'s resume";
$labels = [
    'summary'      => 'Summary',
    'experience'   => 'Work Experience',
    'skills'       => 'Skills & Tools',
    'skillsOther'  => 'Others',
    'education'    => 'Education',
    'awards'       => 'Awards',
    'languages'    => 'Languages',
    'interests'    => 'Interests',
    'projects'     => 'Projects',
    'achievements' => 'Achievements:',
    'technologies' => 'Technologies used:',
    'projectLink'  => 'Go to link',
    'footerBefore' => 'Designed with',
    'footerLove'   => 'love',
    'footerAfter'  => 'by',
];

// Summary
$summary = 'I am a junior level Cybersecurity student at NKU with a reliable set of hands, an open mind, and experience with coding languages ranging from HTML to Java in complexity. Experience ranges from management to front line food service work and hospital work. Seeking a company that values a strong work ethic.'
    . 'As a few fun facts about myself, I am the founding father of Alpha Sigma Phi chapter Eta Phi. I love to work on cars and am a tabletop wargames hobbyist. I am a tech enthusiast and history buff.';

// My work experience with the most recent listed here. 
$experience = [
    [
        'title'                => 'Food Service Worker',
        'note'                 => '',
        'company'              => 'SSP America',
        'period'               => '2025 - Present',
        'description'          => [
            'Work in a fast paced, stressful envioronment taking food orders for customers and airport staff.',
        ],
        'achievementsSummary'  => 'Maintained customer satisfaction amongst staffing quality issues, keeping professionalism a top priority.',
        'achievements'         => [
            'First achievement, Brought worker productivity up 25% within first six months of employment.',
        ],
        'technologies'         => ['Hot-Schedules Software', 'Oracle Micros POS System and Restraunt Software'],
    ],
    [
        'title'                => 'Room Service Ambassador Specialist',
        'note'                 => '(Started without specialist title)',
        'company'              => 'Saint Elizabeth Healthcare',
        'period'               => '2024 - 2025',
        'description'          => [
            'Worked with nursing staff, nutritionist, food service management to ensure that individual patient dietary needs were met. Managed multiple floors sometimes handling 100 patients at a time, including side floors and ICU units.',
            'Interfaced with software such as CBORD and Saint Elizabeth Propreitary software to manage food orders and patient dietary restrictions. Often expressed dietary restrictions to a patient as representative of the Nutritionist and Doctors.',
        ],
        'achievementsSummary'  => '',
        'achievements'         => [],
        'technologies'         => ['CBORD', 'Saint Elizabeth Software'],
    ],
    [
        'title'                => 'Shift Lead',
        'note'                 => '',
        'company'              => 'Poseidon Pizza Company',
        'period'               => '2019 - 2021',
        'description'          => [
            'Lead shifts and managed a staff of over 4 people at any given time. Managed call ins, cash drawers, schduling, tip allocations, and food orders.',
        ],
        'achievementsSummary'  => 'Maintained an atmosphere of professionalism and care with customers and employees.',
        'achievements'         => ['Gathered 6 positive reviews in my time in management.'],
        'technologies'         => ['Cisco Ordering Software', 'Crew Management System'],
    ],
];

// Skills: name and level (0-100)
$skills = [
    ['name' => 'PHP',        'level' => 80],
    ['name' => 'JavaScript', 'level' => 75],
    ['name' => 'HTML/CSS',   'level' => 90],
    ['name' => 'SQL',        'level' => 70],
    ['name' => 'Python',     'level' => 65],
    ['name' => 'Management',     'level' => 90],
    ['name' => 'Inventory Management',     'level' => 80],
];
$otherSkills = ['Git', 'Code Review', 'Pen Testing',''];

// Education
$education = [
    [
        'degree' => 'BS in Cybersecurity',
        'school' => 'Northern Kentucky University',
        'period' => '2023 - 2027',
    ],
    [
        'degree' => 'High School Diploma',
        'school' => 'Conner High School',
        'period' => '2018 - 2022',
    ],
];

// Awards
$awards = [
    [
        'name'        => 'Future Award',
        'description' => 'I have yet to win many awards in life, but rest assured as soon as I get one- you will be the first to know.',
    ],
    [
        'name'        => 'Future Award',
        'description' => 'See above.',
    ],
];

// Languages I speak
$languages = [
    ['name' => 'English', 'level' => 'Native'],
    ['name' => 'German', 'level' => 'Beginner'],
];

// Interests
$interests = ['Tabletop Wargaming', 'Cars', 'Camping/Hiking','Music'];

// Projects
$projects = [
    [
        'title'       => 'My Hobby Site',
        'description' => 'Work done for a HTML coding class that I have expanded upon over time. It is mostly for fun.',
        'image'       => 'assets/images/Imperial-Map.jpg',
        'url'         => 'https://vlaisavicv1.github.io/Vincent-s-Hobby-Site/index.html',
    ],
    [
        'title'       => 'Placeholder SIEM Lab',
        'description' => 'Work in progress. I currently have Ubuntu running for it.',
        'image'       => 'assets/images/SIEM.png',
        'url'         => 'https://github.com/yourhandle/project-2',
    ],
    [
        'title'       => 'Project Placeholder',
        'description' => 'I do not know what project 3 shall be yet, but my bets are on a Python Authentication Log Analyzer.',
        'image'       => 'assets/images/project3.png',
        'url'         => 'https://vlaisavicv1.github.io/Vincent-s-Hobby-Site/index.html',
    ],
];

/*
 * Escapes text so that characters such as & or < are displayed safely.
 */
function e($text)
{
    return htmlspecialchars((string) $text, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= e($pageTitle) ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= e($pageDescription) ?>">
    <meta name="author" content="<?= e($fullName) ?>">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">
</head>

<body>
    <article class="resume-wrapper text-center position-relative">
        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">

            <header class="resume-header pt-4 pt-md-0">
                <div class="row">
                    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                        <img class="picture" src="<?= e($profileImage) ?>" alt="Photo of <?= e($fullName) ?>">
                    </div><!--//col-->
                    <div class="col">
                        <div class="row p-4 justify-content-center justify-content-md-between">
                            <div class="primary-info col-auto">
                                <h1 class="name mt-0 mb-1 text-white text-uppercase"><?= e($fullName) ?></h1>
                                <div class="title mb-3"><?= e($jobTitle) ?></div>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <a class="text-link" href="mailto:<?= e($email) ?>">
                                            <i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= e($email) ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-link" href="tel:<?= e($phoneLink) ?>">
                                            <i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= e($phone) ?>
                                        </a>
                                    </li>
                                </ul>
                            </div><!--//primary-info-->
                            <div class="secondary-info col-auto mt-2">
                                <ul class="resume-social list-unstyled">
                                    <li class="mb-3">
                                        <a class="text-link" href="https://<?= e($linkedin) ?>">
                                            <span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= e($linkedin) ?>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a class="text-link" href="https://<?= e($github) ?>">
                                            <span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= e($github) ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-link" href="https://<?= e($website) ?>">
                                            <span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= e($website) ?>
                                        </a>
                                    </li>
                                </ul>
                            </div><!--//secondary-info-->
                        </div><!--//row-->
                    </div><!--//col-->
                </div><!--//row-->
            </header>

            <div class="resume-body p-5">
                <section class="resume-section summary-section mb-5">
                    <h2 class="resume-section-title text-uppercase fw-bold pb-3 mb-3"><?= e($labels['summary']) ?></h2>
                    <div class="resume-section-content">
                        <p class="mb-0"><?= e($summary) ?></p>
                    </div>
                </section><!--//summary-section-->

                <div class="row">
                    <div class="col-lg-9">
                        <section class="resume-section experience-section mb-5">
                            <h2 class="resume-section-title text-uppercase fw-bold pb-3 mb-3"><?= e($labels['experience']) ?></h2>
                            <div class="resume-section-content">
                                <div class="resume-timeline position-relative">
                                    <?php foreach ($experience as $index => $job): ?>
                                        <article class="resume-timeline-item position-relative<?= $index < count($experience) - 1 ? ' pb-5' : '' ?>">
                                            <div class="resume-timeline-item-header mb-2">
                                                <div class="d-flex flex-column flex-md-row">
                                                    <h3 class="resume-position-title fw-bold mb-1">
                                                        <?= e($job['title']) ?>
                                                        <?php if ($job['note'] !== ''): ?>
                                                            <small class="text-muted"><?= e($job['note']) ?></small>
                                                        <?php endif; ?>
                                                    </h3>
                                                    <div class="resume-company-name ms-auto"><?= e($job['company']) ?></div>
                                                </div><!--//row-->
                                                <div class="resume-position-time"><?= e($job['period']) ?></div>
                                            </div><!--//resume-timeline-item-header-->
                                            <div class="resume-timeline-item-desc">
                                                <?php foreach ($job['description'] as $paragraph): ?>
                                                    <p><?= e($paragraph) ?></p>
                                                <?php endforeach; ?>

                                                <?php if ($job['achievementsSummary'] !== '' || count($job['achievements']) > 0): ?>
                                                    <h4 class="resume-timeline-item-desc-heading fw-bold"><?= e($labels['achievements']) ?></h4>
                                                    <?php if ($job['achievementsSummary'] !== ''): ?>
                                                        <p><?= e($job['achievementsSummary']) ?></p>
                                                    <?php endif; ?>
                                                    <?php if (count($job['achievements']) > 0): ?>
                                                        <ul>
                                                            <?php foreach ($job['achievements'] as $achievement): ?>
                                                                <li><?= e($achievement) ?></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                <?php endif; ?>

                                                <h4 class="resume-timeline-item-desc-heading fw-bold"><?= e($labels['technologies']) ?></h4>
                                                <ul class="list-inline">
                                                    <?php foreach ($job['technologies'] as $technology): ?>
                                                        <li class="list-inline-item"><span class="badge bg-secondary rounded-pill"><?= e($technology) ?></span></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div><!--//resume-timeline-item-desc-->
                                        </article><!--//resume-timeline-item-->
                                    <?php endforeach; ?>
                                </div><!--//resume-timeline-->
                            </div>
                        </section><!--//experience-section-->
                    </div>

                    <div class="col-lg-3">
                        <section class="resume-section skills-section mb-5">
                            <h2 class="resume-section-title text-uppercase fw-bold pb-3 mb-3"><?= e($labels['skills']) ?></h2>
                            <div class="resume-section-content">
                                <div class="resume-skill-item">
                                    <ul class="list-unstyled mb-4">
                                        <?php foreach ($skills as $skill): ?>
                                            <li class="mb-2">
                                                <div class="resume-skill-name"><?= e($skill['name']) ?></div>
                                                <div class="progress resume-progress">
                                                    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?= (int) $skill['level'] ?>%" aria-valuenow="<?= (int) $skill['level'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div><!--//resume-skill-item-->
                                <div class="resume-skill-item">
                                    <h4 class="resume-skills-cat fw-bold"><?= e($labels['skillsOther']) ?></h4>
                                    <ul class="list-inline">
                                        <?php foreach ($otherSkills as $otherSkill): ?>
                                            <li class="list-inline-item"><span class="badge badge-light"><?= e($otherSkill) ?></span></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div><!--//resume-skill-item-->
                            </div><!--//resume-section-content-->
                        </section><!--//skills-section-->

                        <section class="resume-section education-section mb-5">
                            <h2 class="resume-section-title text-uppercase fw-bold pb-3 mb-3"><?= e($labels['education']) ?></h2>
                            <div class="resume-section-content">
                                <ul class="list-unstyled">
                                    <?php foreach ($education as $item): ?>
                                        <li class="mb-2">
                                            <div class="resume-degree fw-bold"><?= e($item['degree']) ?></div>
                                            <div class="resume-degree-org"><?= e($item['school']) ?></div>
                                            <div class="resume-degree-time"><?= e($item['period']) ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </section><!--//education-section-->

                        <section class="resume-section awards-section mb-5">
                            <h2 class="resume-section-title text-uppercase fw-bold pb-3 mb-3"><?= e($labels['awards']) ?></h2>
                            <div class="resume-section-content">
                                <ul class="list-unstyled resume-awards-list">
                                    <?php foreach ($awards as $award): ?>
                                        <li class="mb-2 ps-4 position-relative">
                                            <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
                                            <div class="resume-award-name"><?= e($award['name']) ?></div>
                                            <div class="resume-award-desc"><?= e($award['description']) ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </section><!--//awards-section-->

                        <section class="resume-section language-section mb-5">
                            <h2 class="resume-section-title text-uppercase fw-bold pb-3 mb-3"><?= e($labels['languages']) ?></h2>
                            <div class="resume-section-content">
                                <ul class="list-unstyled resume-lang-list">
                                    <?php foreach ($languages as $language): ?>
                                        <li class="mb-2">
                                            <span class="resume-lang-name fw-bold"><?= e($language['name']) ?></span>
                                            <small class="text-muted fw-normal">(<?= e($language['level']) ?>)</small>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </section><!--//language-section-->

                        <section class="resume-section interests-section mb-5">
                            <h2 class="resume-section-title text-uppercase fw-bold pb-3 mb-3"><?= e($labels['interests']) ?></h2>
                            <div class="resume-section-content">
                                <ul class="list-unstyled">
                                    <?php foreach ($interests as $interest): ?>
                                        <li class="mb-1"><?= e($interest) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </section><!--//interests-section-->
                    </div>
                </div><!--//row-->

                <section class="resume-section projects-section mb-5">
                    <h2 class="resume-section-title text-uppercase fw-bold pb-3 mb-3"><?= e($labels['projects']) ?></h2>
                    <div class="row mt-4">
                        <?php foreach ($projects as $project): ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= e($project['image']) ?>" alt="<?= e($project['title']) ?>" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= e($project['title']) ?></h5>
                                        <p class="card-text"><?= e($project['description']) ?></p>
                                        <a class="btn btn-outline-primary" href="<?= e($project['url']) ?>"><?= e($labels['projectLink']) ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section><!--//projects-section-->
            </div><!--//resume-body-->

        </div>
    </article>

    <footer class="footer text-center pt-2 pb-5">
        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright"><?= e($labels['footerBefore']) ?> <span class="visually-hidden"><?= e($labels['footerLove']) ?></span><i class="fas fa-heart"></i> <?= e($labels['footerAfter']) ?> <?= e($fullName) ?></small>
    </footer>
</body>

</html>
