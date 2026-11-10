@extends('layouts.app')

@section('title', 'Pengelolaan Tugas')

@section('content')
    <div x-data="{ tab: 'Semua' }" class="flex flex-col h-full">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-bold text-light mb-1">Daftar Tugas</h1>
                <p class="text-muted text-sm">Kelola seluruh tugas kuliahmu.</p>
            </div>
            
            <div class="flex gap-2 bg-surface p-1 rounded-xl border border-border">
                <button @click="tab = 'Semua'" :class="tab === 'Semua' ? 'bg-border text-light shadow-sm' : 'text-muted hover:text-light hover:bg-border/30'" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200">Semua</button>
                <button @click="tab = 'Teori'" :class="tab === 'Teori' ? 'bg-border text-light shadow-sm' : 'text-muted hover:text-light hover:bg-border/30'" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200">Teori</button>
                <button @click="tab = 'Praktikum'" :class="tab === 'Praktikum' ? 'bg-border text-light shadow-sm' : 'text-muted hover:text-light hover:bg-border/30'" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200">Praktikum</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($tugas as $t)
                <div x-show="tab === 'Semua' || tab === '{{ $t['jenis'] }}'" 
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-surface rounded-2xl p-6 border border-border flex flex-col hover:border-hover hover:-translate-y-1 hover:shadow-lg hover:shadow-black/20 transition-all duration-300 group">
                    
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <x-badge :type="$t['jenis']">{{ $t['jenis'] }}</x-badge>
                            <h3 class="text-xs font-semibold text-muted mt-3 uppercase tracking-wider">{{ $t['matkul'] }}</h3>
                        </div>
                        <x-badge :type="$t['prioritas']">{{ $t['prioritas'] }}</x-badge>
                    </div>
                    
                    <h2 class="text-lg font-bold text-light mb-2 flex-grow group-hover:text-white transition-colors">{{ $t['judul'] }}</h2>
                    <p class="text-sm text-muted mb-6 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        {{ $t['deadline'] }}
                    </p>

                    <div class="pt-4 border-t border-border flex justify-between items-center mt-auto">
                        <span class="text-xs text-muted font-medium">Status</span>
                        <x-badge :type="$t['status']">{{ $t['status'] }}</x-badge>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection