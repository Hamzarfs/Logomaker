{{-- @dd(session()->all()) --}}
{{-- @if ($errors->any())
    @dd($errors->all())
@endif --}}
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
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" id="image" class="form-control" accept=".jpeg,.jpg,.png,.svg">
                                        <a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#modal-default">View Image</a>
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
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Color2</label>
                                        <input type="color" name="color2" id="color2"
                                            value="{{ old('color2', $data->color2) }}" class="form-control" >
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label for="background_color" class="form-label">Background Color</label>
                                        <input type="color" name="background_color" id="background_color" 
                                            value="{{ old('background_color', $data->background_color ?? '#FFFFFF') }}" 
                                            class="form-control" required>

 
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
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="category" class="form-label">Logo Position</label>
                                        <select name="logo_position" id="logo_position" class="form-control" required>
                                            <option value="" disabled>Select the category</option>
                                            <option value="top" {{ old('logo_position', $data->logo_position) === 'top' ? 'selected' : '' }}>Top</option>
                                            <option value="center" {{ old('logo_position', $data->logo_position) === 'center' ? 'selected' : '' }}>Center</option>
                                            <option value="bottom" {{ old('logo_position', $data->logo_position) === 'bottom' ? 'selected' : '' }}>Bottom</option>
                                            <option value="left" {{ old('logo_position', $data->logo_position) === 'left' ? 'selected' : '' }}>Left</option>
                                            <option value="right" {{ old('logo_position', $data->logo_position) === 'right' ? 'selected' : '' }}>Right</option>
                                        </select>

                                        <x-error>category</x-error>
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_left" class="form-label">Company Name</label>
                                        <input type="text" name="company_name" id="lm_left"  value="{{ old('company_name', $data->company_name) }}"
                                            class="form-control" >
                                        <x-error>company_name</x-error>
                                    </div>
                                </div>






                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_left" class="form-label">slogon Name</label>
                                        <input type="text" name="slogan_name" id="lm_left" value="{{ old('slogan_name',$data->slogan_name) }}"
                                            class="form-control" >
                                        <x-error>slogan_name</x-error>
                                    </div>
                                </div>


                            </div>


                            <h4>Logo Maker</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_left" class="form-label">Left Position</label>
                                        <input type="text" name="logomaker[left]" id="lm_left"
                                            value="{{ old('logomaker.left', $data->logomaker_left) }}"
                                            class="form-control" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Top Position</label>
                                        <input type="text" name="logomaker[top]" id="lm_top"
                                            value="{{ old('logomaker.top', $data->logomaker_top) }}"
                                            class="form-control" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_font" class="form-label">Font Size</label>
                                        <input type="text" name="logomaker[font]" id="lm_font"
                                            value="{{ old('logomaker.font', $data->logomaker_font_size) }}"
                                            class="form-control" >
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_left" class="form-label">Slogan Left Position</label>
                                        <input type="text" name="logomaker[slogan_left]" id="lm_left"
                                         value="{{ old('logomaker.slogan_left', $data->logomaker_slogan_left) }}"
                                            class="form-control" >
                                        <x-error>logomaker[slogan_left]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Slogan Top Position</label>
                                        <input type="text" name="logomaker[slogan_top]" id="lm_top"
                                         value="{{ old('logomaker.slogan_top', $data->logomaker_slogan_top) }}"
                                            class="form-control" >
                                        <x-error>logomaker[slogan_top]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_logo_size" class="form-label">Slogan size</label>
                                        <input type="text" name="logomaker[slogan_size]" id="lm_logo_size"

                                            value="{{ old('logomaker.slogan_size', $data->logomaker_slogan_size) }}"
                                            class="form-control" >
                                        <x-error>logomaker[slogan_size]</x-error>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Slogan Spacing</label>
                                        <input type="text" name="logomaker[slogan_spacing]" id="lm_top" value="{{ old('logomaker.slogan_spacing', $data->logomaker_slogan_spacing) }}"
                                            class="form-control" >
                                        <x-error>logomaker[slogan_spacing]</x-error>
                                    </div>
                                </div>

                            </div>
                            <h4>Preview</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pre_left" class="form-label">Left Position</label>
                                        <input type="text" name="preview[left]" id="pre_left"
                                            value="{{ old('preview.left', $data->preview_left) }}"
                                            class="form-control" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pre_top" class="form-label">Top Position</label>
                                        <input type="text" name="preview[top]" id="pre_top"
                                            value="{{ old('preview.top', $data->preview_top) }}"
                                            class="form-control" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pre_font" class="form-label">Font Size</label>
                                        <input type="text" name="preview[font]" id="pre_font"
                                            value="{{ old('preview.font', $data->preview_font_size) }}"
                                            class="form-control" >
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_left" class="form-label">Slogan Left Position</label>
                                        <input type="text" name="preview[slogan_left]" id="lm_left"
                                         value="{{ old('preview.slogan_left', $data->preview_slogan_left) }}"
                                            class="form-control" >
                                        <x-error>preview[slogan_left]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Slogan Top Position</label>
                                        <input type="text" name="preview[slogan_top]" id="lm_top"

                                          value="{{ old('preview.slogan_top', $data->preview_slogan_top) }}"
                                            class="form-control" >
                                        <x-error>preview[slogan_top]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_slogan_size" class="form-label">Logo size</label>
                                        <input type="text" name="preview[slogan_size]" id="lm_logo_size"

                                            value="{{ old('preview.slogan_size', $data->preview_slogan_size) }}"
                                            class="form-control" >
                                        <x-error>preview[slogan_size]</x-error>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Slogan Spacing</label>
                                        <input type="text" name="preview[slogan_spacing]" id="lm_top" value="{{ old('preview.slogan_spacing', $data->preview_slogan_spacing) }}"
                                            class="form-control" >
                                        <x-error>preview[slogan_spacing]</x-error>
                                    </div>
                                </div>


                            </div>

                            <h4>Canva</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="can_left" class="form-label">Left Position</label>
                                        <input type="text" name="canva[left]" id="can_left"
                                            value="{{ old('canva.left', $data->canva_left) }}" class="form-control"
                                            >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="can_top" class="form-label">Top Position</label>
                                        <input type="text" name="canva[top]" id="can_top"
                                            value="{{ old('canva.top', $data->canva_top) }}" class="form-control"
                                            >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="can_font" class="form-label">Font Size</label>
                                        <input type="text" name="canva[font]" id="can_font"
                                            value="{{ old('canva.font', $data->canva_font_size) }}"
                                            class="form-control" >
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_left" class="form-label">Slogan Left Position</label>
                                        <input type="text" name="canva[slogan_left]" id="lm_left"

                                         value="{{ old('canva.slogan_left', $data->canva_slogan_left) }}"
                                            class="form-control" >
                                        <x-error>canva[slogan_left]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Slogan Top Position</label>
                                        <input type="text" name="canva[slogan_top]" id="lm_top"
                                         value="{{ old('canva.slogan_top', $data->canva_slogan_top) }}"
                                            class="form-control" >
                                        <x-error>canva[slogan_top]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_logo_size" class="form-label">Slogo size</label>
                                        <input type="text" name="canva[slogan_size]" id="lm_logo_size"

                                            value="{{ old('canva.slogan_size', $data->canva_slogan_size) }}"
                                            class="form-control" >
                                        <x-error>canva[slogan_size]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Slogan Spacing</label>
                                        <input type="text" name="canva[slogan_spacing]" id="lm_top" value="{{ old('canva.slogan_spacing', $data->canva_slogan_spacing) }}"
                                            class="form-control" >
                                        <x-error>canva[slogan_spacing]</x-error>
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
        <!-- Pickr JS -->
    
    <script>
         
    </script>
    @endsection
</x-admin>
