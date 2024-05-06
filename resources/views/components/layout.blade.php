<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MLGCL Portal</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        #sidebar {
            width: 300px;
            min-height: 100vh;
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
        }

        .bg-gray {
            background-color: #f3f4f6;
        }
    </style>
</head>

<body class="d-flex font-sans">
    <div class="bg-primary h" id="sidebar">
        <div class="px-4">
            {{-- <div class="container d-flex justify-content-center my-3"> --}}
            <div class="my-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div><img src="{{ asset('static/mlgcl_logo.png') }}" height="100"
                            alt="">
                        </div>
                        <div class="text-white fs-4">MLGCL Portal</div>
                </div>
            </div>
            <div class="d-flex flex-column">
                <button class="bg-transparent border-0 text-white py-2 text-start">Dashboard</button>
                <button class="bg-transparent border-0 text-white py-2 text-start">Admission</button>
                <button class="bg-transparent border-0 text-white py-2 text-start">QrCode Scanner</button>
                <button class="bg-transparent border-0 text-white py-2 text-start">Links</button>
                <button class="bg-transparent border-0 text-white py-2 text-start">Links</button>
                <button class="bg-transparent border-0 text-white py-2 text-start">Links</button>
                <div class="accordion accordion-flush" id="enrollment-accordion">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="enrollment-accordion-links">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#enrollment-links" aria-expanded="false" aria-controls="enrollment-links">
                          Enrollments
                        </button>
                      </h2>
                      <div id="enrollment-links" class="accordion-collapse collapse" aria-labelledby="enrollment-accordion-links" data-bs-parent="#enrollment-accordion">
                        <div class="accordion-body d-flex flex-column">
                            <button class="bg-transparent border-0 py-2 text-start">New Requests</button>
                            <button class="bg-transparent border-0 py-2 text-start">For Enrollments</button>
                            <button class="bg-transparent border-0 py-2 text-start">Rejected</button>
                            <button class="bg-transparent border-0 py-2 text-start">Cashier's Hold</button>
                        </div>
                      </div>
                    </div>
                </div>
                <button class="bg-transparent border-0 text-white py-2 text-start">Links</button>

            </div>
        </div>
    </div>
    <div class="bg-gray flex-fill">
        <div class="bg-white py-3 px-4 fs-3">
            {{ $heading ?? 'Dashboard' }}
        </div>
        <div>
            <div class="card m-3 p-3">
                {{$slot}}
            </div>
        </div>
    </div>
</body>

</html>
