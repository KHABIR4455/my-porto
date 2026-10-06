export type Project = {
  slug: string;
  title: string;
  category: string;
  tags: string[];
  description: string;
  overview: string[];
  image: string;
  year: string;
};

export const owner = "MUH KHABIR AKSAN";
export const contactEmail = "hello@example.com";

export const projects: Project[] = [
  {
    slug: "stelk-csc-ctf-writeups",
    title: "STELK CSC CTF Writeups & Challenges",
    category: "Cyber Security",
    tags: ["CTF", "Pwn", "Reverse Engineering", "Cryptography"],
    description:
      "A collection of challenge writeups, exploit scripts, and custom CTF challenges authored for community training.",
    overview: [
      "This repository documents technical writeups and proof-of-concept exploit scripts developed during national and regional CTF competitions.",
      "It also features original CTF challenges authored specifically for STELK CSC community workshops, covering memory layout exploitation, custom ciphers, and binary reverse engineering.",
    ],
    image: "/images/projects/placeholder.svg",
    year: "2026",
  },
  {
    slug: "fullstack-web-platform",
    title: "Full-Stack Web Application",
    category: "Web Development",
    tags: ["Next.js", "React", "Tailwind CSS"],
    description:
      "An end-to-end web application with secure dynamic forms, user role authorization, and database management.",
    overview: [
      "A production-grade web platform focused on clean architecture, modular database management, and scalable API endpoints.",
      "The platform includes custom role-based access control (RBAC), secure authentication layers, and responsive UI components styled with Tailwind CSS.",
    ],
    image: "/images/projects/placeholder.svg",
    year: "2026",
  },
  {
    slug: "figma-ui-prototypes",
    title: "Figma UI/UX Prototypes",
    category: "UI/UX Design",
    tags: ["Figma", "Prototyping", "UI Design"],
    description:
      "Interactive user interface designs and user-flow prototypes created for web and mobile software.",
    overview: [
      "A design collection focused on usability, accessibility, and visual clarity across web and desktop platforms.",
      "The project details design component systems, interactive layout states, and complete user navigation wireframes built within Figma.",
    ],
    image: "/images/projects/placeholder.svg",
    year: "2026",
  },
];

export const skillGroups = [
  {
    title: "Software Development",
    items: [
      ["Full-Stack Development", "Advanced"],
      ["Next.js / React", "Intermediate"],
      ["Python Programming", "Intermediate"],
    ],
  },
  {
    title: "Cyber Security",
    items: [
      ["Binary Exploitation (Pwn)", "Active CTF"],
      ["Reverse Engineering", "Active CTF"],
      ["Cryptography", "Active CTF"],
    ],
  },
  {
    title: "Design & Prototyping",
    items: [
      ["Figma Prototyping", "Intermediate"],
      ["UI / UX Design", "Intermediate"],
      ["User Interface Logic", "Intermediate"],
    ],
  },
  {
    title: "Leadership & Core",
    items: [
      ["CTF Challenge Authoring", "Community"],
      ["Workshop Mentorship", "Lead"],
      ["Programming Logic", "Certified"],
    ],
  },
] as const;

export const achievements = [
  {
    title: "Community Leadership",
    description:
      "Leading CSC STELK initiatives, organizing technical workshops, and mentoring aspiring security enthusiasts.",
  },
  {
    title: "CTF Competitor",
    description:
      "Actively competing in national and regional CTF matches specializing in Reverse Engineering, Pwn, and Crypto.",
  },
  {
    title: "Full-Stack Projects",
    description:
      "Building functional software solutions combining backend logic, secure code, and clean UI.",
  },
  {
    title: "Technical Certifications",
    description:
      "Certified in AWS Cloud/Gen AI basics, Python Code Kickstart, and Programming Logic 101.",
  },
];
