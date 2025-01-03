<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use App\Services\CloudinaryService;
use Illuminate\Support\Facades\Storage;

class UploadImageToCloud implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $model;
    protected $filePath;
    protected $fieldName;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($model, $filePath, $fieldName)
    {
        $this->model = $model;
        $this->filePath = $filePath;
        $this->fieldName = $fieldName;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(CloudinaryService $cloudinaryService)
    {
        Log::info('Uploading image to Cloudinary...', [
            'model' => json_encode($this->model),
            'filePath' => $this->filePath,
            'fieldName' => $this->fieldName
        ]);

        // Kiểm tra filePath có tồn tại và hợp lệ
        if (!Storage::exists($this->filePath)) {
            Log::error('File does not exist at path: ' . $this->filePath);
            return;
        }

        // Upload image to Cloudinary
        $result = $cloudinaryService->uploadImage(Storage::path($this->filePath));

        // Update the model with the new image URL
        $this->model->update([$this->fieldName => $result['secure_url']]);

        // Xóa file tạm sau khi upload thành công
        Storage::delete($this->filePath);

        Log::info('Image uploaded successfully.', [
            'url' => $result['secure_url']
        ]);
    }
}