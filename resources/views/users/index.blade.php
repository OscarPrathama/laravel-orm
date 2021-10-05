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
                        <th style="width: 30%">User</th>
                        <th style="width: 55%">Posts</th>
                        <th style="width: 15%">User Metas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{ $user->name }} <br>
                                ({{ count($user->posts) }} posts) <br>
                                ({{ count($user->userMetas) }} metas)
                            </td>
                            <td>
                                <ol class="post-wrapper">
                                    @forelse ($user->posts as $post)
                                        <li>
                                            {{ $post->post_title }}
                                            <ul>
                                                <li>{{ $post->comments->count() }} comments</li>
                                                <li>
                                                    {{ $post->categories->count() }} categories
                                                    (
                                                        @forelse ($post->categories as $item)
                                                            {{ $item->name }},
                                                        @empty
                                                            
                                                        @endforelse
                                                    )
                                                </li>
                                            </ul>
                                        </li>
                                    @empty
                                        <h4>No Post</h4>
                                    @endforelse
                                </ol>
                            </td>
                            <td>
                                <ol class="user-meta-wrapper">
                                    @forelse ($user->userMetas as $user_meta)
                                        <li>{{ $user_meta->country }}</li>
                                    @empty
                                        <h4>No Meta</h4>
                                    @endforelse
                                </ol>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection