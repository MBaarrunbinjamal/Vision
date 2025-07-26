@extends('admin.headerfooter')
@section('content')
<style>
    body {
  background: linear-gradient(-45deg, #2c003e, #000000, #444444, #2c003e);
  background-size: 400% 400%;
  animation: gradientFlow 20s ease infinite;
  color: #fff;
  min-height: 100vh;
  margin: 0;
  padding: 0;
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
    .custom-table-container {
        display: flex;
        justify-content: center;
        margin-top: 200px;
    }

    .custom-table {
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
</style>
<div class="table-responsive custom-table-container">
    <table class="custom-table">
        <thead>
            <tr>
                <th scope="col">Question</th>
                <th scope="col">Explaination</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($rec as $r)
                <tr>
                <td>{{$r->question}}</td>
                <td>{{$r->explaination}}</td>
                <td>  <button class="btn btn-danger delete-btn" data-id="{{ $r->id }}">Delete</button></td>
            </tr>
           @endforeach
        </tbody>
    </table>
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
                                Swal.fire(
                                    'Deleted!',
                                    data.message,
                                    'success'
                                );
                            } else {
                                Swal.fire(
                                    'Error!',
                                    data.message || 'Something went wrong.',
                                    'error'
                                );
                            }
                        })
                        .catch(error => {
                            Swal.fire(
                                'Error!',
                                'Request failed.',
                                'error'
                            );
                        });
                    }
                });
            });
        });
    });
</script>

@endsection