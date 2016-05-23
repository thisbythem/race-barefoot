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
<body class="login-page">
  <div class="container">
    <div class="login-wrap">
      <?php echo file_get_contents("img/rb-logo-2.svg"); ?>
      <div class="external-login">
        <p><a href="#" class="facebook-login"><i class="fa fa-facebook-square"></i> Login with Facebook </a></p>
        <p class="separator"><small><i>or</i></small></p>
      <!-- </div> -->
      <form>
        <fieldset>
          <p>
            <input type="text" placeholder="Username" />
          </p>
          <p>
            <input type="text" placeholder="Password" />
          </p>
        </fieldset>
        <fieldset class="form-actions">
          <input type="submit" value="Login"/>
        </fieldset>
        <p>
          <label><input type="checkbox" /> <small>Remember Me</small></label>
        </p>
      </form>
      <small class="form-helps"><a href="#">Forget password?</a> | <a href="#">Create Account</a></small>
    </div>
  </div>
</body>
