	/**
* Capturar itens do banco de dados
*/

function carregarItens(){
    
    $("#caminhos").on('change', function(e){
    	if ($(this).val() == "PRESIDENTE") {
    		var url = "http://divulgacandcontas.tse.jus.br/divulga/rest/v1/candidatura/listar/2018/BR/2022802018/1/candidatos";
    	}
	  	if ($(this).val() == "GOVERNADOR") {
    		var url = "http://divulgacandcontas.tse.jus.br/divulga/rest/v1/candidatura/listar/2018/MT/2022802018/3/candidatos";
    	}
		if ($(this).val() == "SENADOR") {
    		var url = "http://divulgacandcontas.tse.jus.br/divulga/rest/v1/candidatura/listar/2018/MT/2022802018/5/candidatos";
    	}
    	if ($(this).val() == "DEPUTADOF") {
    		var url = "http://divulgacandcontas.tse.jus.br/divulga/rest/v1/candidatura/listar/2018/MT/2022802018/6/candidatos";
    	}
    	if ($(this).val() == "DEPUTADOE") {
    		var url = "http://divulgacandcontas.tse.jus.br/divulga/rest/v1/candidatura/listar/2018/MT/2022802018/7/candidatos";
    	}

    //Capturar Dados Usando Método AJAX do jQuery
    $.ajax({
        type: "GET", 
        url: url,
        timeout: 3000,
        datatype: 'JSON',
        contentType: "application/json; charset=utf-8",
        cache: false,
        beforeSend: function() {
            $("#items_table").html('<center><img src="Spinner.gif" alt=""></center>');
        },
        error: function() {
            $("#h2").html("O servidor não conseguiu processar o pedido");
        },
        success: function(retorno) {
                // Interpretando retorno JSON...
                 $("#h2").html("");
                $("#items_table").html("");
                var conjunto = retorno;
                for(var i=0; i<=conjunto.candidatos.length; i++) {
                    var valor = '';
                    var d = i + 1;
                            valor += "<tr ><th style='padding: 10px; width: 210px'>" + d + "</th>";
                            valor += "<td style='border=1; padding-left: 5px;  width: 460px'><a href='detalhes.php?NOMEURNA=" + conjunto.candidatos[i].nomeUrna + "&NOME=" + conjunto.candidatos[i].nomeCompleto + "&CARGO="+ conjunto.candidatos[i].cargo.nome +"&PARTIDO=" + conjunto.candidatos[i].partido.sigla + "&NUMERO=" + conjunto.candidatos[i].numero + "&SITUACAO=" + conjunto.candidatos[i].descricaoSituacao + "&ANO=" + conjunto.candidatos[i].eleicao.descricaoEleicao + "&NOMECOLIGACAO=" + conjunto.candidatos[i].nomeColigacao + "&FOTO=" + conjunto.candidatos[i].fotoUrl + " '>" + conjunto.candidatos[i].nomeUrna + "</a></td>";
                            valor += "<td style='padding-left: 5px; width: 980px'>" + conjunto.candidatos[i].nomeCompleto + "</td>";
                            valor += "<td style='width: 190px'>" + conjunto.candidatos[i].numero + "</td></tr>";
                            valor += "</br>";
                            $("#items_table").append(valor);
                            console.log(conjunto.candidatos[i]);
                       
                    }

               
                 
                    //Limpar Status de Carregando 
        } 
    }); 

    });

}