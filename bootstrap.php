<!DOCTYPE html>
<html>
<head>
  <title>Travel With Me</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

   <style>
   body{
   background-color: white;
   height:auto;
     padding-top: 50px;
   }
   .navbar-static-top{
position: fixed;
right: 0;
left: 0;
z-index: 1000;
   }
   
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
     width: 100%;
      margin: auto;
	  height:auto;
  }
  
 #jumbo{
 <!-- background:url("bootstrap/mountain.jpg"); --> 
  opacity:0.5px;
  color: black;
  }
  #dropdown li {
  padding:10px;
  text-align:left;

  }
   #dropdown ul li a:hover {
color:Gray;
  }
  
     /*
 * Base structure
 */

 /* Move down content because we have a fixed navbar that is 50px tall */
 body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

 .sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
 .navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

 /* Hide for mobile, show later */
 .sidebar {
  display:url("uploads/screen.jpg");
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

 .main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

 .placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
.nav navbar-nav{
text-color:hotpink;

}

#search{
	border-color:black;
}

 h1 {font-family: "Montserrat", sans-serif; font-weight: bold}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}

</style>

</head>
<body>
  <div id="wrap">
<div class="navbar navbar-inverse navbar-fixed-top"><!---Beginning of nav bar1-->
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand logo"></div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li><a href="#"><font color='#de8121'><b>TRAVEL WITH ME</font></b></a></li>
                <li class="divider-vertical"></li>
                <li><a href="#"><font color='white'><b>Tourism Website for NEPAL</font></b></a></li>
				 <li class="divider-vertical"></li> </ul>
				<ul class="nav navbar-nav navbar-right">
	
					<li class="divider-vertical"></li> 
	  <li><a href="map.php"><font color='white'><span class="glyphicon glyphicon-globe"></span> <b>Map</b></font></a></li>
	  <li><a href="login.php"><font color='white'><span class="glyphicon glyphicon-globe"></span> <b>login</b></font></a></li>
            </ul>
        </div>
    </div>
</div> <!---End of nav bar1-->





    <div class="navbar navbar-default navbar-static-top"><!---Beginning of nav bar2-->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-nav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse main-nav">
                <ul class="nav navbar-nav">
				<li><a href="#" class="navbar-left"><img src="uploads/screen.jpg" height="30px"> </a></li> 
                    <li><a href="bootstrap.php"><font color='black'><span class="glyphicon glyphicon-home"></span><b>&nbsp;Home</font></b></a></li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown" id="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color='black'><b>Categories </b><span class="caret"></span></font></a>
        <ul class="dropdown-menu" >
          <li><a href="hotel_ktm.php"><b>Hotels</b></a></li>
          <li><a href="destination.php"><b>Destinations</b></a></li>
          <li><a href="fnd.php"><b>Food and Drink</b></a></li>
		   <li><a href="adventures.php"><b>Adventures</b></a></li>
       <li><a href="s_heritage.php"><b>Cultural Heritage</b></a></li>
        </ul>
      </li>
					<li class="divider-vertical"></li>
					<li class="dropdown" id="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color='black'><b>Services</b><span class="caret"></span></font></a>
        <ul class="dropdown-menu" >
         
          <li><a href="phrasebook.php"><b>Phrasebook</b></a></li>
          <li><a href="emergency.php"><b>Emergency Contacts</b></a></li>
		   <li><a href="tips.php"><b>Travel Tips</b></a></li>
        </ul>
      </li>
					<li class="divider-vertical"></li>
                    <li class="dropdown" id="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color='black'><b>About Nepal </b><span class="caret"></span></font></a>
        <ul class="dropdown-menu" >
         <li><a href="history.php"><b>History</b></a></li>
          <li><a href="wildlife.php"><b>WildLife</b></a></li>
         <li><a href="culture.php"><b>Culture</b></a></li>
		    <li><a href="festivals.php"><b>Festivals</b></a></li>
        </ul>
      </li>
					 <li class="divider-vertical"></li> </ul>
				<ul class="nav navbar-nav navbar-right">
	<li>
	<form class="navbar-form" role="search" id="search" method="get" action="searchsujen.php">
        <div class="input-group" width="100px">
            <input type="text" name="name" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
               <button type="submit" id="s" class="btn btn-default">
        <span class="glyphicon glyphicon-search">
      </button></font>
        </div>
		</div>
        </form>
		</li>			
				<li class="divider-vertical"></li>

					 
            </ul>   
            </div>
        </div>
    </div><!---End of nav bar2-->
	
	</br></br>
