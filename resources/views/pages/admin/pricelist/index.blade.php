<x-admin::layout title="Pricelist" header="Biaya Pendidikan">
    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render() }}
    </x-slot>

    @if (session('message'))
        <div class="alert alert-{{ session('status') }} alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                {{ session('message') }}
            </div>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.pricelist.store') }}" method="POST" enctype="multipart/form-data" id="photo">
                @csrf
                <div class="form-group">
                    <label>File</label>
                    <input type="file" name="pricelist" class="form-control" required>
                </div>
            </form>

            @if (count($image) == 0)
                <img src="https://temonwetan-kulonprogo.desa.id/desa/themes/natra_kp/images/noimage.png" alt="biaya-pendidikan-image" class="img-fluid">
            @else
                <img src="{{ asset('images/' . $image[0]->pricelist) }}" alt="biaya-pendidikan" class="img-fluid">
            @endif

        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary" type="submit" form="photo">Update</button>
        </div>
    </div>
</x-admin>
