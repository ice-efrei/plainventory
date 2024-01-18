<?php include './sources/templates/userredirect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lowcaltech ERP</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <script type="module">
        import { minidenticonSvg } from 'https://cdn.jsdelivr.net/npm/minidenticons@4.2.0/minidenticons.min.js'
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    height: {
                        'block': '36rem',
                    },
                }
            },
            plugins: [
                require('@tailwindcss/forms'),
            ],
        }
    </script>
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
<body class="w-screen font-extralight flex flex-col justify-center items-center bg-gray-400">
    <?php include './sources/templates/alerts.php'; ?>
    <div class="min-h-full w-full bg-gray-400">
        <?php include "./sources/templates/navbar.php"; ?>