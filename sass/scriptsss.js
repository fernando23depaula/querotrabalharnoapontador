




$('form').submit(function(){
	if(localStorage.getItem("token_type") && localStorage.getItem("acess_token")){
		authorization = localStorage.getItem("token_type")+' '+ localStorage.getItem("acess_token");
		$.ajax({
			url: "https://api.apontador.com.br/v2/places/?q=pizza",
			headers: { Authorization: authorization },
			method: "GET",
			success: function(res) {
				console.log(res)		;
			}
		});
	}
	return false;
	
})


var url ;




$('#busca_topo form').submit(function(){
	termoBuscado = $("#oq_procura").val();
	cidadeBusca  = $("#cidades_busca").val();
 	if( termoBuscado != "" &&  cidadeBusca != '' ){
		console.log('tudo preenchido');
		url = "https://api.apontador.com.br/v2/places/?q="+termoBuscado+"&fq=address.city:"+cidadeBusca;
	}
	else if(termoBuscado != "" && cidadeBusca == '' ){
		console.log('oq procura preenchido');
		url = "https://api.apontador.com.br/v2/places/?q="+termoBuscado;
	}
	else if
		(termoBuscado == '' && cidadeBusca != ''){
		console.log('cidade preenchido');
		url = "https://api.apontador.com.br/v2/places/?fq=address.city:"+cidadeBusca;
	}
	else{
		console.log('Nenhum input foi preenchido')
	}

	$.ajax({
			url: "https://api.apontador.com.br/v2/places/?q=pizza",
			headers: { Authorization: authorization },
			method: "GET",
			success: function(res) {
				for (i = 0; i<= res.results.places.length; i++) {
					$('#lista').append(
						'<div class="item">'+
						'<h4 class="titulo">'+res.results.places[i].name+'</h4>'+
						'<hr>'+
						// '<div class="star">'+res.results.places[i].address.street+'</p>'+
						'<p class="endereco"><b>Endereço: </b>'+res.results.places[i].address.street+'</p>'+
						'<p class="telefoneItem"><b>Telefone : </b>'+res.results.places[i].phones+'</p>'+
						'</div>'
					)
				}
			}
		});
	return false;
})

