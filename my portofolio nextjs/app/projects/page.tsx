import Link from "next/link";
import { ProjectCards } from "@/components/portfolio";
import { owner } from "@/lib/portfolio";

export const metadata = {
  title: `Projects | ${owner}`,
  description: `Selected software engineering, cybersecurity, and design projects by ${owner}.`,
};

export default function ProjectsPage() {
  return (
    <>
      <section className="section-padding pt-32" aria-labelledby="all-projects-heading"><div className="container-portfolio"><div className="max-w-2xl"><p className="section-label">Projects</p><h1 id="all-projects-heading" className="section-title">All projects</h1><p className="section-subtitle">Browse software, cybersecurity, and design projects built with clarity and impact.</p></div></div></section>
      <section className="pb-20"><div className="container-portfolio"><ProjectCards /></div></section>
      <section className="pb-24 text-center"><Link href="/contact" className="btn-primary">Start a project</Link></section>
      <footer className="border-t border-border bg-secondary"><div className="container-portfolio py-8 text-center text-sm text-accent-muted">© {new Date().getFullYear()} {owner}</div></footer>
    </>
  );
}
