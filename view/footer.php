<html>
<head>		
		
		<!-- Bootstrap CSS -->
		<link href="../public/css/bootstrap.min.css" rel="stylesheet">	
		<!-- Font awesome CSS -->
		<link href="../public/css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="../public/css/style-color.css" rel="stylesheet">
		<!-- Styles -->
		<link rel="stylesheet" href="../public/css/bootstrap.min.css">
		<link rel="stylesheet" href="../public/css/fontawesome.min.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link rel="stylesheet" href="../public/css/footer.css">
		<!-- Favicon -->
		<link rel="shortcut icon" href="../public/img/logo/favicon.ico">
    
</head>
<body>
    <!-- contact -->
			<div class="contact pad" id="contact">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2 style="text-align:center">Contact Us</h2>
					</div>
					<div class="row">	
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-street-view"></i>
								<!-- contact details  -->
								<span class="contact-details"> Rue Laayoune Assa Zag 81006 Maroc </span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item">
								<!-- big icon -->
								<i class="fa fa-wifi"></i>
								<!-- contact details  -->
								<span class="contact-details">stelatif@outlook.com</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-phone"></i>
								<!-- contact details  -->
								<span class="contact-details">(+212) 06- 61 11 89 06</span>
							</div>
						</div>
					</div>

					<!-- form content -->
					<div class="form-content ">
						<!-- paragraph -->
						<p>Avez-vous une idée en tête? Écrivez-nous.</p>
						<!------ start insert data contact ------>
						<?php
							// include_once "../model/insertcontact.php";

							// if(isset($_POST['sub'])){

							// 	$name = $_POST['name'];
							// 	$email = $_POST['email'];
							// 	$phone = $_POST['phone'];
							// 	$message = $_POST['message'];
							// 	$object = new insertcontact();
							// 	$object->savecontact($name,$email,$phone,$message);

								
							// }
							?>
							<!------  end insert data contact ------>

						<form method="POST" action="">
							<div role="form" id="contactForm">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="name">Nom</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
									</div>
									<div class="form-group">
										<label for="phone">téle</label>
										<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="message">Message</label>
										<textarea class="form-control" id="message" name="message" rows="9" placeholder="Enter message" required></textarea>
									</div>
								</div>
							</div>
							<div class="text-center">
								<button type="submit" name="sub" onclick="clickEvent()" class="btn btn-lg btn-theme">envoyer le message</button>
							</div>
							</div>						
							</div>
						</div>
					</form>
			<br><br><br>
			<!-- contact end -->
			
			<!-- footer -->
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-12">
							<a href="index.html" class="logo"><img src="../public/img/logo/logoFR.png" style="position: absolute;top: -131px;width: 371px;right: -43px;" alt="#" /></a>
						</div>
						<div class="col-lg-9 col-12">
							<div class="row">
								<div class="col-md-4 col-12">
									<i class="fas fa-map-marker-alt fa-2x"></i>
                                    <span> Rue Laayoune Assa Zag 81006 Maroc    </span>
								</div>
								<div class="col-md-4 col-12">
									<i class="fas fa-phone fa-2x"></i>
									<span>(+212) 06- 61 11 89 06</span>
								</div>
								<div class="col-md-4 col-12">
									<i class="fas fa-envelope fa-2x"></i>
									<span> stelatif@outlook.com </span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="item">
								<h4 class="text-capitalize">À propos  De Nous</h4>
								<p>societé Latif Trav C'est une entreprise marocaine œuvrant dans le domaine des travaux publics et de la construction, ainsi que tous les autres services liés aux grands travaux, installation, eau, électricité, énergie solaire, transport, équipement et logistique, décoration et design ...</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="item">
								<ul class='text-capitalize main-list'>
									<li><a href="index.php">home</a></li>
									<li><a href="contact.php">contact us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="item">
								<h4 class="text-capitalize">Heures d'ouverture</h4>
								<ul class="text-capitalize">
									<li><a href="#">Lundi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 18:00</a></li>
									<li><a href="#">Mardi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 18:00</a></li>
									<li><a href="#">Mercredi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 18:00</a></li>
									<li><a href="#">Jeudi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 18:00</a></li>
									<li><a href="#">Vendredi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 18:00</a></li>
									<li><a href="#">Samedi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 18:00</a></li>
									<li><a href="#">Dimanche &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; fermé</a></li>
								</ul>
							</div>
						</div>
						
						<?php
							include_once "../model/ClassAffichOffrs.php";

							if(isset($_POST['sube'])){
								$email = $_POST['email'];

								$object = new affiche();
								$object->InsertEmail($email);
							      }
							?>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="item">
								<h4 class="text-capitalize">envoyer votre email</h4>
								<form method="POST" action="">
									<input type="text" name="email" placeholder="Enter your email" required>
									<input type="submit" name="sube" value="Envoyer">
								</form>
							</div>
						</div>
					</div>
					<ul class="social-media">
						<li><a href="https://www.facebook.com/AUTO-ECOLE-Safina-1952042615105492/"><i class="fab fa-facebook-square fa-2x"></i></a></li>
						<li><a href="https://mail.google.com/mail/u/2"><i class="fab fa-google-plus-square fa-2x"></i></a></li>
					    </ul>
					<div class="copyright">
						<p> HTmedia 2020 tout les droit © se sans reservez</p>
					</div>
				</div>
			</footer> 
			
			 
</body>
</html>