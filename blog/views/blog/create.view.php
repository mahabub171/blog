<?php require("views/partials/head.php") ?>

<?php require("views/partials/nav.php") ?>

<?php require("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold py-12 text-center">
            Add Post
        </h1>
        <div class="container flex justify-center ">
            <form method="POST" action="store">
                <div class="flex justify-between">
                    <div>
                        <label class="my-3" for="img">Image Uplode</label>
                        <br>
                        <input type="file" id="img" name="img" accept=" .jpg, .jpeg, .png">
                    </div>
                    <div>
                        <label class="my-3" for="img">Publish date</label>
                        <br>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>

                            <input datepicker datepicker-buttons type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>
                    <!-- <div>
                        <?php if (isset($_POST['post_status']) !== "Publish") { ?>
                            <div class="relative max-w-sm">
                                <input class="py-2 px-4 rounded-md bg-green-500" type="button" name="post_status" value="Publish">
                            </div>
                        <?php } else { ?>
                            <input class="py-2 px-4 rounded-md bg-green-500" type="button" name="post_status" value="Unpublish">
                        <?php } ?>
                    </div>
                </div> -->
                <br>
                <div class="text-3xl font-bold">
                    <input class="my-3 px-2" type="text" name="title" placeholder="title" value="<?= $_POST['title'] ?? '' ?>">
                </div>
                <?php if (isset($errors['title'])) : ?>
                    <p class="text-red-500 text-xs mt-2"><?= $errors['title'] ?></p>
                <?php endif; ?>
                <br>
                <div>
                    <textarea class="my-3 px-2" rows="6" cols="50" name="content" placeholder="content"><?= $_POST['content'] ?? '' ?></textarea>
                    <?php if (isset($errors['content'])) : ?>
                        <p class="text-red-500 text-xs mt-2"><?= $errors['content'] ?></p>
                    <?php endif; ?>

                </div>
                <br>
                <div>
                    <input class="py-2 px-4 rounded-md bg-green-500" type="submit" name="save" value="save">
                </div>
            </form>
        </div>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
<?php require("views/partials/footer.php") ?>
