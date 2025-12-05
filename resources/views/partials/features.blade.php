{{-- Features Preview --}}
<section class="py-16 md:py-24 bg-kunooz-bg-dark text-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="{{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }} mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        {{ app()->getLocale() === 'ar' ? 'ما الذي ستحصل عليه' : 'What You\'ll Get' }}
      </h2>
      <p class="text-lg text-kunooz-text-onDark/80">
        {{ app()->getLocale() === 'ar' ? 'أدوات ذكية لنمو متجرك' : 'Smart tools to grow your store' }}
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
      {{-- Feature 1 --}}
      <div
        class="group relative bg-white/5 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/10 hover:border-kunooz-accent-500/50 transition-all duration-300 hover:bg-white/10">
        <div
          class="w-12 h-12 md:w-14 md:h-14 bg-kunooz-primary-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-kunooz-primary-500/30 transition-colors">
          <svg class="w-6 h-6 md:w-7 md:h-7 text-kunooz-primary-300" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-3">
          {{ app()->getLocale() === 'ar' ? 'لوحة تحكم ذكية' : 'Smart Dashboard' }}
        </h3>
        <p class="text-kunooz-text-onDark/70">
          {{ app()->getLocale() === 'ar' ? 'تحليلات متقدمة لفهم سلوك عملائك وتحسين استراتيجيتك' : 'Advanced
          analytics to understand customer behavior and optimize your strategy' }}
        </p>
      </div>

      {{-- Feature 2 --}}
      <div
        class="group relative bg-white/5 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/10 hover:border-kunooz-accent-500/50 transition-all duration-300 hover:bg-white/10">
        <div
          class="w-12 h-12 md:w-14 md:h-14 bg-kunooz-accent-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-kunooz-accent-500/30 transition-colors">
          <svg class="w-6 h-6 md:w-7 md:h-7 text-kunooz-accent-400" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-3">
          {{ app()->getLocale() === 'ar' ? 'أتمتة ذكية' : 'Smart Automation' }}
        </h3>
        <p class="text-kunooz-text-onDark/70">
          {{ app()->getLocale() === 'ar' ? 'رسائل مخصصة تُرسل تلقائياً في الوقت المناسب لكل عميل' : 'Personalized
          messages sent automatically at the right time for each customer' }}
        </p>
      </div>

      {{-- Feature 3 --}}
      <div
        class="group relative bg-white/5 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/10 hover:border-kunooz-accent-500/50 transition-all duration-300 hover:bg-white/10 md:col-span-2 lg:col-span-1">
        <div
          class="w-12 h-12 md:w-14 md:h-14 bg-kunooz-primary-400/20 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-kunooz-primary-400/30 transition-colors">
          <svg class="w-6 h-6 md:w-7 md:h-7 text-kunooz-primary-300" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-3">
          {{ app()->getLocale() === 'ar' ? 'زيادة الإيرادات' : 'Revenue Growth' }}
        </h3>
        <p class="text-kunooz-text-onDark/70">
          {{ app()->getLocale() === 'ar' ? 'تحقيق نمو مستدام من خلال تحويل العملاء الحاليين إلى عملاء متكررين' :
          'Achieve sustainable growth by converting existing customers into repeat buyers' }}
        </p>
      </div>
    </div>
  </div>
</section>
