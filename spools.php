<?php include "./sources/templates/pagetop.php"; ?>
<main class="-mt-24 pb-8 h-2/3">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <h1 class="sr-only">Gestion des stocks de PLA</h1>
        <!-- Main 3 column grid -->
        <div class="grid grid-cols-1 items-start gap-4 lg:grid-cols-3 lg:gap-8">
            <!-- Left column -->
            <div class="grid grid-cols-1 gap-4 lg:col-span-2 h-full">
                <section aria-labelledby="section-1-title" >
                    <h2 class="sr-only" id="section-1-title">PLA Table</h2>
                    <div class="overflow-hidden rounded-lg bg-white shadow">
                        <div class="p-6">
                            <div class="">
                                <div class="inline-block min-w-full py-2 align-middle h-block overflow-y-scroll">
                                    <table class="min-w-full border-separate border-spacing-0">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">ID</th>
                                            <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">Matière</th>
                                            <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Propriétaire</th>
                                            <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell">Poids</th>
                                            <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter">Couleur</th>
                                            <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-3 pr-4 backdrop-blur backdrop-filter sm:pr-6 lg:pr-8">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include "./sources/db/conn.php";

                                        $sql = "select * from spools";
                                        $result = mysqli_query($conn, $sql);

                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<tr>";
                                            echo "<td class='whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8'>".$row['spoolid']."</td>";
                                            echo "<td class='whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8'>".$row['material']."</td>";
                                            echo "<td class='whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 sm:table-cell'>".$row['owner']."</td>";
                                            echo "<td class='whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 lg:table-cell'>".$row['weight']."</td>";
                                            echo "<td class='whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500'>".$row['color']."</td>";
                                            echo "<td class='relative whitespace-nowrap border-b border-gray-200 py-4 pr-4 pl-3 text-right text-sm font-medium sm:pr-8 lg:pr-8'>";
                                            echo "<a href='#' class='text-indigo-600 hover:text-indigo-900'>Edit<span class='sr-only'>, Lindsay Walton</span></a>";
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Right column -->
            <div class="grid grid-cols-1 gap-4">
                <section aria-labelledby="section-2-title">
                    <h2 class="sr-only" id="section-2-title">Section title</h2>
                    <div class="rounded-lg bg-white shadow">
                        <div class="p-6">
                            <form class="h-block overflow-y-scroll" action="sources/db/add.php" method="POST">
                                <div class="space-y-12">
                                    <div class="border-b border-gray-900/10 pb-12">
                                        <h2 class="text-base font-semibold leading-7 text-gray-900">Ajouter une bobine</h2>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">Toutes les données sont enregistré en minuscules.</p>

                                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                            <div class="sm:col-span-4">
                                                <label for="material" class="block text-sm font-medium leading-6 text-gray-900">Material</label>
                                                <div class="mt-2">
                                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                        <input type="text" name="material" id="material" autocomplete="material" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="pla">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:col-span-4">
                                                <label for="color" class="block text-sm font-medium leading-6 text-gray-900">Couleur</label>
                                                <div class="mt-2">
                                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                        <input type="text" name="color" id="color" autocomplete="color" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Gris">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:col-span-4">
                                                <label for="owner" class="block text-sm font-medium leading-6 text-gray-900">Propriétaire</label>
                                                <div class="mt-2">
                                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                        <input type="text" name="owner" id="owner" autocomplete="owner" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="ICE Efrei">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:col-span-4">
                                                <label for="weight" class="block text-sm font-medium leading-6 text-gray-900">Poids (g)</label>
                                                <div class="mt-2">
                                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                        <input type="number" name="weight" id="weight" autocomplete="weight" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="1000">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:col-span-4">
                                                <label for="printer" class="block text-sm font-medium leading-6 text-gray-900">Imprimante</label>
                                                <div class="mt-2">
                                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                        <input type="text" name="printer" id="printer" autocomplete="printer" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:col-span-4">
                                                <label for="brand" class="block text-sm font-medium leading-6 text-gray-900">Marque</label>
                                                <div class="mt-2">
                                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                        <input type="text" name="brand" id="brand" autocomplete="brand" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="raised3d">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<?php include "./sources/templates/pagebottom.php"; ?>

