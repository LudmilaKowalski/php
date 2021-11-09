
<?php

if (($_GET["you"]) == "human" )
{
	
    echo '<iframe src="https://giphy.com/embed/l3nWflasE5VWXHdRu" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/loop-ice-l3nWflasE5VWXHdRu">via GIPHY</a></p>';

} else if (($_GET["you"]) == "cat") {
    echo '<iframe src="https://giphy.com/embed/mlvseq9yvZhba" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/funny-cat-mlvseq9yvZhba">via GIPHY</a></p>';
}

    else {
        echo '<iframe src="https://giphy.com/embed/j0kQJxo5mzGYb4EvWK" width="480" height="377" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/moodman-j0kQJxo5mzGYb4EvWK">via GIPHY</a></p>';
    }

?>




<form method="get" action="">
	<label for="age"></label>
	Are you a human, a cat or a unicorn ? <input type="" name="you">
    <br>
	<input type="submit" name="submit" value="Me">
</form>