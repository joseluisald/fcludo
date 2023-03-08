<?php

namespace Source\Support;

use Exception;
use Aws\S3\S3Client;
use Aws\Exception\AwsException;
use Aws\S3\Exception\S3Exception;
use Aws\Credentials\Credentials;

/**
 * Class Aws
 * @package Source\Support
 */
class Aws
{
    /**
     * @var S3Client
     */
    public $s3Client;
    /**
     * @var
     */
    private $bucket;
    /**
     * @var
     */
    private $error;

    /**
     * Aws constructor.
     */
    public function __construct()
    {
        $this->bucket = AWS['BUCKET_NAME'];
        $credentials = new Credentials(AWS['ACCESS_KEY_ID'], AWS['SECRET_ACCESS_KEY']);

        $this->s3Client = new S3Client([
            'version'     => 'latest',
            'region'      => AWS['AWS_REGION'],
            'credentials' => $credentials
        ]);

//        $this->s3Client->createBucket(['Bucket' => $this->bucket]);
//        $this->s3Client->waitUntil('BucketExists', ['Bucket' => $this->bucket]);
    }

    /**
     * @param $file_Path
     * @return Aws
     */
    public function upload($file_Path)
    {
        $key = basename($file_Path);
        try
        {
            $result = $this->s3Client->putObject([
                'Bucket' => $this->bucket,
                'Key'    => $key,
                'Body'   => fopen($file_Path, 'r'),
                'ACL'    => 'public-read',
            ]);
            return $result;
        }
        catch (S3Exception $e)
        {
            $this->error = $e;
        }
    }

    public function get($key)
    {
        $result = $this->s3Client->getObject([
            'Bucket' => $this->bucket,
            'Key'    => $key
        ]);

        return $result;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function delete($key)
    {
        try
        {
            $result = $this->s3Client->deleteObject([
                'Bucket' => $this->bucket,
                'Key' => $key,
            ]);
            return $result->get('ObjectURL');
        }
        catch (S3Exception $e)
        {
            $this->error = $e->getMessage();
        }
    }

    /**
     * @return Exception|null
     */
    public function error()
    {
        return $this->error;
    }
}