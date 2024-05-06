<x-head class="h-screen bg-gray d-flex justify-content-center align-items-center">
    <div class="card p-4" style="width: 400px">
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{ asset('static/mlgcl_logo.png') }}" alt="">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <button class="btn btn-primary mt-2">Login</button>
    </div>
</x-head>
