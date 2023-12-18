@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1">
        <h5 class="fw-bold py-3 mb-0"><span class="text-muted fw-light">Dashboard /</span></h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body text-center pb-5">
                        <h2 class="mb-2 mt-3">GO UMKM DIGITAL ADMIN</h2>
                        <h3> UMKM Digital</h3>

                        <div class="mt-5 d-flex justify-content-center mb-5">
                            <a href="">
                                <button class="btn btn-outline-primary mx-3 py-3">
                                    <i class="bx bx-copy-alt fs-3"></i> <br> MASTER DATA
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-outline-primary mx-3 py-3">
                                    <i class="bx bxs-user-check fs-3"></i> <br> UMKM
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-outline-primary mx-3 py-3">
                                    <i class="bx bx-dollar fs-3"></i> <br> PRODUK
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-outline-primary mx-3 py-3">
                                    <i class="bx bx-paint fs-3"></i> <br> KOTA
                                </button>
                            </a>

                        </div>
                        <div class="mt-5 d-flex justify-content-center mb-5">
                            <a href="">
                                <button class="btn btn-outline-primary mx-3 py-3">
                                    <i class="bx bx-adjust fs-3"></i> <br> MOTIF
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-outline-primary mx-3 py-3">
                                    <i class="bx bx-git-pull-request fs-3"></i> <br> HARGA
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
