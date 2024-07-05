<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css" media="(min-width: 1020px)">
		<link rel="stylesheet" type="text/css" href="css/indexm.css" media="(max-width: 1019px)">
		<script src="js/jquery.js"></script>
		<script src="js/jmask.js"></script>

		<link rel="icon" type="image/png" href="../img/favicon.png" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <meta charset="UTF-8">
  <meta name="description" content="Crie seu calcule seu valor hora de forma gratuíta aqui no Meet my Work!">
  <meta name="keywords" content="meet my work, meet, my, work, calculadora, gratuito, grátis, criar, emprego, trabalhos, divulgue, freelancer, freelance">
  <meta name="author" content="Zaqueu Moreira dos Santos Júnior">
  <meta name="robots" content="follow, index">
<title>Meet My Work | Calculadora freelancer</title>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
	</head>
	</body>
	<?php include("header.php"); ?>
	<section id="main">
		<p id="texthead" class="mobile">Está em dúvidas qual é o seu valor hora? Nós te ajudamos com isso!</p>
		<div class="divisao">
		<div>
			<h2>Calcular o valor/hora</h2>

			<table>
				<tr>
					<td>Quanto você deseja ganhar por mês?</td><td><input class="campo" type="number"  id="gmensal"></td>
				</tr>
				<tr>
					<td>Quanto dias por semana você deseja trabalhar?</td> <td><input class="campo" type="number" value="5" min="1" max="7" id="dias"></td>
				</tr>
				<tr>
					<td>Em média,quantas horas por dia?</td> <td><input class="campo" type="number" value="8" min="1" max="24" id="horas"></td>
				</tr>
			</table>
			<input type="button" class="botao" value="CALCULAR" id="calcular">
				<p class="total" id="total"></p>
			
		</div>
		<div>
			<h2>Calcular o valor de um projeto</h2>

			<table>
				<tr>
			<td>Qual a duração do seu projeto?</td> <td><input class="campo" type="number" id="periodo" value="1" min="1">

			<select id="periodo2">
				<option value="1">Horas</option>
				<option value="2">Dias</option>
				<option value="3">Semanas</option>
				<option value="4">Meses</option>
				<option value="5">Anos</option>
			</select></td>
				</tr>
				<tr>
			<td>Qual o seu valor/hora?</td> <td><input class="campo" type="number" min="1.00" id="valorhora"></td>
				</tr>
				<tr id="tdhoras">
			<td>Em média,quantas horas por dia?</td> <td><input class="campo" type="number" value="8" min="1" max="24" id="horas2"></td>
				</tr>
				<tr id="tddias">
			<td>Quanto dias por semana você deseja trabalhar?</td> <td><input class="campo" type="number" value="5" min="1" max="7" id="dias2"></td>
				</tr>			
			</table>

			<input type="button" class="botao" value="CALCULAR" id="calcular2">
			<p class="total" id="total2"></p>
		</div>
		</div>
		<div class="divisao">
			<img src="img/index.png">
		</div>
	</section>
	<?php include("footer.php"); ?>
	</body>
	<script>
		$(document).ready(function(){

			$('#calcular').on('click', function(){

				var ganhomensal=$("#gmensal").val();
				var dias=$("#dias").val();
				var horas=$("#horas").val();

				var totaldias=parseInt(dias)*4;

				var total=parseFloat(ganhomensal)/totaldias;
				var total=total/parseInt(horas);

				$("#total").text("Você vai receber R$ "+total+" por hora");

			});

			$('#periodo2').change(function() {

				var valor=$("#periodo2").val();
    				
    				if(valor != 1){

    					$("#tdhoras").show();

    				}else{

    					$("#tdhoras").hide();

    				}


    				if(valor != 1 && valor !=2){

    					$("#tddias").show();

    				}else{

    					$("#tddias").hide();

    				}
				});

			$('#calcular2').on('click', function(){

				var valorhora=$("#valorhora").val();
				var periodo=$("#periodo").val();
				var periodo2=$("#periodo2").val();
				var horas=$("#horas2").val();


				if(periodo2 == 1){

					var total=parseFloat(valorhora)*parseInt(periodo);

				}else{

					var tempo=1;

					var dias=$("#dias2").val();

					if(periodo2 == '2'){

						tempo=parseInt(periodo)*parseInt(horas);

				}else if(periodo2 == '3'){

					tempo=(parseInt(periodo)*parseInt(dias))*parseInt(horas);

				}else if(periodo2 == '4'){

					tempo=((parseInt(dias)*4)*parseInt(periodo))*parseInt(horas);

				}else{

					tempo=(((parseInt(dias)*4)*12)*periodo)*parseInt(horas);

				}

				var total=tempo*parseFloat(valorhora);
}


				$("#total2").text("O valor total do projeto é de R$ "+total);

			});
			
});
	</script>
</html>