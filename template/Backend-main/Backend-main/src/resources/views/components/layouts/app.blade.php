<main>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mini Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ===== CSS Stylesheets ===== -->
  <link href="{{ asset("/css/bootstrap.css") }}" rel="stylesheet">
  <link href="{{ asset("/css/style.css") }}" rel="stylesheet">
  <link href="{{ asset("/font/css/fontello.css") }}" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
</head>
<body>

  <!-- ===== HEADER / NAVBAR ===== -->
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="{{ url("index.html") }}"><img src="{{ asset("/img/user.jpg") }}" alt=""></a>
        <ul class="nav nav-collapse pull-right">
          <li><a href="{{ url("index.html") }}" class="active"><i class="icon-user"></i> Profile</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('skill') }}">Skill</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('work') }}">work</a></li>
          <li><a href="{{ url("resume.html") }}"><i class="icon-doc-text"></i> Resume</a></li>
        </ul>
        <div class="nav-collapse collapse"></div>
      </div>
    </div>
  </div>

  {{ $slot }}

  <!-- ===== FOOTER ===== -->
  <div class="footer">
    <div class="container">
      <p class="pull-left"><a href="http://dzyngiri.com">www.dzyngiri.com</a></p>
      <p class="pull-right">
        <a href="{{ url("#myModal") }}" role="button" data-toggle="modal">
          <i class="icon-mail"></i> CONTACT
        </a>
      </p>
    </div>
  </div>

  <!-- ===== MODAL CONTACT FORM ===== -->
  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
    </div>
    <div class="modal-body">
      <form action="#">
        <input type="text" placeholder="Your Name">
        <input type="text" placeholder="Your Email">
        <input type="text" placeholder="Website (Optional)">
        <textarea rows="3" style="width:80%"></textarea>
        <br>
        <button type="submit" class="btn btn-large"><i class="icon-paper-plane"></i> SUBMIT</button>
      </form>
    </div>
  </div>

  <!-- ===== JS SCRIPTS ===== -->
  <script src="{{ asset("/js/jquery-1.10.1.min.js") }}"></script>
  <script src="{{ asset("/js/bootstrap.min.js") }}"></script>
  <script>
    $('#myModal').modal('hidden');
  </script>

</body>
</html>

</main>