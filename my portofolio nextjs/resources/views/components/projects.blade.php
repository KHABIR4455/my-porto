@props([
    'projects' => [],
    'showHeader' => true,
    'limit' => null,
])

@php
    $items = $limit ? array_slice($projects, 0, $limit) : $projects;
@endphp

<section id="projects" class="section-padding" aria-labelledby="projects-heading">
    <div class="container-portfolio">
        @if ($showHeader)
            <div class="reveal flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
                <div class="max-w-2xl">
                    <p class="section-label">Featured Projects</p>
                    <h2 id="projects-heading" class="section-title">Selected Work</h2>
                    <p class="section-subtitle">
                        A selection of branding, campaign, and content design projects that reflect clean visual strategy.
                    </p>
                </div>
                <a href="{{ route('projects.index') }}" class="btn-secondary shrink-0 self-start sm:self-auto">
                    View all projects
                </a>
            </div>
        @endif

        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($items as $index => $project)
                <article class="card-lift reveal reveal-delay-{{ ($index % 3) + 1 }} group overflow-hidden">
                    <div class="relative aspect-[4/3] overflow-hidden bg-surface">
                        <img
                            src="{{ $project['image'] }}"
                            alt="{{ $project['title'] }} project thumbnail"
                            class="h-full w-full object-cover transition-transform duration-500 ease-[var(--ease-smooth)] group-hover:scale-105"
                            loading="lazy"
                            decoding="async"
                            width="800"
                            height="600"
                        >
                        <div class="absolute inset-0 bg-accent/0 transition-colors duration-300 group-hover:bg-accent/10"></div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-semibold uppercase tracking-wider text-primary">{{ $project['category'] }}</p>
                        <h3 class="mt-2 text-lg font-semibold tracking-tight text-accent">{{ $project['title'] }}</h3>
                        <p class="mt-2 line-clamp-2 text-sm leading-relaxed text-accent-muted">{{ $project['description'] }}</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            @foreach ($project['tags'] as $tag)
                                <span class="rounded-full bg-surface px-2.5 py-1 text-[11px] font-medium text-accent-muted">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <a href="{{ route('projects.show', $project['slug']) }}" class="btn-ghost mt-5 !px-0 !py-0 text-primary hover:text-primary-dark">
                            View Project
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
