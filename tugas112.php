<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Tautan ke Font Awesome CSS -->
    <link rel="stylesheet" href="mycss.css">
    <style>
        form {
            border: 2px ridge #ccc; 
            border-radius: 10px; 
            padding: 20px;
            width: 300px;
            margin: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px; 
        }
        .save-button,
        .cancel-button {
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block; 
        }
        .save-button {
            background-color: #28a745; 
            color: white; 
        }
        .cancel-button {
            background-color: #dc3545; 
            color: white; 
        }
        .button-icon {
            margin-right: 5px; 
            color: white; 
        }
    </style>
</head>
<body>
    <form>
        <label for="kode">Kode:</label><br>
        <input type="text" id="kode" name="kode"><br>

        <label for="nama">Nama Barang:</label><br>
        <input type="text" id="nama" name="nama"><br>
        
        <label for="satuan">Satuan:</label><br>
        <input type="text" id="satuan" name="satuan"><br>
        
        <label for="beli">Beli:</label><br>
        <input type="text" id="beli" name="beli"><br>
    
        <label for="jual">Jual:</label><br>
        <input type="text" id="jual" name="jual"><br>

        <!-- Tombol Save -->
        <button type="button" class="save-button" onclick="window.open('tugas111.php', '_blank');">
            <i class="fas fa-save button-icon"></i> Save
        </button>

        <!-- Tombol Cancel -->
        <button type="button" class="cancel-button" onclick="window.open('tugas111.php', '_blank');">
            <i class="fas fa-times button-icon"></i> Cancel
        </button>
    </form>
</body>
</html>
