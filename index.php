<html lang="en-US"><head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lukas Kritsotakis</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link href="css/aos.css?ver=1.1.0" rel="stylesheet">
<link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
<link href="css/main.css?ver=1.1.0" rel="stylesheet">
<noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
</head>
<body id="top" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" data-new-gr-c-s-check-loaded="14.979.0" data-gr-ext-installed="">
	<header>
		<div class="profile-page sidebar-collapse">
			<nav class="navbar navbar-expand-lg fixed-top bg-primary navbar-transparent" color-on-scroll="400">
				<div class="container">
					<div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip" data-original-title="" title="">Lukas</a>
						<button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
					</div>
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<ul class="navbar-nav">
							<li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
							<li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
							<li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Erfahrung</a></li>
							<li class="nav-item"><a class="nav-link smooth-scroll" href="#education">Ausbildung</a></li>
							<li class="nav-item"><a class="nav-link smooth-scroll" href="#projects">Projekte</a></li>
							<li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Kontakt</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<div class="page-content">
		<div>
			<div class="profile-page">
			<div class="wrapper">
			<div class="page-header page-header-small" filter-color="green">
			<div class="page-header-image" data-parallax="true" style="background-image: url(&quot;images/cc-bg-1.jpg&quot;); transform: translate3d(0px, 0px, 0px);"></div>
			<div class="container">
			<div class="content-center">
			<div class="cc-profile-image"><a href="#"><img src="images/lukas.jpg" alt="Image"></a></div>
			<div class="h2 title">Lukas Kritsotakis</div>
			<p class="category text-white">Hobby Developer, IT-Techniker, Elektriker</p>
			<a class="btn btn-primary smooth-scroll mr-2 aos-init aos-animate" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Kontakt</a>
			<a class="btn btn-primary aos-init aos-animate" href="lebenslauf.pdf" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
			</div>
			</div>
			<div class="section">
			<div class="container">
			<div class="button-container">
			<!--	maybe in future 

			<a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="" data-original-title="Follow me on Facebook"><i class="fa fa-facebook"></i></a>
				<a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="" data-original-title="Follow me on Twitter"><i class="fa fa-twitter"></i></a>
				<a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="" data-original-title="Follow me on Google+"><i class="fa fa-google-plus"></i></a>
				<a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="" data-original-title="Follow me on Instagram"><i class="fa fa-instagram"></i></a>
			-->
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="section" id="about">
			<div class="container">
			<div class="card aos-init aos-animate" data-aos="fade-up" data-aos-offset="10">
			<div class="row">
			<div class="col-lg-6 col-md-12">
			<div class="card-body">
			<div class="h4 mt-0 title">About</div>
			<p>Hallo! Ich bin Lukas . Developer und IT-Techniker</p>
			<!--<p> CV ist ein HTML-Lebenslauf. Diese moderne und reaktionsschnelle Design wurde mit Bootstrap 4, Now UI Kit und FontAwesome erstellt und ist perfekt, um meine Projects,  Fähigkeiten und Erfahrung zu präsentieren.</p>-->
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="card-body">
			<div class="h4 mt-0 title">Information</div>
			<div class="row">
			<div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
			<div class="col-sm-8">
			<?php

			  $jahr_diff  = date("Y") - 2004;
			  $monat_diff = date("m") - 12;
			  $tag_diff   = date("d") - 20;
			  if( ($monat_diff<0) || ($monat_diff==0 && $tag_diff<0) )
				$jahr_diff--;
			  echo $jahr_diff;

			?>
			<!-- --Genutzte Funktion:
			  $jahr_diff  = date("Y") - 2004;
			  $monat_diff = date("m") - 12;
			  $tag_diff   = date("d") - 20;
			  if( ($monat_diff<0) || ($monat_diff==0 && $tag_diff<0) )
				$jahr_diff--;
			  echo $jahr_diff;
			  -- -->
			</div>
			</div>
			<div class="row mt-3">
			<div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
			<div class="col-sm-8">lukas.kritsotakis@gmail.com</div>
			</div>
			<div class="row mt-3">
			<div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
			<div class="col-sm-8">+43-664-503-1108</div>
			</div>
			<div class="row mt-3">
			<div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
			<div class="col-sm-8">Reichenauer Straße 92c, Innsbruck, Österreich</div>
			</div>
			<div class="row mt-3">
			<div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
			<div class="col-sm-8">German</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>

			<div class="section" id="skill">
				<div class="container">
					<div class="h4 text-center mb-4 title"> Skills</div>
					<div class="card aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="progress-container progress-primary"><span class="progress-badge">Java</span>
										<!--<div class="progress">
											<div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div><span class="progress-value">50%</span>
										</div>-->
									</div>
								</div>
								<div class="col-md-6">
									<div class="progress-container progress-primary"><span class="progress-badge">C++</span>
										<!--<div class="progress">
											<div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div><span class="progress-value">50%</span>
										</div>-->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="progress-container progress-primary"><span class="progress-badge">HTML, PHP, CSS, JS</span>
										<!--<div class="progress">
											<div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div><span class="progress-value">50%</span>
										</div>-->
									</div>
								</div>
								<div class="col-md-6">
									<div class="progress-container progress-primary"><span class="progress-badge">C#</span>
										<!--<div class="progress">
											<div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div><span class="progress-value">20%</span>
										</div>-->
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-md-6">
							<div class="progress-container progress-primary"><span class="progress-badge">Lua</span>
							<div class="progress">
							<div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div><span class="progress-value">30%</span>
							</div>
							</div>
							</div>
							<div class="col-md-6">
							<div class="progress-container progress-primary"><span class="progress-badge">NULL</span>
							<div class="progress">
							<div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div><span class="progress-value">0%</span>
							</div>
							</div>
							</div>
							</div>
							<div class="row">
							<div class="col-md-6">
							<div class="progress-container progress-primary"><span class="progress-badge">NULL</span>
							<div class="progress">
							<div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div><span class="progress-value">0%</span>
							</div>
							</div>
							</div>
							<div class="col-md-6">
							<div class="progress-container progress-primary"><span class="progress-badge">NULL</span>
							<div class="progress">
							<div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div><span class="progress-value">0%</span>
							</div>
							</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section" id="experience">
			<div class="container cc-experience">
			<div class="h4 text-center mb-4 title">Arbeitserfahrung</div>

			<div class="card">
				<div class="row">
					<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
						<div class="card-body cc-experience-header">
							<p>08.11. - 07.12.2023</p>
							<div class="h5"></div>
						</div>
					</div>
					<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
						<div class="card-body">
							<div class="h5">ÖWD Österreichischer Wachdienst security GmbH & Co KG, Innsbruck</div>
							<p class="category">Arbeiter</p>
							<p>Tätigkeiten: Wachdienst, Portier</p>
						</div>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="row">
					<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
						<div class="card-body cc-experience-header">
							<p>01.09. - 30.09.2023</p>
							<div class="h5"></div>
						</div>
					</div>
					<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
						<div class="card-body">
							<div class="h5">Serleslifte Mieders GmbH & Co KG, Mieders</div>
							<p class="category">Arbeiter</p>
							<p>Tätigkeiten: Mitarbeit Sommerrodelbahn, Revisionen, Mitarbeit Seilbahn</p>
						</div>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="row">
					<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
						<div class="card-body cc-experience-header">
							<p>24.05. - 18.07.2023</p>
							<div class="h5"></div>
						</div>
					</div>
					<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
						<div class="card-body">
							<div class="h5">Österreichische Post AG, Innsbruck</div>
							<p class="category">Zusteller</p>
							<p>Tätigkeiten: Briefe Sortieren, Zustellen,</p>
						</div>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="row">
					<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
						<div class="card-body cc-experience-header">
							<p>13.03 - 30.04.2023</p>
							<div class="h5"></div>
						</div>
					</div>
					<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
						<div class="card-body">
							<div class="h5">Bremetall Sonnenschutz GmbH, Thaur</div>
							<p class="category">Sonnenschutztechniker</p>
							<p>Tätigkeiten: Fenstermarkisen zusammenbauen, verpacken,</p>
						</div>
					</div>
				</div>
			</div>


			<div class="card">
				<div class="row">
					<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
						<div class="card-body cc-experience-header">
							<p>12.10.2020 - 12.03.2021</p>
							<div class="h5"></div>
						</div>
					</div>
					<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
						<div class="card-body">
							<div class="h5">Allgemeine Lehrgänge §30b BAG, die Berater GmbH, Innsbruck</div>
							<p class="category">Kurs</p>
							<p>Kursinhalte: Bewerbungstraining, Berufsorientierung, Kommunikationstraining</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
			<div class="row">
			<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body cc-experience-header">
			<p>05.08.2020</p>
			<div class="h5">1 Tag</div>
			</div>
			</div>
			<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body">
			<div class="h5">Sanatorium Kettenbrückeder Barmherzigen Schwestern GmbH</div>
			<p class="category">IT Techniker Praktikum</p>
			<p>Tätigkeiten: Hardware überprüft, Software Updates gemacht, Einführung in Servertechnik</p>
			</div>
			</div>
			</div>
			</div>
			<div class="card">
			<div class="row">
			<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body cc-experience-header">
			<p>März 2019</p>
			<div class="h5">5 Tage</div>
			</div>
			</div>
			<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body">
			<div class="h5">Barracuda Networks AG</div>
			<p class="category">IT Techniker Praktikum</p>
			<p>Tätigkeiten: Hardware repariert, Software repariert, Programmierung angeschaut</p>
			</div>
			</div>
			</div>
			</div>
			<div class="card">
			<div class="row">
			<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body cc-experience-header">
			<p>Oktober 2019</p>
			<div class="h5">2 Tage</div>
			</div>
			</div>
			<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body">
			<div class="h5">Telekom Austria AG</div>
			<p class="category">IT Techniker Praktikum</p>
			<p>Tätigkeiten: Hard-und Software repariert</p>
			</div>
			</div>
			</div>
			</div>
			<div class="card">
			<div class="row">
			<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body cc-experience-header">
			<p>Oktober 2019</p>
			<div class="h5">3 Tage</div>
			</div>
			</div>
			<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body">
			<div class="h5">Kufgem GmbH</div>
			<p class="category">Programmierer Praktikum</p>
			<p>Tätigkeiten: Programmierung angeschaut, Python programmiert, 3D Drucker benützt</p>
			</div>
			</div>
			</div>
			</div>
			<div class="card">
			<div class="row">
			<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body cc-experience-header">
			<p>April 2019</p>
			<div class="h5">3 Tage</div>
			</div>
			</div>
			<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body">
			<div class="h5">MED-EL Elektromedizinische Geräte Gesellschaft m. b. H.</div>
			<p class="category">IT Techniker Praktikum</p>
			<p>Tätigkeiten: Maschinen repariert, Maschinen erweitert, Lösungen gefunden</p>
			</div>
			</div>
			</div>
			</div>
			<div class="card">
			<div class="row">
			<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body cc-experience-header">
			<p>September 2019</p>
			<div class="h5">5 Tage</div>
			</div>
			</div>
			<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body">
			<div class="h5">Telekom Austria AG</div>
			<p class="category">IT Techniker Praktikum</p>
			<p>Tätigkeiten: Hard-und Software repariert, Lösungen gefunden</p>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>

			<div class="section" id="education">
			<div class="container cc-education">
			<div class="h4 text-center mb-4 title">Ausbildung</div>
			<div class="card">
			<div class="row">
			<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body cc-education-header">
			<p>09.2019 - 07.2020</p>
			<div class="h5"></div>
			</div>
			</div>
			<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body">
			<div class="h5">Polytechnischer Lehrgang, Innsbruck</div>
			<p class="category">Lehrgang</p>
			<p></p>
			</div>
			</div>
			</div>
			</div>
			<div class="card">
			<div class="row">
			<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body cc-education-header">
			<p>09.2018 - 07.2019</p>
			<div class="h5"></div>
			</div>
			</div>
			<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body">
			<div class="h5">Gabelsbergerstraße, Innsbruck</div>
			<p class="category">Neue Mittelschule</p>
			<p></p>
			</div>
			</div>
			</div>
			</div>
			<div class="card">
			<div class="row">
			<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body cc-education-header">
			<p>09.2015 - 07.2018</p>
			<div class="h5"></div>
			</div>
			</div>
			<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body">
			<div class="h5">Fritz Prior, Innsbruck</div>
			<p class="category">Neue Mittelschule</p>
			<p></p>
			</div>
			</div>
			</div>
			</div>
			<div class="card">
			<div class="row">
			<div class="col-md-3 bg-primary aos-init" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body cc-education-header">
			<p>09.2011 - 07.2015</p>
			<div class="h5"></div>
			</div>
			</div>
			<div class="col-md-9 aos-init" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
			<div class="card-body">
			<div class="h5">Franz Fischer, Innsbruck</div>
			<p class="category">Volksschule</p>
			<p></p>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>

			<!--<div class="section" id="reference">
			<div class="container cc-reference">
			<div class="h4 mb-4 text-center title">References</div>
			<div class="card aos-init" data-aos="zoom-in">
			<div class="carousel slide" id="cc-Indicators" data-ride="carousel">
			<ol class="carousel-indicators">
			<li class="" data-target="#cc-Indicators" data-slide-to="0"></li>
			<li data-target="#cc-Indicators" data-slide-to="1" class=""></li>
			<li data-target="#cc-Indicators" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner">
			<div class="carousel-item">
			<div class="row">
			<div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-1.jpg" alt="Image">
			<div class="h5 pt-2">Aiyana</div>
			<p class="category">CEO / WEBM</p>
			</div>
			<div class="col-lg-10 col-md-9">
			<p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
			</div>
			</div>
			</div>
			<div class="carousel-item active carousel-item-left">
			<div class="row">
			<div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-2.jpg" alt="Image">
			<div class="h5 pt-2">Braiden</div>
			<p class="category">CEO / Creativem</p>
			</div>
			<div class="col-lg-10 col-md-9">
			<p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
			</div>
			</div>
			</div>
			<div class="carousel-item carousel-item-next carousel-item-left">
			<div class="row">
			<div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-3.jpg" alt="Image">
			<div class="h5 pt-2">Alexander</div>
			<p class="category">CEO / Webnote</p>
			</div>
			<div class="col-lg-10 col-md-9">
			<p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>-->
			 <div class="section" id="projects">
				<div class="container">
					<div class="row">
						<div class="col-md-6 ml-auto mr-auto">
							<div class="h4 text-center mb-4 title">Projekte</div>
							<div class="nav-align-center">
								<ul class="nav nav-pills nav-pills-primary" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dev" role="tablist"><i class="fa fa-laptop" aria-hidden="true"></i></a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#technik" role="tablist"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="tab-content gallery mt-5">
						<div class="tab-pane active" id="dev">
							<div class="ml-auto mr-auto">
								<div class="row">
									<div class="col-md-6">
										<div class="cc-porfolio-image img-raised aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
											<a href="https://kretaoilveoil.com">
												<figure class="cc-effect"><img src="images/oil.jpg" alt="Image">
													<figcaption>
														<div class="h4">Kretaoilveoil</div>
														<p>test</p>
													</figcaption>
												</figure>
											</a>
										</div>
										<div class="cc-porfolio-image img-raised aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
											<a href="https://blocify.luderas.com/">
												<figure class="cc-effect"><img src="images/blocify.jpg" alt="Image">
													<figcaption>
														<div class="h4">Blocify</div>
														<p>Blocify revolutioniert die Art und Weise, wie Nachbarn miteinander interagieren und sich vernetzen. Mit dieser innovativen App können Bewohner von Wohnblöcken problemlos in Kontakt treten und Informationen austauschen, sei es für spontane Hilfe, Veranstaltungsplanung oder einfach nur, um Neuigkeiten zu teilen.</p>
													</figcaption>
												</figure>
											</a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="cc-porfolio-image img-raised aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
											<a href="https://nextcloud.luderas.com/">
												<figure class="cc-effect"><img src="images/nextcloud.png" alt="Image">
													<figcaption>
														<div class="h4">Nextcloud</div>
														<p>Self Hosted Cloud</p>
													</figcaption>
												</figure>
											</a>
										</div>
										<div class="cc-porfolio-image img-raised aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
											<a href="https://vaultwarden.luderas.com/">
												<figure class="cc-effect"><img src="images/bitwarden.png" alt="Image">
													<figcaption>
														<div class="h4">Bitwarden</div>
														<p>Self Hosted Password manager</p>
													</figcaption>
												</figure>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="technik" role="tabpanel">
							<div class="ml-auto mr-auto">
								<div class="row">
									<div class="col-md-6">
										<div class="cc-porfolio-image img-raised aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
											<a href="#technik">
												<figure class="cc-effect"><img src="images/server.jpg" alt="Image">
													<figcaption>
														<div class="h4">Server</div>
														<p>Eigenen Server bei meinen Eltern (alle webserver Projekte usw laufen auf dem Server)</p>
													</figcaption>
												</figure>
											</a>
										</div>
										<div class="cc-porfolio-image img-raised aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
											<a href="#technik">
												<figure class="cc-effect"><img src="images/none.jpg" alt="Image">
													<figcaption>
														<div class="h4">Fill</div>
														<p>notext</p>
													</figcaption>
												</figure>
											</a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="cc-porfolio-image img-raised aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
											<a href="#technik">
												<figure class="cc-effect"><img src="images/nattersbau.jpg" alt="Image">
													<figcaption>
														<div class="h4">Strom, Netzwerk, Heizung, Mauern</div>
														<p>Selbstständg bei der Planung und beim bau "Gearbeitet"</p>
													</figcaption>
												</figure>
											</a>
										</div>
										<div class="cc-porfolio-image img-raised aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
											<a href="#technik">
												<figure class="cc-effect"><img src="images/none.jpg" alt="Image">
													<figcaption>
														<div class="h4">fill</div>
														<p>notext</p>
													</figcaption>
												</figure>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section" id="contact" tabindex="-1">
				<div class="cc-contact-information" style="background-image: url('images/staticmap.png')">
					<div class="container">
						<div class="cc-contact">
							<div class="row">
								<div class="col-md-9">
									<div class="card mb-0 aos-init" data-aos="zoom-in">
										<div class="h4 text-center title">Contact Me</div>
										<div class="row">
											<div class="col-md-6">
												<div class="card-body">
													<form method="POST">
														<div class="p pb-3"><strong>contact me</strong></div>
														<div class="row mb-3">
															<div class="col">
																<div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
																	<input class="form-control" type="text" name="name" placeholder="Name" required="required">
																</div>
															</div>
														</div>
														<div class="row mb-3">
															<div class="col">
																<div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
																	<input class="form-control" type="text" name="Subject" placeholder="Subject" required="required">
																</div>
															</div>
														</div>
														<div class="row mb-3">
															<div class="col">
																<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
																	<input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required">
																</div>
															</div>
														</div>
														<div class="row mb-3">
															<div class="col">
																<div class="form-group">
																	<textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col">
																<button class="btn btn-primary" disabled="" type="submit">SOON</button>
															</div>
														</div>
													</form>
												</div>
											</div>
											<div class="col-md-6">
												<div class="card-body">
													<p class="mb-0"><strong>Address </strong></p>
													<p class="pb-2">Reichenauer Straße 92c, Innsbruck, Österreich</p>
													<p class="mb-0"><strong>Phone</strong></p>
													<p class="pb-2">+43-664-503-1108</p>
													<p class="mb-0"><strong>Email</strong></p>
													<p>lukas.kritsotakis@gmail.com</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
		<!--
		<div class="container text-center">
		<a class="cc-facebook btn btn-link" href="#">
		<i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#">
		<i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#">
		<i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#">
		<i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a>
		</div>
		-->
		<div class="h4 title text-center">Lukas Kritsotakis</div>
		<div class="text-center text-muted">
			<p>© <?php echo date("Y") ?> <!-- -- Genutzt: date("Y") --> All rights reserved.<br>Design - Lukas Kritsotakis <br> Made with ♥ with bootstrap</p>
		</div>
	</footer>
	
	<script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
	<script src="js/core/popper.min.js?ver=1.1.0"></script>
	<script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
	<script src="js/now-ui-kit.js?ver=1.1.0"></script>
	<script src="js/aos.js?ver=1.1.0"></script>
	<script src="scripts/main.js?ver=1.1.0"></script>

</body></html>