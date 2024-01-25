
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
    <link rel="stylesheet" type="text/css" href="css/about us.css">	
	<title>Our Info</title>
</head>
<body background="bac img/b5.jpg">
<div style="width:1250px;height:220px;background-color:transparent;margin-left:50px">   
 <img src="data/bannerbu.jpg" id="h1">        
    <div class="topnav">
<a class="active" href="home.php">HOME</a>
<a href="product.php">PRODUCT</a>
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
    <div class="bodyabout">  	
<div style="width:1240px;height:400px;margin-left:50px;margin-top:40px;">    

</div>
<h1 style="margin-top:-290px;margin-left:300px;font-size:30px;">Our Mission and Values</h1>
<p style="margin-top:20px;margin-left:0px;font-size:20px;margin-left:29px;font-family:bold">At BVED (BEN VEND ELECTRONIC DEVICES), our mission is to provide affordable and reliable electronic devices that empower individuals to seamlessly integrate technology into their lives. We understand the frustration of customers needing high-quality options without breaking the bank, which is why we offer a diverse range of innovative electronic devices that cater to their needs for affordability and reliability. Our commitment goes beyond just selling products. By combining our dedication to affordability, reliability, and excellent customer service, we aim to become the go-to destination for individuals who appreciate the convenience and efficiency of electronic devices.</p> 
<h1 style="margin-left:23px">More information ask us on our contact here</h1>
<a onclick="window.open('http://www.gmail.com')" href=""><img src="data/email.png" width="50px" style="margin-left:20px;"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<p style="margin-top:-40px;margin-left:80px;">isibe98@gmail.com</p><br>
<img src="data/contact.jpg" width="50px" style="margin-left:20px"><p style="margin-top:-40px;margin-left:80px;">0785794525/0723461035</p><br>
<a onclick="window.open('http://www.facebook.com')" href=""><img src="data/fb1.png" width="50px" style="margin-left:20px"></a><p style="margin-top:-40px;margin-left:80px;">Isingizwe benitha</p><br>
<br>
<a href="https://www.google.com/maps/place/Runda/@-1.9571402,29.9346351,15z/data=!3m1!4b1!4m6!3m5!1s0x19dcbb1c01785cc3:0x788a93e67b45f476!8m2!3d-1.9571617!4d29.9449563!16s%2Fg%2F11gr6vzx3m?entry=ttu"><img src="data/d.jpg" width="50px" style="margin-left:20px"><p style="margin-top:-40px;margin-left:80px;">Runda Sector,Ruyenzi zone</p><br>
<br><br><br><br>

<tr><td><a href="home.php"><img src="data/page.png" style="width: 190px;margin-left: 400px;margin-top: -40px;"></a></td></tr>
</div>
    <div style="bottom: 0;
    width: 1100px;
   background-color:whitesmoke;
    height: 70px;
    margin-top:1px;
    margin-left:90px;">
    <hr>
</div>
<h1 style="font-size:20px;color:black;text-align:center;margin-top: -50px;font-family:sans-serif;">Copyright 2024 |Designed by benitha</h1></div>
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

