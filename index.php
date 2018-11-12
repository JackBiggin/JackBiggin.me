<?php
    // First of all, lets work out what page is being accessed
    if(!empty($_GET['page'])) {
        $page = htmlspecialchars($_GET['page']);

        if($_GET['page'] == "portfolio") {
            // If accessing directly, rather than via homepage, redirect to homepage
            // This probably has SEO implications.
            // Emphasis on probably, I didn't actually check.
            header('Location: ./');
        }
    } else {
        $page = "portfolio";
    }

    // Now let's check that file actually exists.
    if(!file_exists("./assets/pages/$page.php")) {
        // If it doesn't, send them a wonderful error
        http_response_code(404);
        header('Location: ./404');
    }

    // Now we've done that, let's prettify the name.
    // Pretty is good.
    $prettyPageName = ucwords(str_replace("-", " ", $page));
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $prettyPageName; ?> - Jack Biggin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.0/css/foundation.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Open+Sans:400,600,700,800" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/2.0.3/motion-ui.min.css" />
    <link rel="stylesheet" href="./assets/css/app.css" />
  </head>
  <body>
    <header>
        <div class="grid-x grid-margin-x">
            <div class="cell">
                <h1><a href="./">Jack Biggin</a></h1>
            </div>
        </div>
    </header>

    <div class="top-bar">
        <div class="top-bar-center">
            <ul class="dropdown menu align-center" data-dropdown-menu>
                <li><a href="./">Portfolio</a></li>
                <li><a href="./about">About Me</a></li>
                <li><a href="./contact">Contact</a></li>
            </ul>
        </div>
    </div>

    <?php
        require_once "./assets/pages/$page.php";
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.0/js/foundation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/what-input/5.1.3/what-input.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/2.0.3/motion-ui.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="./assets/js/app.js"></script>
  </body>
</html>
