<div class="card-body">
    @foreach ($questions as $question)
        <p>{{ $question->id }}. {{ $question->question }}</p>
        <br>
        <div class="row justify-content-center">
            <input type="radio" name="option[{{ $question->id }}]" style="display: none" value="" checked />
            @foreach (['a', 'b', 'c', 'd'] as $key)
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input type="radio" name="option[{{ $question->id }}]" id="option{{ $question->id . $key }}"
                        value="{{ $key }}" />
                    <label for="option{{ $question->id . $key }}">
                        <button class="options" disabled>{{ $key }}. {{ $question->$key }}</button>
                    </label>
                </div>
            @endforeach
        </div>
        <hr>
    @endforeach
</div>

<div class="card-footer">
    <div class="mt-3 d-flex justify-content-center text-center w-100">
        {{-- Previous Button --}}
        @if (!$questions->onFirstPage())
            <a href="{{ $questions->previousPageUrl() }}" class="btn btn-secondary page-link-ajax me-2">Previous</a>
        @endif

        {{-- Next Button --}}
        @if ($questions->hasMorePages())
            <a href="{{ $questions->nextPageUrl() }}" class="btn btn-primary page-link-ajax me-2">Next</a>
        @endif

        {{-- Submit Button (Only on last page) --}}
        @if ($questions->currentPage() == $questions->lastPage())
            <button type="submit" class="btn btn-success">Submit</button>
        @endif
    </div>
</div>
