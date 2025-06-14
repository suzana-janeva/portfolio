<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

  <meta name="theme-color" content="#5540af" />

  <meta property="og:title" content="Homepage | Suzana Janeva" />

  <meta property="og:locale" content="en_US" />

  <meta property="og:url" content="https://suzanajaneva.com" />

  <meta property="og:image" content="https://suzanajaneva.com/assets/img/social.jpg" />

  <meta name="description" content="Suzana Janeva" />

  <title>Suzana Janeva</title>

  <link rel="canonical" href="{{ url()->current() }}" />

  <link rel="icon" type="image/jpg" href="{{ asset('assets/img/favicon.jpg') }}" />

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />

  <link rel="preload" href="/assets/img/bg-hero.webp" as="image" type="image/webp" />

  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap">
  </noscript>

  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

  <link rel="stylesheet" href="/assets/styles/main.min.css" media="screen" crossorigin="anonymous" />

  <script>
    let gaLoaded = false;

    function loadGA() {
      if (gaLoaded) return;
      gaLoaded = true;

      let script = document.createElement('script');
      script.src = "https://www.googletagmanager.com/gtag/js?id={{ config('services.google.analytics_id') }}";
      script.async = true;
      document.head.appendChild(script);

      script.onload = function() {
        window.dataLayer = window.dataLayer || [];

        function gtag() {
          dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '{{ env("GOOGLE_ANALYTICS") }}', {
          'send_page_view': false
        });
      };
    }

    window.addEventListener('scroll', loadGA, {
      once: true
    });
    window.addEventListener
  </script>


  <script defer src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"></script>

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>


