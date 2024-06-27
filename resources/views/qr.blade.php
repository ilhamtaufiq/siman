{{-- <style>
    @media print {
        #printPageButton {
            display: none;
        }
    }
</style>
<img src="data:image/png;base64, {!! base64_encode(
    // ::format('png')->color(255, 0, 0)->merge('/public/assets/images/pemda.png')->size(200)->generate('' . env('APP_URL') . '/makam/info?kode_registrasi=' . $data->registrasi->kode_registrasi . ''),
    QrCode::format('png')->merge('/public/flags/cianjurkab.png')->size(350)->generate('' . env('APP_URL') . 'makam/info?id=' . $data->id),
) !!} ">
<br>
<br>
<button id="printPageButton" onclick="window.print()">Print</button> --}}

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Print QR Code</title>

    <style>
        @media print {
            #printPageButton {
                display: none;
            }
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="row row-cols-1">
                <div class="col text-center">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">SIMAN</h4>
                        </div>
                        <div class="card-body">
                            <img src="data:image/png;base64, {!! base64_encode(
                                // ::format('png')->color(255, 0, 0)->merge('/public/assets/images/pemda.png')->size(200)->generate('' . env('APP_URL') . '/makam/info?kode_registrasi=' . $data->registrasi->kode_registrasi . ''),
                                QrCode::format('png')->merge('/public/flags/cianjurkab.png')->size(350)->generate('' . env('APP_URL') . '/makam/info?id=' . $data->id),
                            ) !!} ">
                        </div>

                        <button id="printPageButton" onclick="window.print()"
                            class="w-100 btn btn-lg btn-outline-primary">Print</button>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
