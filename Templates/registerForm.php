<?php
ViewEngine\Template::render("admin-header");
?>
    <form class="form-horizontal" method="post">
        <fieldset>
            <legend>Регистрация</legend>
            <div class="form-group">
                <label for="username" class="col-lg-2 control-label">Потребителско  име</label>
                <div class="col-lg-10">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Парола</label>
                <div class="col-lg-10">
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPasswordR" class="col-lg-2 control-label">Повтори парола</label>
                <div class="col-lg-10">
                    <input type="password" name="passwordRepeat" class="form-control" id="inputPasswordR" placeholder="Repeat password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Отлаз</button>
                    <button type="submit" class="btn btn-primary">Регистация</button>
                </div>
            </div>
        </fieldset>
    </form>
<?php
ViewEngine\Template::render("adminFooter");
?>