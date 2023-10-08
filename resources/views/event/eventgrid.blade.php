<section class="section speakers bg-speaker overlay-lighter">
    <div class="container">



        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-4">
                @foreach ($events as $event)
                    <div class="col">
                        @include('event.eventCard', [
                            'event' => $event,
                            'myEvents' => $myEvents,
                        ])
                    </div>
                @endforeach
            </div>



        </div>
    </div>
    </div>
</section>
