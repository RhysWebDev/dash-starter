{{--
  Title: Hero
  Description: hero block
  Category: formatting
  Icon: superhero
  Keywords: hero block
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: false
  EnqueueStyle: styles/style.css
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}

<section class="hero bg-cover bg-center" style="background-image: url('{{ get_field('background_image') }}');">
    <div class="container mx-auto px-4 py-32">
        <h1 class="red text-5xl font-bold leading-tight mb-4">{!! get_field('title') !!}</h1>
        <div class="text-white mb-8">{!! get_field('content') !!}</div>
        <a href="{{ get_field('button_link') }}" class="btn btn-primary">{{ get_field('button') }}</a>
    </div>
</section>
