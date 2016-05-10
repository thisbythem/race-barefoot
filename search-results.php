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
<body class="search-results">

  <?php include("includes/site-header.php"); ?>

  <div class="main-content">

    <section class="search-results-section search-results-wrap">
      <h2>Search Results</h2>
      <div class="container medium">
        <?php include("includes/race-listing.php"); ?>
      </div>
        <div class="search-failure">
        <div class="container small">
          <h4>Sorry, we didn't find your race</h4>
          <a href="add-race.php">Add Your Race</a>
        </div>
      </div>  
    </section>


    <section class="search-results-section races-listing-section">
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

</body>
</html>
