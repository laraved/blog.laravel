@foreach($categories as $category)
    <option value="{{ $category->id or "" }}"

    @isset($article->id)
        @foreach($article->categories as $categoryArticle)
            @if($category->id == $categoryArticle->id)
                selected
            @endif
        @endforeach
    @endisset
    >
        {!! $delimiter or "" !!} {{ $category->title or "" }}
    </option>

    @if(count($category->children) > 0)
        @include('admin.articles.partials.categories', [
            'categories' => $category->children,
            'delimiter' => ' - ' . $delimiter
        ])
    @endif
@endforeach