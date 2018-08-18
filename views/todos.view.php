


<form method="post" action="todos">
    <input style="display: block; margin-bottom: 20px" type="text" name="description">
    <label  for="completed">completed</label>
    <input type="hidden" value="0" name="completed">
    <input type="checkbox" value="1" name="completed">
    <button style="display: block; margin-top: 20px" type="submit">submit</button>
</form>


<?php foreach ($todos as $todo) :
    ?>
    <h5><?= $todo->description ?></h5>
<?php endforeach; ?>

