---
extends: _layouts.documentation
title: "My Projects"
description: "Next to my professional life I've been making stuff for as long as I can remember. Here are some of my favourite past projects!"
titleBorder: true
---

## Apps
@component('_partials.card', ['href' => 'https://sjef.netlify.app/'])
<img
  class="w-48 flex-shrink-0 object-cover"
  src="/img/logo-sjef.png"
  alt="Sjef App"
/>
<div class="p-6 flex flex-col">
  <h4 class="font-semibold text-black uppercase text-xl">Sjef</h4>
  <p class="pt-2">
    Sjef automatically generates mealplans and grocery lists based on
    your nutritional requirements. I'm no longer working on this
    project, but I spun up the old landing page recently!
  </p>
  <div class="pt-4 text-xs text-gray-600 mt-auto">
    Built with Angular 2+, Python and Django
  </div>
</div>
@endcomponent

@component('_partials.card', ['href' => 'https://chord-trainer.netlify.app/'])
<img
  class="w-48 flex-shrink-0 object-cover"
  src="/img/chord-trainer.png"
  alt="Chord Trainer"
/>
<div class="p-6 flex flex-col">
  <h4 class="font-semibold text-black uppercase text-xl">
    Chord Trainer
  </h4>
  <p class="pt-2">
    This is a small web app I created to practice chords on a piano.
    It works with Web MIDI Api and let's you connect a MIDI piano!
  </p>
  <div class="pt-4 text-xs text-gray-600 mt-auto">
    Built with React and XState
  </div>
</div>
@endcomponent

---

## Games

@component('_partials.card', ['href' => 'https://www.youtube.com/watch?v=DbRK1YppDIM'])
<div class="flex justify-center items-center w-48 flex-shrink-0">
  <img
    class="w-24"
    src="/img/warehouse-worker.jpg"
    alt="Warehouse Worker Icon"
  />
</div>
<div class="p-6 flex flex-col">
  <h4 class="font-semibold text-black uppercase text-xl">
    Warehouse Worker
  </h4>
  <p class="pt-2">
    A Flash game I made about 10 years ago! Unfortunately it's
    difficult to play it now, since it's Flash, but a few people
    uploaded videos to YouTube with solutions, which was very cool to
    see for young me.
  </p>
  <div class="pt-4 text-xs text-gray-600 mt-auto">
    Built with Adobe Flash and ActionScript 3.0
  </div>
</div>
@endcomponent

@component('_partials.card', ['href' => 'https://play.google.com/store/apps/details?id=com.robertbroersma.ampere'])
<div class="flex justify-center items-center w-48 flex-shrink-0">
  <img class="w-32" src="/img/ampere.webp" alt="Ampere Icon" />
</div>
<div class="p-6 flex flex-col">
  <h4 class="font-semibold text-black uppercase text-xl">Ampère</h4>
  <p class="pt-2">
    Essentially Warehouse Worker for Android, with more features and
    new graphics. Created for nostalgia and learning game development
    for Android. Not quite as popular as the Flash game, but fun to
    make nevertheless!
  </p>
  <div class="pt-4 text-xs text-gray-600 mt-auto">
    Built with Love2D and Lua
  </div>
</div>
@endcomponent

---

## Illustrations
I have a ton of illustrations, but these are some of my favourites!

<div class="-m-2 flex flex-wrap pt-8">
  <div class="p-2 w-full md:w-1/2 lg:w-1/3">
    <a target="_blank" href="/img/illustrations/pinata.png" >
      <img class="rounded-lg" src="/img/illustrations/pinata.png" />
    </a>
  </div>
  <div class="p-2 w-full md:w-1/2 lg:w-1/3">
    <a target="_blank" href="/img/illustrations/broccoli.png">
      <img class="rounded-lg" src="/img/illustrations/broccoli.png" />
    </a>
  </div>
  <div class="p-2 w-full md:w-1/2 lg:w-1/3">
    <a target="_blank" href="/img/illustrations/mixer.png">
      <img class="rounded-lg" src="/img/illustrations/mixer.png" />
    </a>
  </div>
  <div class="p-2 w-full md:w-1/2 lg:w-1/3">
    <a target="_blank" href="/img/illustrations/pikacharger.png">
      <img class="rounded-lg" src="/img/illustrations/pikacharger.png" />
    </a>
  </div>
  <div class="p-2 w-full md:w-1/2 lg:w-1/3">
    <a target="_blank" href="/img/illustrations/pineapple-eggplant.png">
      <img class="rounded-lg" src="/img/illustrations/pineapple-eggplant.png" />
    </a>
  </div>
  <div class="p-2 w-full md:w-1/2 lg:w-1/3">
    <a target="_blank" href="/img/illustrations/piece-of-cake.png">
      <img class="rounded-lg" src="/img/illustrations/piece-of-cake.png" />
    </a>
  </div>
</div>

---

## Music

<div>
<iframe
  width="100%"
  height="450"
  scrolling="no"
  frameborder="no"
  allow="autoplay"
  src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1055261251&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"
></iframe>
</div>

---

[Learn more about what excites me in the industry &rarr;](/exciting-things)
