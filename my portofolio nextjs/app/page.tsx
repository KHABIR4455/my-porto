import Link from "next/link";
import { achievements, owner, skillGroups } from "@/lib/portfolio";
import { ProjectCards } from "@/components/portfolio";

const traits = ["Full-Stack", "CTF Player", "Binary Exploitation", "Reverse Engineering", "Cryptography"];

export default function HomePage() {
  return (
    <>
      <section id="home" className="relative overflow-hidden pt-28 sm:pt-32 lg:pt-36" aria-labelledby="hero-heading">
        <div className="container-portfolio relative">
          <div className="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
            <div>
              <div className="glass-accent mb-6 inline-flex items-center gap-2 px-3.5 py-1.5"><span className="h-1.5 w-1.5 rounded-full bg-primary" /><span className="text-xs font-medium tracking-wide text-accent-muted">Available for projects</span></div>
              <h1 id="hero-heading" className="text-4xl font-extrabold tracking-tight text-accent sm:text-5xl lg:text-[3.25rem] lg:leading-[1.1]">
                {owner}
                <span className="mt-2 block text-2xl font-semibold text-primary sm:text-3xl lg:text-[2rem]">Cyber Security Enthusiast &amp; Full-Stack Developer</span>
              </h1>
              <p className="mt-6 max-w-lg text-base leading-relaxed text-accent-muted sm:text-lg">I build secure, functional web applications and analyze complex software vulnerabilities through competitive CTF challenges and community leadership.</p>
              <div className="mt-8 flex flex-wrap gap-3"><Link href="/projects" className="btn-primary">View Projects <span aria-hidden="true">→</span></Link><Link href="/contact" className="btn-secondary">Hire Me</Link></div>
              <ul className="mt-10 flex flex-wrap gap-3" aria-label="Personality traits">{traits.map((trait) => <li key={trait} className="rounded-full border border-border bg-secondary px-3.5 py-1.5 text-xs font-medium text-accent-muted">{trait}</li>)}</ul>
            </div>
            <div className="relative mx-auto w-full max-w-md lg:max-w-none" aria-hidden="true">
              <svg className="h-full w-full" viewBox="0 0 480 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="480" height="480" rx="32" fill="#050505" /><rect x="24" y="24" width="432" height="432" rx="24" fill="#151515" stroke="#333333" />
                <g className="animate-float"><rect x="88" y="96" width="160" height="160" rx="20" fill="#3B82F6" fillOpacity=".95" /><rect x="120" y="128" width="96" height="96" rx="14" fill="#BFDBFE" fillOpacity=".35" /></g>
                <g className="animate-float-delayed"><circle cx="320" cy="168" r="64" fill="#60A5FA" /><circle cx="320" cy="168" r="32" fill="#151515" /></g>
                <rect x="248" y="248" width="144" height="96" rx="14" fill="#BFDBFE" fillOpacity=".12" /><rect x="88" y="288" width="128" height="64" rx="12" fill="#3B82F6" fillOpacity=".35" /><path d="M280 360 L360 360 L320 420 Z" fill="#3B82F6" /><rect x="180" y="360" width="56" height="56" rx="10" fill="#BFDBFE" /><circle cx="140" cy="380" r="18" fill="#60A5FA" fillOpacity=".65" />
              </svg>
            </div>
          </div>
        </div>
      </section>

      <section id="about" className="section-padding" aria-labelledby="about-heading"><div className="container-portfolio">
        <div className="grid gap-12 lg:grid-cols-2 lg:gap-20">
          <div><p className="section-label">About Me</p><h2 id="about-heading" className="section-title">Building secure software and leading technical communities</h2><p className="section-subtitle">I am {owner}, a Software Engineering student at Telkom Vocational High School Makassar, Community Leader at CSC STELK, and an active Cyber Security CTF player. I specialize in Reverse Engineering, Binary Exploitation (Pwn), and Cryptography.</p><p className="mt-4 max-w-2xl text-base leading-relaxed text-accent-muted">Beyond competing in national and regional CTF challenges, I foster a collaborative learning environment by organizing technical workshops, mentoring new members, and developing hands-on training materials.</p></div>
          <div className="grid grid-cols-1 gap-4 sm:grid-cols-2">{[["Full-Stack Developer", "Building end-to-end web applications with modern frameworks and clean architecture."], ["Cyber Security Enthusiast", "Exploring system vulnerabilities, threat analysis, and security principles."], ["CTF Player", "Competing in Reverse Engineering, Binary Exploitation (Pwn), and Cryptography challenges."], ["Community Leader", "Organizing technical workshops, mentoring members, and leading CSC STELK initiatives."]].map(([title, description]) => <article key={title} className="card-lift p-6"><div className="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary" aria-hidden="true">✓</div><h3 className="text-base font-semibold text-accent">{title}</h3><p className="mt-2 text-sm leading-relaxed text-accent-muted">{description}</p></article>)}</div>
        </div>
      </div></section>

      <section id="skills" className="section-padding bg-surface" aria-labelledby="skills-heading"><div className="container-portfolio">
        <div className="mx-auto max-w-2xl text-center"><p className="section-label">Skills</p><h2 id="skills-heading" className="section-title">Tools and Capabilities</h2><p className="section-subtitle mx-auto">A technical skill set spanning software development, cybersecurity CTF domains, UI prototyping, and community leadership.</p></div>
        <div className="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">{skillGroups.map((group) => <article key={group.title} className="card-lift p-6"><div className="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-surface text-primary" aria-hidden="true">✦</div><h3 className="text-lg font-semibold text-accent">{group.title}</h3><ul className="mt-5 space-y-3">{group.items.map(([skill, level]) => <li key={skill} className="flex items-center justify-between gap-3 border-b border-border/70 pb-3 last:border-0 last:pb-0"><span className="text-sm text-accent-muted">{skill}</span><span className="skill-level">{level}</span></li>)}</ul></article>)}</div>
      </div></section>

      <section id="projects" className="section-padding" aria-labelledby="projects-heading"><div className="container-portfolio">
        <div className="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between"><div className="max-w-2xl"><p className="section-label">Featured Projects</p><h2 id="projects-heading" className="section-title">Selected Work</h2><p className="section-subtitle">A selection of software, cybersecurity, and design projects.</p></div><Link href="/projects" className="btn-secondary shrink-0 self-start sm:self-auto">View all projects</Link></div>
        <ProjectCards limit={3} />
      </div></section>

      <section id="achievements" className="section-padding bg-surface" aria-labelledby="achievements-heading"><div className="container-portfolio">
        <div className="mx-auto max-w-2xl text-center"><p className="section-label">Achievements</p><h2 id="achievements-heading" className="section-title">Highlights</h2><p className="section-subtitle mx-auto">Moments that reflect craft, strategy, and leadership beyond the canvas.</p></div>
        <div className="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">{achievements.map((item) => <article key={item.title} className="card-lift p-6 text-center sm:text-left"><div className="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary sm:mx-0" aria-hidden="true">✦</div><h3 className="text-base font-semibold text-accent">{item.title}</h3><p className="mt-2 text-sm leading-relaxed text-accent-muted">{item.description}</p></article>)}</div>
      </div></section>

      <section id="contact" className="section-padding" aria-labelledby="contact-heading"><div className="container-portfolio grid gap-10 lg:grid-cols-2 lg:items-center"><div><p className="section-label">Contact</p><h2 id="contact-heading" className="section-title">Let&apos;s build something impactful</h2><p className="section-subtitle">Have a software project, security inquiry, or community initiative? Send a message and let&apos;s talk.</p></div><Link href="/contact" className="btn-primary w-fit">Get in touch <span aria-hidden="true">→</span></Link></div></section>

      <footer className="border-t border-border bg-secondary"><div className="container-portfolio flex flex-col items-center justify-between gap-4 py-8 sm:flex-row"><p className="text-sm text-accent-muted">Designed &amp; Developed by {owner}</p><p className="text-sm text-accent-muted">© {new Date().getFullYear()} {owner}</p></div></footer>
    </>
  );
}
