<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Concorra a um ingresso</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  	<script>
  		$( function() {
   		$( "#accordion" ).accordion({
   		collapsible: true
    	});
  		} );
  </script>
</head>
<body>
	<h1 class="titulo">Concorra a um ingresso da sua banda preferida!</h1>
	<aside>
		<div class="conheca">
			<h2 class="subtitulo">Conheça as bandas</h2>
			<div id="accordion">
				<h3 class="nomebanda">The Cure</h3>
				<div class="caixabanda">
					<p>
						O The Cure é uma banda formada em 1978 na cidade de Crawley, um subúrbio de Londres localizado no
						condado de West Sussex,
						na Inglaterra. A banda passou por várias mudanças de formação, com o vocalista, guitarrista e
						principal compositor
						Robert Smith sendo o membro constante e principal responsável na sua direção musical e criativa.
					</p>
					<p>
						Iniciaram a sua carreira ainda muito influenciados pelo punk, porém, rapidamente começaram a
						desenvolver sons mais
						sombrios e densos, assim como letras mais complexas e angustiantes — influenciadas por 	literatura
						existencialista,
						niilista, gótica e de fantasia de autores como Sartre, Kafka, Peake, Camus, Farmer entre outros —,
						sem cedências,
						conseguindo, com essa combinação, a sua imagem de marca e um estatuto de culto que perdura até hoje.
					</p>
				</div>
				<h3 class="nomebanda">Bauhaus</h3>
				<div class="caixabanda">				
					<p>
						Bauhaus é uma banda de rock inglesa fundada em 1978 em Northampton, Inglaterra. É composta pelo
						guitarrista Daniel Ash,
						o baixista David J, o baterista Kevin Haskins que atuaram como trio até formarem quarteto com o
						vocalista Peter Murphy.
					</p>
					<p>
						O nome Bauhaus é uma clara homenagem à escola de arte homônima inaugurada em 1919, perseguida pelos
						nazistas e
						depois fechada em 1933.
					</p>
				</div>
				<h3 class="nomebanda">Siouxsie and the Banshees</h3>
				<div class="caixabanda">
					<p>
						Siouxsie and the Banshees foi uma banda de rock inglesa formada em Londres em 1976 por Siouxsie Sioux
						(vocalista) e
						Steven Severin (baixista).
						O grupo foi um dos pioneiros do pós-punk, sua música evoluirá constantemente ao longo de seus vinte anos
						de existência.
						A banda se separou em 1996.
					</p>
					<p>
						Siouxsie and the Banshees têm servido como uma influência importante em diversos artistas incluindo Joy
						Division,
						The Cure, Depeche Mode, The Smiths, Massive Attack, Radiohead, e PJ Harvey. Sid Vicious e Robert Smith
						já participaram da banda.
					</p>
				</div>
			</div>
		</div>
	</aside>
	<main>
		<form id="formulario" method="get">
			<fieldset>
				<legend class="legenda">Dados pessoais e contato</legend>
				<div class="linha">
					<label for="nome">Nome:</label><input type="text" name="nome" placeholder="Nome completo" id="nome"/>
					<label for="email">E-mail:</label><input placeholder="ex: fulano@email.com" type="email" name="email">
				</div>
				<div class="linha">
					<label for="zap">WhatsApp:</label><input type="tel" pattern="[0-9]{(2)} [0-9]{5}-[0-9]{4}" placeholder="(xx) xxxxx-xxxx" name="zap" id="zap">
					<label for="Banda preferida">Banda favorita:</label><input type="text" name="banda" placeholder="Qual sua banda preferida?" id="banda"/>
				</div>
			</fieldset>
			<span class="botoes">
					<button class="envio" id="btnsalvar" type="submit" onclick="alert('Você enviou sua inscrição!')">Enviar</button>
					<button class="envio" type="reset" onclick="alert('Campos resetados')">Corrigir</button>
			</span>
		</form>
	</main>
	<footer>
		Criado por <a href="https://github.com/nickmoura">Nickolas Moura</a> para os estudos da Digital Innovation One. 2023
	</footer>
</body>
</html>