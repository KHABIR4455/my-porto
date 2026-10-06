<x-layout
    :title="$project['title'] . ' | MUH KHABIR AKSAN'"
    :metaDescription="$project['description']"
>
    <article class="section-padding pt-32">
        <div class="container-portfolio">
            <div class="reveal">
                <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 text-sm font-medium text-accent-muted transition-colors hover:text-accent">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                    Back to projects
                </a>

                <p class="mt-8 text-xs font-semibold uppercase tracking-wider text-primary">{{ $project['category'] }} · {{ $project['year'] }}</p>
                <h1 class="mt-3 max-w-3xl text-4xl font-bold tracking-tight text-accent sm:text-5xl">{{ $project['title'] }}</h1>
                <p class="mt-5 max-w-2xl text-lg leading-relaxed text-accent-muted">{{ $project['description'] }}</p>

                <div class="mt-6 flex flex-wrap gap-2">
                    @foreach ($project['tags'] as $tag)
                        <span class="rounded-full border border-border bg-secondary px-3 py-1 text-xs font-medium text-accent-muted">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

            <div class="reveal reveal-delay-2 mt-12 overflow-hidden rounded-3xl border border-border bg-secondary">
                <img
                    src="{{ $project['image'] }}"
                    alt="{{ $project['title'] }} showcase image"
                    class="aspect-[16/9] w-full object-cover"
                    loading="eager"
                    decoding="async"
                    width="1200"
                    height="675"
                >
            </div>

            <div class="reveal mt-12 grid gap-8 lg:grid-cols-3">
                <div class="lg:col-span-2">
                    <h2 class="text-xl font-semibold text-accent">Project overview</h2>
                    
                    @if (isset($project['overview']) && is_array($project['overview']))
                        @foreach ($project['overview'] as $paragraph)
                            <p class="mt-4 text-base leading-relaxed text-accent-muted">
                                {{ $paragraph }}
                            </p>
                        @endforeach
                    @else
                        <p class="mt-4 text-base leading-relaxed text-accent-muted">
                            {{ $project['description'] }}
                        </p>
                    @endif
                </div>
                <aside class="card h-fit p-6">
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-accent-muted">Details</h3>
                    <dl class="mt-4 space-y-4 text-sm">
                        <div>
                            <dt class="text-accent-muted">Category</dt>
                            <dd class="mt-1 font-medium text-accent">{{ $project['category'] }}</dd>
                        </div>
                        <div>
                            <dt class="text-accent-muted">Year</dt>
                            <dd class="mt-1 font-medium text-accent">{{ $project['year'] }}</dd>
                        </div>
                        <div>
                            <dt class="text-accent-muted">Services</dt>
                            <dd class="mt-1 font-medium text-accent">{{ implode(', ', $project['tags']) }}</dd>
                        </div>
                    </dl>
                    <a href="{{ route('contact') }}" class="btn-primary mt-6 w-full">Discuss a similar project</a>
                </aside>
            </div>
        </div>
    </article>

    @if (count($related))
        <x-projects :projects="$related" />
    @endif
</x-layout>