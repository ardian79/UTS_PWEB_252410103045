@props(['type' => 'default'])

@php
    $classes = match(strtolower($type)) {
        'tinggi' => 'bg-red-500/10 text-red-400 border-red-500/20',
        'sedang' => 'bg-amber-500/10 text-amber-400 border-amber-500/20',
        'rendah' => 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20',
        'belum' => 'bg-red-500/10 text-red-400 border-red-500/20',
        'proses' => 'bg-amber-500/10 text-amber-400 border-amber-500/20',
        'selesai' => 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20',
        'teori' => 'bg-[#253745] text-[#CCD0CF] border-[#4A5C6A]',
        'praktikum' => 'bg-[#4A5C6A]/30 text-[#CCD0CF] border-[#4A5C6A]',
        default => 'bg-[#253745] text-[#9BA8AB] border-[#253745]',
    };
@endphp

<span {{ $attributes->merge(['class' => "px-2.5 py-1 text-xs font-semibold rounded-md border $classes"]) }}>
    {{ $slot }}
</span>