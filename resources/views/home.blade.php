<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ __('Home') }} - {{ __('Kunooz') }}</title>

  <link rel="icon" href="{{ asset('logo/kunooz_logo_icon.svg') }}" sizes="any">
  <link rel="icon" href="{{ asset('logo/kunooz_logo_icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('logo/kunooz_logo_icon.svg') }}">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  @vite(['resources/css/app.css'])
</head>

<body class="bg-kunooz-bg text-kunooz-text antialiased">

  <!-- Animated Background -->
  <div class="fixed inset-0 -z-10 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-kunooz-primary-300/20 rounded-full blur-3xl animate-pulse">
    </div>
    <div class="absolute top-1/2 -left-20 w-60 h-60 bg-kunooz-accent-500/15 rounded-full blur-3xl animate-pulse"
      style="animation-delay: 1s;"></div>
    <div class="absolute bottom-20 right-1/4 w-72 h-72 bg-kunooz-primary-500/10 rounded-full blur-3xl animate-pulse"
      style="animation-delay: 2s;"></div>
  </div>

  <main>
    <header class="w-full py-8 lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
      @if (Route::has('login'))
      <nav class="flex items-center justify-end gap-4">
        @auth
        {{-- <a href="{{ url('/dashboard') }}"
          class="inline-block px-5 py-1.5 text-kunooz-text-strong border border-kunooz-border-accent hover:border-kunooz-border-primary rounded-sm text-base leading-normal">
          Dashboard
        </a> --}}

        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit"
            class="inline-block px-5 py-1.5 text-kunooz-text-strong border border-kunooz-border-accent hover:border-kunooz-border-primary rounded-sm text-base leading-normal">
            {{ __('Log Out') }}
          </button>
        </form>

        @else
        <a href="{{ route('login') }}"
          class="inline-block px-5 py-1.5 text-kunooz-text-strong border border-kunooz-border-accent hover:border-kunooz-border-primary rounded-sm text-base leading-normal">
          Log in
        </a>
        @endauth
      </nav>
      @endif
    </header>

    <section class="relative py-16 overflow-hidden">
      <div class="container mx-auto px-4">
        <img src="{{ asset('logo/kunooz_logo_v.svg') }}" alt="Kunooz Logo" class="w-full max-w-3xl mx-auto">
      </div>
    </section>
  </main>

</body>

</html>