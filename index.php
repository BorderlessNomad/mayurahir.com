<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>MAYUR AHIR</title>
        <link rel="icon" type="image/png" href="./img/favicon.png"/>
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:light,regular,bold|Voces' rel='stylesheet' type='text/css'/>
        <!--[if IE 6]>
        <script type="text/javascript" src="./js/png.js"></script>
        <script>
          DD_belatedPNG.fix('#photo, img, #backtoptop, #skills ul li');
        </script>
        <style>
        body {margin-top:40px;}
        </style>
        <![endif]--> 

        <link rel="stylesheet" href="./css/reset.css" type="text/css" />
        <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="./css/print.css" type="text/css" media="print" />
        <link rel="stylesheet" href="./css/jquery.fancybox.css" type="text/css" />
        <link rel="stylesheet" href="./css/colortip.css" type="text/css" />

        <script type="text/javascript" src="./js/jquery-latest.min.js"></script>
        <script type="text/javascript" src="./js/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="./js/jquery.colortip.js"></script>
        <script type="text/javascript" src="./js/jquery.ufvalidator.1.0.4.js"></script>
        <script type="text/javascript" src="./js/main.js"></script>

        <script type="text/javascript">
            jQuery(function ($) {
                var g_width = 417;
                $('#resume_skills ul li span').each(function(i, elem){
                    if(typeof $(this).attr('data-width') != 'undefined') {
                        var w = g_width * $(this).attr('data-width') / 100 + "px";
                        $(this).css('width', w);
                    }
                });
                $('#resume_skills ul li em').colorTip();
            });
        </script>

        <!--[if gte IE 6]>
                <link rel="stylesheet" href="./css/ie.css" type="text/css" media="screen" title="CSS for IE" />
        <![endif]-->

    </head>

    <body>
        <!-- BEGIN CONTAINER -->
        <div id="container">

            <!-- BEGIN HEADER -->
            <div id="header">

                <div id="photo">
                    <a id="myphoto" class="fancybox" href="./img/photo.jpg">
                        <img src="./img/photo.jpg" width="144" height="192" border="0" alt="Click to enlarge" />
                    </a>
                </div><!-- end #photo div -->

                <div id="right_header">
                    <ul class="social_panel">
                        <li><a href="http://www.facebook.com/ahirmayur" target="_blank" title="Facebook" class="blue-darker"><img src="./img/facebook.png" width="32" height="32" alt="Facebook" /></a></li>
                        <li><a href="http://twitter.com/#!/ahirmayur" target="_blank" title="Twitter" class="blue"><img src="./img/twitter.png" width="32" height="32" alt="Twitter" /></a></li>
                        <li><a href="http://plus.google.com/100464866035861410995" target="_blank" title="Google+" class="white"><img src="./img/google-plus.png" width="32" height="32" alt="Google+" /></a></li>
                        <li><a href="skype:ahirmayur" target="_blank" title="Skype" class="skyblue"><img src="./img/skype.png" width="32" height="32" alt="Skype" /></a></li>
                        <li><a href="http://www.github.com/ahirmayur" target="_blank" title="GitHub" class="black"><img src="./img/github.png" width="32" height="32" alt="GitHub" /></a></li>
                        <li class="last"><a href="http://in.linkedin.com/in/ahirmayur" target="_blank" title="LinkedIn" class="blue-dark"><img src="./img/linkedin.png" width="32" height="32" alt="LinkedIn" /></a></li>
                    </ul><!-- end .social_panel list -->

                    <ul class="main_panel">
                        <li><a href="personal/resume.pdf" title="Download CV" class="print_button white"><img src="./img/print.png" width="32" height="32" alt="Download CV" /></a></li>
                        <li><a href="mailto:mayur@mayurahir.com" title="Contact me" class="white"><img src="./img/contact.png" width="32" height="32" alt="Contact me" /></a></li>
                        <li class="last"><a href="personal/code_samples.zip" title="Download My Code Samples" class="white"><img src="./img/download.png" width="32" height="32" alt="Download CV" /></a></li>

                    </ul><!-- end .main_panel list -->

                    <ul class="main_panel">
                        <li class="last"><a href="http://www.mayurahir.com/blog/" title="Blog" class="white" target="_blank"><img src="./img/blog.png" width="32" height="32" alt="Blog" /></a></li>
                    </ul><!-- end .main_panel list -->

                    <h1 id="myname">Mayur Ahir</h1>
                    <h3 id="subtitle">Hacker, Hustler, Human <br/>who fell in &hearts; with Code</h3>
                    <div class="top_data">
                        <ul class="info">
                            <?php /*
                            <li class="phone">(+91) 90 2910 2835</li>
                            <li class="info">Single, Male</li>
                            <li class="email"><a href="mailto:mayur@mayurahir.com">mayur@mayurahir.com</a></li>
                            <li class="birthday">18<sup>th</sup> December, 1989</li>
                            <li class="website"><a href="#">www.mayurahir.com</a></li>
                            <li class="address">Mumbai, Maharashtra, IN</li>
                            */ ?>
                            <li class="info">Single, (&#9794;) Male living in</li>
                            <li class="address">Mumbai, Maharashtra, IN</li>
                            <li class="email">Reach me on, <a href="mailto:mayur@mayurahir.com">mayur@mayurahir.com</a></li>
                        </ul>
                        <!-- end .info list -->
                        <div class="quote">
                            <blockquote>
                                <h5>Favorite Quotation:</h5>
                                <p>It does not matter how slowly you go so long as you do not stop.</p>
                            </blockquote>
                        </div>
                    </div>
                </div><!-- end #right_header -->
            </div><!-- END HEADER -->
            <div class="separator"></div>

            <!-- BEGIN SKILLS -->
            <div class="main_content" id="resume_skills">
                <h2>Skills</h2>
                <div class="left_content">
                    <div class="item">
                        <h4>Programming</h4>
                        <ul class="skills">
                            <li><span class="expand" data-width="90"></span><em>PHP + Yii/Zend/CakePHP MVC Frameworks</em></li>
                            <li><span class="expand" data-width="80"></span><em>MySQL & MongoDB/NoSQL</em></li>
                            <li><span class="expand" data-width="80"></span><em>JavaScript + jQuery/Knockout.js</em></li>
                            <li><span class="expand" data-width="75"></span><em>(x)HTML(5) & CSS(3) + Backbone.js</em></li>
                            <li><span class="expand" data-width="70"></span><em>Node.js + Express + WebSockets</em></li>
                            <li><span class="expand" data-width="65"></span><em>C/C++/Java Core & Mobile Apps</em></li>                         
                        </ul>
                    </div>
                    <div class="item">
                        <h4>Graphics and media</h4>
                        <ul class="skills">
                            <li><span class="expand" data-width="60"></span><em>Photoshop/Core Draw</em></li>
                            <li><span class="expand" data-width="40"></span><em>Flash/Illustrator</em></li>
                        </ul>
                    </div>
                    <div class="item">
                        <h4>Forum Boards</h4>
                        <ul class="skills">
                            <li><span class="expand" data-width="65"></span><em>vBulletin/IPB/phpBB</em></li>                 
                        </ul>
                    </div>
                    <div class="item">
                        <h4>CMS</h4>
                        <ul class="skills">
                            <li><span class="expand" data-width="70"></span><em>WordPress/Joomla/Drupal</em></li>              
                        </ul>
                    </div>
                </div>
                <div class="right_content">
                    <div class="item">
                        <h4>Cloud Computing</h4>
                        <ul class="skills">
                            <li><span class="expand" data-width="80"></span><em>Amazon AWS EC2 & RDS</em></li>
                            <li><span class="expand" data-width="70"></span><em>Microsoft Azure</em></li>
                            <li><span class="expand" data-width="85"></span><em>Linode & RackSpace</em></li>                     
                        </ul>
                    </div>
                    <div class="item">
                        <h4>Operating Systems</h4>
                        <ul class="skills">
                            <li><span class="expand" data-width="85"></span><em>Linux (Ubuntu/CentOS/RHEL)</em></li>
                            <li><span class="expand" data-width="80"></span><em>Windows (XP, 7, Server 2008)</em></li>
                            <li><span class="expand" data-width="80"></span><em>Mac OSX</em></li>                     
                        </ul>
                    </div>
                    <div class="item">
                        <h4>Software Engineering</h4>
                        <ul class="skills">
                            <li><span class="expand" data-width="85"></span><em>Agile & SCRUM</em></li>
                            <li><span class="expand" data-width="75"></span><em>Reverse Engineering</em></li>
                            <li><span class="expand" data-width="80"></span><em>Project Management</em></li>                   
                        </ul>
                    </div>
                </div>
            </div><!-- END SKILLS -->
            <div class="separator"></div>

            <!-- MAIN CONTENT -->
            <div class="main_content">
                <div class="left_content">
                    <!-- BEGIN WORK EXPERIENCE -->
                    <div id="work_experience">
                        <h2 class="title">Work Experience</h2>
                        <div class="item">
                            <h4><span>July 2012 - Present</span>Platform Geek</h4>
                            <h5>One97 Communications Pvt. Ltd. (Full-time)</h5>
                            <div id="projects" class="not_top">
                                <div class="item">
                                    <h4>Paytm</h4>
                                    <p>
                                        Working on India's largest realtime mobile e-commerce company for recharges and payments. 
                                        Developing cross platform APIs to allow Single Signon and multi-order cart. 
                                        Doing research and experimenting with new Technology verticals for Paytm.com. 
                                        Integration of various Payment Gateways and Recharge modules for fulfilment of orders. 
                                        Collaborating and communicating with different people across One97 for exploring possibilities and taking initiatives to build prototypes.
                                    </p>
                                </div> 
                            </div>
                        </div> <!-- end item -->
                        <div class="item">
                            <h4><span>June 2011 - June 2012</span>Sr. Software Engineer</h4>
                            <h5>Sutra Services Pvt. Ltd. (Full-time)</h5>
                            <div id="projects" class="not_top">
                                <div class="item">
                                    <h4>sumHR</h4>
                                    <p>
                                        Developing SaaS based HR management platform with powerful communication and collaboration tools; ideal for Startups and SMEs. 
                                        As a second developer my role is to develop and maintain new features/functionalities, Enhancing existing features, testing the features. 
                                        Along with developing lifecycle of a product, including strategy, vision, design, UX, architecture, deployment etc.
                                    </p>
                                </div> 
                            </div>
                            <div id="projects" class="not_top">
                                <div class="item">
                                    <h4>GreatIndianJobs</h4>
                                    <p>Developing and maintaining Wordpress based custom Open Job Board.</p>
                                </div> 
                            </div>
                        </div> <!-- end item -->
                        <div class="item">
                            <h4><span>Aug 2006 - June 2011</span>Developer and Designer </h4>
                            <h5>E|ANTRIX (Contract / Part-time)</h5>
                            <p>Low cost quality freelance work for various industries situated Pan-India. Right from the design/UI to development/programming; with Search Engine Optimization and other tasks related to product such as marketing etc.</p>
                            <div id="projects" class="not_top">
                                <div class="item">
                                    <h4><span>Dec 2010 - Mar 2011</span>VideoCentral</h4>
                                    <h5>O<sub>2</sub> Supply Incubator</h5>
                                    <p>An online video portal where users can watch, comment, socially shares the educational videos.                        </p>
                                </div> 
                                <!-- end item -->
                                <div class="item">
                                    <h4><span>Feb 2011 - Apr 2011</span>Inlite </h4>
                                    <h5>In-Lite Products</h5>
                                    <p>Online catalog and product portfolio for Mumbai based LED Product manufacturers.</p>
                                </div> <!-- end item -->
                                <div class="item">
                                    <h4><span>Dec 2010 - Jan 2011</span>Quizio </h4>
                                    <h5>Symbiosis Centre for Management and Human Resource Development</h5>
                                    <p>Online Quiz for Neev 2011 (Annual Tech Fest of SIMR, Pune).</p>
                                </div> <!-- end item -->
                                <div class="item">
                                    <h4><span>Aug 2010 - Mar 2011</span>GyanCentral </h4>
                                    <h5>O<sub>2</sub> Supply Incubator</h5>
                                    <p>Education portal to serve the students with full of information related to MBA, Engineering etc Courses and institutions.</p>
                                </div> <!-- end item -->
                                <div class="item">
                                    <h4><span>Apr 2010 - Aug 2010</span>GyanForums </h4>
                                    <h5>O<sub>2</sub> Supply Incubator</h5>
                                    <p>Online forum/community where users can post, view and get informed about latest happening around the education realm.</p>
                                </div> 
                                <!-- end item -->
                                <div class="item">
                                    <h4><span>Feb 2010 - Apr 2010</span>DSept9 </h4>
                                    <h5>The Septmber 9 Fashions</h5>
                                    <p>A website for Mumbai's leading fashion/garment manufacturer.</p>
                                </div> 
                                <!-- end item -->
                                <div class="item">
                                    <h4><span>Dec 2009 - Feb 2010</span>JSolutions </h4>
                                    <h5>jSolutions, LLC</h5>
                                    <p>An online portfolio for software developer and designer.</p>
                                </div> 
                                <!-- end item -->
                                <div class="item">
                                    <h4><span>Aug 2009 - Oct 2009</span>Lashkaria Group </h4>
                                    <h5>Lashkaria Construction Pvt. Ltd.</h5>
                                    <p>An online portfolio and introductory dynamic web portal for India's leading Real Estate developer.</p>
                                </div> 
                                <!-- end item -->
                                <div class="item">
                                    <h4><span>Dec 2008 - Jun 2009</span>Sapan Properties </h4>
                                    <h5>Sapan Properties Pvt. Ltd.</h5>
                                    <p>An online portfolio and introductory dynamic web portal for India's leading Real Estate developer.</p>
                                </div> 
                                <!-- end item -->
                                <div class="item">
                                    <h4><span>Aug 2008 - Nov 2008</span>KJSIEIT CSI </h4>
                                    <h5>Computer Society of India, Somaiya Students' Chapter</h5>
                                    <p>Inter-college community portal for students to share and learn.</p>
                                </div> 
                                <!-- end item -->
                                <div class="item">
                                    <h4><span>Sep 2006 - Aug 2008</span>TechKranti </h4>
                                    <h5>BMApps Labs</h5>
                                    <p>
                                        TechKranti was the bulletin board for all those who are in need for urgent consultancy of various syllabus, course materials etc.<br/>
                                        It had also provided the vast amount of free knowledge and attracted students form Engineering, Medical, Pharmacy and Management institutes.
                                    </p>
                                </div> 
                                <!-- end item -->
                            </div>                        
                        </div> <!-- end item -->
                    </div>
                    <!-- END WORK EXPERIENCE -->
                    <!-- BEGIN PROJECTS -->

                    <!-- END PROJECTS -->
                </div>
                <div class="right_content">
                    <!-- BEGIN EDUCATION -->
                    <div id="education">
                        <h2>Education</h2>
                        <div class="item">
                            <h4><span>2007 - 2011</span>K.J.Somaiya Institute of Engineering & Information Technology</h4>
                            <h5>B.E/B.Tech (Information Technology)</h5>
                            <p>Utter Professionalism getting hands on C, C++, Java, J2ME, DBMS, Data Structures, Software Engineering, Computer Networks, Security, Management of IT Enterprises and Infrastructures, Cloud Computing.</p>
                        </div> <!-- end item -->
                        <div class="item">
                            <h4><span>2005 - 2007</span>M.V.L.U. College of Science & Arts</h4>
                            <h5>H.S.C. (Science)</h5>
                            <p>With some seriousness but lots of fun with firends Movies, Girls and other teen-age stuff while understadning Electricity, Gravitational, Magnetism, Quantum Theory, Fuilds, Mechanics, Optics, Robotics, Thermodynamics, Gases, Acids and Bases, Nuclear Chemistry, Organic Chemistry, Botany, Zoology.</p>
                        </div> <!-- end item -->
                        <div class="item">
                            <h4><span>1992 - 2005</span>J.H.Poddar High School</h4>
                            <h5>S.S.C.</h5>
                            <p>School boy starts his journey into the vast sea of subjects like History, Gerography, Algebra, Trigonometry, Geometry, Civics, Moral Education, Economics, Environmental science, Arts, Social Services, General Knowedge, English, Sanskrit.</p>
                        </div> <!-- end item -->
                    </div>
                    <!-- END EDUCATION -->
                    <!-- BEGIN EDUCATION -->
                    <div id="seminar_cause" class="not_top">
                        <h2>Seminars & Causes</h2>
                        <div class="item">
                            <h4><span>Sep 2011</span>Building scalable application using SaaS</h4>
                            <h5>RenaissancE 2011</h5>
                            <p>Open talk on SaaS future as a Winner of Annual National Technical Festival jointly organized by CSI and IEEE Students' Chapter.</p>
                        </div> 
                        <!-- end item -->
                        <div class="item">
                            <h4><span>Mar 2011</span>Designing excellent websites using Photoshop and CorelDraw </h4>
                            <h5>Computer Society of India (CSI) Students' Chapter</h5>
                            <p>A short term course for design enthusiasts who want to learn how to design and create an awsome UI for  websites.</p>
                        </div> 
                        <!-- end item -->
                        <div class="item">
                            <h4><span>Aug 2011</span>Introduction to Linux and modern Web Technologies</h4>
                            <h5>Information Technology Students' Association (ITSA)</h5>
                            <p>Theory and Practical sessions on various linux distors like Ubuntu, RHEL, CentOS, OpenBSD. Detailed intro to web technologies used to develop modern day projects like FTP, sFTP, HTTP(S), SSH, TelNet, RDP etc.</p>
                        </div>
                        <!-- end item -->
                        <div class="item">
                            <h4><span>Sep 2010</span>Hitchhiker's guide to Ethical Hacking</h4>
                            <h5>RenaissancE 2010</h5>
                            <p>So Who is a hacker Anyway?, Finding Information on the Net, Hacking Windows, Getting your Hands Wet Tool, Exploring Remote Systems, Batch File Programming, TCP/IP:A Mammoth Description, How does a Virus Work, Nasty Scripts and Hostile Applets.</p>
                        </div> 
                        <!-- end item -->
                        <div class="item">
                            <h4><span>May 2010</span>DIY: Repair and Assemble your PC at NO COST</h4>
                            <h5>CSI and IEEE Students' Chapter</h5>
                            <p>How to repair your PC/Laptop at home with information and introduction to essential components such as Motherboard, Processor, PCI Cards, Hard Drive, EEPROP, Operating Systems etc. </p>
                        </div> 
                        <!-- end item -->
                    </div>
                    <!-- END EDUCATION -->
                    <!-- BEGIN EDUCATION -->
                    <div id="achievements" class="not_top">
                        <h2>Achievements</h2>
                        <div class="item">
                            <h4><span>Aug 2008 - Dec 2010</span>Technology Head</h4>
                            <h5>Computer Society of India (CSI) Students' Chapter and Information Technology Students' Association (ITSA)</h5>
                            <p>Students from different educational institutes gather across and share their ideas and thought though CSI platform. Managing and allocating all the tech resources across the community and make sure that everyone being happy!</p>
                        </div> 
                        <!-- end item -->
                        <div class="item">
                            <h4><span>Dec 2010</span>GeekFaktory</h4>
                            <h5>K.J.Somaiya Students' Council</h5>
                            <p>To spread knowledge and awareness about latest technologies and researches among the students and finding talent among them.</p>
                        </div>
                        <!-- end item -->
                        <div class="item">
                            <h4><span>Dec 2010</span>Technozine</h4>
                            <h5>K.J.Somaiya Students' Council</h5>
                            <p>A Monthly newsletter/tabloid from the students by the students; consiting of tech news and aims to spread technology awareness amongs the students at free of cost.</p>
                        </div>
                        <!-- end item -->
                        <div class="item">
                            <h4><span>Sep 2009</span>Winner of Technical Paper Presentation</h4>
                            <h5>RenaissancE 2009</h5>
                            <p>Presented a Technical Paper on &quot;<strong>Cloud Computing</strong>&quot; which included stuff like SaaS, PaaS, Scalability.</p>
                        </div> 
                        <!-- end item -->
                    </div>
                    <!-- END EDUCATION -->
                </div>
                <div class="separator"></div>
                <!-- BEGIN MISC -->
                <div id="miscellaneous">
                        <h2>Miscellaneous</h2>
                        <div class="left_item">
                            <div class="item">
                                <h4><strong>Nationality</strong></h4>
                                <h5>Indian</h5>
                            </div> 
                            <!-- end item -->
                            <div class="item">
                                <h4><strong>Political View</strong></h4>
                                <h5>Conservative Libertarian</h5>
                            </div> 
                            <!-- end item -->
                        </div>
                        <div class="right_item">
                            <div class="item">
                                <h4><strong>Likes</strong></h4>
                                <h5>Reading, Traveling, Food, Movies</h5>
                            </div> 
                            <!-- end item -->
                        </div>
                        <div class="right_item">
                            <div class="item">
                                <h4><strong>Interests</strong></h4>
                                <h5>Hindu Mythology, Archeology, Sci-Fi, Start-ups, Tech BarCamps</h5>
                            </div> 
                            <!-- end item -->
                        </div>
                        <div class="right_item">
                            <div class="item">
                                <h4><strong>Languages known</strong></h4>
                                <h5>English, Hindi, Gujarati, Marathi.</h5>
                            </div> 
                        </div>
                    </div>
                    <!-- END MISC -->
                <div class="separator"></div>
                <!-- BEGIN SKILLS -->
                <div id="objectives">
                    <h2>Objectives</h2>
                    <div class="left_content">
                        <div class="item">
                            <h4>Initiative</h4>
                            <p>During past five years as website developer/programmer I had taken responsibility for a number of projects where I had to work independently to fulfill key areas of the client brief. My interests always involve taking an active role in "making things happen". I formed a technical knowledge sharing group called as Geek Factory at my college during my second year in which I was the lead speaker and task assigner, and this group continues to meet at weekends till date.</p>
                        </div>
                        <div class="item">
                            <h4>Organization</h4>
                            <p>The key to my role as a Technical Head at college was the ability to organize a series of technical seminars and workshops, from industry leaders-coordinating the bookings and liaising with the students to increase the knowledge of my fellow students. While developing and working on certain large projects I came across the various Development Teams and it was my please to accomplish the given objectives on schedule. During past months in Sutra; I have learnt many things related to HR Process and Concept based selling which might be helpful in future. No matter what aspect of the job I was working on, I was constantly aware of the fact that there was a limited time in which to complete the day's tasks. Throughout my studies I have also been able to allocate a certain amount of time to leisure activities and work without allowing my studies to suffer.</p>
                        </div>

                    </div>
                    <div class="right_content">
                        <div class="item">
                            <h4>Commitment</h4>
                            <p>I needed considerable motivation and commitment in order to maximize the benefits of my engineering academic years. I want to increase my work experience in the service sector without incurring debt before I will get my degree! After an exhaustive search I found that web programming is very fulfilling job..</p>
                        </div>
                        <div class="item">
                            <h4>Communication</h4>
                            <p>I have always achieved good grades in my written and oral work at College and School. I have given a number of presentations in tutorials. My experience at CSI and GeekFaktory has given me the skills and confidence to deal effectively with the general public, people working under me as well as colleagues.</p>
                        </div>
                        <div class="item">
                            <h4>Team-working</h4>
                            <p>In various groups at college I was able to bring together a wide range of opinions to ensure that we worked efficiently and achieved successful results. My work experience has also allowed me to work with a wide range of people. In addition, I am a member of the CSI and IEEE. I particularly enjoy the social interaction and benefits of these technical extravaganzas. One thing which I have learnt from all these years is Key to success is Team Work and Scheduled tasks.<br />
                                While working at Sutra I have learnt how to handle big tasks and fulfill the requirements with a team of merely two.</p>
                        </div>
                    </div>
                </div>
                <!-- END SKILLS -->
            </div>
            <!-- MAIN CONTENT -->

            <div class="separator"></div>

            <!-- END CONTAINER -->
        </div>

        <?php /*
          <div id="bottom_container">
          <div id="contact_form">
          <h2><a name="contact">Contact me</a></h2>
          <!-- BEGIN CONTACT FORM -->
          <form name="contactme" id="contactme" action="#" method="post">
          <table width="500" cellpadding="0" cellspacing="0" border="0">
          <tr>
          <td width="230" height="40">
          <label for="name">Name: <span>*</span></label>
          <input type="text" id="name" name="name" class="text_field req-string" tabindex="1"/>
          </td>
          <td rowspan="2">
          <label for="phone" style="width:75px; margin-bottom: 5px;">Message: <span>*</span></label>
          <textarea name="message" id="message" rows="5" cols="10" tabindex="4"></textarea>
          </td>
          </tr>
          <tr>
          <td  height="40">
          <label for="phone">Phone: <span>*</span></label>
          <input type="text" id="phone" name="phone" class="text_field req-string" tabindex="2" />
          </td>
          </tr>
          <tr>
          <td height="40">
          <label for="email">Email: <span>*</span></label>
          <input type="text" id="email" name="email" class="text_field req-email"  tabindex="3"/>
          </td>
          <td><div id="errorDiv1" class="error-div"></div>
          <input type="submit" id="submit" name="submit" value="Send message!" tabindex="5"/>
          </td>
          </tr>
          </table>
          </form><!-- end contact form -->
          </div><!-- end contact -->
          </div>
         */ ?>
    </body>
</html>
