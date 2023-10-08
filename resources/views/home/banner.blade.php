<section class="banner-two "
    style="background: url('{{ asset('storage/' . $event->photo_path) }}') no-repeat; background-size: cover; background-position: right center;">
    <div class="container" style="background-color: rgba(240, 248, 255, 0.688); text-align: center; padding: 20px 10px">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Block -->
                <div class="block">
                    <h1>{{ $event->event_name }}</h1>
                    <h3>2023</h3>
                    <h4>{{ $event->date }}</h4>
                    <h4>{{ $event->time }}</h4>
                </div>
            </div>
        </div>
    </div>
</section>
