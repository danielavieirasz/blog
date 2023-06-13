<?php $this->layout('blog::_layout', [ 'title'=> $post->title ]) ?>
<div class="row">
    <article class="col-12">
        <header>
            <h1><?= $post->title ?></h1>
            <p>Publicado em <?= $post->created_at ?></p>
        </header>

        <div class="my-2"><?=$post->content ?></div>
    </article>
    <div class="col-12">
        
    <a href="/" class="btn btn-outline-primary btn-sm">Voltar</a>
    </div>
</div>