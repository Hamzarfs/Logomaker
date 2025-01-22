<x-admin>
    @section('title', 'Fonts')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Font</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.font.index') }}" class="btn btn-info btn-sm">Back</a>
                        </div>
                    </div>

                    <form action="{{ route('admin.font.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="font" class="form-label">Font</label>
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('font') is-invalid @enderror"
                                                id="font" name="font" accept=".ttf,.otf">
                                            <label class="custom-file-label" for="font">Choose file</label>
                                            @error('font')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" id="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('js')
        <script></script>
    @endsection
</x-admin>
