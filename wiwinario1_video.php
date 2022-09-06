<?php
// include("../conexion.php");
// session_start();
// include("../rastreador.php");

##aqui enviamos la impresion
// $macu=$_COOKIE['wiwi_mac'];
// $called=$_COOKIE['wiwi_node'];
// $wiwichallenge=$_COOKIE['wiwi_challenge'];


// include('../ptrack.php');
// $cliente='14';
// $campana = '34';
// $pantalla="$campana"."_1";
// $funel='1';

// impresion_track('FORMULARIO', 'IMPRESION', 'formulario_wiwinario1', $cliente, $campana, $pantalla, $funel, $macu, $called,$wiwichallenge);

##terminamos la impresion

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wiwi - Internet para todo México</title>
    <link rel="stylesheet" href="css/base.css">
    <style>
        /*CUSTOM STYLES*/
        /* .main.master .section-header .header {
            /* background: #31a5ff;
        } */

    </style>
    <script src="https://wiwi.cloudmarketingmx.com/wifi/os_tracker.js"></script>
    <script src="https://wiwi.cloudmarketingmx.com/wifi/track_event.js"></script>
    <script>
        //OS TRACKER
        sendData('<?php echo $_SESSION['macu']?>');

        //GENERAL VARS
        var cliente = '14'
        var campana = '34'
        var pantalla = campana+'_'+'1'
    </script>
</head>

<body class="">

    <form class="main master no-extra" action="../rawlead.php" method="POST" id="form">

        <section class="section-header client">
            <section class="header">
                <span id="title">Internet Gratis</span>
                <span class="logo full-white-horizontal"></span>
            </section>
            <section class="subheader">
                <span class="client-logo">
                    <img src="imgs/logo-text.svg">
                </span>
                <div class="">
                    <span class="client-name" >wiwi</span>
                    <span class="client-hashtag">#cuestionario</span>
                </div>
            </section><!-- .subheader -->
            <div class='count-question'>
                <p>Pregunta <span class='qidx'>1</span> de <span class='qLength'>5</span></p>
            </div>
        </section><!-- .section header -->

        <section class="section-middle">
            <div class="screen">
                <span class="screen-wrap scroll">
                    <div class="landing-form cuestionario" id="formulario">

                        <h2>Primer acercamiento</h2>

                        <input type="hidden" name="camp_id" id="camp_id" value="34">
                        <input type="hidden" name="client_id" id="client_id" value="14">

                        <input type="hidden" name="categoria" id="categoria" value="CONVERSION">
                        <input type="hidden" name="tipo" id="tipo" value="EVENTO">

                        <input type="hidden" name="elemento" id="elemento" value="boton_panta">
                        <input type="hidden" name="pantalla" id="pantalla" value="34_1">
                        <input type="hidden" name="funel" id="funel" value="1">

                        <input type="hidden" name="macuser" id="macuser" value="<?php echo $_SESSION['macu']?>">
                        <input type="hidden" name="nodeuser" id="nodeuser" value="<?php echo $_SESSION['called']?>">
                        <input type="hidden" name="wiwichallenge" id="wiwichallenge" value="<?php echo $_SESSION['wiwichallenge']?>">


                        <input type="hidden" name="elemento_conceder" id="elemento_conceder" value="NA">
                        <input type="hidden" name="pantalla_conceder" id="pantalla_conceder" value="34_2">
                        <input type="hidden" name="funel_conceder" id="funel_conceder" value="2">



                        <div class="row" id='q1'>
                            <div class="full">
                                <label>¿Cuántos años tienes?</label>
                                <div class="group rows center">
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="-18" class="radio-element q1" required="">
                                        <label class="sub">-18</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="18+" class="radio-element q1" required="">
                                        <label class="sub">18+</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="25+" class="radio-element q1" required="">
                                        <label class="sub">25+</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="35+" class="radio-element q1" required="">
                                        <label class="sub">35+</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="45+" class="radio-element q1" required="">
                                        <label class="sub">45+</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="55+" class="radio-element q1" required="">
                                        <label class="sub">55+</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="65+" class="radio-element q1" required="">
                                        <label class="sub">65+</label>
                                    </div>

                                </div><!-- .group  -->
                            </div><!-- .full -->
                        </div><!-- .row -->
                        <div class="row off" id='q2'>

                            <div class="full">
                                <label>¿Con qué frecuencia utilizas el autobús?</label>
                                <div class="group columns center">
                                    <div class="radio small">
                                        <input type="radio" name="p2" value="1-2" class="radio-element q2" required="">
                                        <label class="sub">1-2 veces a la semana</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p2" value="3-4" class="radio-element q2" required="">
                                        <label class="sub">3-4 veces a la semana</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p2" value="5+" class="radio-element q2" required="">
                                        <label class="sub">5 o más veces a la semana</label>
                                    </div>

                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row off" id='q3'>
                            <div class="full">
                                <label>¿Tienes hijos?</label>
                                <div class="group rows center has-conditional" >
                                    <div class="radio small">
                                        <input type="radio" name="p3" value="si" class="radio-element conditional-value q3" data-child="1" required="">
                                        <label class="sub">Sí</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p3" value="no" class="radio-element q3" required="">
                                        <label class="sub">No</label>
                                    </div>
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row off" id='q4' data-parent="1">
                            <div class="full">
                                <label>¿Cuántos hijos tienes?</label>
                                <div class="group rows center has-parent" >
                                    <div class="radio small">
                                        <input type="radio" name="p4" value="1" class="radio-element q4" >
                                        <label class="sub">1</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p4" value="2" class="radio-element q4" >
                                        <label class="sub">2</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p4" value="3" class="radio-element q4" >
                                        <label class="sub">3</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p4" value="4" class="radio-element q4" >
                                        <label class="sub">4</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p4" value="5" class="radio-element q4" >
                                        <label class="sub">5</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p4" value="6+" class="radio-element q4" >
                                        <label class="sub">6+</label>
                                    </div>
                                    <!-- <div class="radio small">
                                        <input type="radio" name="p4" value="no" class="radio-element has-other" >
                                        <label class="sub">Otros</label>
                                    </div>
                                    <div class="other">
                                        <input type="tel" pattern="[6-9]|1[0]" maxlength="2" name="p8" value="" class="radio-element" placeholder="#" oninput="this.value=this.value.replace(/[\D]/,'');">
                                    </div> -->
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row off" id='q5'>

                            <div class="full">
                                <label>¿Te sabes tu número de celular de memoria?</label>
                                <div class="group rows center">
                                    <div class="radio small">
                                        <input type="radio" name="p5" value="si" class="radio-element q5" required="">
                                        <label class="sub">Sí</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p5" value="no" class="radio-element q5" required="">
                                        <label class="sub">No</label>
                                    </div>
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row off" id='q6'>

                            <div class="full">
                                <label>¿Con que frecuencia utilizas tu celular?</label>
                                <div class="group columns center">
                                    <div class="radio small">
                                        <input type="radio" name="p6" value="2-3" class="radio-element q6" required="">
                                        <label class="sub">2-3 horas diarias</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p6" value="5-6" class="radio-element q6" required="">
                                        <label class="sub">5-6 horas diarias</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p6" value="8" class="radio-element q6" required="">
                                        <label class="sub">8 horas diarias</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p6" value="9+" class="radio-element q6" required="">
                                        <label class="sub">9+</label>
                                    </div>
                                    <!-- <div class="radio small">
                                        <input type="radio" name="p7" value="no" class="radio-element has-other" required="">
                                        <label class="sub">Otros</label>
                                    </div>
                                    <div class="other">
                                        <input type="tel" pattern="[9]|1[8-9]|2[0-4]" maxlength="2" name="p8" value="" placeholder="#" class="radio-element" oninput="this.value=this.value.replace(/[\D]/,'');">
                                    </div> -->

                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div></div>

                        <!-- <div class="row">
                            <input id="rent_form_button" value="Enviar Solicitud" type="submit" style="padding: 20px 15px; margin-bottom: 40px;">
                        </div>.row -->


                    </div><!-- .landing-body -->
                </span><!-- .screen-wrap -->
            </div><!-- .screen -->
        </section><!-- .section-middle -->

        <section class="section-footer">
            <input type="submit" class="big-fat-button" value="Click Aquí para Continuar"/><!-- .big-fat-button -->
        </section><!-- section-footer -->

    </form><!-- .main -->

    <script type="text/javascript">

        // GET REAL VIEWPORT HEIGHT - factoring in chrome/safari's header and footer bars
        var vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
        document.querySelector("body").style.minHeight = vh + "px";
        document.querySelector("body").style.maxHeight = vh + "px";
        document.querySelector(".main").style.minHeight = vh + "px";
        document.querySelector(".main").style.maxHeight = vh + "px";

        function ready(fn) {
            if (document.readyState != 'loading') {
                fn();
            } else {
                document.addEventListener('DOMContentLoaded', fn);
            }
        }
        ready(function () {

            //GENERALS
            var form = document.getElementById('form');
            var button = document.querySelector(".big-fat-button");


            //EVENT LISTENER FOR OTHERS
            var radio_groups = document.querySelectorAll(".group")
            //console.log(elements_with_other_option)
            radio_groups.forEach(function(element) {
                var radios = element.querySelectorAll('input[type=radio')
                var has_other = element.querySelector(".has-other")
                var has_conditional = element.querySelector(".has-conditional")
                //console.log(element.classList)

                if(element.classList.contains('has-conditional')) {
                    //console.log(element)
                    var parent_element = element
                    var key_radio = parent_element.querySelector('.conditional-value')
                    var child_id = key_radio.dataset.child
                    var child_element = document.querySelector('[data-parent="'+child_id+'"]')

                    var conditional_radios = parent_element.querySelectorAll('input[type=radio')
                    conditional_radios.forEach(function(element3) {
                        //console.log(element3)
                        element3.addEventListener('click',function(event) {

                            //console.log(element3)
                            if (key_radio.checked) {
                                //console.log('checked')
                                parent_element.classList.add('on')
                                child_element.classList.add('on')
                                var children = child_element.querySelectorAll('input[type=radio')
                                children.forEach(function(element4) {
                                    element4.setAttribute('required','required')
                                })
                            } else {
                                //console.log('unchecked')
                                parent_element.classList.remove('on')
                                child_element.classList.remove('on')
                                var children = child_element.querySelectorAll('input[type=radio')
                                children.forEach(function(element4) {
                                    element4.removeAttribute('required')
                                })
                            }
                        })
                    })


                }


                radios.forEach(function(element2) {



                    if(has_other == null) {} else {
                        element2.addEventListener('click',function(event) {
                            console.log(this)
                            if (this == has_other && has_other.checked) {
                                //console.log(this+' is checked')
                                element.querySelector('.other').classList.add('on')
                                element.querySelector('.other input').setAttribute('required', 'required')
                            } else {
                                //console.log(this+' is NOT checked')
                                element.querySelector('.other').classList.remove('on')
                                element.querySelector('.other input').removeAttribute('required')
                            }
                        })
                    }

                })
            })

            //SUBMIT FORM
            button.addEventListener('click',function(event) {
                event.preventDefault();

                //alert(Form.checkValidity())
                if (form.checkValidity() != false && !button.hasAttribute('disabled')) {
                    button.classList.add("loading");
                    button.value = "Cargando... ";
                    button.setAttribute('disabled','disabled')
                    form.submit()

                } else {
                    form.reportValidity()
                }
            })

            let textQIdx = document.querySelector(`.qidx`);

            // q = question
            function handleQuestion(index, idx) {

                let qIndex = index;
                let qIdx = idx;

                let qActive = document.querySelectorAll(`.q${qIndex}`);

                qActive.forEach(q => {
                    q.addEventListener('change', e => {
                        setTimeout(() => {

                            if (qIndex == 6) {
                                sendForm();
                                return
                            }

                            document.querySelector(`#q${qIndex}`).classList.add('off');
                            if (qIndex == 3) {
                                let { value } = e.target;

                                if (value == 'si') {
                                    --qIdx;
                                } else {
                                    qIndex++;
                                }
                            }
                            document.querySelector(`#q${++qIndex}`).classList.remove('off');

                            textQIdx.textContent = ++qIdx;
                            handleQuestion(qIndex, qIdx);

                        }, 500);
                    });
                });
            }

            function sendForm() {
                button.classList.add("loading");
                button.value = "Cargando... ";
                setTimeout(() => {
                    button.click();
                }, 2000);
            }

            handleQuestion(1, 1);
        });

    </script>

</body>

</html>