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

                <h1>Client Service Executive</h1>
                <p>Signatures1 seeks a proactive and detail-oriented Client Service Executive to join our dynamic team. The ideal candidate will be responsible for managing client relationships, ensuring project delivery, and supporting our creative team in delivering top-notch branding, designing, and printing solutions. </p>

                <p><strong>Exp: </strong>0 - 2 years</p>
                <p><strong>Location: </strong>Coimbatore</p>


                <h2>Roles and Responsibilities:
                </h2>
                <ul class="redarrow-list">

                    <li> Client Relationship Management: Act as the primary point of contact for clients, understanding their needs and ensuring satisfaction. </li>
                    <li> Project Coordination: Liaise between clients and internal teams to ensure timely and quality delivery of projects. </li>
                    <li> Support Services: assist clients in printing, packaging, and design-related matters, providing expert advice and solutions.</li>
                    <li> Marketing Campaigns: Assist in planning, executing, and monitoring marketing campaigns. </li>
                    <li>Feedback and Reporting: Gather client feedback and prepare detailed reports on project status and performance.</li>
                    <li> Problem Resolution: Address and resolve any client issues or concerns promptly and efficiently.</li>
                </ul>



                <h2>Requirements:</h2>
                <ul class="redarrow-list">

                    <li> Educational Background: Bachelor's degree in Marketing, Business Administration, Design, or a related field.</li>
                    <li> Experience: 0-2 years of experience in client service, project management, or a related role.</li>
                    <li> Industry Knowledge: Strong understanding of printing, packaging, and design processes. </li>
                    <li> Communication Skills: Excellent verbal and written communication skills. </li>
                    <li>Organizational Skills: Ability to manage multiple projects and deadlines simultaneously. </li>
                    <li>Technical Proficiency: Proficient in MS Office Suite and CRM software.</li>
                    <li>Team Collaboration: Ability to work effectively in a team environment and contribute to collective goals.</li>

                </ul>



                <h2>About Signatures1</h2>
                <blockquote>“PASSION is our Signature”</blockquote>
                <p>We are a bunch of creative mavericks, we do strategy, conceive ideas &amp; concepts,
                    design almost anything and are digital thorough-breds. Our solutions are a
                    unique blend of hard-core data, digital integration and absolutely crazy
                    imagination. </p>
                <p>Our die hard urge to excel, drives us to evolve strategies that are synergized to
                    ensure your success. Our offerings range from data driven strategies,
                    personalized brand identities, visually impacting marketing collaterals, printing
                    solutions to everything digital. </p>



                <div class="formPreloader1" style="display: none;">
                    <div class="spinner"></div>
                </div>

            </div>

        </section>



        <section class="applicatopm-join">

            <div class="custom-container paddings">

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
                    <img src="../images/tick.svg" alt="Success icon" width="40px" height="40px">
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