@props(['achievements' => []])

<section id="achievements" class="section-padding" aria-labelledby="achievements-heading">
    <div class="container-portfolio">
        <div class="reveal mx-auto max-w-2xl text-center">
            <p class="section-label">Achievements</p>
            <h2 id="achievements-heading" class="section-title">Highlights</h2>
            <p class="section-subtitle mx-auto">
                Moments that reflect craft, strategy, and leadership beyond the canvas.
            </p>
        </div>

        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($achievements as $index => $item)
                <article class="card-lift reveal reveal-delay-{{ ($index % 4) + 1 }} p-6 text-center sm:text-left">
                    <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary sm:mx-0" aria-hidden="true">
                        @include('components.partials.achievement-icon', ['icon' => $item['icon']])
                    </div>
                    <h3 class="text-base font-semibold text-accent">{{ $item['title'] }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-accent-muted">{{ $item['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
