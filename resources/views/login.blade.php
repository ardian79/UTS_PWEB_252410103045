<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - StudyFlow</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">    
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-base min-h-screen flex items-center justify-center p-4">
    
    <div class="bg-surface border border-border rounded-2xl shadow-2xl w-full max-w-md p-8 relative overflow-hidden group">
        
        <div class="text-center mb-8">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo StudyFlow" class="h-16 w-16 mx-auto mb-5 group-hover:scale-105 transition-transform duration-300 drop-shadow-md">
            <h1 class="text-2xl font-bold text-white mb-2">Selamat Datang</h1>
            <p class="text-muted text-sm">Masuk untuk mengelola tugas kuliahmu.</p>
        </div>

        <form action="/login" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-medium text-muted mb-2">Username</label>
                <input type="text" name="username" placeholder="Masukkan username" required
                    class="w-full px-4 py-3 bg-base border border-border rounded-xl text-light placeholder-muted/50 focus:ring-2 focus:ring-hover focus:border-hover outline-none transition-all duration-200">
                @error('username')
                    <span class="text-red-400 text-xs mt-2 block">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-muted mb-2">Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required
                    class="w-full px-4 py-3 bg-base border border-border rounded-xl text-light placeholder-muted/50 focus:ring-2 focus:ring-hover focus:border-hover outline-none transition-all duration-200">
            </div>
            <button type="submit" class="w-full bg-white text-base font-bold py-3 rounded-xl hover:bg-gray-200 active:scale-[0.98] transition-all duration-200 mt-2 text-black">
                Masuk ke Dashboard
            </button>
        </form>
    </div>

</body>
</html>