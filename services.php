
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="data/kkk.jpg" type="image/x-png">
	<style type="text/css">
		@import URL("css/service.css");
		@import URL("css/index.css");
		@import URL("css/foote.css");
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
	<title>participate</title>
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
    <div class="divp">         
    <div style="width:1240px;height:900px;margin-left:50px;margin-top:-40px;">
      <h1 style="margin-left:250px;font-family:bold;color: white">BEN VEND ELECTRONIC DEVICES</h1>
      
	<div class="form">          
            <p style="text-align:center;font-size:20px;font-family:bold;font-weight:bold;background-color:white;color: black">Our services<br><br><br><br>We offer a range of innovative electronic devices that cater to customers' needs for affordability and reliability. Our main product line includes<br> * smartphones <br>*tablets<br> *laptops and <br> * smartwatches.<br> These devices are carefully selected to ensure they meet our high standards for quality and performance.<br><br>One of the key advantages of our electronic devices is their affordability. We understand that not everyone can afford the latest flagship devices, so we focus on offering a diverse range of options at various price points. This allows us to cater to a wide range of customers with different budgets.
</div>
</div>
<tr><td><a href="home.php"><img src="data/page.png" style="width: 190px;margin-left: 400px;margin-top: -40px;"></a></td></tr>
</div> 

<div style=" bottom: 0;
    width: 1100px;
   background-color:whitesmoke;
    height: 70px;
    margin-top:1px;
    margin-left:90px;">
<div class="bottom">
<br>
	<h1 style="font-size:20px;font-family:sans-serif;color:black;text-align:center;">Copyright 2024 |Designed by Isingizwe benitha</h1></div>
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




