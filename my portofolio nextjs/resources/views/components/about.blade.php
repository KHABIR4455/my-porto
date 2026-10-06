<section id="about" class="section-padding" aria-labelledby="about-heading">
    <div class="container-portfolio">
        <div class="grid gap-12 lg:grid-cols-2 lg:gap-20">
            <div class="reveal">
                <p class="section-label">About Me</p>
                <h2 id="about-heading" class="section-title">
                    Building secure software and leading technical communities
                </h2>
                <p class="section-subtitle">
                    I am MUH KHABIR AKSAN, a Software Engineering student at Telkom Vocational High School Makassar, Community Leader at CSC STELK, and an active Cyber Security CTF player. I specialize in Reverse Engineering, Binary Exploitation (Pwn), and Cryptography.
                </p>
                <p class="mt-4 max-w-2xl text-base leading-relaxed text-accent-muted">
                    Beyond competing in national and regional CTF challenges, I foster a collaborative learning environment by organizing technical workshops, mentoring new members, and developing hands-on training materials.
                </p>
                </div>

                <div class="reveal reveal-delay-2 grid grid-cols-1 gap-4 sm:grid-cols-2">
                    @foreach ([
                        ['title' => 'Full-Stack Developer', 'desc' => 'Building end-to-end web applications with modern frameworks and clean architecture.'],
                        ['title' => 'Cyber Security Enthusiast', 'desc' => 'Exploring system vulnerabilities, threat analysis, and security principles.'],
                        ['title' => 'CTF Player', 'desc' => 'Competing in Reverse Engineering, Binary Exploitation (Pwn), and Cryptography challenges.'],
                        ['title' => 'Community Leader', 'desc' => 'Organizing technical workshops, mentoring members, and leading CSC STELK initiatives.'],
                    ] as $item)
                        <article class="card-lift p-6">
                            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary" aria-hidden="true">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h3 class="text-base font-semibold text-accent">{{ $item['title'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-accent-muted">{{ $item['desc'] }}</p>
                        </article>
                    @endforeach
                </div>
                </div>
                </div>
                </section>
