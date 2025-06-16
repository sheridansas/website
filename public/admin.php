<!doctype html>
<html>
    <head>
        <!-- Header -->
        <?php include "includes/header.php"; ?>
        <?php include "includes/database.php"; ?>
    </head>
    <body class="bg-slate-900">
        <?php
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $failed = true;

        $query = "SELECT * FROM users WHERE username = $1 AND password = $2";
        $result = pg_query_params($conn, $query, [$username, $password]);

        if ($result && pg_num_rows($result) > 0) {
            session_regenerate_id(true);

            $failed = false;
            $_SESSION["is_admin"] = true;
            header("Location: /admin/");
            exit;
        }
        ?>

        <!-- Content -->
        <div id="content" class="p-5 text-blue-100 min-h-screen text-center">
            <h1 class="mb-5 text-white text-3xl roboto-slab font-bold">
                SAS Admin Login
            </h1>

            <?php
            if($failed && isset($username) && isset($password)) {
                echo "<div class='text-red-400 mb-2'>Invalid credentials provided.</div>";
            }
            ?>

            <form action="" method="POST">
                <input
                    name="username"
                    type="text"
                    class="bg-slate-950 w-72 p-3 rounded-sm border-1 border-slate-800 mb-2"
                    placeholder="Username" />
                <br />
                <input
                    name="password"
                    type="password"
                    class="bg-slate-950 w-72 p-3 rounded-sm border-1 border-slate-800 mb-2"
                    placeholder="Password" />
                <br />
                <input
                    type="submit"
                    class="bg-slate-950 w-72 p-3 rounded-sm border-1 border-slate-800 hover:cursor-pointer"
                    value="Login" />
            </form>
        </div>
    </body>
</html>
