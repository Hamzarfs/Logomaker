<x-admin>
    @section('title', 'Products')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Product</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.product.index') }}" class="btn btn-info btn-sm">Back</a>
                        </div>
                    </div>

                    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                                            class="form-control" required>
                                        <x-error>name</x-error>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category" id="category" class="form-control" required>
                                            <option value="" selected disabled>Select the category</option>
                                            @foreach ($category as $cat)
                                                <option @selected(old('category') == $cat->id) value="{{ $cat->id }}">
                                                    {{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                        <x-error>category</x-error>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" id="image" class="form-control"
                                            required>
                                        <x-error>image</x-error>
                                    </div>
                                </div>
                            </div>
                            <!-- Here  -->

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Color</label>
                                        <input type="color" name="color" id="color" value="{{ old('color') }}"
                                            class="form-control" required>
                                        <x-error>color</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="font" class="form-label">Font</label>
                                        <select name="font" id="font" class="form-control" required>
                                            <option value="" selected disabled>Select the font</option>
                                            @foreach ($fonts as $font)
                                                <option @selected(old('font') == $font->id) value="{{ $font->id }}">
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
                                        <input type="number" name="logomaker[left]" id="lm_left" value="{{ old('logomaker[left]') }}"
                                            class="form-control" required>
                                        <x-error>logomaker[left]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Top Position</label>
                                        <input type="number" name="logomaker[top]" id="lm_top" value="{{ old('logomaker[top]') }}"
                                            class="form-control" required>
                                        <x-error>logomaker[top]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_font" class="form-label">Font Size</label>
                                        <input type="number" name="logomaker[font]" id="lm_font" value="{{ old('logomaker[font]') }}"
                                            class="form-control" required>
                                        <x-error>logomaker[font]</x-error>
                                    </div>
                                </div>
                            </div>
                            <h4>Preview</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pre_left" class="form-label">Left Position</label>
                                        <input type="number" name="preview[left]" id="pre_left" value="{{ old('preview[left]') }}"
                                            class="form-control" required>
                                        <x-error>preview[left]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pre_top" class="form-label">Top Position</label>
                                        <input type="number" name="preview[top]" id="pre_top"
                                            value="{{ old('preview[top]') }}" class="form-control" required>
                                        <x-error>preview[top]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pre_font" class="form-label">Font Size</label>
                                        <input type="number" name="preview[font]" id="pre_font"
                                            value="{{ old('preview[font]') }}" class="form-control" required>
                                        <x-error>preview[font]</x-error>
                                    </div>
                                </div>
                            </div>

                            <h4>Canva</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="can_left" class="form-label">Left Position</label>
                                        <input type="number" name="canva[left]" id="can_left"
                                            value="{{ old('canva[left]') }}" class="form-control" required>
                                        <x-error>canva[left]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="can_top" class="form-label">Top Position</label>
                                        <input type="number" name="canva[top]" id="can_top"
                                            value="{{ old('canva[top]') }}" class="form-control" required>
                                        <x-error>canva[top]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="can_font" class="form-label">Font Size</label>
                                        <input type="number" name="canva[font]" id="can_font"
                                            value="{{ old('canva[font]') }}" class="form-control" required>
                                        <x-error>canva[font]</x-error>
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
    @section('js')
        <script>
            // $("#category").on('change', function() {
            //     let category = $("#category").val();
            //     $("#submit").attr('disabled', 'disabled');
            //     $("#submit").html('Please wait');
            //     $.ajax({
            //         url: "{{ route('admin.getsubcategory') }}",
            //         type: 'GET',
            //         data: {
            //             category: category,
            //         },
            //         success: function(data) {
            //             $("#submit").removeAttr('disabled', 'disabled');
            //             $("#submit").html('Save');
            //             if (data) {
            //                 $("#subcategory").html(data);
            //             }
            //         }
            //     });
            // });
        </script>
    @endsection
</x-admin>
