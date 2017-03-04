<div id="overview" class="card-header">
    <div class="card-image" style="background-image: url({{ $event->cover }})"></div>
    <div class="card-header-info">
        <icon icon="{{ config('icons.event') }}"></icon>
        <h1 class="title">{{ $event->title }}</h1>
        @if($event->isChild())
            <a class="subtitle link" href="{{ $event->parentEvent->getPath() }}">{{ trans('param_label.child_event_of_event', ['event' => $event->parentEvent->title]) }}</a>
        @endif
    </div>
</div>