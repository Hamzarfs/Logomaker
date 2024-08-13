<x-admin>
    @section('title', 'Fonts')

    @section('css')
        <style>
            table tbody tr td {
                vertical-align: middle !important;
            }
        </style>
    @endsection

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Fonts Table</h3>
            <div class="card-tools">
                <a href="{{ route('admin.font.create') }}" class="btn btn-sm btn-info">New</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="fontsTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($fonts as $font)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $font->name }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    {{-- <a
                                        href="{{ route('admin.employee.edit', $font->id) }}"class="btn btn-sm btn-primary">Edit</a> --}}
                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger delete-btn"
                                        id="{{ $font->id }}">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">
                                No fonts found. <a href="{{ route('admin.font.create') }}">Add new font</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Delete form --}}
    <form action="{{ route('admin.font.destroy', 11111) }}" method="POST" id="delete-form">
        @method('DELETE')
        @csrf
    </form>

    @section('js')
        <script>
            $(function() {
                @if (count($fonts))
                    $('#fontsTable').DataTable({
                        "paging": true,
                        "searching": true,
                        "ordering": true,
                        "responsive": true,
                    })
                @endif
            });

            $('.delete-btn').click(function() {
                if (confirm('Are you sure you want to delete?')) {
                    const form = $('#delete-form')
                    form.attr('action', form.attr('action').replace('11111', this.id))
                    form.submit()
                }
            })
        </script>
    @endsection
</x-admin>
