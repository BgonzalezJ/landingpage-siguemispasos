<?php
	function getImages() {
		require 'config.php';
		try {
			$con = mysqli_connect($config->host, $config->user, $config->password, $config->database);

			if (!$con)
				return [];

			$query = "SELECT image_url FROM pictures WHERE active = 1 ORDER BY rand() LIMIT 8";

			$result = $con->query($query);

			$response = [];
			while ($image_url = $result->fetch_assoc())
				array_push($response, $image_url["image_url"]);

			$result = null;
			mysqli_close($con);

			return $response;
		} catch (Exception $e) {
			return [];
		}
	}