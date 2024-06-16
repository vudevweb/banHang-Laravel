<div class="card">
    <div class="card-body">
        <div class="mb-4">
            <h4 class="mb-1">Cấu hình SEO</h4>
        </div>
        <div class="mb-4">
            <div class="meta-seo border p-4 rounded card-hover shadow">
                <div class="meta-title">
                    {{ $post->meta_title ?? 'Tiêu đề SEO' }}
                </div>
                <div class="meta-url">{{ url('/bai-viet/') }}/bai-viet-cua-ban.html</div>
                <div class="meta-description">
                    {{ $post->meta_description ?? 'Mô tả SEO' }}
                </div>
            </div>
        </div>
        <div class="row gx-3">
            <!-- tiêu đề seo -->
            <div class="mb-3 col-md-12">
                <label class="form-label d-flex justify-content-between" for="meta_title">
                    <span>Tiêu đề SEO<span class="text-danger">(*)</span></span>
                    <span class="count_meta_title">0</span>
                </label>
                <input type="text" class="form-control" id="meta_title" name="meta_title"
                    value="{{ $post->meta_title ??  old('meta_title') }}">
            </div>

            <!-- Từ khóa seo -->
            <div class="mb-3 col-md-12">
                <label class="form-label d-flex justify-content-between" for="meta_keyword">
                    <span>Từ khóa SEO<span class="text-danger">(*)</span></span>
                    <span class="count_meta_keyword">0</span>
                </label>
                <input name='tags' value="{{ $post->meta_keyword ??  old('tags') }}" class="form-control" autofocus>
            </div>

            <!-- mô tả seo -->
            <div class="mb-3 col-md-12">
                <label class="form-label d-flex justify-content-between" for="meta_description">
                    <span>Mô tả SEO<span class="text-danger">(*)</span></span>
                    <span class="count_meta_description">0</span>
                </label>
                <textarea id="meta_description" name="meta_description" id="text_fix" class="text form-control"
                    cols="30" rows="10">
                    {{ $post->meta_description ?? old('meta_description') }}
                </textarea>
            </div>

            <!-- Đường dẫn -->
            <div class="mb-3 col-md-12">
                <label class="form-label d-flex justify-content-between" for="slug">
                    <span>Đường dẫn<span class="text-danger">(*)</span></span>
                </label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">{{ url('/bai-viet/') }}</span>
                    <input type="text" name="slug" value="{{ $post->slug ?? old('slug') }}" class="form-control" id="slug" aria-describedby="basic-addon3">
                </div>
            </div>
        </div>
    </div>
</div>

