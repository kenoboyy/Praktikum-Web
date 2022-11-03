<?php 
$barang = array(
    array("Tepung", 1, 20),
    array("Gula", 5, 25),
    array("Pisang", 2, 20),
    array("Terigu", 7, 30),
    array("mantan", 1, 0)
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h3>Konversi Barang Obi</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Berat (Kg)</th>
                <th>Berat (g)</th>
                <th>Berat (mg)</th>
                <th>Stock</th>
            </tr>
            <?php for($i=0; $i <=4; $i++) : ?>
            <tr style="<?php echo $barang[$i][2] == 0 ? 'background-color: red;' : ''?>">
                <td><?php echo $i+1; ?></td>
                <td><?php echo $barang[$i][0]?></td>
                <td><?php echo $barang[$i][1]?></td>
                <td><?php echo $barang[$i][1]*1000?></td>
                <td><?php echo $barang[$i][1]*1000000?></td>
                <td><?php echo $barang[$i][2]?></td>
            </tr>
            <?php endfor ?>
        </table>
        <br>
        <div class="tombol">
            <input type="submit" name="namaAsc" id="namaAsc" value="Ascending" onclick="sort($barang[$i][0])">
            <input type="submit" name="namaDesc" id="namaDesc" value="Descending" onclick="sort($barang[$i][1])">
        </div>
    </div>
</body>
</html>