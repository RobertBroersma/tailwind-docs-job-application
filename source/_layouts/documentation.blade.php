@extends('_layouts.master')

@section('meta')
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@tailwindcss">
<meta name="twitter:title" content="{{ $page->title ? $page->title . ' - Tailwind CSS' : 'Tailwind CSS - A utility-first CSS framework for rapidly building custom designs' }}">
<meta name="twitter:description" content="{{ $page->description ? $page->description : 'Documentation for the Tailwind CSS framework.' }}">
<meta name="twitter:image" content="https://tailwindcss.com/img/tailwind-twitter-square.png">
<meta name="twitter:creator" content="@tailwindcss">
<meta property="og:url" content="https://tailwindcss.com/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $page->title ? $page->title . ' - Tailwind CSS' : 'Tailwind CSS - A utility-first CSS framework for rapidly building custom designs' }}" />
<meta property="og:description" content="{{ $page->description ? $page->description : 'Documentation for the Tailwind CSS framework.' }}" />
<meta property="og:image" content="https://tailwindcss.com/img/twitter-large-card.png" />
@endsection

@push('scripts')
<script src="{{ mix('/js/nav.js', 'assets/build') }}" defer></script>
@endpush

@section('body')

{{-- Top nav --}}
<div>
  <div id="header">
    <div class="flex bg-white border-b border-gray-200 fixed top-0 inset-x-0 z-100 h-16 items-center">
      <div class="w-full max-w-screen-xl relative mx-auto px-6">
        <div class="flex items-center -mx-6">

          {{-- Logo section --}}
          <div class="lg:w-1/4 xl:w-1/5 pl-6 pr-6">
            <div class="flex items-center">
              <a href="/" class="block">
                <img src="/img/logo.svg" class="h-16 w-auto md:block" alt="Robert CSS">
              </a>
            </div>
          </div>

          <div class="flex flex-grow lg:w-3/4 xl:w-4/5">

            {{-- Search section --}}
            <div class="w-full lg:px-6 xl:w-3/4 xl:px-12">
              <!-- <div class="relative">
                <input id="docsearch" class="transition-colors duration-100 ease-in-out focus:outline-0 border border-transparent focus:bg-white focus:border-gray-300 placeholder-gray-600 rounded-lg bg-gray-200 py-2 pr-4 pl-10 block w-full appearance-none leading-normal" type="text" placeholder="Search the docs (Press &quot;/&quot; to focus)">
                <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
                  <svg class="fill-current pointer-events-none text-gray-600 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
                </div>
              </div> -->
            </div>


            <button type="button" id="sidebar-open" class="flex px-6 items-center lg:hidden text-gray-500 focus:outline-none focus:text-gray-700">
              <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>


            <button type="button" id="sidebar-close" class="hidden flex px-6 items-center lg:hidden text-gray-500 focus:outline-none focus:text-gray-700">
              <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
            </button>

            {{-- Links section --}}
            <div class="hidden lg:flex lg:items-center lg:justify-between xl:w-1/4 px-6">
              <div class="relative mr-4">
                <div class="appearance-none block bg-transparent pl-2 pr-8 py-1 text-gray-500 font-medium text-base focus:outline-none focus:text-gray-800">
                  v26.0.0
                </div>
              </div>
              <div class="flex justify-end items-center text-gray-500">
                <a class="block flex items-center hover:text-gray-700 mr-5" href="https://github.com/RobertBroersma">
                  <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>GitHub</title><path d="M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0"/></svg>
                </a>
                <a class="block flex items-center hover:text-gray-700 mr-5" href="https://twitter.com/robertbrosma">
                  <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Twitter</title><path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"/></svg>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
{{-- /Top nav --}}


