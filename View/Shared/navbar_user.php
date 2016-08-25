					<div class="nav navbar-nav navbar-right">
						<li class="dropdown" >
							<a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								<?php echo $_SESSION['first_name'] ?>
							</a>
							<ul class="dropdown-menu" >
								<li><a href="?url=User/Home">Minha conta</a></li>
								<li><a href="#">Vendas</a></li>
								<li><a href="#">Compras</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Contato</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="?url=User/Logout&logout=true">Sair</a></li>
							</ul>
						</li>
					</div>