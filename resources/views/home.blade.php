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

  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '3338111373009238');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=3338111373009238&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
</head>

<body class="bg-kunooz-bg text-kunooz-text antialiased">

  <!-- Animated Background -->
  <div class="fixed inset-0 -z-10 overflow-hidden">
    <div class="bg-kunooz-primary-300/20 absolute -right-40 -top-40 h-80 w-80 animate-pulse rounded-full blur-3xl">
    </div>
    <div class="bg-kunooz-accent-500/15 absolute -left-20 top-1/2 h-60 w-60 animate-pulse rounded-full blur-3xl" style="animation-delay: 1s;"></div>
    <div class="bg-kunooz-primary-500/10 absolute bottom-20 right-1/4 h-72 w-72 animate-pulse rounded-full blur-3xl" style="animation-delay: 2s;"></div>
  </div>

  <main>
    <header class="not-has-[nav]:hidden mb-6 w-full max-w-[335px] py-8 text-sm lg:max-w-4xl">
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
                class="text-kunooz-text-strong border-kunooz-border-accent hover:border-kunooz-border-primary inline-block rounded-sm border px-5 py-1.5 text-base leading-normal">
                {{ __('Log Out') }}
              </button>
            </form>
          @else
            <a href="{{ route('login') }}"
              class="text-kunooz-text-strong border-kunooz-border-accent hover:border-kunooz-border-primary inline-block rounded-sm border px-5 py-1.5 text-base leading-normal">
              Log in
            </a>
          @endauth
        </nav>
      @endif
    </header>

    <section class="relative overflow-hidden py-16">
      <div class="container mx-auto px-4">
        <img src="{{ asset('logo/kunooz_logo_v.svg') }}" alt="Kunooz Logo" class="mx-auto w-full max-w-3xl">
      </div>
    </section>
  </main>

</body>

</html>
