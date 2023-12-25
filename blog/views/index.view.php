<?php require("partials/head.php") ?>

<?php require("partials/nav.php") ?>

<?php require("partials/banner.php") ?>
<main>


    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">


        <?php $l = count($posts);
        foreach ($posts as $post) : ?>
            <div id="post_lenght" class="grid grid-cols-3 px-6 gap-4">

                <div class="...">
                    <a href="single?id=<?= $post['id'] ?>"><img src="/img/<?= $post['img'] ?>" alt="Girl in a jacket"></a>
                </div>

                <div class="col-span-2 ...">
                    <h1 class="text-xl py-4 font-bold"><?= htmlspecialchars($post['title']) ?? '' ?></h1>
                    <p><?= htmlspecialchars($post['content']) ?></p>
                </div>

                <div class="post col-start-2 col-end-4">
                    <!-- <i id="<?= "lb" . $post['id'] ?>" class="text-xl text-blue-500 fa fa-thumbs-up"><span id="<?= "lc" . $post['id'] ?>">0</span></i>
                    <i id="<?= "db" . $post['id'] ?>" class="text-xl text-blue-500 p-6 fa fa-thumbs-down"><span id="<?= "dc" . $post['id'] ?>">0</span></i> -->
                    <!-- <i id="like-button" class="text-xl text-blue-500 fa fa-thumbs-up"><span id="like-count">0</span></i>
                    <i id="dislike-button" class="text-xl text-blue-500 p-6 fa fa-thumbs-down"><span id="dislike-count">0</span></i> -->
                    <div class="flex ...">
                        <div class=" post-rating">
                            <i class="post-rating-button text-xl text-blue-500  mt-5  fa fa-thumbs-up"><span class="post-rating-count"><?= $post['likes'] ?></span></i>
                        </div>
                        <div class=" post-rating">
                            <i class="post-rating-button text-xl text-blue-500 p-6 fa fa-thumbs-down"><span class="post-rating-count"><?= $post['dislikes'] ?></span></i>
                        </div>
                    </div>

                    <div class="flex justify-end mr-44">
                        <div class="ml-28">
                            <?php if ($_SESSION['user'] ?? false) : ?>
                                <?php foreach ($comment as $data) : ?>
                                    <?php if ($post['id'] === $data['post_id']) : ?>
                                        <?php echo $data['comment'];
                                        echo "<br>"; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                                <form method="POST" action="/comment">
                                    <input type="hidden" name="id" value="<?php echo $post['id'] ?>">

                                    <textarea class="border-gray-900 px-2 pt-2 bg-slate-200 text-black" rows="2" cols="50" name="comment" placeholder="comment"></textarea>

                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Send
                                    </button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        <?php endforeach; ?>
    </div>
