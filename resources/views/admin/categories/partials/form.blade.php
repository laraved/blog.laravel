<label for="published">Status</label>
<select name="published" id="published" class="form-control">
    @if (isset($category->id))
        <option value="0" @if ($category->published == 0) selected="" @endif>Not Published</option>
        <option value="1" @if ($category->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Not Published</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="title">Title</label>
<input type="text" id="title" name="title" class="form-control" value="{{ $category->title or "" }}"
       placeholder="Category Title" required>

<label for="slug">Slug</label>
<input type="text" id="slug" name="slug" class="form-control" value="{{ $category->slug or "" }}"
       placeholder="Category Slug" readonly>
<label for="parent_id">Parent Category</label>
<select name="parent_id" id="parent_id" class="form-control">
        <option value="0">-- Without Parent Category --</option>
        {{-- Include Categories --}}
        @include('admin.categories.partials.categories', ['categories' => $categories])
</select>
<hr>
<input type="submit" class="btn btn-primary" value="Save">