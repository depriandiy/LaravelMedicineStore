<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Equipment Medicine</title>
</head>
<body>
    {{-- Navbar Component --}}
    @include('partials.navbar')

    <div class="container mt-4">
        {{-- Pake Grid --}}
        <div class="row row-cols-3">
            <div class="col">
                <div class="card">
                    <img src="img/equip1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">White Medical Equipment</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('detail_medicine', ['id' => 'B12']) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/equip2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Black and Grey Stethoscope</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('detail_medicine', ['id' => 'C']) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pake Card --}}
        {{-- <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/equip1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">White Medical Equipment</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('detail_medicine', ['id' => 'B12']) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/equip2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Black and Grey Stethoscope</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('detail_medicine', ['id' => 'C']) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>