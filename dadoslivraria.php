<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> livrariAReboucas</title>

     <link rel="stylesheet" href="css/estilos.css">

    </head>
    <body>
        
        <?php
            include("topodados.php");        
        
        ?>

        <div id="corpo">
            <main>
               
            <h2> Dados de Clientes LivrariARebouças</h2>
            <?php

              //variaveis criadas para armazenar dados recebidos pelo formulario
                $nome=$_POST['nome'];
                $email=$_POST['email'];
                $telefone=$_POST['telefone'];
                $cidade=$_POST['cidade'];
                $uf=$_POST['estado'];
                $endereco=$_POST['endereco'];
                $interesses=$_POST['mensagem'];
                $senha=$_POST['senha'];
                $confirmacaosenha=$_POST['senha'];
                $newsletter=$_POST['newsletter']; 

              //escrevendo as variaveis criadas com o conteudo recebido pelo formulário
                echo "Nome: " . $nome ."<br>";
                echo "E-mail: " . $email ."<br>";
                echo "Número de telefone: " .$telefone . "<br>";
                echo "Cidade: " . $cidade ."<br>";
                echo "Estado-UF: " . $uf ."<br>";
                echo "Endereço: " . $endereco . "<br>";
                echo "Áreas de Interesses: " . $interesses ."<br>";
                echo "Senha: " . $senha . "<br>";
                echo "Confirmação de Senha: " . $confirmacaosenha ."<br>";
                echo "Deseja receber mensagens e posts : " . $newsletter ."<br>";



                //criando um vetor php para armazenar todas as variaveis
                $contato=array("Nome" =>$nome, "E-mail"=>$email, "Numero de telefone"=>$telefone, "Cidade"=>$cidade,"Estado-UF"=>$uf,"Endereco"=>$endereco, "Areas de Interesse"=>$interesses,"Senha"=>$senha, "Confirmacao de Senha"=>$confirmacaosenha,"Deseja receber mensagens e posts"=>$newsletter);

                //escrevendo o vetror php criado com todas as variaveis
                //echo"<hr> vetor criado:<br>";
                //print_r($contato);
                
                //verificação se o arquivo dados.jason já existe
                if(file_exists ("dados.json")){
                    //se existe, extrair a informação do arquivo
                    $string =file_get_contents("dados.json");
                    //transformando o arquivo dados.json em um vetor php
                    $json=json_decode($string,true);
                }

                //adcionando no vetor $json o vetor $contato com as variaveis recebidas pelo formulario
                $json["contatos"][]=$contato;

                //abre o arquivo dados.json em modo de escrita
                $fp=fopen('dados.json','w');

                //se der algum erro, entra neste if
                if($fp == false){
                    print(error_get_last());
                }

                //escreve no arquivo em json
                fwrite($fp, json_encode($json));

                //fecha o arquivo
                fclose($fp);

                           
            ?>

            <h4 style='text-align:center;'>Cadastro realizado com sucesso.</h4>
    
            </main>
        </div>

         
        <?php
            include("rodape.php");
        
        ?>
        <hr>

    </body>
</html>