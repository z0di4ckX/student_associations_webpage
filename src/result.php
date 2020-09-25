<!-- 
  Creat by Wesly J. Hernandez 
  Date: 07-25-2020
 -->
<?php 
    include('../include/connect.php');

    $title = $_GET['buscar'];

    $query = "SELECT id, f_name, images FROM associations WHERE f_name LIKE '%$title%' ORDER BY f_name";

    $result = mysqli_query($conn, $query) or die("databese error:" . mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- jQuary script start here -->
    <script>
        $(document).ready(function() {
        $(".btns").click(function(){
            $(".input").toggleClass("active").focus;
            $(this).toggleClass("animate");
            $(".input").val("");
        });    
    });
    </script>
    <!-- jQuary Script end here -->
    <title>Asociaciones Estudiantiles</title>
</head>
<body>
    <header>
    <nav class="navbar">
        <!-- Navbar content -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a href="index.php" class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#" class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Upload</a>
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
    <div class="title">
        <h1 class="main_title">Results</h1>
        <hr>
    </div>
    <main>
        <!-- Section 1 -->
        <section class="section-1 p-0 text-center">
            <div class="row">
                <table class="table table-strip table-hover table-bordered row_size">
                    <!--PHP script loop to read data base information  -->
                    <?php while($row = mysqli_fetch_assoc($result)) { 
                        $id = $row['id'];
                        $images = $row['images'];
                        $title = $row['f_name'];
                    ?>
                    <div class="card text-center text-black bg-light mb-3"  style="width: 16rem;">
                        <a href="detail.php?GETID=<?php echo $id; ?>">
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
        <a href="index.php" class="buttom-right btn btn-outline-primary rounded-pill mb-3">Back</a>
    </main>
    <!-- Start bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>