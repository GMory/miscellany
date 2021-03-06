@if ($model->entity && $campaign->campaign()->boosted() && $model->entity->hasHeaderImage($campaign->campaign()->boosted(true)))
    @section('entity-header')
        <div class="entity-header" style="background-image: url('{{ !empty($model->entity->header_image) ? $model->entity->getImageUrl(0, 0, 'header_image') : ($campaign->campaign()->boosted(true) && !empty($model->entity->header) ? Img::crop(0, 0)->url($model->entity->header->path) : null)}}');">
            <div class="bottom">
                @if ($model->image)
                    <a class="entity-avatar" href="{{ $model->getImageUrl(0) }}" title="{{ $model->name }}" target="_blank">
                        <img src="{{ $model->getImageUrl(0) }}" alt="{{ $model->name }} picture">
                    </a>
                @elseif ($campaign->campaign()->boosted(true) && $model->entity && $model->entity->image)
                    <a class="entity-avatar" href="{{ $model->entity->image->getUrl() }}" title="{{ $model->name }}" target="_blank">
                        <img src="{{ Img::crop(400, 400)->url($model->entity->image->path) }}" alt="{{ $model->name }} picture">
                    </a>
                @endif
                <div class="texts">
                    <h1>
                        {{ $model->name }}
                        @if ($model->is_private)
                            <i class="fas fa-lock" title="{{ __('crud.is_private') }}"></i>
                        @endif
                        @if ($model instanceof \App\Models\Character && $model->is_dead)
                            <span class="ra ra-skull" title="{{ __('characters.hints.is_dead') }}"></span>
                        @endif
                    </h1>
@if ($model instanceof \App\Models\Character && $model->title)
                    <h3 class="title">{{ $model->title }}</h3>
@endif
                    @include('entities.components.links', ['header' => true])
                </div>
            </div>
        </div>
    @endsection
@endif
