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
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Cairo:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('logo/kunooz_logo_icon.svg') }}" sizes="any">
  <link rel="icon" href="{{ asset('logo/kunooz_logo_icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('logo/kunooz_logo_icon.svg') }}">

  @viteReactRefresh
  @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body class="{{ app()->getLocale() === 'ar' ? 'font-ar' : 'font-en' }} bg-kunooz-bg text-kunooz-text antialiased">
  <!-- Animated Background -->
  <div class="fixed inset-0 -z-10 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-kunooz-primary-300/20 rounded-full blur-3xl animate-pulse">
    </div>
    <div class="absolute top-1/2 -left-20 w-60 h-60 bg-kunooz-accent-500/15 rounded-full blur-3xl animate-pulse"
      style="animation-delay: 1s;"></div>
    <div class="absolute bottom-20 right-1/4 w-72 h-72 bg-kunooz-primary-500/10 rounded-full blur-3xl animate-pulse"
      style="animation-delay: 2s;"></div>
  </div>

  <!-- Header -->
  <header
    class="sticky top-0 left-0 right-0 z-50 w-full backdrop-blur-md bg-white/50 border-b border-kunooz-border-subtle/50">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16 md:h-20">
        <!-- Logo -->
        <a href="/" class="flex-shrink-0 group">
          <img src="{{ $kunoozLogoPath }}" alt="Kunooz"
            class="h-8 md:h-10 w-auto transition-transform duration-300 group-hover:scale-105">
        </a>

        <!-- Language Switcher + CTA -->
        <div class="flex items-center gap-3 md:gap-4">
          <!-- Language Switcher -->
          <a href="{{ route('coming-soon', ['locale' => app()->getLocale() === 'en' ? 'ar' : 'en']) }}"
            class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-kunooz-text-muted hover:text-kunooz-primary-500 border border-kunooz-border-subtle rounded-full transition-all duration-300 hover:border-kunooz-primary-500 hover:bg-kunooz-primary-500/5">
            {{ app()->getLocale() === 'en' ? 'العربية' : 'English' }}
          </a>

          <!-- CTA Button -->
          <a href="#waiting-list"
            class="hidden md:inline-flex items-center gap-2 px-5 md:px-6 py-2.5 md:py-3 text-sm md:text-base font-semibold text-white bg-gradient-kunooz rounded-full shadow-kunooz-md hover:shadow-kunooz-lg transition-all duration-300 transform hover:-translate-y-0.5">
            <span>{{ __('coming-soon.header.cta') }}</span>
            <svg class="w-4 h-4 {{ app()->getLocale() === 'ar' ? 'rotate-180' : '' }}" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
          </a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-- Section 1: Hero + Kunooz Idea -->
    <section class="relative py-16 md:py-24 overflow-hidden">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          <!-- Text Content -->
          <div class="{{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }} lg:order-1">
            <!-- Badge -->
            <div
              class="inline-flex items-center gap-2 px-4 py-2 rounded-pill bg-gradient-to-r from-kunooz-primary-400/10 to-kunooz-accent-500/10 border border-kunooz-border-strong/30 mb-6">
              <span class="relative flex h-2 w-2">
                <span
                  class="animate-ping absolute inline-flex h-full w-full rounded-full bg-kunooz-accent-500 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-kunooz-accent-500"></span>
              </span>
              <span class="text-sm font-medium text-kunooz-text-strong">{{ __('coming-soon.hero.badge') }}</span>
            </div>

            <!-- Title -->
            <h1
              class="text-4xl sm:text-5xl lg:text-6xl mb-6 font-bold leading-tight text-transparent bg-gradient-to-r from-kunooz-primary-600 via-kunooz-primary-400 to-kunooz-accent-500 bg-clip-text">
              {{ __('coming-soon.hero.title') }}
            </h1>

            <!-- Description -->
            <p class="text-lg md:text-xl text-kunooz-text-muted leading-relaxed mb-6">
              {{ __('coming-soon.hero.message') }}
            </p>

            <!-- Secondary Text -->
            <div
              class="inline-flex items-center gap-3 px-5 py-3 rounded-xl bg-gradient-kunooz-teal/10 border border-kunooz-accent-500/20">
              <svg class="w-6 h-6 text-kunooz-accent-500 flex-shrink-0" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
              <p class="text-base font-medium text-kunooz-primary-700">
                {{ __('coming-soon.hero.secondary') }}
              </p>
            </div>

            <div class="mt-8">
              <a type="button" href="#waiting-list"
                class="inline-flex justify-center gap-2 py-4 px-6 w-full md:w-auto min-w-48 text-base font-semibold text-white bg-gradient-kunooz rounded-xl shadow-kunooz-md hover:shadow-kunooz-lg transition-all duration-300 transform hover:-translate-y-0.5">
                <span>{{ __('coming-soon.header.cta') }}</span>
              </a>
            </div>
          </div>

          <!-- Hero Image -->
          <div class="lg:order-2 relative">
            <div class="relative mx-auto max-w-lg lg:max-w-none">
              <!-- Decorative elements -->
              <div
                class="absolute inset-0 bg-gradient-kunooz rounded-3xl blur-3xl opacity-20 transform rotate-6 scale-105">
              </div>

              <!-- Image Container -->
              <div class="relative p-4 md:p-6">
                <img src="{{ $section1ImagePath }}" alt="Kunooz Dashboard Preview" class="w-full h-auto rounded-2xl">
              </div>

              <!-- Floating elements -->
              <div
                class="absolute -top-4 -right-4 md:-right-8 bg-white rounded-2xl shadow-kunooz-md p-3 md:p-4 animate-bounce"
                style="animation-duration: 3s;">
                <div class="flex items-center gap-2">
                  <div class="w-8 h-8 md:w-10 md:h-10 bg-green-100 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-5 md:h-5 text-green-600" fill="none" stroke="currentColor"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                  </div>
                  <div class="{{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }}">
                    <div class="text-xs text-kunooz-text-muted">{{ app()->getLocale() === 'ar' ? 'نمو المبيعات' :
                      'Sales
                      Growth' }}</div>
                    <div class="text-sm font-bold text-green-600">+127%</div>
                  </div>
                </div>
              </div>

              <div
                class="absolute -bottom-4 -left-4 md:-left-8 bg-white rounded-2xl shadow-kunooz-md p-3 md:p-4 animate-bounce"
                style="animation-duration: 4s; animation-delay: 0.5s;">
                <div class="flex items-center gap-2">
                  <div
                    class="w-8 h-8 md:w-10 md:h-10 bg-kunooz-primary-100 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-5 md:h-5 text-kunooz-primary-600" fill="none" stroke="currentColor"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                  </div>
                  <div class="{{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }}">
                    <div class="text-xs text-kunooz-text-muted">{{ app()->getLocale() === 'ar' ? 'عملاء متكررين' :
                      'Repeat Customers' }}</div>
                    <div class="text-sm font-bold text-kunooz-primary-600">+89%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 2: Waiting List Form -->
    <section id="waiting-list"
      class="relative py-16 md:py-24 bg-gradient-to-b from-transparent via-kunooz-bg-soft to-kunooz-bg">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          <!-- Form Content -->
          <div class="lg:order-2">
            <div
              class="max-w-xl {{ app()->getLocale() === 'ar' ? 'mr-0 ml-auto' : 'ml-0 mr-auto' }} bg-white rounded-2xl shadow-kunooz-lg p-6 sm:p-8 lg:p-10">
              <!-- Section Header -->
              <div class="flex flex-col space-y-6">
                <div class="flex items-center gap-2">
                  <div class="w-1 h-8 bg-gradient-kunooz rounded-full"></div>
                  <h2 class="text-3xl md:text-4xl font-bold text-kunooz-text-strong">
                    {{ __('coming-soon.form.title') }}
                  </h2>
                </div>
                <p class="text-lg text-kunooz-text-muted">
                  {{ __('coming-soon.form.trust_message') }}
                </p>
              </div>

              <!-- React Form Mount Point -->
              <div class="mt-6" id="waiting-list-form" data-react-component="WaitingListForm" data-props="{{ json_encode([
                'locale' => app()->getLocale(),
                'submit_url' => route('coming-soon.store'),
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
              ]) }}"></div>
            </div>
          </div>

          <!-- Image -->
          <div class="lg:order-1 relative hidden lg:block">
            <div class="relative max-w-md mx-auto">
              <div
                class="absolute inset-0 bg-gradient-kunooz-teal rounded-3xl blur-2xl opacity-20 transform -rotate-6 scale-105">
              </div>
              <img src="{{ $section2ImagePath }}" alt="Join Waiting List" class="relative w-full h-auto drop-shadow-xl">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-kunooz-bg-dark border-t border-white/10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div class="flex flex-col md:flex-row items-center justify-between gap-4">
        <img src="{{ $kunoozLogoPath }}" alt="Kunooz" class="h-8 w-auto brightness-0 invert opacity-80">
        <p class="text-sm text-kunooz-text-onDark/60">
          {{ __('coming-soon.footer.copyright', ['year' => date('Y')]) }}
        </p>
      </div>
    </div>
  </footer>
</body>

</html>