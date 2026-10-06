<section id="home" class="relative overflow-hidden pt-28 sm:pt-32 lg:pt-36" aria-labelledby="hero-heading">
    <div class="pointer-events-none absolute inset-0" aria-hidden="true">
        <div class="absolute -left-24 top-20 h-72 w-72 rounded-full bg-primary/5 blur-3xl"></div>
        <div class="absolute -right-16 bottom-10 h-80 w-80 rounded-full bg-accent/5 blur-3xl"></div>
    </div>

    <div class="container-portfolio relative">
        <div class="hero-layout grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
            <div class="reveal">
                <div class="glass-accent mb-6 inline-flex items-center gap-2 px-3.5 py-1.5">
                    <span class="relative flex h-2 w-2" aria-hidden="true"><span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-50"></span><span class="relative inline-flex h-2 w-2 rounded-full bg-primary"></span></span>
                    <span class="font-mono text-xs font-medium tracking-wide text-accent-muted">AVAILABLE FOR PROJECTS</span>
                </div>

                <p class="hero-kicker">PORTFOLIO <span aria-hidden="true">/</span> 2026</p>
                <h1 id="hero-heading" class="hero-title text-4xl font-extrabold tracking-tight text-accent sm:text-5xl lg:text-[3.25rem] lg:leading-[1.1]">
                    MUH KHABIR
                    <span class="hero-title-accent">AKSAN<span class="hero-cursor" aria-hidden="true">_</span></span>
                    <span class="mt-4 block text-xl font-semibold text-primary sm:text-2xl lg:text-[1.6rem]">
                        Cyber Security <span class="text-accent-muted">&amp;</span><br class="hidden sm:block"> Full-Stack Developer
                    </span>
                </h1>

                <p class="mt-6 max-w-xl text-base leading-relaxed text-accent-muted sm:text-lg">
                    I build secure digital experiences and explore the systems behind them through cybersecurity, CTF challenges, and community leadership.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ route('projects.index') }}" class="btn-primary">
                        View Projects
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="btn-secondary">Let&apos;s Talk <span aria-hidden="true">↗</span></a>
                </div>

                <ul class="hero-stats mt-10 grid max-w-xl grid-cols-3 gap-3" aria-label="Expertise highlights">
                    <li><strong>03</strong><span>Featured projects</span></li>
                    <li><strong>04</strong><span>Skill domains</span></li>
                    <li><strong>CTF</strong><span>Security focus</span></li>
                </ul>
                <ul class="mt-6 flex flex-wrap gap-2" aria-label="Specialties">
                    @foreach (['Full-Stack', 'CTF Player', 'Binary Exploitation', 'Reverse Engineering', 'Cryptography'] as $trait)
                        <li class="hero-tag rounded-full border border-border bg-secondary px-3.5 py-1.5 text-xs font-medium text-accent-muted">
                            {{ $trait }}
                        </li>
                    @endforeach
                </ul>
                </div>

            <div class="reveal reveal-delay-2 relative mx-auto w-full max-w-md lg:max-w-none" aria-hidden="true">
                <div class="relative aspect-square">
                    {{-- Abstract geometric graphic --}}
                    <svg class="hero-art h-full w-full" viewBox="0 0 520 520" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Abstract blue cybersecurity interface">
                        <defs>
                            <linearGradient id="hero-panel" x1="42" y1="34" x2="478" y2="486" gradientUnits="userSpaceOnUse"><stop stop-color="#111827"/><stop offset="1" stop-color="#080B12"/></linearGradient>
                            <linearGradient id="hero-blue" x1="140" y1="130" x2="362" y2="372" gradientUnits="userSpaceOnUse"><stop stop-color="#60A5FA"/><stop offset="1" stop-color="#2563EB"/></linearGradient>
                            <filter id="hero-glow" x="71" y="69" width="378" height="378" filterUnits="userSpaceOnUse"><feGaussianBlur stdDeviation="24"/></filter>
                        </defs>
                        <rect x="24" y="24" width="472" height="472" rx="32" fill="#3B82F6" fill-opacity=".12" filter="url(#hero-glow)"/>
                        <rect x="20" y="20" width="480" height="480" rx="32" fill="url(#hero-panel)" stroke="#26364F"/>
                        <path d="M20 102H500M112 20V500" stroke="#26364F" stroke-opacity=".55"/>
                        <circle cx="48" cy="61" r="4" fill="#60A5FA"/><circle cx="64" cy="61" r="4" fill="#334155"/><circle cx="80" cy="61" r="4" fill="#334155"/>
                        <text x="132" y="66" fill="#94A3B8" font-family="monospace" font-size="11" letter-spacing="2">SYSTEM / SECURE</text>
                        <g opacity=".5"><path d="M74 167H118V211H162" stroke="#3B82F6" stroke-width="2"/><path d="M358 165H414V223" stroke="#3B82F6" stroke-width="2"/><path d="M356 367H423V325" stroke="#3B82F6" stroke-width="2"/><circle cx="74" cy="167" r="4" fill="#60A5FA"/><circle cx="414" cy="223" r="4" fill="#60A5FA"/><circle cx="423" cy="325" r="4" fill="#60A5FA"/></g>
                        <g class="animate-float">
                            <rect x="142" y="145" width="236" height="236" rx="28" fill="#3B82F6" fill-opacity=".12" stroke="#60A5FA" stroke-opacity=".55"/>
                            <rect x="164" y="167" width="192" height="192" rx="20" fill="url(#hero-blue)"/>
                            <path d="M222 224L195 263L222 302M298 224L325 263L298 302M279 213L241 313" stroke="#EFF6FF" stroke-width="9" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <g class="animate-float-delayed"><circle cx="390" cy="132" r="26" fill="#111827" stroke="#60A5FA"/><path d="M390 117V132L400 139" stroke="#BFDBFE" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></g>
                        <rect x="54" y="424" width="412" height="42" rx="12" fill="#0B1220" stroke="#26364F"/>
                        <circle cx="76" cy="445" r="5" fill="#60A5FA"/><text x="92" y="449" fill="#BFDBFE" font-family="monospace" font-size="11">THINK SECURE. BUILD WITH PURPOSE.</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
