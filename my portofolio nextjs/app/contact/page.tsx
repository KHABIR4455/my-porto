import { ContactForm } from "@/components/portfolio";
import { contactEmail, owner } from "@/lib/portfolio";

export const metadata = {
  title: `Contact | ${owner}`,
  description: `Get in touch with ${owner} about software, cybersecurity, and community projects.`,
};

export default function ContactPage() {
  return (
    <>
      <section className="section-padding pt-32" aria-labelledby="contact-heading"><div className="container-portfolio grid gap-10 lg:grid-cols-2 lg:items-center"><div><p className="section-label">Contact</p><h1 id="contact-heading" className="section-title">Let&apos;s build something impactful</h1><p className="section-subtitle">Have a software project, security inquiry, or community initiative? Send a message and let&apos;s talk.</p><div className="mt-8 border-l-2 border-primary pl-5"><p className="section-label mb-2">Email</p><a className="font-mono text-lg font-semibold text-primary hover:underline" href={`mailto:${contactEmail}`}>{contactEmail}</a></div></div><ContactForm /></div></section>
      <footer className="border-t border-border bg-secondary"><div className="container-portfolio py-8 text-center text-sm text-accent-muted">© {new Date().getFullYear()} {owner}</div></footer>
    </>
  );
}
