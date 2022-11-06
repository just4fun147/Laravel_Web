@include('perpus.partials.sidebar')

<?php
    $name = auth()->user()->name;
    $no=1;
?>
<head>
    <title>List Buku</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">LIST BUKU</h4>
        <?php
        if($name=="admin"){
            echo'
            <a href="../page/addBukuPage.php"> <i style="color: blue" class="fa fa-add fa-2x"></i> </a> </h4>';
        }
        ?>
    </div>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Gambar</th>
                <th scope="col">Jumlah Tersedia</th>
                <?php
                if($name!="admin"){
                    echo'
                    <th scope="col">Pinjam</th>';
                }
                if($name=="admin"){
                    echo'
                    <th scope="col">Edit</th>
                    <th scope="col">Hapus</th>';
                }
                ?>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
                @forelse ($buku as $item) 
                <tr> 
                    <th scope="row">{{ $no }}</th> 
                        <td>{{ $item->judul }}</td> 
                        <td> nanti blm ada </td>
                        <td>{{ $item->jumlah }}</td> 
                        <td>
                            <?php
                            if($name!="admin"){
                                if($item['jumlah']!=0){
                                    echo' 
                                    <a href="../page/peminjamanPage.php?id=' . $item['id'] . '"> <i style="color: blue" class="fas fa-book fa-2x"></i> 
                                    </td>';
                                }else{
                                    echo' 
                                    <a href="../page/peminjamanPage.php?id=' . $item['id'] . '" onclick="return false;"> <i style="color: blue" class="fas fa-book fa-2x"></i>   
                                    </td>';
                                }
                            }
                            
                            if($name=="admin"){
                                echo'
                                <a href="../page/editBukuPage.php?id=' . $item['id'] . '"> <i style="color: red" class="fa fa-pencil fa-2x"></i> 
                                <td> 
                                <a href="../process/deleteBukuProcess.php?id=' . $item['id'] . '"> <i style="color: red" class="fa fa-trash fa-2x"></i> 
                                </td>';
                            }
                            ?>
                </tr>
                <?php
                $no++;
                ?>
                @empty
                <tr> 
                    <td colspan="7"> Tidak ada buku </td> 
                </tr>
                @endforelse    
        </tbody>
    </table>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>
