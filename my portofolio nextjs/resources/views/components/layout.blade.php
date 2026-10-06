@props([
    'title' => 'MUH KHABIR AKSAN | Cyber Security Enthusiast & Developer',
    'metaDescription' => 'MUH KHABIR AKSAN — Cyber Security enthusiast specializing in CTF challenges, reverse engineering, binary exploitation, and software development.',
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="theme-color" content="#050505">

    <title>{{ $title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --color-primary: #3b82f6;
            --color-primary-dark: #2563eb;
            --color-secondary: #151515;
            --color-accent: #bfdbfe;
            --color-accent-muted: #60a5fa;
            --color-surface: #050505;
            --color-surface-elevated: #151515;
            --color-border: #333333;
        }

        html,
        body {
            background-color: #050505;
            color: #f4f4f5;
        }

        body {
            background-image: radial-gradient(ellipse at 82% 12%, rgb(59 130 246 / 9%), transparent 34rem), linear-gradient(180deg, #080808 0%, #050505 100%);
        }

        #navbar nav {
            border-color: rgb(51 51 51 / 85%);
            background-color: rgb(5 5 5 / 88%);
            backdrop-filter: blur(18px);
        }
    </style>
</head>
<body class="min-h-screen overflow-x-hidden">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-[100] focus:rounded-xl focus:bg-primary focus:px-4 focus:py-2 focus:text-white">
        Skip to content
    </a>

    <x-navbar />

    <main id="main-content" class="page-enter">
        {{ $slot }}
    </main>

    <x-footer />
</body>
</html>
