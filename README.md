###### Nome do projeto: Projeto DEMOCRATICAMENTE
###### Cuiabá, 30/09/2018
### Objetivo:
 #### Utilizar os dados da API do TSE para realizar pesquisa e consulta detalhada dos candidados em 2018, sendo eles:
    1-Presidente da República
    2-Governador
    3-Senador
    4-Deputado Federal
    5-Deputado Estadual
### Funcionalidades:
 #### O projeto inicia na página index.php com um select dinâmico simples, onde é usado para definir a categoria dos candidatos para listar(presidente, governador e etc).
   ##### Ao selecionar a categoria(tipo) do candidato, será exibido uma lista de acordo, onde o usuário poderá clicar no campo "Nome na urna" para ir a página de detalhes do candidato.
     Na página de detalhes.php fornecerá as seguintes informações:
        1-Foto(OBS)
        2-Nome
        3-Cargo
        4-Candidatura
        5-Partido
        6-Número do candidato
        7-Vices do candidato(OBS)
        
        !OBS(possivelmente o link para a API onde tinha na url o "id_candidato" não pode ser acessada devido a uma restrição, assim
        não consegui saber se estaria a foto e o nome dos vices de cada candidato (presidente,governador) pois os campos de vices e
        fotoUrl nos JSON de cada candidato estão nulos.
### Tecnologias utilizadas no desenvolvimento do projeto:
    - Foi utilizado JavaScript, JQuery e AJAX para captar as informações vindas da API em JSON.
    - Para estilização do projeto, foi utilizado CSS3 com Bootstrap.
    - Foi utilizado a linguagem PHP para captar com mais facilidade as informações transmitidas via GET na página de detalhes.php.
    
  
