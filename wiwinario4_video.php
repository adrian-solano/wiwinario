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
// $campana = '42';
// $pantalla="$campana"."_1";
// $funel='1';

// impresion_track('FORMULARIO', 'IMPRESION', 'formulario_wiwinario4', $cliente, $campana, $pantalla, $funel, $macu, $called,$wiwichallenge);

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
        var campana = '42'
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
                                <p>Pregunta <span class='qIdx'></span> de <span class='qLength'></span></p>
                            </div>
                        </div>

                        <input type="hidden" name="camp_id" id="camp_id" value="42">
                        <input type="hidden" name="client_id" id="client_id" value="14">

                        <input type="hidden" name="categoria" id="categoria" value="CONVERSION">
                        <input type="hidden" name="tipo" id="tipo" value="EVENTO">

                        <input type="hidden" name="elemento" id="elemento" value="wiwinario4_promociones">
                        <input type="hidden" name="pantalla" id="pantalla" value="42_1">
                        <input type="hidden" name="funel" id="funel" value="1">

                        <input type="hidden" name="macuser" id="macuser" value="<?php echo $_SESSION['macu']?>">
                        <input type="hidden" name="nodeuser" id="nodeuser" value="<?php echo $_SESSION['called']?>">
                        <input type="hidden" name="wiwichallenge" id="wiwichallenge" value="<?php echo $_SESSION['wiwichallenge']?>">

                        <input type="hidden" name="elemento_conceder" id="elemento_conceder" value="NA">
                        <input type="hidden" name="pantalla_conceder" id="pantalla_conceder" value="42_2">
                        <input type="hidden" name="funel_conceder" id="funel_conceder" value="2">



                        <div class="row">
                            <div class="full">
                                <label>¿Utilizas cupones de descuento?</label>
                                <div class="group rows center">
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="Sí"  data-child="1" class="radio-element" required="">
                                        <label class="sub">Sí</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="No" data-child="3" class="radio-element" required="">
                                        <label class="sub">No</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p1" value="A veces" class="radio-element" required="">
                                        <label class="sub">A veces</label>
                                    </div>

                                </div><!-- .group  -->
                            </div><!-- .full -->
                        </div><!-- .row -->
                        <div class="row" data-parent="1">
                            <div class="full">
                                <label>¿Has utilizado alguno en los últimos 3 meses?</label>
                                <div class="group rows center">
                                    <div class="radio small">
                                        <input type="radio" name="p2" value="Sí" data-child="2" class="radio-element" required="">
                                        <label class="sub">Sí</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p2" value="No" class="radio-element" required="">
                                        <label class="sub">No</label>
                                    </div>
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row" data-parent="2">
                            <div class="full">
                                <label>¿En qué medios los has encontrado?</label>
                                <div class="group columns">
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p3" value="Tienda física" class="checkbox-element" required="">
                                        <label class="sub">Tienda física</label>
                                    </div>
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p3" value="Tienda en línea" class="checkbox-element" required="">
                                        <label class="sub">Tienda en línea</label>
                                    </div>
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p3" value="En una aplicación" class="checkbox-element" required="">
                                        <label class="sub">En una aplicación</label>
                                    </div>
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p3" value="No utilice ningún cupón o promoción de descuento" class="checkbox-element" required="">
                                        <label class="sub">No utilice ningún cupón o promoción de descuento</label>
                                    </div>
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row" data-parent="3" data-count="yes">
                            <div class="full">
                                <label>¿En qué tipo de productos o servicios te gustaría tener descuentos y promociones?</label>
                                <div class="group columns">
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p4" value="Despensa" class="checkbox-element" >
                                        <label class="sub">Despensa</label>
                                    </div>
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p4" value="Transporte" class="checkbox-element" >
                                        <label class="sub">Transporte</label>
                                    </div>
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p4" value="Entretenimiento" class="checkbox-element" >
                                        <label class="sub">Entretenimiento</label>
                                    </div>
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p4" value="Otros" class="checkbox-element" >
                                        <label class="sub">Otros</label>
                                    </div>
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row">

                            <div class="full">
                                <label>¿Conoces algún programa de lealtad que te permite acumular puntos?</label>
                                <div class="group rows center">
                                    <div class="radio small">
                                        <input type="radio" name="p5" value="Sí" data-child="4" class="radio-element" required="">
                                        <label class="sub">Sí</label>
                                    </div>
                                    <div class="radio small">
                                        <input type="radio" name="p5" value="No" class="radio-element" required="">
                                        <label class="sub">No</label>
                                    </div>
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->
                        <div class="row" data-parent="4">

                            <div class="full">
                                <label>¿Cuál?</label>
                                <div class="group columns">
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p6" value="Payback" class="checkbox-element" required="">
                                        <label class="sub">Payback</label>
                                    </div>
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p6" value="Mi oxxo" class="checkbox-element" required="">
                                        <label class="sub">Mi oxxo</label>
                                    </div>
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p6" value="Mercado pago" class="checkbox-element" required="">
                                        <label class="sub">Mercado pago</label>
                                    </div>
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p6" value="Del banco" class="checkbox-element" required="">
                                        <label class="sub">Del banco</label>
                                    </div>
                                    <div class="checkbox small">
                                        <input type="checkbox" name="p6" value="Otros" class="checkbox-element" required="">
                                        <label class="sub">Otros</label>
                                    </div>
                                </div><!-- .group  -->
                            </div>
                        </div><!-- .row -->

                    </div><!-- .landing-body -->
                    <div class='loading off' style='height: 100%; align-items: center; display: flex;'>
                        <div>
                            <img src="./imgs/loading.png" alt="" style='width: 100%;'>
                        </div>
                    </div>
                </span><!-- .screen-wrap -->
            </div><!-- .screen -->
        </section><!-- .section-middle -->

        <section class="section-footer off">
            <input type="submit" id='btn_form_submit' class="big-fat-button" value="Click Aquí para Continuar"/>
        </section>
    <!-- 
        <section class="section-footer off" style='position: fixed; bottom: 0; left: 0; right: 0;'>
            <input type="submit" class="big-fat-button" value="Click Aquí para Continuar"/>
        </section> 
    -->

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

        });

        let contents = [];
        let contentsOptional = document.querySelectorAll('.row[data-parent]');
        let contentsCount = document.querySelectorAll('.row');
        let btnFormSubmit = document.querySelector('#btn_form_submit');
        let textQuestionIndex = document.querySelector(`.qIdx`);
        let contentBtnSubmit = document.querySelector(`.section-footer`);
        let qIdx = 1;

        contentsCount.forEach(function ( content ) {
            
            if (content.dataset.parent != undefined) {

                if (content.dataset.count != undefined) {
                    contents.push(content);
                }

            } else {
                contents.push(content);
            }
            
        });

        document.querySelector(`.qLength`).textContent = contents.length;
        textQuestionIndex.textContent = qIdx;

        function initForm() {

            contents.forEach(function ( content, index ) {
                
                if (index != 0) {
                    content.classList.add('off');
                }

                content.dataset.id = ++index;

                document.querySelectorAll(`[data-id='${index}'] input`).forEach(function ( input ) {
                    input.classList.add(`q${index}`);
                    input.dataset.inputId = index;
                });

            });

            contentsOptional.forEach(function ( content, index ) {

                content.classList.add('off');
                content.dataset.parentId = ++index;

                document.querySelectorAll(`[data-parent-id='${index}'] input`).forEach(function ( input ) {
                    input.classList.add(`qo${index}`);
                    input.dataset.contentId = index;
                });

            });

            handleForm();
        }

        function handleForm() {
            
            document.querySelectorAll(`.q${qIdx}`).forEach( function ( question ) {
                question.addEventListener('change', function () {
                    selectOption(question);
                })
            } );

        }

        function handleFormOptional( child ) {
            
            document.querySelectorAll(`.qo${child}`).forEach( function ( question ) {
                question.addEventListener('change', function () {
                    selectOption(question);
                })
            } );

        }

        function selectOption( question ) {
            
            if (question.type != 'checkbox') {

                selectQuestion( question );

            } else {

                if (contentBtnSubmit.classList.value.includes('off')) {

                    contentBtnSubmit.classList.remove('off');
                    clickBtn( question );

                }

            }

        }

        function handleQuestion( child, contentId ) {

            isContentIdUndefiend(contentId);
            if (contentId == undefined || contentId < contents.length) {
                ++qIdx
            }
            document.querySelector(`[data-id='${++qIdx}']`).classList.remove('off');
            textQuestionIndex.textContent = qIdx;
            handleForm();

        }

        function handleQuestionOptional( child, contentId ) {

            let contentParentId = document.querySelector(`[data-parent-id='${child}']`);

            isContentIdUndefiend(contentId);
            contentParentId.classList.remove('off');

            if (contentParentId.dataset.count != undefined) {
                qIdx++;
                textQuestionIndex.textContent = qIdx;
            }

            handleFormOptional( child );

        }

        function isContentIdUndefiend( contentId ) {
            
            if (contentId != undefined) {
                document.querySelector(`[data-parent-id='${contentId}']`).classList.add('off');
            } else {
                document.querySelector(`[data-id='${qIdx}']`).classList.add('off');
            }

        }

        function sendForm() {
            
            document.querySelector(`.loading`).classList.remove('off');
            document.querySelector(`.cuestionario`).classList.add('off');
            setTimeout(function () {
                form.submit()
            }, 2000);

        }

        function clickBtn( question ) {
            
            btnFormSubmit.addEventListener('click', function ( event ) {
                event.preventDefault();
            
                selectQuestion( question );
                contentBtnSubmit.classList.add('off');

            }, { once: true })

        }

        function selectQuestion( question ) {
            
            if (contents.length == qIdx && question.dataset.child == undefined) {
                    
                sendForm();

            } else {
                
                setTimeout(function () {

                    if (question.dataset.child != undefined) {
                        handleQuestionOptional(question.dataset.child, question.dataset.contentId)
                    } else {
                        handleQuestion(question, question.dataset.contentId)
                    }

                }, 500);  

            }

        }

        initForm();

    </script>

    <!-- <script src="index.js"></script> -->

</body>

</html>