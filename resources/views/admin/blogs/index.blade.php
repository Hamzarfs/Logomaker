<x-admin>
    @section('title', 'Blogs')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Blogs</h3>
            <div class="card-tools">
                <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm btn-primary">Add</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="roleTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Is Archived?</th>
                        <th>Is Featured?</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->slug }}</td>
                            <td>
                                {!! $blog->is_archived
                                    ? '<i class="fas fa-check-circle text-success"></i>'
                                    : '<i class="fas fa-times-circle text-danger"></i>' !!}
                            </td>
                            <td>
                                {!! $blog->is_featured
                                    ? '<i class="fas fa-check-circle text-success"></i>'
                                    : '<i class="fas fa-times-circle text-danger"></i>' !!}
                            </td>
                            <td>{{ $blog->created_at }}</td>
                            <td>{{ $blog->updated_at }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('admin.blogs.edit', $blog) }}"
                                        class="btn btn-sm btn-secondary mr-2">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" id="{{ $blog->id }}"
                                        class="btn btn-sm btn-danger delete-btn">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center">
                                <b>
                                    No Blogs created...
                                </b>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <form action="{{ route('admin.blogs.destroy', 11111) }}" method="post" id="delete-form">
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
