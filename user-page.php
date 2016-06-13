<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Race Barefoot</title>

  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,700italic|Roboto:400,400italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/site.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="/js/all.js"></script>
</head>
<body class="user-page">

  <?php include("includes/site-header.php"); ?>

  <section class="section-user-page section-user-header">
    <div class="container medium">
      <figure class="user-avatar"><img src="../img/avatar.jpg"></figure>
      <div class="user-information">
        <h4 class="user-name">Stevie P.</h4>
        <hr />
        <div class="user-information-sub-section">
          <p>Coos Bay, Oregon</p>
        </div>
        <div class="user-information-sub-section">
          <p class="user-stat user-review-number"><i class="fa fa-pencil"></i> 5 reviews</p>
        </div>
      </div>
    </div>
  </section>


  <section class="section-user-page section-user-page-reviews">
    <h3 class="sub-section-title center-it">Stevie's Reviews</h3> 
    <div class="container medium">
      <div class="user-page-review">
        <?php include("includes/race-block-header.php"); ?>
        <?php include("includes/user-review-user-page.php"); ?>
      </div>
      <div class="user-page-review">
        <?php include("includes/race-block-header.php"); ?>
        <?php include("includes/user-review-user-page.php"); ?>
      </div>
      <div class="user-page-review">
        <?php include("includes/race-block-header.php"); ?>
        <?php include("includes/user-review-user-page.php"); ?>
      </div>
      <div class="user-page-review">
        <?php include("includes/race-block-header.php"); ?>
        <?php include("includes/user-review-user-page.php"); ?>
      </div>
      <div class="user-page-review">
        <?php include("includes/race-block-header.php"); ?>
        <?php include("includes/user-review-user-page.php"); ?>
      </div>
    </div>
  </section>

</body>

<?php include("includes/site-footer.php"); ?>
