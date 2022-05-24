<div class="container">
    <div class="row g-4">
        <?php foreach($albums as $album) : ?>
             
            <div class="col text-center">
                <div class="album_card p-3">
                    <img src="<?= $album['poster'] ?>" alt="<?= $album['title'] ?>">
                    <h3 class="text-light text-uppercase my-3"><?= $album['title'] ?></h3>
                    <span class="text-secondary"><?= $album['author'] ?></span>
                    <br>
                    <span class="text-secondary"><?= $album['year'] ?></span>
                </div>        
            </div>

        <?php endforeach ?>
        
    </div>
</div>