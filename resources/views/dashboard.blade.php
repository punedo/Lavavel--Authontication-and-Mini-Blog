<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   All Posting by Users
                    @if(session()->has('status'))

                        {{session('status')}}

                    @endif
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Users</th>
                            <th scope="col">Title</th>
                            <th scope="col">Posts</th>
                            <th scope="col">Operations</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)

                        <tr>
                            <th scope="row">{{$post->user->name}}</th>
                            <th scope="row">{{$post->id}}</th>
                            <td> {{$post->title}}</td>
                            <td class="text-truncate" style="width: 50ch">    {{$post->body}}</td>
                            <td>
                              <a class="btn btn-danger" href="{{url('/post/delete',$post->id)}}">Delete</a>
                                <a class="btn btn-info" style="color: white" href="{{url('/post/edit',$post->id)}}" >Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
