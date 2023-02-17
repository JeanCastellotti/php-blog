<header class="py-5">
    <nav class="container mx-auto px-4 flex gap-5">
        <a href="/" class="<?= currentPage('/') ? 'bg-slate-700 text-slate-200' : 'bg-transparent' ?> hover:bg-slate-400 hover:text-slate-800 rounded px-2 py-1">
            Home
        </a>
        <a href="/about" class="<?= currentPage('/about') ? 'bg-slate-700 text-slate-200' : 'bg-transparent' ?> hover:bg-slate-400 hover:text-slate-800 rounded px-2 py-1">
            About
        </a>
        <a href="/contact" class="<?= currentPage('/contact') ? 'bg-slate-700 text-slate-200' : 'bg-transparent' ?> hover:bg-slate-400 hover:text-slate-800 rounded px-2 py-1">
            Contact
        </a>
        <a href="/posts" class="<?= currentPage('/posts') ? 'bg-slate-700 text-slate-200' : 'bg-transparent' ?> hover:bg-slate-400 hover:text-slate-800 rounded px-2 py-1">
            Posts
        </a>
    </nav>
</header>