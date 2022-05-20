<?php

class UploadService
{
	// Dossier dans le dossier "public" contenant les fichiers uploads
	private const PATH_DIR = 'preview-projects';

	// Poids en Mo
	private const MAX_UPLOAD = 1;

	// Extensions acceptés
	private const EXT = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

	/**
	 * Upload d'un fichier
	 */
	public function upload(array $file)
	{
		// Récupère l'extension
		$extension = pathinfo($file['name'], PATHINFO_EXTENSION);

		// Vérifie l'extension du fichier
		if ($this->checkExtension($extension)) {

			// Vérifie le poids du fichier
			if ($this->checkSize($file['size'])) {

				// Génère un nouveau nom
				$newName = md5(uniqid('', true)) .'.'. $extension;

				// Upload le fichier
				move_uploaded_file($file['tmp_name'], self::PATH_DIR .'/'. $newName);

				// Retourne le nouveau du fichier
				return $newName;
			}
		}

		return false;
	}

	/**
	 * Vérifie si l'extension du fichier est accepté
	 */
	private function checkExtension(string $extension)
	{
		return in_array($extension, self::EXT);
	}

	/**
	 * Vérifie si le poids du fichier est autorisé
	 */
	private function checkSize(int $size)
	{
		$maxSize = self::MAX_UPLOAD * 1024 * 1024;
		return $size < $maxSize;
	}
}