import type { Metadata } from "next";
import { Navbar } from "@/components/portfolio";
import { owner } from "@/lib/portfolio";
import "./globals.css";

export const metadata: Metadata = {
  title: `${owner} | Cyber Security Enthusiast & Developer`,
  description: `${owner} — Cyber Security enthusiast specializing in CTF challenges, reverse engineering, binary exploitation, and software development.`,
};

export default function RootLayout({ children }: Readonly<{ children: React.ReactNode }>) {
  return (
    <html lang="en">
      <body>
        <Navbar />
        <main className="page-enter">{children}</main>
      </body>
    </html>
  );
}
