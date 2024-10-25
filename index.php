<?php include 'libs/load.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <?php load_template("_head"); ?>
</head>

<body>

  <header>
    <?php load_template("_header"); ?>
  </header>

  <main>

    <section class="py-5 text-center container">
      <?php load_template("_action"); ?>
    </section>

    <div class="album py-5 bg-light">
      <?php load_template("_upload"); ?>
    </div>

  </main>

  <footer class="text-muted py-5">
    <?php load_template("_footer"); ?>
  </footer>

  <script src="/SharePics/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>