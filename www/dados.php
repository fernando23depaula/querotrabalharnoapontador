<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quero trabalhar no apontador</title>
	<link rel="stylesheet" href="css/style.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<header>
	<div id="container_infos_topo" class="container">
		<figure  class="align_middle">
			<!--<img src="img/logo.png" alt="Apontador" title="Apontador">-->
		</figure>
		<div id="busca_topo" >
			<input type="text" id="oq_procura">
			<input type="text" id="cidades_busca">
			<input type="button" value="enviar">
		</div>
		<div class="anuncie_login  align_middle">
			<ul>
				<li>Anuncie seu negócio</li>
				<li>Login</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</header>
<div id="breadcrumb" class="container">
	<ul>
		<li>Apontador</li>
		<li> > </li>
		<li>São Paulo</li>
		<li> > </li>
		<li>Entretenimento e Lazer</li>
		<li> > </li>
		<li>Parques</li>
		<li> > </li>
		<li>Parque Ibirapuera</li>
	</ul>
</div>
<main class="container">
<h1 id="titulo_page">Parque Ibirapuera</h1>
<div id="topoLocal">
	<div class="informacoesGerais fLeft">
		<div id="container_fotos" class="fLeft">
			<figure>
				<img src="./img/ibira.jpg" alt="">
			</figure>
		</div>
		<div id="container_informacoes" class="fLeft">
			<p><i class="text-center fa fa-phone-square" aria-hidden="true"></i> <span>(11) 5574-5045 / (11) 5573-4180</span></p>
			<p><i class="text-center fa fa-map-marker" aria-hidden="true"></i><span>Avenida Pedro Álvares Cabral, s/n, Portão 10 (Ibirapuera), Parque Ibirapuera - São Paulo - SP , CEP: 04094-050  — Como chegar</p>
			<p><i class="text-center fa fa-clock-o" aria-hidden="true"></i><span>Hoje: 05:00 às 00:00</span></p>
			<p><i class="text-center fa fa-mouse-pointer" aria-hidden="true"></i><span>http://www.parquedoibirapuera.com.br</span></p>
			<p><i class="text-center fa fa-thumbs-up" aria-hidden="true"></i><span>202 Pessoas recomendaramRecomendo</span></p>
		</div>
	</div>
	<div class="bannersPromocionais fLeft">
		<figure>
			<img src="img/banners/banner_promocional/banner1.png" alt="">
		</figure>
	</div>
</div>
<div class="clearfix"></div>
<section id="lugarCard" class="ladoEsquerdo fLeft">
	
	<div id="listaOpcoes" >
		<nav>
			<ul>
				<li class="active" id="listaInfo">Informações e avaliações</li>
				<li id="fotos">Fotos</li>
				<li id="maisInfos">Mais Informações</li>
				<li id="mapa">Mapa</li>
				<li id="videos">Vídeos</li>
			</ul>
		</nav>
		<div id="containerAvaliacoes" class="active visivel containersLista">
			<h3>Sobre Parque do Ibirapuera</h3>
			<p>O Parque Ibirapuera é o parque urbano mais importante da cidade de São Paulo e foi inaugurado dia 21 de agosto de 1954. No parque a população conta com ciclovia, treze quadras iluminadas,pistas destinadas a cooper, passeios e descanso, todas integradas à área cultural.</p>
			<br />
			<div class="row" id="avaliacoes">
				<?php foreach (range(1, 4) as $key => $value): ?>				
				<div class="cardAvaliacao">
					<div class="thumbnailPerfil fLeft">
						<figure>
							<img src="http://tn.localanalytics.info/tn?w=100&h=100&url=https%3A%2F%2Fdmyxv0skgo2mq.cloudfront.net%2F4298424730%2F4298424730_5165863142698170012-l.jpg" alt="">
							<figcaption>Natalia Araujo</figcaption>
						</figure>
						
						<div class="notaAvaliacao">
							<p class="notaNumber">5</p>
						</div>
						<div class="estrelasAvaliacao">
							<?php foreach (range(1, 4) as $key => $value): ?>
								<i class="fa fa-star" aria-hidden="true"></i>
							<?php endforeach ; ?>
						</div>

						<p class="data">25/12/2014</p>
					</div>
					<div class="avalicao fLeft">
						<p>Para quem busca somente ter um momento de tranqüilidade em meio à natureza, com lazer garantido, o parque Ibirapuera é o lugar certo. Desde para os que vão para aproveitar a pista de cooper, a ciclofaixa, o bicicletário com aluguel de bicicleta, as quadras, os campos de futebol e os aparelhos de ginástica; até os que vão em busca de cultura, freqüentadores da OCA, Pavilhão das Culturas Brasileiras, Museu Afro-Brasil, Fundação Bienal, MAC, MAM, entre outros. Para uma corridinha o parque oferece um ótimo percurso. O percurso é bem leve com poucos pontos de elevação. As subidas são pouco inclinadas e uma volta possui aproximadamente 3km (depende do percurso). Um bom horário para frequenta-lo é por volta das 20 hrs, esse horário o parque está com uma quantidade razoável de pessoas e da para correr tranquilamente sem ter que desviar de ninguém.</p>
						<p>Conheça você também este paraíso que é um dos locais favoritos do paulistano. O Ibirapuera é livre a todos os públicos e seu acesso é Gratuito e funciona todos os dias das 05:00 ás 00:00. </p>
					</div>
				</div>
				<div class="clearfix"></div>
				<br />
				<?php endforeach ?>
			</div>		
		</div>
		<div id="containerFotos" class="containersLista invisivel">
			<?php foreach (range(1,3) as $key => $value):?>
				<a class="example-image-link" href="./img/ibira.jpg" data-lightbox="example-set" data-title="Foto Ibirapuera Tirada por :"><img class="example-image" src="./img/ibira.jpg" alt=""/></a>
				      
			<?php endforeach ;?>
		</div>
		<div id="containerMaisInfos"  class="containersLista  invisivel">
			<ul>
				<li><b>Cadastrado por: </b>Apontador</li>
				<li><b>Categorias:</b> Entretenimento e Lazer - Parques</li>
				<li><b>Tags:</b> parque ibirapuera quadras cooper corrida ciclovia ar livre natureza exercícios passeio</li>
				<li><b>Site:</b> http://www.parquedoibirapuera.com</li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
