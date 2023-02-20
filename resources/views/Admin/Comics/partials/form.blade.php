<form action=" {{ route($route, $comic->id) }} " method="POST">
    @csrf
    @method($method)

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="mb-3">
        <label class="form-label">title</label>
        <input type="text" class="form-control" value="{{ old('title') ?? $comic->title }}" name="title">
    </div>
    <div class="mb-3">
        <label class="form-label">description</label>
        <textarea class="form-control" name="description" rows="5" cols="33">{{ old('description') ?? $comic->description }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">thumb</label>
        <input type="text" class="form-control" value="{{ old('thumb') ?? $comic->thumb }}" name="thumb">
    </div>
    <div class="mb-3">
        <label class="form-label">price</label>
        <input type="number" step="0.01" class="form-control" value="{{ old('price') ?? $comic->price }}" name="price">
    </div>
    <div class="mb-3">
        <label class="form-label">series</label>
        <input type="text" class="form-control" value="{{ old('series') ?? $comic->series }}" name="series">
    </div>
    <div class="mb-3">
        <label class="form-label">sale_date</label>
        <input type="date" class="form-control" value="{{ old('sale_date') ?? $comic->sale_date }}" name="sale_date">
    </div>
    <div class="mb-3">
        <label class="form-label">type</label>
        <input type="text" class="form-control" value="{{ old('type') ?? $comic->type }}" name="type">
    </div>
    <button type="submit" class="btn btn-primary">{{ $buttonName }}</button>
</form>