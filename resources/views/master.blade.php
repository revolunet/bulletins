<!doctype html>
<html itemscope itemtype="http://schema.org/WebPage" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name') }}</title>
  <link href="https://unpkg.com/template.data.gouv.fr@1.2.1/dist/main.min.css" rel="stylesheet">
  <link href="{{ mix('/css/all.css') }}" rel="stylesheet">
  <link rel="icon" type="image/png" href="/images/favicon.png">
</head>
<body>
  <svg aria-hidden="true" focusable="false" style="display:none">
    <defs>
      <symbol viewBox="0 0 32 32" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" id="copy" xmlns="http://www.w3.org/2000/svg"><path d="M19.75 8.5V1H6.625L1 6.625V23.5h11.25V31H31V8.5H19.75zM6.625 3.651v2.974H3.651l2.974-2.974zm-3.75 17.974V8.5H8.5V2.875h9.375V8.5l-5.625 5.625v7.5H2.875zm15-10.474v2.974h-2.974l2.974-2.974zm11.25 17.974h-15V16h5.625v-5.625h9.375v18.75z" fill-rule="nonzero"/></symbol>

      <symbol viewBox="0 0 32 32" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" id="envelope" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero"><path d="M30.1 5.419c-9.355-.002-18.733-.005-28.1-.005A1.06 1.06 0 0 0 .975 6.439v19.122A1.06 1.06 0 0 0 2 26.586h28a1.061 1.061 0 0 0 1.025-1.025V6.439a1.056 1.056 0 0 0-.925-1.02zM3.025 7.464h25.95v17.072H3.025V7.464z"/><path d="M30.06 9.513c.933.098 1.382 1.395.393 1.945L16.54 18.287c-.438.188-.479.178-.893 0L1.733 11.458c-1.743-.968-.065-2.254.894-1.842l13.466 6.61 13.562-6.651c.3-.094.312-.062.405-.062z"/></g></symbol>

      <symbol viewBox="0 0 32 32" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" id="facebook" xmlns="http://www.w3.org/2000/svg"><path d="M28.188 1H3.812A2.821 2.821 0 0 0 1 3.813v24.375A2.821 2.821 0 0 0 3.813 31H16V17.875h-3.75v-3.75H16V12.25a5.635 5.635 0 0 1 5.625-5.625h3.75v3.75h-3.75a1.88 1.88 0 0 0-1.875 1.875v1.875h5.625l-.937 3.75H19.75V31h8.438A2.821 2.821 0 0 0 31 28.187V3.812A2.821 2.821 0 0 0 28.188 1z"/></symbol>

      <symbol viewBox="0 0 32 32" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" id="github" xmlns="http://www.w3.org/2000/svg"><path d="M16 1.371c-8.284 0-15 6.715-15 15 0 6.627 4.298 12.25 10.258 14.233.75.138 1.026-.326 1.026-.722 0-.357-.014-1.54-.021-2.793-4.174.907-5.054-1.77-5.054-1.77-.682-1.733-1.665-2.195-1.665-2.195-1.361-.931.103-.912.103-.912 1.506.106 2.299 1.546 2.299 1.546 1.338 2.293 3.509 1.63 4.365 1.247.134-.969.523-1.631.952-2.006-3.331-.379-6.834-1.666-6.834-7.413 0-1.638.586-2.976 1.546-4.027-.156-.378-.669-1.903.145-3.969 0 0 1.26-.403 4.126 1.537a14.453 14.453 0 0 1 3.755-.505c1.274.006 2.558.173 3.757.505 2.864-1.94 4.121-1.537 4.121-1.537.816 2.066.303 3.591.147 3.969.962 1.05 1.544 2.389 1.544 4.027 0 5.761-3.509 7.029-6.849 7.401.538.466 1.017 1.379 1.017 2.778 0 2.007-.018 3.623-.018 4.117 0 .399.27.867 1.03.72C26.707 28.616 31 22.996 31 16.371c0-8.285-6.716-15-15-15z" fill-rule="nonzero"/></symbol>

      <symbol viewBox="0 0 32 32" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" id="googleplus" xmlns="http://www.w3.org/2000/svg"><path d="M28.188 1H3.812A2.821 2.821 0 0 0 1 3.813v24.375A2.821 2.821 0 0 0 3.813 31h24.375A2.821 2.821 0 0 0 31 28.187V3.812A2.821 2.821 0 0 0 28.187 1zM12.251 23.5a7.493 7.493 0 0 1-7.5-7.5c0-4.148 3.352-7.5 7.5-7.5 2.027 0 3.721.738 5.028 1.963l-2.039 1.958c-.557-.534-1.529-1.154-2.989-1.154-2.56 0-4.653 2.121-4.653 4.734s2.092 4.734 4.653 4.734c2.971 0 4.084-2.133 4.254-3.234h-4.253v-2.573h7.084c.064.375.117.75.117 1.243 0 4.289-2.872 7.33-7.201 7.33l-.001-.001zm15-7.5h-1.875v1.875h-1.875V16h-1.875v-1.875h1.875V12.25h1.875v1.875h1.875V16z" fill-rule="nonzero"/></symbol>

      <symbol viewBox="0 0 32 32" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" id="magnifier" xmlns="http://www.w3.org/2000/svg"><path d="M30.07 26.529l-7.106-6.043c-.735-.662-1.521-.964-2.155-.936a11.194 11.194 0 0 0 2.691-7.299c0-6.214-5.036-11.25-11.25-11.25S1 6.037 1 12.251s5.036 11.25 11.25 11.25c2.786 0 5.334-1.012 7.299-2.691-.03.634.274 1.42.936 2.155l6.043 7.106c1.035 1.149 2.725 1.247 3.756.216 1.031-1.032.934-2.723-.216-3.756l.002-.002zm-17.82-6.78a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15z" fill-rule="nonzero"/></symbol>

      <symbol viewBox="0 0 32 32" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" id="round-cross" xmlns="http://www.w3.org/2000/svg"><path d="M16 .5C24.554.5 31.5 7.446 31.5 16S24.554 31.5 16 31.5.5 24.554.5 16 7.446.5 16 .5zm6.161 11.718a7.233 7.233 0 0 0-2.379-2.379L16 13.621l-3.782-3.782a7.233 7.233 0 0 0-2.379 2.379L13.621 16l-3.782 3.782a7.233 7.233 0 0 0 2.379 2.379L16 18.379l3.782 3.782a7.233 7.233 0 0 0 2.379-2.379L18.379 16l3.782-3.782z" fill-rule="nonzero"/></symbol>

      <symbol viewBox="0 0 32 32" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" id="rss" xmlns="http://www.w3.org/2000/svg"><path d="M28.188 1H3.812A2.821 2.821 0 0 0 1 3.813v24.375A2.821 2.821 0 0 0 3.813 31h24.375A2.821 2.821 0 0 0 31 28.187V3.812A2.821 2.821 0 0 0 28.187 1zM9.175 25.352a2.541 2.541 0 0 1-2.549-2.537 2.553 2.553 0 0 1 2.549-2.543 2.55 2.55 0 0 1 2.549 2.543 2.541 2.541 0 0 1-2.549 2.537zm6.399.023a8.913 8.913 0 0 0-2.62-6.339 8.882 8.882 0 0 0-6.328-2.625v-3.668c6.961 0 12.633 5.666 12.633 12.633h-3.685v-.001zm6.51 0c0-8.526-6.932-15.469-15.451-15.469V6.239c10.546 0 19.13 8.589 19.13 19.137h-3.68v-.001z" fill-rule="nonzero"/></symbol>

      <symbol viewBox="0 0 32 32" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" id="twitter" xmlns="http://www.w3.org/2000/svg"><path d="M31.003 6.695c-1.102.492-2.291.82-3.533.966a6.185 6.185 0 0 0 2.706-3.404 12.404 12.404 0 0 1-3.908 1.495 6.154 6.154 0 0 0-4.495-1.94 6.153 6.153 0 0 0-5.994 7.553A17.468 17.468 0 0 1 3.093 4.932a6.15 6.15 0 0 0-.831 3.094 6.147 6.147 0 0 0 2.736 5.122 6.16 6.16 0 0 1-2.789-.768v.076a6.154 6.154 0 0 0 4.94 6.034 6.149 6.149 0 0 1-2.783.106 6.177 6.177 0 0 0 5.748 4.277 12.347 12.347 0 0 1-9.117 2.549 17.4 17.4 0 0 0 9.44 2.766c11.32 0 17.513-9.381 17.513-17.514 0-.269-.005-.533-.017-.796a12.405 12.405 0 0 0 3.07-3.182v-.001z" fill-rule="nonzero"/></symbol>
    </defs>
  </svg>

  <header class="navbar" role="navigation">
    <div class="navbar__container container">
      <a class="navbar__home" href="/">
        {{ config('app.name') }}
      </a>

      <nav>
        <ul class="nav__links">
          <li class="nav__item">
            <div class="dropdown">
              {{ trans('layout.previous_bulletins') }}
              <div class="dropdown-content">
                <a href="{{ route('reports.choose') }}">{{ trans('layout.previous_bulletins.project') }}</a>
                <a href="{{ route('reports.week_index') }}">{{ trans('layout.previous_bulletins.week') }}</a>
              </div>
            </div>
          </li>
          <li class="nav__item"><a href="{{ route('about') }}">{{ trans('layout.about') }}</a></li>
          <li class="nav__item">
            <div class="dropdown">
              {{ trans('layout.language') }}
              <div class="dropdown-content">
                <a href="{{ route('setLocale', 'fr') }}">{{ trans('layout.language_fr') }} 🇫🇷</a>
                <a href="{{ route('setLocale', 'en') }}">{{ trans('layout.language_en') }} 🇬🇧</a>
              </div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main role="main">
    <div class="hero slope_from_white" role="banner">
      <div class="hero__container">
        <h1 class="hero__white-background">{{ trans('layout.hero_title') }}</h1>
        <p class="hero__white-background">{{ trans('layout.hero_subtitle') }}</p>
      </div>
    </div>
    <section class="@yield('section-class', 'section section-white')">
      <div class="container">
        @yield('content')
      </div>
    </section>
  </main>

  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="footer__logo">
        <ul class="footer__social">
          <li><a href="https://github.com/entrepreneur-interet-general/bulletins" title="GitHub"><svg class="icon icon-github"><use xlink:href="#github"></use></svg></a></li>
        </ul>
      </div>
      <ul class="footer__links">
        <li><a href="https://bulletins.eig-forever.org">{{ trans('layout.documentation') }}</a></li>
        <li><a href="https://github.com/entrepreneur-interet-general/bulletins">{{ trans('layout.source_code') }}</a></li>
      </ul>
      <ul class="footer__links"></ul>
    </div>
  </footer>
  <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
