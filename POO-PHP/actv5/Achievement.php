<?php 
    abstract class Achievement
    {
        public function __construct(
            public string $name,
            public string $description,
            public string $icon,
        ) {}

        abstract public function qualifier(
            User $user
        ): bool;
    }

    class FirstPostAchievement extends Achievement
    {
        public function qualifier(
            User $user,
        ): bool {
            return true;
        }
    }

    $achievement = new FirstPostAchievement('First Post', 'First Post Achievement', 'icon.svg');
    if($achievement->qualifier($user)) {
        echo "User qualifies for the achievement";
    }
?>