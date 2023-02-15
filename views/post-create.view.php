<?php require 'partials/header.php' ?>

<?php require 'partials/nav.php' ?>

<main class="container mx-auto px-4 mt-10">
    <h1 class="text-2xl text-slate-300 font-semibold">Create a post</h1>

    <form method="POST" class="space-y-5 mt-10">
        <div>
            <input 
                type="text" 
                name="title" 
                class="rounded p-4 max-w-lg w-full" 
                placeholder="title">
        </div>

        <div>
            <textarea 
                name="content" 
                class="rounded p-4 resize-none max-w-lg w-full" 
                placeholder="content"></textarea>
        </div>

        <button 
            type="submit" 
            class="inline-block mt-10 bg-slate-700 text-slate-200 hover:bg-slate-400 hover:text-slate-800 rounded px-2 py-1">
            Create
        </button>
    </form>
</main>

<?php require 'partials/footer.php' ?>