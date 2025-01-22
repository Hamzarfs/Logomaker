<x-admin>
    @section('title', 'New Category')

    <form class="mx-5" id="form" action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Category Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter category name" required value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Category Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image" accept=".jpg,.jpeg,.png,.svg">
                                    <label class="custom-file-label" for="image">Choose category image</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Meta Title</label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title"
                                    placeholder="Enter meta title" required value="{{ old('meta_title') }}">

                            </div>
                            <div class="form-group">
                                <label for="name">Meta Description</label>
                                <input type="text" class="form-control" id="meta_desc" name="meta_desc"
                                    placeholder="Enter category description" required value="{{ old('meta_desc') }}">

                            </div>
                            <div class="form-group">
                                <label for="name">Heading</label>
                                <input type="text" class="form-control" id="heading" name="heading"
                                    placeholder="Enter heading" required value="{{ old('heading') }}">

                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content" placeholder="Enter content" required>{{ old('content') }}</textarea>
                            </div>
                            <div class="form-group form-check">
                                <input type="hidden" name="is_top" value="0">
                                <input type="checkbox" class="form-check-input" id="is_top" name="is_top"
                                    value="1" {{ old('is_top') == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_top">Is Top Category</label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Category FAQs</h3>
                        </div>
                        <div class="card-body">
                            <div class="faq-container">
                                <div class="faq-item">
                                    <div class="d-flex align-items-center mb-2">
                                        <input type="text" class="form-control mr-2" name="faq[0][title]"
                                            placeholder="FAQ title" required>
                                        <button type="button" class="btn btn-primary add-more rounded-circle"
                                            id="1">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <textarea name="faq[0][content]" rows="5" class="form-control" placeholder="FAQ answer" required></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-lg btn-primary mb-3">Submit</button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Category Content</h3>
                        </div>
                        <div class="card-body">
                            @foreach (range(1, 2) as $i)
                                <div class="form-group">
                                    <label for="heading-{{ $i }}">Section {{ $i }}
                                        heading</label>
                                    <input type="text" class="form-control" id="heading-{{ $i }}"
                                        name="headingg[]" required>
                                    {{-- <x-error>headingg[{{ $i - 1 }}]</x-error> --}}
                                </div>

                                @if (!$loop->last)
                                    <hr class="border-{{ auth()->user()->mode === 'dark' ? 'light' : 'dark' }}">
                                @endif
                            @endforeach
                            <hr class="border-{{ auth()->user()->mode === 'dark' ? 'light' : 'dark' }}">
                            @foreach (range(1, 7) as $i)
                                <div class="form-group">
                                    <label for="section-{{ $i }}-title">Section {{ $i }}
                                        title</label>
                                    <input type="text" class="form-control"
                                        id="section-{{ $i }}-title"
                                        name="section[{{ $i - 1 }}][title]" required>
                                    {{-- <x-error>section-{{ $i }}-title</x-error> --}}
                                </div>
                                <label>Section {{ $i }} content</label>
                                <textarea id="section-{{ $i }}-content" name="section[{{ $i - 1 }}][content]"></textarea>
                                @if (!$loop->last)
                                    <hr class="border-{{ auth()->user()->mode === 'dark' ? 'light' : 'dark' }}">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @section('js')
        <script>
            const faqItem = `
                            <div class="faq-item">
                                <hr class="border-{{ auth()->user()->mode === 'dark' ? 'light' : 'dark' }}">
                                <div class="d-flex align-items-center mb-2">
                                    <input type="text" class="form-control mr-2" name="faq[index][title]"
                                        placeholder="FAQ title" required>
                                    <button type="button" class="btn btn-danger delete rounded-circle"><i
                                            class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <textarea name="faq[index][content]" rows="5" class="form-control" placeholder="FAQ answer" required></textarea>
                            </div>`


            $(function() {
                for (let i = 1; i <= 7; i++) {
                    $(`#section-${i}-content`).summernote({
                        height: 200,
                        toolbar: [
                            // [groupName, [list of button]]
                            ['style', ['bold', 'italic', 'underline', 'clear']],
                            ['font', ['strikethrough', 'superscript', 'subscript']],
                            ['fontsize', ['fontsize']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['height', ['height']]
                        ]
                    })
                }
            })

            $('.add-more').click(function() {
                $('.faq-container').append(faqItem.replaceAll('index', this.id))
                this.id++
            })

            $('.faq-container').on('click', '.delete', function() {
                $(this).closest('.faq-item').remove()
            })

            $('form#form').submit(function() {
                event.preventDefault()
                for (let i = 1; i <= 7; i++) {
                    if ($(`#section-${i}-content`).summernote('isEmpty')) {
                        alert(`Section ${i} content is required.`)
                        return
                    }
                }
                this.submit()
            })
        </script>
    @endsection
</x-admin>
