<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kunooz - {{ __('coming-soon.hero.title') }}</title>
  <link rel="icon" type="image/svg+xml" href="{{ asset('logo/kunooz_logo_icon.svg') }}">
  @vite(['resources/css/app.css', 'resources/js/app.tsx'])
</head>

<body class="antialiased {{ app()->getLocale() === 'ar' ? 'font-ar' : 'font-en' }} bg-kunooz-bg">

  <!-- Header -->
  <header class="sticky top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-lg border-b border-kunooz-border-subtle/50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <nav class="flex items-center justify-between h-16 md:h-20">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <img src="{{ $kunoozLogoPath }}" alt="Kunooz Logo" class="h-8 md:h-10 w-auto">
        </div>

        <!-- CTA Button -->
        <a href="#waiting-list" class="inline-flex items-center gap-2 px-5 md:px-6 py-2.5 md:py-3
                          rounded-pill text-sm md:text-base font-semibold
                          text-kunooz-text-onPrimary bg-gradient-kunooz
                          hover:shadow-kunooz-md hover:scale-105
                          transition-all duration-300 ease-out">
          <span>{{ __('coming-soon.header.cta') }}</span>
          <svg class="w-4 h-4 {{ app()->getLocale() === 'ar' ? 'rotate-180' : '' }}" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6" />
          </svg>
        </a>
      </nav>
    </div>
  </header>

  <main>

    <!-- Section 1: Hero + Kunooz Idea -->
    <section
      class="relative overflow-hidden bg-gradient-to-b from-white via-kunooz-bg-soft to-kunooz-bg py-16 md:py-24 lg:py-32">
      <!-- Decorative Background Elements -->
      <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div
          class="absolute top-20 {{ app()->getLocale() === 'ar' ? 'left-0' : 'right-0' }} w-96 h-96 bg-kunooz-primary-300/10 rounded-full blur-3xl">
        </div>
        <div
          class="absolute bottom-0 {{ app()->getLocale() === 'ar' ? 'right-20' : 'left-20' }} w-80 h-80 bg-kunooz-accent-500/10 rounded-full blur-3xl">
        </div>
      </div>

      <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

          <!-- Text Content -->
          <div class="order-2 lg:order-1 {{ app()->getLocale() === 'ar' ? 'text-right lg:order-2' : 'text-left' }}">
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

            <!-- Main Heading -->
            <h1
              class="text-4xl sm:text-5xl lg:text-6xl mb-6 font-bold leading-tight text-transparent bg-gradient-to-r from-kunooz-primary-600 via-kunooz-primary-400 to-kunooz-accent-500 bg-clip-text">
              {{ __('coming-soon.hero.title') }}
            </h1>

            <!-- Description -->
            <p class="text-lg sm:text-xl text-kunooz-text-muted leading-relaxed mb-6">
              {{ __('coming-soon.hero.message') }}
            </p>

            <!-- Secondary Message -->
            <div
              class="inline-flex items-center gap-3 px-5 py-3 rounded-xl bg-gradient-kunooz-teal/10 border border-kunooz-accent-500/20">
              <svg class="w-6 h-6 text-kunooz-accent-500 flex-shrink-0" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
              <p class="text-base font-medium text-kunooz-primary-600">
                {{ __('coming-soon.hero.secondary') }}
              </p>
            </div>

            <!-- Stats/Features -->
            {{-- <div class="grid grid-cols-3 gap-6 mt-12 pt-8 border-t border-kunooz-border-subtle">
              <div class="{{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }}">
                <div class="text-3xl font-bold text-kunooz-primary-500">AI</div>
                <div class="text-sm text-kunooz-text-muted mt-1">
                  {{ app()->getLocale() === 'ar' ? 'مدعوم بالذكاء الاصطناعي' : 'Powered' }}
                </div>
              </div>
              <div class="{{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }}">
                <div class="text-3xl font-bold text-kunooz-accent-500">24/7</div>
                <div class="text-sm text-kunooz-text-muted mt-1">
                  {{ app()->getLocale() === 'ar' ? 'أتمتة تلقائية' : 'Automation' }}
                </div>
              </div>
              <div class="{{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }}">
                <div class="text-3xl font-bold text-kunooz-primary-500">10x</div>
                <div class="text-sm text-kunooz-text-muted mt-1">
                  {{ app()->getLocale() === 'ar' ? 'نمو الإيرادات' : 'Revenue Growth' }}
                </div>
              </div>
            </div> --}}
          </div>

          <!-- Hero Image -->
          <div class="order-1 lg:order-2 {{ app()->getLocale() === 'ar' ? 'lg:order-1' : '' }}">
            <div class="relative">
              <!-- Glow Effect -->
              <div class="absolute inset-0 bg-gradient-kunooz rounded-2xl blur-2xl opacity-20 scale-95">
              </div>

              <!-- Image Container -->
              <div class="relative p-4">
                <img src="{{ $section1ImagePath }}" alt="Kunooz Dashboard Preview" class="w-full h-auto rounded-xl">
              </div>

              <!-- Floating Card Accent -->
              <div class="absolute -bottom-6 {{ app()->getLocale() === 'ar' ? '-left-6' : '-right-6' }}
                                        bg-white rounded-xl shadow-kunooz-md p-4
                                        border border-kunooz-border-subtle
                                        hidden sm:block">
                <div class="flex items-center gap-3">
                  <div class="w-12 h-12 rounded-full bg-gradient-kunooz flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div>
                    <div class="text-sm font-semibold text-kunooz-text-strong">
                      {{ app()->getLocale() === 'ar' ? 'سهل الاستخدام' : 'Easy Setup' }}
                    </div>
                    <div class="text-xs text-kunooz-text-muted">
                      {{ app()->getLocale() === 'ar' ? 'في دقائق' : 'In minutes' }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Section 2: Waiting List Form -->
    <section id="waiting-list" class="relative py-16 md:py-24 lg:py-32 bg-gradient-to-b from-white to-kunooz-bg/30">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

          <!-- Form Content -->
          <div class="order-2 lg:order-1">
            <!-- Section Heading -->
            <div class="mb-8 {{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }}">
              <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-kunooz-text-strong mb-4">
                {{ __('coming-soon.form.title') }}
              </h2>
              <p class="text-lg text-kunooz-text-muted">
                {{ __('coming-soon.form.trust_message') }}
              </p>
            </div>

            <!-- React Form Component Mount Point -->
            <div id="waiting-list-form-root" data-locale="{{ app()->getLocale() }}"
              class="bg-kunooz-bg-soft rounded-2xl p-6 sm:p-8 border border-kunooz-border-subtle shadow-kunooz-sm">
              <!-- React component will mount here -->

            </div>

            <!-- Trust Indicators -->
            {{-- <div
              class="mt-8 flex flex-wrap items-center gap-6 {{ app()->getLocale() === 'ar' ? 'justify-end' : 'justify-start' }}">
              <div class="flex items-center gap-2 text-sm text-kunooz-text-muted">
                <svg class="w-5 h-5 text-kunooz-status-success" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
                </svg>
                <span>{{ app()->getLocale() === 'ar' ? 'آمن 100%' : '100% Secure' }}</span>
              </div>
              <div class="flex items-center gap-2 text-sm text-kunooz-text-muted">
                <svg class="w-5 h-5 text-kunooz-status-success" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>
                <span>{{ app()->getLocale() === 'ar' ? 'لا رسائل مزعجة' : 'No Spam' }}</span>
              </div>
              <div class="flex items-center gap-2 text-sm text-kunooz-text-muted">
                <svg class="w-5 h-5 text-kunooz-status-success" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
                </svg>
                <span>{{ app()->getLocale() === 'ar' ? 'مزايا حصرية' : 'Exclusive Benefits' }}</span>
              </div>
            </div> --}}
          </div>

          <!-- Illustration / Benefits -->
          <div class="order-1 lg:order-2 {{ app()->getLocale() === 'ar' ? 'lg:order-1' : '' }}">
            <div class="relative">
              <!-- Background Decoration -->
              <div class="absolute inset-0 bg-gradient-kunooz-teal rounded-2xl blur-3xl opacity-15"></div>

              <!-- Main Illustration -->
              <div class="relative">
                <img src="{{ $section2ImagePath }}" alt="Join Kunooz" class="w-full h-auto mb-8 drop-shadow-2xl">
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-kunooz-bg-dark py-8">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div
          class="flex flex-col sm:flex-row items-center justify-between gap-4 {{ app()->getLocale() === 'ar' ? 'sm:flex-row-reverse' : '' }}">
          <div class="flex items-center gap-2">
            <img src="{{ $kunoozLogoPath }}" alt="Kunooz" class="h-6 brightness-0 invert opacity-80">
          </div>
          <p class="text-sm text-kunooz-text-onDark/60">
            © {{ date('Y') }} Kunooz. {{ app()->getLocale() === 'ar' ? 'جميع الحقوق محفوظة.' : 'All rights
            reserved.' }}
          </p>
        </div>
      </div>
    </footer>

  </main>

  {{-- <div class="space-y-3 pt-2"><button type="submit"
      class="w-full px-6 py-3.5 sm:py-4 bg-gradient-kunooz text-kunooz-text-onPrimary font-semibold rounded-xl shadow-kunooz-md hover:shadow-kunooz-lg hover:scale-[1.02] transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed font-en text-base sm:text-lg">Get
      Early Access</button><button type="submit"
      class="w-full px-6 py-3 bg-gradient-kunooz-teal text-kunooz-text-onPrimary font-semibold rounded-xl shadow-kunooz-md hover:shadow-kunooz-lg hover:scale-[1.02] transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed font-ar text-base"
      dir="rtl">احصل على وصول مبكر</button></div> --}}
</body>

</html>