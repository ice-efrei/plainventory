<?php
    include "./sources/db/conn.php";
    echo '<script>console.log("'.$_GET['id'].'");</script>';
    $sql = "SELECT * FROM spools WHERE spoolid = ".$_GET['id'];
    $result = mysqli_query($conn, $sql);
    $spool = mysqli_fetch_array($result);

    if (!$spool) {
        die('<script>location.href="./spools.php?error=spool_not_found";</script>');
    }
?>
<main class="-mt-24 pb-8">
    <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">
        <div class="rounded-lg bg-white px-5 py-6 shadow sm:px-6">
            <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
                <div>
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        <?php echo $spool['material'] . " " . $spool['color'] . " " . $spool['spoolid']; ?>
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-400">Use a permanent address where you can receive mail.</p>
                    <input
                        id="text-input"
                        type="text"
                        value="<?php echo $spool['material'] . ";" . $spool['color'] . ";" . $spool['spoolid']; ?>"
                        class="hidden block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                </div>

                <form class="md:col-span-2">
                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">
                        <div class="col-span-full flex items-center gap-x-8">
<!--                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-24 w-24 flex-none rounded-lg bg-gray-800 object-cover">-->
                            <canvas id="qrcode-canvas" style="padding:1em; background-color:#E8E8E8"></canvas>
                            <svg id="qrcode-svg"
                                 class="h-24 w-24 flex-none rounded-lg bg-gray-800 object-cover"
<!--                                 style="width:30em; height:30em; padding:1em; background-color:#E8E8E8"-->
                            >
                                <rect width="100%" height="100%" fill="#FFFFFF" stroke-width="0"></rect>
                                <path d="" fill="#000000" stroke-width="0"></path>
                            </svg>
                            <div>
                                <button id="download" type="button" class="rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm hover:bg-white/20">Download</button>
<!--                                <p class="mt-2 text-xs leading-5 text-gray-400">JPG, GIF or PNG. 1MB max.</p>-->
<!--                                <strong>QR Code:</strong><br/><a id="download">(download)</a>-->
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                            <div class="mt-2">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Location</label>
                            <select id="location" name="location" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option>United States</option>
                                <option selected>Canada</option>
                                <option>Mexico</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-8 flex">
                        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script type="application/javascript" src="./sources/qr-code/qrcodegen.js"></script>
<script type="application/javascript" src="./sources/qr-code/qrcodegen-spools.js"></script>