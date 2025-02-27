<?php


namespace Buglinjo\LaravelWebp\Interfaces;

use Exception;
use Illuminate\Http\UploadedFile;

interface WebpInterface
{
    /**
     * @param UploadedFile $image
     * @return mixed
     */
    public function make(UploadedFile $image);

    /**
     * @param int|null $quality
     * @return mixed
     */
    public function quality(?int $quality);

    /**
     * @param string $outputPath
     * @param int|null $quality
     * @return bool
     * @throws Exception
     */
    public function save(string $outputPath, int $quality = null): bool;
}
