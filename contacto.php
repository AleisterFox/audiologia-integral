<!DOCTYPE html>
<html lang="es" xml:lang="es" style="overflow-x: hidden">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="shortcut icon" href="img/icono.png" type="image/x-icon" media="(prefers-color-scheme: light)" />
  <link rel="shortcut icon" href="img/icono.png" type="image/x-icon" media="(prefers-color-scheme: dark)" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css?family=Outfit:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />

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

    <section id="contact">
      <div class="container">
        <div class="left">
          <h2>Contáctanos</h2>
          <p>Descubre los últimos avances en rehabilitación auditiva y recupera tu calidad de vida.</p>
        </div>
        <div class="right">
          <form action="">
            <input type="text" name="name" id="name" placeholder="Nombre*" required>
            <input type="tel" name="phone" id="phone" placeholder="Tel*" required>
            <input type="email" name="email" id="email" placeholder="Email">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Déjanos tu mensaje"></textarea>
            <button type="submit" class="button">Enviar</button>
          </form>
        </div>
      </div>
    </section>

    <section id="location">
      <h2>Ubicaciones</h2>

      <div class="container">
        <div class="left">
          <div class="location">
            <p><i class="fas fa-location-dot"></i> Mariano Matamoros 158, Centro, 60950
              Lázaro Cárdenas, Michoacán.</p>
          </div>
          <div class="location">
            <p><i class="fas fa-location-dot"></i> Nicolás Bravo 27 1er Piso, Centro, 40890 Zihuatanejo, Gro.</p>
          </div>
        </div>

        <div class="right mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3795.386702135115!2d-102.2016532250512!3d17.960737083027517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84315c65a2bc23f9%3A0x692f07f8b30a4e99!2sMariano%20Matamoros%20158%2C%20Centro%2C%2060950%20Cdad.%20L%C3%A1zaro%20C%C3%A1rdenas%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1712268342018!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="right mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.2142385968177!2d-101.56149612138833!3d17.64000934020758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8434771724eda415%3A0xd24bc176b9fb8b1f!2sNicol%C3%A1s%20Bravo%2027%2C%20Centro%2C%2040890%20Zihuatanejo%2C%20Gro.!5e0!3m2!1ses-419!2smx!4v1713810771951!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>
    </section>

  </main>

  <?php include 'elements/footer.php' ?>
</body>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/loader.js"></script>


</html>