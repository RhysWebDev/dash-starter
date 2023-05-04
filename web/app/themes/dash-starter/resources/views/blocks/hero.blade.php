{{--
  Title: Hero
  Description: Hero section
  Category: formatting
  Icon: superhero
  Keywords: hero
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}


<section data-{{ $block['id'] }} class="flex items-center hero bg-cover bg-center h-[85vh]"
    style="background-image: url('{{ get_field('background_image') }}');">
    <div class="container mx-auto px-4 py-32 gap-5">
        <h1 class="font-medium text-white mb-4 hero__title title-lg">{!! get_field('title') !!}</h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="6" viewBox="0 0 92 6">
            <line id="Line_14" data-name="Line 14" x2="92" transform="translate(0 3)" fill="none"
                stroke="#61cf85" stroke-width="6" />
        </svg>
        <div class="mt-6 hero__subtitle text-white mb-8 subtitle">{!! get_field('content') !!}</div>
        <a href="{{ get_field('button_link') }}" class="btn btn--secondary">{{ get_field('button') }}</a>
    </div>
</section>
