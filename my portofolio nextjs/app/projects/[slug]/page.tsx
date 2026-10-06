import Link from "next/link";
import { notFound } from "next/navigation";
import { ProjectCards } from "@/components/portfolio";
import { owner, projects } from "@/lib/portfolio";

export function generateStaticParams() {
  return projects.map((project) => ({ slug: project.slug }));
}

export default async function ProjectPage({ params }: { params: Promise<{ slug: string }> }) {
  const { slug } = await params;
  const project = projects.find((item) => item.slug === slug);

  if (!project) notFound();

  return (
    <>
      <article className="section-padding pt-32"><div className="container-portfolio">
        <Link href="/projects" className="text-sm font-medium text-accent-muted transition-colors hover:text-accent">← Back to projects</Link>
        <p className="mt-8 text-xs font-semibold uppercase tracking-wider text-primary">{project.category} · {project.year}</p>
        <h1 className="mt-3 max-w-3xl text-4xl font-bold tracking-tight text-accent sm:text-5xl">{project.title}</h1>
        <p className="mt-5 max-w-2xl text-lg leading-relaxed text-accent-muted">{project.description}</p>
        <div className="mt-6 flex flex-wrap gap-2">{project.tags.map((tag) => <span key={tag} className="rounded-full border border-border bg-secondary px-3 py-1 text-xs font-medium text-accent-muted">{tag}</span>)}</div>
        {/* eslint-disable-next-line @next/next/no-img-element */}
        <img src={project.image} alt={`${project.title} showcase image`} className="mt-12 aspect-[16/9] w-full rounded-3xl border border-border bg-secondary object-cover" width="1200" height="675" />
        <div className="mt-12 grid gap-8 lg:grid-cols-3"><div className="lg:col-span-2"><h2 className="text-xl font-semibold text-accent">Project overview</h2>{project.overview.map((paragraph) => <p key={paragraph} className="mt-4 text-base leading-relaxed text-accent-muted">{paragraph}</p>)}</div><aside className="card h-fit p-6"><h3 className="text-sm font-semibold uppercase tracking-wider text-accent-muted">Details</h3><dl className="mt-4 space-y-4 text-sm"><div><dt className="text-accent-muted">Category</dt><dd className="mt-1 font-medium text-accent">{project.category}</dd></div><div><dt className="text-accent-muted">Year</dt><dd className="mt-1 font-medium text-accent">{project.year}</dd></div><div><dt className="text-accent-muted">Services</dt><dd className="mt-1 font-medium text-accent">{project.tags.join(", ")}</dd></div></dl><Link href="/contact" className="btn-primary mt-6 w-full">Discuss a similar project</Link></aside></div>
      </div></article>
      <section className="section-padding bg-surface"><div className="container-portfolio"><p className="section-label">More work</p><h2 className="section-title">Related projects</h2><ProjectCards limit={2} /></div></section>
      <footer className="border-t border-border bg-secondary"><div className="container-portfolio py-8 text-center text-sm text-accent-muted">© {new Date().getFullYear()} {owner}</div></footer>
    </>
  );
}
