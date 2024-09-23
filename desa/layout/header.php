<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESA</title>

    <link href="/style.css" rel="stylesheet">
    <link href="/svgs/logo.svg" rel="shortcut icon" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    primary: '#075E54',
                    secondary: '#EFC118',
                },
                keyframes: {
                    fadeIn: {
                        '0%': { opacity: 0 },
                        '100%': { opacity: 1 },
                    },
                },
                animation: {
                    fadeIn: "fadeIn 2s forwards",
                },
            },
        },
    };
    </script>
</head>

<body x-data="{ isOpen : window.innerWidth >= 786 }" @resize.window="isOpen = window.innerWidth >= 786" class="bg-[#ECE5DD]">