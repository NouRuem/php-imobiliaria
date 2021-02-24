<div id="wrapper">

  <!-- Menu Lateral - Início -->
  <?php require_once(APP."Views".DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."menu_lateral.php"); ?>
  <!-- Menu Lateral - Fim -->

  <!-- Conteúdo Principal Página - Início -->
  <div id="content-wrapper" class="d-flex flex-column">

    <div id="content">

      <!-- Menu Superior - Início -->
      <?php require_once(APP."Views".DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."menu_superior.php"); ?>
      <!-- Menu Superior - Fim -->

      <!-- Conteúdo da Página Atual - Início -->
      <div class="container-fluid">

        <!-- Cabeçalho da Página -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Imóveis</h1>
        </div>

        <!-- Conteúdo da Página -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Cadastrar novo imóvel</h6>
              </div>
              <div class="card-body text-xs">
                <form name="cadastrar_imovel" method="POST" action="<?= URL."imoveis/cadastrar" ?>">
                  <fieldset>
                    <legend class="text-lg">Dados Principais</legend>
                    <div class="row">
                      <div class="col-xl-3 col-md-12 mb-3">
                        <label for="apelido">Apelido:</label>
                        <input type="text" class="form-control text-xs <?= isset($dados['apelido_erro']) ? 'is-invalid' : '' ?>" id="apelido" name="apelido" value="<?= $dados['apelido'] ?>" maxlength="100">
                        <div class="invalid-feedback">
                          <?= isset($dados['apelido_erro']) ? $dados['apelido_erro'] : "" ?>
                        </div>
                      </div>
                      <div class="col-xl-2 col-md-12 mb-3">
                        <label for="percentual_imobiliaria">% da Imobiliária: <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control text-xs <?= isset($dados['percentual_imobiliaria_erro']) ? 'is-invalid' : '' ?>" id="percentual_imobiliaria" name="percentual_imobiliaria" value="<?= $dados['percentual_imobiliaria'] ?>" min="0" max="100" maxlength="3" pattern="^[0-9]+$" required>
                        <div class="invalid-feedback">
                          <?= isset($dados['percentual_imobiliaria_erro']) ? $dados['percentual_imobiliaria_erro'] : "" ?>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <hr>
                  <fieldset>
                    <legend class="text-lg">Dados Complementares</legend>
                    <div class="row">
                      <div class="col-xl-12 col-md-12 mb-3">
                        <label for="defeitos_existentes">Defeitos Existentes:</label>
                        <textarea class="form-control text-xs <?= isset($dados['defeitos_existentes_erro']) ? 'is-invalid' : '' ?>" id="defeitos_existentes" name="defeitos_existentes" value="<?= $dados['defeitos_existentes'] ?>" rows="5" maxlength="1000"></textarea>
                        <div class="invalid-feedback">
                          <?= isset($dados['defeitos_existentes_erro']) ? $dados['defeitos_existentes_erro'] : "" ?>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <hr>
                  <fieldset>
                    <legend class="text-lg">Logradouro</legend>
                    <div class="row">
                      <div class="col-xl-2 col-md-12 mb-3">
                        <label for="cep">CEP: <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control text-xs <?= isset($dados['cep_erro']) ? 'is-invalid' : '' ?>" id="cep" name="cep" value="<?= $dados['cep'] ?>" maxlength="8" pattern="^[0-9]+$" required>
                        <div class="invalid-feedback">
                          <?= isset($dados['cep_erro']) ? $dados['cep_erro'] : "" ?>
                        </div>
                      </div>
                      <div class="col-xl-6 col-md-12 mb-3">
                        <label for="endereco">Endereço: <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control text-xs <?= isset($dados['endereco_erro']) ? 'is-invalid' : '' ?>" id="endereco" name="endereco" value="<?= $dados['endereco'] ?>" maxlength="100" required>
                        <div class="invalid-feedback">
                          <?= isset($dados['endereco_erro']) ? $dados['endereco_erro'] : "" ?>
                        </div>
                      </div>
                      <div class="col-xl-1 col-md-3 mb-3">
                        <label for="endereco_numero">Nº: <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control text-xs <?= isset($dados['endereco_numero_erro']) ? 'is-invalid' : '' ?>" id="endereco_numero" name="endereco_numero" value="<?= $dados['endereco_numero'] ?>" min="0" max="100" maxlength="6" pattern="^[0-9]+$" required>
                        <div class="invalid-feedback">
                          <?= isset($dados['endereco_numero_erro']) ? $dados['endereco_numero_erro'] : "" ?>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-12 mb-3">
                        <label for="complemento">Complemento:</label>
                        <input type="text" class="form-control text-xs <?= isset($dados['complemento_erro']) ? 'is-invalid' : '' ?>" id="complemento" name="complemento" value="<?= $dados['complemento'] ?>" maxlength="45">
                        <div class="invalid-feedback">
                          <?= isset($dados['complemento_erro']) ? $dados['complemento_erro'] : "" ?>
                        </div>
                      </div>
                      <div class="col-xl-2 col-md-3 mb-3">
                        <label for="bairro">Bairro: <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control text-xs <?= isset($dados['bairro_erro']) ? 'is-invalid' : '' ?>" id="bairro" name="bairro" value="<?= $dados['bairro'] ?>" maxlength="100" required>
                        <div class="invalid-feedback">
                          <?= isset($dados['bairro_erro']) ? $dados['bairro_erro'] : "" ?>
                        </div>
                      </div>
                      <div class="col-xl-2 col-md-3 mb-3">
                        <label for="cidade">Cidade: <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control text-xs <?= isset($dados['cidade_erro']) ? 'is-invalid' : '' ?>" id="cidade" name="cidade" value="<?= $dados['cidade'] ?>" maxlength="45" required>
                        <div class="invalid-feedback">
                          <?= isset($dados['cidade_erro']) ? $dados['cidade_erro'] : "" ?>
                        </div>
                      </div>
                      <div class="col-xl-1 col-md-3 mb-3">
                        <label for="estado">Estado: <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control text-xs <?= isset($dados['estado_erro']) ? 'is-invalid' : '' ?>" id="estado" name="estado" value="<?= $dados['estado'] ?>" maxlength="2" pattern="^[A-Z ]+$" required>
                        <div class="invalid-feedback">
                          <?= isset($dados['estado_erro']) ? $dados['estado_erro'] : "" ?>
                        </div>
                      </div>
                      <div class="col-xl-1 col-md-3 mb-3">
                        <label for="pais">País: <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control text-xs <?= isset($dados['pais_erro']) ? 'is-invalid' : '' ?>" id="pais" name="pais" value="<?= $dados['pais'] ?>" maxlength="45" pattern="^[a-zA-Z ]+$" required>
                        <div class="invalid-feedback">
                          <?= isset($dados['pais_erro']) ? $dados['pais_erro'] : "" ?>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <hr>
                  <fieldset>
                    <legend class="text-lg">Dados da Prefeitura</legend>
                    <div class="row">
                      <div class="col-xl-2 col-md-3 mb-3">
                        <label for="prefeitura_iptu">Nº do IPTU:</label>
                        <input type="text" class="form-control text-xs <?= isset($dados['prefeitura_iptu_erro']) ? 'is-invalid' : '' ?>" id="prefeitura_iptu" name="prefeitura_iptu" value="<?= $dados['prefeitura_iptu'] ?>" maxlength="7" pattern="^[0-9]+$">
                        <div class="invalid-feedback">
                          <?= isset($dados['prefeitura_iptu_erro']) ? $dados['prefeitura_iptu_erro'] : "" ?>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <hr>
                  <fieldset>
                    <legend class="text-lg">Dados da SABESP</legend>
                    <div class="row">
                      <div class="col-xl-2 col-md-3 mb-3">
                        <label for="sabesp_rgi">Nº do RGI:</label>
                        <input type="text" class="form-control text-xs <?= isset($dados['sabesp_rgi_erro']) ? 'is-invalid' : '' ?>" id="sabesp_rgi" name="sabesp_rgi" value="<?= $dados['sabesp_rgi'] ?>" maxlength="10" pattern="^[0-9]+$">
                        <div class="invalid-feedback">
                          <?= isset($dados['sabesp_rgi_erro']) ? $dados['sabesp_rgi_erro'] : "" ?>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <hr>
                  <fieldset>
                    <legend class="text-lg">Dados da ENEL</legend>
                    <div class="row">
                      <div class="col-xl-2 col-md-3 mb-3">
                        <label for="enel_numero_instalacao">Nº da Instalação:</label>
                        <input type="text" class="form-control text-xs <?= isset($dados['enel_numero_instalacao_erro']) ? 'is-invalid' : '' ?>" id="enel_numero_instalacao" name="enel_numero_instalacao" value="<?= $dados['enel_numero_instalacao'] ?>" maxlength="10" pattern="^[0-9]+$">
                        <div class="invalid-feedback">
                          <?= isset($dados['enel_numero_instalacao_erro']) ? $dados['enel_numero_instalacao_erro'] : "" ?>
                        </div>
                      </div>
                      <div class="col-xl-2 col-md-3 mb-3">
                        <label for="enel_cpf">CPF:</label>
                        <input type="text" class="form-control text-xs <?= isset($dados['enel_cpf_erro']) ? 'is-invalid' : '' ?>" id="enel_cpf" name="enel_cpf" value="<?= $dados['enel_cpf'] ?>" maxlength="11" pattern="^[0-9]+$">
                        <div class="invalid-feedback">
                          <?= isset($dados['enel_cpf_erro']) ? $dados['enel_cpf_erro'] : "" ?>
                        </div>
                      </div>
                      <div class="col-xl-2 col-md-3 mb-3">
                        <label for="enel_numero_cliente">Nº do Cliente:</label>
                        <input type="text" class="form-control text-xs <?= isset($dados['enel_numero_cliente_erro']) ? 'is-invalid' : '' ?>" id="enel_numero_cliente" name="enel_numero_cliente" value="<?= $dados['enel_numero_cliente'] ?>" maxlength="11" pattern="^[0-9]+$">
                        <div class="invalid-feedback">
                          <?= isset($dados['enel_numero_cliente_erro']) ? $dados['enel_numero_cliente_erro'] : "" ?>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <hr>
                  <div class="row">
                    <div class="col-xl-12 col-md-12">
                      <button type="submit" class="btn btn-success btn-block"><i class="fa-fw mr-2 fas fa-save"></i>Cadastrar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- Conteúdo da Página Atual - Fim -->

    </div>

    <!-- Rodapé - Início -->
    <?php require_once(APP."Views".DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."rodape.php"); ?>
    <!-- Rodapé - Fim -->

  </div>
  <!-- Conteúdo Principal Página - Fim -->

</div>