<body
  :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
  class="relative"
  x-data="{ mobileMenu: false }">

  <div id="main" class="relative">
    <div
      x-data="{
    triggerNavItem(id) {
        $scroll(id)
    },
    triggerMobileNavItem(id) {
        mobileMenu = false;
        this.triggerNavItem(id)
    }
}">
      <div class="w-full z-50 top-0 py-3 sm:py-5  absolute
  ">
        <div class="container flex items-center justify-between">
          <div>
            <a href="/">

            </a>
          </div>
          <div class="hidden lg:block">
            <ul class="flex items-center">

              <li class="group pl-6">

                <span
                  @click="triggerNavItem('#about')"
                  class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">About</span>

                <span
                  class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                <span
                  @click="triggerNavItem('#services')"
                  class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Services</span>

                <span
                  class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                <span
                  @click="triggerNavItem('#portfolio')"
                  class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Portfolio</span>

                <span
                  class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                <span
                  @click="triggerNavItem('#community')"
                  class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">My Community</span>

                <span
                  class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                <span
                  @click="triggerNavItem('#work')"
                  class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Work</span>

                <span
                  class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                <span
                  @click="triggerNavItem('#statistics')"
                  class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Statistics</span>

                <span
                  class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                <span
                  @click="triggerNavItem('#contact')"
                  class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Contact</span>

                <span
                  class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
              </li>

            </ul>
          </div>
          <div class="block lg:hidden">
            <button @click="mobileMenu = true">
              <i class="bx bx-menu text-4xl text-white"></i>
            </button>
          </div>
        </div>
      </div>

      <div
        class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden"
        :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
        <div
          class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3">
          <button
            class="absolute top-0 right-0 mt-4 mr-4"
            @click="mobileMenu = false">
            <img src="/assets/img/icon-close.svg" class="h-10 w-auto" alt="Close image" loading="lazy" />
          </button>

          <ul class="mt-8 flex flex-col">

            <li class="py-2">

              <span
                @click="triggerMobileNavItem('#about')"
                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">About</span>

            </li>

            <li class="py-2">

              <span
                @click="triggerMobileNavItem('#services')"
                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Services</span>

            </li>

            <li class="py-2">

              <span
                @click="triggerMobileNavItem('#portfolio')"
                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Portfolio</span>

            </li>

            <li class="py-2">

              <span
                @click="triggerMobileNavItem('#community')"
                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">My Community</span>

            </li>

            <li class="py-2">

              <span
                @click="triggerMobileNavItem('#work')"
                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Work</span>

            </li>

            <li class="py-2">

              <span
                @click="triggerMobileNavItem('#statistics')"
                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Statistics</span>

            </li>

            </li>

            <li class="py-2">

              <span
                @click="triggerMobileNavItem('#contact')"
                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Contact</span>

            </li>

          </ul>
        </div>
      </div>


      <div>
        <div
          class="relative bg-cover bg-center bg-no-repeat py-8"
          style="background-image: url(/assets/img/bg-hero.webp)">
          <div
            class="absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to bg-cover bg-center bg-no-repeat"></div>

          <div
            class="container relative z-30 pt-20 pb-12 sm:pt-56 sm:pb-48 lg:pt-64 lg:pb-48">
            <div class="flex flex-col items-center justify-center lg:flex-row">
              <div class="rounded-full border-8 border-primary shadow-xl">
                <picture>
                  <source srcset="/assets/img/me.webp" type="image/webp" alt="Portrait of Suzana Janeva" class="h-48 rounded-full sm:h-56" loading="lazy">
                  <img src="/assets/img/me.jpg" alt="Portrait of Suzana Janeva" class="h-48 rounded-full sm:h-56" loading="lazy" decoding="async">
                </picture>
              </div>
              <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
                <h1
                  class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-6xl">
                  Hello I'm Suzana Janeva!
                </h1>
                <div
                  class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start">
                  <div
                    class="flex items-center justify-center pl-0 sm:justify-start md:pl-1">
                    <p class="font-body text-lg uppercase text-white">Let's connect</p>
                    <div class="hidden sm:block">
                      <i class="bx bx-chevron-right text-3xl text-yellow"></i>
                    </div>
                  </div>
                  <div
                    class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                    <a href="https://www.linkedin.com/in/suzana-janeva-76b48398/" aria-label="LinkedIn Profile" class="pl-4">
                      <i
                        class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
                    </a>
                    <a href="https://github.com/suzana-janeva" class="pl-4" aria-label="Github Profile">
                      <i class="bx bxl-github text-2xl text-white hover:text-yellow"></i>
                    </a>
                    <a href="https://gitlab.com/suzanaristova" class="pl-4" aria-label="Gitlab Profile">
                      <i
                        class="bx bxl-gitlab text-2xl text-white hover:text-yellow"></i>
                    </a>
                    <a href="mailto:suzanajaneva92@gmail.com" class="pl-4" aria-label="Mail to">
                      <i class="bx bxs-envelope text-2xl text-white hover:text-yellow"></i>
                    </a>
                    <a href="skype:live:suzanaristova?call" class="pl-4" aria-label="Skype">
                      <i class="bx bxl-skype text-2xl text-white hover:text-yellow"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-grey-50" id="about">
          <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">
            <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
              <h2
                class="font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                Who am I?
              </h2>
              <h4
                class="pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                I'm Suzana Janeva, a Web Developer
              </h4>
              <p class="pt-6 font-body leading-relaxed text-grey-800">
                With 9 years of professional experience in web development, including more than 7 years
                dedicated to working with Laravel, I have developed a deep technical skill set. My
                experience in MySQL, REST API development, unit testing and Swagger documentation
                has equipped me to deliver clean, efficient and maintainable code that follows best
                practices and drives project success.
              </p>
              <div
                class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start">
                <div class="flex items-center justify-center sm:justify-start">
                  <p class="font-body text-lg font-semibold uppercase text-grey-800">
                    Connect with me
                  </p>
                  <div class="hidden sm:block">
                    <i class="bx bx-chevron-right text-2xl text-primary"></i>
                  </div>
                </div>
                <div
                  class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                  <a href="https://www.linkedin.com/in/suzana-janeva-76b48398/" aria-label="LinkedIn Profile">
                    <i
                      class="bx bxl-linkedin text-2xl text-primary hover:text-yellow"></i>
                  </a>
                  <a href="https://github.com/suzana-janeva" class="pl-4" aria-label="GitHub Profile">
                    <i class="bx bxl-github text-2xl text-primary hover:text-yellow"></i>
                  </a>
                  <a href="https://gitlab.com/suzanaristova" class="pl-4" aria-label="Gitlab Profile">
                    <i
                      class="bx bxl-gitlab text-2xl text-primary hover:text-yellow"></i>
                  </a>
                  <a href="mailto:suzanajaneva92@gmail.com" class="pl-4" aria-label="Mail to">
                    <i class="bx bxs-envelope text-2xl text-primary hover:text-yellow"></i>
                  </a>
                  <a href="skype:live:suzanaristova?call" class="pl-4" aria-label="Skype">
                    <i class="bx bxl-skype text-2xl text-primary hover:text-yellow"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
              <div>
                <div class="flex items-end justify-between">
                  <h4 class="font-body font-semibold uppercase text-black">
                    PHP & Laravel
                  </h4>
                  <h3 class="font-body text-3xl font-bold text-primary">86%</h3>
                </div>
                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                  <div class="h-3 rounded-full bg-primary" style="width: 86%"></div>
                </div>
              </div>
              <div class="pt-6">
                <div class="flex items-end justify-between">
                  <h4 class="font-body font-semibold uppercase text-black">REST API</h4>
                  <h3 class="font-body text-3xl font-bold text-primary">89%</h3>
                </div>
                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                  <div class="h-3 rounded-full bg-primary" style="width: 89%"></div>
                </div>
              </div>
              <div class="pt-6">
                <div class="flex items-end justify-between">
                  <h4 class="font-body font-semibold uppercase text-black">
                    MySQL
                  </h4>
                  <h3 class="font-body text-3xl font-bold text-primary">76%</h3>
                </div>
                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                  <div class="h-3 rounded-full bg-primary" style="width: 76%"></div>
                </div>
              </div>
              <div class="pt-6">
                <div class="flex items-end justify-between">
                  <h4 class="font-body font-semibold uppercase text-black">Unit Testing</h4>
                  <h3 class="font-body text-3xl font-bold text-primary">81%</h3>
                </div>
                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                  <div class="h-3 rounded-full bg-primary" style="width: 81%"></div>
                </div>
              </div>
              <div class="pt-6">
                <div class="flex items-end justify-between">
                  <h4 class="font-body font-semibold uppercase text-black">HTML & CSS</h4>
                  <h3 class="font-body text-3xl font-bold text-primary">79%</h3>
                </div>
                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                  <div class="h-3 rounded-full bg-primary" style="width: 79%"></div>
                </div>
              </div>
              <div class="pt-6">
                <div class="flex items-end justify-between">
                  <h4 class="font-body font-semibold uppercase text-black">jQuery & JavaScript </h4>
                  <h3 class="font-body text-3xl font-bold text-primary">59%</h3>
                </div>
                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                  <div class="h-3 rounded-full bg-primary" style="width: 59%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container py-16 md:py-20" id="services">
          <h2
            class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
            Here's what I'm good at
          </h2>
          <h3
            class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
            These are the services I offer
          </h3>

          <div
            class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
              <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                <div class="hidden group-hover:block">
                  <img src="/assets/img/icon-development-white.svg" alt="Development icon white" loading="lazy" />
                </div>
                <div class="block group-hover:hidden">
                  <img src="/assets/img/icon-development-black.svg" alt="Development icon black" loading="lazy" />
                </div>
              </div>
              <div class="text-center">
                <h3
                  class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                  WEB DEVELOPMENT
                </h3>
                <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                  I create scalable and efficient web applications using PHP, Laravel, MySQL and modern JavaScript frameworks.
                </p>
              </div>
            </div>
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
              <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                <div class="hidden group-hover:block">
                  <img src="/assets/img/icon-content-white.svg" alt="content marketing icon" loading="lazy" />
                </div>
                <div class="block group-hover:hidden">
                  <img src="/assets/img/icon-content-black.svg" alt="content marketing icon" loading="lazy" />
                </div>
              </div>
              <div class="text-center">
                <h3
                  class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                  API Development
                </h3>
                <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                  I build robust, scalable APIs for integration with third-party services and other applications,
                  ensuring seamless communication and data exchange with technology like RESTful APIs
                </p>
              </div>
            </div>
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
              <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                <div class="hidden group-hover:block">
                  <picture>
                    <source srcset="/assets/img/docker.webp" type="image/webp" alt="Mobile Application icon" loading="lazy">
                    <img src="/assets/img/docker.jpg" alt="Mobile Application icon" loading="lazy" decoding="async">
                  </picture>
                </div>
                <div class="block group-hover:hidden">
                  <picture>
                    <source srcset="/assets/img/docker.webp" type="image/webp" alt="Mobile Application icon" loading="lazy">
                    <img src="/assets/img/docker.jpg" alt="Mobile Application icon" loading="lazy" decoding="async">
                  </picture>
                </div>
              </div>
              <div class="text-center">
                <h3
                  class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                  Docker Containerization
                </h3>
                <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                  I utilize Docker to containerize web applications, ensuring consistent
                  development environments, scalability, and simplified deployment across various platforms.
                </p>
              </div>
            </div>
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
              <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                <div class="hidden group-hover:block">
                  <img
                    src="/assets/img/icon-graphics-white.svg"
                    alt="Email Marketing icon"
                    loading="lazy" />
                </div>
                <div class="block group-hover:hidden">
                  <img
                    src="/assets/img/icon-graphics-black.svg"
                    alt="Email Marketing icon"
                    loading="lazy" />
                </div>
              </div>
              <div class="text-center">
                <h3
                  class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                  SEO & Web Analytics
                </h3>
                <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                  I optimize websites for search engines using effective SEO strategies
                  and integrate web analytics to track performance and user engagement.
                </p>
              </div>
            </div>
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
              <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                <div class="hidden group-hover:block">
                  <img
                    src="/assets/img/database.png"
                    alt="Theme Design icon"
                    loading="lazy" />
                </div>
                <div class="block group-hover:hidden">
                  <img
                    src="/assets/img/database.png"
                    alt="Theme Design icon"
                    loading="lazy" />
                </div>
              </div>
              <div class="text-center">
                <h3
                  class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                  Database Management (MySQL)
                </h3>
                <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                  I design and optimize MySQL databases for efficient storage, fast queries,
                  and high performance, focusing on scalability and data integrity.
                </p>
              </div>
            </div>
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
              <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                <div class="hidden group-hover:block">
                  <img
                    src="/assets/img/icon-design-white.svg"
                    alt="Graphic Design icon"
                    loading="lazy" />
                </div>
                <div class="block group-hover:hidden">
                  <img
                    src="/assets/img/icon-design-black.svg"
                    alt="Graphic Design icon"
                    loading="lazy" />
                </div>
              </div>
              <div class="text-center">
                <h3
                  class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                  PHPUnit & Testing
                </h3>
                <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                  I use PHPUnit to perform unit, functional, and integration tests,
                  ensuring high-quality and reliable PHP code through automated testing and continuous integration.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="container py-16 md:py-20" id="portfolio">
          <h2
            class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
            Check out my Portfolio
          </h2>
          <h3
            class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
            Here's what I have done with the past
          </h3>

          <div
            class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2">
            <a
              href="http://jobs.suzanajaneva.com/api/documentation"
              class="mx-auto transform transition-all hover:scale-105 md:mx-0">
              <picture>
                <source srcset="/assets/img/job-project.webp" type="image/webp" alt="Portfolio image job" class="w-full shadow" loading="lazy">
                <img src="/assets/img/job-project.jpg" alt="Portfolio imag job" class="w-full shadow" loading="lazy" decoding="async">
              </picture>
            </a>
            <a
              href="http://conversion.suzanajaneva.com/api/documentation"
              class="mx-auto transform transition-all hover:scale-105 md:mx-0">
              <picture>
                <source srcset="/assets/img/convert-project.webp" type="image/webp" alt="Portfolio image convert" class="w-full shadow" loading="lazy">
                <img src="/assets/img/convert-project.jpg" alt="Portfolio image convert" class="w-full shadow" loading="lazy" decoding="async">
              </picture>
            </a>
          </div>
          <div
            class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2">
            <a
              href="https://laravel-module.suzanajaneva.com/service-providers"
              class="mx-auto transform transition-all hover:scale-105 md:mx-0">
              <picture>
                <source srcset="/assets/img/module.webp" type="image/webp" alt="Module image job" class="w-full shadow" loading="lazy">
                <img src="/assets/img/module.jpg" alt="Module imag job" class="w-full shadow" loading="lazy" decoding="async">
              </picture>
            </a>
          </div>
        </div>

        <div class="bg-grey-600" id="community">
          <div class="container py-16 md:py-20">
            <div class="mx-auto w-full sm:w-3/4 lg:w-full">
              <h2
                class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                My Community
              </h2>
              <div class="flex flex-wrap items-center justify-center pt-4 sm:pt-4">
                <a href="https://www.linkedin.com/in/suzana-janeva-76b48398/" aria-label="LinkedIn Profile">
                  <span class="m-8 block">
                    <i class="bx bxl-linkedin text-2xl text-primary hover:text-yellow"></i>
                  </span>
                </a>

                <a href="mailto:suzanajaneva92@gmail.com" aria-label="Mail to">
                  <span class="m-8 block">
                    <i class="bx bxs-envelope text-2xl text-primary hover:text-yellow"></i>
                  </span>
                </a>

                <a href="https://github.com/suzana-janeva" aria-label="GitHub Profile">
                  <span class="m-8 block">
                    <i class="bx bxl-github text-2xl text-primary hover:text-yellow"></i>
                  </span>
                </a>

                <a href="https://gitlab.com/suzanaristova" aria-label="Gitlab Profile">
                  <span class="m-8 block">
                    <i class="bx bxl-gitlab text-2xl text-primary hover:text-yellow"></i>
                  </span>
                </a>

                <a href="skype:suzanaristova?call" aria-label="Skype">
                  <span class="m-8 block">
                    <i class="bx bxl-skype text-2xl text-primary hover:text-yellow"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="container py-16 md:py-20" id="work">
          <h2
            class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
            My work experience
          </h2>

          <div class="relative mx-auto mt-12 flex w-full flex-col lg:w-2/3">
            <span
              class="left-2/5 absolute inset-y-0 ml-10 hidden w-0.5 bg-grey-400 md:block"></span>

            <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
              <div class="md:w-2/5">
                <div class="flex justify-center md:justify-start">
                  <span class="shrink-0">
                    <img
                      src="/assets/img/mignix.jpeg"
                      class="h-auto w-32"
                      alt="company logo"
                      loading="lazy" />
                  </span>
                  <div class="relative ml-3 hidden w-full md:block">
                    <span
                      class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                  </div>
                </div>
              </div>
              <div class="md:w-3/5">
                <div class="relative flex md:pl-18">
                  <span
                    class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-grey-400 bg-white md:block"></span>

                  <div class="mt-1 flex">
                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                    <div class="md:-mt-1 md:pl-8">
                      <span class="block font-body font-bold text-grey-400">July 2015 - October 2015</span>
                      <span
                        class="block pt-2 font-header text-xl font-bold uppercase text-primary"> Internship </span>
                      <div class="pt-2">
                        <span class="block font-body text-black">Completed an internship program focused on learning and developing websites using HTML, CSS, JavaScript, and jQuery.
                          I had experience in creating custom WordPress themes, plugins and deploying them to production.</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
              <div class="md:w-2/5">
                <div class="flex justify-center md:justify-start">
                </div>
              </div>
              <div class="md:w-3/5">
                <div class="relative flex md:pl-18">
                  <span
                    class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-grey-400 bg-white md:block"></span>

                  <div class="mt-1 flex">
                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                    <div class="md:-mt-1 md:pl-8">
                      <span class="block font-body font-bold text-grey-400">October 2015 - June 2017</span>
                      <span
                        class="block pt-2 font-header text-xl font-bold uppercase text-primary">Web Developer</span>
                      <div class="pt-2">
                        <span class="block font-body text-black">Worked on designing and developing responsive websites using HTML, CSS, JavaScript, and jQuery,
                          ensuring optimal user experience.
                          Created custom WordPress themes and plugins for client projects,
                          enhancing functionality and aesthetics, and working on Yii projects</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
              <div class="md:w-2/5">
                <div class="flex justify-center md:justify-start">
                  <span class="shrink-0">
                    <img
                      src="/assets/img/codeart.jpeg"
                      class="h-auto w-32"
                      alt="company logo"
                      loading="lazy" />
                  </span>
                  <div class="relative ml-3 hidden w-full md:block">
                    <span
                      class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                  </div>
                </div>
              </div>
              <div class="md:w-3/5">
                <div class="relative flex md:pl-18">
                  <span
                    class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-grey-400 bg-white md:block"></span>

                  <div class="mt-1 flex">
                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                    <div class="md:-mt-1 md:pl-8">
                      <span class="block font-body font-bold text-grey-400">July 2017 - present</span>
                      <span
                        class="block pt-2 font-header text-xl font-bold uppercase text-primary">Web Developer</span>
                      <div class="pt-2">
                        <span class="block font-body text-black">I have over 7 years of experience specializing
                          in Laravel (versions 5 to 11) and RESTful APIs. My expertise includes building scalable applications,
                          mastering Laravel packages,
                          and delivering high-quality solutions using the latest features and best practices.</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div
          class="bg-cover bg-top bg-no-repeat pb-16 md:py-16 lg:py-24"
          style="background-image: url(/assets/img/experience-figure.png)"
          id="statistics">
          <div class="container">
            <div
              class="mx-auto w-5/6 bg-white py-16 shadow md:w-11/12 lg:py-20 xl:py-24 2xl:w-full" style="border-top: 0.5px solid rgb(85 64 175);">
              <div class="grid grid-cols-12 gap-5 md:gap-8 xl:grid-cols-12 xl:gap-5">

                <div
                  class="flex flex-col items-center justify-center text-center md:flex-row md:text-left">
                  <div class="pt-5 md:pl-5 md:pt-0">
                    <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
                      I've completed many impactful projects, with more to come!
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container py-16 md:py-20" id="contact">
          <h2
            class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
            Here's a contact form
          </h2>
          <h4
            class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
            Have Any Questions?
          </h4>

          @if(session('success'))
          <div style="background-color: green" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-green-600 text-white px-6 py-3 rounded-md shadow-md mt-4 z-50 flex items-center justify-between">
            <span>{{ session('success') }}</span>
            <button onclick="this.parentElement.style.display='none'" class="text-white ml-10">
              &times;
            </button>
          </div>
          @endif

          <div class="mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6">
            <p class="font-body text-grey-10">
              Feel free to reach out with any inquiries, suggestions, or feedback.
              I'll personally respond to your message as soon as possible. Looking forward to hearing from you!
            </p>
          </div>

          <form class="mx-auto w-full pt-10 sm:w-3/4" action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="flex flex-col md:flex-row">
              <input
                class="mr-3 w-full rounded border-grey-00 px-4 py-3 font-body text-black md:w-1/2 lg:mr-5"
                placeholder="Name"
                type="text"
                name="name"
                id="name" />
              <input
                class="mt-6 w-full rounded border-grey-00 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
                placeholder="Email"
                type="email"
                name="email"
                id="email" />
            </div>
            <textarea
              class="mt-6 w-full rounded border-grey-00 px-4 py-3 font-body text-black md:mt-8"
              placeholder="Message"
              name="message"
              id="message"
              cols="30"
              rows="10"></textarea>
            <button
              class="mt-6 flex items-center justify-center rounded bg-primary px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-800"
              type="submit">
              Send
              <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
            </button>
          </form>

          <div class="flex flex-col pt-16 lg:flex-row">
            <div
              class="w-full border-l-2 border-t-2 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3">
              <div class="flex items-center">
                <i class="bx bx-phone text-2xl text-grey-400"></i>
                <p class="pl-2 font-body font-bold uppercase text-grey-400 lg:text-lg">
                  My Phone
                </p>
              </div>
              <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                <a href="tel:+38977909064"> (+389) 77 909 064 </a>
              </p>
            </div>
            <div
              class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2">
              <div class="flex items-center">
                <i class="bx bx-envelope text-2xl text-grey-400"></i>
                <p class="pl-2 font-body font-bold uppercase text-grey-400 lg:text-lg">
                  My Email
                </p>
              </div>
              <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                <a href="mailto:suzanajaneva92@gmail.com">suzanajaneva92@gmail.com</a>
              </p>
            </div>
            <div
              class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2">
              <div class="flex items-center">
                <i class="bx bx-map text-2xl text-grey-400"></i>
                <p class="pl-2 font-body font-bold uppercase text-grey-400 lg:text-lg">
                  My Address
                </p>
              </div>
              <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                Blagoj Davkov, Skopje, Macedonia
              </p>
            </div>
          </div>
        </div>

        <div
          class="relative bg-primary bg-cover bg-center bg-no-repeat py-16 bg-blend-multiply lg:py-24"
          style="background-image: url(/assets/img/bg-cta.jpg)">
          <div class="container flex flex-col justify-between sm:flex-row">
            <p class="text-center font-body text-white md:text-left">
              © Copyright 2025. All right reserved, Suzana Janeva.
            </p>
            <div class="flex items-center justify-center pt-5 sm:justify-start sm:pt-0">
              <a href="https://www.linkedin.com/in/suzana-janeva-76b48398/" aria-label="LinkedIn Profile">
                <i class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
              </a>
              <a href="https://github.com/suzana-janeva" class="pl-4" aria-label="Github Profile">
                <i class="bx bxl-github text-2xl text-white hover:text-yellow"></i>
              </a>
              <a href="https://gitlab.com/suzanaristova" class="pl-4" aria-label="Gitlab Profile">
                <i
                  class="bx bxl-gitlab text-2xl text-white hover:text-yellow"></i>
              </a>
              <a href="mailto:suzanajaneva92@gmail.com" class="pl-4" aria-label="Mail to">
                <i class="bx bxs-envelope text-2xl text-white hover:text-yellow"></i>
              </a>
              <a href="skype:live:suzanaristova?call" class="pl-4" aria-label="Skype">
                <i class="bx bxl-skype text-2xl text-white hover:text-yellow"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <script src="/assets/js/main.js"></script>


</body>

</html>