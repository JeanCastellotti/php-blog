<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main class="container mx-auto px-4 mt-10">
    <h1 class="text-2xl text-slate-300 font-semibold">
        <?= $post['title'] ?>
    </h1>
    <p class="mt-10">
        <?= $post['content'] ?>
    </p>
    <a href="/post/edit?id=<?= $post['id'] ?>" class="inline-block mt-10 bg-orange-500 text-white hover:bg-orange-600 rounded px-4 py-2">Edit</a>
</main>

<?php require base_path('views/partials/footer.php') ?>