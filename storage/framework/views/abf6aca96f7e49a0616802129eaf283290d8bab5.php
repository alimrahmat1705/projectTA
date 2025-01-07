<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RPS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 7pt;
            width: 10px;
        }

        table {
            border-collapse: collapse;
            border: 2px solid black !important;
            /* Add a black border to the table */
            width: 100%;
        }

        .small-column-header {
            width: 100px !important;
        }

        th,
        td {
            border: 1px solid black !important;
            /* Add a black border to table cells */
            padding: 8px;
            /* text-align: center; */
        }
    </style>

    <div class="container-fluid">
        <div class="p-3" style="background-color: #ededed">
            <div class="col">
                <img src='img/logo-pnp.png' style="width: 100px; margin-top:10px;" alt="">
            </div>
            <div class="container">

                <div class="row">

                    <div class="col">
                        <h4 class="text-center mx-3" style="margin-top: -90px; text-align: center;margin-bottom: -10px">KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN
                        </h4>
                        <h5 style="text-align:center;margin-top: 10px ">POLITEKNIK NEGERI PADANG</h5>
                        <h5 style="text-align:center;margin-top: 10px ">PUSAT PENINGKATAN DANPENGEMBANGAN AKTIVITAS INSTRUKSIONAL(P3AI)</h5>

                    </div>

                </div>


            </div>

        </div>
    </div>
    <hr>


    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th style="text-align: center">Mata Kuliah</th>
                <th style="text-align: center">Semester</th>
                <th style="text-align: center">SKS</th>
                <th style="text-align: center">Kode MK</th>
                <th style="text-align: center">Tanggal Penyusunan</th>
                
            </tr>

        </thead>
        <tbody>
            <?php $i=1 ?>
            <?php $__currentLoopData = $rps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <tr>
                    <td style="text-align: center"><?php echo e($rp->matakuliah->matkul); ?></td>
                    <td style="text-align: center"><?php echo e($rp->matakuliah->semester); ?></td>
                    <td style="text-align: center"><?php echo e($rp->matakuliah->sks); ?></td>
                    <td style="text-align: center"><?php echo e($rp->matakuliah->kode_mk); ?></td>
                    <td style="text-align: center"><?php echo e($rp->tgl_penyusunan); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <table class="table table-bordered table-sm">
        <thead>

            <tr>
                <th style="width: 10px; text-transform: uppercase;">Otorisasi</th>
                <th style="width: 10px; text-transform: uppercase;">Pengembang RPS</th>
                <th style="width: 10px; text-transform: uppercase;">Koordinator Program Studi</th>
                <th style="width: 10px; text-transform: uppercase;">Ketua Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            <?php $__currentLoopData = $rps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="text-align: center"></td>
                <td style="text-align: center"><?php echo e($rp->otorisasi->pe_rps); ?></td>
                <td style="text-align: center"><?php echo e($rp->otorisasi->koprodi); ?></td>
                <td style="text-align: center"><?php echo e($rp->otorisasi->kajur); ?></td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <table class="table table-bordered table-sm">

        <thead>
            <tr>
                <th style="width: 30% !important;">CAPAIAN PEMBELAJARAN (CP)</th>
                <th style="width: 70% !important;">
                    <table style="border: none !important;">
                        <thead>
                            <tr>
                                <th style="border: none !important;">CPL-PRODI (CAPAIAN PEMBELAJARAN PROGRAM STUDI) YANG
                                    DIBEBANKAN PADA MATA KULIAH : </th>


                            </tr>
                            <hr>

                        </thead>
                        <tbody>

                            <tr>
                                

                                <td style="border: none !important;">
                                    <?php echo e($rp->cplprodi->judul); ?>

                                    <p><?php echo e($rp->cplprodi->isijudul); ?></p>
                                </td>

                            </tr>
                            <tr>
                                <th style="border: none !important;">CPMK (CAPAIAN PEMBELAJARAN MATA KULIAH) </th>

                            </tr>
                            <hr>
                            <tr>
                                <td style="border: none !important;">
                                    <?php
                                    use App\Models\CpMk;
                                       $cpmks = CpMk::where('cpl_prodi_id', $rp->cplprodi->id)->get();
                                    ?>
                                    <?php $__currentLoopData = $cpmks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cpmk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($cpmk->judul); ?>

                                    <p><?php echo e($cpmk->isijudul); ?></p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </td>


                            </tr>


                        </tbody>
                    </table>
                </th>

            </tr>
            <tr>
                <th style="width: 30% !important;">DEKRIPSI MATA KULAH</th>
                <th style="width: 70% !important;">
                    <table style="border: none !important;">
                        <thead>
                            <tr>
                                <th style="border: none !important;"><?php echo e($rp->desc_matkul); ?></th>
                            </tr>
                        </thead>
                    </table>
                </th>
            </tr>
            <tr>
                <th style="width: 30% !important;">BAHAN KAJIAN/MATERI</th>
                <th style="width: 70% !important;">
                    <table style="border: none !important;">
                        <thead>
                            <tr>
                                <th style="border: none !important;">
                                    <?php echo e($rp->desc_bk); ?></th>
                            </tr>
                        </thead>
                    </table>
                </th>

            </tr>
            <tr>
                <th style="width: 30% !important;">PUSTAKA</th>
                <th style="width: 70% !important;">
                    <table style="border: none !important;">
                        <thead>
                            <tr>
                                <th style="border: none !important;"><?php echo e($rp->pustaka->utama); ?> </th>
                            </tr>
                        </thead>
                    </table>
                </th>
            </tr>
            <tr>
                <th style="width: 30% !important;">TEAM TEACHING</th>
                <th style="width: 70% !important;">
                    <table style="border: none !important;">
                        <thead>
                            <tr>
                                <th style="border: none !important;"><?php echo e($rp->team->nama); ?></th>
                            </tr>
                        </thead>
                    </table>
                </th>
            </tr>
        </thead>
        

    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\taalimfl\resources\views/rp/cetakrp.blade.php ENDPATH**/ ?>