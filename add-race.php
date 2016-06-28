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
<body class="add-race">

  <?php include("includes/site-header.php"); ?>

  <div class="main-content">

    <section class="add-race-section">
      <div class="container medium">
        <h2>Add a New Race</h2>
        <form class="add-race-form">

          <div class="add-race-name add-race-form-section">
            <fieldset>
              <h5>Race Name</h5>
              <input type="text" />
            </fieldset>
            <button class="add-race-section-action">Next</button>
          </div>

          <div class="found-similar-race add-race-form-section">
            <h5>We found some similar races. Did you mean...</h5>
            <ul class="similar-race-list">
              <li>
                <a href="#" class="race-title"><h4>New York Marathon</h4></a>
                <a href="race-detail.php" class="add-review"><i class="fa fa-plus"></i> Add Review </a>
              </li>
              <li>
                <a href="#" class="race-title"><h4>New York Marathon</h4></a>
                <a href="race-detail.php" class="add-review"><i class="fa fa-plus"></i> Add Review </a>
              </li>
              <li>
                <a href="#" class="race-title"><h4>New York Marathon</h4></a>
                <a href="race-detail.php" class="add-review"><i class="fa fa-plus"></i> Add Review </a>
              </li>
              <li class="add-race-prompt">
                <p>
                  Don't see the race you're looking for?
                </p>
                <a href="#">Add a Race</a>
              </li>
            </ul>

          </div>

          <div class="add-race-details add-race-form-section">
            <div class="race-details-fields">
              <div class="wrap">
                <h5>Race City</h5>
                <fieldset>
                  <input type="text" />
                </fieldset>
              </div>

              <div class="wrap">
                <h5>Race Month</h5>
                <fieldset class="with-select">
                  <select>
                    <option>Janurary</option>
                  </select>
                </fieldset>
              </div>

            </div>
            <fieldset>
              <h5>Distances <small>Select all distances offered</small></h5>
              <div class="sub-section row">
                <label class="checkbox-label form-error"><input type="checkbox" /> 5k</label>
                <label class="checkbox-label selected"><input type="checkbox" /> 10k</label>
                <label class="checkbox-label"><input type="checkbox" /> 15k</label>
                <label class="checkbox-label"><input type="checkbox" /> Marathon</label>
                <label class="checkbox-label"><input type="checkbox" /> 50 miles</label>
                <label class="checkbox-label"><input type="checkbox" /> 100+ miles</label>
              </div>
              <span class="form-error-instructions">Can't be blank</span>
            </fieldset>
            <div class="race-details-fields">
              <fieldset class="no-margin">
                <h5>Race Website <small>Optional</small></h5>
                <input type="text" />
              </fieldset>
            </div>
          </div>

          <div class="add-race-actions add-race-form-section">
            <p>Thanks for making Race Barefoot better!</p>
            <p><input type="submit" value="Add Race"/></p>
          </div>
        </form>
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
