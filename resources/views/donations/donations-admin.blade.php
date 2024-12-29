@extends('layouts1.admin')

@section('title1', 'Articles')

@section('content1')

<main>
    <h1>DONATION LIST</h1>
    <table class="table table-bordered table-striped table-hover justify-content-center mt-3">
    <thead class="thead-dark">
        <tr>
            <th>Donation ID</th>
            <th>Donation Date</th>
            <th>User ID</th>
            <th>Event ID</th>
            <th>Created At</th>
            <th>Updated At</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($donations as $donation)
                        <tr>
                            <td>{{ $donation->DonationId }}</td>
                            <td>{{ $donation->DonationDate }}</td>
                            <td>{{ $donation->UserId }}</td>
                            <td>{{ $donation->EventId }}</td>
                            <td>{{ $donation->created_at }}</td>
                            <td>{{ $donation->updated_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">There's nothing here...</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
</main>