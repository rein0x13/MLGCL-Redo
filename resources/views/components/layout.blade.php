
<x-head>
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
</x-head>
