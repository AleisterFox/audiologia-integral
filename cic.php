<!DOCTYPE html>
<html lang="es" xml:lang="es" style="overflow-x: hidden">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php include 'elements/estilos.php'?>

    <link rel="stylesheet" href="css/loader.css">

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <title>Audiologia Integral LZC</title>
</head>

<body>

    <div class="whatsapp">
        <a href="https://wa.link/f2spvi" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>

    <div class="loader__screen" id="loader">
        <div id="wifi-loader">
            <svg class="circle-outer" viewBox="0 0 86 86">
                <circle class="back" cx="43" cy="43" r="40"></circle>
                <circle class="front" cx="43" cy="43" r="40"></circle>
                <circle class="new" cx="43" cy="43" r="40"></circle>
            </svg>
            <svg class="circle-middle" viewBox="0 0 60 60">
                <circle class="back" cx="30" cy="30" r="27"></circle>
                <circle class="front" cx="30" cy="30" r="27"></circle>
            </svg>
            <svg class="circle-inner" viewBox="0 0 34 34">
                <circle class="back" cx="17" cy="17" r="14"></circle>
                <circle class="front" cx="17" cy="17" r="14"></circle>
            </svg>
            <div class="text" data-text="Loading..."></div>
        </div>
    </div>

    <?php include 'elements/header.php' ?>

    <main>

        <section id="product">
            <div class="info">
                <div class="left">
                    <figure><img src="img/cic.png" alt=""></figure>
                </div>
                <div class="right">
                    <h2>Audífono CIC</h2>
                    <p>(Completly in Canal)</p>
                    <p>Auxiliar Auditivo fabricado a medida de cada persona y casi invisible ya que su colocación dentro del conducto auditivo permite ocultar o disimular totalmente el auxiliar en el oído del paciente.</p>
                </div>
            </div>

            <div class="gallery">
                <figure><img src="img/cic1.jpg" alt=""></figure>
                <figure><img src="img/cic2.png" alt=""></figure>
                <figure><img src="img/cic3.jpg" alt=""></figure>
            </div>

        </section>

        <section id="auxiliares">
            <h2>Lo mejor en Auxiliares Auditivos</h2>
            <div class="container">
                <a href="bte.php">
                    <div class="auxiliar">
                        <figure><img src="img/bte.png" alt=""></figure>
                        <p>Audífono BTE
                            (Behind the hear)</p>
                    </div>
                </a>
                <a href="ric.php">
                    <div class="auxiliar">
                        <figure><img src="img/ric.png" alt=""></figure>
                        <p>Audífono RIC
                            (Receiver in canal)</p>
                    </div>
                </a>
                <a href="cic.php">
                    <div class="auxiliar">
                        <figure><img src="img/cic.png" alt=""></figure>
                        <p>Audífono CIC
                            (Completly in Canal)</p>
                    </div>
                </a>
            </div>
        </section>

        <div class="revision">
            <h2>Solicita una revisión </h2>
            <p>Reserva cita con un profesional de Audiología Integral para resolver todas tus dudas sobre tu salud auditiva.</p>
            <a href="contacto.php" class="button">Contáctanos</a>
        </div>

    </main>

    <?php include 'elements/footer.php' ?>
</body>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/loader.js"></script>


</html>