<section class="relative">
    <x-wrapper size="md" class="relative z-10 pt-6 xl:pt-28 2xl:pt-44 " size="none">
        {{ $slot }}
    </x-wrapper>
    @if($imageUrl)
        <div>
            <div
                class="absolute hero-clip z-0 top-0 right-0 md:w-[650px] md:h-[750px] bg-primary-500 2xl:w-[850px] 2xl:h-[900px]">
                <img class="object-cover w-full h-full" loading="lazy" width="900" height="900" src="{{ $imageUrl }}"
                     alt="Hero image for {{config('app.name')}}">
            </div>

        </div>
    @endif
    <svg class="svg" height="0" width="0">
        <defs>
            <clipPath id="svgClipPath" clipPathUnits="objectBoundingBox">
                <path
                    d="M1,0.998 c-0.069,0.004,-0.138,0.007,-0.19,-0.037 c-0.052,-0.045,-0.087,-0.138,-0.13,-0.184 s-0.094,-0.045,-0.168,-0.043 c-0.074,0.003,-0.172,0.007,-0.189,-0.054 c-0.018,-0.061,0.044,-0.186,0.038,-0.252 c-0.006,-0.066,-0.079,-0.072,-0.153,-0.1 c-0.074,-0.028,-0.149,-0.076,-0.182,-0.135 C0.004,0.136,0.011,0.068,0.018,0 h0.994 V0.998"></path>
            </clipPath>
        </defs>
    </svg>
</section>
