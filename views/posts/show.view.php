<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main class="container mx-auto px-4 mt-10">
    <h1 class="text-2xl text-slate-300 font-semibold">
        <?= $post['title'] ?>
    </h1>
    <p class="mt-10">
        <?= $post['content'] ?>
    </p>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <button type="submit"
            class="inline-block mt-10 bg-gray-900 text-slate-400 hover:text-white hover:bg-indigo-500 rounded px-4 py-2">
            Delete
        </button>
    </form>
</main>

<?php require base_path('views/partials/footer.php') ?>