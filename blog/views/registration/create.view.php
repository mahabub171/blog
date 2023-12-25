<?php require("views/partials/head.php") ?>

<?php require("views/partials/nav.php") ?>

<?php require("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold py-12 text-center">
            Registration for a new account
        </h1>
        <div class="container grid grid-cols-4 gap-4 mx-auto px-4">
            <form class="col-start-2 col-span-2 px-3 py-5 bg-gray-500 rounded-md" method="POST" action="/register">
                <input type="hidden" name="remember" value="ture">
                <label for="fullname"><b>User name</b></label>
                <input class="my-3 px-2 py-2 w-full" id="fullname" type="text" name="user_name" value="<?= $_POST['user_name'] ?? '' ?>" autocomplete="user_name" placeholder="Enter Name" required>
                <?php if (isset($errors['user_name'])) : ?>
                    <p class="text-red-900 text-xs mt-2"><?= $errors['user_name'] ?></p>
                <?php endif; ?>
                <br>

                <label for="email"><b>Email</b></label>
                <input class="my-3 px-2 py-2 w-full" id="email" type="email" name="email" value="<?= $_POST['email'] ?? '' ?>" autocomplete="email" placeholder="Enter Email" required>
                <?php if (isset($errors['email'])) : ?>
                    <p class="text-red-900 text-xs mt-2"><?= $errors['email'] ?></p>
                <?php endif; ?>
                <br>

                <label for="password"><b>Password</b></label>
                <input class="my-3 px-2 py-2 w-full" id="password" type="password" name="password" value="<?= $_POST['password'] ?? '' ?>" autocomplete="password" placeholder="Enter Password" required>
                <?php if (isset($errors['password'])) : ?>
                    <p class="text-red-900 text-xs mt-2"><?= $errors['password'] ?></p>
                <?php endif; ?>
                <br>

                <button class="py-2 my-3 px-4 rounded-md bg-green-500 w-full" type="submit">Registration</button>
            </form>
        </div>
    </div>
</main>
<?php require("views/partials/footer.php") ?>