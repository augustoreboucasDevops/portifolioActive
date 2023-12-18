<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> livrariAReboucas</title>

     <link rel="stylesheet" href="css/estilos.css">

    </head>
    <body>
        
        <?php
            include("topo.php");        
        
        ?>

        <div id="corpo">
            <main>
                <h3 style="background-color:darkslategrey;">Fale Conosco <br>Faça sua Solicitação!</h3>
                <fieldset>
                    <legend>Cadastro</legend>


                    <form action="dadoslivraria.php" method="post">
                        <div> 
                            <label for="nome"> Nome:</label>
                            <input type="text" name="nome" id="nome"> 
                        </div>
                        <div>
                            <label for="email"> Email:</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div>
                            <label for="telefone"> Telefone:</label>
                            <input type="tel" name="telefone" id="telefone">
                        </div>
                        <div>
                            <label for="cidade"> Cidade:</label>
                            <input name="cidade" id="cidade">
                        </div>
                        <div>
                            <label for="estado"> Estado:</label>
                            <select name="estado" id="estado">
                                <option></option>
                                <option>AL</option>
                                <option>AM</option>
                                <option>AP</option>
                                <option>AC</option>
                                <option>BA</option>
                                <option>CE</option>
                                <option>DF</option>
                                <option>CE</option>
                                <option>MS</option>
                                <option>MT</option>
                                <option>MG</option>
                                <option>MA</option>
                                <option>PE</option>
                                <option>PB</option>
                                <option>PR</option>
                                <option>PI</option>
                                <option>PA</option>
                                <option>RJ</option>
                                <option>RR</option>
                                <option>RS</option>
                                <option>RN</option>
                                <option>RO</option>
                                <option>SE</option>
                                <option>SP</option>
                                <option>SC</option>
                                <option>TO</option>
                                <option>GO</option>
                            </select>
                        </div>
                        <div>
                            <label for="endereco"> Endereço:</label>
                            <input type="endereco" name="endereco" id="endereco">
                        </div>
                        <div> 
                            <label for="mensagen"> Áreas de Interesse</label>
                            <textarea name="mensagem" id="mensagem"> </textarea>
                        </div>
                        <div class="campo">
                            Cadastre uma Senha:<br> 
                            <input type="password" name="senha"><br>
                        </div>
                        <div class="campo">
                            Confirme sua Senha:<br>
                            <input type="password" name="senha"><br>
                        </div>
                        <div class="campo">
                            <label>Newsletter</label>
                            <label><input type="checkbox" name="newsletter" value="1"> Gostaria de receber a Newsletter da empresa</label>
                        </div>
                        <div>
                            <button type="reset"> Cancelar </button>
                            <button type="reset"> Limpar </button>
                            <button type="submit"> Enviar </button>
                        </div>

                    </form>
                </fieldset>
                <h4>Veja a localização, da nossa livraria Matriz.</h4><hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1943.9578885905787!2d-38.42743825051206!3d-12.977238529768773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b472936cba5%3A0x179267d4139679fe!2sCasa%20Verde%20-%20Jornada%20de%20Autocura!5e0!3m2!1spt-BR!2sbr!4v1686587460872!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
            </main>
        </div>

         
        <?php
            include("rodape.php");
        
        ?>
        <hr>

    </body>
</html>