<!DOCTYPE html>
    <!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
    <!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
    <!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <!-- ======================= Basic Page Needs ======================= -->
        <meta charset="utf-8">
        <title>Altaib | Portfolio</title>
        <meta name="description" content="I'm 'Ahmad Altaib' Ali works as a Software Engineer familiar with front and back end creating Websites, Web Apps and Portfolios for companies of all sizes around the globe using php, Python, Java, JavaScript, Bootstrab, Foundation, Yii Framework, Laravel Framework, Spring Framework">
        <meta name="author" content="Ahmad Altaib Ali">

        <!-- ======================= FB meta TAGs ======================= -->
        <meta property="og:url"         content="http://www.altaib.net">
        <meta property="og:type"        content="Protfolio website">
        <meta property="og:title"       content="Altaib | Portfolio">
        <meta property="og:image"       content="http://altaib.net/images/profilepic.png">
        <meta property="og:description" content="I'm 'Ahmad Altaib' Ali works as a Software Engineer familiar with front and back end creating Websites, Web Apps and Portfolios for companies of all sizes around the globe using php, Python, Java, JavaScript, Bootstrab, Foundation, Yii Framework, Laravel Framework, Spring Framework">
        <meta property="og:app_id"      content="476352019448808">
        <meta property="og:locale"      content="en_US">

        <!-- ======================= Mobile Specific Metas ======================= -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- ======================= CSS ======================= -->
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/media-queries.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- ======================= Script ======================= -->
        <script src="js/modernizr.js"></script>

        <!-- ======================= Favicons ======================= -->
        <link rel="shortcut icon" href="favicon.ico" >
    </head>
    <body>
        <!-- ======================= Header ======================= -->
        <header id="home">

            <nav id="nav-wrap">
                <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
                <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
                <ul id="nav" class="nav">
                    <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
                    <li><a class="smoothscroll" href="#about">About</a></li>
                    <li><a class="smoothscroll" href="#resume">Resume</a></li>
                    <li><a class="smoothscroll" href="#portfolio">Works</a></li>
                    <li><a class="smoothscroll" href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="row banner">
                <div class="banner-text">
                    <h1 class="responsive-headline">I'm 'Ahmad Altaib' Ali.</h1>
                    <h3>
                        I'm a Software Engineer familiar with <span>php</span>, <span>Python</span>, and <span>Java</span>
                        creating Websites, Web Apps and Portfolios for companies of all sizes around the globe. Let's
                        <a class="smoothscroll" href="#about">start scrolling</a>
                        and learn more <a class="smoothscroll" href="#about">about me</a>.
                    </h3>
                    <hr />
                    <ul class="social">
                        <li><a href="https://web.facebook.com/ahmadaltaib.ali"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/altaib_94"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/ahmad-altaib-ali"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/+AhmadAli_94"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.instagram.com/altaib_94/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <p class="scrolldown">
                <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
            </p>
        </header>

        <!-- ======================= About ======================= -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="three columns">
                        <img class="profile-pic"  src="images/profilepic.png" alt="ahmad altaib ali photo" />
                    </div>
                    <div class="nine columns main-col">
                        <h2>About Me</h2>
                        <p class="text-justify">
                            Experienced Software Engineer with a demonstrated history of working.
                            Skilled in the backend programing languages(PHP, java, python),
                            front-end(JS, CSS) and have good knowledge in design patterns and frameworks .
                            Strong engineering professional with a Bachelor's Degree focused on Software Engineering.
                        </p>
                        <div class="row">
                            <div class="columns contact-details">
                                <h2>Contact Details</h2>
                                <p class="address">
                                    <span>Amman, Jordan</span><br>
                                    <span>11185, Al-Swaifyeh<br> Nouh Ar Roumi st.</span><br>
                                    <span>+(962) 78 6305562</span><br>
                                    <span>altayeb94@gmail.com</span>
                                </p>
                            </div>

                            <div class="columns download">
                                <button type="button" class="button " data-toggle="modal" data-target="#cvModal"><i class="fa fa-file-text-o"></i> Review Resume</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CV Modal -->
            <div id="cvModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"> <i class="fa fa-times-circle"></i> </button>
                            <a href="downloadahmadaltaibalicv.php" class="close download-icon" onclick="$('#cvModal').modal('hide');" target="_blank" > <i class="fa fa-download"></i> </a>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <iframe src="cv/AhmadAliCV.pdf" style="width: 100%;height: 100%;"></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ======================= Resume ======================= -->
        <section id="resume">
            <div class="container">
                <!-- Education -->
                <div class="row education">
                    <div class="three columns header-col">
                        <h1><span>Education</span></h1>
                    </div>

                    <div class="nine columns main-col">
                        <div class="row item">
                            <div class="twelve columns">
                                <h3>Zarqa University</h3>
                                <p class="info">Bachelors in Software Engineering <span>&bull;</span> <em class="date">Jan 2015</em></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Work -->
                <div class="row work">
                    <div class="three columns header-col">
                        <h1><span>Work</span></h1>
                    </div>

                    <div class="nine columns main-col">
                        <div class="row item">
                            <div class="twelve columns">
                                <h3><a href="https://www.amazon.com/" rel="follow" >Amazon</a></h3>
                                <p class="info">Software Engineer <span>&bull;</span> <em class="date">Aug 2017 - Present</em></p>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="twelve columns">
                                <h3><a href="https://uae.souq.com/ae-en/" rel="follow" >Souq.com</a></h3>
                                <p class="info">Software Engineer <span>&bull;</span> <em class="date">Feb 2017 - Present</em></p>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="twelve columns">
                                <h3><a href="https://www.7awi.com/" rel="follow" >7awi</a></h3>
                                <p class="info">Software Engineer <span>&bull;</span> <em class="date">Aug 2016 - Feb 2017</em></p>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="twelve columns">
                                <h3><a href="http://www.elearment.com" rel="follow" >eLEARMENT</a></h3>
                                <p class="info">Software Engineer <span>&bull;</span> <em class="date">May 2015 - Aug 2016</em></p>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="twelve columns">
                                <h3><a href="http://www.designak.me" rel="follow" >Designak</a></h3>
                                <p class="info">Intern<span>&bull;</span> <em class="date">Jun 2014 – Sep 2014</em></p>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="twelve columns">
                                <h3><a href="http://www.tunedapps.com/" rel="follow" >Tuned Application</a></h3>
                                <p class="info">Intern<span>&bull;</span> <em class="date">Feb 2014 – May 2014</em></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Work -->
                <div class="row skill">
                <div class="three columns header-col">
                    <h1><span>Skills</span></h1>
                </div>
                <div class="nine columns main-col">
                    <div class="bars">
                        <ul class="skills">
                            <li><span class="bar-expand php"></span><em>php (Yii, Codigniter and Laravel)</em></li>
                            <li><span class="bar-expand java"></span><em>Java</em></li>
                            <li><span class="bar-expand python"></span><em>Python</em></li>
                            <li><span class="bar-expand db"></span><em>Sql and NoSql Database</em></li>
                            <li><span class="bar-expand search"></span><em>Search Engines Solr and ElasticSearch</em></li>
                            <li><span class="bar-expand media"></span><em>FFmpeg multimedia framework</em></li>
                            <li><span class="bar-expand jssec"></span><em>JavaScript, JQuery, UnderScore and grunt</em></li>
                            <li><span class="bar-expand html"></span><em>HTML/HTML5</em></li>
                            <li><span class="bar-expand css"></span><em>CSS, Bootstrap and Foundation</em></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- ======================= Portfolio ======================= -->
        <section id="portfolio">
            <div class="container">
                <div class="row center-block">
                    <div class="col-md-12 twelve columns collapsed">
                        <h1>Check Out Some of My Works.</h1>

                        <!-- Modal small images -->
                        <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">
                            <div class="columns portfolio-item">
                                <div class="item-wrap">
                                    <a href="#modal-01" title="">
                                        <img alt="" src="images/portfolio/altaibs.png">
                                        <div class="overlay">
                                            <div class="portfolio-item-meta">
                                                <h5>Developer Portfolio</h5>
                                            </div>
                                        </div>
                                        <div class="link-icon"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="columns portfolio-item">
                                <div class="item-wrap">
                                    <a href="#modal-02" title="">
                                        <img alt="" src="images/portfolio/mhmds.png">
                                        <div class="overlay">
                                            <div class="portfolio-item-meta">
                                                <h5>Designer Portfolio</h5>
                                            </div>
                                        </div>
                                        <div class="link-icon"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="columns portfolio-item">
                                <div class="item-wrap">
                                    <a href="#modal-03" title="">
                                        <img alt="" src="images/portfolio/tnb.png">
                                        <div class="overlay">
                                            <div class="portfolio-item-meta">
                                                <h5>Corporate Portfolio</h5>
                                            </div>
                                        </div>
                                        <div class="link-icon"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="columns portfolio-item">
                                <div class="item-wrap">
                                    <a href="#modal-04" title="">
                                        <img alt="" src="images/portfolio/ssg2s.png">
                                        <div class="overlay">
                                            <div class="portfolio-item-meta">
                                                <h5>Company Portfolio</h5>
                                            </div>
                                        </div>
                                        <div class="link-icon"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Popup -->
                        <div id="modal-01" class="popup-modal mfp-hide">
                            <div class="link-box text-right">
                                <a class="popup-modal-dismiss"><i class="fa fa-times-circle"></i></a>
                            </div>
                            <img class="scale-with-grid" src="images/portfolio/altaibb.png" alt="" />
                        </div>
                        <div id="modal-02" class="popup-modal mfp-hide">
                            <div class="link-box text-right">
                                <a class="popup-modal-dismiss"><i class="fa fa-times-circle"></i></a>
                            </div>
                            <img class="scale-with-grid" src="images/portfolio/mhmdb.png" alt="" />
                        </div>
                        <div id="modal-03" class="popup-modal mfp-hide">
                            <div class="link-box text-right">
                                <a class="popup-modal-dismiss"><i class="fa fa-times-circle"></i></a>
                            </div>
                            <img class="scale-with-grid" src="images/portfolio/tnb.png" alt="" />
                        </div>
                        <div id="modal-04" class="popup-modal mfp-hide">
                            <div class="link-box text-right">
                                <a class="popup-modal-dismiss"><i class="fa fa-times-circle"></i></a>
                            </div>
                            <img class="scale-with-grid" src="images/portfolio/ssg2b.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======================= Contact ======================= -->
        <section id="contact">
            <div class="container">
                <div class="row section-head">
                    <div class="two columns header-col">
                        <h1><span>Get In Touch.</span></h1>
                    </div>
                    <div class="ten columns">
                        <p class="lead">
                            <b class="text-center">I’D LOVE TO ANSWER YOUR QUESTIONS</b><br>
                            or hear your comments about my products or to hire me. Simply fill out the form below.
                            Contact me for any questions, concerns or for any other reason. Also I'm available now for freelance.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="eight columns">
                        <!-- form -->
                        <form action="" method="post" id="contactForm" name="contactForm">
                            <fieldset>
                                <div>
                                    <label for="contactName">Name <span class="required">*</span></label>
                                    <input type="text" value="" size="35" id="contactName" name="contactName">
                                </div>
                                <div>
                                    <label for="contactEmail">Email <span class="required">*</span></label>
                                    <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                                </div>
                                <div>
                                    <label for="contactSubject">Subject</label>
                                    <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                                </div>
                                <div>
                                    <label for="contactMessage">Message <span class="required">*</span></label>
                                    <textarea cols="50" rows="5" id="contactMessage" name="contactMessage"></textarea>
                                </div>
                                <div>
                                    <button class="submit">Submit</button>
                                    <span id="image-loader"><img alt="" src="images/loader.gif"></span>
                                </div>
                            </fieldset>
                        </form>

                        <!-- contact-warning -->
                        <div id="message-warning">Error body</div>

                        <!-- contact-success -->
                        <div id="message-success">
                            <i class="fa fa-check"></i>Your message was sent, thank you!<br>
                        </div>
                    </div>


                    <aside class="four columns footer-widgets">
                        <div class="widget widget_contact">
                            <h4>Address and Phone</h4>
                            <p class="address">
                                <span>Amman, Jordan</span><br>
                                <span>11185, Al-Swaifyeh<br> Nouh Ar Roumi st.</span><br>
                                <span>+(962) 78 6305562</span><br>
                                <span>info@altaib.net</span>
                            </p>
                        </div>
                    </aside>
                </div>
            </div>
       </section>

        <!-- ======================= footer ======================= -->
        <footer>
            <div class="container">
                <div class="row text-center center-block">
                    <div class="twelve columns col-md-12 text-center center-block">
                        <ul class="social-links">
                            <li><a href="https://web.facebook.com/ahmadaltaib.ali"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/altaib_94"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/ahmad-altaib-ali"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://plus.google.com/u/0/+AhmadAli_94"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://www.instagram.com/altaib_94/"><i class="fa fa-instagram"></i></a></li>
                        </ul>

                        <ul class="copyright">
                            <li>&copy; Copyright <?php echo date('Y'); ?> altaib</li>
                            <li>Developed by <a title="Styleshout" href="http://www.altaib.net/">altaib.net</a></li>
                        </ul>
                    </div>
                    <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>
                </div>
            </div>
       </footer>

        <!-- ======================= Java Script ======================= -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/waypoints.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/magnific-popup.js"></script>
        <script src="js/init.js"></script>

    </body>
</html>