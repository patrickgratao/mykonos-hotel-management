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
                        <input type="text" class="form-control" placeholder="Nome completo *"  id="nomeHospede" name="nomeHospede" autofocus required value="<?= $hospede->nome?>">
                        <!-- campo para informar quem registrou ou editou o hóspde -->
                        <input type="hidden" name="cadastradoPor" value="<?= $_SESSION['id_usuario']?>">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-credit-card"></i>
                    </div>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="CPF - Apenas números *" id="cpfHospede" name="cpfHospede" value="<?= $hospede->cpf ?>" data-mask="999.999.999-99" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-calendar"></i>
                    </div>
                    <div class="nk-int-st">
                        <input type="text" name="nascimentoHospede" id="nascimentoHospede" placeholder="Data de Nascimento" required class="form-control" value="<?= $hospede->dataNascimento?>" data-mask="99/99/9999" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-promos"></i>
                    </div>
                    <div class="nk-int-st">
                      <select class="form-control" name="sexoHospede" id="sexoHospede" required>
                          <option value="">Sexo...</option>  
                          <option value="f"<?=$hospede->sexo == 'f' ? ' selected="selected"' : '';?>>Feminino</option>
                          <option value="m"<?=$hospede->sexo == 'm' ? ' selected="selected"' : '';?>>Masculino</option>
                          
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
                    <input type="tel"name="telefoneHospede" id="telefoneHospede" placeholder="Telefone com DDD" data-mask="(99) 9999-9999" value="<?= $hospede->telefone?>" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group ic-cmp-int float-lb floating-lb">
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-phone"></i>
                </div>
                <div class="nk-int-st">
                    <input type="tel"name="celularHospede" id="celularHospede" placeholder="Whatsapp com DDD" value="<?= $hospede->celular?>" class="form-control" data-mask="(99) 99999-9999">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group ic-cmp-int float-lb floating-lb">
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-mail"></i>
                </div>
                <div class="nk-int-st">
                    <input type="email" placeholder="E-mail"  name="emailHospede" id="emailHospede" value="<?= $hospede->email?>" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group ic-cmp-int float-lb floating-lb">
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-promos"></i>
                </div>
                <div class="nk-int-st">
                    <select class="form-control"  name="estadoCivilHospede" id="estadoCivilHospede" required>
                      <option value="">Estado Civil...</option>  
                      <option value="solteiro"<?=$hospede->estadoCivil == 'solteiro' ? ' selected="selected"' : '';?>>Solteiro (a)</option>
                      <option value="casado"<?=$hospede->estadoCivil == 'casado' ? ' selected="selected"' : '';?>>Casado (a)</option>
                      <option value="viuvo" <?=$hospede->estadoCivil == 'viuvo' ? ' selected="selected"' : '';?> >Viúvo (a)</option>
                      <option value="divorciado" <?=$hospede->estadoCivil == 'divorciado' ? ' selected="selected"' : '';?> >Divorciado (a)</option>
                      <option value="outro"<?=$hospede->estadoCivil == 'outro' ? ' selected="selected"' : '';?> >Outro</option>
                  </select>

              </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int float-lb floating-lb">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-paperclip"></i>
            </div>
            <div class="nk-int-st">
                <select class="form-control"  name="categoria_id" id="categoria_id" required>
                    <option value="">Categoria...</option>
                    <?php foreach ($categorias as $categoria) : 
                        $essaEhACategoria = $hospede->categoria->id == $categoria->id;
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                        ?>
                        <option value="<?=$categoria->id?>" <?=$selecao?> ><?=$categoria->nome?></option>
                    <?php endforeach ?>
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
                <input type="text" class="form-control" name="cepHospede" id="cepHospede" placeholder="CEP - Somente números" data-mask="99999-999" value="<?= $hospede->cep?>">
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int float-lb form-elet-mg">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-house"></i>
            </div>
            <div class="nk-int-st">
                <input type="text" class="form-control" name="ruaHospede" id="ruaHospede" placeholder="Rua" value="<?= $hospede->rua?>">
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
                <input type="text" class="form-control" name="bairroHospede" id="bairroHospede" placeholder="Bairro" value="<?= $hospede->bairro?>">
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int float-lb form-elet-mg">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-house"></i>
            </div>
            <div class="nk-int-st">
                <input type="text" class="form-control" name="cidadeHospede" id="cidadeHospede" placeholder="Cidade" value="<?= $hospede->cidade?>">
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int float-lb form-elet-mg">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-house"></i>
            </div>
            <div class="nk-int-st">
                <input type="text" class="form-control" name="estadoHospede" id="estadoHospede" maxlength="2" placeholder="Estado / UF" value="<?= $hospede->estado?>">
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
                <input type="text" class="form-control" name="dataCheckinHospede" id="dataCheckinHospede" placeholder="Data de Check-In" value="<?= $hospede->dataCheckin ?>" data-mask="99/99/9999" >
            </div>
            <div class="form-ic-cmp data-hoje" onclick="dataAtual();">
                <i class="notika-icon icone-hoje notika-down-arrow"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int float-lb form-elet-mg">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-calendar"></i>
            </div>
            <div class="nk-int-st">
                <input type="text" class="form-control" name="dataCheckoutHospede" id="dataCheckoutHospede" placeholder="Data de Check-Out" value="<?= $hospede->dataCheckout ?>" data-mask="99/99/9999" onblur="calculaDiarias(dataEntrada(),dataSaida());">
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int float-lb form-elet-mg">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-tax"></i>
            </div>
            <div class="nk-int-st">
                <input type="number" class="form-control" name="quantidadeDiariasHospede" id="quantidadeDiariasHospede" placeholder="Quantidade de Diárias" min="1" value="<?= $hospede->qtdDiarias?>" required>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int float-lb form-elet-mg">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-support"></i>
            </div>
            <div class="nk-int-st">
                <input type="number" class="form-control"name="acompanhantesHospede" id="acompanhantesHospede" placeholder="N° de Acompanhantes Pagantes" min="0" value="<?= $hospede->qtdAcompanhantes?>" required>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int float-lb form-elet-mg">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-dollar"></i>
            </div>
            <div class="nk-int-st">
                <input type="number" class="form-control" name="precoDiariaHospede" id="precoDiariaHospede" placeholder="Preço da Diária por Pessoa" value="<?= $hospede->precoDiaria?>" required>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int float-lb form-elet-mg">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-dollar"></i>
            </div>
            <div class="nk-int-st">
                <input type="number" class="form-control" name="valorPagoHospede" id="valorPagoHospede" placeholder="Valor Pago" min="0" value="<?= $hospede->valorPago?>" onblur="calculaTotalPagar(document.querySelector('#quantidadeDiariasHospede').value, document.querySelector('#acompanhantesHospede').value, document.querySelector('#precoDiariaHospede').value, document.querySelector('#valorPagoHospede').value)" required>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int float-lb form-elet-mg">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-tax"></i>
            </div>
            <div class="nk-int-st">
                <input type="number" class="form-control"  name="precoTotal" id="precoTotal" placeholder="Preço Total à Pagar" required min="0" value="<?= $hospede->precoTotal?>">
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
            <div class="nk-int-st infos-extras">
                <textarea class="form-control" id="informacoesAdicionais" name="informacoesAdicionais" rows="9"><?= $hospede->infoExtras?></textarea>
            </div>
        </div>
    </div>
</div>
</div><br>
