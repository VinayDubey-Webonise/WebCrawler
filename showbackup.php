<!DOCTYPE HTML>
<html>
  <head>
    <title>Crawl task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  </head>

  <body>
    <header class="container">
      <h1 class="mainHeader text-primary">WEB CRAWLER</h1>
      <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="showbackup.php">Show History</a>
          </li>
        </ul>  
      </nav>
    </header>
    
    <div class="container formBody">
        <?php
            require_once("backupfilelist.php");
            getFileList();
        ?>
    </div>

    <script type="text/javascript" src="./js/script.js" ></script>

  </body>
</html>
