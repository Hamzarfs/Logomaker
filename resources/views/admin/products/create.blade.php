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
                                        <label for="name" class="form-label">Color2</label>
                                        <input type="color" name="color2" id="color2" value="{{ old('color2') }}"
                                            class="form-control" required>
                                        <x-error>color</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="background_color" class="form-label">Background Color</label>
                                        <input type="color" name="background_color" id="background_color" 
                                            value="{{ old('background_color', '#FFFFFF') }}" 
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
                                
                            
                            
                               
                                
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="logo_position" class="form-label">Logo Position</label>
                                        <select name="logo_position" id="logo_position" class="form-control" required>
                                            <option value="" selected >Select the position</option>
                                            <option value="top">Top</option>
                                            <option value="center">Center</option>
                                            <option value="bottom">Bottom</option>
                                            <option value="left">Left</option>
                                            <option value="right">Right</option>
                                        </select>
                                        <x-error>logo_position</x-error>
                                    </div>
                                </div>
                             
                           
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_left" class="form-label">Company Name</label>
                                        <input type="text" name="company_name" id="lm_left" value="{{ old('company_name') }}"
                                            class="form-control" >
                                        <x-error>company_name</x-error>
                                    </div>
                                </div>
                              

                                
                               

                                
                            


                            
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_left" class="form-label">slogon Name</label>
                                        <input type="text" name="slogan_name" id="lm_left" value="{{ old('slogan_name') }}"
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
                                        <input type="text" name="logomaker[left]" id="lm_left" value="{{ old('logomaker.left') }}"
                                            class="form-control" >
                                        <x-error>logomaker[left]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Top Position</label>
                                        <input type="text" name="logomaker[top]" id="lm_top" value="{{ old('logomaker.top') }}"
                                            class="form-control" >
                                        <x-error>logomaker[top]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_font" class="form-label">Font Size</label>
                                        <input type="text" name="logomaker[font]" id="lm_font" value="{{ old('logomaker.font') }}"
                                            class="form-control" >
                                        <x-error>logomaker[font]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_left" class="form-label">Slogan Left Position</label>
                                        <input type="text" name="logomaker[slogan_left]" id="lm_left" value="{{ old('logomaker.slogan_left') }}"
                                            class="form-control" >
                                        <x-error>logomaker[slogan_left]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Slogan Top Position</label>
                                        <input type="text" name="logomaker[slogan_top]" id="lm_top" value="{{ old('logomaker.slogan_top') }}"
                                            class="form-control" >
                                        <x-error>logomaker[slogan_top]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_logo_size" class="form-label">Slogan size</label>
                                        <input type="text" name="logomaker[slogan_size]" id="lm_logo_size" value="{{ old('logomaker.slogan_size') }}"
                                            class="form-control" >
                                        <x-error>logomaker[slogan_size]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Slogan Spacing</label>
                                        <input type="text" name="logomaker[slogan_spacing]" id="lm_top" value="{{ old('logomaker.slogan_spacing') }}"
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
                                        <input type="text" name="preview[left]" id="pre_left" value="{{ old('preview.left') }}"
                                            class="form-control" >
                                        <x-error>preview[left]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pre_top" class="form-label">Top Position</label>
                                        <input type="text" name="preview[top]" id="pre_top"
                                            value="{{ old('preview.top') }}" class="form-control" >
                                        <x-error>preview[top]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pre_font" class="form-label">Font Size</label>
                                        <input type="text" name="preview[font]" id="pre_font"
                                            value="{{ old('preview.font') }}" class="form-control" >
                                        <x-error>preview[font]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_left" class="form-label">Slogo Left Position</label>
                                        <input type="text" name="preview[slogan_left]" id="lm_left" value="{{ old('preview.slogan_left') }}"
                                            class="form-control" >
                                        <x-error>preview[slogan_left]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Slogan Top Position</label>
                                        <input type="text" name="preview[slogan_top]" id="lm_top" value="{{ old('preview.slogan_top') }}"
                                            class="form-control" >
                                        <x-error>preview[slogan_top]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_slogan_size" class="form-label">Logo size</label>
                                        <input type="text" name="preview[slogan_size]" id="lm_slogan_size" value="{{ old('preview.slogan_size') }}"
                                            class="form-control" >
                                        <x-error>preview[slogan_size]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Slogan Spacing</label>
                                        <input type="text" name="preview[slogan_spacing]" id="lm_top" value="{{ old('preview.slogan_spacing') }}"
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
                                            value="{{ old('canva.left') }}" class="form-control" >
                                        <x-error>canva[left]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="can_top" class="form-label">Top Position</label>
                                        <input type="text" name="canva[top]" id="can_top"
                                            value="{{ old('canva.top') }}" class="form-control" >
                                        <x-error>canva[top]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="can_font" class="form-label">Font Size</label>
                                        <input type="text" name="canva[font]" id="can_font"
                                            value="{{ old('canva.font') }}" class="form-control" >
                                        <x-error>canva[font]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_left" class="form-label">Slogan Left Position</label>
                                        <input type="text" name="canva[slogan_left]" id="lm_left" value="{{ old('canva.slogan_left') }}"
                                            class="form-control" >
                                        <x-error>canva[slogan_left]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Slogan Top Position</label>
                                        <input type="text" name="canva[slogan_top]" id="lm_top" value="{{ old('canva.slogan_top') }}"
                                            class="form-control" >
                                        <x-error>canva[slogan_top]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_logo_size" class="form-label">Logo size</label>
                                        <input type="text" name="canva[slogan_size]" id="lm_logo_size" value="{{ old('canva.slogan_size') }}"
                                            class="form-control" >
                                        <x-error>canva[slogan_size]</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lm_top" class="form-label">Slogan Spacing</label>
                                        <input type="text" name="canva[slogan_spacing]" id="lm_top" value="{{ old('canva.slogan_spacing') }}"
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
