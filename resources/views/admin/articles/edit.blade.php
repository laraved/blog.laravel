@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Edit an Article @endslot
            @slot('parent') Home @endslot
            @slot('active') Articles @endslot
        @endcomponent
        <hr>

            <form action="{{ route('admin.article.update', $article) }}" class="form-horizontal" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="modified_by" value="{{ auth()->id() }}">
                {{--Form include--}}
                @include('admin.articles.partials.form')
            </form>
    </div>
@endsection