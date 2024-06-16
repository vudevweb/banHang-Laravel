<div class="card mb-4">
    <!-- card body -->
    <div class="card-body">
        <div class="mb-4">
            <h4 class="mb-1">{{ $title ? $title : 'Chưa có title trang' }}</h4>
            <p>Lưu ý: Những trường đánh dấu <span class="text-danger">(*)</span> là bắt buộc</p>

            @if ($errors->any())
                <div class="alert alert-danger ps-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif
        </div>
        <!-- row -->
        <div class="row gx-3">
            <!-- họ và tên -->
            <div class="mb-3 col-md-12">
                <label class="form-label" for="title">Tiêu đề bài viết<span
                        class="text-danger">(*)</span></label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ $post->title }}">
            </div>

            {{-- editor --}}
            <div class="mb-3 col-md-12">
                <label class="form-label" for="content">Nội dung<span class="text-danger">(*)</span></label>
                <textarea name="content" class="text form-control ck-editor" id="content" cols="30" rows="10">
                    {{ $post->content }}
                </textarea>
            </div>

        </div>

    </div>
</div>
