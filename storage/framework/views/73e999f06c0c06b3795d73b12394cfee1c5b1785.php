<!DOCTYPE html>
<html>
<head>
	<title>Nilai Akhir</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Nilai Akhir</h4>
	</center>

	<table class='table table-bordered' style="border: 2px">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Kompetensi</th>
				<th>Sikap</th>
				<th>Tugas</th>
				<th>Nilai Akhir</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1 ?>
			<?php $__currentLoopData = $nilaiakhir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($i++); ?></td>
				<td><?php echo e($nilai->mahasiswa->nama); ?></td>
				<td><?php echo e($nilai->kompetensi); ?></td>
				<td><?php echo e($nilai->sikap); ?></td>
				<td><?php echo e($nilai->tugas); ?></td>
				<td><?php echo e($nilai->nilaiakhir); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>

</body>
</html>
<?php /**PATH D:\Alim Rahmat\Aplikasi Program\XAMPP\htdocs\taalimfl\resources\views/cetaknilaiakhir.blade.php ENDPATH**/ ?>