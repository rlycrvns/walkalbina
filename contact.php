<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contact page of Walk Albina's Black History - HST 251 class: African-American History since 1877 taught by Dr. Andrea Lowgren">
  <meta name="keywords" content="oregon history, history, albina's history, black history">
  <meta name="author" content="Andrea Lowgren">
  <meta name="copyright" content="Andrea Lowgren">
  <title>Walk Albina’s Black History | Contact</title>
  <link rel="icon" type="image/png" href="images/favicon.png" sizes="114x114" />
  <link href="https://fonts.googleapis.com/css?family=Lora:700|Rubik" rel="stylesheet">
  <script src="script/prefixfree.min.js"></script>
  <script src="script/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="style/reset.css">
  <link rel="stylesheet" href="style/generic.css">
  <link rel="stylesheet" href="style/main.css">
</head>

<body>
     <?php include 'includes/header.php'; ?>

  <main>
    <section>
      <h1>Contact</h1>
      <figure class="img-crop">
        <img src="images/flyer.jpg" alt="Flyer for the Walk Albina’s Black History created by students in the HST 251 class. ">
        <p><span></span></p> <!--These tags are used to create the down arrow-->
      </figure>
      <p class="caption">Flyer created by students in the HST 251 class</p> <!--The above image is cropped by CSS, so <figcaption> is not used. Use this <p> instead.-->
      <p>Walk Albina’s Black History is an annual event put on by Student of HST 251. The walk is a great chance to experience the culture and history of the Albina neighborhood.</p>
      <p>Please remember to dress appropriately for the weather, wear comfortable shoes and bring plenty of water. We look forward to seeing you!</p>

     <?php include 'php/mailer.php'; ?>
    </section>
  </main>

   <?php include 'includes/footer.php'; ?>

  <script src="script/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
</body>
