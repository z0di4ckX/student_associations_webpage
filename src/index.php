<!-- 
  Created by Wesly J. Hernandez
  Date: 07-18-2020
 -->

<?php
include('../include/mysqli_connect.php');

$query = "SELECT * FROM associations";

$result = mysqli_query($conn, $query) or die("databese error:" . mysqli_error($conn));
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Start links -->
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <!-- End links -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- jQuary script here -->
  <script>
    $(document).ready(function() {
      $(".btns").click(function() {
        $(".input").toggleClass("active").focus;
        $(this).toggleClass("animate");
        $(".input").val("");
      });
    });
  </script>
  <!-- jQuary script end here -->
  <title>Asociaciones Estudiantiles</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar content -->
      <div class="th-bar-container collapse navbar-collapse">
        <div class="right">
          <div class="th-yellow th-right-span">
            <a class="boton_personalizado" href="https://interbb.blackboard.com" target="_self">Blackboard</a>
          </div>
          <div class="th-yellow th-right-span">
            <a class="boton_personalizado" href="/email/" target="_self">Correo Electrónico</a>
          </div>
          <div class="th-yellow th-right-span">
            <a class="boton_personalizado" href="https://ssb.ec.inter.edu/ssomanager/c/SSB" target="_blank">Inter Web</a>
          </div>
          <div class="th-yellow">
            <a class="boton_personalizado" href="https://form.jotform.com/202857934595874" target="_blank">Solicita Admisión</a>
          </div>
          <div class="th-yellow">
            <a class="boton_personalizado" href="/matricula/registraduria/registraduria/formulario-readmision/" target="_blank">Readmisión</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- jQuary button -->
    <div class="wrapper sm-2">
      <div class="search-box">
        <form action="result.php" method="GET">
          <input type="text" placeholder="Search..." class="input" name="buscar">
          <div class="btns">
            <i class="fa fa-search" aria-hidden="true"></i>
          </div>
        </form>
      </div>
    </div>
    <!-- jQuary button -->
  </header>
  <!-- Section -->
  <div class="pagetitle">
      <h1>Asociaciones Estudiantiles</h1>
  </div>
  <section id="image-size" class="section-1 p-0 text-center">
    <div class="row">
      <table class="table table-strip table-hover table-bordered row_size">
        <!-- PHP code here -->
        <?php while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['page'];
          $images = $row['logo'];
          $title = $row['association'];
        ?>
          <div class="card text-center taxt-black bg-light mb-3" style="width: 16rem;">
            <a href="<?php echo $id; ?>">
              <img class="card-img-top" src="<?php echo $images; ?>" alt="<?php echo $title; ?>">
            </a>
            <div class="card-title">
              <p class="card-text"><?php echo $title; ?></p>
            </div>
          </div>
        <?php } ?>
        <!--PHP script end loop  -->
      </table>
    </div>
  </section>
</body>
<!-- Start bootstrap script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- End -->

</html>