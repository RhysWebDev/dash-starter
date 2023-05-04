{{-- 
  Title: FAQ
  Description: Frequently asked questions block with accordions
  Category: formatting
  Icon: admin-comments
  Keywords: faq, accordion, questions
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

<section data-{{ $block['id'] }} class="faq">
    <div class="container mx-auto px-4 pt-[6rem] pb-0">
        <h2 class="text-center mb-8">{!! get_field('main_title') !!}</h2>
        <div class="grid grid-cols-2 faqs">
            @if (have_rows('faqs'))
                @while (have_rows('faqs'))
                    @php(the_row())
                    <div class="faq__item">
                        <input type="checkbox" class="faq__input" id="{{ $block['id'] }}-{{ get_row_index() }}" />
                        <label class="faq__label cursor-pointer block relative p-4 rounded"
                            for="{{ $block['id'] }}-{{ get_row_index() }}">
                            <h3
                                class="text-lg bg-pastel font-semibold p-3 mb-2 bg-secondary hover:bg-primary transition-colors duration-300 flex items-center justify-between">
                                <span>{{ get_sub_field('question') }}</span>
                                <svg class="faq__chevron w-4 h-4 transition-transform duration-300 transform {{ get_row_index() % 2 == 1 ? 'rotate-180' : '' }}"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 8l4 4 4-4" />
                                </svg>
                            </h3>
                            <div class="faq__answer overflow-hidden">
                                <p
                                    class="faq__answer-text opacity-0 transform translate-y-[-1rem] transition-opacity duration-300">
                                    {{ get_sub_field('answer') }}</p>
                            </div>
                        </label>
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>
