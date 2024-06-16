<?php
    include "tampil_data.php";
    include "edit.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query_edit = "SELECT * FROM mahasiswa WHERE id = '$id'";
        $proses_edit = mysqli_query($koneksi, $query_edit);
        $data_edit = mysqli_fetch_assoc($proses_edit);
    }
?>

<html>
<header>
    <title>BOOTSTRAP</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</header>

<body>
    
    <div class="span9" id="content">
        <!-- morris stacked chart -->
        <div class="row-fluid">
        <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Input Nilai Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">

                        <?php
                            if(isset($_GET['id']) && $_GET['id'] != ''){
                                //prosses edit data
                        ?>
                            <form action="edit.php?id=<?php echo $data_edit['id'] ?>&proses=1" method="POST">
                        <?php
                            }else{
                        ?>
                            <form action="proses.php" method="POST">
                        <?php
                            }
                        ?>
                        
                        <fieldset>
                            <legend>Input Data Mahasiswa</legend>

                            <div class="control-group">
                                <label class="control-label" for="nama_mhs">Nama Mahasiswa</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" type="text" name="nama" id="nama_mhs"
                                        value="<?php if(!empty($data_edit) && $data_edit['nama_mhs'] != "") echo $data_edit['nama_mhs']; ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="prodi">Program Studi</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" type="text" name="prodi" id="prodi"
                                        value="<?php if(!empty($data_edit) && $data_edit['prodi'] != "") echo $data_edit['prodi']; ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="npm">NPM Mahasiswa</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" type="text" name="npm" id="npm"
                                        value="<?php if(!empty($data_edit) && $data_edit['npm'] != "") echo $data_edit['npm']; ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="ulangi">ULANGI : </label>
                                <div class="controls">
                                    <input class="input-xlarge focused" type="text" name="ulangi" id="ulangi" value="">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                <button type="reset" class="btn">Cancel</button>
                            </div>
                        </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <form method="POST">
                <div>
                    <input type="text" name="kata_kunci" placeholder="Cari...">
                    <button type="submit" name="cari">Cari</button> 
                </div>
            </form>
        </div>

        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Data Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NPM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Program Studi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(isset($_POST['cari'])){
                                        $kata_kunci = $_POST['kata_kunci'];
                                        $q = "SELECT * FROM mahasiswa WHERE npm LIKE '%$kata_kunci%' OR nama_mhs LIKE '%$kata_kunci%' OR prodi LIKE '%$kata_kunci%' ORDER BY id DESC";
                                    }else{
                                        $q = "SELECT * FROM mahasiswa ORDER BY id DESC";
                                    }

                                    $tampil = mysqli_query($koneksi, $q);
                                    while($data = mysqli_fetch_assoc($tampil)){
                                ?>
                                <tr>
                                    <td><?php echo $data['npm'] ?></td>
                                    <td><?php echo $data['nama_mhs'] ?></td>
                                    <td><?php echo $data['prodi'] ?></td>
                                    <td>
                                        <a href="index.php?id=<?php echo $data['id'] ?>"> Edit </a> |   
                                        <a href="delete.php?id=<?php echo $data['id'] ?>"> Hapus </a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>  
</body>
</html>
