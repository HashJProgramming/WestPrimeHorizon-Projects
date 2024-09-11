<!DOCTYPE html>
<html id="bg-animation">

<head>
	<title>HashJ Projects</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<style>
		.gutter {
			margin-bottom: 20px;
		}

		.navbar {
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		.card {
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
		<a class="navbar-brand" href="#">Hash'J Programming - <?php echo 'User IP Address : '. $_SERVER['REMOTE_ADDR']?></a>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<?php
			$folders = scandir(__DIR__);
			foreach ($folders as $folder) {
				if ($folder !== '.' && $folder !== '..' && is_dir($folder) && $folder !== 'xampp' && $folder !== 'ZDSMC-FileSystemSearch' && $folder !== 'ZDSMC-HashFileSystemSearch' && $folder !== 'ZDSMC_RMSFinder') {
			?>
					<?php
					$filePath = __FILE__;
					?>
					<div class="col-md-4 gutter">
						<div class="card">
							<div class="card-body">
								<h2 class="card-title text-center mb-5"><i class="fas fa-folder text-info"></i> <?php echo strtoupper($folder); ?></h2>
								<a target="_new" href="<?php echo $folder; ?>" class="btn btn-primary w-100">Open Project</a>
							</div>
						</div>
					</div>
			<?php
				}
			}
			?>
		</div>
	</div>

</body>

</html>