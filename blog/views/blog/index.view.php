<?php require("views/partials/head.php") ?>

<?php require("views/partials/nav.php") ?>

<?php require("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php if (empty($posts)) { ?>
            <p class="py-6">
                <a href="/blog/create" class="text-blue-500 hover:underline">Create Post</a>
            </p>
        <?php } ?>
        <?php if (!empty($posts)) { ?>

            <p class="py-6">
                <a href="/blog/create" class="text-blue-500 hover:underline">Create Post</a>
            </p>
            <?php foreach ($posts as $post) : ?>

                <div class="grid grid-cols-3 px-6 gap-4">

                    <div class="...">
                        <a href="/blog/show?id=<?= $post['id'] ?>"><img src="/img/<?= $post['img'] ?>" alt="Girl in a jacket"></a>
                    </div>

                    <div class="col-span-2 ...">
                        <h1 class="text-xl py-4 font-bold"><?= htmlspecialchars($post['title']) ?></h1>
                        <p><?= htmlspecialchars($post['content']) ?></p>
                    </div>

                    <div class="col-start-2 col-end-4">
                        <!-- 
                        <i onclick="myFunction(this)" class="text-xl text-blue-500 fa fa-thumbs-up"><?php echo $post['likes'] ?></i>
                        <i onclick="myFunction(this)" class="text-xl text-blue-500 p-6 fa fa-thumbs-down"><?php echo $post['dislikes'] ?></i>

                        <textarea class="border-gray-900 px-4 pt-2 bg-slate-200 text-black" rows="2" cols="50" name="comment" placeholder="comment"></textarea> -->

                    </div>

                    <div class="col-start-3">
                        <label for="publish">Publish Date: <?php echo $post['publish_date'] ?></label>
                    </div>

                </div>
                <br>


            <?php endforeach; ?>
        <?php } ?>
    </div>
</main>
<?php require("views/partials/footer.php") ?>