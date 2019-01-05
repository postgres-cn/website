<?php 

	foreach ($news as $news_item): 

    echo '<h2>'. $news_item['title'] . '</h2>' ; 
    echo '<div id="main">' . $news_item['text'] ; 
	if ( $typeshow > 0 ) 
			echo '    [<a href="/news/index/'. $news_item['slug'] .'">TypeList</a> ] ' ; 
	echo '</div>' ; 
	echo '<p><a href="/news/viewone/'. rawurlencode($news_item['id']) .'">View article</a></p>' ; 

endforeach  



?>

<p>
<a href=/news/download>Download Text</a> | 
<a href=/news/download/gif>Download Pic</a> | 


