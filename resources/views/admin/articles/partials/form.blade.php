<label for="published">Status</label>
<select name="published" id="published" class="form-control">
    @if (isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>Not Published</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Not Published</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="title">Title</label>
<input type="text" id="title" name="title" class="form-control" value="{{ $article->title or "" }}"
       placeholder="Article Title" required>

<label for="slug">Slug</label>
<input type="text" id="slug" name="slug" class="form-control" value="{{ $article->slug or "" }}"
       placeholder="Article Slug" readonly>
<label for="parent_id">Parent Category</label>
<select name="categories[]" id="parent_id" class="form-control" multiple>
        <option value="0">-- Without Parent Category --</option>
        {{-- Include Categories --}}
        @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="description_short">Short Description</label>
<textarea class="form-control" name="description_short" id="description_short" cols="30" rows="10">
        {{ $article->description_short or "" }}
</textarea>

<label for="description">Description</label>
<textarea class="form-control" name="description" id="description" cols="30" rows="10">
        {{ $article->description or "" }}
</textarea>
<hr>

<label for="meta_title">Meta-Title</label>
<input type="text" id="meta_title" name="meta_title" class="form-control" value="{{ $article->meta_title or "" }}"
       placeholder="Article Meta-Title" required>

<label for="meta_description">Meta-Description</label>
<input type="text" id="meta_description" name="meta_description" class="form-control" value="{{ $article->meta_description or "" }}"
       placeholder="Article Meta-Description" required>

<label for="meta_keywords">Meta-Keywords</label>
<input type="text" id="meta_keywords" name="meta_keywords" class="form-control" value="{{ $article->meta_description or "" }}"
       placeholder="Article Meta-Keywords" required>

<hr>
<input type="submit" class="btn btn-primary" value="Save">