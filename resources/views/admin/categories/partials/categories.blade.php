@foreach($categories as $categoryList)
    <option value="{{ $categoryList->id or "" }}"
            @isset($category->id)
                @if($category->parent_id == $categoryList->id)
                    selected=""
                @endif

                @if($category->id == $categoryList->id)
                    hidden=""
                @endif
            @endisset
    >
        {!! $delimiter or "" !!} {{ $categoryList->title or "" }}
    </option>

    @if(count($categoryList->children) > 0)
        @include('admin.categories.partials.categories', [
            'categories' => $categoryList->children,
            'delimiter' => ' - ' . $delimiter
        ])
    @endif
@endforeach