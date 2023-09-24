<section class="section speakers bg-speaker overlay-lighter">
    <div class="container">
        {{-- <div class="row">
            <div class="col-12">
                <!-- Section Title -->
                <div class="section-title white">
                    <h3>Who <span class="alternate">Speaking?</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusm tempor incididunt ut labore
                    </p>
                </div>
            </div>
        </div> --}}


        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-4">
                <div class="col">
                    @include('event.eventCard', [
                        'eventName' => 'DREAMZ OF SHIHAN',
                        'image' => 'images/eventImages/1.webp',
                    ])
                </div>
                <div class="col">
                    @include('event.eventCard', [
                        'eventName' => 'HUSAMA LIVE IN CONCERT',
                        'image' => 'images/eventImages/2.webp',
                    ])
                </div>
                <div class="col">
                    @include('event.eventCard', [
                        'eventName' => 'Y FM MUSIC FEST 2023',
                        'image' => 'images/eventImages/7.webp',
                    ])
                </div>
                <div class="col">
                    @include('event.eventCard', [
                        'eventName' => 'HARMONY',
                        'image' => 'images/eventImages/4.webp',
                    ])
                </div>
                <div class="col">
                    @include('event.eventCard', [
                        'eventName' => 'POP CORN NIGHT',
                        'image' => 'images/eventImages/5.webp',
                    ])
                </div>
                <div class="col">
                    @include('event.eventCard', [
                        'eventName' => '2FORTY2 BAJAWWA',
                        'image' => 'images/eventImages/6.webp',
                    ])
                </div>
                {{-- <div class="col">
                    @include('event.eventCard', ['eventName' => 'event 7','image'=>'images/eventImages/7.webp'])
                </div>
                <div class="col">
                    @include('event.eventCard', ['eventName' => 'event 8','image'=>'images/eventImages/8.webp'])
                </div>
                <div class="col">
                    @include('event.eventCard', ['eventName' => 'event 9','image'=>'images/eventImages/9.webp'])
                </div>
                <div class="col">
                    @include('event.eventCard', ['eventName' => 'event 1','image'=>'images/eventImages/1.webp'])
                </div> --}}
            </div>
        </div>
    </div>
</section>
