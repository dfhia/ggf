@include('app.user.app.header')
<div class="jumbotron mb-0 img-fluid w-100 d-block bg1">
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $order->tanggal }}</td>
                                <td>
                                    @if ($order->status == "1")
                                    Sudah Checkout
                                    @elseif($order->status == "2")
                                    Sedang Dikemas
                                    @elseif($order->status == "3")
                                    Barang Telah Dikirim
                                    @elseif($order->status == "4")
                                    Order Selesai
                                    @else
                                    Order Gagal
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($order->jumlah_harga+$order->kode) }}</td>
                                <td>
                                    <a href="{{ url('user/history') }}/{{ $order->order_id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                    {{--  <a href="{{ url('user/history/cetak_history') }}/{{ $order->order_id }}" class="btn btn-primary"><i class="fa fa-print"></i> print</a>  --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@include('app.user.app.footer')
