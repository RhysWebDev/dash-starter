{{--
  Title: Half Columns Gradient
  Description: Half columns with gradient and card
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

<section data-{{ $block['id'] }} class="{{ $block['classes'] }} bg-gray-100 bg-gradient">
    <div class="container mx-auto py-12 px-4 ">
        <div class="flex flex-wrap -mx-4 align-middle items-center">
            <div class="w-full md:w-1/2 pr-[12rem] gradient_padding">
                <h3 class="text-white mb-4">{!! get_field('column_1_title') !!}</h3>
                <div class="text-white mb-4">{!! get_field('column_1_content') !!}</div>
            </div>
            <div class="w-full md:w-1/2 px-4">
                <div class="bg-white rounded-lg py-16 px-8 shadow-lg">
                    <h2 class="fancy_font pl-2 mb-4">{!! get_field('card_title') !!}</h2>

                    <div class="flex justify-between button_wrapper">

                        @php $teams_button = get_field('teams_button'); @endphp
                        <a href="{{ $teams_button['url'] }}" class="btn btn--teams btn--lesspadding"><i
                                class="fab fa-windows mr-[1rem]"></i>{{ $teams_button['title'] }}</a>

                        @php $email_button = get_field('email_button'); @endphp
                        <a href="{{ $email_button['url'] }}" class="btn btn--secondary btn--lesspadding"><i
                                class="fas fa-envelope mr-[1rem]"></i>{{ $email_button['title'] }}</a>

                        @php $phone_button = get_field('phone_button'); @endphp
                        <a href="{{ $phone_button['url'] }}" class="btn btn--primary btn--lesspadding"><i
                                class="fas fa-phone mr-[1rem]"></i>{{ $phone_button['title'] }}</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
