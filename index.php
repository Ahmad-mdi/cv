<?php
include_once 'database/connection.php';
$GENERAL_INFO = getGeneralInfo($con);
$EXP = getExperiences($con);
$EDU = getEducations($con);
$SKL = getSkills($con);
$AWD = getAwards($con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?=$GENERAL_INFO['fullName']?></title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none"><?=$GENERAL_INFO['fullName']?></span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?=$GENERAL_INFO['avatar']?>" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <?=$GENERAL_INFO['fullName']?>
                    </h1>
                    <div class="subheading mb-5">
                        <?=$GENERAL_INFO['address']?>
                        <a href="mailto:<?=$GENERAL_INFO['email']?>"><?=$GENERAL_INFO['email']?></a>
                    </div>  
                    <p class="lead mb-5"><?=$GENERAL_INFO['about']?></p>
                    <div class="social-icons">
                        <?php if ($GENERAL_INFO['linkedin'] != ''): ?>
                        <a class="social-icon" href="<?=$GENERAL_INFO['linkedin']?>">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <?php endif;?>

                        <?php if ($GENERAL_INFO['github'] != ''): ?>
                        <a class="social-icon" href="<?=$GENERAL_INFO['github']?>">
                            <i class="fab fa-github"></i>
                        </a>
                        <?php endif;?>

                        <?php if ($GENERAL_INFO['instagram'] != ''): ?>
                        <a class="social-icon" href="<?=$GENERAL_INFO['instagram']?>">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <?php endif;?>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <?php foreach ($EXP as $item):?>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                            <div class="flex-grow-1">
                                <h3 class="mb-0"><?=$item['title']?></h3>
                                <div class="subheading mb-3"><?=$item['subTitle']?></div>
                                <p><?=$item['content']?></p>
                            </div>
                            <div class="flex-shrink-0"><span class="text-primary"><?=$item['fromDate']?> - <?=$item['toDate']?></span></div>
                        </div>
                    <?php endforeach;?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <?php foreach ($EDU as $item):?>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?=$item['title']?></h3>
                            <div class="subheading mb-3"><?=$item['subTitle']?></div>
                            <div><?=$item['content']?></div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?=$item['fromDate']?> - <?=$item['toDate']?></span></div>
                    </div>
                    <?php endforeach;?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <?php foreach ($SKL['skill_tools'] as $item):?>
                            <li class="list-inline-item"><i class="fab <?=$item['logo']?>"></i></li>
                        <?php endforeach;?>
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <?php foreach ($SKL['skills'] as $item):?>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                <?=$item['title']?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p class="mb-0"><?=$GENERAL_INFO['interests']?></p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <?php foreach ($AWD as $item):?>
                            <?php
                                $className = 'fa fa-trophy';
                                $classColor = 'gold';
                                if ($item['type'] != 'award') {
                                    $className = 'fa fa-certificate';
                                    $classColor = 'grey';
                                }
                            ?>
                            <li>
                                <i style="color: <?=$classColor?> !important;" class="fa-li <?=$className?>  text-warning"></i>
                                <?=$item['title']?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
