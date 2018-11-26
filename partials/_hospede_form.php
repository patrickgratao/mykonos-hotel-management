<form class="needs-validation" action="adiciona-hospede.php">
            <div class="row">
              <!-- inicio informações pessoais -->
              <div class="col-md-12">
                <h3 class="categoriaInfo">Informações Pessoais</h3>
                <div class="dropdown-divider"></div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="nomeHospede">Nome completo</label>
                <input type="text" class="form-control" id="nomeHospede" name="nomeHospede" placeholder="Ex. Patryck Peterson Costa Gratão" value="" required autofocus="true">
                <div class="invalid-feedback">
                  Insira um nome para continuar.
                </div>
              </div>
              <div class="col-md-3 mb-1">
                <label for="cpfHospede">CPF - Apenas números</label>
                <input type="number" class="form-control" id="cpfHospede" name="cpfHospede" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Insira um CPF válido para continuar.
                </div>
              </div>
              <div class="col-md-3 mb-1">
                <label for="nascimentoHospede">Data de Nascimento</label>
                <input type="date" class="form-control" name="nascimentoHospede" id="nascimentoHospede" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Insira uma data de nascimento válida para continuar.
                </div>
              </div>
              
              <div class="col-md-2 mb-3">
                <label for="sexoHospede">Sexo</label>
                <select class="custom-select d-block w-100" name="sexoHospede" id="sexoHospede" required>
                  <option value="">Selecione...</option>
                  <option value="f">Feminino</option>
                  <option value="m">Masculino</option>
                </select>
                <div class="invalid-feedback">
                  Selecione o sexo do hóspede.
                </div>
              </div>
              
              <div class="col-md-3 mb-1">
                <label for="telefoneHospede">Telefone com DDD</label>
                <input type="tel" class="form-control" name="telefoneHospede" id="telefoneHospede" placeholder="" value=" ">
                <div class="invalid-feedback">
                  Insira um número de telefone válido para continuar.
                </div>
              </div>

              <div class="col-md-3 mb-1">
                <label for="celularHospede">Celular / Whatsapp com DDD</label>
                <input type="tel" class="form-control" id="celularHospede" placeholder="" value=" " name="celularHospede">
                <div class="invalid-feedback">
                  Insira um número de celular válido para continuar.
                </div>
              </div>
              <div class="col-md-3 mb-1">
                <label for="emailHospede">E-mail</label>
                <input type="email" name="emailHospede" class="form-control" id="emailHospede" placeholder="" value="">
                <div class="invalid-feedback">
                  Insira um e-mail válido para continuar.
                </div>
              </div>

                <div class="col-md-2 mb-3">
                <label for="estadoCivilHospede">Estado Civil</label>
                <select class="custom-select d-block w-100" name="estadoCivilHospede" id="estadoCivilHospede" required>
                  <option value="">Selecione...</option>
                  <option value="solteiro">Solteiro (a)</option>
                  <option value="casado">Casado (a)</option>
                  <option value="viuvo">Viúvo (a)</option>
                  <option value="divorciado">Divorciado (a)</option>
                  <option value="outro">Outro</option>
                </select>
                <div class="invalid-feedback">
                  Selecione o sexo do hóspede.
                </div>
              </div>
              <!-- fim das informações pessoais -->
          </div>
            <div class="row">
              <!-- inico do endereço -->
              <div class="col-md-12">
                <h3 class="categoriaInfo">Informações de Localidade</h3>
                <div class="dropdown-divider"></div>
              </div>

              <div class="col-md-2 mb-1">
                <label for="cepHospede">CEP</label>
                <input type="number" class="form-control" name="cepHospede" id="cepHospede" placeholder="" value="">
                <div class="invalid-feedback">
                  Insira um cep válido para continuar.
                </div>
              </div>

              <div class="col-md-3 mb-1">
              <label for="ruaHospede">Rua</label>
              <input type="text" class="form-control" name="ruaHospede" id="ruaHospede" placeholder="">
              <div class="invalid-feedback">
                Forneça um endereço válido
              </div>
              </div>
              <div class="col-md-3 mb-1">
              <label for="bairroHospede">Bairro</label>
              <input type="text" class="form-control" name="bairroHospede" id="bairroHospede" placeholder="">
              <div class="invalid-feedback">
                Forneça um endereço válido
              </div>
            </div>
            <div class="col-md-2 mb-1">
              <label for="cidadeHospede">Cidade</label>
              <input type="text" class="form-control" name="cidadeHospede" id="cidadeHospede" placeholder="Ex. Trindade">
              <div class="invalid-feedback">
                Forneça um endereço válido
              </div>
            </div>
            <div class="col-md-1 mb-1">
              <label for="estadoHospede">Estado</label>
              <input type="text" class="form-control" name="estadoHospede" id="estadoHospede" placeholder="UF">
              <div class="invalid-feedback">
                Forneça uma cidade válido
              </div>
            </div>
          </div>
          <br><br>
          <button class="btn btn-primary btn-lg" type="submit">Enviar</button>  
            </div>
            
          </form>