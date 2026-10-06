<x-layout title="Projects | MUH KHABIR AKSAN" metaDescription="Explore selected software engineering, cyber security, and design projects by MUH KHABIR AKSAN.">
    <section class="section-padding pt-32" aria-labelledby="all-projects-heading">
        <div class="container-portfolio">
            <div class="reveal max-w-2xl">
                <p class="section-label">Projects</p>
                <h1 id="all-projects-heading" class="section-title">All projects</h1>
                <p class="section-subtitle">
                    Browse branding, social campaigns, content design, and sport visuals crafted with clarity and impact.
                </p>
            </div>
        </div>
    </section>

    <x-projects :projects="$projects" :show-header="false" />

    <section class="pb-24">
        <div class="container-portfolio text-center">
            <a href="{{ route('contact') }}" class="btn-primary">Start a project</a>
        </div>
    </section>
</x-layout>
