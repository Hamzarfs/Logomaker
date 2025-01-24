<x-admin>
    @section('title', 'Tags')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tags</h3>
            <div class="card-tools">
                <a href="{{ route('admin.tags.create') }}" class="btn btn-sm btn-primary">Add</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="roleTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td>{{ $tag->slug }}</td>
                            <td>{{ $tag->created_at }}</td>
                            <td>{{ $tag->updated_at }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('admin.tags.edit', $tag) }}"
                                        class="btn btn-sm btn-secondary mr-2">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" id="{{ $tag->id }}"
                                        class="btn btn-sm btn-danger delete-btn">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                <b>
                                    No Tags created
                                </b>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <form action="{{ route('admin.tags.destroy', 11111) }}" method="post" id="delete-form">
                @csrf @method('DELETE')
            </form>
        </div>
    </div>
    @section('js')
        <script>
            $(function() {
                $('#roleTable').DataTable({
                    "paging": true,
                    "searching": true,
                    "ordering": true,
                    "responsive": true,
                });
            });

            $('.delete-btn').click(function() {
                $('#delete-form').attr('action', $('#delete-form').attr('action').replace(11111, this.id))
                $('#delete-form').submit()
            })
        </script>
    @endsection
</x-admin>
