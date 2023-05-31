@extends('layouts.app')

@section('content')
    <div class="bg-dark text-white py-4">
        <div class="container">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control  @error('title') is-invalid @enderror" name="title"
                        id="title" value="{{ $comic->title }}" required min="3" maxlength="255"
                        aria-describedby="titleHelp">
                        <div id="titleHelp" class="form-text">Inserisci un titolo</div>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Image Link</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" value="{{ $comic->thumb }}" required aria-describedby="thumbHelp">
                    <div id="thumbHelp" class="form-text">Inserisci un immagine</div>
                    @error('thumb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control  @error('thumb') is-invalid @enderror" name="price" id="price" value="{{ $comic->price }}" required aria-describedby="priceHelp">
                    <div id="priceHelp" class="form-text">Inserisci un prezzo</div>
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" value="{{ $comic->series }}" required aria-describedby="seriesHelp" maxlength="255">
                    <div id="seriesHelp" class="form-text">Inserisci una serie</div>
                    @error('series')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Date of Sale</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}" required aria-describedby="saleDateHelp">
                    <div id="saleDatesHelp" class="form-text">Inserisci la data di vendita</div>
                    @error('sale_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" value="{{ $comic->type }}" required aria-describedby="typeHelp">
                    <div id="typeHelp" class="form-text">Inserisci il tipo</div>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">

                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" aria-describedby="descriptionHelp" style="height: 100px">{{ $comic->description }}</textarea>
                    <div id="descriptionHelp" class="form-text">Inserisci una descrizione</div>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-outline-danger">Reset</button>
            </form>
        </div>
    </div>
@endsection
