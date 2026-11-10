<header class="h-16 flex items-center justify-between px-8 bg-base/80 backdrop-blur-md border-b border-border z-10">
    <div class="flex items-center gap-4">
        <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-muted hover:text-light transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
        <h2 class="text-lg font-semibold text-light hidden sm:block">@yield('title')</h2>
    </div>
    
    <div class="flex items-center gap-4">
        <div class="text-sm text-muted text-right hidden sm:block">
            <p class="text-light font-medium">Mahasiswa</p>
            <p class="text-xs">{{ request('username', 'User') }}</p>
        </div>
        <div class="h-9 w-9 rounded-full bg-surface border border-border shadow-sm overflow-hidden flex items-center justify-center">
            <img src="{{ asset('images/pp.svg') }}" alt="Profile" class="h-full w-full object-cover">
        </div>
    </div>
</header>