{{-- Main container --}}
<div class="w-full max-w-screen-xl mx-auto px-6">
  <div class="lg:flex -mx-6">

    {{-- Side nav --}}
    <div id="sidebar" class="hidden fixed inset-0 pt-16 h-full bg-white z-90 w-full border-b -mb-16 lg:-mb-0 lg:static lg:h-auto lg:overflow-y-visible lg:border-b-0 lg:pt-0 lg:w-1/4 lg:block lg:border-0 xl:w-1/5">

      <div id="navWrapper" class="h-full overflow-y-auto scrolling-touch lg:h-auto lg:block lg:relative lg:sticky lg:top-16 bg-white lg:bg-transparent">
        <div id="navGradient" class="hidden"></div>
        <nav id="nav" class="px-6 pt-6 overflow-y-auto text-base lg:text-sm lg:py-12 lg:pl-6 lg:pr-8 sticky?lg:h-(screen-16)">
          <div class="relative -mx-2 w-24 mb-8 lg:hidden">
            <div class="appearance-none block bg-white pl-2 pr-8 py-1 text-gray-500 font-medium text-base focus:outline-none focus:text-gray-800">
              v26.0.0
            </div>
          </div>
          <div class="mb-10">
            
            <a href="/a-great-fit" class="mt-3 lg:mt-1 flex items-center px-2 -mx-2 py-1 hover:text-gray-900 font-medium {{ $page->categoryActive('/a-great-fit') ? 'text-gray-900' : 'text-gray-600' }}">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path class="text-gray-400 fill-current" d="M3 6l9 4v12l-9-4V6zm14-3v2c0 1.1-2.24 2-5 2s-5-.9-5-2V3c0 1.1 2.24 2 5 2s5-.9 5-2z"/>
                <polygon class="text-gray-700 fill-current" points="21 6 12 10 12 22 21 18"/>
              </svg>
              <span class="ml-3">A Great Fit</span>
            </a>
            <a href="/projects" data-external class="mt-3 lg:mt-1 flex items-center px-2 -mx-2 py-1 hover:text-gray-900 font-medium {{ ($page->categoryActive('/projects') || $page->categoryActive('/screencasts')) ? 'text-gray-900' : 'text-gray-600' }}">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path class="text-gray-400 fill-current" d="M4 3h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v2h2V5H4zm0 4v2h2V9H4zm0 4v2h2v-2H4zm0 4v2h2v-2H4zM18 5v2h2V5h-2zm0 4v2h2V9h-2zm0 4v2h2v-2h-2zm0 4v2h2v-2h-2z"/>
                <path class="text-gray-700 fill-current" d="M9 5h6a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1zm0 8h6a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1z"/>
              </svg>
              <span class="ml-3">My Projects</span>
            </a>
            <a href="/exciting-things" class="mt-3 lg:mt-1 flex items-center px-2 -mx-2 py-1 hover:text-gray-900 font-medium {{ $page->categoryActive('/exciting-things') ? 'text-gray-900' : 'text-gray-600' }}">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path class="text-gray-400 fill-current" d="M9 22c.19-.14.37-.3.54-.46L17.07 14H20a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H9zM4 2h4a2 2 0 0 1 2 2v14a4 4 0 1 1-8 0V4c0-1.1.9-2 2-2zm2 17.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                <path class="text-gray-700 fill-current" d="M11 18.66V7.34l2.07-2.07a2 2 0 0 1 2.83 0l2.83 2.83a2 2 0 0 1 0 2.83L11 18.66z"/>
              </svg>
              <span class="ml-3">Exciting Things</span>
            </a>
            <a href="/technical" class="mt-3 lg:mt-1 flex items-center px-2 -mx-2 py-1 hover:text-gray-900 font-medium {{ $page->getPath == '/technical' ? 'text-gray-900' : 'text-gray-600' }}">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path class="text-gray-400 fill-current" d="M12 21a2 2 0 0 1-1.41-.59l-.83-.82A2 2 0 0 0 8.34 19H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4a5 5 0 0 1 4 2v16z"/>
                <path class="text-gray-700 fill-current" d="M12 21V5a5 5 0 0 1 4-2h4a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-4.34a2 2 0 0 0-1.42.59l-.83.82A2 2 0 0 1 12 21z"/>
              </svg>
              <span class="ml-3">Technical</span>
            </a>
            <a href="/fin" class="mt-3 lg:mt-1 flex items-center px-2 -mx-2 py-1 hover:text-gray-900 font-medium {{ $page->categoryActive('/fin') ? 'text-gray-900' : 'text-gray-600' }}">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path class="text-gray-400 fill-current" d="M20.3 12.04l1.01 3a1 1 0 0 1-1.26 1.27l-3.01-1a7 7 0 1 1 3.27-3.27zM11 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                <path class="text-gray-700 fill-current" d="M15.88 17.8a7 7 0 0 1-8.92 2.5l-3 1.01a1 1 0 0 1-1.27-1.26l1-3.01A6.97 6.97 0 0 1 5 9.1a9 9 0 0 0 10.88 8.7z"/>
              </svg>
              <span class="ml-3">Fin</span>
            </a>
          </div>
        </nav>
      </div>
    </div>
    {{-- /Side nav --}}

    {{-- Right content/TOC pane --}}
    <div id="content-wrapper" class="min-h-screen w-full lg:static lg:max-h-full lg:overflow-visible lg:w-3/4 xl:w-4/5 ">

      {{-- "Turbolinks" --}}
      <div id="content">

        {{-- Vue-enabled area --}}
        <div id="app" class="flex" v-cloak>

          {{-- Main content area --}}
          <div class="pt-24 pb-16 lg:pt-28 w-full">
            <div class="markdown mb-6 px-6 max-w-3xl mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:px-12 xl:w-3/4">
              @if ($page->title)
                <h1 class="flex items-center">
                  {{ $page->title }}
                  <!-- <span class="ml-4 text-teal-600 font-semibold text-base">v1.3.0+</span> -->
                  @if ($page->featureVersion)
                  <span class="ml-3 inline-flex items-center px-3 py-1 rounded-full text-sm font-medium leading-4 bg-green-150 text-green-900">
                    {{ $page->featureVersion }}
                  </span>
                  @endif
                </h1>
              @endif

              @if ($page->description)
                <div class="mt-0 mb-4 text-gray-600">
                  {{ $page->description }}
                </div>
              @endif
              @if ($page->titleBorder)
              <hr class="my-8 border-b-2 border-gray-200">
              @endif
            </div>
            <div class="flex">
              <div class="markdown px-6 xl:px-12 w-full max-w-3xl mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:w-3/4">
                @yield('content')
              </div>

              {{-- Table of contents --}}
              <div class="hidden xl:text-sm xl:block xl:w-1/4 xl:px-6">
                <div class="flex flex-col justify-between overflow-y-auto sticky top-16 max-h-(screen-16) pt-12 pb-4 -mt-12">
                  @unless($page->hideTableOfContents)
                  <table-of-contents class="mb-8"></table-of-contents>
                  @endunless
                  <div id="ad"></div>
                  <div id="tailwind-ui-widget" style="display: none;">
                    <a href="https://tailwindui.com/?utm_source=tailwindcss&utm_medium=sidebar-widget" class="mt-3 block">
                      <img src="/img/tailwind-ui-sidebar.png" alt="Tailwind UI">
                    </a>
                    <p class="mt-4 text-gray-700">
                      <a href="https://tailwindui.com/?utm_source=tailwindcss&utm_medium=sidebar-widget" class="text-gray-700">
                      Beautiful UI components by the creators of Tailwind CSS.
                      </a>
                    </p>
                    <div class="mt-2">
                      <a href="https://tailwindui.com/?utm_source=tailwindcss&utm_medium=sidebar-widget" class="text-sm text-gray-800 font-medium hover:underline">
                        Learn more &rarr;
                      </a>
                    </div>
                  </div>
                  <div id="tailwind-ui-job-widget" style="display: none;">
                    <a href="https://jobs.tailwindui.com/full-stack-developer" class="mt-3 block">
                      <img class="rounded-lg" src="/img/tailwind-ui-hiring.svg" alt="Tailwind UI">
                    </a>
                    <p class="mt-4 text-gray-700">
                      <a href="https://jobs.tailwindui.com/full-stack-developer" class="text-gray-700">
                        We're hiring a full-stack developer to help us make UI development faster, easier, and a lot more fun.
                      </a>
                    </p>
                    <div class="mt-2">
                      <a href="https://jobs.tailwindui.com/full-stack-developer" class="text-sm text-gray-800 font-medium hover:underline">
                        Learn more and apply &rarr;
                      </a>
                    </div>
                  </div>
                  <div id="refactoring-ui-widget" style="display: none;">
                    <a href="https://refactoringui.com/book?utm_source=tailwindcss&utm_medium=sidebar-widget" class="mt-3 block">
                      <img src="/img/refactoring-ui-book.png" alt="">
                    </a>
                    <p class="text-gray-700 text-center">
                      <a href="https://refactoringui.com/book?utm_source=tailwindcss&utm_medium=sidebar-widget" class="text-gray-700">
                      Learn UI design, from the creators of Tailwind CSS.
                      </a>
                    </p>
                    <div class="mt-3 text-center">
                      <a href="https://refactoringui.com/book?utm_source=tailwindcss&utm_medium=sidebar-widget" class="inline-block px-3 py-2 text-sm bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600">
                        Learn more &rarr;
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              {{-- /Table of contents --}}

            </div>
          </div>
          {{-- /Main content area --}}


        </div>
        {{-- /Vue-enabled area --}}

        <script src="{{ mix('/js/app.js', 'assets/build') }}"></script>
      </div>
      {{-- /"Turbolinks" --}}


    </div>
    {{-- /Right content/TOC pane --}}

  </div>
</div>
{{-- /Main container --}}
@endsection
