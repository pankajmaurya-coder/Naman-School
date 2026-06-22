<section class="hero-slider">
    @foreach($sliders as $slider)
        <div class="slide {{ $loop->first ? 'active' : '' }}">

            <img src="{{ asset('storage/'.$slider->image) }}"
                 alt="{{ $slider->title }}">

            <div class="slide-content">
                <h1>{{ $slider->title }}</h1>
            </div>

        </div>
    @endforeach

</section>