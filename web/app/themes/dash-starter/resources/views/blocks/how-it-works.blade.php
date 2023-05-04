{{--
  Title: How it works
  Description: How it works
  Category: formatting
  Icon: columns
  Keywords: how it works
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true 
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}

@php $index = 0; @endphp

<section class="py-12  bg-cover bg-center"
    style="background-image: url('http://dash-starter.test/app/uploads/2023/05/background.png')">
    <div class="container mx-auto">
        <div class="flex flex-col align-center justify-center text-center items-center">
            <h3 class="text-center mb-4">{{ get_field('title') }} </h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="92" height="6" viewBox="0 0 92 6">
                <line id="Line_9" data-name="Line 9" x2="92" transform="translate(0 3)" fill="none"
                    stroke="#61cf85" stroke-width="6" />
            </svg>
        </div>

        @if (have_rows('content_row'))
            @while (have_rows('content_row'))
                @php
                    the_row();
                    $index++;
                @endphp
                <div
                    class="max-w-[1360px] mx-auto self-center flex flex-wrap items-center {{ $index % 2 == 1 ? 'md:flex-row-reverse' : '' }} mb-12">
                    <div class="w-full md:w-1/2 px-4">
                        <img src="{{ get_sub_field('image') }}" class="w-full">
                    </div>
                    <div class="w-full md:w-1/2 px-4">
                        <h3 class="large_font fancy_font leading-5">{{ get_sub_field('subtitle') }}</h3>
                        <h3 class="mb-4">{{ get_sub_field('title') }}</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="6" viewBox="0 0 92 6">
                            <line id="Line_14" data-name="Line 14" x2="92" transform="translate(0 3)"
                                fill="none" stroke="#61cf85" stroke-width="6" />
                        </svg>
                        <div class="mt-4 leading-[30px] mb-4 max-w-[50ch]">{{ get_sub_field('content') }}</div>
                    </div>
                </div>
            @endwhile
        @endif
    </div>
</section>
