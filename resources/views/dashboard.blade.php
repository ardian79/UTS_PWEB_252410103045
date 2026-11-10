@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl md:text-3xl font-bold text-light mb-2">Halo, {{ $username }}!</h1>
    <p class="text-muted text-sm md:text-base">Ini adalah ringkasan aktivitas tugas kuliahmu.</p>
</div>

<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
    @foreach($statistik as $index => $s)
    <div class="bg-surface p-5 rounded-2xl border border-border hover:border-hover hover:-translate-y-1 hover:shadow-lg hover:shadow-black/20 transition-all duration-300 group cursor-default">
        <div class="mb-4 text-muted group-hover:text-light transition-colors">
            @if($index == 0)
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            @elseif($index == 1)
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            @elseif($index == 2)
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            @else
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            @endif
        </div>
        <div class="text-3xl font-bold text-light mb-1">{{ $s['nilai'] }}</div>
        <div class="text-sm text-muted">{{ $s['label'] }}</div>
    </div>
    @endforeach
</div>

<div class="bg-surface rounded-2xl border border-border overflow-hidden">
    <div class="p-6 border-b border-border flex justify-between items-center">
        <h2 class="text-lg font-bold text-light">Tugas Terdekat</h2>
        <a href="/pengelolaan?username={{ $username }}" class="text-sm font-medium text-muted hover:text-light transition-colors flex items-center gap-1 group">
            Lihat Semua
            <span class="group-hover:translate-x-1 transition-transform inline-block">→</span>
        </a>
    </div>
    <div class="divide-y divide-border">
        @foreach($tugasTerdekat as $t)
        <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-hover/10 transition-colors duration-200">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <span class="text-xs font-semibold text-muted uppercase tracking-wider">{{ $t['matkul'] }}</span>
                    <x-badge :type="$t['jenis']">{{ $t['jenis'] }}</x-badge>
                </div>
                <h3 class="font-bold text-light text-lg">{{ $t['judul'] }}</h3>
                <p class="text-sm text-muted mt-1 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    {{ $t['deadline'] }}
                </p>
            </div>
            <div class="flex-shrink-0">
                <x-badge :type="$t['prioritas']" class="w-32 flex justify-center">Prioritas {{ $t['prioritas'] }}</x-badge>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection