<?php
ViewEngine\Template::render('admin-header');
?>

<?php if (isset($_SESSION[\Config\ErrorMessage::ERROR_SESSION_KEY])): ?>
    <div class="alert alert-danger">
        <?= ($_SESSION[\Config\ErrorMessage::ERROR_SESSION_KEY]) ?>
    </div>
    <?php
    unset($_SESSION[\Config\ErrorMessage::ERROR_SESSION_KEY]);

endif; ?>

    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Добавяне на продукт</legend>
            <div class="form-group">
                <label for="name" class="col-lg-2 control-label">Име</label>
                <div class="col-lg-10">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Име"
                           value="<?= $data->getName() ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-lg-2 control-label">Цена</label>
                <div class="col-lg-10">
                    <input type="text" name="price" class="form-control" id="price" placeholder="Цена"
                           value="<?= $data->getPrice() ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-lg-2 control-label">Промоционална цена</label>
                <div class="col-lg-10">
                    <input type="text" name="promoPrice" class="form-control" id="price"
                           placeholder="Промоционална цена" value="<?= $data->getPromoPrice() ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <img width="150" height="150" src="<?= $data->getImage() ?>">
                    <h3>Текущо изображение</h3>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="article_title">Ново Изображение</label>
                <div class="col-sm-4 ">
                    <input type="file" name="image">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Отказ</button>
                    <button type="submit" class="btn btn-primary">Въведи</button>
                </div>
            </div>
        </fieldset>
    </form>

<?php
ViewEngine\Template::render('adminFooter');
?>