<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main class="container mx-auto px-4 mt-10">
    <h1 class="text-2xl text-slate-300 font-semibold">Create a post</h1>

    <form method="POST" class="space-y-5 mt-10">
        <div class="flex flex-col gap-3">
            <input type="text" name="title" class="rounded p-4 max-w-lg w-full bg-slate-700" placeholder="title" value="<?= $_POST['title'] ?? '' ?>">
            <?php if (isset($errors['title'])) : ?>
                <small>
                    <?= $errors['title'] ?>
                </small>
            <?php endif; ?>
        </div>

        <div class="flex flex-col gap-3">
            <textarea name="content" class="rounded p-4 resize-none max-w-lg w-full bg-slate-700"
                placeholder="content"><?= $_POST['content'] ?? '' ?></textarea>
            <?php if (isset($errors['content'])) : ?>
                <small>
                    <?= $errors['content'] ?>
                </small>
            <?php endif; ?>
        </div>

        <button type="submit"
            class="inline-block mt-10 bg-gray-900 text-slate-400 hover:text-white hover:bg-indigo-500 rounded px-4 py-2">
            Create
        </button>
    </form>
</main>

<?php require base_path('views/partials/footer.php') ?>