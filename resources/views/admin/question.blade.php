@extends('admin.headerfooter')
@section('content')
<style>
    .page-container {
        min-height: 1vh;
        display: flex;
        justify-content: center;
        align-items: center; /* vertical + horizontal centering */
        padding: 20px;
       
    }

    .custom-table-container {
        width: 90%;
        max-width: 1000px;
        overflow-x: auto; /* Responsive scroll on small screens */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6);
        border-radius: 15px;
        backdrop-filter: blur(10px);
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
        background: rgba(2, 2, 2, 0.05);
        border-radius: 15px;
        overflow: hidden;
    }

    .custom-table th {
        background: rgba(111, 66, 193, 0.9); /* purple header */
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 14px 20px;
        border: none;
    }

    .custom-table td {
        padding: 12px 20px;
        text-align: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .custom-table tr:nth-child(even) {
        background: rgba(255, 255, 255, 0.05);
    }

    .custom-table tr:hover {
        background: rgba(111, 66, 193, 0.2);
        transition: 0.3s ease-in-out;
    }

    .btn-danger {
        background-color: #d63384;
        border: none;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 14px;
        transition: 0.3s;
    }

    .btn-danger:hover {
        background-color: #b91c74;
        transform: scale(1.05);
    }
</style>

<div class="page-container">
    <div class="custom-table-container">
        <table class="custom-table">
            <thead>
                <tr>
                    <th scope="col">Question</th>
                    <th scope="col">Explanation</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rec as $r)
                    <tr>
                        <td class="text-white">{{ $r->question }}</td>
                        <td class="text-white">{{ $r->explaination }}</td>
                        <td><button class="btn btn-danger delete-btn" data-id="{{ $r->id }}">Delete</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const chatId = this.dataset.id;
                const row = this.closest('tr');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#6f42c1',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(`/delete-question/${chatId}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                row.remove();
                                Swal.fire('Deleted!', data.message, 'success');
                            } else {
                                Swal.fire('Error!', data.message || 'Something went wrong.', 'error');
                            }
                        })
                        .catch(() => {
                            Swal.fire('Error!', 'Request failed.', 'error');
                        });
                    }
                });
            });
        });
    });
</script>
@endsection
