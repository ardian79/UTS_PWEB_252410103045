@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
    <div class="max-w-3xl mx-auto mt-4">
        <div class="bg-surface rounded-3xl border border-border overflow-hidden relative shadow-lg">
            
            <div class="h-48 relative">
                <img src="{{ asset('images/banner.png   ') }}" alt="Banner" class="w-full h-full object-cover opacity-80 ">
                <div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent"></div>
            </div>
            
            <div class="px-8 pb-10 relative z-10">
                <div class="flex justify-between items-end -mt-16 mb-8">
                    <div class="h-32 w-32 rounded-full bg-base p-1.5 shadow-xl ring-4 ring-surface">
                        <div class="h-full w-full rounded-full overflow-hidden flex items-center justify-center bg-surface">
                            <img src="{{ asset('images/pp.svg') }}" alt="Profile Picture" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>

                <div class="space-y-8">
                    <div>
                        <h1 class="text-3xl font-bold text-light mb-1">{{ $profil['nama'] }}</h1>
                        <p class="text-muted font-medium">{{ '@' . $username }}</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-8 border-t border-border">
                        <div class="group">
                            <p class="text-xs font-semibold text-muted uppercase tracking-wider mb-2 group-hover:text-light transition-colors">NIM</p>
                            <p class="font-medium text-light text-lg">{{ $profil['nim'] }}</p>
                        </div>
                        <div class="group">
                            <p class="text-xs font-semibold text-muted uppercase tracking-wider mb-2 group-hover:text-light transition-colors">Program Studi</p>
                            <p class="font-medium text-light text-lg">{{ $profil['prodi'] }}</p>
                        </div>
                        <div class="group">
                            <p class="text-xs font-semibold text-muted uppercase tracking-wider mb-2 group-hover:text-light transition-colors">Angkatan</p>
                            <p class="font-medium text-light text-lg">{{ $profil['angkatan'] }}</p>
                        </div>
                        <div class="group">
                            <p class="text-xs font-semibold text-muted uppercase tracking-wider mb-2 group-hover:text-light transition-colors">Email</p>
                            <p class="font-medium text-light text-lg">{{ $profil['email'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection