// /**
// * Capturar itens do banco de dados
// */
// function carregarItens(){
//     //variáveis
//     var url = "http://divulgacandcontas.tse.jus.br/divulga/rest/v1/candidatura/listar/2018/BR/2022802018/1/candidatos";

//     //Capturar Dados Usando Método AJAX do jQuery
//     $.ajax({
//         type: "GET", 
//         url: url,
//         timeout: 3000,
//         datatype: 'JSON',
//         contentType: "application/json; charset=utf-8",
//         cache: false,
//         beforeSend: function() {
//             $("h2").html("Carregando..."); //Carregando
//         },
//         error: function() {
//             $("h2").html("O servidor não conseguiu processar o pedido");
//         },
//         success: function(retorno) {
//                 // Interpretando retorno JSON...
//                 var clientes = retorno;
//                 console.log(clientes.candidatos.length); 
//                 for(var i=0; i<clientes.candidatos.length; i++) {
//                     console.log(clientes.candidatos[i]);
//                 }
//                 // Listando cada cliente encontrado na lista...
                
//                 for(var i=0; i<=clientes.candidatos.length; i++) {
//                     var valor = '';
//                     var d = i + 1;
//                     valor += "<tr><th>" + d + "</th>";
//                     valor += "<td  style='border=1'>" + clientes.candidatos[i].nomeUrna + "</td>";
//                     valor += "<td style='padding-left: 5px'>" + clientes.candidatos[i].nomeCompleto + "</td>";
//                     valor += "<td style='padding-left: 5px'>" + clientes.candidatos[i].numero + "</td></tr>";
//                     valor += "</br>";
//                     $("#items_table").append(valor);
//                  }
//                     //Limpar Status de Carregando 
//                     $("h2").html("Carregado"); 
//         } 
//     });  
// }