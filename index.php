<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Book System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @layer components {
            .category-list-box {
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 1rem;
                position: relative;
                padding: 0.5rem;
                margin-right: 0.5rem;
                border-top-right-radius: 0.5rem;
                border-bottom-right-radius: 0.5rem;
            }
            /*.category-list-box-focus {*/
            /*    background-color: rgba(196, 196, 196, 0.29);*/
            /*}*/
            .category-list-text {
                font-size: 1.25rem;
                line-height: 1.75rem;
            }
        }
    </style>
</head>
<body class="h-screen w-screen overflow-hidden font-extralight flex flex-col justify-center items-center bg-gray-900">
    <?php
    session_start();
    if(isset($_SESSION['user_id'])){ ?>
        <!--
            $sql = "SELECT * FROM contacts";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td class='px-4 py-2'>" . $row['username'] . "</td>";
                echo "<td class='px-4 py-2'>" . $row['email'] . "</td>";
                echo "<td class='px-4 py-2'>" . $row['phoneNumber'] . "</td>";
                echo "<td class='px-4 py-2'>" . $row['address'] . "</td>";
                echo "<td class='px-4 py-2'>" . $row['gender'] . "</td>";
                echo "<td class='px-4 py-2'>" . $row['relationship'] . "</td>";
                echo "<td class='px-4 py-2'><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='./sources/delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
            }
        -->
        <div class="min-h-full w-full bg-gray-100">
            <header class="bg-indigo-600 pb-24 w-full">
                <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="relative flex items-center justify-center py-5 lg:justify-between">
                        <!-- Logo -->
                        <div class="absolute left-0 flex-shrink-0 lg:static">
                            <a href="#">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=300" alt="Your Company">
                            </a>
                        </div>

                        <!-- Right section on desktop -->
                        <div class="hidden lg:ml-4 lg:flex lg:items-center lg:pr-0.5">
                            <button type="button" class="relative flex-shrink-0 rounded-full p-1 text-indigo-200 hover:bg-white hover:bg-opacity-10 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="relative ml-4 flex-shrink-0">
                                <div>
                                    <button type="button" class="relative flex rounded-full bg-white text-sm ring-2 ring-white ring-opacity-20 focus:outline-none focus:ring-opacity-100" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </button>
                                </div>

                                <!--
                                  Dropdown menu, show/hide based on menu state.

                                  Entering: ""
                                    From: ""
                                    To: ""
                                  Leaving: "transition ease-in duration-75"
                                    From: "transform opacity-100 scale-100"
                                    To: "transform opacity-0 scale-95"
                                -->
                                <div class="hidden absolute -right-2 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="min-w-0 flex-1 px-12 lg:hidden">
                            <div class="mx-auto w-full max-w-xs">
                                <label for="desktop-search" class="sr-only">Search</label>
                                <div class="relative text-white focus-within:text-gray-600">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input id="desktop-search" class="block w-full rounded-md border-0 bg-white/20 py-1.5 pl-10 pr-3 text-white placeholder:text-white focus:bg-white focus:text-gray-900 focus:ring-0 focus:placeholder:text-gray-500 sm:text-sm sm:leading-6" placeholder="Search" type="search" name="search">
                                </div>
                            </div>
                        </div>

                        <!-- Menu button -->
                        <div class="absolute right-0 flex-shrink-0 lg:hidden">
                            <!-- Mobile menu button -->
                            <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-transparent p-2 text-indigo-200 hover:bg-white hover:bg-opacity-10 hover:text-white focus:outline-none focus:ring-2 focus:ring-white" aria-expanded="false">
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only">Open main menu</span>
                                <!-- Menu open: "hidden", Menu closed: "block" -->
                                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                                <!-- Menu open: "block", Menu closed: "hidden" -->
                                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="hidden border-t border-white border-opacity-20 py-5 lg:block">
                        <div class="grid grid-cols-3 items-center gap-8">
                            <div class="col-span-2">
                                <nav class="flex space-x-4">
                                    <!-- Current: "text-white", Default: "text-indigo-100" -->
                                    <a href="#" class="text-white rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10" aria-current="page">Home</a>
                                    <a href="#" class="text-indigo-100 rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10">Profile</a>
                                    <a href="#" class="text-indigo-100 rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10">Resources</a>
                                    <a href="#" class="text-indigo-100 rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10">Company Directory</a>
                                    <a href="#" class="text-indigo-100 rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10">Openings</a>
                                </nav>
                            </div>
                            <div>
                                <div class="mx-auto w-full max-w-md">
                                    <label for="mobile-search" class="sr-only">Search</label>
                                    <div class="relative text-white focus-within:text-gray-600">
                                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input id="mobile-search" class="block w-full rounded-md border-0 bg-white/20 py-1.5 pl-10 pr-3 text-white placeholder:text-white focus:bg-white focus:text-gray-900 focus:ring-0 focus:placeholder:text-gray-500 sm:text-sm sm:leading-6" placeholder="Search" type="search" name="search">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on mobile menu state. -->
                <div class="lg:hidden">
                    <!--
                      Mobile menu overlay, show/hide based on mobile menu state.

                      Entering: "duration-150 ease-out"
                        From: "opacity-0"
                        To: "opacity-100"
                      Leaving: "duration-150 ease-in"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                    <div class="fixed inset-0 z-20 bg-black bg-opacity-25" aria-hidden="true"></div>

                    <!--
                      Mobile menu, show/hide based on mobile menu state.

                      Entering: "duration-150 ease-out"
                        From: "opacity-0 scale-95"
                        To: "opacity-100 scale-100"
                      Leaving: "duration-150 ease-in"
                        From: "opacity-100 scale-100"
                        To: "opacity-0 scale-95"
                    -->
                    <div class="absolute inset-x-0 top-0 z-30 mx-auto w-full max-w-3xl origin-top transform p-2 transition">
                        <div class="divide-y divide-gray-200 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="pb-2 pt-3">
                                <div class="flex items-center justify-between px-4">
                                    <div>
                                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                                    </div>
                                    <div class="-mr-2">
                                        <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                            <span class="absolute -inset-0.5"></span>
                                            <span class="sr-only">Close menu</span>
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-3 space-y-1 px-2">
                                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Home</a>
                                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Profile</a>
                                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Resources</a>
                                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Company Directory</a>
                                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Openings</a>
                                </div>
                            </div>
                            <div class="pb-2 pt-4">
                                <div class="flex items-center px-5">
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </div>
                                    <div class="ml-3 min-w-0 flex-1">
                                        <div class="truncate text-base font-medium text-gray-800">Tom Cook</div>
                                        <div class="truncate text-sm font-medium text-gray-500">tom@example.com</div>
                                    </div>
                                    <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">View notifications</span>
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="mt-3 space-y-1 px-2">
                                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Your Profile</a>
                                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Settings</a>
                                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main class="-mt-24 pb-8 h-2/3">
                <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8 h-full">
                    <h1 class="sr-only">Page title</h1>
                    <!-- Main 3 column grid -->
                    <div class="grid grid-cols-1 items-start gap-4 lg:grid-cols-3 lg:gap-8 h-full">
                        <!-- Left column -->
                        <div class="grid grid-cols-1 gap-4 lg:col-span-2 h-full mb-10">
                            <section aria-labelledby="section-1-title" >
                                <h2 class="sr-only" id="section-1-title">Section title</h2>
                                <div class="overflow-hidden rounded-lg bg-white shadow h-full mb-10">
                                    <div class="p-6">
                                        <div class="">
                                            <div class="inline-block min-w-full py-2 align-middle">
                                                <table class="min-w-full border-separate border-spacing-0 overflow-y-scroll">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">Name</th>
                                                        <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Title</th>
                                                        <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell">Email</th>
                                                        <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter">Role</th>
                                                        <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-3 pr-4 backdrop-blur backdrop-filter sm:pr-6 lg:pr-8">
                                                            <span class="sr-only">Edit</span>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">Lindsay Walton</td>
                                                        <td class="whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">Front-end Developer</td>
                                                        <td class="whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">lindsay.walton@example.com</td>
                                                        <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">Member</td>
                                                        <td class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-4 pl-3 text-right text-sm font-medium sm:pr-8 lg:pr-8">
                                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                                                        </td>
                                                    </tr>
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
                                <div class="overflow-hidden rounded-lg bg-white shadow">
                                    <div class="p-6">
                                        <!-- Your content -->
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="border-t border-gray-200 py-8 text-center text-sm text-gray-500 sm:text-left"><span class="block sm:inline">&copy; 2021 Your Company, Inc.</span> <span class="block sm:inline">All rights reserved.</span></div>
                </div>
            </footer>
        </div>
    <?php }else{ ?>
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Sign in to your account</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="user/login.php" method="POST">
                    <div>
                        <label for="username" class="block text-sm font-medium leading-6 text-white">Username</label>
                        <div class="mt-2">
                            <input id="username" name="username" type="text" required class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
<!--                            <div class="text-sm">-->
<!--                                <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Forgot password?</a>-->
<!--                            </div>-->
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign in</button>
                    </div>
                </form>

                <p class="mt-10 text-center text-sm text-gray-400">
                    Not a member?
                    <a href="register.php" class="font-semibold leading-6 text-indigo-400 hover:text-indigo-300">Register Here</a>
                </p>
            </div>
        </div>
    <?php } ?>
</body>
</html>