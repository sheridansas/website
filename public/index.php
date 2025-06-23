<!doctype html>
<html>
    <head>
        <!-- Header -->
        <?php include "includes/header.php"; ?>
        <?php include "includes/database.php"; ?>
    </head>
    <body class="bg-slate-900">
        <!-- Navigation -->
        <?php include "includes/navigation.php"; ?>

        <!-- Content -->
        <div id="content" class="min-md:ml-[24rem] p-5 text-blue-100 min-h-screen">
            <h1 class="text-white text-3xl roboto-slab font-bold">
                Sheridan Server Administration Society
            </h1>

            <br />

            <p>
                The Sheridan Server Administration Society brings together students who are passionate about
                self-hosting, OSS, Linux, and all things tech related.
            </p>

            <a href="https://discord.gg/DUGCAWTjuP">
                <button class="bg-slate-800 border-l-2 border-red-400 p-3 mt-3 font-bold hover:bg-slate-600 hover:cursor-pointer transition-all">
                    Join the Discord
                </button>
            </a>

            <button class="bg-slate-800 border-l-2 border-green-400 p-3 mt-3 font-bold hover:bg-slate-600 hover:cursor-pointer transition-all">
                Join the IRC
            </button>

            <a href="https://sheridancollege.campuslabs.ca/engage/organization/sas">
                <button class="bg-slate-800 border-l-2 border-blue-400 p-3 mt-3 font-bold hover:bg-slate-600 hover:cursor-pointer transition-all">
                    Clubs Corner
                </button>
            </a>

            <h1 class="mt-10 text-white text-3xl roboto-slab font-bold">
                Upcoming Events
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <?php
                    database_display_events();
                ?>
            </div>

            <h1 class="mt-10 mb-5 text-white text-3xl roboto-slab font-bold">
                Server Status
            </h1>

            <div class="bg-slate-800 p-3 mb-3 flex flex-col border-l-2 border-solid border-green-300">
                <h2 class="text-xl font-semibold text-white mb-2">Sasha</h2>
                <span class="text-green-400 font-medium mb-2">Online</span>
                <p class="text-blue-200 mb-2">IP: sheridansas.club</p>
            </div>

            <div class="bg-slate-800 p-3 mb-3 flex flex-col border-l-2 border-solid border-red-400">
                <h2 class="text-xl font-semibold text-white mb-2">File Transfer</h2>
                <span class="text-red-400 font-medium mb-2">Offline</span>
                <p class="text-blue-200 mb-2">IP: ftp.sheridansas.club</p>
            </div>
        </div>
    </body>
</html>
