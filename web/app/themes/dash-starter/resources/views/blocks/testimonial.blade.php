{{--
    Title: Testimonial
    Description: Testimonial section with a main title, background image, and three boxes
    Category: formatting
    Icon: format-quote
    Keywords: testimonial
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
@php $index = 0; @endphp


<section data-{{ $block['id'] }}
    class="flex relative testimonial bg-cover bg-center lg:min-h[85vh] pb-[6rem] items-center align-middle"
    style="background-image: url('{{ get_field('background_image') }}');">
    <div class="container mx-auto px-4 py-16 items-center align-middle">
        <h2 class="text-center leading-tight text-white  testimonial__title">{!! get_field('main_title') !!}</h2>
        <svg class="mx-auto mb-8" xmlns="http://www.w3.org/2000/svg" width="92" height="6" viewBox="0 0 92 6">
            <line id="Line_15" data-name="Line 15" x2="92" transform="translate(0 3)" fill="none"
                stroke="#fff" stroke-width="6" />
        </svg>

        <div class="flex items-center justify-center mt-[8rem] items-center align-middle mobile_flex_col">
            @if (have_rows('testimonials'))
                @while (have_rows('testimonials'))
                    @php
                        the_row();
                        $index++;
                    @endphp
                    <div
                        class="{{ $index % 2 == 0 ? 'testimonial__center z-10' : '' }}  bg-white mx-2 p-[4rem] rounded justify-center shadow-lg text-center self-center content-center relative ">
                        <svg class="mx-auto mb-8 pt-4 align-center self-center" xmlns="http://www.w3.org/2000/svg"
                            width="55.922" height="55.939" viewBox="0 0 55.922 55.939">
                            <g id="Icon_ionic-ios-quote" data-name="Icon ionic-ios-quote"
                                transform="translate(54.922 54.939) rotate(180)">
                                <path id="Path_880" data-name="Path 880"
                                    d="M19.041,0H8.088A8.112,8.112,0,0,0,0,8.088V29.657a8.112,8.112,0,0,0,8.088,8.088H14.61a1.356,1.356,0,0,1,1.348,1.449,20.554,20.554,0,0,1-5.274,12.486,1.349,1.349,0,0,0,.994,2.258H18.4a1.309,1.309,0,0,0,1.062-.522c1.247-1.618,4.8-7.01,4.8-15.823V5.241A5.108,5.108,0,0,0,19.041,0Z"
                                    transform="translate(0 0)" fill="none" stroke="#2b1f4c" stroke-width="2" />
                                <path id="Path_881" data-name="Path 881"
                                    d="M19.041,0H8.088A8.112,8.112,0,0,0,0,8.088V29.657a8.112,8.112,0,0,0,8.088,8.088H14.61a1.356,1.356,0,0,1,1.348,1.449,20.554,20.554,0,0,1-5.274,12.486,1.349,1.349,0,0,0,.994,2.258H18.4a1.309,1.309,0,0,0,1.062-.522c1.247-1.618,4.8-7.01,4.8-15.823V5.241A5.108,5.108,0,0,0,19.041,0Z"
                                    transform="translate(29.657 0)" fill="none" stroke="#2b1f4c" stroke-width="2" />
                            </g>
                        </svg>

                        <p class="mb-4">{{ get_sub_field('testimonial') }}</p>
                        <h3 class="text-xl font-semibold mb-2">{{ get_sub_field('author') }}</h3>
                        <p>{{ get_sub_field('job_title') }}</p>
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>
