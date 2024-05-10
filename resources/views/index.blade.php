<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-3 text-primary">Formulaire de contact</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <form action="{{ route('envoimail') }}" method="post">
        @csrf

        <div class="mt-5 d-flex justify-content-center flex-wrap">

            @if (session()->has('success'))
                <x-alerte type="success">
                    {{ session('success') }}
                </x-alerte>
            @endif

            <div class="mb-3 w-75">
                <label for="exampleFormControlInput1" class="form-label">Adresse e-mail</label>
                <input  name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="exemple@example.com" value="{{ old('email') }}">
                @error('email')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 w-75">
                <label for="exampleFormControlInput2" class="form-label">Objet</label>
                <input  name="objet" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Raison du contact" value="{{ old('objet') }}">
                @error('objet')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 w-75">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('message') }}</textarea>
                @error('message')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                <button  type="submit" class="btn btn-primary btn-lg mt-3">Envoyer</button>
            </div>
        </div>
    </form>
</body>
</html>
