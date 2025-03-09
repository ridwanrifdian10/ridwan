<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>REGISTER</title>
    <style>
      .bg-bicycle {
        background-image: url('/images/bg_sepeda.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }
    </style>
  </head>
  <body class="bg-bicycle">
    <div class="flex h-screen justify-center items-center backdrop-blur-sm">
        <div class="w-96">
            <h1 class="text-4xl font-bold text-center mb-6 text-white drop-shadow-lg">
              REGISTER FORM
            </h1>

            <form action="{{ route('register') }}" method="POST" 
              class="backdrop-blur-sm bg-white/20 p-8 rounded-lg shadow-lg w-full border border-white/30">
                @csrf

                <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-white">Name:</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required 
                                class="mt-1 block w-full bg-white/20 border border-white/30 rounded-md shadow-sm focus:ring focus:ring-blue-500 text-black placeholder-white/70">
                            @error('name')
                                <div class="error text-red-200">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-white">Email:</label>
                            <input type="text" id="email" name="email" value="{{ old('email') }}" required 
                                class="mt-1 block w-full bg-white/20 border border-white/30 rounded-md shadow-sm focus:ring focus:ring-blue-500 text-black placeholder-white/70">
                            @error('email')
                                <div class="error text-red-200">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-white">Password:</label>
                            <input type="password" name="password" id="password" required 
                                class="mt-1 block w-full bg-white/20 border border-white/30 rounded-md shadow-sm focus:ring focus:ring-blue-500 text-black placeholder-white/70">
                            @error('password')
                                <div class="error text-red-200">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-white">Confirm Password:</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required 
                                class="mt-1 block w-full bg-white/20 border border-white/30 rounded-md shadow-sm focus:ring focus:ring-blue-500 text-black placeholder-white/70">
                        </div>

                    <button type="submit" 
                      class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">REGISTER</button>
                </div>
                
                <div class="register-link mt-4 text-white text-center">
                  Already have an account? <a href="{{ route('login') }}" class="text-blue-200 hover:underline">Login Here</a>
                </div>
            </form>
        </div>
    </div>
  </body>
</html> 