<!DOCTYPE html>
<html class="<?php echo $class ?> no-js">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo $title ?></title>
  <meta name="author" content="Steven" />
  <meta name="keywords" content="<?php echo $keywords ?>" />
  <meta name="description" content="<?php echo $description ?>" />
  <link rel="stylesheet" href="/<?php echo $TEMPLATE ?>css/main.css" />
  <!-- <script src="/<?php echo $TEMPLATE ?>js/cssrefresh.js"></script> -->
  <!-- <script src="/<?php echo $TEMPLATE ?>js/live.js"></script> -->
  <!--[if lt IE 9]>
  <script src="/<?php echo $TEMPLATE ?>js/ie/html5shiv.js"></script>
  <script src="/<?php echo $TEMPLATE ?>js/ie/respond.js"></script>
  <script src="/<?php echo $TEMPLATE ?>js/ie/nwmatcher.js"></script>
  <script src="/<?php echo $TEMPLATE ?>js/ie/selectivizr.js"></script>
  <![endif]-->
  <!--[if IE 6]>
  <script src="/<?php echo $TEMPLATE ?>js/ie/pngfix.js"></script>
  <![endif]-->
  <script src="/<?php echo $TEMPLATE ?>js/sea-modules/seajs/seajs/2.2.1/sea.js" id="seajsnode"></script>
  <script src="/<?php echo $TEMPLATE ?>js/main.js"></script>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
</head>

<body>
  <!--[if lt IE 6]>
  <div class="browsehappy">似乎您正在使用一个旧版本的 Internet Explorer。为了获得最佳的浏览体验，我们建议您<a href="http://browsehappy.com/" target="_blank">升级你的浏览器</a>。</div>
  <![endif]-->
  <header id="header">
    <div class="wrapper">
      <h1><a href="http://www.isweek.com"><img src="/<?php echo $TEMPLATE ?>img/logo.png" alt="ISweek.com" /></a></h1>
      <form action="search.php" class="search clearfix" id="search">
        <fieldset class="search-panel">
          <input type="text" name="kw" class="kw js-placeholder" placeholder="Product Keyword/Part Number" />
          <span class="select-wrap">
            <select name="type" id="js-select">
              <option value="0">All Categories</option>
              <option value="1">Automation Categories</option>
              <option value="3">LED</option>
              <option value="4">Andriod</option>
              <option value="5">ISO</option>
            </select>
            <!-- <a class="ui-select-trigger">
              <span data-role="trigger-content">请选择</span>
              <i class="iconfont">&#xF03C;</i>
            </a> -->
          </span>
        </fieldset>
        <button type="submit" class="search-submit"><span>Search</span></button>
      </form>
    </div>
  </header>
  <nav id="nav">
    <div class="wrapper">
      <ul>
        <li><a class="on first" href="category.php">All CATEGORIES</a></li>
        <li><a href="#">Tablet PCs</a></li>
        <li><a href="#">Hair Extensions</a></li>
        <li><a href="#">Baby & Matemity</a></li>
        <li><a href="#">Home Accents</a></li>
        <li><a href="#">Wedding Dresses</a></li>
        <li><a href="#">Promotions</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </nav>