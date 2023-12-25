<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>blog</title>
</head>

<body>
    <h1 class="text-3xl font-bold py-24 text-center">
        Blog
    </h1>
    <?php foreach ($filteredPosts as $post) : ?>
        <div class="grid grid-cols-3 px-6 gap-4">

            <div class="...">
                <a href="./single.php"><img src="img/Onboard_clients_successfully.png" alt="Girl in a jacket"></a>
            </div>

            <div class="col-span-2 ...">
                <h1 class="text-xl py-4 font-bold"><?php echo $post['title']; ?></h1>
                <p><?php echo $post['content'] ?></p>
            </div>

            <div class="col-start-2 col-end-4">
                <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i><?php echo $post['likes'] ?>
                <i onclick="myFunction(this)" class="p-6 fa fa-thumbs-down"><?php echo $post['dislikes'] ?></i>

                <textarea class="border-gray-950 px-4 pt-2 bg-slate-600 text-white" rows="2" cols="50" name="comment" placeholder="comment"></textarea>
            </div>

            <div class="col-start-3">
                <label for="publish">Publish Date:<?php echo $post['publish_date'] ?></label>
            </div>

        </div>
    <?php endforeach; ?>
</body>

</html>