<?php
    class Song 
    {
        public function __construct(
            public string $name,
            public string $artist
        ) {}
    }


    // The comment right below, it is an PHPDoc annotation, that help static analyzers to understand the code better
    class Playlist 
    {
        /**
         * @param Song[] $songs
         */
        public function __construct(
            public string $name,
            public array $songs = []
        ) {}

        public function shuffle() {
            shuffle($this->songs);
        }
    }

    $playlist = new Playlist('90s Movie Soundtracks', [
        new Song('My Heart Will Go On', 'Celine Dion'),
        new Song('I Will Always Love You', 'Whitney Houston'),
        new Song('Smells Like Teen Spirit', 'Nirvana'),
        new Song('Billie Jean', 'Michael Jackson'),
        new Song('Bohemian Rhapsody', 'Queen'),
        new Song('Hey Jude', 'The Beatles'),
        new Song('Hotel California', 'Eagles'),
    ]);

    echo $playlist->name . '<br>';
    echo '<pre>';
    print_r($playlist->songs[0]->name);
    echo '</pre>';

    $playlist->shuffle();
    echo '<pre>';
    print_r($playlist->songs[0]->name);
    echo '</pre>';
?>
