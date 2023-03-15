<?php $this->layout("site::__treme", ['title' => $title]); ?>

<div class="blog">
    <!-- $page e  $pages vem do controlador-->
    <h3>Página <?=$page?> de <?=$pages?></h3>
    <?php
    if($posts) :
        foreach ($posts as $post) :
            $cover = explode("uploads", $post->cover);
            ?>
                <article class="blog_post">
                    <img src="<?=$cropper->make('uploads'.$cover[1], 620, 340)?>" alt="<?=$post->title?>"/>
                    <img src="<?=$cropper->make('uploads'.$cover[1], 300, 150)?>" alt="<?=$post->title?>"/>
                    <h3><?=$post->title?></h3>
                    <p><?=$post->description?></p>
                </article>
                <?php
        endforeach;
    else :
        ?>
            <h1>Não existem posts cadastrados</h1>
        <?php
    endif;
    ?>
    <?=$paginator?>
</div>