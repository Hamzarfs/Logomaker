@extends('site.common')

@section('title', 'Orders')

@section('content')

    <style>
        /* footer.footer {
            position: fixed;
            width: 100%;
            bottom: 0;
        } */

        .thumbnail {
            width: 70px;
            height: 70px;
        }

        table.table tr td,
        table.table tr th {
            vertical-align: middle;
        }

        .table thead th {
            border-top: none;
        }

    </style>

    <div class="container">
        <div class="my-5 py-5">
            @if (count($user->orders))
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Orders</h3>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <table class="table table-striped" id="ordersTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Logo</th>
                                    <th>Status</th>
                                    <th>User</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($user->orders as $o)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                             @if ($o->status === 'draft')
                                             
                                                <img src="{{ asset("svgs/{$user->id}_{$o->product->id}.png") }}" alt="Logo thumbnail" class="thumbnail">
                                             @elseif ($o->status === 'paid')
                                                <img src="{{ asset("orders/{$user->id}_{$o->product->id}.png") }}" alt="Logo thumbnail" class="thumbnail">
                                             @endif
                                        </td>
                                        <td>{{ $o->status }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $o->product->name }}</td>
                                        <td>{{ date('m-d-Y', strtotime($o->created_at)) }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                            @if ($o->status === 'draft')

                                            
                                            <a href="{{ url('/set-image?image=' . $o->user_id.'_' . $o->product_id.'.svg') }}" >
                      
                                                <button class="btn btn-warning resume-btn me-2" data-order-id="{{ $o->id }}">
                                                    Resume {{$o->product->image}}
                                                </button>
                                            </a>    
                                            @elseif ($o->status === 'paid')
                                                <button class="btn btn-primary preview-btn me-2"
                                                    data-file='{{ $user->id }}_{{ $o->product->id }}.png'
                                                    data-toggle="modal" data-target="#previewModal">
                                                    Preview
                                                </button>
                                                <button class="btn btn-secondary download-btn"
                                                    data-file='{{ $user->id }}_{{ $o->product->id }}.png'>
                                                    Download
                                                </button>
                                            @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            No orders placed
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <div class="text-center">
                    <h1>You haven't placed any orders.</h1>
                </div>
            @endif
        </div>
    </div>

    {{-- Preview modal --}}
    <div class="modal fade" id="previewModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Logo Preview</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="" alt="logo-preview" id="logo" class="img-fluid">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $('.preview-btn').on('click', function() {
            const file = $(this).data('file')
            const fileUrl = "{{ asset('orders/file') }}".replace('file', file)
            $('#logo').attr('src', fileUrl)
        })

        $('.download-btn').on('click', function() {
            var link = document.createElement('a');
            const file = $(this).data('file')
            link.href = "{{ asset('orders/file') }}".replace('file', file)
            link.download = 'logo.png';
            link.click();

        })
    </script>
@endsection
