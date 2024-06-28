<div class="container template-jogos">
    <?php foreach ($arrayFiltrado as $linha): ?>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <a href="<?= $linha->url_steam ?>" target="_blank" title="<?= $linha->title ?>">
                    <div class="carousel-item active">
                        <img src="<?= $linha->img ?>" class="d-block w-100" alt="<?= $linha->title ?>">
                    </div>
                </a>
                <a href="<?= $linha->url_steam ?>" target="_blank" title="<?= $linha->title ?>">
                    <div class="carousel-item active">
                        <img src="<?= $linha->img_carousel2 ?>" class="d-block w-100" alt="<?= $linha->title ?>">
                    </div>
                </a>
                <a href="<?= $linha->url_steam ?>" target="_blank" title="<?= $linha->title ?>">
                    <div class="carousel-item active">
                        <img src="<?= $linha->img_carousel3 ?>" class="d-block w-100" alt="<?= $linha->title ?>">
                    </div>
                </a>
                <a href="<?= $linha->url_steam ?>" target="_blank" title="<?= $linha->title ?>">
                    <div class="carousel-item active">
                        <img src="<?= $linha->img_carousel4 ?>" class="d-block w-100" alt="<?= $linha->title ?>">
                    </div>
                </a>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <a href="<?= $linha->url_steam ?>"><?= $linha->descricao ?></a>
<?php endforeach; ?>



</div>