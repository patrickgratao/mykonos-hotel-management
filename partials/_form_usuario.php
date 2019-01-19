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
                        <input type="email" class="form-control" placeholder="email@email.com" name="emailUsuario"  value="<?= $usuario->email?>" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-dollar"></i>
                    </div>
                    <div class="nk-int-st">
                        <input type="password" class="form-control" placeholder="Senha" name="senhaUsuario"  value="<?= $usuario->senha ?>" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-form"></i>
                    </div>
                    <div class="nk-int-st">
                      <select class="form-control" name="permissaoUsuario" id="permissaoUsuario" required>
                          <option value="">Nível de Acesso...</option>  
                          <option value="admin"<?=$usuario->permissao == 'admin' ? ' selected="selected"' : '';?>>Administrador</option>
                          <option value="comum"<?=$usuario->permissao == 'comum' ? ' selected="selected"' : '';?>>Usuário Padrão</option>
                          
                      </select>
                  </div>
              </div>
          </div>
       