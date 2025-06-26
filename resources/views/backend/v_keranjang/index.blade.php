 @extends('backend.v_layouts.app')
@section('content')
<!-- contentAwal -->
 
<div class="row m-l-5">
     
 @foreach ($keranjang as $row)
    <div class="card mb-3 m-10" style="max-width: 596px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ asset('storage/img-produk/' . $row->produk->foto) }}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $row->produk->nama_produk}}</h5>
                    <p class="card-text">{{strip_tags($row->produk->detail)}}</p>
                    <p class="card-text">
                        <small class="text-danger"> Rp. {{ number_format($row->produk->harga, 0, ',', '.') }}</small>
                        <div>
                            <button type="button" class="btn btn-primary m-10 m-l-20">Beli</button>
                        <form method="POST" action="{{ route('backend.keranjang.destroy', $row->id) }}" style="display: inline-block;">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger show_confirm" data-konf-delete="{{ $row->produk->nama_produk }}" title='Hapus Data'>
                                            <i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                        </div>
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
     @endforeach
</div>


<!-- contentAkhir -->
@endsection