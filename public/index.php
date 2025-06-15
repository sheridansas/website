<!doctype html>
<html>
    <head>
        <!-- Header -->
        <?php include "includes/header.php"; ?>
    </head>
    <body class="bg-slate-900">
        <!-- Navigation -->
        <?php include "includes/navigation.php"; ?>

        <!-- Content -->
        <div class="min-md:ml-[24rem] p-5 text-blue-100">
            <h1 class="text-white text-3xl roboto-slab font-bold">
                Sheridan Server Administration Society
            </h1>

            <br />

            <p>
                The Sheridan Server Administration Society brings together students who are passionate about
                Self-Hosting, OSS, Linux, and all things tech related.
            </p>

            <button class="bg-slate-800 border-l-2 border-purple-400 p-3 mt-3 font-bold hover:bg-slate-600 hover:cursor-pointer transition-all">
                Join the Discord
            </button>

            <!-- TODO: This is static content for now. Will be updated to dynamic once Postgres is setup. -->
            <h1 class="mt-10 text-white text-3xl roboto-slab font-bold">
                Upcoming Events
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <div class="bg-slate-800 p-5 flex flex-col">
                    <img src="https://hackaday.com/wp-content/uploads/2016/01/stallman.jpg?w=640" class="h-40 w-full object-cover mb-4" />
                    <h2 class="text-xl font-semibold text-white mb-2">Linux Workshop</h2>
                    <div class="flex gap-2 mb-2">
                        <span class="bg-green-600 text-white px-2 py-1 text-sm rounded-full">Workshop</span>
                        <span class="bg-blue-600 text-white px-2 py-1 text-sm rounded-full">Linux</span>
                    </div>
                    <p class="mb-3 text-blue-200">An introductory workshop to Linux system administration and command-line essentials.</p>
                    <div class="text-sm text-blue-300">Owen Parsons</div>
                    <div class="text-sm text-blue-300">Campus: Trafalgar Campus</div>
                </div>

                <div class="bg-slate-800 p-5 flex flex-col">
                    <img src="https://hackaday.com/wp-content/uploads/2016/01/stallman.jpg?w=640" class="h-40 w-full object-cover mb-4" />
                    <h2 class="text-xl font-semibold text-white mb-2">Linux Workshop</h2>
                    <div class="flex gap-2 mb-2">
                        <span class="bg-green-600 text-white px-2 py-1 text-sm rounded-full">Workshop</span>
                        <span class="bg-blue-600 text-white px-2 py-1 text-sm rounded-full">Linux</span>
                    </div>
                    <p class="mb-3 text-blue-200">An introductory workshop to Linux system administration and command-line essentials.</p>
                    <div class="text-sm text-blue-300">Owen Parsons</div>
                    <div class="text-sm text-blue-300">Campus: Trafalgar Campus</div>
                </div>

                <div class="bg-slate-800 p-5 flex flex-col">
                    <img src="https://hackaday.com/wp-content/uploads/2016/01/stallman.jpg?w=640" class="h-40 w-full object-cover mb-4" />
                    <h2 class="text-xl font-semibold text-white mb-2">Linux Workshop</h2>
                    <div class="flex gap-2 mb-2">
                        <span class="bg-green-600 text-white px-2 py-1 text-sm rounded-full">Workshop</span>
                        <span class="bg-blue-600 text-white px-2 py-1 text-sm rounded-full">Linux</span>
                    </div>
                    <p class="mb-3 text-blue-200">An introductory workshop to Linux system administration and command-line essentials.</p>
                    <div class="text-sm text-blue-300">Owen Parsons</div>
                    <div class="text-sm text-blue-300">Campus: Trafalgar Campus</div>
                </div>
            </div>

            <h1 class="mt-10 mb-5 text-white text-3xl roboto-slab font-bold">
                Server Status
            </h1>

            <div class="bg-slate-800 p-3 mb-3 flex flex-col border-l-2 border-solid border-green-300">
                <h2 class="text-xl font-semibold text-white mb-2">Minecraft</h2>
                <span class="text-green-400 font-medium mb-2">Online</span>
                <p class="text-blue-200 mb-2">IP: mc.sheridansas.club</p>
            </div>

            <div class="bg-slate-800 p-3 mb-3 flex flex-col border-l-2 border-solid border-red-400">
                <h2 class="text-xl font-semibold text-white mb-2">File Transfer</h2>
                <span class="text-green-400 font-medium mb-2">Online</span>
                <p class="text-blue-200 mb-2">IP: mc.sheridansas.club</p>
            </div>
        </div>
    </body>
</html>
