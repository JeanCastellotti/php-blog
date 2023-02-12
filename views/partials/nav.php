<header class="py-5">
    <nav class="container mx-auto px-4 flex gap-5">
        <a 
            href="/" 
            class="<?= currentPage('/') ? 'bg-slate-400 text-slate-800' : 'bg-transparent' ?> hover:bg-slate-400 hover:text-slate-800 rounded px-2 py-1"
        >
            Home
        </a>
        <a 
            href="/about.php" 
            class="<?= currentPage('/about.php') ? 'bg-slate-400 text-slate-800' : 'bg-transparent' ?> hover:bg-slate-400 hover:text-slate-800 rounded px-2 py-1"
        >
            About
        </a>
        <a 
            href="/contact.php" 
            class="<?= currentPage('/contact.php') ? 'bg-slate-400 text-slate-800' : 'bg-transparent' ?> hover:bg-slate-400 hover:text-slate-800 rounded px-2 py-1"
        >
            Contact
        </a>
    </nav>
</header>