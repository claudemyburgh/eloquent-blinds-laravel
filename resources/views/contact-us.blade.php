<x-site-layout>
    <x-wrapper size="none" class="pt-6 xl:pt-28">
        <x-title>Contact Us </x-title>
        <div class="grid md:grid-cols-2 gap-4 md:gap-6 lg:gap-8">
            <article>
                <x-paragraph>
                    At {{ config('app.name') }}, we value our customers and are always eager to hear from you. Whether you have a question about our products or services, or just want to give us feedback, we would love to hear from you.
                </x-paragraph>
                <x-paragraph>
                    If you have a question, please take a look at our Frequently Asked Questions (FAQ) page to see if it has already been answered. If you can't find the answer you're looking for, please don't hesitate to contact us.
                </x-paragraph>
                <x-paragraph>
                    You can also fill out the contact form below and we will get back to you as soon as possible. We look forward to hearing from you!
                </x-paragraph>
            </article>
            <side>
                <x-form-contact/>
            </side>
        </div>
    </x-wrapper>
</x-site-layout>
