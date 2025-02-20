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
            
                <h1>Content Writer</h1>
                <p>Signatures1 Designs &amp; Communications a top-tier Branding &amp; Digital Agency from
                    Coimbatore is looking for a Maverick Content Writer, who will be responsible for
                    creating content for a diverse set of channels which include ad copies, brochures,
                    websites, blogs, social media copy, emails etc </p>

                <p><strong>Exp: </strong>1 - 3 years</p>
                <p><strong>Location: </strong>Coimbatore</p>


                <h2>Roles and Responsibilities:
                </h2>
                <ul class="redarrow-list">

                    <li> Responsible for collaborating with the Business Team, Design team and
                        Digital team to evaluate client’s requirements and transform them into
                        creative concepts.</li>
                    <li> Be an integral part of all creative briefs and ideation sessions and develop
                        creative and actionable initiatives
                    </li>
                    <li> Collaborate with customers to get the content reviewed and approved</li>
                    <li> Evolve creative and compelling narratives for digital media, video, mobile
                        and audio platforms.
                         </li>
                        <li> Ensure that created content is aligned to the brand and business objectives</li>
                        <li> Create and maintain a comprehensive repository of creative content. Create
                            presentations for creative reviews. 
                        </li>
                </ul>



                <h2>Requirements:</h2>
                <ul class="redarrow-list">

                    <li> Bachelor’s or Master’s degree in Communication or Journalism with one to
                        three years’ experience as a Content Writer or a relevant role in a reputed
                        creative or digital agency.</li>
                    <li> Solid experience in creating integrated content across all marketing channels
                        from print, digital and social media</li>
                    <li> Writer par excellence, should be to write flawlessly and be able to present
                        ideas effectively and efficiently
                        </li>
                    <li>  Innate ability to research and understand client requirements, target market
                        and develop ideas and approaches to address the needs. </li>
                    <li>Exceptional multi-tasking capabilities and ability to excel in deadline driven,
                        fast-paced, and often ambiguous environments.
                        </li>
                   
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