<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Include Font Awesome CSS -->
<link rel="stylesheet" href="mycss.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-button {
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 6px 10px;
            font-size: 16px;
            cursor: pointer;
            background-color: #f2f2f2;
        }
        .action-button:hover {
            background-color: #ddd;
        }
        .button-icon {
            margin-right: 5px; 
            color: blue; 
        }
    </style>
</head>
<body>
<tr>
    <td><button class="action-button" onclick="window.open('tugas112.php', '_blank');"><i class="fas fa-plus button-icon"></i> Tambah</button></td> <!-- Action -->

    <table border="1">
        <tr>
            <th rowspan="2">Kode</th>
            <th rowspan="2">Nama Barang</th>
            <th rowspan="2">Satuan</th>
            <th colspan="2">Harga</th>
            <th rowspan="2">Action</th>
        </tr>
        <!-- Baris 2 -->
        <tr>
            <th>Jual</th> <!-- Kolom harga jual -->
            <th>Beli</th> <!-- Kolom harga beli -->
        </tr>
        <!-- Baris 3 (data tabel) -->
        <tr>
            <td>m001</td> <!-- Kode -->
            <td>cpu</td> <!-- Nama Barang -->
            <td>pcs</td> <!-- Satuan -->
            <td>200</td> <!-- Harga Jual -->
            <td>250</td> <!-- Harga Beli -->
            <td><button class="action-button" onclick="window.open('tugas113.php', '_blank');"><i class="fas fa-edit button-icon"></i> Edit</button></td> <!-- Action -->
        </tr>
        <tr>
            <td>m002</td> <!-- Kode -->
            <td>RAM</td> <!-- Nama Barang -->
            <td>pcs</td> <!-- Satuan -->
            <td>300</td> <!-- Harga Jual -->
            <td>450</td> <!-- Harga Beli -->
            <td><button class="action-button" onclick="window.open('tugas113.php', '_blank');"><i class="fas fa-edit button-icon"></i> Edit</button></td> <!-- Action -->
        </tr>
        <tr>
            <td>m003</td> <!-- Kode -->
            <td>VGA</td> <!-- Nama Barang -->
            <td>pcs</td> <!-- Satuan -->
            <td>400</td> <!-- Harga Jual -->
            <td>550</td> <!-- Harga Beli -->
            <td><button class="action-button" onclick="window.open('tugas113.php', '_blank');"><i class="fas fa-edit button-icon"></i> Edit</button></td> <!-- Action -->
        </tr>
    </table>
</body>
</html>
