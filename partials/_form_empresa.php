<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-element-list mg-t-30"> 
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                      CNPJ
                    </div>
                    <div class="nk-int-st">
                        <input type="hidden" name="id" value="<?= $empresa->id ?>">
                        <input type="text" class="form-control" placeholder="CNPJ *" name="cnpj"  value="<?= $empresa->cnpj ?>" autofocus required>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        Nome Fantasia
                    </div>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Nome Fantasia *" name="nomeFantasia"  value="<?= $empresa->nomeFantasia ?>" required>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        Razão Social
                    </div>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Razão Social " name="razaoSocial"  value="<?= $empresa->razaoSocial?>" required>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                       Endereço
                    </div>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Endereço" name="endereco" value="<?= $empresa->endereco?>">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        Telefone
                    </div>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Telefone" name="telefone" value="<?= $empresa->telefone?>">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        Email
                    </div>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Email" name="email" value="<?= $empresa->email?>">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                      Site
                    </div>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Site" name="site" value="<?= $empresa->site?>">
                    </div>
                </div>
            </div>


            </div>
          
