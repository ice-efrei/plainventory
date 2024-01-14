<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Book System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-screen overflow-hidden font-extralight flex flex-col justify-center items-center bg-gray-900">
<?php
session_start();
if(isset($_SESSION['user_id'])){
    header("Location: index.php");
}else{ ?>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
            <form class="space-y-6" action="user/register.php" method="POST">
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-white">Username</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="text" required class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-white">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label for="password_confirm" class="block text-sm font-medium leading-6 text-white">Confirm Password</label>
                    <div class="mt-2">
                        <input id="password_confirm" name="password_confirm" type="password" required class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <!-- TODO: association select input from DB -->

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign in</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-400">
                Already a user ?
                <a href="index.php" class="font-semibold leading-6 text-indigo-400 hover:text-indigo-300">login Here</a>
            </p>
        </div>
    </div>
<?php } ?>
</body>
</html>