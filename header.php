<div class="bg-top navbar-light">
	<div class="container">
		<div class="row no-gutters d-flex align-items-center align-items-stretch">
			<div class="col-md-3 d-flex align-items-center py-4">
				<a class="navbar-brand" href="index">Elio Kasa</a>
			</div>
			<div class="col-lg-9 d-block">
				<div class="row d-flex">
					<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
						<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						<div class="text">
							<span>Email</span>
							<span>obchod@axis-distribution.eu</span>
						</div>
					</div>
					<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
						<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						<div class="text">
							<span>Telefón</span>
							<span>047-4331173</span>
						</div>
					</div>
					<div class="col-md topper d-flex align-items-center justify-content-end">
						<p class="mb-0 d-block">
							<a href="contact" class="btn py-2 px-3 btn-primary">
								<span>Kontakt</span>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	  </div>
</div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container d-flex align-items-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="oi oi-menu"></span> Menu
	  </button>
	  <!--<form action="#" class="searchform order-lg-last">
	  <div class="form-group d-flex">
		<input type="text" class="form-control pl-3" placeholder="Search">
		<button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
	  </div>
	</form>-->
	  <div class="collapse navbar-collapse" id="ftco-nav">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item <?php if (basename($_SERVER['REQUEST_URI']) == "index" || basename($_SERVER['REQUEST_URI']) == ""): ?>active<?php endif; ?>"><a href="index" class="nav-link pl-0">Domov</a></li>
			<li class="nav-item <?php if (basename($_SERVER['REQUEST_URI']) == "about"): ?>active<?php endif; ?>"><a href="#" class="nav-link">O nás</a></li>
			<li class="nav-item <?php if (basename($_SERVER['REQUEST_URI']) == "solutions"): ?>active<?php endif; ?>"><a href="#" class="nav-link">Riešenia</a></li>
			<li class="nav-item <?php if (basename($_SERVER['REQUEST_URI']) == "eliokasa"): ?>active<?php endif; ?>"><a href="eliokasa" class="nav-link">Elio Kasa</a></li>
			<li class="nav-item <?php if (basename($_SERVER['REQUEST_URI']) == "vrpeliodriver"): ?>active<?php endif; ?>"><a href="vrpeliodriver" class="nav-link">VRP Elio Driver</a></li>
			<li class="nav-item"><a href="http://www.pokladnicne-centrum.sk" class="nav-link">Eshop</a></li>
			<li class="nav-item <?php if (basename($_SERVER['REQUEST_URI']) == "contact"): ?>active<?php endif; ?>"><a href="contact" class="nav-link">Kontakty</a></li>
		</ul>
	  </div>
	</div>
  </nav>
<!-- END nav -->