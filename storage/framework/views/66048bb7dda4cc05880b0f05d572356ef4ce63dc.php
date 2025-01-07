<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RPS</title>
    <style>
        body {
            font-family: "sans-serif";
        }

        .table-body {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
            margin-top: 20px;
            font-size: 12px;
        }

        .table-body tr th {
            border: 1px solid black;
        }

        .table-body tr td {
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <table class="table-header" style="width: 100%; border-collapse: collapse; border: 1px solid black">
        <tr style="background-color: gainsboro">
            <td width="50px" align="center">
                <img src='img/logo-pnp.png' style="width: 60px; margin-left: 15px;" alt="">
            </td>
            <td align="center">
                <p><b>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</b></p>
                <p style="line-height: 7px"><b>POLITEKNIK NEGERI PADANG</b></p>
                <p style="line-height: 7px; font-size: 14px"><b>PUSAT PENINGKATAN DAN PENGEMBANGAN AKTIVITAS
                        INSTRUKSIONAL (P3AI)</b>
                </p>
            </td>
        </tr>
        <tr style="background-color: gainsboro; border-top: 1px solid black">
            <td align="center" colspan="2">
                <p><b>FORMULIR</b></p>
                <p style="line-height: 7px"><b>RENCANA PEMBELAJARAN SEMESTER (RPS)</b>
                </p>
            </td>
        </tr>
        <tr style="background-color: gainsboro; border-top: 1px solid black">
            <td align="center" colspan="2">
                <p><b>JURUSAN: <?php echo e(strtoupper($cetaks->jurusan->nama_jurusan ?? '-')); ?> PROGRAM STUDI:
                        <?php echo e(strtoupper($cetaks->prodi->nama_prodi ?? '-')); ?></b></p>
            </td>
        </tr>
    </table>

    <table class="table-body">
        <tr>
            <td align="center" colspan="3"><b>MATA KULIAH</b></td>
            <td align="center"><b>SEMESTER</b></td>
            <td align="center"><b>SKS</b></td>
            <td align="center"><b>Kode MK</b></td>
            <td align="center"><b>Tanggal Penyusunan</b></td>
        </tr>
        <tr>
            <td align="center" colspan="3"><b><?php echo e($cetaks->matakuliah->matkul ?? '-'); ?></b></td>
            <td align="center"><b><?php echo e($cetaks->matakuliah->semester ?? '-'); ?></b></td>
            <td align="center"><b><?php echo e($cetaks->matakuliah->sks ?? '-'); ?></b></td>
            <td align="center"><b><?php echo e($cetaks->matakuliah->kode_mk ?? '-'); ?></b></td>
            <td align="center"><b></b></td>
        </tr>
        
        <tr>
            <td align="center" rowspan="2"><b>OTORISASI</b></td>
            <td align="center" colspan="2">PENGEMBANGAN RPS:</td>
            <td align="center" colspan="2">KOORDINATOR PROGRAM STUDI</td>
            <td align="center" colspan="2">KETUA JURUSAN</td>
        </tr>
        
        <tr>
            <td colspan="2">
                <p style="text-align: center; margin-top: 60px; margin-bottom: 10px"><?php echo e($cetaks->nama ?? '-'); ?></p>
            </td>
            <td colspan="2" style="height: 70px">
                <p style="text-align: center; margin-top: 60px; margin-bottom: 10px">Roni Putra</p>
            </td>
            <td colspan="2" style="height: 70px">
                <p style="text-align: center; margin-top: 60px; margin-bottom: 10px">Ronal Hadi</p>
            </td>
        </tr>
        
        <?php $__currentLoopData = $juduls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $judul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td align="center" colspan="2" rowspan="15" style="padding: 0px 30px">
                    <b><?php echo e($judul->nama_judul ?? '-'); ?>

                    </b>
                </td>
                <td colspan="5" style="background-color: gainsboro">
                    CPL-PRODI (CAPAIAN PEMBELAJARAN PROGRAM STUDI) YANG
                    DIBEBANKAN PADA MATA KULIAH :
                </td>
            </tr>
            <?php $__currentLoopData = $subjuduls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subjudul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($subjudul->judul_id == $judul->id): ?>
                    <tr>
                        <td colspan="5">
                            <?php echo e($loop->iteration); ?>. <?php echo e($subjudul->nama_subjudul ?? '-'); ?>

                            <?php $__currentLoopData = $kontens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $konten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($konten->subjudul_id == $subjudul->id): ?>
                                    <p style="width: 100%; border-top: 1px solid black">
                                        <?php echo e($konten->isi_konten ?? '-'); ?>

                                    </p>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td colspan="5" style="background-color: gainsboro">
                    CPMK (CAPAIAN PEMBELAJARAN MATA KULIAH) :
                </td>
            </tr>
            <?php $__currentLoopData = $capaians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $capaian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($capaian->judul_id == $judul->id): ?>
                    <tr>
                        <td colspan="2">
                            <?php echo e($capaian->judul_capaian ?? '-'); ?>

                        </td>
                        <td colspan="3">
                            <?php echo e($capaian->isi_capaian ?? '-'); ?>

                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $juduls2s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juduls2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td align="center" colspan="2" style="padding: 0px 30px">
                    <b><?php echo e($juduls2->nama_judul ?? '-'); ?>

                    </b>
                </td>
                <td colspan="5">
                    <?php $__currentLoopData = $kontens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($kontent->judul_id == $juduls2->id): ?>
                            <p style="width: 100%;">
                                <?php echo e($kontent->isi_konten ?? '-'); ?>

                            </p>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $juduls3s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juduls3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td align="center" colspan="2" style="padding: 0px 30px">
                    <b><?php echo e($juduls3->nama_judul ?? '-'); ?>

                    </b>
                </td>
                <td colspan="5">
                    <?php $__currentLoopData = $kontens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($kontents->judul_id == $juduls3->id): ?>
                            <p style="width: 100%;">
                                <?php echo e($kontents->isi_konten ?? '-'); ?>

                            </p>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <?php $__currentLoopData = $juduls4s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juduls4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td align="center" colspan="2" rowspan="6" style="padding: 0px 30px">
                    <b><?php echo e($juduls4->nama_judul ?? '-'); ?>

                    </b>
                </td>
                <td colspan="2" rowspan="4">
                    UTAMA
                </td>
                <td colspan="3">
                    https://docs.microsoft.com/en-us/visualstudio/get-started/csharp/?view=vs-2019
                </td>
            </tr>
            <tr>
                <td colspan="3">https://www.codecademy.com/</td>
            </tr>
            <tr>
                <td colspan="3">https://csharp.net-tutorials.com/</td>
            </tr>
            <tr>
                <td colspan="3">M.Reza Faisal dan Erick Kurniawan, 2019, Membangun Aplikasi Windows Forms Desktop
                    berbasis
                    .NET Core 3.1 & Visual Studio 2019, Indonesia .NET Developer Community
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2">
                    PENDUKUNG
                </td>
                <td colspan="3">Erick Kurniawan, Channel Youtube : Cloudemia</td>
            </tr>
            <tr>
                <td colspan="3">D Meidelfi, R Hidayat, F Wulandari, 2020, Perancangan Sistem Informasi Poliklinik
                    Politeknik Negeri
                    Padang, Prosiding Seminar Nasional Terapan Riset Inovatif (SENTRINOV) 6 (1), 1073-1078</td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $juduls5s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juduls5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td colspan="2" rowspan="3"><?php echo e($juduls5->nama_judul ?? '-'); ?></td>
                <td colspan="5" style="background-color: gainsboro">
                    TEAM TEACHING PENCAPAIAN :
                </td>
            </tr>
            <?php $__currentLoopData = $subjuduls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subjuduls5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($subjuduls5->judul_id == $juduls5->id): ?>
                    <tr>
                        <td colspan="5">
                            <ul>
                                <li><?php echo e($subjuduls5->nama_subjudul ?? '-'); ?></li>
                            </ul>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

    <table class="table-body" style="width: 100%; border-collapse: collapse; border: 1px solid black">
        <tr style="background-color: gainsboro">
            <th rowspan="2">Minggu Ke</th>
            <th rowspan="2">Kemampuan</th>
            <th rowspan="2">Kajian/Materi</th>
            <th rowspan="2" width="10%">Metode</th>
            <th rowspan="2" width="10%">Waktu</th>
            <th colspan="3">Penilaian</th>
        </tr>
        <tr style="background-color: gainsboro">
            <th>Teknik</th>
            <th>Indikator</th>
            <th>Bobot (%)</th>
        </tr>
        <?php $__currentLoopData = $targets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $target): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td align="center" style="border: 1px solid black"><?php echo e($target->minggu ?? '-'); ?></td>
            <td style="border: 1px solid black"><?php echo e($target->kemampuan ?? '-'); ?></td>
            <td style="border: 1px solid black">
                <ol>
                    <?php $__currentLoopData = $kajians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kajian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($kajian->target_id == $target->id): ?>
                            <li><?php echo e($kajian->isi_kajian ?? '-'); ?></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            </td>
            <td style="border: 1px solid black">
                <p>Bentuk : <?php echo e($metodes->bentuk_metode); ?></p>
                <p>Metode : <?php echo e($metodes->kondisi_metode); ?></p>
                <p>Pengalaman Belajar : <?php echo e($metodes->pengalaman_metode); ?></p>
            </td>
            <td style="border: 1px solid black">PTK: <?php echo e($target->waktu ?? '-'); ?></td>
            <td style="border: 1px solid black"><?php echo e($target->teknik ?? '-'); ?></td>
            <td style="border: 1px solid black"><?php echo e($target->indikator ?? '-'); ?></td>
            <td align="center" style="border: 1px solid black"><?php echo e($target->bobot ?? '-'); ?>%</td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\taalimfl\resources\views/rps/cetak-rps/cetak-rps.blade.php ENDPATH**/ ?>