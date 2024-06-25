
<div class="container">
    <?php foreach ($arrayFiltrado as $linha) : ?>   
        <img src="<?= $linha->img ?>">
        <a href="<?= $linha->url_steam ?>"><?= $linha->descricao ?></a>
    <?php endforeach; ?>
</div>