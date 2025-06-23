<?php
$env = parse_ini_file("../.env");

$GLOBALS['conn'] = pg_connect(
    "host={$env["DATABASE_HOST"]} port={$env["DATABASE_PORT"]} dbname=sas user={$env["DATABASE_USER"]} password={$env["DATABASE_PASS"]}"
);

// https://stackoverflow.com/questions/3068683/convert-postgresql-array-to-php-array
function pg_array_parse($literal)
{
    if ($literal == '') return;
    preg_match_all('/(?<=^\{|,)(([^,"{]*)|\s*"((?:[^"\\\\]|\\\\(?:.|[0-9]+|x[0-9a-f]+))*)"\s*)(,|(?<!^\{)(?=\}$))/i', $literal, $matches, PREG_SET_ORDER);
    $values = [];
    foreach ($matches as $match) {
        $values[] = $match[3] != '' ? stripcslashes($match[3]) : (strtolower($match[2]) == 'null' ? null : $match[2]);
    }
    return $values;
}

function database_display_events() {
    $response = pg_query($GLOBALS['conn'], "SELECT * FROM events WHERE date >= NOW()");

    if (!$response) {
        return;
    }

    while ($row = pg_fetch_row($response)) {
        // $id = $row[0];
        $date = htmlspecialchars($row[1]);
        $tags = pg_array_parse(htmlspecialchars($row[2]));
        $campus = htmlspecialchars($row[3]);
        $instructor = htmlspecialchars($row[4]);
        $description = htmlspecialchars($row[5]);
        $banner_image = htmlspecialchars($row[6]);
        $title = htmlspecialchars($row[7]);

        $tag_html = "";
        foreach($tags as $tag) {
            $tag_html = $tag_html .
                "<span class=\"bg-green-600 text-white px-2 py-1 text-sm rounded-sm\">${tag}</span>";
        }

        echo <<<EOL
            <div class="bg-slate-800 p-0 rounded-md overflow-hidden w-full shadow-lg border border-slate-700">
                <div class="bg-slate-700 flex items-center justify-between px-3 py-1">
                    <div class="w-13"></div>
                    <span class="text-sm text-white ubuntu-mono-regular">${title}</span>
                    <div class="flex space-x-2">
                        <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                        <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                    </div>
                </div>
                <img
                    src="${banner_image}"
                    class="h-40 w-full object-cover mb-4 brightness-85" />
                <div class="px-5 pb-5 flex flex-col">
                    <h2 class="text-xl font-semibold text-white mb-2">${title}</h2>
                    <div class="flex gap-2 mb-2">
                        ${tag_html}
                    </div>
                    <p class="mb-3 text-blue-200">${description}</p>
                    <div class="text-sm text-blue-200">${instructor}</div>
                    <div class="text-sm text-blue-200">${campus}</div>
                    <div class="text-sm text-blue-300">${date}</div>
                </div>
            </div>
        EOL;
    }
}

function database_display_events_old() {
    $response = pg_query($GLOBALS['conn'], "SELECT * FROM events WHERE date < NOW()");

    if (!$response) {
        return;
    }

    while ($row = pg_fetch_row($response)) {
        // $id = $row[0];
        $date = htmlspecialchars($row[1]);
        $tags = pg_array_parse(htmlspecialchars($row[2]));
        $campus = htmlspecialchars($row[3]);
        $instructor = htmlspecialchars($row[4]);
        $description = htmlspecialchars($row[5]);
        $banner_image = htmlspecialchars($row[6]);
        $title = htmlspecialchars($row[7]);

        $tag_html = "";
        foreach($tags as $tag) {
            $tag_html = $tag_html .
                "<span class=\"bg-green-600 text-white px-2 py-1 text-sm rounded-sm\">${tag}</span>";
        }

        echo <<<EOL
            <div class="bg-slate-800 p-0 rounded-md overflow-hidden w-full shadow-lg border border-slate-700">
                <div class="bg-slate-700 flex items-center justify-between px-3 py-1">
                    <div class="w-13"></div>
                    <span class="text-sm text-white ubuntu-mono-regular">${title}</span>
                    <div class="flex space-x-2">
                        <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                        <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                    </div>
                </div>
                <img
                    src="${banner_image}"
                    class="h-40 w-full object-cover mb-4 brightness-85" />
                <div class="px-5 pb-5 flex flex-col">
                    <h2 class="text-xl font-semibold text-white mb-2">${title}</h2>
                    <div class="flex gap-2 mb-2">
                        ${tag_html}
                    </div>
                    <p class="mb-3 text-blue-200">${description}</p>
                    <div class="text-sm text-blue-200">${instructor}</div>
                    <div class="text-sm text-blue-200">${campus}</div>
                    <div class="text-sm text-blue-300">${date}</div>
                </div>
            </div>
        EOL;
    }
}
?>
