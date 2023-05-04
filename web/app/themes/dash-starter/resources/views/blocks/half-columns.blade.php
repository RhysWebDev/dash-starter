{{--
  Title: Half Columns
  Description: Half columns 
  Category: formatting
  Icon: columns
  Keywords: half columns
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



<section class="bg-cover pt-12 bg-center"
    style="@if (get_field('flip_columns') === false) background:#f5f5f5 @else background-image: url({{ get_field('background_image') }}); @endif">
    <div class="container mx-auto px-4 pb-32 align-middle">
        <div
            class="flex flex-wrap items-center align-middle @if (get_field('flip_columns') === false) md:flex-row-reverse @endif ">
            <div class="w-full md:w-3/5 px-4">
                <img src="{{ get_field('image') }}" alt="" class="w-full">
            </div>
            <div class="w-full md:w-2/5 px-4 mt-6 md:mt-0">
                <h2 class="mb-4">{!! get_field('title') !!}</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="92" height="6" viewBox="0 0 92 6">
                    <line id="Line_14" data-name="Line 14" x2="92" transform="translate(0 3)" fill="none"
                        stroke="#61cf85" stroke-width="6" />
                </svg>
                @if (get_field('icon_list') === false)
                    <div class="mt-6 mb-6">{!! get_field('content') !!}</div>
                @else
                    @if (have_rows('list_icons'))
                        <div class="flex flex-wrap mt-6 mb-6">
                            @while (have_rows('list_icons'))
                                @php the_row(); @endphp

                                <div class="flex items-center mb-4 mt-4">
                                    <img src="{{ get_sub_field('icon') }}" class="w-50px h-auto mr-2">
                                    <span>{{ get_sub_field('icon_text') }}</span>
                                </div>
                            @endwhile
                        </div>
                    @endif
                @endif

                @if (get_field('button'))
                    <a href="{{ get_field('button')['url'] }}"
                        class="btn--primary btn rounded">{{ get_field('button')['title'] }}</a>
                @endif
            </div>
        </div>
    </div>
</section>
