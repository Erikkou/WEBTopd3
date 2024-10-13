<?php

$title = "Shares";
$sharesModel = new Shares();
$shares = $sharesModel->getAllShares();
?>

<?php if (isset($_SESSION['username'])): ?>
    <br><a href="sharesomething" class="btn btn-success mx-3">Share Something</a><br>
<?php endif; ?>

<div class="container-fluid">
    <br>
    <?php foreach ($shares as $share): ?>
        <div class="share-item bg-light border p-3 mb-3">
            <h2 class="text-black"><?= $share['title']; ?></h2>
            <p class="text-muted">Posted on: <?= $share['create_date']; ?></p>
            <p class="text-black"><?= $share['body']; ?></p>
            <a href="<?= $share['link']; ?>" class="btn btn-outline-dark">Go To Website</a>
        </div>
    <?php endforeach; ?>
</div>
