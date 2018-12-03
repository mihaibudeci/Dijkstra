<html>
<head>
<title>Route optimale</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--    Bootstrap cdn-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<!-- icons-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--    Jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<!--    Greensock-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

</head>

<header>


<body>
<div class="wrapper">
            <div class="menu-btn">
                  <button type="button"><i class="material-icons">menu</i></button>
            </div>

            <div class="menu">
			
                  
<div class="row0">
<ul class="main-nav">
<li class="active"><a href="page2.html"><i class="fas fa-plane"></i> AVION </a></li>
<li class="active"><a href="page2.html"><i class="fas fa-train"></i> TRAIN </a></li>
<li class="active"><a href="page2.html"><i class="fas fa-car"></i> AUTO </a></li>
</ul>

</div>
</div>
<script type=" text/javascript">

    

            var t1 = new TimelineMax({paused: true});

            t1.to(".overlay", 1, {
                  opacity: 1,
                  ease: Expo.easeInOut
            });
            t1.staggerFrom(".menu ul li", 0.8, {y: 60, opacity: 0, ease: Expo.easeOut}, 0.1);

            t1.reverse();
            $(document).on("click", ".menu-btn", function() {
                  t1.reversed(!t1.reversed());
            });
      </script>



</header>


</body>

</html>