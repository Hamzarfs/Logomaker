<x-admin>
    @section('title', 'Products')

    @section('css')
        <style>
            img.w-full.modal-img {
                width: 100%;
                height: auto;
                object-fit: cover;
            }

            img.slider-img {
                width: 100px;
                height: auto;
                object-fit: cover;
            }
        </style>
    @endsection

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Product</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.product.index') }}" class="btn btn-info btn-sm">Back</a>
                        </div>
                    </div>

                    <form action="{{ route('admin.product.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" id="name"
                                            value="{{ old('name', $data->name) }}" class="form-control" required>
                                        <x-error>name</x-error>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category" id="category" class="form-control" required>
                                            <option value="" selected disabled>Select the category</option>
                                            @foreach ($category as $cat)
                                                <option @selected(old('category', $data->category_id) == $cat->id) value="{{ $cat->id }}">
                                                    {{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                        <x-error>category</x-error>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        <a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#modal-default">View Image</a>
                                        <x-error>image</x-error>
                                    </div>
                                </div>
                            </div>
                            <!-- Here  -->

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Color</label>
                                        <input type="color" name="color" id="color"
                                            value="{{ old('color', $data->color) }}" class="form-control" required>
                                        <x-error>color</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="font" class="form-label">Font</label>
                                        <select name="font" id="font" class="form-control" required>
                                            <option value="" selected disabled>Select the font</option>
                                            @foreach ($fonts as $font)
                                                <option @selected(old('font', $data->font_id) == $font->id) value="{{ $font->id }}">
                                                    {{ $font->name }}</option>
                                            @endforeach
                                        </select>
                                        <x-error>font</x-error>
                                    </div>
                                </div>

                            </div>
                            <h4>Logo Maker</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_left" class="form-label">Left Position</label>
                                        <input type="number" name="logomaker[left]" id="lm_left"
                                            value="{{ old('logomaker[left]', $data->logomaker_left) }}"
                                            class="form-control" required>
                                        <x-error>logomaker[0]['left']</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Top Position</label>
                                        <input type="number" name="logomaker[top]" id="lm_top"
                                            value="{{ old('logomaker[top]', $data->logomaker_top) }}"
                                            class="form-control" required>
                                        <x-error>logomaker[0]['top']</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_font" class="form-label">Font Size</label>
                                        <input type="number" name="logomaker[font]" id="lm_font"
                                            value="{{ old('logomaker[font]', $data->logomaker_font_size) }}"
                                            class="form-control" required>
                                        <x-error>logomaker[0]['font']</x-error>
                                    </div>
                                </div>
                            </div>
                            <h4>Preview</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pre_left" class="form-label">Left Position</label>
                                        <input type="number" name="preview[left]" id="pre_left"
                                            value="{{ old('preview[left]', $data->preview_left) }}"
                                            class="form-control" required>
                                        <x-error>preview[0]['left']</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pre_top" class="form-label">Top Position</label>
                                        <input type="number" name="preview[top]" id="pre_top"
                                            value="{{ old('preview[top]', $data->preview_top) }}"
                                            class="form-control" required>
                                        <x-error>preview[0]['top']</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pre_font" class="form-label">Font Size</label>
                                        <input type="number" name="preview[font]" id="pre_font"
                                            value="{{ old('preview[font]', $data->preview_font_size) }}"
                                            class="form-control" required>
                                        <x-error>preview[0]['font']</x-error>
                                    </div>
                                </div>
                            </div>

                            <h4>Canva</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="can_left" class="form-label">Left Position</label>
                                        <input type="number" name="canva[left]" id="can_left"
                                            value="{{ old('canva[left]', $data->canva_left) }}" class="form-control"
                                            required>
                                        <x-error>canva[0]['left']</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="can_top" class="form-label">Top Position</label>
                                        <input type="number" name="canva[top]" id="can_top"
                                            value="{{ old('canva[top]', $data->canva_top) }}" class="form-control"
                                            required>
                                        <x-error>canva[0]['top']</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="can_font" class="form-label">Font Size</label>
                                        <input type="number" name="canva[font]" id="can_font"
                                            value="{{ old('canva[font]', $data->canva_font_size) }}"
                                            class="form-control" required>
                                        <x-error>canva[0]['font']</x-error>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" id="submit" class="btn btn-primary float-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Image</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('category-image/' . $data->image) }}" alt="" class="w-full modal-img">
                </div>
                <div class="modal-footer">
                    <span class="text-muted">If you want to change image just add new image otherwise leave it.</span>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    @section('js')
        <script></script>
    @endsection
</x-admin>
