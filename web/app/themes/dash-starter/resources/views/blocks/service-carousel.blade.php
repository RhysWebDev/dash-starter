{{--
  Title: Service carousel
  Description: service carousel
  Category: formatting
  Icon: slides
  Keywords: services
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: false
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}


<section data-{{ $block['id'] }} class="service_carousel"
    style="background-image:url({{ get_field('background_image') }})" class="assessments bg-cover bg-center h-[35vh]">
    <div class="container mx-auto px-4 py-32 pt-16">
        <h4 class="text-white service_carousel__subtitle subtitle pb-8">{!! get_field('title') !!}</h4>
    </div>
</section>

<section class="assessments__carousel relative top-[-100px]">
    <div class="container service_carousel__slider max-w-[90%] ml-auto">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                @php
                    $args = [
                        'post_type' => 'assessment',
                    ];
                    $assessments = new WP_Query($args);
                @endphp

                @if ($assessments->have_posts())
                    @while ($assessments->have_posts())
                        @php
                            $assessments->the_post();
                            $icon = get_field('icon', get_the_ID());
                        @endphp
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-6 shadow-lg">
                                <img class="mb-4" src="{{ $icon }}">
                                <h5 class=" font-semibold mb-2">{!! get_the_title() !!}</h5>
                                <p class="mb-4">{!! wp_trim_words(get_the_excerpt(), 20) !!}</p>
                            </div>
                        </div>
                    @endwhile
                    @php(wp_reset_postdata())
                @endif

            </div>
        </div>
    </div>
</section>
