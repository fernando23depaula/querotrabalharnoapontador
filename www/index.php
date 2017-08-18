<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quero trabalhar no apontador</title>
	<link rel="stylesheet" href="css/style.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<header>
	<div id="container_infos_topo" class="container">
		<figure  class="align_middle">
			<!--<img src="img/logo.png" alt="Apontador" title="Apontador">-->
		</figure>
		<div id="busca_topo" >
			<div>
				<input type="text" id="oq_procura">
				<input type="text" id="cidades_busca">
				<input type="submit" id="enviar" value="enviar">
			</div>
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
<div id="lista">
	
</div>



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