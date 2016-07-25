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
<body class="homepage">

  <div class="alert-wrap alert-warning"><div class="inner">
    <p>
      <i class="fa fa-exclamation-circle"></i> I'm an alert!
    </p>
    <a href="#" class="close-alert"><i class="fa fa-times-circle close"></i></a>
  </div></div>

  <?php include("includes/site-header.php"); ?>



  <div class="main-content">

    <section class="home-section hero-section">
        <div class="sub-section">
          <h2>Review Events <small>for</small> Barefoot Racing</h2>
          <form class="hero-form">
            <fieldset><input type="text" placeholder="Race Name"></fieldset>
            <fieldset><input type="text" placeholder="Race Location"></fieldset>
            <fieldset class="with-select">
              <select class="form-error">
                <option>Distance</option>
                <option>5k</option>
                <option>10k</option>
                <option>15k</option>
                <option>Marathon</option>
              </select>
              <span class="form-error-instructions">Can't be blank</span>
            </fieldset>
            <fieldset class="with-select">
              <select>
                <option>Month</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
              </select>
            </fieldset>
            <fieldset><input type="submit" value="Search"></fieldset>
          <form>
        </div>
    </section>

    <section class="home-section feature-listing-section">
      <div class="container">

        <header class="block-header">
          <h5 class="block-small-title">Featured Race</h5>
          <div class="sub-section header-top">
            <h2>New York Marathon</h2>
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
              <a href="race-detail.php" class="more">Read All Reviews</a>
            </div>

          </div>
        </header>

        <?php include("includes/user-review.php"); ?>

    </section>

    <section class="home-section races-listing-section">
      <div class="section-heading">
        <h3 class="section-heading-title">More Reviewed Races</h3>
      </div>
      <div class="container medium">

        <?php include("includes/race-listing.php"); ?>
        <?php include("includes/race-listing.php"); ?>
        <?php include("includes/race-listing.php"); ?>
        <?php include("includes/race-listing.php"); ?>

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
</html>
