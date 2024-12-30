<?php
    echo md5('123'.rand().date("H:i:s"));

    echo "<br>";

    echo sha1('123');

    echo "<br>";

    echo PASSWORD_HASH('123', PASSWORD_DEFAULT);

    echo "<br>";

    echo password_verify('123', '$2y$10$RBS26T5W9QNwVXVUVwpMpe6OaMG6rs4UxvUMgjIrOWLF/Wvc7JiVe');