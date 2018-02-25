<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uh-Oh</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div class="forOfor">
    <div class="body">
      <img src="/images/404.svg"></img>
      <h1 id="title">This page can't be <span id="bold">Identi</span>fied</h3>
      <p>We are unable to find the page you are looking for.</p>
      <div id="goBack" >
        <a href="{{ url()->previous() }}">GO BACK</a>
      </div>
    </div>
  </div>
</body>
</html>
