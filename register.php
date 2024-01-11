<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Book System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-screen overflow-hidden font-extralight flex flex-col justify-center items-center">
<?php
session_start();
if(isset($_SESSION['user_id'])){
    header("Location: index.php");
}else{ ?>
    <div class="flex flex-col justify-center items-center w-1/3">
        <svg class="h-36 mb-10" width="245" height="292" viewBox="0 0 245 292" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="26" y="5" width="214" height="282" rx="11" stroke="black" stroke-width="10"/>
            <path d="M5 66H59" stroke="black" stroke-width="10" stroke-linecap="round"/>
            <path d="M5 146H59" stroke="black" stroke-width="10" stroke-linecap="round"/>
            <path d="M5 226H59" stroke="black" stroke-width="10" stroke-linecap="round"/>
            <path d="M95 292V0" stroke="black" stroke-width="10"/>
        </svg>
        <div class="flex flex-col w-full">
            <form class="flex flex-col gap-3" action="user/register.php" method="post">
                <div class="mx-8">
                    <input class="border-b-2 text-xl w-full px-2 py-1 outline-none focus:border-b-gray-600" type="text" name="username" placeholder="Username">
                </div>
                <div class="mx-8">
                    <input class="border-b-2 text-xl w-full px-2 py-1 outline-none focus:border-b-gray-600" type="password" name="password" placeholder="Password">
                </div>
                <div class="mx-8">
                    <input class="border-b-2 text-xl w-full px-2 py-1 outline-none focus:border-b-gray-600" type="password" name="password_confirm" placeholder="Confirm password">
                </div>
                <div class="mx-8">
                    <input class="border-b-2 text-xl w-full px-2 py-1 outline-none focus:border-b-gray-600" type="email" name="email" placeholder="Email">
                </div>
                <button type="submit" class="bg-gray-300 w-full py-2 rounded-lg mb-3 hover:bg-gray-200 text-center text-2xl font-extralight w-full">
                    Register
                </button>
            </form>
            <a href="register.php" class="text-center text-lg w-full hover:text-gray-500">Login</a>
        </div>
    </div>
    <footer class="absolute bottom-5 w-full flex justify-center items-center h-20">
        <svg class="h-14" width="67" height="68" viewBox="0 0 67 68" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.7796 0.249681C28.6413 0.0106627 28.3354 -0.0709905 28.0964 0.067303C27.8574 0.205597 27.7757 0.511468 27.914 0.750486L32.767 9.138L0.20467 65.2852C-0.375274 66.2852 0.346249 67.5377 1.50225 67.5377H20.854C20.8601 67.5378 20.8662 67.5378 20.8722 67.5377H45.9193C45.9253 67.5378 45.9314 67.5378 45.9374 67.5377H65.111C66.2663 67.5377 66.9879 66.2865 66.4093 65.2865L33.9226 9.13859L38.787 0.750925C38.9256 0.512047 38.8442 0.206093 38.6053 0.0675573C38.3665 -0.0709787 38.0605 0.0103642 37.922 0.249242L33.3453 8.14078L28.7796 0.249681ZM1.06972 65.7868L33.3443 10.1358L65.5437 65.7873C65.7366 66.1206 65.4961 66.5377 65.111 66.5377H46.2161L34.6434 46.559C34.0643 45.5593 32.6199 45.562 32.0446 46.5638L20.5741 66.5377H1.50225C1.11691 66.5377 0.876407 66.1202 1.06972 65.7868ZM33.778 47.0602L45.0604 66.5377H21.7273L32.9118 47.0618C33.1036 46.7279 33.585 46.727 33.778 47.0602ZM31.1711 31.1323V30.3585H31.3199H32.1711H32.4539H33.3697H33.4539V30.2495V30.1323V29.9916V29.3585V29.2495H34.3697V29.3585V29.9916V30.1323V30.2495V30.3585H34.4539H35.3697H35.7944H36.7875H36.7944V31.1323H36.7875H35.7944H35.3697H34.4539H34.3697V31.3585V31.3702V32.1323V32.1698V32.3702H34.4539H35.3697H36.1168H36.7875H37.1168V33.1698H36.7875H36.1168H34.4539H34.3697H33.4539H33.3697H31.8487H31.3057H30.8487V32.3702H31.3196H31.8487H32.4539H33.3697H33.4539V32.1698V32.1323V31.3702V31.3585V31.1323H33.3697H32.4539H32.1711H31.3199H31.1711ZM30.3199 31.3702V32.1323V32.2284C30.3199 32.2753 30.3198 32.3226 30.3196 32.3702C30.3184 32.6264 30.3141 32.8939 30.3048 33.1698C30.2939 33.4933 30.2762 33.8283 30.2489 34.1698C30.1345 35.601 29.8515 37.1472 29.1944 38.4479C29.0457 38.7424 28.8778 39.0242 28.6883 39.2894L28.6561 39.3339C28.6026 39.2671 28.5214 39.1848 28.4289 39.1015C28.2539 38.9438 28.0386 38.7825 27.8951 38.7149C28.0919 38.4432 28.2629 38.1554 28.4113 37.8559C29.2841 36.0941 29.3783 33.9257 29.3783 32.2284V29.0889V28.9916V28.0889H30.3199H30.3783H37.7419H37.7875H38.7419V28.9916V29.0889V38.0315C38.7419 38.6505 38.5742 38.9084 38.1744 39.076C38.0082 39.1403 37.793 39.1802 37.5159 39.2047L37.4651 39.209C37.0819 39.2396 36.5852 39.2437 35.9432 39.2437C35.9165 39.0661 35.8348 38.8212 35.7444 38.6059C35.7035 38.5086 35.6609 38.4173 35.6207 38.341C35.7291 38.3444 35.837 38.3471 35.9432 38.3492C36.1219 38.3528 36.2959 38.3548 36.4591 38.3555C36.5503 38.3559 36.6382 38.356 36.7217 38.3557C37.0697 38.3545 37.3408 38.348 37.4591 38.3413L37.4651 38.341C37.6448 38.341 37.7343 38.2994 37.7693 38.1856C37.7722 38.176 37.7748 38.1659 37.777 38.1553C37.7842 38.12 37.7875 38.079 37.7875 38.0315V34.1698V33.1698V32.3702V32.1323V31.3702V31.1323V30.3585V29.9916V29.3585V29.0889V28.9916H37.7419H36.7875H35.3697H34.3697H33.4539H32.4539H31.3199H30.3783H30.3199V29.0889V29.3585V29.9916V30.3585V31.1323V31.3702ZM35.4591 37.6059H34.1037H33.3577H32.4806H32.3577V37.8451V38.3281H31.4806V37.8451V37.6059V37.3281V36.8451V36.6059V35.253V35.0139V34.253H32.3577H32.4806H35.4591H35.5562H36.4591V35.0139V35.253V36.6059V36.8451V37.3555V37.6059H35.6437H35.5562H35.4591ZM33.3577 36.8451H32.4806H32.3577V36.6059V36.0139V35.8451V35.253V35.0139H32.4806H33.3577H34.5562H35.4591H35.5562V35.253V35.8451V36.0139V36.6059V36.8451H35.4591H34.5562H33.3577Z" fill="black"/>
        </svg>
        <p class="text-lg">
            Un projet de la tribu des zhou
        </p>
    </footer>
<?php } ?>
</body>
</html>