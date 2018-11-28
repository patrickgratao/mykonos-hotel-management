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
                Forneça uma cidade válida
              </div>
            </div>
          </div>
          <div class="row">
            <!-- inico da reserva -->
              <div class="col-md-12">
                <h3 class="categoriaInfo">Informações da Reserva</h3>
                <div class="dropdown-divider"></div>
              </div>

              <div class="col-md-3 mb-1">
                <label for="dataCheckinHospede">Data de Check-In</label>
                <input type="date" class="form-control" name="dataCheckinHospede" id="dataCheckinHospede" placeholder="" value="">
                <div class="invalid-feedback">
                  Insira uma data de check-in válida.
                </div>
              </div>

              <div class="col-md-3 mb-1">
                <label for="dataCheckoutHospede">Data de Check-Out</label>
                <input type="date" class="form-control" name="dataCheckoutHospede" id="dataCheckoutHospede"  placeholder="" value="">
                <div class="invalid-feedback">
                  Insira uma data de check-out válida.
                </div>
              </div>
              <div class="col-md-3 mb-1">
                <label for="quantidadeDiariasHospede">Quantidade de Diárias</label>
                <input type="text" class="form-control" name="quantidadeDiariasHospede" id="quantidadeDiariasHospede" placeholder="">
                <div class="invalid-feedback">
                  Forneça um valor válido
                </div>
            </div>

            <div class="col-md-3 mb-1">
              <label for="acompanhantesHospede">N° Acompanhantes Pagantes</label>
              <input type="text" class="form-control" name="acompanhantesHospede" id="acompanhantesHospede" placeholder="">
              <div class="invalid-feedback">
                Forneça um valor válido
              </div>
            </div>

            <div class="col-md-12">
                <h4 class="categoriaInfo">Valores das Diárias</h3>
                <div class="dropdown-divider"></div>
            </div>

            <div class="col-md-2 mb-1">
              <label for="precoDiariaHospede">Preço da Diária</label>
              <input type="number" class="form-control" name="precoDiariaHospede" id="precoDiariaHospede" placeholder="">
              <div class="invalid-feedback">
                Forneça um valor válido
              </div>
            </div>

            <div class="col-md-2 mb-1">
              <label for="valorPagoHospede">Valor Pago</label>
              <input type="number" class="form-control" name="valorPagoHospede" id="valorPagoHospede" placeholder="" value="0">
              <div class="invalid-feedback">
                Forneça um valor válido
              </div>
            </div>

            <div class="col-md-2 mb-1">
              <label for="precoTotal">Preço Total</label>
              <input type="number" class="form-control" name="precoTotal" id="precoTotal" placeholder="" required>
              <div class="invalid-feedback">
                Forneça um valor válido
              </div>
            </div>

            <div class="col-md-2 mb-1">
              <label for="precoTotalPagar">Total à Pagar</label>
              <input type="number" readonly class="form-control text-danger" name="precoTotalPagar" id="precoTotalPagar" placeholder="" value="205.22" required>
              <div class="invalid-feedback">
                Forneça um valor válido
              </div>
            </div>

          </div> <!-- fim da linha -->

          <div class="row">
            <!-- inico da reserva -->
              <div class="col-md-12">
                <h3 class="categoriaInfo">Informações Adicionais</h3>
              </div>

              <div class="col-md-12">
                <label for="informacoesAdicionais"></label>
                 <textarea class="form-control" id="informacoesAdicionais" name="informacoesAdicionais" placeholder="Use este campo para adicionar informações pertinentes ao hóspede..." rows="8"></textarea>
              </div>
          </div>
          <br><br>
          <button class="btn btn-primary btn-lg" type="submit">Enviar</button>  
            </div>
            
          </form>