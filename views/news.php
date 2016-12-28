<h1>Page de News</h1>

<?php
// var_dump($news);
while($new = $news->fetch(PDO::FETCH_ASSOC) ) {
    
    print_r('
        <div class="new>
            <h2 class="title">' . $new['titre'] . '</h2>
            <p>News postée le '.str_replace(' ', ' à ', $new['date_formatee']).' par '.$new['auteur'].'</p>
            <p>'.$new['contenu'].'</p>
        </div>
    ');
}