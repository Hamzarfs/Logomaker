<x-admin>
    @section('title', 'Blogs')
    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{ route('admin.blog.create') }}" class="btn btn-sm btn-info">New</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="categoryTable">
                <thead>
                    <tr>
                        <th>Tittle</th>
                        <th>Action</th>
                     </tr>
                </thead>
                <tbody>
                    @foreach ($data as $cat)
                        <tr>
                            <td>{{ $cat->title }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('admin.blog.edit', $cat->id) }}"
                                        class="btn btn-sm btn-primary mr-2">Edit</a>
                                    <form action="{{ route('admin.blog.destroy', encrypt($cat->id)) }}" method="POST"
                                        onsubmit="return confirm('Are sure want to delete?')">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
        </script>
    @endsection
</x-admin>
