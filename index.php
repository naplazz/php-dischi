<?php include 'app.php' ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title></title>
  <!-- Jquery --> <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <!-- Hendlebars --> <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
  <!-- font --> <script src="https://kit.fontawesome.com/a74e6d607f.js"></script>
  <!-- charts js --><script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<!-- mystyle -->  <link rel="stylesheet" href="public/css/app.css">
</head>

<body>
  <button id="btn" type="button" name="button">Click for Ajax display</button>
  <h1>PHP Display</h1>
  <div class="jsonappend">

  </div>
  <div class="php_display">
  <?php foreach ($dischi as $key => $value): ?>
    <div class="item">
        <h3><?php echo $value[title]; ?></h3>
        <p><?php echo $value[artist]; ?></p>
        <img src="<?php echo $value[img]; ?>" alt="">

    </div>
    <?php endforeach; ?>
  </div>

<!-- My Js --> <script src="public/js/app.js" charset="utf-8"></script>
</body>

</html>
