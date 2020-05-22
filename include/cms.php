<section class="contenedor-cms">
    <h3>Difusión</h3>
    <p class="after">Última hora en el IEIMC</p>
    <div class="card">
        <?php foreach($posts as $post):?>
            <div class="content-card">
                <div class="people">
                    <img src="res/img/img_cms/<?php echo $post["img_post"]?>.png" alt="<?php echo $post["name"]?>">
                </div>
                <div>
                    <p class="author">Por <strong>Alan Cortés</strong> |</p> 
                    <p class="date"><?php echo date("d-m-Y",$post["created_at"]);?> <i class="fa fa-calendar-check-o"></i> </p>
                </div>
                <div class="texto-team">
                    <h4><?php echo $post["name"]?></h4>
                    <a href="">Ver más</a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</section> 