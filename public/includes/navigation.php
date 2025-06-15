<!-- Mobile Header -->
<header class="bg-slate-900 text-white w-full flex items-center justify-between p-4 md:hidden">
    <div class="flex items-center gap-4">
        <img src="/assets/logo.png" class="w-10 h-10">

        <!-- Automation title truncation for mobile support -->
        <h1 class="min-sm:inline hidden roboto-slab font-bold text-lg">Sheridan Server Administration Society</h1>
        <h1 class="min-sm:hidden inline roboto-slab font-bold text-lg">Server Administration Society</h1>
    </div>
    <button id="menu-toggle" class="text-white text-2xl focus:outline-none">
        <i class="fa fa-bars"></i>
    </button>
</header>

<!-- Mobile Dropdown Menu -->
<nav id="mobile-menu" class="hidden flex-col md:hidden border-t-2 border-slate-800 bg-slate-900 space-y-1 py-2">
    <a href="/" class="block text-white px-6 py-3 text-xl roboto-slab hover:bg-gradient-to-l hover:from-slate-900 hover:to-slate-800">
        <i class="fa fa-sharp fa-house w-6 inline-block mr-3"></i> Home
    </a>
    <a href="/lessons.php" class="block text-white px-6 py-3 text-xl roboto-slab hover:bg-gradient-to-l hover:from-slate-900 hover:to-slate-800">
        <i class="fa fa-sharp fa-solid fa-graduation-cap w-6 inline-block mr-3"></i> Lessons
    </a>
    <a href="/events.php" class="block text-white px-6 py-3 text-xl roboto-slab hover:bg-gradient-to-l hover:from-slate-900 hover:to-slate-800">
        <i class="fa fa-sharp fa-solid fa-calendar w-6 inline-block mr-3"></i> Events
    </a>
    <a href="/resources.php" class="block text-white px-6 py-3 text-xl roboto-slab hover:bg-gradient-to-l hover:from-slate-900 hover:to-slate-800">
        <i class="fa fa-sharp fa-solid fa-paperclip w-6 inline-block mr-3"></i> Resources
    </a>
</nav>

<!-- Desktop Sidebar -->
<aside class="hidden md:flex fixed top-0 left-0 h-full w-sm flex-col space-y-6 border-slate-800 border-r-2 bg-slate-900">
    <div class="p-6 mb-0 text-center">
        <div class="flex gap-5">
            <img src="/assets/logo.png" class="w-14 h-14 mx-auto">
            <h1 class="roboto-slab text-white font-bold text-xl">Sheridan Server Administration Society</h1>
        </div>
    </div>
    <a href="/" class="text-white px-6 py-3 mb-0 text-xl roboto-slab hover:bg-gradient-to-r hover:from-slate-900 hover:to-slate-800">
        <i class="fa fa-sharp fa-house w-9"></i> Home
    </a>
    <a href="/lessons.php" class="text-white px-6 py-3 mb-0 text-xl roboto-slab hover:bg-gradient-to-r hover:from-slate-900 hover:to-slate-800">
        <i class="fa fa-sharp fa-solid fa-graduation-cap w-9"></i> Lessons
    </a>
    <a href="/events.php" class="text-white px-6 py-3 mb-0 text-xl roboto-slab hover:bg-gradient-to-r hover:from-slate-900 hover:to-slate-800">
        <i class="fa fa-sharp fa-solid fa-calendar w-9"></i> Events
    </a>
    <a href="/resources.php" class="text-white px-6 py-3 mb-0 text-xl roboto-slab hover:bg-gradient-to-r hover:from-slate-900 hover:to-slate-800">
        <i class="fa fa-sharp fa-solid fa-paperclip w-9"></i> Resources
    </a>
</aside>

<script>
document.getElementById('menu-toggle').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
});
</script>
