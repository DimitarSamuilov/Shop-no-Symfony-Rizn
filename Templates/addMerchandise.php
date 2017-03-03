<?php
ViewEngine\Template::render("admin-header");
?>
<form class="form-horizontal"  method="post">
    <fieldset>
        <legend>Добавяне на продукт</legend>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Име</label>
            <div class="col-lg-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Име"">
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="col-lg-2 control-label">Цена</label>
            <div class="col-lg-10">
                <input type="number" name="price" class="form-control" id="price" placeholder="Цена" ">
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Описание</label>
            <div class="col-lg-10">
                <textarea class="form-control" name="description" rows="3" id="textArea"></textarea>
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
ViewEngine\Template::render("adminFooter");