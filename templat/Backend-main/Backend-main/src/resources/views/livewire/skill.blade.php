<main>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mini Portfolio | Skills</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{ asset("/css/bootstrap.css") }}" rel="stylesheet">
<link href="{{ asset("/css/style.css") }}" rel="stylesheet">
<link href="{{ asset("/font/css/fontello.css") }}" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="container skills">
  <h2>My Skills</h2>
  <div class="row">
    <div class="span3">
      <div class="ps">
        <h3>Ps</h3>
      </div>
    </div>
    <div class="span5">
      <h3>Photoshop <span>90%</span></h3>
      <div class="expand-bg"> <span class="expand ps2"> &nbsp; </span> </div>
    </div>
  </div>
  <div class="row">
    <div class="span3">
      <div class="ai">
        <h3>Ai</h3>
      </div>
    </div>
    <div class="span5">
      <h3>Illustrator <span>80%</span></h3>
      <div class="expand-bg"> <span class="expand ai2"> &nbsp; </span> </div>
    </div>
  </div>
  <div class="row">
    <div class="span3">
      <div class="html">
        <h3>HTML5</h3>
      </div>
    </div>
    <div class="span5">
      <h3>HTML5 <span>75%</span></h3>
      <div class="expand-bg"> <span class="expand html2"> &nbsp; </span> </div>
    </div>
  </div>
  <div class="row">
    <div class="span3">
      <div class="css">
        <h3>CSS3</h3>
      </div>
    </div>
    <div class="span5">
      <h3>CSS3 <span>85%</span></h3>
      <div class="expand-bg"> <span class="expand css2"> &nbsp; </span> </div>
    </div>
  </div>
</div>

<div class="row social">
  <ul class="social-icons">
    <li><a href="{{ url("#") }}"><img src="{{ asset("/img/fb.png") }}" alt=""></a></li>
    <li><a href="{{ url("#") }}"><img src="{{ asset("/img/tw.png") }}" alt=""></a></li>
    <li><a href="{{ url("#") }}"><img src="{{ asset("/img/go.png") }}" alt=""></a></li>
    <li><a href="{{ url("#") }}"><img src="{{ asset("/img/pin.png") }}" alt=""></a></li>
    <li><a href="{{ url("#") }}"><img src="{{ asset("/img/st.png") }}" alt=""></a></li>
    <li><a href="{{ url("#") }}"><img src="{{ asset("/img/dr.png") }}" alt=""></a></li>
  </ul>
</div>

<div class="footer">
  <div class="container">
    <p class="pull-left"><a href="http://dzyngiri.com">www.dzyngiri.com</a></p>
    <p class="pull-right"><a href="{{ url("#myModal") }}" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
  </div>
</div>

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

<script src="{{ asset("/js/jquery-1.10.1.min.js") }}"></script>
<script src="{{ asset("/js/bootstrap.min.js") }}"></script>
<script>
$('#myModal').modal('hidden')
</script>
</body>
</html>

</main>
