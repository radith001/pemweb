<main>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mini Portfolio | Work</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{ asset("/css/bootstrap.css") }}" rel="stylesheet">
<link href="{{ asset("/css/style.css") }}" rel="stylesheet">
<link href="{{ asset("/font/css/fontello.css") }}" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="{{ asset("/css/jquery.fancybox.css") }}" media="screen">
</head>
<body>

<!-- Hapus bagian ini -->
<!-- <div class="navbar">
  <div class="navbar-inner">
    <div class="container"> 
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
      </a> 
      <a class="brand" href="index.html"><img src="img/user.jpg" alt=""></a>
      <ul class="nav nav-collapse pull-right">
        <li><a href="index.html"><i class="icon-user"></i> Profile</a></li>
        <li><a href="skills.html"><i class="icon-trophy"></i> Skills</a></li>
        <li><a href="work.html" class="active"><i class="icon-picture"></i> Work</a></li>
        <li><a href="resume.html"><i class="icon-doc-text"></i> Resume</a></li>
      </ul>
      <div class="nav-collapse collapse"></div>
    </div>
  </div>
</div> -->

<div class="container work">
  <h2>My Work</h2>
  <ul class="work-images">
    <li>
      <div><a class="fancybox-thumb" rel="fancybox-thumb" href="{{ url("img/1.jpg") }}" title="Image 01"><img src="{{ asset("/img/1-thumb.jpg") }}" alt=""></a></div>
    </li>
    <li>
      <div><a class="fancybox-thumb" rel="fancybox-thumb" href="{{ url("img/2.jpg") }}"><img src="{{ asset("/img/2-thumb.jpg") }}" alt=""></a></div>
    </li>
    <li>
      <div><a class="fancybox-thumb" rel="fancybox-thumb" href="{{ url("img/3.jpg") }}"><img src="{{ asset("/img/3-thumb.jpg") }}" alt=""></a></div>
    </li>
  </ul>
  <ul class="work-images">
    <li>
      <div><a class="fancybox-thumb" rel="fancybox-thumb" href="{{ url("img/4.jpg") }}"><img src="{{ asset("/img/4-thumb.jpg") }}" alt=""></a></div>
    </li>
    <li>
      <div><a class="fancybox-thumb" rel="fancybox-thumb" href="{{ url("img/5.jpg") }}"><img src="{{ asset("/img/5-thumb.jpg") }}" alt=""></a></div>
    </li>
    <li>
      <div><a class="fancybox-thumb" rel="fancybox-thumb" href="{{ url("img/6.jpg") }}"><img src="{{ asset("/img/6-thumb.jpg") }}" alt=""></a></div>
    </li>
  </ul>
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
<script src="{{ asset("/js/jquery.fancybox.js?v=2.1.5") }}"></script>
<script>
$(document).ready(function () {
    $(".fancybox-thumb").fancybox({
        helpers: {
            title: {
                type: 'inside'
            },
            overlay: {
                css: {
                    'background': 'rgba(1,1,1,0.65)'
                }
            }
        }
    });
});
</script>

</body>
</html>


</main>
