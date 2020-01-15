<?php include ('Εύρεση-Βέλτιστης.php'); ?>
<!DOCTYPE html>
<html lang="el">

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
  
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 500px;
  margin: 0 auto;
  
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -13px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: -50%;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -13px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: rgb(197, 211, 255);
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
</style>


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Βέλτιστη-Διαδρομή</title>

    <!-- Favicon -->
    <link rel="icon" href="img/logo.png">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
   <!-- <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form  autocomplete="off" style="width:450px;" action="#" method="get" >
						<a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true" style="color: white;" > Αναζήτηση</i></a>
							<input type="input" name="myCountry" id="myInput" placeholder="Αναζήτηση.." onchange="location = this.value + '.php';">
							<input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
       <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="Βέλτιστη-Διαδρομή.php"><img src="img/logo.png" style="width:4em; height:4em;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="Βέλτιστη-Διαδρομή.php">Αρχική <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Δρομολόγια <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Μετρό <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(230px, 0px, 0px); top: 4px; left: 0px; will-change: transform;" >
                                                <a class="dropdown-item" href="Μετρό-Στάσεις.php">Στάσεις</a>
												<a class="dropdown-item" href="Μετρό-Ωράριο.php">Ωράριο</a>
											</div>
										</a>
                                        <a class="dropdown-item" href="#">Τραμ</a>
                                        <a class="dropdown-item" href="#">Ηλεκτρικός Σιδηρόδρομος</a>
                                        <a class="dropdown-item" href="#">Προαστιακός</a>
                                        <a class="dropdown-item" href="#">Τρόλεϊ</a>
										<a class="dropdown-item" href="#">Λεωφορεία</a>
                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εισιτήρια <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="Αγορά-Επαναφόρτιση.php">Ηλεκτρονική Αγορά/Επαναφόρτιση</a>
                                        <a class="dropdown-item" href="Δικαιολογητικά-Έκδοσης-Εισιτηρίων.php">Δικαιολογητικά Έκδοσης AthenaCard</a>
                                        <a class="dropdown-item" href="Τιμές-Εισιτηρίων.php">Τιμές Εισιτηρίων</a>
                                        <a class="dropdown-item" href="Σημεία-Έκδοσης-Επαναφόρτισης.php">Σημεία Έκδοσης/Επαναφόρτισης Καρτών/Εισιτηρίων</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ΑΜΕΑ <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
									<a class="dropdown-item" href="amea.php">Πληροφορίες για ΑΜΕΑ</a>	
                                        <a class="dropdown-item" href="#">Ανελκυστήρες</a>
										
										<a class="dropdown-item" <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Στάσεις με Προεξοχές <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(230px, 30px, 0px); top: 4px; left: 35px; will-change: transform;" >
                                                <form action="#" method="get">
												<select  class="sel" size=10 onchange="window.location = this.value;" >
													<option value="#" selected>Επιλέξτε Δήμο...</option>
													<option value="#">Δήμος Αγίας Βαρβάρας</option>
													<option value="#">Δήμος Αγίου Δημήτριου</option>
													<option value="#">Δήμος Αθηνών</option>
													<option value="#">Δήμος Ελληνικού-Αργυρούπολης</option>
													<option value="#">Δήμος Αχαρνών</option>
													<option value="#">Δήμος Βύρωνα</option>
													<option value="#">Δήμος Γλυφάδας</option>
													<option value="#">Δήμος Δάφνης-Υμηττού</option>
													<option value="#">Δήμος Ζωγράφου</option>
													<option value="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Ηλιούπολη.php">Δήμος Ηλιούπολης</option> 
													<option value="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Καισαριανή.php">Δήμος Καισαριανής</option>
													<option value="#">Δήμος Καλλιθέας</option>
													<option value="#">Δήμος Μελλισίων</option>
													<option value="#">Δήμος Νέας Σμύρνης</option>
													<option value="#">Δήμος Νέας Χαλκηδόνας-Νέας Φιλαδέφλιας</option>
													<option value="#">Δήμος Νίκαιας</option>
													<option value="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Παπάγος.php">Δήμος Παπάγου-Χολαργού</option>
													<option value="#">Δήμος Παλαιού Φαλήρου</option>
													<option value="#">Δήμος Πειραιά</option>
													<option value="#">Δήμος Περάματος</option>
													<option value="#">Δήμος Περιστερίου</option>
													<option value="#">Δήμος Πετρούπολης</option>
												</select>
                                            </form>   
											</div>
										
                                        <a class="dropdown-item" href="#">Οδηγίες Προσέγγισης στα ΜΜΜ</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Ανακοινώσεις</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Επικοινωνία</a>
                                </li>
                            </ul>
                            <?php
                            $db=mysqli_connect('localhost','root','','test');
                            $query42="SELECT `email` FROM `users` WHERE flag='1'";
                            $result=mysqli_query($db,$query42);
                            if(mysqli_num_rows($result)==1){
                                
                            ?>
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i>Αναζήτηση</a>
                            </div>
                            <div class="content">
                                       <style>
                                       p{
                                           margin: 0;
                                       }
                                       </style>
                                      
                                            <p><a style="color:white;">Καλωσήρθες</p> 
                                            <p><strong><?php echo $_SESSION['email']; ?></a></strong></p>
                                            <p><a href="Βέλτιστη-Διαδρομή.php?logout='0' " style="color:red;">Αποσύνδεση</a></p>
                                            <p><a href="edit.php" name="edit" style="color:navy;" >Επεξεργασία Προφίλ</a></p>
                            </div>
                            <?php } else { ?>
                            <!-- Search btn -->
                            <?php 
                            if(isset($_POST['login'])){ ?>
                                <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i>Αναζήτηση</a>
                            </div>
                          
                            <div class="content" method="post" action="">
                                       <style>
                                       p{
                                           margin: 0;
                                       }
                                       </style>
                                        <?php if(isset($_SESSION["email"])): ?>
                                            <p><a style="color:white;">Καλωσήρθες</p> 
                                            <p><strong><?php echo $_SESSION['email']; ?></a></strong></p>
                                            <p><a href="Βέλτιστη-Διαδρομή.php?logout='0'" style="color:red;">Αποσύνδεση</a></p>
                                            <p><a href="edit.php" name="edit" style="color:navy;" >Επεξεργασία Προφίλ</a></p>
                                        <?php endif ?>
                    </div>
                            <?php 
                            }
                            else { ?>
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i>Αναζήτηση</a>
                            </div>
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                                <a onclick="document.getElementById('id01').style.display='block'" style="font-style:normal; color:white; font-weight:600;">Είσοδος/Εγγραφή</a>
                            </div> 
						
                        <!--login-->
								<div id="id01" class="modal1">
								  
								  <form class="modal1-content animate" method="post" action="Βέλτιστη-Διαδρομή.php">
									<div class="imgcontainer">
									  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
									
									</div>
                                    <i style="font-weight:400; font-style:normal; font-size:20px; padding-left:18px;">Δεν είσαι μέλος;<a onclick="document.getElementById('id02').style.display='block'"><i style="color:lightblue; font-style:normal; font-size:20px;"> Εγγραφή</i></a></i>
									<div class="container">
                                      
									  <label for="uname" style="font-weight:400; font-size:20px;"><b>E-mail</b></label>
									  <input class="input1" type="text" style="color:lightgray" name="email" required>

									  <label for="psw" style="font-weight:400; font-size:20px;"><b>Κωδικός</b></label>
									  <input class="input1" type="password" id="psw1" name="password" required>
                                      <input type="checkbox" id="pwcheck"><i style="font-weight:400; font-size:20px; font-style:normal;">Δείξε μου τον κωδικό!</i></input>
                                      <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
                                      <script>
$(document).ready(function(){

    $("#psw1").focus();

    $("#pwcheck").click(function(){
        if ($("#pwcheck").is(":checked"))
        {
            $("#psw1").clone()
            .attr("type", "text").insertAfter("#psw1")
            .prev().remove();
        }
        else
        {
            $("#psw1").clone()
            .attr("type","password").insertAfter("#psw1")
            .prev().remove();
        }
    });
});
</script>
										
									  <button id='signup-button' type="submit" name="login" style="font-weight:400; font-size:20px;">Σύνδεση</button>
									  <br>
                                        
										<input type="checkbox" name="remember"><i style="font-weight:400; font-style:normal; font-size:20px;"> Θυμήσου με!</i>
                                        
									
									</div>

									<div class="container" style="background-color:#f1f1f1">
                                      
									  <button id='cancelbtn' type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Ακύρωση</button>
                                     
									  <span class="psw" >Ξέχασες τον <a href="#">κωδικό</a> σου;</span>
									</div>
								  </form>
								</div>
                            </div>
                            
                            <!--signup-->
                            <div id="id02" class="modal1">
								  
								  <form class="modal1-content animate" method="post" action="Βέλτιστη-Διαδρομή.php"
                                  oninput='password2.setCustomValidity(password2.value != password1.value ? "Οι κωδικοί δεν ταιριάζουν." : "")'>
									<div class="imgcontainer">
									  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
									  
									</div>
                                    
									<div class="container">
                                      
									  <label for="email" style="font-weight:400; font-size:20px;"><b>E-mail:</b></label>
									  <input class="input1" type="text" style="color:lightgray; color: rgb(169,169,169)" placeholder="name@example.com" name="email" required>

									  <label for="psw" style="font-weight:400; font-size:20px;"><b>Κωδικός:</b></label>
                                      <input type="password" id="psw" class="input1" name="password1" required>
									<div id="message" style="margin: 0;">
  <i style="font-style:normal; font-size:18px; font-family:'Open sans',sans serif;">Ο κωδικός πρέπει να περιέχει τα ακόλουθα:</i>
  
  <p style="margin:0;" id="letter" class="invalid">Ένα μικρό γράμμα</p>
  <p style="margin:0;" id="capital" class="invalid">Ένα κεφαλαίο γράμμα</p>
  <p style="margin:0;" id="number" class="invalid">Έναν αριθμό</p>
  <p style="margin:0;" id="length" class="invalid">Τουλάχιστον 8 χαρακτήρες</p>
  </div>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

									  <label for="psw" style="font-weight:400; font-size:20px;"><b>Επαλήθευση κωδικού:</b></label>
									   <input class="input1" type="password" name="password2" required>
									  
									  <button id='signup-button' name="register" type="submit" style="font-weight:400; font-size:20px;">Εγγραφή</button>
									  <br>
                                        
										<input type="checkbox" name="remember"><i style="font-weight:400; font-style:normal; font-size:20px;"> Θυμήσου με!</i>
									</div>

									<div class="container" style="background-color:#f1f1f1">
                                      
									  <button id='cancelbtn' type="button" onclick="document.getElementById('id02').style.display='none'" style="color:black;" class="cancelbtn">Ακύρωση</button>
                                    
									</div>
                                    
								  </form>
								</div>
                            
                            <!-- Add listings btn -->
                           

                        </div>
                    </nav>
                    
				
					<nav class="h-30 navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                    <a class="nav-link" href="Βέλτιστη-Διαδρομή.php" style="font-weight: bold; font-size:18px; ">Αρχική </a>
									<a class="nav-link" href=""> > </a>
									<a class="nav-link" href="Χαλάνδρι-ΝέαΣμύρνη.php"><span style="color:rgba(0, 85, 132,1); font-weight: bold; font-size:18px; ">Βέλτιστη-Διαδρομή</span></a>
                    </nav>
                    <?php 
                            } 
                            ?>
                            <?php 
                            } 
                            ?>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
	
	<section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/background.jpg);">
	
		<br><br><br>
		<h2 style=" text-align: center">Σημείο Αναχώρησης: Πάρκο, Νέας Σμύρνης</h2>
		<h2 style=" text-align: center">Σημείο Προορισμού: Παλαιολόγου 83, Χαλάνδρι</h2>
	
	
	
	
            <div class="row h-100 align-items-center justify-content-center" style="margin-left: 140px;">
                <div class="col-12 col-md-10">
                   
                    <div class="hero-search-form" style="width: 1000px">
                        <!-- Tabs -->
						
                        <div class="nav nav-tabs" id="heroTab" role="tablist" >
						
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true" style="width: 50%">Βέλτιστη Διαδρομή  ( 46 λεπτά )</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false" style="width: 50%">Εναλλακτική Διαδρομη  ( 52 λεπτά )</a>
                        </div>
						
						<div class="tab-content" id="nav-tabContent" style="margin-top: 0px" >
						<div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab" >
                        
							<div class="timeline">
								  <div class="container left">
									<div class="content">
									  <?php
									  
										$db=mysqli_connect('localhost','root','','test');
									
							
										$sql = "SELECT * FROM neasmirnichalandri";
										$result = $db->query($sql);
										while($row = $result->fetch_assoc()) { 
											if($row["id"]==1)
												echo  "Από: &nbsp  " . $row["anaxwrhsh"]."</br></br>" . $row["meso"] ." &nbsp&nbsp" . $row["wra"]. " λεπτά, " . $row["staseis"]. "</br></br> Έως: &nbsp  " . $row["proorismos"] ."</br>" ;
										}
									  mysqli_close($db);
									  ?>
									</div>
								  </div>
								  <div class="container right">
									<div class="content">
									  <?php
									  
										$db=mysqli_connect('localhost','root','','test');
									
							
										$sql = "SELECT * FROM neasmirnichalandri";
										$result = $db->query($sql);
										while($row = $result->fetch_assoc()) { 
											if($row["id"]==2)
												echo  "Από: &nbsp  " . $row["anaxwrhsh"]."</br></br>" . $row["meso"] ." &nbsp&nbsp" . $row["wra"]. " λεπτά, " . $row["staseis"]. "</br></br> Έως: &nbsp  " . $row["proorismos"] ."</br>" ;
										}
									  mysqli_close($db);
									  ?>
									</div>
								  </div>
								  <div class="container left">
									<div class="content">
									  <?php
									  
										$db=mysqli_connect('localhost','root','','test');
									
							
										$sql = "SELECT * FROM neasmirnichalandri";
										$result = $db->query($sql);
										while($row = $result->fetch_assoc()) { 
											if($row["id"]==3)
												echo  "Από: &nbsp  " . $row["anaxwrhsh"]."</br></br>" . $row["meso"] ." &nbsp&nbsp" . $row["wra"]. " λεπτό, " . $row["staseis"]. "</br></br> Έως: &nbsp  " . $row["proorismos"] ."</br>" ;
										}
									  mysqli_close($db);
									  ?>
									</div>
								  </div>
								  <div class="container right">
									<div class="content">
									  <?php
									  
										$db=mysqli_connect('localhost','root','','test');
									
							
										$sql = "SELECT * FROM neasmirnichalandri";
										$result = $db->query($sql);
										while($row = $result->fetch_assoc()) { 
											if($row["id"]==4)
												echo  "Από: &nbsp  " . $row["anaxwrhsh"]."</br></br>" . $row["meso"] ." &nbsp&nbsp" . $row["wra"]. " λεπτά, " . $row["staseis"]. "</br></br> Έως: &nbsp  " . $row["proorismos"] ."</br>" ;
										}
									  mysqli_close($db);
									  ?>
									</div>
								  </div>
								  <div class="container left">
									<div class="content">
									  <?php
									  
										$db=mysqli_connect('localhost','root','','test');
									
							
										$sql = "SELECT * FROM neasmirnichalandri";
										$result = $db->query($sql);
										while($row = $result->fetch_assoc()) { 
											if($row["id"]==5)
												echo  "Από: &nbsp  " . $row["anaxwrhsh"]."</br></br>" . $row["meso"] ." &nbsp&nbsp" . $row["wra"]. " λεπτά, " . $row["staseis"]. "</br></br> Έως: &nbsp  " . $row["proorismos"] ."</br>" ;
										}
									  mysqli_close($db);
									  ?>
									</div>
								  </div>
								  
								</div>
								</div>
							
                            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
								<div class="timeline">
								  <div class="container left">
									<div class="content">
									  <?php
									  
										$db=mysqli_connect('localhost','root','','test');
									
							
										$sql = "SELECT * FROM neasmirnichalandri2";
										$result = $db->query($sql);
										while($row = $result->fetch_assoc()) { 
											if($row["id"]==1)
												echo  "Από: &nbsp  " . $row["anaxwrhsh"]."</br></br>" . $row["meso"] ." &nbsp&nbsp" . $row["wra"]. " λεπτά, " . $row["staseis"]. "</br></br> Έως: &nbsp  " . $row["proorismos"] ."</br>" ;
										}
									  mysqli_close($db);
									  ?>
									</div>
								  </div>
								  <div class="container right">
									<div class="content">
									  <?php
									  
										$db=mysqli_connect('localhost','root','','test');
									
							
										$sql = "SELECT * FROM neasmirnichalandri2";
										$result = $db->query($sql);
										while($row = $result->fetch_assoc()) { 
											if($row["id"]==2)
												echo  "Από: &nbsp  " . $row["anaxwrhsh"]."</br></br>" . $row["meso"] ." &nbsp&nbsp" . $row["wra"]. " λεπτά, " . $row["staseis"]. "</br></br> Έως: &nbsp  " . $row["proorismos"] ."</br>" ;
										}
									  mysqli_close($db);
									  ?>
									</div>
								  </div>
								  <div class="container left">
									<div class="content">
									  <?php
									  
										$db=mysqli_connect('localhost','root','','test');
									
							
										$sql = "SELECT * FROM neasmirnichalandri2";
										$result = $db->query($sql);
										while($row = $result->fetch_assoc()) { 
											if($row["id"]==3)
												echo  "Από: &nbsp  " . $row["anaxwrhsh"]."</br></br>" . $row["meso"] ." &nbsp&nbsp" . $row["wra"]. " λεπτό, " . $row["staseis"]. "</br></br> Έως: &nbsp  " . $row["proorismos"] ."</br>" ;
										}
									  mysqli_close($db);
									  ?>
									</div>
								  </div>
								  <div class="container right">
									<div class="content">
									  <?php
									  
										$db=mysqli_connect('localhost','root','','test');
									
							
										$sql = "SELECT * FROM neasmirnichalandri2";
										$result = $db->query($sql);
										while($row = $result->fetch_assoc()) { 
											if($row["id"]==4)
												echo  "Από: &nbsp  " . $row["anaxwrhsh"]."</br></br>" . $row["meso"] ." &nbsp&nbsp" . $row["wra"]. " λεπτά, " . $row["staseis"]. "</br></br> Έως: &nbsp  " . $row["proorismos"] ."</br>" ;
										}
									  mysqli_close($db);
									  ?>
									</div>
								  </div>
								  <div class="container left">
									<div class="content">
									  <?php
									  
										$db=mysqli_connect('localhost','root','','test');
									
							
										$sql = "SELECT * FROM neasmirnichalandri2";
										$result = $db->query($sql);
										while($row = $result->fetch_assoc()) { 
											if($row["id"]==5)
												echo  "Από: &nbsp  " . $row["anaxwrhsh"]."</br></br>" . $row["meso"] ." &nbsp&nbsp" . $row["wra"]. " λεπτά, " . $row["staseis"]. "</br></br> Έως: &nbsp  " . $row["proorismos"] ."</br>" ;
										}
									  mysqli_close($db);
									  ?>
									</div>
								  
								  
								</div>
								
							</div>
						
						</div>
							
					</div>
						
                   </div>
                </div>
            </div>
        
		
	</section>
	
	<script>
	
	function autocomplete(inp, arr) {
  
  var currentFocus;
  
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
     
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      
      this.parentNode.appendChild(a);
      
      for (i = 0; i < arr.length; i++) {
        
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          
          b = document.createElement("DIV");
          
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          
          b.addEventListener("click", function(e) {
              
              inp.value = this.getElementsByTagName("input")[0].value;
              
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        
        currentFocus++;
       
        addActive(x);
      } else if (e.keyCode == 38) { //up
        
        currentFocus--;
        
        addActive(x);
      } else if (e.keyCode == 13) {
        
        e.preventDefault();
        if (currentFocus > -1) {
         
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
   
    if (!x) return false;
    
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
   
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
   
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

var countries = ["Μετρό-Ωράριο","Τραμ", "ΜΜΜ","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Καισαριανή","Μετρό-Στάσεις","Αγορά-Επαναφόρτιση", "Τιμές-Εισιτηρίων","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Παπάγος","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Ηλιούπολη","Βέλτιστη-Διαδρομή"];


autocomplete(document.getElementById("myInput"), countries);

</script>
	
	 <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>