@extends('layouts.app')

@section('title')
    {{ $title ?? 'Default' }}
@endsection

@section('content')
<div class="container my-5 user-container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>#</td>
                        <th>Posts</th>
                        <th>Comments</th>
                        <th>Categories</th>
                        <th>Tags</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $key => $post)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $post->post_title }}</td>
                            <td>{{ $post->comments->count() }}</td>
                            <td>
                                @forelse ($post->categories as $category)
                                    <span class="badge bg-primary px-2 py-2 mb-2">{{ $category->name }}</span>
                                @empty
                                    <span class="badge bg-danger px-2 py-2 mb-2">Uncategorized</span>
                                @endforelse
                            </td>
                            <td>
                                @forelse ($post->tags as $tag)
                                    <span class="badge bg-success px-2 py-2 mb-2">{{ $tag->name }}</span>
                                @empty
                                    
                                @endforelse
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection