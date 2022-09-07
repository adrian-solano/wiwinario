<?php
// include("../conexion.php");
// session_start();
// include("../rastreador.php");

// ##aqui enviamos la impresion
// $macu=$_COOKIE['wiwi_mac'];
// $called=$_COOKIE['wiwi_node'];
// $wiwichallenge=$_COOKIE['wiwi_challenge'];


// include('../ptrack.php');
// $cliente='14';
// $campana = '34';
// $pantalla="$campana"."_1";
// $funel='1';

// impresion_track('FORMULARIO', 'IMPRESION', 'formulario_wiwinario2', $cliente, $campana, $pantalla, $funel, $macu, $called,$wiwichallenge);

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
                <div class="client-info">
                    <span class="client-name" >wiwi</span>
                    <span class="client-hashtag">#cuestionario</span>
                </div>
            </section><!-- .subheader -->
        </section><!-- .section header -->

        <section class="section-middle" style='height: 100%;'>
            <div class="screen">
                <span class="screen-wrap scroll">
                    <div class="landing-form cuestionario" id="formulario">

                        <div>
                            <h2>Ayúdanos contestando las siguientes preguntas</h2>
                            <div class='count-question'>
                                <p>Pregunta <span class='qidx'></span> de <span class='qLength'></span></p>
                            </div>
                        </div>

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



                        <div class="row">
                            <div class="full">
                                <label>¿Qué haces cuando no sabes que ruta tomar? </label>
                                <div class="group columns">
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="Preguntar a una persona" class="radio-element" required="">
                                        <label class="sub">Preguntar a una persona</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="Preguntarle al conductor" class="radio-element" required="">
                                        <label class="sub">Preguntarle al conductor</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="Buscar en google maps" class="radio-element" required="">
                                        <label class="sub">Buscar en google maps</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="Otros:" class="radio-element" required="">
                                        <label class="sub">Otros</label>
                                    </div>

                                </div><!-- .group  -->
                            </div><!-- .full -->
                        </div><!-- .row -->
                        <div class="row">

                            <div class="full">
                                <label>¿Le avisas a alguien que vas en camino?</label>
                                <div class="group rows center">
                                    <div class="radio small">
                                        <input type="radio" name="p2" value="Si" class="radio-element" data-child="1" required="">
                                        <label class="sub">Si</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p2" value="No" class="radio-element" required="">
                                        <label class="sub">No</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p2" value="Tal vez" class="radio-element" required="">
                                        <label class="sub">Tal vez</label>
                                    </div>

                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row" data-parent="1">
                            <div class="full">
                                <label>¿A quién le avisas?</label>
                                <div class="group columns">
                                    <div class="radio small">
                                        <input type="radio" name="p3" value="Pareja" class="radio-element" required="">
                                        <label class="sub">Pareja</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p3" value="Padres" class="radio-element" required="">
                                        <label class="sub">Padres</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p3" value="Jefe o colega de trabajo" class="radio-element" required="">
                                        <label class="sub">Jefe o colega de trabajo</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p3" value="Hij@s" class="radio-element" required="">
                                        <label class="sub">Hij@s</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p3" value="Otros" class="radio-element" required="">
                                        <label class="sub">Otros</label>
                                    </div>
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row">
                            <div class="full">
                                <label>¿Ubicas fácilmente el autobús que tomarás?</label>
                                <div class="group rows center" >
                                    <div class="radio small">
                                        <input type="radio" name="p4" value="Sí" class="radio-element" >
                                        <label class="sub">Sí</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p4" value="No" class="radio-element" >
                                        <label class="sub">No</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p4" value="A veces" class="radio-element" >
                                        <label class="sub">A veces</label>
                                    </div>
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row">

                            <div class="full">
                                <label>¿Sería de ayuda saber el horario del autobús y cuándo puedes evitar el trafico?</label>
                                <div class="group rows center">
                                    <div class="radio small">
                                        <input type="radio" name="p5" value="si" class="radio-element" required="">
                                        <label class="sub">Sí</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p5" value="no" class="radio-element" required="">
                                        <label class="sub">No</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p5" value="Tal vez" class="radio-element" required="">
                                        <label class="sub">Tal vez</label>
                                    </div>
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row">

                            <div class="full">
                                <label>¿Alguna vez no has bajado en la parada que te corresponde?</label>
                                <div class="group rows center">
                                    <div class="radio small">
                                        <input type="radio" name="p6" value="Sí" class="radio-element" data-child="2" required="">
                                        <label class="sub">Sí</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p6" value="No" class="radio-element" required="">
                                        <label class="sub">No</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p6" value="Tal vez" class="radio-element" required="">
                                        <label class="sub">Tal vez</label>
                                    </div>
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row" data-parent="2">

                            <div class="full">
                                <label>¿Por qué no bajaste a tiempo?</label>
                                <div class="group columns">
                                    <div class="radio small">
                                        <input type="radio" name="p7" value="Me quede dormid@" class="radio-element" required="">
                                        <label class="sub">Me quede dormid@</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p7" value="Soy distraid@" class="radio-element" required="">
                                        <label class="sub">Soy distraid@</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p7" value="No sabía donde bajar" class="radio-element" required="">
                                        <label class="sub">No sabía donde bajar</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p7" value="Otros" class="radio-element" required="">
                                        <label class="sub">Otros</label>
                                    </div>
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->

                        <div>

                        </div>

                        <!-- <div class="row">
                            <input id="rent_form_button" value="Enviar Solicitud" type="submit" style="padding: 20px 15px; margin-bottom: 40px;">
                        </div>.row -->


                    </div><!-- .landing-body -->
                    <div class='loading off' style='height: 100%; align-items: center; display: flex;'>
                        <div>
                            <img src="./imgs/loading.png" alt="" style='width: 90%;'>
                        </div>
                    </div>
                </span><!-- .screen-wrap -->
            </div><!-- .screen -->
        </section><!-- .section-middle -->

        <section class="section-footer off" style='position: fixed; bottom: 0; left: 0; right: 0;'>
            <input type="submit" class="big-fat-button" value="Click Aquí para Continuar"/><!-- .big-fat-button -->
        </section>

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

            let textQIdx = document.querySelector(`.qidx`);
            let numQuestions = 0;
            let numQuestionsReal = 0;
            let arrayParent = [];

            // q = question
            function handleQuestion(index, idx) {

                let qIndex = index;
                let qIdx = idx;
                textQIdx.textContent = idx;


                let qActive = document.querySelectorAll(`.q${qIndex}`);

                qActive.forEach(function (q) {
                    q.addEventListener('change', function (e) {
                        setTimeout(function (params) {
                            if (numQuestionsReal == qIndex) {
                                sendForm();
                                return
                            }

                            document.querySelector(`.row[data-id='${qIndex}']`).classList.add('off');

                            console.log(qIndex);
                            if (arrayParent.find(function (e) { return e == qIndex })) {
                                if (q.dataset.child != undefined) {
                                    --qIdx;
                                } else {
                                    qIndex++;
                                    console.log(numQuestionsReal, qIndex);

                                    if (numQuestionsReal == qIndex) {
                                        sendForm();
                                        return
                                    }
                                }
                            }

                            document.querySelector(`.row[data-id='${++qIndex}']`).classList.remove('off');

                            handleQuestion(qIndex, ++qIdx);

                        }, 500);
                    });
                });
            }

            function sendForm() {
                setTimeout(function () {
                    form.submit()
                }, 2000);
                document.querySelector(`.loading`).classList.remove('off');
                document.querySelector(`.cuestionario`).classList.add('off');
            }

            function initFrom() {

                let contents = document.querySelectorAll('.row')
                let numQ = 1;

                

                contents.forEach(function (element, index) {

                    let idx = 1;

                    if (index != 0) {
                        element.classList.add('off');
                    }
                    element.dataset.id = ++index;

                    document.querySelectorAll(`.${element.classList[0]}[data-id='${index}'] input`).forEach(function (input) {
                        input.classList.add(`q${idx}`);
                    });

                    ++idx;

                    if (element.dataset.parent != undefined) {
                        arrayParent.push(parseInt(element.dataset.id) - 1);
                    } else {
                        numQuestions = numQ;
                        ++numQ;
                    }

                });

                numQuestionsReal = contents.length;
                document.querySelector(`.qLength`).textContent = numQuestions;

                handleQuestion(1, 1);
            }

            initFrom();

        });

    </script>

</body>

</html>