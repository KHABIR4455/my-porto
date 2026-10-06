"use client";

import Link from "next/link";
import { useState } from "react";
import type { FormEvent } from "react";
import { contactEmail, owner, projects } from "@/lib/portfolio";

const navigation = [
  ["Home", "/#home"],
  ["About", "/#about"],
  ["Skills", "/#skills"],
  ["Projects", "/#projects"],
  ["Contact", "/#contact"],
];

export function Navbar() {
  const [menuOpen, setMenuOpen] = useState(false);

  return (
    <header className="fixed inset-x-0 top-0 z-50">
      <div className="container-portfolio">
        <nav className="nav-shell mt-3 flex items-center justify-between rounded-2xl px-4 py-3 sm:px-5" aria-label="Primary">
          <Link href="/" className="group flex items-center gap-2.5" aria-label={`${owner} — Home`} onClick={() => setMenuOpen(false)}>
            <span className="flex h-9 w-9 items-center justify-center rounded-xl bg-primary text-sm font-bold text-black transition-transform group-hover:scale-105">MK</span>
            <span className="hidden text-sm font-semibold tracking-tight text-accent sm:block">{owner}</span>
          </Link>
          <ul className="hidden items-center gap-8 md:flex">
            {navigation.map(([label, href]) => <li key={label}><Link href={href} className="nav-link">{label}</Link></li>)}
          </ul>
          <Link href="/contact" className="btn-primary hidden !px-5 !py-2.5 !text-xs md:inline-flex">Hire Me</Link>
          <button
            type="button"
            className="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-border bg-secondary text-accent md:hidden"
            aria-controls="mobile-menu"
            aria-expanded={menuOpen}
            aria-label="Toggle navigation menu"
            onClick={() => setMenuOpen((open) => !open)}
          >
            {menuOpen ? "×" : "☰"}
          </button>
        </nav>
        {menuOpen && (
          <div id="mobile-menu" className="mt-2 rounded-2xl border border-border bg-secondary/95 p-4 shadow-lg backdrop-blur-md md:hidden">
            <ul className="flex flex-col gap-1">
              {navigation.map(([label, href]) => <li key={label}><Link href={href} className="block rounded-xl px-4 py-3 text-sm font-medium text-accent hover:bg-surface" onClick={() => setMenuOpen(false)}>{label}</Link></li>)}
            </ul>
            <Link href="/contact" className="btn-primary mt-3 w-full" onClick={() => setMenuOpen(false)}>Hire Me</Link>
          </div>
        )}
      </div>
    </header>
  );
}

export function ProjectCards({ limit }: { limit?: number }) {
  const visibleProjects = limit ? projects.slice(0, limit) : projects;

  return (
    <div className="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      {visibleProjects.map((project) => (
        <article key={project.slug} className="card-lift group overflow-hidden">
          <Link href={`/projects/${project.slug}`} className="block">
            {/* eslint-disable-next-line @next/next/no-img-element */}
            <img src={project.image} alt={`${project.title} project thumbnail`} className="aspect-[4/3] w-full bg-surface object-cover transition-transform duration-500 group-hover:scale-105" width="800" height="600" />
          </Link>
          <div className="p-6">
            <p className="text-xs font-semibold uppercase tracking-wider text-primary">{project.category}</p>
            <h3 className="mt-2 text-lg font-semibold tracking-tight text-accent">{project.title}</h3>
            <p className="mt-2 line-clamp-2 text-sm leading-relaxed text-accent-muted">{project.description}</p>
            <div className="mt-4 flex flex-wrap gap-2">{project.tags.map((tag) => <span key={tag} className="rounded-full bg-surface px-2.5 py-1 text-[11px] font-medium text-accent-muted">{tag}</span>)}</div>
            <Link href={`/projects/${project.slug}`} className="btn-ghost mt-5 !px-0 !py-0 text-primary">View Project <span aria-hidden="true">→</span></Link>
          </div>
        </article>
      ))}
    </div>
  );
}

export function ContactForm() {
  const [notice, setNotice] = useState("");

  function handleSubmit(event: FormEvent<HTMLFormElement>) {
    event.preventDefault();
    setNotice("Formulir ini belum terhubung ke layanan pengiriman pesan. Silakan hubungi saya melalui kanal yang Anda miliki.");
  }

  return (
    <form className="card space-y-5 p-6 sm:p-8" onSubmit={handleSubmit}>
      <p className="text-sm text-accent-muted">Atau kirim email ke <a className="font-semibold text-primary underline decoration-primary/40 underline-offset-4 hover:decoration-primary" href={`mailto:${contactEmail}`}>{contactEmail}</a>.</p>
      <div><label htmlFor="name" className="form-label">Name</label><input className="form-input" id="name" name="name" autoComplete="name" required maxLength={120} /></div>
      <div><label htmlFor="email" className="form-label">Email</label><input className="form-input" id="email" name="email" type="email" autoComplete="email" required maxLength={255} /></div>
      <div><label htmlFor="message" className="form-label">Message</label><textarea className="form-input min-h-36 resize-y" id="message" name="message" required maxLength={2000} /></div>
      <button type="submit" className="btn-primary w-full">Send Message</button>
      {notice && <p className="text-sm text-accent-muted" role="status">{notice}</p>}
    </form>
  );
}
