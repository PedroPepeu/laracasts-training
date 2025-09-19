<?php 
    class Subscription
    {
        public function __construct(
            protected FileStorage $storage,
        ) {}

        public function saveFile(
            string $path,
            string $contents,
        ): void {
            $this->storage->put($path, $contents);
        }
    }
?>