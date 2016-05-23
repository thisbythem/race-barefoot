<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Race Barefoot</title>

  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,700italic|Roboto:400,400italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/chosen.css">
  <link rel="stylesheet" href="css/site.css">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</head>
<body class="race-detail">

  <?php include("includes/site-header.php"); ?>

  <div class="container">
      <div class="alert-wrap">
        <p>
          <i class="fa fa-exclamation-circle"></i> I'm a message!
        </p>
        <i class="fa fa-times-circle close"></i>
      </div>
      <div class="alert-wrap alert-warning">
        <p>
          <i class="fa fa-exclamation-circle"></i> I'm an alert!
        </p>
        <i class="fa fa-times-circle close"></i>
      </div>
  </div>
  </div>
  <div class="main-content">
      <div class="container">

        <header class="block-header">
          <div class="sub-section header-top">
            <div class="block-title"><h2 class="add-bg">New York Marathon</h2></div>
            <div class="block-header-rating">
              <p><small>167 reviews</small></p>
              <div class="rating-stars">
                <span class="rating-star star-on"><i class="fa fa-star"></i></span>
                <span class="rating-star star-on"><i class="fa fa-star"></i></span>
                <span class="rating-star star-on"><i class="fa fa-star"></i></span>
                <span class="rating-star star-on"><i class="fa fa-star"></i></span>
                <span class="rating-star"><i class="fa fa-star-o"></i></span>
              </div>
            </div>
          </div>
          <div class="sub-section header-bottom">
            <div class="race-discriptor">
              <i class="fa fa-map-marker"></i>
              <p>
                Eugene, OR
              </p>
            </div>
            <div class="race-discriptor">
              <i class="fa fa-calendar"></i>
              <p>
                November
              </p>
            </div>
            <div class="race-discriptor">
              <i class="fa fa-arrows-h"></i>
              <p>
                5k, 10k
              </p>
            </div>
            <div class="race-discriptor">
              <i class="fa fa-link"></i>
              <p>
                <a href="#" target="_blank">Open Website</a>
              </p>
            </div>
            <div class="race-discriptor">
              <a href="#review-form" class="more" data-behavior="autoscroll"><i class="fa fa-plus"></i> Add Your Review</a>
            </div>

          </div>
        </header>

        <section class="race-detail-section race-detail-reviews-wrap">
          <?php include("includes/user-review.php"); ?>
          <?php include("includes/user-review.php"); ?>
          <?php include("includes/user-review.php"); ?>
          <?php include("includes/user-review.php"); ?>
          <?php include("includes/user-review.php"); ?>
          <?php include("includes/user-review.php"); ?>
        </section>

      </div>
      <section id="review-form" class="race-detail-section race-detail-review-form">
        <h3 class="section-heading">Add Your Review</h3>
        <div class="container medium">
          <?php include("includes/add-review-form.php"); ?>
        </div>
      </section>
  </div>

  <?php include("includes/site-footer.php"); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
  <script src="js/chosen.jquery.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(".chosen-select").chosen({disable_search_threshold: 10});
  </script>

</body>
