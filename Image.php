<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style type="text/css">
    body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

  </style>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Add Post</title>
</head>


<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<div class="container">
		<dev class="part search">	
			 <input id="searchBar" class="searchbar" type="text" placeholder="Search in...">
      <a id="btnSearch" class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></a>
		</dev>

		<div class="part logo">	
			<img src="//cdn.shopify.com/s/files/1/0264/6972/8316/files/logo_456ad61d-ba6f-4e2b-98b4-824f533cc1e2_120x@2x.png?v=1571044369" alt="">
		</div>

		<div class="part headericon">	
			<i class="fa fa-user-circle" aria-hidden="true"></i>
			<i class="fa fa-heart" aria-hidden="true"></i>
			<i class="fa fa-shopping-cart" aria-hidden="true"></i>
		</div>
 
	</div>

	<hr>	
  <header>
      <div id="nav">
           <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Category</a>
            <ul class="dropdown">
                <li><a href="">Technology</a></li>
                <li><a href="">Photography</a></li>
                <li><a href="">Graphics</a></li>
            </ul>
        </li>
        <li><a href="">About us</a></li>
        <li><a href="">Contact</a></li>
    </ul>  
      </div>
    </header>
    <hr>	

<form action="Image.php" method="post" enctype="multipart/form-data" class="col-12 col-md-8 col-lg-4">
<div class="remember" align="center">
<label>Post Description</label>         
</div>
	<input type="text" name="post" class="ff" placeholder="Enter Post Descripion" align="center" required>
  <div class="remember" align="center">
  <label style="cursor: pointer;">Upload Image </label>
  </div>
	
	<input type="file" name="image" >
	<br>
<br>
	
	<input class="save" type="submit" name="save" value="ADD"  >

</form>
<br>
<?php session_start(); ?>
<?php include_once('ImConnect.php');?>

<?php
  
        if (isset($_POST['save'])) {
          
          $post = $_POST['post'];
          $img = $_FILES['image']['name'];
          $Folder = "picture/".$img;
          $ftype=$_FILES['image']['type'];
          $type=array("image/jpg","image/png","image/jpeg","image/webp");
          $insert = "insert into images values ( 'NULL' ,  '$post' , '$Folder' )";
            
               $f=0;
               for($a=0;$a<4;$a++)
               {
               if($type[$a]==$ftype)
               {
                if(mysqli_query($connection, $insert)){
               $f=1;

               
               move_uploaded_file($_FILES['image']['tmp_name'], $Folder);
               echo "$post<br>";
                echo "<img src=".$Folder." height =400 width=400/> ";
          
               break;
               }
             }
               }
               if($f==0)
                 {
                 echo "Invalid File type.<br/>";
                 echo "Your file Type is ".$img;
               }  
          }
          
            
      
      
			
?>
<div class="footer">
  <div class="inner-footer">

<!--  for company name and description -->
    <div class="footer-items">
      <h1>Company Name</h1>
      <p>Description of any product or motto of the company.</p>
    </div>

<!--  for quick links  -->
    <div class="footer-items">
      <h3>Quick Links</h3>
      <div class="border1"></div> <!--for the underline -->
        <ul>
          <a href="#"><li>Home</li></a>
          <a href="#"><li>Search</li></a>
          <a href="#"><li>Contact</li></a>
          <a href="#"><li>About</li></a>
        </ul>
    </div>

<!--  for some other links -->
    <div class="footer-items">
      <h3>Recipes</h3>
      <div class="border1"></div>  <!--for the underline -->
        <ul>
          <a href="#"><li>Indian</li></a>
          <a href="#"><li>Chinese</li></a>
          <a href="#"><li>Mexican</li></a>
          <a href="#"><li>Italian</li></a>
        </ul>
    </div>

<!--  for contact us info -->
    <div class="footer-items">
      <h3>Contact us</h3>
      <div class="border1"></div>
        <ul>
          <li><i class="fa fa-map-marker" aria-hidden="true"></i>XYZ, abc</li>
          <li><i class="fa fa-phone" aria-hidden="true"></i>123456789</li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i>xyz@gmail.com</li>
        </ul> 
      
<!--   for social links -->
        <div class="social-media">
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-google-plus-square"></i></a>
        </div> 
    </div>
  </div>
  
<!--   Footer Bottom start  -->
  <div class="footer-bottom">
    Copyright &copy; Food and Burps 2020.
  </div>
</div>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
  
</body>
</html>



