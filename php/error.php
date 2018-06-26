<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PHP error page of Walk Albina's Black History - HST 251 class: African-American History since 1877 taught by Dr. Andrea Lowgren">  
  <meta name="keywords" content="oregon history, history, albina's history, black history">
  <meta name="author" content="Andrea Lowgren">
  <meta name="copyright" content="Andrea Lowgren">
  <title>Walk Albina’s Black History | PHP Error</title>   
  <link rel="icon" type="image/png" href="images/favicon.png" sizes="114x114" />
  <link href="https://fonts.googleapis.com/css?family=Lora:700|Rubik" rel="stylesheet">
  <link rel="stylesheet" href="../style/main.css">
</head>
<body class="php">
  <section>
    <h1>ERROR</h1>
    <p>
      There was an error: <?php echo $error; ?>        
    </p>    
    <p>You'll be redirected to home page after 5 seconds.</p>
    <div></div> <!-- Loading animation, do not delete-->
  </section>
  <script type="text/javascript">
    var timer = 5; //seconds
    website = "../index.php"
    function delayer() {
      window.location = website;
    }
    setTimeout('delayer()', 1000 * timer); 
  </script>
</body>
</html>
