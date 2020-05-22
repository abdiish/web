<link rel=stylesheet href=../res/css/posts.css>
<div id="new_post_container" class="new_post_container">
    <h2>Categorias</h2>
    <!--fieldset-->
        <div class="input-categories">
            <label for="" class="label">Nombre de la categoria</label>
            <input type="text" class="txtNameCategory" name="txtNameCategory" placeholder="Nombre de la categoria">
        </div>
        <div class="input-btn">
            <button type="submit" class="btnGuardarCategoria">Guardar categoria</button>
        </div>
    <!--/fieldset-->
    <p class="clearfix"></p>

    <table border="1" class="tbl-categories">
        <caption>Lista de Categorias</caption>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Eliminar</td>
                <td>Editar</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $category): ?>
                <tr>
                    <td><?php echo $category['category']; ?></td>
                    <td><li class="fa fa-times delete-cat" data-categoryId="<?php echo $category['category_id']?>" title="Eliminar categoria"></li>
                    <td><li class="fa fa-pencil edit-cat" title="Editar categoria"></li></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>