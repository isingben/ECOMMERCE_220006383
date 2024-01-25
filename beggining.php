<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .social-icons {
    display: flex;
}

.icon {
    margin-right: 10px;
    margin-left: 10px;
    transform: translate(370px,10px);
}

.icon img {
    width: 40px; /* Adjust the size of the icons as needed */
    height: 40px;
}
  </style>
    <link rel="icon" href="data/kkk.jpg" type="image/x-png">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/begining.css">
        <link rel="icon" href="data/gtr.jpg"type="image/x-png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">    
<title>beginning</title>
</head>
<body background="bac img/a.jpg">
     <div style="width:1201px;height:220px;background-color:transparent;margin-left:50px">   
  <img src="data/bannerbu.jpg" id="h1">
    <div class="topnav">
<a class="active" href="home.php">HOME</a>
<a href="about us.php">PRODUCT</a>
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

    </div></div>
  <br><br><br>
    <div class="history">
    <div style="width:1240px;height:400px;margin-left:50px;margin-top:40px;">
        
    <div class="begin">
        <img src="data/begin.jpg" id="icon"><h1>BEN VEND ELECTRONIC DEVICES</h1>

        <img src="data/isingizwe.jpeg" id="photo" style="height:450px;width:380px;margin-top: 90px;margin-left:-50px;">

        <h1 style="font-size:28px;margin-left:420px;margin-top: -400px;font-weight:bold;">OWNER</h1>
        <p style="  font-size:23px;color:black;font-family:'Baskerville Old Face';">My name is Benitha Isingizwe Niyihoza, I am the owner of this shop.<br> I am here to serve you the best product of digital electronic devices<br> Feel free to visit our website to see what we have, and trust us<br> we provide high quality product with low price.<br>     
    </div></div></div>
   
    <div style="bottom: 0;
    width: 1100px;
   background-color:whitesmoke;
    height: 70px;
    margin-top:1px;
    margin-left:90px;">
<div class="bottom">
    <hr>
</div>
<h1 style="font-size:20px;font-family:sans-serif;color:black;text-align:center;">Copyright 2024 |Designed by Isingizwe benitha</h1></div>
    </div></div>
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

