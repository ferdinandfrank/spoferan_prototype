@if(count($participations))
<table class="table is-striped">
    <thead>
        <tr>
            <th><abbr title="{{ trans('label.starter_number') }}">{{ trans('label.starter_number_abbr') }}</abbr></th>
            <th>{{ trans('label.name') }}</th>
            <th>{{ trans('label.participation_class') }}</th>
            <th>{{ trans('label.registered_at') }}</th>
            <th>{{ trans('label.status') }}</th>
        </tr>
    </thead>
    @if(count($participations) > 10)
        <tfoot>
            <tr>
                <th><abbr title="{{ trans('label.starter_number') }}">{{ trans('label.starter_number_abbr') }}</abbr></th>
                <th>{{ trans('label.name') }}</th>
                <th>{{ trans('label.participation_class') }}</th>
                <th>{{ trans('label.registered_at') }}</th>
                <th>{{ trans('label.status') }}</th>
            </tr>
        </tfoot>
    @endif
    <tbody>
    @foreach($participations as $participation)
        <tr>
            <td>{{ $participation->starter_number }}</td>
            <td>{!! $participation->getAthletePresentationName() !!}</td>
            <td>{{ $participation->participationClass->title }}</td>
            <td>{{ dateDiffForHumans($participation->created_at, false) }}</td>
            <td class="{{ getParticipationStatusClass($participation) }}">{{ trans('participation_states.' . $participation->status->label) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@else
    <p class="muted">{{ trans('info.event.no_participants') }}</p>
@endif