<?php

include_once 'DataBase.php';

class File
{
    private $storageDirectory;
    private $fileName;
    private $fileExtension;
    private $fileSize;
    private $fileTmpName;

    public function __construct(string $storagePath, array $uploadedFile)
    {
        $this->storageDirectory = $storagePath;
        $this->fileName = $uploadedFile['name'];
        $this->fileExtension = pathinfo($this->fileName, PATHINFO_EXTENSION);
        $this->fileSize = $uploadedFile['size'];
        $this->fileTmpName = $uploadedFile['tmp_name'];
    }

    public function uploadFile(): bool
    {
        $this->fileName = sha1(rand()) . '.' . $this->fileExtension;
        if (!move_uploaded_file($this->fileTmpName, $this->storageDirectory . $this->fileName)) {
            return false;
        }
        return true;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }
}
