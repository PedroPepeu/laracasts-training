<?php 
    interface CanBeLiked {
        public function like();
        public function isLiked(): bool;
    }

    class PerformLike
    {
        public function handle(CanBeLiked $model) {
            if($model->isLiked()) {
                return;
            }

            $model->like();

            echo "Liked the model.";
        }
    }

    class Comment implements CanBeLiked
    {
        public function like() {}

        public function isLiked(): bool { return true; }
    }

    class Post implements CanBeLiked
    {
        public function like() {}

        public function isLiked(): bool { return true; }
    }

    class Thread implements CanBeLiked
    {
        public function like() {}

        public function isLiked(): bool { return true; }
    }

?>