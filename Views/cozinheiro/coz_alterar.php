    <?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>
<?php include __DIR__ . "/../layout/menucozinheiro.php"; ?>
<?php include __DIR__ . "/../errors.php"; ?>
<?php
    $cc = new \Controllers\CozinheiroController();
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $c = $cc->find($_GET['id']);
    }
?>


<div class="container">
    <form method="post">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <h5 class="card-header">Dados do Garçom</h5>
                    <div class="card-body">

                        <input type="number" name="id" hidden value="<?= $c->ID ?>">

                        <div class="form-row">
                            <div class="form-group col-3">
                                <label for="nome">Nome:</label>
                                <input type="text" id="nome" class="form-control" value="<?= $c->NOME ?>" name="nome">
                            </div>
                            <div class="form-group col-2">
                                <label for="cpf">CPF:</label>
                                <input type="text" id="cpf" maxlength="11" class="form-control" value="<?= $c->CPF ?>" name="cpf">
                            </div>
                            <div class="form-group col-2">
                                <label for="rg">RG:</label>
                                <input type="text" id="rg" maxlength="9" class="form-control" value="<?= $c->RG ?>" name="rg">
                            </div>
                            <div class="form-group col-2">
                                <label for="sexo">Sexo:</label>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option value="NaoInformado">Não Informado</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label for="datanasc">Data Nascimento:</label>
                                <input type="date" id="datanasc" class="form-control" name="datanasc" value="<?= $c->DATA_NASC ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-3">
                                <label for="numerofixo">Número Fixo:</label>
                                <input type="text" id="numerofixo"  maxlength="11" class="form-control" name="numerofixo" placeholder="DDD+99999-9999" value="<?= $c->NUM_FIXO ?>">
                            </div>
                            <div class="form-group col-3">
                                <label for="numerocelular">Número Celular:</label>
                                <input type="text" id="numerocelular" maxlength="11" class="form-control" name="numerocelular"  placeholder="DDD+99999-9999" value="<?= $c->NUM_CELULAR ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="estado">Estado:</label>
                                <select name="estado" id="estado" class="form-control">
                                    <option value="1">Ativo</option>
                                    <option value="2">Desativado</option>

                                </select>
                            </div>
                            <div class="form-group col-2">
                                <label for="placa">Placa:</label>
                                <input type="text" id="placa" class="form-control" name="placa" maxlength="2" placeholder="ex: PDG4638" value="<?= $c->PLACA ?>">
                            </div>

                            <div class="form-group col-2">
                                <label for="salario">Salário:</label>
                                <input type="number" id="salario" class="form-control" name="salario"  placeholder="R$" value="<?= $c->SALARIO ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Endereço do Garçom</h5>
                    <div class="card-body">

                        <!---  ID LOGRADOURO NUMERO COMPLEMENTO BAIRRO MUNICIPIO UF PAIS REFERENCIA CEP--->
                        <div class="form-row">
                            <div class="form-group col-5">
                                <label for="logradouro">Logradouro:</label>
                                <input type="text" id="logradouro" class="form-control" name="logradouro" placeholder="Rua exemplo" value="<?= $c->LOGRADOURO ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="numero">Número:</label>
                                <input type="text" id="numero" maxlength="8" class="form-control" name="numero"  placeholder="1111" value="<?= $c->NUMERO ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="bairro">Bairro:</label>
                                <input type="text" id="bairro" class="form-control" name="bairro" placeholder="ex: villa x" value="<?= $c->BAIRRO ?>">
                            </div>

                            <div class="form-group col-3">
                                <label for="municipio">Município:</label>
                                <input type="text" id="municipio" class="form-control" name="municipio"  placeholder="ex: recife" value="<?= $c->MUNICIPIO ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-1">
                                <label for="uf">UF:</label>
                                <input type="text" id="uf" maxlength="2" class="form-control" name="uf" placeholder="ex: PE" value="<?= $c->UF ?>">
                            </div>
                            <div class="form-group col-3">
                                <label for="pais">Pais:</label>
                                <input type="text" id="pais" class="form-control" name="pais"  placeholder="ex: Brasil" value="<?= $c->PAIS ?>">
                            </div>
                            <div class="form-group col-4">
                                <label for="referencia">Referência:</label>
                                <input type="text" id="referencia" class="form-control" name="referencia" placeholder="ex: colégio souza" value="<?= $c->REFERENCIA ?>">
                            </div>

                            <div class="form-group col-4">
                                <label for="cep">CEP:</label>
                                <input type="text" id="cep" maxlength="8" class="form-control" name="cep"  placeholder="ex: 50721230" value="<?= $c->CEP ?>">
                            </div>
                        </div>

                        <input type="submit" class="btn btn-success btn-block float-right">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



<?php include __DIR__ . "/../layout/footer.php"; ?>