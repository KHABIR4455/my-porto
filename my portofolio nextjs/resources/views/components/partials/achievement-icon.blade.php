@props(['icon' => 'trophy'])

@switch($icon)
    @case('trophy')
        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M8 21h8M12 17v4M7 4h10v4a5 5 0 01-10 0V4z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M17 5h2a2 2 0 012 2v1a4 4 0 01-4 4M7 5H5a2 2 0 00-2 2v1a4 4 0 004 4" />
        </svg>
        @break
    @case('palette')
        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M12 3a9 9 0 00-1.5 17.88A2.25 2.25 0 0013.5 18.5V18a2 2 0 012-2h.5a9 9 0 00-4-13z" />
            <circle cx="7.5" cy="10.5" r="1" fill="currentColor"/>
            <circle cx="12" cy="7.5" r="1" fill="currentColor"/>
            <circle cx="16.5" cy="10.5" r="1" fill="currentColor"/>
        </svg>
        @break
    @case('rocket')
        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 00-2.91-.09zM12 15l-3-3a22 22 0 012-9 8 8 0 017 7 22 22 0 01-9 5z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0M15 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />
        </svg>
        @break
    @default
        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
@endswitch
