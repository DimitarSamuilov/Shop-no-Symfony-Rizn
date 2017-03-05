<?php
ViewEngine\Template::render('admin-header');
?>
<table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th>ID</th>
            <th>Име</th>
            <th>Цена</th>
            <th>Дата</th>
            <th>Операции </th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($data as $single): ?>
            <?/*= var_dump($single)*/?>
            <tr>
                <td><?= $single->getId(); ?></td>
                <td><?= $single->getName(); ?></td>
                <td><?= $single->getPrice(); ?></td>
                <td><?= $single->getDateAdded(); ?></td>
                <td><a href="merchandiseEdit.php?id=<?= $single->getId()?>"
                       class="btn btn-primary btn-xs">Редактирай</a></td>
                <td><a href="deleteMerchandise.php?id=<?= $single->getId()?>" class="btn btn-primary btn-xs">Изтрий</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="addMerchandise.php" class="btn btn-primary btn-xs">Нов продукт</a>
