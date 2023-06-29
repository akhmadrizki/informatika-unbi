<x-admin::layout title="Pendaftar" header="Calon Mahasiswa Baru">
    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render() }}
    </x-slot>

    <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Asal Sekolah</th>
                  <th>Email</th>
                  <th>Whatsapp</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->school }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->whatsapp }}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
</x-admin>
