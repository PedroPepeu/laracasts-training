<?php
    class Storage
    {
        public static function resolve(): FileStorage
        {
            $method = getenv('FILE_STORAGE') ?: 'local';

            if ($method === 'local')
            {
                return new LocalStorage();
            }

            if ($method === 's3')
            {
                $client = new S3Client([...]); // must be because I do not download the aws
                return new S3Storage($client, getenv('S3_BUCKET'));
            }

            throw new Exception('Unupported storage method: $method');
        }
    }
?>