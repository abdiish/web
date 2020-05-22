<link rel=stylesheet href=../res/css/posts.css>
<script src=../ckeditor/ckeditor.js></script>
<form enctype="multipart/form-data" id="new_post_container" class="new_post_container">
    <h2>Nueva publicaci&oacute;n</h2>
    <fieldset>
        <div class="input">
            <label for="" class="label">Nombre de la publicaci&oacute;n</label>
            <input type="text" class="txtNamePost" name="txtNamePost" placeholder="Nombre de la publicaci&oacute;n">
        </div>
        <div class="input">
            <label for="" class="label">Categoria</label>
            <select name="txtCategoryPost" class="txtCategoryPost">
                <option value="0">-- Seleccionar categoria --</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category['category_id'];?>"><?php echo $category['category'];?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="input">
        <label for="" class="label">Seleccionar imagen</label>
            <input type="file" class="image_file" name="image_file">
        </div>
    <textarea name="txtDescription" id="txtDescription"></textarea>
    </fieldset>
    <button type="submit" class="btn-submit btnSavePost">Subir publicaci&oacute;n</button>
    <p class="clearfix"></p>
</form>