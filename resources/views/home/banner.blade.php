<section class="banner-two bg-banner-two overlay-white-slant text-overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Content Block -->
                <div class="block">
                    <h1>{{ $event->event_name }}</h1>
                    <h3>2023</h3>
                    <h4>{{ $event->date }}</h4>
                    <h4>{{ $event->time }}</h4>
                    <!-- Action Button -->
                    {{-- <a href="/event/{{ $event->id }}" class="btn btn-success">More Details</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
