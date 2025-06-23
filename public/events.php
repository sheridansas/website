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
            <!-- TODO: This is static content for now. Will be updated to dynamic once Postgres is setup. -->
            <h1 class="text-white text-3xl roboto-slab font-bold">
                Upcoming Events
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <?php
                    database_display_events();
                ?>
            </div>

            <!-- TODO: This is static content for now. Will be updated to dynamic once Postgres is setup. -->
            <h1 class="mt-10 mb-5 text-white text-3xl roboto-slab font-bold">
                Previous Events
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <?php
                    database_display_events_old();
                ?>
            </div>
        </div>
    </body>
</html>
