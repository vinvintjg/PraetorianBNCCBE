<x-app-layout>
    <x-slot name="header">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>
        <body>
            <div class="container col-md-6" style="padding-top: 20px">
                <div class="card shadow">
                <div class="card-header text-center">{{ __('UPDATE ITEM') }} </div>
                <div class="card-body">
                    <form action="{{route('updateBook', ['id' => $book->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title of Book</label>
                            <input name="title" type="text" value="{{$book->title}}" class="form-control" id="formGroupExampleInput" placeholder="Input Title of Book">
                            @error('title')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">Author of Book</label>
                            <input name="author" type="text" value="{{$book->author}}" class="form-control" id="formGroupExampleInput" placeholder="Input Author of Book">
                            @error('author')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price of Book</label>
                            <input name="price" type="numeric" value="{{$book->price}}" class="form-control" id="formGroupExampleInput" placeholder="Input Price of Book">
                            @error('price')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="release" class="form-label">Date of Release Book</label>
                            <input name="realese" type="date" value="{{$book->release}}" class="form-control" id="formGroupExampleInput" placeholder="Input Date Release of Book">
                            @error('release')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="card-body text-center">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        </body>

        </html>
    </x-slot>
</x-app-layout>
