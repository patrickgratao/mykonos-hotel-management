<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-element-list mg-t-30">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                    </div>
                    <div class="nk-int-st">
                        <input type="hidden" name="id" value="<?= $usuario->id ?>">
                        <input type="text" class="form-control" placeholder="Nome Completo *" name="nomeUsuario"  value="<?= $usuario->nome ?>" autofocus required>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-mail"></i>
                    </div>
                    <div class="nk-int-st">
                        <input type="email" class="form-control" readonly placeholder="email@email.com" name="emailUsuario"  value="<?= $usuario->email?>" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-dollar"></i>
                    </div>
                    <div class="nk-int-st">
                        <input type="password" class="form-control" placeholder="Nova Senha" name="senhaUsuario" value="<?= $usuario->senha?>" required>
                    </div>
                </div>
            </div>
