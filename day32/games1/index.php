<?php 
	
  $db =$pdo = new PDO(
                    'mysql:dbname=games;host=127.0.0.1;charset=utf8',
                    'root',
                    ''
                );

  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  //select all the games
  $query="
	SELECT `game`.*
	FROM `game`
	WHERE 1  

  ";//where 1 is to select all




 $stmt=$pdo->prepare($query);

 $stmt->execute();

 $stmt->setFetchMode(PDO::FETCH_OBJ);
 $array_of_objects_from_table_game =$stmt->fetchAll();

 $games=$stmt->fetchAll();


 $query="
    SELECT *
    FROM `game_has_genre`
    INNER JOIN `genre`
      ON `game_has_genre`.`genre_id`=`genre`.`id`
 ";

  $stmt=$pdo->prepare($query); //prepare the query
  $stmt-> execute(); //run the query
  $stmt->setFetchMode(PDO::FETCH_OBJ); //make any fetch call return objects
  $objects=$stmt->fetchAll();//return objects



  $genres_by_game=array();

  foreach($objects as $object)
  {
    $genres_by_game[$object->game_id][]=$object;
  }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
 </head>
 <body>

 <?php foreach($array_of_objects_from_table_game as $game) :?>
	


 	<div class="game"<?php echo $game->id>
    <div class="image">
        <img src="<?php echo $game->image_url; ?>" />
    </div>
    <div class="info">
        <h2 class="name"><?php echo $game->name; ?></h2>
        <div class="release">Released at<?php echo $game->released_at; ?></div>
        <div class="genres">
          <?php foreach( $genres_by_game[$game->id] as $genre) : ?> 
            <a href="#"><?php echo $genre->name; ?></a>
            <?php endforeach; ?>
        </div>
        <div class="description">
            <?php echo $game->description; ?>
        </div>
        <div class="rating">77%</div>        
    </div>
</div>

<?php endforeach; ?>

<script>
$(document).ready(function(){

   //code here will be run only after the document is ready

});

$(function(){
  $('h2:first');
  var headings=$('.game').find('h2');
  console.log(headings);

 var basic_element= document.getElementById('list');

 var jquery_selection=$('#list');

 // !!!!basic_element!=jquery_selection !!!!
});
</script>


 </body>
 </html>