<!---Starting of ImageSliding--->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner"  role="listbox">
    <div class="item active" id="myId">
	
      <img src="upload/nep.jpg" alt="Flower"  >
	  <div class="carousel-caption">
        
        <p><h1><a href="annapurnamap.php">Annapurna Himalayan Range</a></h1></p>
      </div>
    </div>

    <div class="item" id="myId1" >
      <img src="upload/nep3.jpg" alt="Nature" >
	  <div class="carousel-caption">
        
        <p><h1><a href="janakpurmap.php">Janakpur Mandir</h1></p>
      </div>
    </div>

    <div class="item" id="myId2">
      <img src="upload/nep1.jpg" alt="Flower" >
	  <div class="carousel-caption">
        
        <p><h1><a href="namchemap.php">Namche Bazar</h1></p>
      </div>
    </div>

    <div class="item" id="myId3">
      <img src="upload/nep6.jpg" alt="Nature">
	  <div class="carousel-caption">
        
        <p><h1><a href="swoyambhumap.php">SwoyambhuNath Stupa</h1></p>
      </div>
    </div>
	
	
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
   <font color='#ffb302'> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></font>
    <font color='#ffb302'><span class="sr-only">Previous</span></font>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
   <font color='#ffb302'>  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></font>
   <font color='#ffb302'>  <span class="sr-only">Next</span></font>
  </a>
</div>

</br>
<!--- Footer--->

  <div class="container">
			<div class="row" > <!--Starting of image Gallery--->

</div>
</div>







<div class="w3-content" style="max-width:1500px">

<div class="w3-container w3-padding-32 w3-center w3-opacity w3-margin-bottom">
 
  <div class="w3-clear"></div>
   <h1>OUR GALLERY</h1>
  <p class="w3-padding-16"><button class="w3-btn" onclick="myFunction()">Toggle Grid Padding</button></p>
</div>

<!-- Photo Grid -->
<div id="myGrid">
  <div class="w3-third">
    <img src="upload\nep4.jpg" style="width:100%">
	
	 <img src="upload\nepal16.jpg" style="width:100%">
    <img src="upload\nep3.jpg" style="width:100%">
   
  
	
    
   
  </div>

  <div class="w3-third">
    <img src="upload\nep7.jpg" style="width:100%">
    
	<img src="upload\nepal16.jpg" style="width:100%">
    <img src="upload\nep3.jpg" style="width:100%">
    <img src="upload\nep8.jpg" style="width:100%">
    <img src="upload\nep6.jpg" style="width:100%">
   
  </div>

  <div class="w3-third">
    <img src="upload\nepal13.jpg" style="width:100%">
      <img src="upload\nep10.jpg" style="width:100%">
	   <img src="upload\nep11.jpg" style="width:100%">
      <img src="upload\nepal14.jpg" style="width:100%">
      <img src="upload\nepal15.jpg" style="width:100%">
     
    
  </div>
  </div>
</div>
<!-- Clear floats -->
<div class="w3-clear"></div><br><br>
<script>
// Toggle grid padding
function myFunction() {
    var x = document.getElementById("myGrid");
    if (x.className.indexOf("w3-row-padding") == -1) {
        x.className += " w3-row-padding";
    } else {
        x.className = x.className.replace(" w3-row-padding", "");
    }
}

// Open and close sidenav

</script>

<script>
 $(function(){
		 $("#myId").hover(function() {
        $(this).css('cursor','pointer').attr('title', 'Annapurna Himalayan Range');
    }, function() {
        $(this).css('cursor','auto');
    });
});

 </script>
	
	
	
	<script>
 $(function(){
		 $("#myId1").hover(function() {
        $(this).css('cursor','pointer').attr('title', 'Janakpur Mandir');
    }, function() {
        $(this).css('cursor','auto');
    });
});

 </script>

 
 
 <script>
 $(function(){
		 $("#myId2").hover(function() {
        $(this).css('cursor','pointer').attr('title', 'Namche Bazar');
    }, function() {
        $(this).css('cursor','auto');
    });
});

 </script>
 
 
 <script>
 $(function(){
		 $("#myId3").hover(function() {
        $(this).css('cursor','pointer').attr('title', 'SwoyambhuNath Stupa');
    }, function() {
        $(this).css('cursor','auto');
    });
});

 </script>


<div class="navbar navbar-inverse "><!---Beginning of nav bar2-->
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand logo"></div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li><a href="#"><font color='#de8121'><b>TRAVEL WITH ME </font>&nbsp; |</b></a></li>
                <li class="divider-vertical"></li>
                <li><a href="about.php"><font color='white'><b>About Us &nbsp; |</font></b></a></li>
				 <li class="divider-vertical"></li> 
				 <li><a href="#"> <font color='white'><b>Explore Nepal</font></b></a></li>
				 </ul>
				<ul class="nav navbar-nav navbar-right">
	<li><a href="#"> <font color='white'><b><span class="glyphicon glyphicon-copyright-mark"></span>2016. Urshimilishti.  All Rights Reserved.</font></b></a></li>
            </ul>
        </div> 
    </div>
</div> <!---End of nav bar1-->

</div> <!--- End of wrap--->

</body>
</html>
