

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<h1>Vender Mercadoria</h1>

<form id="sell_form" method="post" action="?url=Merc/NovaMercadoria" >
	
		<label>Nome da Mercadoria:</label><br>
		<input id="nMerc" class="form-control" type="text" name="fnome" placeholder="..."/><br>
		
		<label>Tipo da Mercadoria:</label><br>
		<input id="tMerc" class="form-control" type="text" name="ftipo" placeholder="..."/><br>
		
		<label>Quantidade:</label><br>
		<input id="qnt" class="form-control" type="text" name="fquantidade" placeholder="..."/><br>
		
		<label>Valor:</label><br>
		<div class="input-group">
			<span class="input-group-addon">R$</span>
			<input id="valor" class="form-control" type="text" name="fpreco" aria-label="Amount (to the nearest dollar)" placeholder="Ex: 1.99">
		</div>
		
	<!-- <label>Tipo do Negócio(Compra ou Venda):</label><br>
	<input type="text" name="tipo"/><br><br>
	<textarea rows="10" name="name"></textarea><br> -->
	<br>
	<a href="index.php"><button type="button" class="btn btn-danger ">Cancelar</button></a>
	<button id="anuciar" class="btn btn-primary pull-right" type="submit" >Anunciar</button>
</form>
<br>
<div id="focus-count">TesteManual.campos_correto() </div>

<script>
	var campos_correto = 0;
	$( "#sell_form input" ).focusout(function() {
		if($(this).val() == ""){
			$(this).css({"border" : "1px solid #F00"});
			campos_correto -= 1;
		}
		else {
			$(this).css({"border" : "1px solid #00cc00"});
			campos_correto += 1;
		}
		/*TesteManual*/
		$( "#focus-count" ).text( "TesteManual.campos_correto(" + campos_correto + ")" );
		
	}).focusin(function() {
		$(this).css({"border" : "1px solid #66afe9"});
		

		if($(this).val() == ""){
			campos_correto += 1;
		}
		else {
			
			campos_correto -= 1;
		}
		
		$( "#focus-count" ).text( "TesteManual.campos_correto(" + campos_correto + ")" );
	});
	
	/*TesteManual*/
	$( "#anuciar" ).click(function() {
		if(campos_correto < 8) {
			alert( "Verifique se os campos foram digitados corretamente!" );
			event.preventDefault();
		}
	});
</script>