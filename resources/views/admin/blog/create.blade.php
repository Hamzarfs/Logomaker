<x-admin>
    @section('title', 'New Blog')

    <form class="mx-5" id="form" action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="title">Blog Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Enter blog title" required value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Blog Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Enter description" required>{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Blog Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image" accept=".jpg,.jpeg,.png,.svg">
                                    <label class="custom-file-label" for="image">Choose Blog image</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title"
                                    placeholder="Enter meta title" required value="{{ old('meta_title') }}">
                            </div>
                            <div class="form-group">
                                <label for="meta_desc">Meta Description</label>
                                <textarea class="form-control" id="meta_desc" name="meta_desc" placeholder="Enter meta description" required>{{ old('meta_desc') }}</textarea>
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

    @section('js')
        <script>
            const faqItem = `
                <div class="faq-item">
                    <hr>
                    <div class="d-flex align-items-center mb-2">
                        <input type="text" class="form-control mr-2" name="faq[index][title]"
                            placeholder="FAQ title" required>
                        <button type="button" class="btn btn-danger delete rounded-circle"><i
                                class="fa fa-trash"></i>
                        </button>
                    </div>
                    <textarea name="faq[index][content]" rows="5" class="form-control" placeholder="FAQ answer" required></textarea>
                </div>`;

            $(function() {
                $('.add-more').click(function() {
                    $('.faq-container').append(faqItem.replaceAll('index', this.id));
                    this.id++;
                });

                $('.faq-container').on('click', '.delete', function() {
                    $(this).closest('.faq-item').remove();
                });
            });
        </script>
    @endsection
</x-admin>
