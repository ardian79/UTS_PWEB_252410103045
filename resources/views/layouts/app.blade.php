<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - StudyFlow</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: { 
                        base: '#06141B', 
                        surface: '#11212D', 
                        border: '#253745', 
                        hover: '#4A5C6A',
                        muted: '#CBD5E1',
                        light: '#FFFFFF'
                    }
                }
            }
        }
    </script>
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body x-data="{ sidebarOpen: false }" class="bg-base text-light font-sans antialiased h-screen flex overflow-hidden m-0">

    @include('components.sidebar')

    <div class="flex-1 flex flex-col h-full overflow-hidden relative">
        
        @include('components.navbar')

        <main class="flex-1 overflow-y-auto p-4 md:p-8 flex flex-col">
            <div class="max-w-6xl mx-auto w-full flex-grow">
                @yield('content')
            </div>
            
            @include('components.footer')
        </main>
    </div>

</body>
</html>