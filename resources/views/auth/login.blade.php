<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>LOGIN</title>
  </head>
  <body>
    <div class="flex h-screen">
        <div class="w-2/3 bg-cover bg-center" style="background-image: url('path/to/your/image.jpg');">
            
        </div>
        <div class="w-1/3 flex flex-col justify-center items-center mr-5">
            <h1 class="text-4xl font-bold text-center mb-6">
              LOGIN FORM
            </h1>

            <form action="{{ route('login') }}" method="POST" class="bg-white p-8 rounded shadow-md w-full">
                @csrf

                <div class="space-y-4">
                        <div>
                            <label for="login" class="block text-sm font-medium text-gray-700">Name/Email:</label>
                            <input type="text" id="login" name="login" value="{{ old('login') }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                            @error('login')
                                <div class="error text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                            <input type="password" name="password" id="password" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                            @error('password')
                                <div class="error text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">LOGIN</button>
                </div>
                
                <div class="register-link mt-4">
                  Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Sign In Here</a>
                </div>
            </div>
        </form>

    </div>
  </body>
</html> 