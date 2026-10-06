@php
    $isHome = request()->routeIs('home');
@endphp

<header
    id="navbar"
    class="fixed inset-x-0 top-0 z-50 transition-all duration-300 ease-[var(--ease-smooth)]"
>
    <div class="container-portfolio">
        <nav
            class="mt-3 flex items-center justify-between rounded-2xl border border-transparent px-4 py-3 transition-all duration-300 sm:px-5 [.navbar-scrolled_&]:border-white/50 [.navbar-scrolled_&]:bg-white/70 [.navbar-scrolled_&]:shadow-sm [.navbar-scrolled_&]:backdrop-blur-md"
            aria-label="Primary"
        >
            <a href="{{ route('home') }}" class="group flex items-center gap-2.5" aria-label="MUH KHABIR AKSAN — Home">
                <span class="brand-mark flex h-10 w-10 items-center justify-center rounded-xl border border-primary bg-secondary font-mono text-sm font-bold text-primary transition-transform duration-300 group-hover:scale-105">
                    MK
                </span>
                <span class="hidden text-sm font-semibold tracking-tight text-accent sm:block">
                    MUH KHABIR AKSAN
                </span>
            </a>

            <ul class="hidden items-center gap-8 md:flex">
                <li>
                    <a href="{{ $isHome ? '#home' : route('home') }}" class="nav-link" data-section="home">Home</a>
                </li>
                <li>
                    <a href="{{ $isHome ? '#about' : route('home') . '#about' }}" class="nav-link" data-section="about">About</a>
                </li>
                <li>
                    <a href="{{ $isHome ? '#skills' : route('home') . '#skills' }}" class="nav-link" data-section="skills">Skills</a>
                </li>
                <li>
                    <a href="{{ $isHome ? '#projects' : route('home') . '#projects' }}" class="nav-link" data-section="projects">Projects</a>
                </li>
                <li>
                    <a href="{{ $isHome ? '#contact' : route('contact') }}" class="nav-link" data-section="contact">Contact</a>
                </li>
            </ul>

            <div class="hidden md:block">
                <a href="{{ route('contact') }}" class="btn-primary !px-5 !py-2.5 !text-xs">Hire Me</a>
            </div>

            <button
                id="nav-toggle"
                type="button"
                class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-border bg-secondary text-accent md:hidden"
                aria-controls="mobile-menu"
                aria-expanded="false"
                aria-label="Toggle navigation menu"
            >
                <svg id="icon-open" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 7h16M4 12h16M4 17h16" />
                </svg>
                <svg id="icon-close" class="hidden h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </nav>

        <div id="mobile-menu" class="mobile-nav md:hidden">
            <div class="mt-2 rounded-2xl border border-border bg-secondary/95 p-4 shadow-lg backdrop-blur-md">
                <ul class="flex flex-col gap-1">
                    <li><a href="{{ $isHome ? '#home' : route('home') }}" class="block rounded-xl px-4 py-3 text-sm font-medium text-accent hover:bg-surface">Home</a></li>
                    <li><a href="{{ $isHome ? '#about' : route('home') . '#about' }}" class="block rounded-xl px-4 py-3 text-sm font-medium text-accent hover:bg-surface">About</a></li>
                    <li><a href="{{ $isHome ? '#skills' : route('home') . '#skills' }}" class="block rounded-xl px-4 py-3 text-sm font-medium text-accent hover:bg-surface">Skills</a></li>
                    <li><a href="{{ $isHome ? '#projects' : route('home') . '#projects' }}" class="block rounded-xl px-4 py-3 text-sm font-medium text-accent hover:bg-surface">Projects</a></li>
                    <li><a href="{{ route('contact') }}" class="block rounded-xl px-4 py-3 text-sm font-medium text-accent hover:bg-surface">Contact</a></li>
                </ul>
                <a href="{{ route('contact') }}" class="btn-primary mt-3 w-full">Hire Me</a>
            </div>
        </div>
    </div>
</header>