</section>


<section id="sideBarRight" class="ladoDireito fLeft">
	<figure class="banner"><img src="img/banners/banner_lateral/banner_anuncie_negocio.png" class="center-block" alt="Anuncie seu negócio"></figure>
	<h3 class="text-center">Locais parecidos com este</h3>
	<?php foreach (range(1, 4) as $key => $value): ?>
		<div class="container-locais-parecidos">
			<figure class="fLeft"><img src="img/marker-map.png" alt=""></figure>
			<div class="locais_info fLeft">
				<p>BG Park - Comércio de Alimentos</p>
				<?php foreach (range(1, 4) as $key => $value): ?>
					<i class="fa fa-star" aria-hidden="true"></i>
				<?php endforeach ; ?>
				<p>Entretenimento</p>
			</div>
		<div class="clearfix"></div>
		</div>
	<?php endforeach ; ?>
</section>

</main>	

<link rel="stylesheet" href="js/lightbox/css/lightbox.min.css">
<script src="https://use.fontawesome.com/e9abb40d2f.js"></script>
<script src="js/scripts.js"></script>
<script src="js/lightbox/js/lightbox.min.js"></script>
<script src="js/lightbox/js/jquery.maskedinput.min.js"></script>
<script>
	$('#listaOpcoes ul li').on('click',function(){
		$('#listaOpcoes ul li').removeClass('active');
		$('.containersLista').removeClass('visivel');
		$('.containersLista').addClass('invisivel');		
		switch($(this).attr("id")) {
		    case 'listaInfo':
		    	$('#containerAvaliacoes').removeClass('invisivel');
		        $('#containerAvaliacoes').addClass('active visivel');
		        $(this).addClass('active');
		        break;
		    case 'fotos':
		        $('#containerFotos').removeClass('invisivel');
		        $('#containerFotos').addClass('active visivel');
		        $(this).addClass('active');
		        break;
		    case 'maisInfos':
		        $('#containerMaisInfos').removeClass('invisivel');
		        $('#containerMaisInfos').addClass('active visivel');		        
		        $(this).addClass('active');
		        break;
		    case 'mapa':
		        $('#containerMapa').removeClass('invisivel');
		        $('#containerMapa').addClass('active visivel');
		        $(this).addClass('active');
		        break;
		    case 'videos':
		        $('#containerVideos').removeClass('invisivel');
		        $('#containerVideos').addClass('active visivel');
		        $(this).addClass('active');
		        break;
		    default:
		        
		}
	});

</script>
</body>
</html>