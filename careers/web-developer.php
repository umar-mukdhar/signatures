<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signatures1</title>
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.14/dist/lenis.css">
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" id="themeSwitch" href="/css/color-switch1.css">
    <link rel="stylesheet" href="/css/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark-reasonable.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
</head>

<body id="body-bg">

    <?php
    include '../includes/header.php'
    ?>


    <main class="background" id="butter">

        <section class="career-details">
            <div class="custom-container paddings">

                <h1>Full Stack Web Developer</h1>
                <p>Signatures1 Designs & Communications, a top-tier Branding & Digital Agency from Coimbatore, is looking for an experienced Full-Stack Web Developers with a proven track record of delivering projects using JavaScript, HTML and CSS (Exposure to PHP, Java, Laravel, Codeignitor, Angular, React, Database and Cloud Technologies will be an advantage) .</p>

                <p><strong>Exp: </strong>2 years<br>
                    <strong>Location: </strong>Coimbatore
                </p>



                <h2>Roles and Responsibilities:
                </h2>
                <ul class="redarrow-list">

                    <li>Design, develop, and maintain robust, scalable, and secure web applications using the PHP or Javascript.</li>
                    <li>Write clean, well-documented, and efficient code.</li>
                    <li>Collaborate with cross-functional teams to define, design, and ship new features.</li>
                    <li>Optimize applications for maximum speed and scalability.</li>
                    <li>Troubleshoot, test, and maintain the core product software to ensure strong optimization and functionality.</li>
                    <li>Implement AJAX calls and handle asynchronous request handling and partial page updates.</li>
                    <li>Manage version control using Git, ensuring smooth collaboration and code integration.</li>
                    <li>Develop and maintain technical documentation related to code, application architecture, and user guides.</li>
                    <li>Participate in code reviews to ensure high-quality code and adherence to coding standards.</li>
                    <li>Deploy applications to production and manage deployment processes.</li>
                    <li>Stay up-to-date with the latest industry trends and technologies to ensure the application remains current and competitive.</li>
                </ul>



                <h2>Requirements and Qualifications:</h2>
                <ul class="redarrow-list">

                    <li>Bachelor's degree in Computer Science, Information Technology, or related field.</li>
                    <li>Minimum of 2+ years of development experience using the PHP or Javascript.</li>
                    <li>Strong proficiency in PHP core programming language.</li>
                    <li>Expertise in MVC architecture.</li>
                    <li>Proficient in front-end technologies such as HTML5, CSS3, JavaScript, jQuery, and Bootstrap.</li>
                    <li>Experience with database systems like MySQL or PostgreSQL.</li>
                    <li>Familiarity with version control systems, especially Git.</li>
                    <li>Good understanding of asynchronous request handling, partial page updates, and AJAX.</li>
                    <li>Experience in developing large applications like CRM, CMS, SaaS applications.</li>
                    <li>Strong understanding of Object-Oriented Programming (OOP) concepts.</li>
                    <li>Excellent problem-solving skills and attention to detail.</li>
                    <li>Ability to work independently as well as in a team environment.</li>
                    <li>Strong communication skills and ability to document technical processes.</li>
                </ul>

                <h2>About Signatures1</h2>
                <blockquote>“PASSION is our Signature”</blockquote>
                <p>We are a bunch of creative mavericks, we do strategy, conceive ideas & concepts, design almost anything and are digital thorough-breds. Our solutions are a unique blend of hard-core data, digital integration and absolutely crazy imagination. </p>
                <p>Our die hard urge to excel, drives us to evolve strategies that are synergized to ensure your success. Our offerings range from data driven strategies, personalized brand identities, visually impacting marketing collaterals, printing solutions to everything digital. </p>



            </div>

        </section>



        <section class="applicatopm-join">

            <div class="custom-container paddings ">

                <h2 class="job">Job Application Form</h2>


                <form method="POST" id="applyForm" name="applyForm" enctype="multipart/form-data" class="apply">

                    <div class="apply-form">
                        <input type="text" name="inputName" id="inputName" placeholder="Your Name">
                        <div id="alert_name" class="errorMsg"></div>
                    </div>
                    <div class="apply-form">
                        <input type="email" name="inputEmail4" id="inputEmail4" placeholder="Your Mail">
                        <div id="alert_email" class="errorMsg"></div>
                    </div>
                    <div class="apply-form">
                        <input type="text" name="careerphone" maxlength="10" id="careerphone" placeholder="Your Contact No." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        <div id="alert_phone" class="errorMsg"></div>
                    </div>
                    <div class="apply-form">
                        <input type="text" name="experience" id="experience" placeholder="Experience">
                        <div id="alert_experience" class="errorMsg"></div>
                    </div>
                    <div class="apply-form">
                        <input type="text" name="precompany" id="precompany" placeholder="Previous Company">
                        <div id="alert_precompany" class="errorMsg"></div>
                    </div>
                    <div class="apply-form">
                        <input type="text" name="expsalary" id="expsalary" placeholder="Expected Salary">
                        <div id="alert_expsalary" class="errorMsg"></div>
                    </div>
                    <div class="apply-form">
                        <input type="text" name="located" id="located" placeholder="Currently Located at">
                        <div id="alert_located" class="errorMsg"></div>
                    </div>
                    <div class="apply-form">
                        <textarea name="interestedin" id="interestedin" rows="3" placeholder="Which position(s) are you interested in?"></textarea>
                        <div id="alert_interestedin" class="errorMsg"></div>
                    </div>
                    <div class="apply-form">
                        <input type="file" name="upload_resume" id="upload_resume" accept=".pdf,.doc,.docx" />
                        <div id="alert_upload_resume" class="errorMsg"></div>
                    </div>
                    <input type="hidden" name="type" id="type" value="career">
                    <div id="response_message2"></div>
                    <div class="g-recaptcha" data-sitekey="6Lf9x88nAAAAAMN81mEDubDtVe4CTyFq-v0UQfc1" data-theme="dark" style="margin-top:18px;"></div>
                    <div>
                        <input name="formSubmit" type="button" value="Submit" onclick="return regFormValidates();">
                    </div>




                </form>
                <div class="response_message_div">
                    <img src="/images/tick.svg" alt="Success icon" width="40px" height="40px">
                    <p class="response_message_p"></p>
                </div>
                <div id="error_message"></div>

            </div>

        </section>


    </main>



    <?php include_once "../includes/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="/js/matter.js"></script>
    <script src="/js/app.js"></script>
    <!--<script src="js/butter.js">-->

    <!--</script>-->
    <!--<script>-->
    <!--butter.init({-->
    <!--    cancelOnTouch: true-->
    <!--});-->
    <!--</script>-->

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>

    <script>
        const lenis = new Lenis()

        lenis.on('scroll', (e) => {
            console.log(e)
        })

        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }

        requestAnimationFrame(raf)
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>