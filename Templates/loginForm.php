<?php
ViewEngine\Template::render("admin-header");
?>
<form class="form-horizontal" method="POST">
    <fieldset>
        <legend>Вход</legend>
        <div class="form-group">
            <label for="username" class="col-lg-2 control-label">Потребителско име</label>
            <div class="col-lg-10">
                <input type="text" name="username" class="form-control" id="username" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Парола</label>
            <div class="col-lg-10">
                <input type="password" name="password" class="form-control" id="inputPassword" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <input type="submit" class="btn btn-primary" value="Вход">
            </div>
        </div>
    </fieldset>
</form>
<?php
ViewEngine\Template::render("adminFooter");
?>