<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Data Home</h1>
        @if (session('success'))
            <div class="alert alert-black text-white-50">
                {{ session('success') }}
            </div>
        @endif
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data
        </button>
        <div class="row">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Img</th>
                        <th>Name</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    @if ($ho->isNotEmpty())
                        @foreach ($ho as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    @if ($item->image)
                                        <img width="50px" src="{{ url('storeImg') . '/' . $item->image }}"
                                            alt="">
                                    @endif
                                </td>
                                <td>{{ $item->image }}</td>
                                <td>
                                    <a href="#" class="btn-sm btn-edit">
                                        <i class="fas fa-edit icon-edit"></i>
                                    </a>
                                    <a type="submit" class="btn-sm">
                                        <i class="fas fa-trash icon-delete"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div> 

