<?php require("./views/partials/head.php")?>

    <?php require("./views/partials/nav.php")?> 
    
    <?php require("./views/partials/banner.php")?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->

            <p class = "mb-6">
                <a href="/notes" class = "text-blue-500 hover:underline "> go back...</a>
            </p>

            <p class='mx-auto'>
                <?= htmlspecialchars($note['note']) ?>
            </p>   
        </div>
    </main>

<?php require("./views/partials/foot.php")?>