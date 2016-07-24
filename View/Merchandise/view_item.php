<?php /*/
echo '<hr><pre>';
var_dump ($this->dados);
echo '</pre><hr>';/**/

//Formatando o valor a vista
$reais = number_format($this->dados->preco, 2, ',', '.'); 
$preco = explode(',', $reais);

//Formatando valor em 12 vezes
$reais = number_format(($this->dados->preco / 12), 2, ',', '.'); 
$dozevezes = explode(',', $reais);
?>
<style>
.thumbnail {
    border: 1px solid #F65314;
}
.thumbnail img {
	max-height: 400px;
}
.conteudo {
	background-color: white;
    border: 1px solid #F65314;
	border-radius: 4px;
	padding: 20px;
	line-height: 1.42857143;
	margin-bottom: 20px;
}
.container{
}
.axaki-margin {
	margin-bottom: 20px;
}

/* wayfinding */
ul {
    margin: 0 0 18px 18px;
    color: #949494;
}
ul.a-horizontal {
    display: block;
    margin-left: 0;
}
ul.a-horizontal li {
    display: inline-block;
    margin: 0 10px 0 0;
}
.a-size-small {
    font-size: 12px !important;
    line-height: 1.5 !important;
}
.a-color-tertiary {
    color: #767676 !important;
}
ul li.a-breadcrumb-divider {
    color: #949494;
    position: relative;
    top: -1px;
}
</style>
<!-- wayfinding -->
<div class="row ">
	<div class="col-sm-12">
		<ul class="a-horizontal a-size-small">
			<!-- a-list-item -->
			<li>
				<span class="a-list-item">
					<a class="a-link-normal a-color-tertiary" href="">
						Voltar para lista
					</a>
				</span>
			</li>
			<!-- divider -->
			<li class="a-breadcrumb-divider">
				<span class="a-list-item a-color-tertiary">‹</span>
			</li>
			<!-- a-list-item -->
			<li>
				<span class="a-list-item">
					Informática
				</span>
			</li>
			<!-- divider -->
			<li class="a-breadcrumb-divider">
				<span class="a-list-item a-color-tertiary">›</span>
			</li>
			<!-- a-list-item -->
			<li>
				<span class="a-list-item">
					Componentes para PC
				</span>
			</li>
			<!-- divider -->
			<li class="a-breadcrumb-divider">
				<span class="a-list-item a-color-tertiary">›</span>
			</li>
			<!-- a-list-item -->
			<li>
				<span class="a-list-item">
					Mouse
				</span>
			</li>
		</ul>
	</div>
</div>
<!-- img + buyBox -->
<div class="row">
	<!-- img -->
	<div class="col-sm-6">
		<a href="#" class="thumbnail">
			<img class="" src="public/images/<?php echo $this->dados->codigo; ?>.jpg" alt="Imagem da mercadoria">
		</a>
	</div>
	<!-- buyBox -->
	<div class="col-sm-6"><div class="conteudo">
		<!-- name-id -->
		<div class="row">
			<div class="col-sm-12">
				<h2 class="page-header-axaki margin-item"><?php echo $this->dados->nome; ?></h2>
				<small>(código do produto: <?php echo $this->dados->codigo; ?>)</small><hr>
			</div>
		</div>
		<!-- price + btn-buy -->
		<div class="row">
			<!-- price -->
			<div class="col-xs-6 col-sm-6">
				<div class="info-price">
					Vendido e entregue por outroUser<br>
					
					<strong class="price-info-cost"> R$&nbsp;<?php echo $preco[0];?><sup><?php echo $preco[1];?></sup> </strong>
					<br>
					<span class="price-info-cost">12</span> x
					<span class="price-info-cost">R$&nbsp;<?php echo $dozevezes[0];?><sup><?php echo $dozevezes[1];?></sup></span>
					<br>
					Sem juros
				</div>
			</div>
			<!-- btn-buy -->
			<div class="col-xs-6 col-sm-6">
				<button type="button" class="btn btn-lg btn-success">Comprar</button>
			</div>
		</div>
		<div class="row">
			<!-- moreinfo -->
			<div class="col-xs-12">
				<div class="">
					<hr>
					frete e prazo<br>
					formas de pagamento<br>
					politica de troca<br>
				</div>
			</div>
		</div>
	</div>
</div></div>
<div class="row">
	<div class="col-sm-12">
		<div class="conteudo">
			<h2 class="page-header-axaki margin-item">Outras ofertas que podem interessar</h2>
			
			<div class="row">
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <img src="public/images/28.jpg" alt="picture">
				  <div class="caption">
					<h3>CCE SK504</h3>
					<p>Smartphone</p>
					<p><a href="#" class="btn btn-primary" role="button">Visualizar</a></p>
				  </div>
				</div>
			  </div>
			</div>
			
		</div>
	</div>
</div>
<!-- description -->
<div class="row">
	<div class="col-sm-12"><div class="conteudo">
		<h2 class="page-header-axaki">DESCRIÇÃO DA MERCADORIA</h2><hr>
<b>17 botões MMO otimizados</b><br>
Acesse sem esforço mais habilidades e macros do que nunca com 17 botões de mouse incluindo a revolucionária grade em miniatura do Razer Naga. O software do driver da Edição especial do Razer Naga Molten (ou Maelstrom ) permite que você organize facilmente suas combinações de teclas e habilidades de personagens para qualquer jogo permitindo que você remapeie totalmente e designe macros a todos os 17 botões.
<br><br>

<b>Máximo de conforto para longas sessões de jogos</b><br>
Jogue por horas com o formato ergonômico da Edição especial do Razer Naga Molten, otimizada para conforto e fácil acesso a cada botão.
<br><br>

<b>Complementos personalizados de interface para jogos MMO</b><br>
<br>Organize suas habilidades e elimine o excesso visual com os complementos personalizados de interface em jogo da Edição especial do Razer Naga Molten ou suporte integrado para jogo para os jogos mais populares MMO.<br>
<br><br>

<pre>
<b>ESPECIFICAÇÕES TÉCNICAS</b><br>
17 botões otimizados MMO totalmente programáveis (incluindo grade de miniaturas com 12 botões)
Sensor de 5600 dpi Razer Precision 3.5G Laser
Ultrapolling de 1.000 HZ/tempo de resposta de 1 ms
Pés Zero-acoustic Ultraslick
Razer Synapse 2.0
Perfis ilimitados de personagens com complementos
Complementos de software opcionais específicos para MMO
Tamanho aproximado: 116 mm / 4.57” (Comprimento) x 70 mm / 2.76” (Largura) x 46 mm / 1.81” (Altura)
Peso aproximado: 134 g / 0.30 lbs
</pre>

<pre>
<b>Requisitos do sistema</b><br>
PC ou Mac com porta USB
Windows® 7 / Windows Vista® / Windows® XP / Mac (OS X or higher)
Conexão de Internet (para instalação de driver)
Pelo menos 35MB de espaço livre em disco rígido
Razer Synapse 2.0 registration (requiring a valid e-mail), software download, license acceptance, and internet connection needed to activate full features of product and for software updates. After activation, full features are available in optional offline mode.
</pre>
<br><br>

	</div>
</div></div>
