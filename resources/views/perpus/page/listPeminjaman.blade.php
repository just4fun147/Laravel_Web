@include('perpus.partials.sidebar')
<?php
use App\Models\buku;
    $name = auth()->user()->name;
    $id = auth()->user()->id;
    $no=1;
    
?>

<head>
    <title>List Peminjaman Buku</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">LIST PEMINJAMAN BUKU</h4>

        <h4 style="flex: 1 1 50%; text-align: right;">

    </div>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Gambar</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Pemgembalian Buku</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <!--
            
                while ($data = mysqli_fetch_assoc($query)) {
                    $id=$data['buku_id'];
                    $query2 = mysqli_query($con, "SELECT * FROM buku WHERE id='$id'") or
                    die(mysqli_error($con));
                    if(mysqli_num_rows($query2)!=0){
                        $buku = mysqli_fetch_assoc($query2);
                        $date = $data['pengembalian'];
                        echo ' -->
                        @forelse($peminjaman as $item)
                            <?php
                            $buku = Buku::find($item->buku_id);
                            ?>
                                <tr> 
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $buku->judul }}</td> 
                                <td><img src="{{ asset('storage/'.$buku->gambar) }}" style="width:150px"></td> 
                                <td>{{ $item->status }}</td> 
                                <td>{{ $item->pengembalian }}</td> 
                                <td>
                                <?php
                                    if($item->status=="Dipinjam"){
                                        ?>
                                        <form action="/balik" method="post" onSubmit="confirm( \'Apakah ingin mengembalikan buku ini? \')">
                                            <input type="text" id="id" name="id" value="{{ $item->id }}" hidden/>
                                            @csrf
                                        <?php
                                            echo'
                                            <button type="submit" style="border: 0; background-color: transparent;">
                                                    <a> <i style="color: blue" class="fa fa-refresh fa-2x"></i></a>
                                                </button>
                                            </form>
                                            </td>';
                                }
                                ?>
                           
                    @empty
                    <p>Belum ada peminjaman</p>
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