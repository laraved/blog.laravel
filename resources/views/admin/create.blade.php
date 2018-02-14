@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Categories 0</span></p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Articles 0</span></p>
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

        @component('admin.components')
        @endcomponent

        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-default">Add Category</a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">First Category</h4>
                    <p class="list-grouo item-text">
                        Count Articles
                    </p>
                </a>
            </div>

            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-default">Add Article</a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">First Article</h4>
                    <p class="list-grouo item-text">
                        Category
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection