<!DOCTYPE html>
<html>
<head>
  <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="engine1/jquery.js"></script>
<script src="ism/js/ism-2.2.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
  <style type="text/css">
    @import URL("css/index.css");
    @import URL("css/foote.css");
     .slider-container {
            position: relative;
            width: 90%;
            max-width: 800px;
            margin: auto;
            overflow: hidden;
            margin-top: 40px;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
        }

        img {
            width: 100%;
            height: auto;
            display: block;
        }

        .prev, .next {
            position: absolute;
            top: 30%;
            transform: translateY(-50%);
            font-size: 20px;
            cursor: pointer;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border: none;
            outline: none;
            user-select: none;
        }

        .prev {
            left: 0;
        }

        .next {
            right: 0;
        }
        .social-icons {
    display: flex;
}

.icon {
    margin-right: 10px;
    margin-left: 10px;
    transform: translate(170px,10px);
}

.icon img {
    width: 40px; /* Adjust the size of the icons as needed */
    height: 40px;
}
.topnav {
     margin-top:-5px;
    
  width: 1100px;
  margin-left:50px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
nav {
            margin-top: -160px;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav a {
            text-decoration: none;
            color: black;
            padding: 10px 15px;
            margin: 0 5px;
            border-radius: 5px;
            background-color: white;
        }

        nav a:hover {
            background-color: #777;
        }
  </style>
        <link rel="icon" href="data/kkk.jpg" type="image/x-png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <title>Home</title>
</head>
<body background="bac img/b5.jpg">
    <div style="width:1201px;height:220px;margin-left:50px;">
        <img src="data/bannerbu.jpg" id="h1">       
    <div class="topnav">
<a class="active" href="home.php">HOME</a>
<a  href="product.php">PRODUCT</a>
<a href="services.php">SERVICES</a>
<a href="moreinfo.php">MORE INFO</a>
</div>
<div class="social-icons">
    <a href="https://www.facebook.com" target="_blank" class="icon">
        <img src="data/fbicon.png" alt="Facebook">
    </a>
    
    <a href="https://www.twitter.com" target="_blank" class="icon">
        <img src="data/twitter.png" alt="Twitter">
    </a>
    
    <a href="https://www.instagram.com" target="_blank" class="icon">
        <img src="data/instagram.jpg" alt="Instagram">
    </a>

    </div>
    </div>
<script type="text/javascript" class="dat">
            <!--
            function currentTime(){
               var date=new Date();
               document.form1.text1.value=date.toLocaleString();
               window.setTimeout("currentTime()",1000);
            }
              //-->
          </script>
          <body onload="currentTime()">
          <form name="form1"action="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="text1" size="150"  align="center" style = ' background-color :white; font-family : Arial, veredena, sans-serif; color :black; font-weight : bold;  border : 16px solid white; -moz-border-radius : 5px;transform: translate(-70%,-45%); border-radius : 5px;'>
        </form>
  </div><br>
  <div class="homebody">
  <div class="container">

   <!-- Start WOWSlider.com BODY section -->
<div class="slider-container">
    <div class="slides">
        <div class="slide">
            <img src="data1/images/welc.jpg" alt="Slide 1">
        </div>
        <div class="slide">
            <img src="data1/images/sell.jpg" alt="Slide 2">
        </div>
        <div class="slide">
            <img src="data1/images/quality.jpg" alt="Slide 3">
        </div>
        <div class="slide">
            <img src="data1/images/gadghome1.jpg" alt="Slide 3">
        </div>
        <div class="slide">
            <img src="data1/images/yours.jpg" alt="Slide 3">
        </div>
        <div class="slide">
            <img src="data1/images/gadgethome.jpg" alt="Slide 3">
        </div>
          <div class="slide">
            <img src="data1/images/price.jpg" alt="Slide 3">
        </div>
        
        <!-- Add more slides as needed -->
    </div>

    <button class="prev" onclick="prevSlide()">❮</button>
    <button class="next" onclick="nextSlide()">❯</button>
</div>

<script>
    let currentSlide = 0;

    function showSlide(index) {
        const slides = document.querySelector('.slides');
        const slideWidth = document.querySelector('.slide').clientWidth;
        currentSlide = index;

        slides.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + document.querySelectorAll('.slide').length) % document.querySelectorAll('.slide').length;
        showSlide(currentSlide);
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % document.querySelectorAll('.slide').length;
        showSlide(currentSlide);
    }
</script>
<!-- End WOWSlider.com BODY section -->
<nav>
    <a href="">Continue</a>
    <a href="beggining.php">1</a>
    <a href="product.php" class="next-link">Next</a>
</nav>

</div> <br><br><br><br><br><br>
<div style="bottom: 0;width: 1100px;
      background-color:whitesmoke;
    height: 60px;
    margin-top:-140px;
    margin-left:0px;">
<h1 style="font-size:20px;font-family:sans-serif; position: relative;color:black;text-align:center;">Copyright 2024 |Designed by Isingizwe benitha</h1></div>
    </div>
</body>
</html>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script type="text/javascript">
 $(document).ready(function(){
  $('#search_text').keyup(function(){
var txt=$(this).val();
if(txt!=''){
$.ajax({
    url:"fetch.php",
    method:"post",
    data:{search:txt},
    dataType:"text",
    success:function(data)
    {
      $('#result').html(data)
}
});
}
else{
  $('#result').html('');
  $.ajax({
    url:"fetch.php",
    method:"post",
    data:{search:txt},
    dataType:"text",
    success:function(data){
      $('#result').html(data)
    }
  } 
}
  });
 }); 
</script>

