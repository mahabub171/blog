<?php require("views/partials/head.php") ?>

<?php require("views/partials/nav.php") ?>

<?php require("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php if (isset($_POST['email'])) { ?>

            <a href="/register" class="text-white-500  py-2 px-4 rounded-md bg-blue-500">Registration</a>

        <?php } else { ?>
            <h1 class="text-3xl font-bold py-12 text-center">
                Password reset!
            </h1>
            <div class="container grid grid-cols-4 gap-4 mx-auto px-4">
                <form class="col-start-2 col-span-2 px-3 py-5 bg-gray-500 rounded-md" method="POST" action="reset">
                    <input type="hidden" name="remember" value="ture">
                    <label for="email"><b>Your email address</b></label>
                    <input class="my-3 px-2 py-2 w-full" id="email" type="email" name="email" autocomplete="email" placeholder="Enter Email" required>

                    <br>

                    <button class="py-2 my-3 px-4 rounded-md bg-green-500 w-full" type="submit">Submit</button>
                    <br>


                </form>
            </div>
        <?php } ?>
    </div>
</main>
<?php require("views/partials/footer.php") ?>