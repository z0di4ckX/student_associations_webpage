<!-- 
  Creat by Veronica Rivera De Choudens
  Date: 12-07-2020
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
    <link rel="stylesheet" href="../css/pagestyle.css">
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
        <!--****Cuanto terminen de hacer el menu bien, se lo ponen... cause it was distracting.****** -->


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
    <section id="image-size" class="section-1 p-0 text-center">
        <div class="row">
            <table class="table table-strip table-hover table-bordered row_size">
                <!-- PHP code here -->

                <!-- End the section -->

                <!-- Page Main Information  -->
                <main class="main">
                    <div class="ICSA"><a href="index.php"><img src="https://scontent.fsig3-1.fna.fbcdn.net/v/t1.0-9/119110816_1023516111420939_1634671659710261333_n.png?_nc_cat=105&ccb=2&_nc_sid=09cbfe&_nc_ohc=XFwaiF1BPWIAX85gm3o&_nc_ht=scontent.fsig3-1.fna&oh=cadb4179fc253736545d658646d4dffe&oe=60430FB2" width="400" height="400" alt="ICSA" ALIGN="left"></a> </div>
                    <div class="pageinfo">
                        <h1>Inter Computer Science Association</h1>
                        <h3>Departamento: Ciencias y Tecnologia </h3>
                        <h4>Inter Computer Science Associacion es una asociacion dirigida a los estudiantes de Ciencias en Computadora en la cual hacemos actividades relevantes a nuestra concentracion para desarrollar nuestro aprovechamiento academico al igual que nuestras destrezas para el desempeno laboral. Nuestras actividades en el semestre pueden variar, usualmente se hacen competencias de codigo, proyectos tales como esta pagina, varios talleres entre otras cosas. Despues me tienen que ayudar a llenar esto un poquito mas porque no se me ocurre mas nada que decir al momento. </h4>
                    </div>
                    <!-- End of Page Main Info -->

                    <!--Leadership table -->
                    <table>
                        <tr>
                            <th>Directiva</th>
                            <th>Posiciones</th>

                        </tr>
                        <tr>
                            <td>Marcos Babilonia</td>
                            <td>Presidente</td>

                        </tr>
                        <tr>
                            <td>Veronica Rivera</td>
                            <td>Vice Presidente</td>

                        </tr>
                        <tr>
                            <td>Kiolmi Santiago</td>
                            <td>Secretaria</td>

                        </tr>
                        <tr>
                            <td>James Acevedo</td>
                            <td>Tesorero</td>
                        </tr>
                        <tr>
                            <td>Jose Rojas</td>
                            <td>Vocal</td>
                        </tr>
                        <tr>
                            <td>Ney-Ling Navarro</td>
                            <td>Vocal</td>
                        </tr>
                        <tr>
                            <td>Wesly Hernandez</td>
                            <td>Vocal</td>
                        </tr>
                    </table>
                    <!-- End of Leadership table -->
                    <!-- Start of Contact info -->
                    <div class="contact">
                        <br>
                        <h3>Miembros Activos: 21 </h3>
                        <h3>Para Contactar: <a href="https://www.facebook.com/InterComputerScienceAssociation/"><img src="images/FacebookItem.png" width="50" height="50" alt="ICSA"></a><a href="mailto: icsa.inter@gmail.com "><img src="images/mail.png" width="50" height="50" alt="ICSA"></a></h3>
                        <!-- End of Contact info **Need you guys to work with the pictures** -->
                    </div>
        </div>

        </main>
</body>

<!-- Start bootstrap script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- End -->

</html>