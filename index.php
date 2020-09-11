<?php include('./include/db.php');
$query = "SELECT * FROM personal_setup,about";
$runquery = mysqli_query($db, $query);
if (!$db) :
    header("location:index-2.html");
endif;
$Call = mysqli_fetch_array($runquery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Bootstrap Template</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="dist/img/portfolio/20200229_161111.jpg" rel="icon">
    <link href="dist/img/portfolio/20200307_180240.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--  Main CSS File -->
    <link rel="stylesheet" href="dist/css/style.css">
    <link href="dist/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>


<body>
    <button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>
    <!-- ======= Header ======= -->
    <header id="header" class="header ">
        <div class="container">

            <h1><a href="index.html"><?= $Call['name'] ?></a></h1>
            <h2>I'm developper <span>graphic designer</span> from morroc</h2>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li id="Home_menu" class="active"><a href="#header">Home</a></li>
                    <li id="about_menu"><a href="#about">About</a></li>
                    <li id="resume_menu"><a href="#resume">Resume</a></li>
                    <li id="portfolio_menu"><a href="#portfolio">Portfolio</a></li>
                    <li id="contact_menu"><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- .nav-menu -->

            <div class="social-links">
                <?php include("social-media/social.php"); ?>
            </div>

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about sect">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
                <p>Learn more about me</p>
            </div>

            <div class="row">
                <div class="col-img">
                    <img src="dist/img/me.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-text">
                    <h3><?= $Call["heading"] ?></h3>
                    <p class="font-italic">
                        <?= $Call["shortdesc"] ?>
                    </p>
                    <div class="row">
                        <div class="col-lg">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> <?= $Call["dob"] ?></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> <?= $Call["website"] ?></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> <?= $Call["Phone"] ?></li>
                                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> <?= $Call["City"] ?></li>
                            </ul>
                        </div>
                        <div class="col-lg">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> <?= $Call["Age"] ?></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> <?= $Call["Degree"] ?></li>
                                <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> <?= $Call["Email"] ?></li>
                            </ul>
                        </div>
                    </div>
                    <p><?= $Call["longdesc"] ?></p>
                </div>
            </div>

        </div>
        <!-- End About Me -->
        <!-- ======= Skills  ======= -->
        <div class="skills container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row-skills">
                <?php
                $q_skills = "SELECT * FROM skills";
                $run_skills = mysqli_query($db, $q_skills);
                while ($Callupskills = mysqli_fetch_array($run_skills)) {
                ?>
                    <div class="col-skill">
                        <div class="progress">
                            <span class="skill"><?= $Callupskills['skill'] ?> <i class="val"><?= $Callupskills['score'] ?>%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" style="width:<?= $Callupskills['score'] ?>;"></div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>


            </div>

        </div><!-- End Skills -->
    </section>
    <!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume sect">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Check My Resume</p>
            </div>

            <div class="row">
                <div class="col-resume">
                    <h3 class="resume-title">Education</h3>
                    <?php
                    $q_resume = "SELECT * FROM resume WHERE category='e'";
                    $run_resume = mysqli_query($db, $q_resume);
                    while ($call_resume = mysqli_fetch_array($run_resume)) {
                    ?>
                        <div class="resume-item">
                            <h4><?= $call_resume['title'] ?></h4>
                            <h5><?= $call_resume['year'] ?></h5>
                            <p><em><?= $call_resume['ogname'] ?></em></p>
                            <p><?= $call_resume['workdesc'] ?></p>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-resume">
                    <h3 class="resume-title">Professional Experience</h3>
                    <?php
                    $q_resume = "SELECT * FROM resume WHERE category='pe'";
                    $run_resume = mysqli_query($db, $q_resume);
                    while ($call_resume = mysqli_fetch_array($run_resume)) {
                    ?>
                        <div class="resume-item">
                            <h4><?= $call_resume['title'] ?></h4>
                            <h5><?= $call_resume['year'] ?></h5>
                            <p><em><?= $call_resume['ogname'] ?></em></p>
                            <p><?= $call_resume['workdesc'] ?></p>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </section>
    <!-- End Resume Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sect section-bg">
        <div class="container">

            <div class="portfolio-title">
                <h2>Portfolio</h2>
            </div>

            <div class="row col-lg-12">
                <div class="row row-cols-1 row-cols-md-3">
                    <?php
                    $query = "SELECT * FROM portfolio";
                    $runquery = mysqli_query($db, $query);
                    while ($data = mysqli_fetch_array($runquery)) {
                    ?>
                        <div class="col mb-4">
                            <a href="#" data-toggle="modal" data-target="#Modal<?= $data['id'] ?>" data-whatever="@mdo">
                                <div class="card h-100" id="card">
                                    <img src="dist/img/portfolio/<?= $data['projectpic'] ?>" class="card-img-top" alt="img project" style="height: 228px;">
                                    <div class="card-body">
                                        <div class="card-footer">
                                            <a class="card-text lead p-2"><?= $data['projectname'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <?php
                $query5 = "SELECT * FROM portfolio";
                $runquery5 = mysqli_query($db, $query5);
                while ($data = mysqli_fetch_array($runquery5)) {
                ?>
                    <div class="modal fade" id="Modal<?= $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <img src="dist/img/portfolio/<?= $data['projectpic'] ?>" class="card-img-top" alt="...">
                                        <div>
                                            <h5 class="modal-title"><?= $data['projectname'] ?></h5>
                                            <p class="modal-text">Some quick example text to build on the card title and
                                                make
                                                up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="<?= $data['projectlink'] ?>" class="btn btn-success ">Preview</a>
                                    <a href="https://github.com/zakaria-batty" class="btn btn-primary">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section><!-- End Portfolio Section -->
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact sect">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2">

                <div class="col-contact">
                    <div class="info-box">
                        <i class="bx icofont-map"></i>
                        <h3>My Address</h3>
                        <p><?= $Call['location'] ?></p>
                    </div>
                </div>

                <div class="col-contact">
                    <div class="info-box">
                        <i class="bx icofont-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <?php include("social-media/social.php"); ?>
                        </div>
                    </div>
                </div>

                <div class="col-contact">
                    <div class="info-box">
                        <i class="bx icofont-envelope"></i>
                        <h3>Email Me</h3>
                        <p><?= $Call['emailid'] ?></p>
                    </div>
                </div>
                <div class="col-contact">
                    <div class="info-box">
                        <i class="bx icofont-phone"></i>
                        <h3>Call Me</h3>
                        <p><?= $Call['mobile'] ?></p>
                    </div>
                </div>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="formule">
                <div class="form-row">
                    <div class="col-Form">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                        <div class="validate"></div>
                    </div>
                    <div class="col-Form">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-grp ">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
                    <div class="validate"></div>
                </div>
                <div class="form-grp">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" style=" background: rgba(255, 255, 255, 0.08);"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="text-center">
                    <button type="submit">Send Message</button>
                </div>
            </form>

        </div>
    </section>
    <!-- End Contact Section -->

    <div class="credits">
        Designed by <a href="">BootstrapMade</a>
    </div>


    <script src="dist/js/main.js"></script>
</body>

</html>