<x-layouts.app>
    <x-slot name="styles">
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    </x-slot>
    <x-slot name="scripts">
        <!-- Include the Quill library -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <!-- Initialize Quill editor -->
        <script>
            var quill = new Quill('#editor', {
                theme: 'snow'
            })
            quill.on('text-change', function(delta, source) {
                document.getElementById('content').value = quill.root.innerHTML
            })
        </script>
    </x-slot>
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <form action="{{ route('permissions.store') }}" method="POST" class="row g-3 needs-validation"
                enctype="multipart/form-data">

                {{ csrf_field() }}
                <div class=" row-cols-md-2 ">
                    <label for="validationCustom04" class="form-label ">اسم الصلاحية
                    </label>
                    <input type="text" name="name"
                        class="form-control is-valid @error('name') is-invalid @enderror" id="validationServer02">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row-cols-md-2">
                    <label for="validationServer02" class="form-label">الصلاحية</label>
                    <input type="text" name="display_name"
                        class="form-control is-valid @error('display_name') is-invalid @enderror"
                        id="validationServer02">

                    @error('display_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row-cols-1">
                    <label for="validationServer02" class="form-label">الوصف</label>
                    <textarea id="editor" name="description" class="form-control is-valid @error('content') text-danger @enderror"
                        rows="3"></textarea>
                    <input type="hidden"id="content">
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="btn-group-lg">
                    <div class="row mt-3">
                        <div class="d-grid gap-2 col-lg-6 mx-auto">
                            <input type="submit" class="btn btn-success" value="انشاء">
                        </div>
                    </div>
            </form>
        </div>

    </div>
    </div>

</x-layouts.app>