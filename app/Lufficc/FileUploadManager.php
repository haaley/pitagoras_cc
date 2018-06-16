<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/9/17
 * Time: 17:10
 */

namespace Lufficc;

use Illuminate\Support\Facades\Storage;
use Qiniu\Auth;
use Qiniu\Storage\BucketManager;
use Qiniu\Storage\UploadManager;
use Illuminate\Http\UploadedFile;


class FileUploadManager
{
    private $bucket;
    private $token;
    private $uploadManager;
    private $bucketManager;
    private $uploadedFile;

    /**
     * FileUploadManager constructor.
     */
    public function __construct()
    {
        $accessKey = config('filesystems.disks.qiniu.access_key');
        $secretKey = config('filesystems.disks.qiniu.secret_key');
        $this->bucket = config('filesystems.disks.qiniu.bucket');
        $auth = new Auth($accessKey, $secretKey);
        $this->token = $auth->uploadToken($this->bucket);
        $this->uploadManager = new UploadManager();
        $this->bucketManager = new BucketManager($auth);
    }

    public function uploadFile($key, $filePath)
    {
        //$filePath is "/private/var/folders/r4/fbt9g2zx5hzd0mwvmfq6vn9m0000gp/T/phpkmRu6E"
        //$key is "image/user/Raelson Rosa/avatar/1504388656602.jpeg"

        list($ret, $err) = $this->uploadManager->putFile($this->token, $key, $filePath);
        if ($err == null) {
            return false;
        } else {
            return true;
        }
    }

    public function deleteFile($key)
    {
        $err = $this->bucketManager->delete($this->bucket, $key);
        if ($err !== null) {
            return false;
        } else {
            return true;
        }
    }
}