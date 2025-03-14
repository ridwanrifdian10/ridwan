<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite('resources/css/app.css')
  <title>LOGIN</title>
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
        LOGIN FORM
      </h1>

      <form action="{{ route('login') }}" method="POST"
        class="backdrop-blur-sm bg-white/20 p-8 rounded-lg shadow-lg w-full border border-white/30">
        @csrf

        <div class="space-y-4">
          <div>
            <label for="login" class="block text-sm font-medium text-white">Name/Email:</label>
            <input type="text" id="login" name="login" value="{{ old('login') }}" required
              class="mt-1 block w-full bg-white/20 border border-white/30 rounded-md shadow-sm focus:ring focus:ring-blue-500 text-white placeholder-white/70">
            @error('login')
              <div class="error text-red-200">{{ $message }}</div>
            @enderror
          </div>

          <div>
            <label for="password" class="block text-sm font-medium text-white">Password:</label>
            <input type="password" name="password" id="password" required
              class="mt-1 block w-full bg-white/20 border border-white/30 rounded-md shadow-sm focus:ring focus:ring-blue-500 text-white placeholder-white/70">
            @error('password')
              <div class="error text-red-200">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit"
            class="w-full bg-slate-500 hover:bg-gray-600 text-white py-2 rounded  transition duration-300">LOGIN</button>
        </div>

        <div class="register-link mt-4 text-white text-center">
          Don't have an account? <a href="{{ route('register') }}" class="text-blue-200 hover:underline">Sign In Here</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>