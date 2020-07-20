<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  </head>
  <body>
    <div id="admin-section">
      <div id="sidemenu">
        <div class="logo"> </div>
        <nav><a class="active" href="admin/dashboard.html"> <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a><a class="active" href="admin/dashboard.html"> <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a><a class="active" href="admin/dashboard.html"> <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a><a class="active" href="admin/dashboard.html"> <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a></nav>
      </div>
      <div id="content-area">
        @yield('content')
      </div>
    </div>
  </body>
</html>
