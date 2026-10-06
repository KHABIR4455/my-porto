@props([
    'skills' => [
        [
            'title' => 'Software Development',
            'icon' => 'code',
            'items' => [
                ['name' => 'Full-Stack Development', 'level' => 'Advanced'],
                ['name' => 'PHP / Laravel', 'level' => 'Intermediate'],
                ['name' => 'Python Programming', 'level' => 'Intermediate'],
            ]
        ],
        [
            'title' => 'Cyber Security',
            'icon' => 'shield',
            'items' => [
                ['name' => 'Binary Exploitation (Pwn)', 'level' => 'Active CTF'],
                ['name' => 'Reverse Engineering', 'level' => 'Active CTF'],
                ['name' => 'Cryptography', 'level' => 'Active CTF'],
            ]
        ],
        [
            'title' => 'Design & Prototyping',
            'icon' => 'layout',
            'items' => [
                ['name' => 'Figma Prototyping', 'level' => 'Intermediate'],
                ['name' => 'UI / UX Design', 'level' => 'Intermediate'],
                ['name' => 'User Interface Logic', 'level' => 'Intermediate'],
            ]
        ],
        [
            'title' => 'Leadership & Core',
            'icon' => 'users',
            'items' => [
                ['name' => 'CTF Challenge Authoring', 'level' => 'Community'],
                ['name' => 'Workshop Mentorship', 'level' => 'Lead'],
                ['name' => 'Programming Logic', 'level' => 'Certified'],
            ]
        ],
    ]
])

<section id="skills" class="section-padding bg-secondary" aria-labelledby="skills-heading">
    <div class="container-portfolio">
        <div class="reveal mx-auto max-w-2xl text-center">
            <p class="section-label">Skills</p>
            <h2 id="skills-heading" class="section-title">Tools and Capabilities</h2>
            <p class="section-subtitle mx-auto">
                A technical skill set spanning software development, cybersecurity CTF domains, UI prototyping, and community leadership.
            </p>
        </div>

        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($skills as $index => $category)
                <article class="card-lift reveal reveal-delay-{{ ($index % 4) + 1 }} p-6">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-surface text-primary" aria-hidden="true">
                        @include('components.partials.skill-icon', ['icon' => $category['icon']])
                    </div>
                    <h3 class="text-lg font-semibold text-accent">{{ $category['title'] }}</h3>
                    <ul class="mt-5 space-y-3">
                        @foreach ($category['items'] as $item)
                            <li class="flex items-center justify-between gap-3 border-b border-border/70 pb-3 last:border-0 last:pb-0">
                                <span class="text-sm text-accent-muted">{{ $item['name'] }}</span>
                                @if ($item['level'])
                                    <span class="skill-level">{{ $item['level'] }}</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </div>
</section>