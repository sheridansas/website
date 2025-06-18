<!doctype html>
<html>
    <head>
        <!-- Header -->
        <?php include "../includes/header.php"; ?>
        <?php include "../includes/admin_protect.php"; ?>
    </head>
    <body class="bg-slate-900">
        <!-- Navigation -->
        <?php include "../includes/navigation.php"; ?>

        <!-- Content -->
        <div id="content" class="min-md:ml-[24rem] p-5 text-blue-100 min-h-screen">
            <h1 class="mb-5 text-white text-3xl roboto-slab font-bold">
                Admin Content Management
            </h1>

            <form action="admin/submit_event.php" method="POST" class="space-y-5 max-w-xl">
                <div>
                    <label for="title" class="block text-white mb-1">Title</label>
                    <input type="text" name="title" id="title" required class="w-full p-2 rounded bg-slate-800 text-white border border-slate-700">
                </div>

                <div>
                    <label for="tags" class="block text-white mb-1">Tags</label>
                    <input type="text" name="tags" id="tags" placeholder="Comma-separated" class="w-full p-2 rounded bg-slate-800 text-white border border-slate-700">
                </div>

                <div>
                    <label for="description" class="block text-white mb-1">Description</label>
                    <textarea name="description" id="description" rows="4" required class="w-full p-2 rounded bg-slate-800 text-white border border-slate-700"></textarea>
                </div>

                <div>
                    <label for="instructor" class="block text-white mb-1">Instructor</label>
                    <input type="text" name="instructor" id="instructor" required class="w-full p-2 rounded bg-slate-800 text-white border border-slate-700">
                </div>

                <div>
                    <label for="date" class="block text-white mb-1">Date</label>
                    <input type="date" name="date" id="date" required class="w-full p-2 rounded bg-slate-800 text-white border border-slate-700">
                </div>

                <div>
                    <label for="campus" class="block text-white mb-1">Campus</label>
                    <input type="text" name="campus" id="campus" required class="w-full p-2 rounded bg-slate-800 text-white border border-slate-700">
                </div>

                <button type="submit" class="mt-4 px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded">
                    Submit Event
                </button>
            </form>
        </div>
    </body>
</html>
