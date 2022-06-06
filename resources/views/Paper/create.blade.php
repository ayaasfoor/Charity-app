<x-layouts.app>

    <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <div class="navbar-nav align-items-center">
                    <div class="nav-item d-flex align-items-center">


                        <h5 class="card-title al"> جمعية إنعاش الفقير الخيرية في التل/ قسم الإدراج </h5>

                    </div>
                </div>

                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <!-- Place this tag where you want the button to render. -->

            </div>
        </nav>

        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">ادخال الورقة</h5>

                        </div>
                        <div class="card-body">
                            <form action="{{ route('papers.store') }}" method="POST" class="row g-3 needs-validation"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">اسم الورقة</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name"
                                            class="form-control  @error('name') border-light-danger @enderror"
                                            id="basic-default-name" placeholder="اسم الورقة" />

                                        @error('name')
                                            <div>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="inputGroupFile02">اضافة صورة</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <input type="file" name="image" id="basic-default-email"
                                                class="form-control  @error('image') border-light-danger @enderror"
                                                accept="image/*" />
                                        </div>
                                        @error('image')
                                            <div>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row mt-3">
                                        <div class="d-grid gap-2 col-lg-6 mx-auto">
                                            <button class="btn btn-secondary btn-lg" type="submit">انشاء</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
</x-layouts.app>
