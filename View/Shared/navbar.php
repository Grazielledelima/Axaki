		<div class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="text" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="?url=Home/Index">Axaki <span class="glyphicon glyphicon-fire" aria-hidden="true"></span></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="?url=Home/Index">Home</a></li>
						<li><a href="?url=Merc/Incluir">Vender</a></li>
						<li><a href="#">'-'</a></li>
					</ul>
					<?php
						if(isset($_SESSION['email']))
							include "navbar_user.php";
						else
							include "navbar_guess.php";
					?>
				</div>
			</div>
		</div>
		<div class="container">