<?php require("views/partials/head.php") ?>

<?php require("views/partials/nav.php") ?>

<?php require("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="container mx-auto mt-24">
            <h1 class="text-3xl font-bold mb-6"><img class="float-left px-2 py-4 w-full" src="/img/<?= $post['img'] ?>" alt="Girl in a jacket">
                <?= htmlspecialchars($post['title']) ?>
            </h1>
        </div>

        <div class="container mx-auto my-auto">
            <p><?= htmlspecialchars($post['content']) ?></p>
            <br>
            <i onclick="myFunction(this)" class="text-xl text-blue-500 fa fa-thumbs-up"><?= $post['likes'] ?></i>
            <i onclick="myFunction(this)" class="text-xl text-blue-500 px-6 fa fa-thumbs-down"><?= $post['dislikes'] ?></i>
            <?= htmlspecialchars($post['comment']) ?><br>
            <div>
                <textarea class="rounded-md ml-32 my-6 pt-2 bg-slate-200 text-black w-2/5" rows="2" name="comment" placeholder="comment"></textarea>
            </div>
        </div>
    </div>
</main>
<?php require("views/partials/footer.php") ?>