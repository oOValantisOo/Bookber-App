@extends('layouts1.guest')

@section('title1', 'Articles')

@section('content1')

<main>
    <h1>USER LIST</h1>
    <table class="table table-bordered table-striped table-hover justify-content-center mt-3">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Details</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password}}</td>
                            <td><a href="{{ route('user.get', ['id' => $user->id]) }}">Go See Details</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">There's nothing here...</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
</main>