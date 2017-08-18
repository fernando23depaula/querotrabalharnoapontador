(function getToken(){
   $.ajax({
       url: "https://api.apontador.com.br/v2/oauth/token",
       data: { client_id: 'testefront',client_secret:'jO98nsGN6rXlmWXKKxnwS9NogdD~', grant_type:'client_credentials' },
       method: "POST",
       success: function(res) { 
         localStorage.setItem('token_type',res.token_type);
         localStorage.setItem('acess_token',res.access_token);
         localStorage.setItem('expires', res.expires_in);
       }
   });
})();

function buscaLugares(){
   termoBuscado = $("#oq_procura").val();
    cidadeBusca  = $("#cidades_busca").val();
    authorization = localStorage.getItem("token_type")+' '+ localStorage.getItem("acess_token");
    var url;
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
      url: url,
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
    event.preventDefault();
    return false;
}

$('#enviar').click(function(){
  buscaLugares();   
})
$('#busca_topo div input').keydown(function(e) {
  if (e.keyCode == 13) {
      buscaLugares();
  }
});

