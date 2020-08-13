@if (count($breadcrumbs))

        <div class="content-container">
            <div class="breadcrumbs">
        @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && !$loop->last)
                    <a class="breadcrumbs__item" href="{{$breadcrumb->url}}">{{$breadcrumb->title}}</a>
                @else
                    <a class="breadcrumbs__item">{{$breadcrumb->title}}</a>
                @endif
        @endforeach
            </div>
        </div>
@endif
