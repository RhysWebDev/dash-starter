{{--
  Title: Half Columns Grid
  Description: Half columns 
  Category: formatting
  Icon: columns
  Keywords: hero
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

<section class="bg-gray-100 bg-cover" style="background-image: url({{ get_field('background_image') }});">
    <div class="container mx-auto py-12 px-4 align-middle">
        <div class="flex flex-wrap -mx-4 align-middle items-center">
            <div class="w-full md:w-1/2 px-4">
                <h2 class="mb-4 text-white max-w-[11ch]">{!! get_field('column_1_title') !!}</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="92" height="6" viewBox="0 0 92 6">
                    <line id="Line_14" data-name="Line 14" x2="92" transform="translate(0 3)" fill="none"
                        stroke="#61cf85" stroke-width="6" />
                </svg>
                <div class="mb-6 mt-6 text-white max-w-[46ch]">{!! get_field('column_1_content') !!}</div>
                @php $button = get_field('button'); @endphp
                <a href="{{ $button['url'] }}" class="btn btn--secondary">{{ $button['title'] }}</a>
            </div>
            <div class="w-full md:w-1/2 px-4">
                <div class="grid half-columns-grid__grid-wrap grid-rows-2 grid-cols-2 gap-4">
                    @if (have_rows('column_2_cards'))
                        @while (have_rows('column_2_cards'))
                            @php(the_row())
                            <div class="bg-white rounded-lg px-[3rem] p-4 py-[3rem] shadow-lg">
                                <img class="mb-4" src="{{ get_sub_field('icon')['url'] }}"
                                    alt="{{ get_sub_field('icon')['alt'] }}">
                                <h6 class="mt-3 mb-2">{{ get_sub_field('small_title') }}</h6>
                                <p class="font-normal mb-4">{!! get_sub_field('paragraph') !!}</p>
                            </div>
                        @endwhile
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
