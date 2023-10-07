<div class="card" style="width: 20rem;">
    <img src="{{ $image }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $event->event_name }}</h5>

        <div class="d-flex justify-content-between align-items-center">
            <p class="text-success font-weight-bold">{{ $event->date }}</p>
            <p class="text-success font-weight-bold">{{ $event->time }}</p>
        </div>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk
            of the card's content.</p>
        <a href="/event/{{ $event->id }}" class="btn btn-success">Read More</a>
    </div>
</div>
