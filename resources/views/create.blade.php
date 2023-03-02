<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>View Page</title>
</head>
<body>
    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
        <div class="card-header text-center">{{ __('INPUT NEW ITEM') }} </div>
            <div class="card-body">
                <form action="{{ route('createBook') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title of Book</label>
                        <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Title of Book">
                        @error('title')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author of Book</label>
                        <input name="author" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Author of Book">
                        @error('author')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price of Book</label>
                        <input name="price" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Price of Book">
                        @error('price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="realese" class="form-label">Date of Realese Book</label>
                        <input name="realese" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input Date Realese of Book">
                        @error('release')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Category" class="form-label">Category of Item</label>
                        <div class="" style="">
                            @foreach ($categories as $category)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox1" value="<?= $category['id'] ?>" name="category_id">
                                <label class="form-check-label" for="inlineCheckbox1"><?= $category['category_name'] ?></label>
                            </div>
                            @endforeach
                        </div>
                    </div>


                    <button type="submit" class="btn btn-success">Insert</button>
                </form>

                <form action="{{ route('createCategory') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Category of Book</label>
                        <input name="category_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Author of Book">
                    </div>
                    <button type="submit" class="btn btn-success">Insert</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
