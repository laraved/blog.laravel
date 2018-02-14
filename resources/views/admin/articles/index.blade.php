@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') List Articles @endslot
            @slot('parent') Home @endslot
            @slot('active') Articles @endslot
        @endcomponent
        <hr>
        <a href="{{ route('admin.article.create') }}" class="btn btn-primary pull-right">
            <i class="fas fa-plus"></i> Add Article
        </a>

        <table class="table table-striped">
            <thead>
            <th>Title</th>
            <th>Publication</th>
            <th class="text-right">Action</th>
            </thead>
            <tbody>
            @forelse ($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->published }}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Delete?')){ return true } else { return false }"
                              action="{{ route('admin.article.destroy', $article) }}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                            <a class="btn btn-primary" href="{{ route('admin.article.edit', $article) }}">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <button type="submit" class="btn"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>No Data</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{ $articles->links() }}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection