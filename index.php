<?php
ini_set('allow_url_fopen',1);
ini_set('default_socket_timeout', 300);
ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
$url = isset($_POST['url']) ? $_POST['url'] : '';

/* gets the data from a URL */
function get_data($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="A.M.H">
    <title>•M3U LINE .TS-CHECKER • BY: S.X.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  </head>
  <body>
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
          <div class="container d-flex justify-content-between">
            <a href="" class="navbar-brand d-flex align-items-center">
              <strong>HOME</strong>
            </a>
          
          </div>
        </div>
    </header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">* .TS-CHECKER * </h1>
      <p class="lead text-muted">• ACTIVE? • CONNECTIONS? • EXPIRATION? • DOWNLOAD! •</p>
      <p class="lead text-muted">Paste any .ts channel link to search. Please keep patience while loading...</p>
      <p class="lead text-muted">
      • 1 CHANNEL EXAMPLE • <br>
      http://domain.com:8080/username/password/100<br>
	  http://domain.com:8080/live/username/password/100.ts
	  <br><br>If that doesn't work, please try manually on your browser, replace $$.<br>
	  Manual: <code>http://$$dns:port$$/panel_api.php?username=$$user$$&password=$$pass$$</code><br>
	  <h4> This works only for XC V1/V2 original and Xtream UI software. </h4>
      </p>
    </div>
  </section>