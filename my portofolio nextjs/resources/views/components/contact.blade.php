@props([
    'standalone' => false,
])

<section id="contact" class="{{ $standalone ? 'section-padding pt-32' : 'section-padding' }}" aria-labelledby="contact-heading">
    <div class="container-portfolio">
        <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">
            <div class="reveal">
                <p class="section-label">Contact</p>
                <h2 id="contact-heading" class="section-title">Let's build something impactful</h2>
                <p class="section-subtitle">
                    Have a software project, security inquiry, or community initiative? Send a message and let's talk.
                </p>

                <ul class="mt-10 space-y-4">
                    <li>
                        <a href="mailto:hello@example.com" class="card-lift flex items-center gap-4 p-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary" aria-hidden="true">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <span>
                                <span class="block text-xs font-medium uppercase tracking-wider text-accent-muted">Email</span>
                                <span class="text-sm font-semibold text-accent">hello@example.com</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="reveal reveal-delay-2">
                <div class="card p-6 sm:p-8">
                    @if (session('success'))
                        <div class="mb-6 rounded-2xl border border-primary/20 bg-primary/5 px-4 py-3 text-sm text-accent" role="status">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form id="contact-form" action="{{ route('contact.send') }}" method="POST" novalidate>
                        @csrf

                        <div class="space-y-5">
                            <div>
                                <label for="name" class="form-label">Name</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="form-input @error('name') border-primary ring-4 ring-primary/10 @enderror"
                                    placeholder="Your name"
                                    required
                                    autocomplete="name"
                                >
                                @error('name')
                                    <p class="mt-2 text-xs text-primary" role="alert">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="form-label">Email</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-input @error('email') border-primary ring-4 ring-primary/10 @enderror"
                                    placeholder="you@example.com"
                                    required
                                    autocomplete="email"
                                >
                                @error('email')
                                    <p class="mt-2 text-xs text-primary" role="alert">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="message" class="form-label">Message</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    class="form-input resize-y @error('message') border-primary ring-4 ring-primary/10 @enderror"
                                    placeholder="Tell me about your project..."
                                    required
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-2 text-xs text-primary" role="alert">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn-primary w-full">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
