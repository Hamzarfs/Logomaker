<x-admin>
    @section('title', 'Blog Category')
    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{ route('admin.blogCategories.create') }}" class="btn btn-sm btn-info">New</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="categoryTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $cat)
                        <tr>
                            <td>{{ $cat->id }}</td>
                            <td>{{ $cat->name }}</td>
                            <td>{{ $cat->slug }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('admin.blogCategories.edit', $cat) }}"
                                        class="btn btn-sm btn-secondary mr-2">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" id="{{ $cat->id }}"
                                        class="btn btn-sm btn-danger delete-btn">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <form action="{{ route('admin.blogCategories.destroy', 11111) }}" method="post" id="delete-form">
                @csrf @method('DELETE')
            </form>
        </div>
    </div>
    @section('js')
        <script>
            $(function() {
                $('#categoryTable').DataTable({
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
