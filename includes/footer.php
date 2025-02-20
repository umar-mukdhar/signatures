<style>
    canvas {
        width: 850px !important;
        height: 850px !important;
    }

    @media(max-width:1750px) {
        canvas {
            width: 700px !important;
            height: 700px !important;
        }
    }

    @media (max-width: 1350px) {
        canvas {
            width: 600px !important;
            height: 600px !important;
        }
    }

    @media(max-width:1024px) {
        canvas {
            width: 600px !important;
            height: 600px !important;
        }
    }

    @media (max-width: 1150px) {
        canvas {
            width: 500px !important;
            height: 500px !important;
        }

        @media (max-width: 1024px) {
            canvas {
                width: 400px !important;
                height: 400px !important;
            }
        }

        @media (max-width: 900px) {
            .media-round {
                display: flex;
                justify-content: center;
                margin-bottom: 3rem;
            }

            #container-social {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
    }
</style>

<footer class="footer" id="footer" data-scroll-section>
    <div class="custom-container">
        <div class="footer-flex">
            <div class="footer-col1">
                <div class="media-round">
                    <div id="container-social"></div>
                </div>
            </div>

            <div class="footer-col2">
                <h2>Let's inspire the world into the future</h2>

                <form id="footerform-flex" name="footerform-flex" class="footerform-flex" method="POST">
                    <div class="footerformleft">
                        <div class="footerformfield">
                            <label for="">Name</label>
                            <input type="text" id="name" name="name">
                            <p id="nameErr"></p>
                        </div>
                        <div class="footerformfield">
                            <label for="">Phone</label>
                            <input type="tel" id="phone" name="phone">
                            <p id="phoneErr"></p>
                        </div>
                        <div class="footerformfield">
                            <label for="">Email</label>
                            <input type="text" class="email" id="email" name="email">
                            <p id="emailErr"></p>
                        </div>
                    </div>
                    <div class="footersendbtn">
                        <div class="footersubmit-flex">
                            <p>S</p>
                            <p>U</p>
                            <p>B</p>
                            <p>M</p>
                            <p>I</p>
                            <p>T</p>
                        </div>

                        <a href="">
                            <svg width="45" height="45" viewBox="0 0 166 166" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="hover-svg">
                                <path
                                    d="M83 166C128.84 166 166 128.84 166 83C166 37.1604 128.84 0 83 0C37.1604 0 0 37.1604 0 83C0 128.84 37.1604 166 83 166Z"
                                    fill="red" />
                                <path
                                    d="M95.2574 80.1518L69.4325 69.0841L53.4456 80.152L76.8111 88.7602L14.0936 131.802L28.8506 146.559L107.555 92.4493L95.2574 80.1518Z"
                                    fill="white" />
                            </svg>
                        </a>

                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="footer-col3">
        <h2 id="footer-h2">Let's inspire the world into the future</h2>
        <div id="footline" class="footline"></div>
        <div class="footer-logo1">
            <img src="images/home/black-wheel.png" alt="">
        </div>
    </div>

    <div class="mask" id="mask">
        <div class="mask-inner" id="mask-inner">Say <br />Hello!</div>
    </div>
    <section class="copy-right">
        <div class="custom-container">
            <div>
                <p>@2024 Signatures1 | Sitemap</p>
            </div>
        </div>
    </section>
</footer>

<!-- <script>
    const SayHello = document.getElementById('mask-inner');
    SayHello.addEventListener('mouseenter', ()=> {
       
    })
</script> -->
<script src="https://cdn.jsdelivr.net/npm/matter-js@0.14.2/build/matter.js"></script>
<script src="https://cdn.jsdelivr.net/npm/two.js@v0.7.0-stable.1/build/two.js"></script>
<script src="js/matter.js"></script>
<script src="js/app.js"></script>