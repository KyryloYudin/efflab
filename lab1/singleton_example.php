<?php

interface Storage {
    public function save(string $fileName): void;
    public function delete(string $fileName): void;
    public function showFiles(): void;
}

class LocalStorage implements Storage {
    public function save(string $fileName): void {
        echo "Файл '$fileName' успішно збережено на локальний диск.\n";
    }

    public function delete(string $fileName): void {
        echo "Файл '$fileName' успішно видалено з локального диску.\n";
    }

    public function showFiles(): void {
        echo "Перегляд файлів на локальному диску.\n";
    }
}

class S3Storage implements Storage {
    public function save(string $fileName): void {
        echo "Файл '$fileName' збережено в Amazon S3.\n";
    }

    public function delete(string $fileName): void {
        echo "Файл '$fileName' видалено з Amazon S3.\n";
    }

    public function showFiles(): void {
        echo "Перегляд файлів у Amazon S3.\n";
    }
}

class StorageManager {
    private static ?StorageManager $instance = null;
    private ?Storage $currentStorage = null;

    private function __construct() {}

    public static function getInstance(): StorageManager {
        if (self::$instance === null) {
            self::$instance = new StorageManager();
        }
        return self::$instance;
    }

    public function setStorage(Storage $storage): void {
        $this->currentStorage = $storage;
    }

    public function getStorage(): ?Storage {
        return $this->currentStorage;
    }
}

function test() {
    $manager = StorageManager::getInstance();

    $localStorage = new LocalStorage();
    $manager->setStorage($localStorage);
    $manager->getStorage()->save("document1.txt");
    $manager->getStorage()->showFiles();

    $s3Storage = new S3Storage();
    $manager->setStorage($s3Storage);
    $manager->getStorage()->save("document2.txt");
    $manager->getStorage()->showFiles();
}

test();

