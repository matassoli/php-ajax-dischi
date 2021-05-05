<?php
    include __DIR__ . "/database.php";
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Vue Dischi Musicali</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/master.css">
</head>

<body>

  <header>
    <img src="img/logo.png" alt="">
  </header>

  <div class="container">
    <?php foreach ($albums as $disco) :?>
    <div class="cd">
      <img src="<?php echo $disco["poster"]; ?>" alt="">
      <h3><?php echo $disco["title"]; ?></h3>
      <span class="author"><?php echo $disco["author"]; ?></span>
      <span class="year"><?php echo $disco["year"]; ?></span>
    </div>
  <?php endforeach; ?>
  </div>


  <script src="js/script.js" charset="utf-8"></script>
</body>

</html>
