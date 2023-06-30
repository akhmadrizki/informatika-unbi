<x-admin::layout title="News" header="Berita">
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
        <div class="card-header">
            <a href="{{ route('admin.news.create') }}" class="btn btn-sm btn-primary">Tambah Berita Baru</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Author</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($news as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>
                            <a href="{{ route('admin.news.edit', $post->id) }}" class="btn btn-sm btn-warning" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.news.destroy', $post->id) }}" method="POST" class="d-inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
</x-admin>
