<x-client::layout>

<!-- ======= About Section ======= -->
<section id="about" class="about margin-top mt-5">
    <div class="container" data-aos="fade-up">

        <div class="col-12">
            @if (session('message'))
                <div class="alert alert-{{ session('status') }} alert-dismissible show fade">
                    <div class="alert-body">
                        {{ session('message') }}
                    </div>
                </div>
            @endif

            <h2 class="title-fill">
                Yuk, jadi bagian dari UNBI
            </h2>

            <div class="col-12 mt-5">

            <form action="{{ route('daftar.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="whatsapp" placeholder="Nomor Whatsapp" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group my-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="col-md-6 form-group my-3">
                        <input type="text" class="form-control" name="school" placeholder="Asal Sekolah" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="get-started-btn">Daftar</button>
                </div>
            </form>

            </div>
        </div>

    </div>
</section>
<!-- End About Section -->

</x-client>
