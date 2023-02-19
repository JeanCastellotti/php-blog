<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main class="container mx-auto px-4 mt-10">
    <h1 class="text-2xl text-slate-300 font-semibold">Edit a post</h1>

    <form method="POST" action="/post" class="space-y-5 mt-10">
        <div class="flex flex-col gap-3">
            <input type="text" name="title" class="rounded p-4 max-w-lg w-full bg-slate-700" placeholder="title" value="<?= $_POST['title'] ?? $post['title'] ?>">
            <?php if (isset($errors['title'])) : ?>
                <small>
                    <?= $errors['title'] ?>
                </small>
            <?php endif; ?>
        </div>

        <div class="flex flex-col gap-3">
            <textarea name="content" class="rounded p-4 resize-none max-w-lg w-full bg-slate-700" placeholder="content"><?= $_POST['content'] ?? $post['content'] ?></textarea>
            <?php if (isset($errors['content'])) : ?>
                <small>
                    <?= $errors['content'] ?>
                </small>
            <?php endif; ?>
        </div>

        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $post['id'] ?>">

        <div class="flex gap-3">
            <a href="/post?id=<?= $post['id'] ?>" class="inline-block bg-red-500 text-white rounded px-4 py-2">Cancel</a>
            <button type="submit" class="inline-block bg-gray-900 text-slate-400 hover:text-white hover:bg-indigo-500 rounded px-4 py-2">
                Update
            </button>

            <!-- <form method="POST" action="/post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $post['id'] ?>">
                <button type="submit" class="inline-block bg-gray-900 text-slate-400 hover:text-white hover:bg-indigo-500 rounded px-4 py-2">
                    Delete
                </button>
            </form> -->
        </div>
    </form>
</main>

<?php require base_path('views/partials/footer.php') ?>