<?php
    include('meta_config.php');
    $page = basename($_SERVER['PHP_SELF'], '.php'); 
    
    $pageMeta = isset($metaData[$page]) ? $metaData[$page] : $metaData['default'];
  
    function getCurrentUrl() {
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $host = $_SERVER['HTTP_HOST'];
      $uri = $_SERVER['REQUEST_URI'];
      
      return $protocol . $host . $uri;
  }
  $currentUrl = getCurrentUrl();

  $parsedUrl = parse_url($currentUrl);

  $projectFolderName = '/nivweb'; 
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content='<?php echo $pageMeta['author']; ?>'>
    <meta name="keywords" content="<?php echo $pageMeta['keywords']; ?>">
    <meta name="description" content="<?php echo $pageMeta['description']; ?>">
    <meta name="title" content="<?php echo $pageMeta['title']; ?>">
    <title><?php echo $pageMeta['title']; ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $projectFolderName?>/images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="<?php echo $projectFolderName?>/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $projectFolderName?>/css/font-awesome.css?v=1.1" />
    <link rel="stylesheet" href="<?php echo $projectFolderName?>/css/animation.css?v=1.1" />
    <link rel="stylesheet" href="<?php echo $projectFolderName?>/css/custom.css?v=1.1" />
    <link rel="stylesheet" href="<?php echo $projectFolderName?>/css/mediaquery.css?v=1.1" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css?v=1.1">
    <title>Nivzen Technologies</title>
    <style type="text/css">
    .navbar .megamenu {
        padding: 1rem;
    }

    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {

        .navbar .has-megamenu {
            position: static !important;
        }

        .navbar .megamenu {
            left: 0;
            right: 0;
            width: 100%;
            margin-top: 0;
        }

    }

    /* ============ desktop view .end// ============ */


    /* ============ mobile view ============ */
    @media(max-width: 991px) {

        .navbar.fixed-top .navbar-collapse,
        .navbar.sticky-top .navbar-collapse {
            overflow-y: auto;
            max-height: 90vh;
            margin-top: 10px;
        }
    }

    /* ============ mobile view .end// ============ */
    </style>
    <style>
    .country-select.inside .flag-dropdown:hover {
        cursor: pointer;
    }

    .country-select.inside .flag-dropdown {
        right: auto;
        left: 0;
    }

    .country-select .flag-dropdown {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        padding: 1px;
    }
    </style>
</head>