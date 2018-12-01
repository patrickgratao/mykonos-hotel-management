<form class="needs-validation" method="POST" action="adiciona-hospede.php">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-element-list mg-t-30">
                            <div class="cmp-tb-hd">
                                <h2>Informações Pessoais</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Nome completo *"  id="nomeHospede" name="nomeHospede" autofocus required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-star"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="CPF - Apenas números *" id="cpfHospede" name="cpfHospede" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-calendar"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="date" name="nascimentoHospede" id="nascimentoHospede" placeholder="" value="" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-calendar"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <select class="form-control" name="sexoHospede" id="sexoHospede" required>
                                              <option value="">Sexo...</option>
                                              <option value="f">Feminino</option>
                                              <option value="m">Masculino</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-phone"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="tel"name="telefoneHospede" id="telefoneHospede" placeholder="Telefone com DDD" value="" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-phone"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="tel"name="celularHospede" id="celularHospede" placeholder="Whatsapp com DDD" value="" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-mail"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="email" placeholder="E-mail"  name="emailHospede" id="emailHospede" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-mail"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <select class="form-control"  name="estadoCivilHospede" id="estadoCivilHospede" required>
                                              <option value="">Estado Civil...</option>
                                              <option value="solteiro">Solteiro (a)</option>
                                              <option value="casado">Casado (a)</option>
                                              <option value="viuvo">Viúvo (a)</option>
                                              <option value="divorciado">Divorciado (a)</option>
                                              <option value="outro">Outro</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="cmp-tb-hd">
                                <h2>Informações de Localidade</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-house"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="number" class="form-control" name="cepHospede" id="cepHospede" placeholder="CEP - Somente números" min="1" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-house"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="ruaHospede" id="ruaHospede" placeholder="Rua">
                                        </div>
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-success"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-house"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="bairroHospede" id="bairroHospede" placeholder="Bairro">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-house"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="cidadeHospede" id="cidadeHospede" placeholder="Cidade">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-house"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="estadoHospede" id="estadoHospede" placeholder="Estado / UF">
                                        </div>
                                    </div>
                                </div>
                             </div><br>
                            <div class="cmp-tb-hd">
                                <h2>Informações de Reserva</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-calendar"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="date" class="form-control" name="dataCheckinHospede" id="dataCheckinHospede" placeholder="" value="2018-11-29">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-calendar"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="date" class="form-control" name="dataCheckoutHospede" id="dataCheckoutHospede" placeholder="" value="2018-12-02">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-calendar"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="number" class="form-control" name="quantidadeDiariasHospede" id="quantidadeDiariasHospede" placeholder="Quantidade de Diárias" min="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="number" class="form-control"name="acompanhantesHospede" id="acompanhantesHospede" placeholder="N° de Acompanhantes Pagantes" min="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-tax"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="number" class="form-control" name="precoDiariaHospede" id="precoDiariaHospede" placeholder="Preço da Diária">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-tax"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="number" class="form-control" name="valorPagoHospede" id="valorPagoHospede" placeholder="Valor Pago" min="0" value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-tax"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="number" class="form-control"  name="precoTotal" id="precoTotal" placeholder="Preço Total" required min="0" value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-tax"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="number" class="form-control" readonly class="form-control text-danger" name="precoTotalPagar" id="precoTotalPagar" placeholder="" value="205.22" required min="0">
                                        </div>
                                    </div>
                                </div>
                            </div><br><br>
                            
                            <div class="cmp-tb-hd">
                                <h2>Informações Adicionais</h2>
                                <p>Utilize este campo para adicionar informações pertinentes ao hóspede</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="nk-int-st">
                                            <textarea class="form-control" id="informacoesAdicionais" name="informacoesAdicionais" rows="9"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <button class="btn btn-primary notika-btn-primary btn-lg" type="submit">Cadastrar Hóspede</button>
            </div>
</form>