</main>
<script>
    // // JavaScript
    // const l = "<?php // echo $l;
                    //             
                    ?>";

    // for (let j = 0; j < l; j++) {
    //     let lbid[j] = document.getElementsByTagName("i")[j].id;
    //     let lcid[j] = document.getElementsByTagName("span")[j].id;
    //     let dlbid[j] = document.getElementsByTagName("i")[j].id;
    //     let dlcid[j] = document.getElementsByTagName("span")[j].id;

    //     const likeButton[j] = document.getElementById('lbid[j]');
    //     const likeCountElement[j] = document.getElementById('lcid[j]');
    // }

    // let lbid[j] = document.getElementsByTagName("i")[j].id;
    // let lcid[j] = document.getElementsByTagName("span")[j].id;
    // let dlbid[j] = document.getElementsByTagName("i")[j].id;
    // let dlcid[j] = document.getElementsByTagName("span")[j].id;
    // alert(dlbid);
    // const likeButton[j] = document.getElementById(lbid[j]);
    // const likeCountElement[j] = document.getElementById(lcid[j]);


    // countfunction(likeCountElement, likeButton);
    // functioin countfunction(lcid) {
    //         let likeCount[j] = JSON.parse(localStorage.getItem('likeCount')) || 0;
    //         likeCountElement[j].innerText = likeCount[j];

    //         // Listen for clicks on the like button and increment the like count
    //         likeButton.addEventListener('click', () => {
    //                     likeCount[j]++;
    //                     likeCountElement[j].innerText = likeCount[j];

    //                     // Store the updated like count in localStorage
    //                     localStorage.setItem('likeCount', JSON.stringify(likeCount[j]));

    //                 }

    // const likeButton = document.getElementById('like-button');
    // const likeCountElement = document.getElementById('like-count');

    // // Check if like count data exists in localStorage and set the count accordingly
    // let likeCount = JSON.parse(localStorage.getItem('likeCount')) || 0;
    // likeCountElement.innerText = likeCount;

    // // Listen for clicks on the like button and increment the like count
    // likeButton.addEventListener('click', () => {
    //     likeCount++;
    //     likeCountElement.innerText = likeCount;

    //     // Store the updated like count in localStorage
    //     localStorage.setItem('likeCount', JSON.stringify(likeCount));
    // });
    // const dislikeButton = document.getElementById('dislike-button');
    // const dislikeCountElement = document.getElementById('dislike-count');

    // // Check if like count data exists in localStorage and set the count accordingly
    // let dislikeCount = JSON.parse(localStorage.getItem('dislikeCount')) || 0;
    // dislikeCountElement.innerText = dislikeCount;

    // // Listen for clicks on the like button and increment the like count
    // dislikeButton.addEventListener('click', () => {
    //     dislikeCount++;
    //     dislikeCountElement.innerText = dislikeCount;

    //     // Store the updated like count in localStorage
    //     localStorage.setItem('dislikeCount', JSON.stringify(dislikeCount));
    // });
    // var post_lenghts = document.querySelectorAll('.post_lenght');
    // post_lenghts.forEach(function(post_lenght) {
    //     let button = document.getElementsByTagName("i").id;
    //     let count = document.getElementsByTagName("span").count;

    //     const likeButton = document.getElementById(button);
    //     const likeCountElement = document.getElementById(count);


    //     let likeCount = JSON.parse(localStorage.getItem(count)) || 0;
    //     likeCountElement.innerText = likeCount;

    //     // Listen for clicks on the like button and increment the like count
    //     likeButton.addEventListener('click', () => {
    //         likeCount++;
    //         likeCountElement.innerText = likeCount;

    //         // Store the updated like count in localStorage
    //         localStorage.setItem(count, JSON.stringify(likeCount));




    //         var i = post_lenght.querySelector('i');
    //         var span = post_lenght.querySelector('span');
    //         i.addEventListener('click', function() {
    //             span.select();
    //             document.execCommand("Copy");
    //         })
    //     })

    // })
    // var post_lenghts = document.querySelectorAll('.post_lenght');
    // post_lenghts.forEach(function(post_lenght) {

    //     // JavaScript
    //     var likeb;
    //     var likec;
    //     const likeButton = document.getElementById(likeb);
    //     const likeCountElement = document.getElementById(likec);


    //     // Check if like count data exists in localStorage and set the count accordingly
    //     let likeCount = JSON.parse(localStorage.getItem(likec)) || 0;
    //     likeCountElement.innerText = likeCount;

    //     // Listen for clicks on the like button and increment the like count
    //     likeButton.addEventListener('click', () => {
    //         likeCount++;
    //         likeCountElement.innerText = likeCount;

    //         // Store the updated like count in localStorage
    //         localStorage.setItem(likec, JSON.stringify(likeCount));
    //     });
    //     likeb++;
    //     likec++;
    // })

    // JavaScript

    document.querySelectorAll(".post").forEach(post => {
        const postId = post.dataset.postId;
        const ratings = post.querySelectorAll(".post-rating");
        const likeRating = ratings[0];

        ratings.forEach(rating => {
            const button = rating.querySelector(".post-rating-button");
            const count = rating.querySelector(".post-rating-count");

            button.addEventListener("click", async () => {
                if (rating.classList.contains("post-rating-selected")) {
                    return;
                }

                count.textContent = Number(count.textContent) + 1;


                ratings.forEach(rating => {
                    if (rating.classList.contains("post-rating-selected")) {
                        const count = rating.querySelector(".post-rating-count");

                        count.textContent = Math.max(0, Number(count.textContent) - 1);
                        rating.classList.remove("post-rating-selected");
                    }
                });

                rating.classList.add("post-rating-selected");

                const likeOrDislike = likeRating === rating ? "like" : "dislike";
                const response = await fetch(`/posts/${postId}/${likeOrDislike}`);
                const body = await response.json();
            });
        });
    });
</script>
<?php require("partials/footer.php") ?>