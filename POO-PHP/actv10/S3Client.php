<?php 
    require 'vendor/autoload.php';

    use Aws\S3\S3Client;

    $s3Client = new S3Client([
        'version' => 'latest',
        'region' => 'us-east-1',
        'credentials' => [
            'key' => getenv('S3_KEY'),
            'secret' => getenv('S3_SECRET'),
        ],
    ]);

    $bucket = getenv('S3_BUCKET');
    $file = 'text.txt';
    $contents = 'Hello World';

    $s3Client->putObject([
        'Bucket' => $bucket,
        'Key' => $file,
        'Body' => $contents,
    ]);
?>