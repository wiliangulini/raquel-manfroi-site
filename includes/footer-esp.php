<footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p class="h3">Acesso Rápido</p>
                            <a href="index.php">Home</a>
                            <a href="index-sobre.php">Sobre</a>
                            <a href="convenio.php">Convênios</a>
                        </div>
                    </div>
                    <div class="col-sm-3 d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p class="h3">Endereço</p>
                            <a href="index.php">R. Ibiporã, nº 215 – Centro</a>
                            <a href="index-sobre.php">Pato Branco – PR</a>
                            <a href="convenio.php">85501-056</a>
                            <a href="https://www.google.com/maps/place/R.+Ibipor%C3%A3,+215+-+Centro,+Pato+Branco+-+PR,+85501-056/@-26.2269283,-52.6776429,17z/data=!3m1!4b1!4m5!3m4!1s0x94e552ef2fee02bd:0xfe5d6e3124f88eaa!8m2!3d-26.2269283!4d-52.6754542?shorturl=1">(Ver mapa)</a>
                        </div>
                    </div>
                    <div class="col-sm-3 d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p class="h3">Telefone/Email</p>
                            <a href="tel:554626040066"><p class="number">(46) 2604-0066</p></a>
                            <a class="btn-whats" href="http://wpp-redirect.herokuapp.com/go/?p=5546991070066&amp;m=Ol%c3%a1!">(46) 99107-0066 (Whats)</a>
                            <a href="mailto:clinica@raquelmanfroi.com.br"><p>clinica@raquelmanfroi.com.br</p></a>
                        </div>
                    </div>
                    <div class="col-sm-3 d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p class="salmo">"A vitória nasce da resistência"</p>
                            <p>Salmo 129</p>
                            <div class="social">
                                <a href="https://www.facebook.com/clinica.raquel.manfroi/">
                                    <picture>
                                        <source type="image/webp" src="img/facebook.webp" />
                                        <source type="image/png" src="img/facebook.png" />
                                        <img src="img/facebook.png" />
                                    </picture>
                                </a>
                                <a href="https://www.instagram.com/clinicaraquelmanfroi/">
                                    <picture>
                                        <source type="image/webp" src="img/instagram.webp" />
                                        <source type="image/png" src="img/instagram.png" />
                                        <img src="img/instagram.png" />
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/jquery3.5.1.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script async src="fontawesome/js/all.js"></script>
        <script>        
            $(document).scroll(function() {
            if($(document).scrollTop() > 0) {
                $("#arrowPulseUp").css("display","flex");
            } else if($(document).scrollTop() == 0) {
                $("#arrowPulseUp").css("display","none");
            }
            });
        </script>
    </body>
</html>