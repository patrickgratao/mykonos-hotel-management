<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-element-list mg-t-30">
        <div class="cmp-tb-hd">
            <h2>Categoria</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                    </div>
                    <div class="nk-int-st">
                        <input type="hidden" name="id" value="<?= $categoria->id ?>">
                        <input type="text" class="form-control" placeholder="Nome da Categoria" name="nomeCategoria"  value="<?= $categoria->nome ?>" autofocus required>
                    </div>
                </div>
            </div>