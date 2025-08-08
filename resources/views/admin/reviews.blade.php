@extends('admin.headerfooter')
@section('content')

<style>
    .table th,
    .table td {
        vertical-align: middle;
    }

    body {
        background: linear-gradient(-45deg, #2c003e, #000000, #444444, #2c003e);
        background-size: 400% 400%;
        animation: gradientFlow 20s ease infinite;
        color: #fff;
        min-height: 100vh;
        margin: 0;
        padding: 0;
    }

    .customtable {
        background-color: transparent !important;
        border-collapse: collapse;
        border: 2px solid purple;
        color: white;
        width: auto;
    }

    .custom-table th,
    .custom-table td {
        border: 3px solid purple;
        padding: 12px 20px;
        text-align: center;
    }

    @media (max-width: 768px) {
        .table thead {
            display: none;
        }

        .table,
        .table tbody,
        .table tr,
        .table td {
            display: block;
            width: 100%;
        }

        .table tr {
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            background: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .table td {
            text-align: left;
            padding-left: 50%;
            position: relative;
            border: none;
            border-bottom: 1px solid #eee;
        }

        .table td:before {
            content: attr(data-label);
            position: absolute;
            left: 15px;
            top: 10px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 12px;
            color: #888;
        }

        .table td:last-child {
            border-bottom: none;
        }
    }

    .table {
        background-color: transparent !important;
        color: white;
    }

    .table td,
    .table th {
        background-color: rgba(54, 53, 53, 0) !important;
        
         
        /* softer borders */
        color: white;
        
    }

    .table th {
        font-weight: bold;
        color: #ffebff;
        /* light purple/white for better contrast */
    }

    @media (max-width: 768px) {
        .table tr {
            background-color: rgba(255, 255, 255, 0.16) !important;
            color: white;
            font-size: xx-small;
            width: 100%;
            padding: 8px 12px;
        }

        .table td:before {
            color: #ffebff;
            width: 100px;
            /* label text color */
        }
       
    }

    @keyframes gradientFlow {
        0% {
            background-position: 0% 50%;
        }

        25% {
            background-position: 50% 100%;
        }

        50% {
            background-position: 100% 50%;
        }

        75% {
            background-position: 50% 0%;
        }

        100% {
            background-position: 0% 50%;
        }
    }
</style>
<div class="container custom-table my-5">
    <h1>User Reviews</h1>
    <table class="table my-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Review</th>
                <!-- <th>Status</th> -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
            <tr>
                <td data-label="Name">{{ $review->name }}</td>
                <td data-label="Email">{{ $review->email }}</td>
                <td data-label="Review">{{ $review->review }}</td>
                <!-- <td data-label="Status">{{ $review->status }}</td> -->
                <td data-label="Action">
                    @if($review->status === 'pending')
                    <form method="POST" action="{{ route('admin.reviews.status', [$review->id, 'approved']) }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">Accept</button>
                    </form>
                    <form method="POST" action="{{ route('admin.reviews.status', [$review->id, 'rejected']) }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Deny</button>
                    </form>

                    @else
                    <span class="badge badge-info">{{ ucfirst($review->status) }}</span>
                    @endif
                    @if ($review->status === 'rejected' || $review->status === 'approved')
                    <form action="{{ route('admin.reviews.delete', $review->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm  my-3">Delete</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

<!-- 
<div class="container custom-table">
    <h1>Reviews</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Review</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
           <tbody>
@foreach ($reviews as $review)
    <tr>
        <td data-label="Name">{{ $review->name }}</td>
        <td data-label="Email">{{ $review->email }}</td>
        <td data-label="Review">{{ $review->review }}</td>
        <td data-label="Status">{{ $review->status }}</td>
        <td data-label="Action">
            @if($review->status === 'pending')
                <form method="POST" action="{{ route('admin.reviews.status', [$review->id, 'approved']) }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-success btn-sm">Accept</button>
                </form>
                <form method="POST" action="{{ route('admin.reviews.status', [$review->id, 'rejected']) }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Deny</button>
                </form>
            @else
                <span class="badge badge-info">{{ ucfirst($review->status) }}</span>
            @endif

            @if($review->status === 'rejected' || $review->status === 'approved')
                <form action="{{ route('admin.reviews.delete', $review->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            @endif
        </td>
    </tr>
@endforeach
</tbody>

        </table>
    </div>
</div> -->

@endsection