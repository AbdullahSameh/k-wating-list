<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ __('coming-soon.hero.title') }} - Kunooz</title>
  <meta name="description" content="{{ __('coming-soon.hero.message') }}">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('logo/kunooz_logo_icon.svg') }}" sizes="any">
  <link rel="icon" href="{{ asset('logo/kunooz_logo_icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('logo/kunooz_logo_icon.svg') }}">

  @viteReactRefresh
  @vite(['resources/css/app.css', 'resources/js/app.jsx'])

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

<body class="{{ app()->getLocale() === 'ar' ? 'font-ar' : 'font-en' }} bg-kunooz-bg text-kunooz-text antialiased">
  <!-- Animated Background -->
  <div class="fixed inset-0 -z-10 overflow-hidden">
    <div class="bg-kunooz-primary-300/20 absolute -right-40 -top-40 h-80 w-80 animate-pulse rounded-full blur-3xl">
    </div>
    <div class="bg-kunooz-accent-500/15 absolute -left-20 top-1/2 h-60 w-60 animate-pulse rounded-full blur-3xl" style="animation-delay: 1s;"></div>
    <div class="bg-kunooz-primary-500/10 absolute bottom-20 right-1/4 h-72 w-72 animate-pulse rounded-full blur-3xl" style="animation-delay: 2s;"></div>
  </div>

  <!-- Header -->
  <header class="border-kunooz-border-subtle/50 sticky left-0 right-0 top-0 z-50 w-full border-b bg-white/50 backdrop-blur-md">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between md:h-20">
        <!-- Logo -->
        <a href="/" class="group flex-shrink-0">
          <img src="{{ $kunoozLogoPath }}" alt="Kunooz" class="h-8 w-auto transition-transform duration-300 group-hover:scale-105 md:h-10">
        </a>

        <!-- Language Switcher + CTA -->
        <div class="flex items-center gap-3 md:gap-4">
          <!-- Language Switcher -->
          <a href="{{ route('coming-soon', ['locale' => app()->getLocale() === 'en' ? 'ar' : 'en']) }}"
            class="text-kunooz-text-muted hover:text-kunooz-primary-500 border-kunooz-border-subtle hover:border-kunooz-primary-500 hover:bg-kunooz-primary-500/5 inline-flex items-center rounded-full border px-3 py-1.5 text-sm font-medium transition-all duration-300">
            {{ app()->getLocale() === 'en' ? 'العربية' : 'English' }}
          </a>

          <!-- CTA Button -->
          <a href="#waiting-list"
            class="bg-gradient-kunooz shadow-kunooz-md hover:shadow-kunooz-lg hidden transform items-center gap-2 rounded-full px-5 py-2.5 text-sm font-semibold text-white transition-all duration-300 hover:-translate-y-0.5 md:inline-flex md:px-6 md:py-3 md:text-base">
            <span>{{ __('coming-soon.header.cta') }}</span>
            <svg class="{{ app()->getLocale() === 'ar' ? 'rotate-180' : '' }} h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
          </a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-- Section 1: Hero + Kunooz Idea -->
    <section class="relative overflow-hidden py-16 md:py-24">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
          <!-- Text Content -->
          <div class="{{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }} lg:order-1">
            <!-- Badge -->
            <div
              class="rounded-pill from-kunooz-primary-400/10 to-kunooz-accent-500/10 border-kunooz-border-strong/30 mb-6 inline-flex items-center gap-2 border bg-gradient-to-r px-4 py-2">
              <span class="relative flex h-2 w-2">
                <span class="bg-kunooz-accent-500 absolute inline-flex h-full w-full animate-ping rounded-full opacity-75"></span>
                <span class="bg-kunooz-accent-500 relative inline-flex h-2 w-2 rounded-full"></span>
              </span>
              <span class="text-kunooz-text-strong text-sm font-medium">{{ __('coming-soon.hero.badge') }}</span>
            </div>

            <!-- Title -->
            <h1
              class="from-kunooz-primary-600 via-kunooz-primary-400 to-kunooz-accent-500 mb-6 bg-gradient-to-r bg-clip-text text-4xl font-bold leading-tight text-transparent sm:text-5xl lg:text-6xl">
              {{ __('coming-soon.hero.title') }}
            </h1>

            <!-- Description -->
            <p class="text-kunooz-text-muted mb-6 text-lg leading-relaxed md:text-xl">
              {{ __('coming-soon.hero.message') }}
            </p>

            <!-- Secondary Text -->
            <div class="bg-gradient-kunooz-teal/10 border-kunooz-accent-500/20 inline-flex items-center gap-3 rounded-xl border px-5 py-3">
              <svg class="text-kunooz-accent-500 h-6 w-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
              <p class="text-kunooz-primary-700 text-base font-medium">
                {{ __('coming-soon.hero.secondary') }}
              </p>
            </div>

            <div class="mt-8">
              <a type="button" href="#waiting-list"
                class="bg-gradient-kunooz shadow-kunooz-md hover:shadow-kunooz-lg inline-flex w-full min-w-48 transform justify-center gap-2 rounded-xl px-6 py-4 text-base font-semibold text-white transition-all duration-300 hover:-translate-y-0.5 md:w-auto">
                <span>{{ __('coming-soon.header.cta') }}</span>
              </a>
            </div>
          </div>

          <!-- Hero Image -->
          <div class="relative lg:order-2">
            <div class="relative mx-auto max-w-lg lg:max-w-none">
              <!-- Decorative elements -->
              <div class="bg-gradient-kunooz absolute inset-0 rotate-6 scale-105 transform rounded-3xl opacity-20 blur-3xl">
              </div>

              <!-- Image Container -->
              <div class="relative p-4 md:p-6">
                <img src="{{ $section1ImagePath }}" alt="Kunooz Dashboard Preview" class="h-auto w-full rounded-2xl">
              </div>

              <!-- Floating elements -->
              <div class="shadow-kunooz-md absolute -right-4 -top-4 animate-bounce rounded-2xl bg-white p-3 md:-right-8 md:p-4" style="animation-duration: 3s;">
                <div class="flex items-center gap-2">
                  <div class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 md:h-10 md:w-10">
                    <svg class="h-4 w-4 text-green-600 md:h-5 md:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                  </div>
                  <div class="{{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }}">
                    <div class="text-kunooz-text-muted text-xs">
                      {{ app()->getLocale() === 'ar'
                          ? 'نمو المبيعات'
                          : 'Sales
                                                                                                            Growth' }}
                    </div>
                    <div class="text-sm font-bold text-green-600">+127%</div>
                  </div>
                </div>
              </div>

              <div class="shadow-kunooz-md absolute -bottom-4 -left-4 animate-bounce rounded-2xl bg-white p-3 md:-left-8 md:p-4"
                style="animation-duration: 4s; animation-delay: 0.5s;">
                <div class="flex items-center gap-2">
                  <div class="bg-kunooz-primary-100 flex h-8 w-8 items-center justify-center rounded-full md:h-10 md:w-10">
                    <svg class="text-kunooz-primary-600 h-4 w-4 md:h-5 md:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                  </div>
                  <div class="{{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }}">
                    <div class="text-kunooz-text-muted text-xs">{{ app()->getLocale() === 'ar' ? 'عملاء متكررين' : 'Repeat Customers' }}</div>
                    <div class="text-kunooz-primary-600 text-sm font-bold">+89%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 2: Waiting List Form -->
    <section id="waiting-list" class="via-kunooz-bg-soft to-kunooz-bg relative bg-gradient-to-b from-transparent py-16 md:py-24">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
          <!-- Form Content -->
          <div class="lg:order-2">
            <div class="{{ app()->getLocale() === 'ar' ? 'mr-0 ml-auto' : 'ml-0 mr-auto' }} shadow-kunooz-lg max-w-xl rounded-2xl bg-white p-6 sm:p-8 lg:p-10">
              <!-- Section Header -->
              <div class="flex flex-col space-y-6">
                <div class="flex items-center gap-2">
                  <div class="bg-gradient-kunooz h-8 w-1 rounded-full"></div>
                  <h2 class="text-kunooz-text-strong text-3xl font-bold md:text-4xl">
                    {{ __('coming-soon.form.title') }}
                  </h2>
                </div>
                <p class="text-kunooz-text-muted text-lg">
                  {{ __('coming-soon.form.trust_message') }}
                </p>
              </div>

              <!-- React Form Mount Point -->
              <div class="mt-6" id="waiting-list-form" data-react-component="WaitingListForm"
                data-props="{{ json_encode([
                    'locale' => app()->getLocale(),
                    'submit_url' => route('waiting-list.store'),
                    'translations' => [
                        'name_label' => __('coming-soon.form.name_label'),
                        'name_placeholder' => __('coming-soon.form.name_placeholder'),
                        'phone_label' => __('coming-soon.form.phone_label'),
                        'phone_placeholder' => __('coming-soon.form.phone_placeholder'),
                        'email_label' => __('coming-soon.form.email_label'),
                        'email_placeholder' => __('coming-soon.form.email_placeholder'),
                        'store_label' => __('coming-soon.form.store_label'),
                        'store_placeholder' => __('coming-soon.form.store_placeholder'),
                        'cta' => __('coming-soon.header.cta'),
                        'privacy_note' => __('coming-soon.form.privacy_note'),
                        'success_message' => __('coming-soon.form.success_message'),
                        'error_message' => __('coming-soon.form.error_message'),
                        'validation_error' => __('coming-soon.form.validation_error'),
                        'server_error' => __('coming-soon.form.server_error'),
                    ],
                ]) }}">
              </div>
            </div>
          </div>

          <!-- Image -->
          <div class="relative hidden lg:order-1 lg:block">
            <div class="relative mx-auto max-w-md">
              <div class="bg-gradient-kunooz-teal absolute inset-0 -rotate-6 scale-105 transform rounded-3xl opacity-20 blur-2xl">
              </div>
              <img src="{{ $section2ImagePath }}" alt="Join Waiting List" class="relative h-auto w-full drop-shadow-xl">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-kunooz-bg-dark border-t border-white/10">
    <div class="container mx-auto px-4 py-8 sm:px-6 lg:px-8">
      <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
        <img src="{{ $kunoozLogoPath }}" alt="Kunooz" class="h-8 w-auto opacity-80 brightness-0 invert">
        <p class="text-kunooz-text-onDark/60 text-sm">
          {{ __('coming-soon.footer.copyright', ['year' => date('Y')]) }}
        </p>
      </div>
    </div>
  </footer>
</body>

</html>
