<?php $this->layout('blog::_layout', [ 'title'=> $title ]) ?>

<section class="row gy-3">
        <?php foreach ($posts as $post) : ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $post->title ?></h5>
                    <div class=""><?= $post->content ?></div>
                    <span class="small">Postado em <?= $post->created_at ?></span>
                    <a href="/<?= $post->slug?>" class="card-link">Ver Publicação</a>
                </div>
         </div>    
        </div>
    <?php endforeach; ?> 
</section>