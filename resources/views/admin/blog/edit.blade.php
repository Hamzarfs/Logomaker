<x-admin>
    @section('title', 'Edit Blog')

    <form class="mx-5" id="form" action="{{ route('admin.blog.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Blog Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Blog Name</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Enter category name" required value="{{ old('title', $data->title) }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Blog Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Enter description" required>{{ old('description',  $data->description) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Blog Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image"
                                        accept=".jpg,.jpeg,.png,.svg">
                                    <label class="custom-file-label" for="image">Choose Blog image</label>
                                    <x-error>image</x-error>
                                </div>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-preview">View
                                    image</a>
                            </div>
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title"
                                    placeholder="Enter meta title" required value="{{ old('meta_title', $data->meta_title) }}">
                            </div>
                            <div class="form-group">
                                <label for="meta_desc">Meta Description</label>
                                <textarea class="form-control" id="meta_desc" name="meta_desc" placeholder="Enter meta description" required>{{ old('meta_desc' , $data->meta_desc )}}</textarea>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-lg btn-primary mb-3">Submit</button>
                </div>
            </div>
        </div>
    </form>


</x-admin>
