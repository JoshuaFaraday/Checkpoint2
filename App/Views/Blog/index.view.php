<?php ///** @var Array $data */ ?>
<?php
/** @var \App\Models\Article[] $data
 */
foreach ($data as $article) { ?>
    <div class="container mt-1">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?= $article->getTitle() ?></h4>


                <h4 class="card-text"><?= $article->getText() ?></h4>
                <a class="btn btn-success" href="?c=blog&a=edit&id=<?= $article->getId() ?>">Edit</a> &nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger" href="?c=blog&a=delete&id=<?= $article->getId() ?>">Zmazat</a>
            </div>
        </div>

    </div>
<?php } ?>

