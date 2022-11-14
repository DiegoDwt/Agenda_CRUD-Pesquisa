<?php
    include_once('acao.php'); // incluir para usar a função de carregar os dados 

    $busca = isset($_POST['busca'])?$_POST['busca']:''; // captura a variável enviada pelo formulário

    if ($busca != ''){ 
        $contatos = get_dados(); // carrega os contatos do arquivo para a variável contatos
        $cont = []; // vetor para armazenar os resultados da pesquisa
        foreach($contatos as $contato){ // percorre todos os elementos do vetor contatos
            if ($contato['nome'] == $busca){ // verifica se as informações conferem com a pesquisa
                $cont[] = $contato; // ai acrescenta aos resultados
                
            }
        }
        echo json_encode($cont); // retorna as informações codificadas no formato JSON
    }
    
    

?>