<!-- 
  Creat by Wesly J. Hernandez 
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- End links --> 
    <title>Asociaciones Estudiantiles</title>
</head>
<body>
    <header>
      <nav class="navbar">
        <!-- Navbar content -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
      </nav>
    </header>
      <!-- Section -->
      <section id="image-size" class="section-1 p-0 text-center">
        <div class="row">
          <table class="table table-strip table-hover table-bordered row_size">
            <!-- PHP code here -->
            <?php while($row = mysqli_fetch_assoc($result)) { 
              $id = $row['id'];
              $poster = $row['images'];
              $title = $row['f_name'];
            ?>
            <div class="card text-center taxt-black bg-light mb-3" style="width: 16rem;">
              <!-- <a href="detail.php?GETID=<?php echo $id; ?>"> -->
                <!-- <img class="card-img-top" src="<?php echo $poster; ?>" alt="<?php echo $title; ?>"> -->
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
      <!-- End the section -->
    <main>

    </main>
</body>
<!-- Start bootstrap script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- End -->
</html>