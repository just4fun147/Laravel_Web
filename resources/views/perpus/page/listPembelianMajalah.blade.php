@include('perpus.partials.sidebar')
<?php
    $name = auth()->user()->name;
    $id = auth()->user()->id;
    $no=1;
    $pembelian = DB::table('pembelians')->where('pembeli_id',$id)->get();
    
?>

<head>
    <title>List Pembelian Majalah</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">LIST PEMBELIAN MAJALAH</h4>

        <h4 style="flex: 1 1 50%; text-align: right;">

    </div>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Majalah</th>
                <th scope="col">Topik</th>
                <th scope="col">Jumlah Halaman</th>
                <th scope="col">Harga</th>
                <th scope="col">Status</th>
                <?php 
                    if($name!="admin") {
                        echo'
                            <th scope="col">Bayar</th>
                            <th scope="col">Batal</th>
                        ';
                    }
                ?>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pembelian as $item) 
            <?php
            $majalahs = DB::table('majalahs')->where('id',$item->majalah_id)->get();
            ?>
            @foreach($majalahs as $majalah)
                            <tr> 
                            <th scope="row">{{ $no }}</th> 
                            <td>{{ $majalah->judul }}</td>  
                            <td>{{ $majalah->topik }}</td>  
                            <td>{{ $majalah->jumlah_halaman }}</td>  
                            <td>{{ $majalah->harga }}</td>  
                            <td>{{ $item->status }}</td>
                                <?php
                                if($item->status!="Lunas"){
                                    ?>
                                    <td>
                                    <form action="/bayar" method="post">
                                    <input type="text" id="id" name="id" value="{{ $item->id }}" hidden/>
                                    @csrf
                                        <button type="submit" style="border: 0; background-color: transparent;">
                                            <a> <i style="color: green" class="fa fa-money fa-2x"></i></a>
                                        </button>
                                    </form>
                                    </td>
                                    <td>
                                        <form action="/batal" method="POST">  
                                            <input type="text" id="id" name="id" value="{{ $item->id }}" hidden/>
                                            @csrf
                                            <button type="submit" style="border: 0; background-color: transparent;">
                                                <a> <i style="color: red" class="fa fa-times fa-2x"></i></a>
                                            </button>
                                        </form>
                                    </td>
                                    <?php
                                }else{
                                    echo'
                                    <td></td>
                                    <td></td>';
                                }
                                ?>
            @endforeach
            @empty
            <tr> 
                <td colspan="7"> Tidak ada buku </td> 
            </tr>
            @endforelse
                   <!--         if($name!="admin") {
                                if($data['status']!="Sudah Dibayar"){
                                    echo '
                                <td>
                                    <a href="../process/bayarMajalahProcess.php?id=' . $data['id'] . '"> <i style="color: green" class="fa fa-money fa-2x"></i> 
                                </td>
                                <td>
                                    <a href="../process/batalMajalahProcess.php?id=' . $data['id'] . '"> <i style="color: red" class="fa fa-times fa-2x"></i> 
                                </td>';
                                }else{
                                    <td></td>
                                    <td></td>
                                }
                            }
                        
                             </tr>';
                    }else{
                        <tr> 
                            <th scope="row"> $no </th> 
                            <td>Majalah Sudah Dihapus</td>  
                            <td></td>  
                            <td></td>  
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    } -->
        </tbody>
    </table>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>