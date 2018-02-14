@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Edit a Category @endslot
            @slot('parent') Home @endslot
            @slot('active') Categories @endslot
        @endcomponent
        <hr>

            <form action="{{ route('admin.category.update', $category) }}" class="form-horizontal" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                {{--Form include--}}
                @include('admin.categories.partials.form')
            </form>
    </div>
@endsection