<?php
require_once './php/db_connect.php';
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>p6</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">

  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>

</head>

<body>

  <!-- NAV BAR -->
  <div class="navbar-dark text-white">
    <div class="container">
      <nav class="navbar px-0 navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a href="index.php" class="p-3 text-decoration-none text-light">Popular Baby Names</a>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <!-- FORM -->
  <div class="container py-5 mb5">

    <h1 class="mb-5">Popular Baby Names</h1>

    <div class="row py-4">

      <!-- FORM RANKINGS TABLE -->
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Form Rankings</span>
        </h4>

        <?php
          $getMaleStmt = 'SELECT * FROM names where sex = \'m\' order by count desc limit 10;';
          $getFemaleStmt = 'SELECT * FROM names where sex = \'f\' order by count desc limit 10;';
          $maleResult = $db->query($getMaleStmt);
          $femaleResult = $db->query($getFemaleStmt);
        ?>
        <table class="table table-hover table-striped">
          <thead class="thead-dark"></thead>
            <tr>
              <th>#</th>
              <th>Male</th>
              <th>Female</th>
            </tr>
          </thead>
          <tbody>
            <?php
              // List top 10 names in table body
              for ($i = 0; $i < 10; $i++)
              {
                $maleRow = mysqli_fetch_array($maleResult);
                $femaleRow = mysqli_fetch_array($femaleResult);
                echo '<tr>';
                echo '  <th scope="row">' .($i + 1). '</th>';
                echo '  <td>' .$maleRow['name']. '</td>';
                echo '  <td>' .$femaleRow['name']. '</td>';
                echo '</tr>';
              }
            ?>
          </tbody>
        </table>
      </div>
      <!-- END OF FORM RANKINGS TABLE -->

      <!-- NATIONAL RANKINGS TABLE -->
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">National Rankings</span>
        </h4>

        <?php
          $getMaleStmt = 'SELECT * FROM names where sex = \'m\' order by count desc limit 10;';
          $getFemaleStmt = 'SELECT * FROM names where sex = \'f\' order by count desc limit 10;';
          $maleResult = $db->query($getMaleStmt);
          $femaleResult = $db->query($getFemaleStmt);
        ?>
        <table class="table table-hover table-striped">
          <thead class="thead-dark"></thead>
            <tr>
              <th>#</th>
              <th>Male</th>
              <th>Female</th>
            </tr>
          </thead>
          <tbody>
            <?php
              // List top 10 names in table body
              for ($i = 0; $i < 10; $i++)
              {
                $maleRow = mysqli_fetch_array($maleResult);
                $femaleRow = mysqli_fetch_array($femaleResult);
                echo '<tr>';
                echo '  <th scope="row">' .($i + 1). '</th>';
                echo '  <td>' .$maleRow['name']. '</td>';
                echo '  <td>' .$femaleRow['name']. '</td>';
                echo '</tr>';
              }
            ?>
          </tbody>
        </table>
      </div>
      <!-- END OF NATIONAL RANKINGS TABLE -->

      <!-- NAME FORM -->
      <div class="col-md-4 order-md-1">
        <h4 class="mb-3">Name Submission</h4>
        <form class="needs-validation" action="index.php" method="POST">
            <div class="mb-3">
              <label for="babyName"><h5>Baby Name</h5></label>
              <input type="text" class="form-control" id="babyName" name="babyName" placeholder="" value="" required>
            </div>

          <h5 class="mb-3">Gender</h5>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="male" name="babyGender" value="male" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="male">Male</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="female" name="babyGender" value="female" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="female">Female</label>
            </div>
          </div>

          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
        </form>
      </div>
      <!-- END OF NAME FORM -->
      
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</body>

</html>