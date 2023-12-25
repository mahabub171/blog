<?php require("views/partials/head.php") ?>

<?php require("views/partials/nav.php") ?>

<?php require("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold py-12 text-center">
            Reset password!
        </h1>
        <div class="container grid grid-cols-4 gap-4 mx-auto px-4">
            <form class="col-start-2 col-span-2 px-3 py-5 bg-gray-500 rounded-md" method="POST" action="restore">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $post['id'] ?>">
                <label for="email"><b>Email</b></label>
                <input class="my-3 px-2 py-2 w-full" id="email" type="email" name="email" autocomplete="email" value="<?= $_POST['email'] ?? '' ?>" placeholder="Enter Email" required>

                <br>

                <label for="email"><b>New password</b></label>
                <input class="my-3 px-2 py-2 w-full" id="email" type="password" name="new_password" autocomplete="email" placeholder="Enter new password" required>
                <?php if (isset($errors['new_password'])) : ?>
                    <p class="text-red-900 text-xs mt-2"><?= $errors['new_password'] ?></p>
                <?php endif; ?>
                <br>

                <label for="password"><b>Confirm new password</b></label>
                <input class="my-3 px-2 py-2 w-full" id="password" type="password" name="new_password_c" autocomplete="password" placeholder="Enter confirm new password" required>
                <?php if (isset($errors['new_password_c'])) : ?>
                    <p class="text-red-900 text-xs mt-2"><?= $errors['new_password_c'] ?></p>
                <?php endif; ?>
                <br>

                <button class="py-2 my-3 px-4 rounded-md bg-green-500 w-full" type="submit">Submit</button>
                <br>
                <?php if (isset($errors['do_not_match_pasword'])) : ?>
                    <p class="text-red-900 text-xs mt-2"><?= $errors['do_not_match_pasword'] ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>
</main>
<?php require("views/partials/footer.php") ?>