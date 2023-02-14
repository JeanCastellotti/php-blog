<?php require 'partials/header.php' ?>

<?php require 'partials/nav.php' ?>

<main class="container mx-auto px-4 mt-10">
    <h1 class="text-2xl text-slate-300 font-semibold">Posts</h1>
    <ul class="mt-10 space-y-5">
        <?php foreach ($posts as $post) : ?>
            <li>
                <a href="/note?id=<?= $post['id'] ?>">
                    <?= $post['content'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</main>

<?php require 'partials/footer.php' ?>