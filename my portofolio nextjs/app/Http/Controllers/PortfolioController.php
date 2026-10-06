<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function home(): View
    {
        return view('home', [
            'projects' => $this->featuredProjects(),
            'skills' => $this->skills(),
            'achievements' => $this->achievements(),
        ]);
    }

    public function projects(): View
    {
        return view('projects.index', [
            'projects' => $this->allProjects(),
        ]);
    }

    public function project(string $slug): View
    {
        $project = collect($this->allProjects())->firstWhere('slug', $slug);

        abort_unless($project, 404);

        return view('projects.show', [
            'project' => $project,
            'related' => collect($this->allProjects())
                ->reject(fn ($item) => $item['slug'] === $slug)
                ->take(3)
                ->values()
                ->all(),
        ]);
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // Placeholder: wire to mail / CRM later.
        unset($validated);

        return back()->with('success', 'Thank you! Your message has been received. I will get back to you soon.');
    }

    private function featuredProjects(): array
    {
        return array_slice($this->allProjects(), 0, 6);
    }

    /**
     * Resolve a project image from public/images/projects/.
     * Drop your file there, then pass only the filename (e.g. "my-work.jpg").
     */
    private function projectImage(string $filename): string
    {
        $path = public_path('images/projects/'.$filename);

        if (is_file($path)) {
            return asset('images/projects/'.$filename);
        }

        return asset('images/projects/placeholder.svg');
    }

    private function allProjects(): array
    {
        return [
            [
                'slug' => 'stelk-csc-ctf-writeups',
                'title' => 'STELK CSC CTF Writeups & Challenges',
                'category' => 'Cyber Security',
                'tags' => ['CTF', 'Pwn', 'Reverse Engineering', 'Cryptography'],
                'description' => 'A collection of challenge writeups, exploit scripts, and custom CTF challenges authored for community training.',
                'overview' => [
                    'This repository documents technical writeups and proof-of-concept exploit scripts developed during national and regional CTF competitions.',
                    'It also features original CTF challenges authored specifically for STELK CSC community workshops, covering memory layout exploitation, custom ciphers, and binary reverse engineering.',
                ],
                'image' => $this->projectImage('ctf.jpg'),
                'year' => '2026',
            ],
            [
                'slug' => 'fullstack-web-platform',
                'title' => 'Full-Stack Web Application',
                'category' => 'Web Development',
                'tags' => ['Laravel', 'PHP', 'Tailwind CSS'],
                'description' => 'End-to-end web application with secure dynamic forms, user role authorization, and database management.',
                'overview' => [
                    'A production-grade web platform engineered using Laravel, focusing on clean architecture, modular database management, and scalable API endpoints.',
                    'The platform includes custom role-based access control (RBAC), secure authentication layers, and responsive UI components styled with Tailwind CSS.',
                ],
                'image' => $this->projectImage('web.jpg'),
                'year' => '2026',
            ],
            [
                'slug' => 'figma-ui-prototypes',
                'title' => 'Figma UI/UX Prototypes',
                'category' => 'UI/UX Design',
                'tags' => ['Figma', 'Prototyping', 'UI Design'],
                'description' => 'Interactive user interface designs and user-flow prototypes created for web and mobile software.',
                'overview' => [
                    'A design collection focused on usability, accessibility, and visual clarity across web and desktop platforms.',
                    'The project details design component systems, interactive layout states, and complete user navigation wireframes built within Figma.',
                ],
                'image' => $this->projectImage('figma.jpg'),
                'year' => '2026',
            ],
        ];
    }

    private function skills(): array
    {
        return [
            [
                'title' => 'Software Development',
                'icon' => 'code',
                'items' => [
                    ['name' => 'Full-Stack Development', 'level' => 'Advanced'],
                    ['name' => 'PHP / Laravel', 'level' => 'Intermediate'],
                    ['name' => 'Python Programming', 'level' => 'Intermediate'],
                ],
            ],
            [
                'title' => 'Cyber Security',
                'icon' => 'shield',
                'items' => [
                    ['name' => 'Binary Exploitation (Pwn)', 'level' => 'Active CTF'],
                    ['name' => 'Reverse Engineering', 'level' => 'Active CTF'],
                    ['name' => 'Cryptography', 'level' => 'Active CTF'],
                ],
            ],
            [
                'title' => 'Design & Prototyping',
                'icon' => 'layout',
                'items' => [
                    ['name' => 'Figma Prototyping', 'level' => 'Intermediate'],
                    ['name' => 'UI / UX Design', 'level' => 'Intermediate'],
                    ['name' => 'User Interface Logic', 'level' => 'Intermediate'],
                ],
            ],
            [
                'title' => 'Leadership & Core',
                'icon' => 'users',
                'items' => [
                    ['name' => 'CTF Challenge Authoring', 'level' => 'Community'],
                    ['name' => 'Workshop Mentorship', 'level' => 'Lead'],
                    ['name' => 'Programming Logic', 'level' => 'Certified'],
                ],
            ],
        ];
    }

    private function achievements(): array
    {
        return [
            [
                'icon' => 'trophy',
                'title' => 'Community Leadership',
                'description' => 'Leading CSC STELK initiatives, organizing technical workshops, and mentoring aspiring security enthusiasts.',
            ],
            [
                'icon' => 'palette',
                'title' => 'CTF Competitor',
                'description' => 'Actively competing in national and regional CTF matches specializing in Reverse Engineering, Pwn, and Crypto.',
            ],
            [
                'icon' => 'rocket',
                'title' => 'Full-Stack Projects',
                'description' => 'Building functional software solutions combining backend logic, secure code, and clean UI.',
            ],
            [
                'icon' => 'users',
                'title' => 'Technical Certifications',
                'description' => 'Certified in AWS Cloud/Gen AI basics, Python Code Kickstart, and Programming Logic 101.',
            ],
        ];
    }
}