@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Categories {{ $countCategories }}</span></p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Articles {{ $countArticles }}</span></p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Users 0</span></p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Today Users 0</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="{{ route('admin.category.create') }}" class="btn btn-block btn-default">Add Category</a>
                @foreach($categories as $category)
                    <a href="{{ route('admin.category.edit', $category) }}" class="list-group-item">
                        <h4 class="list-group-item-heading">{{ $category->title }}</h4>
                        <p class="list-grouo item-text">
                            {{ $category->articles()->count() }}
                        </p>
                    </a>
                @endforeach
            </div>

            <div class="col-sm-6">
                <a href="{{ route('admin.article.create') }}" class="btn btn-block btn-default">Add Article</a>
                @foreach($articles as $article)
                <a href="{{ route('admin.article.edit', $article) }}" class="list-group-item">
                    <h4 class="list-group-item-heading">{{ $article->title }}</h4>
                    <p class="list-grouo item-text">
                        {{ $article->categories()->pluck('title')->implode(', ') }}
                    </p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection