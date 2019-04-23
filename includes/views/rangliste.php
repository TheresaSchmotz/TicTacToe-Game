<?php

echo $this->header;

?>
<h3>Rangliste</h3><p></p>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Punkte</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($this->winners as $winnerName => $highscore): ?>
        <tr>
            <td><?php echo $winnerName; ?></td>
            <td><?php echo $highscore; ?></td>
        </tr>
    <?php endforeach; ?>
    <!--<tr>
        <th scope="row">1</th>
        <td>Theresa</td>
        <td>10000</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Nina</td>
        <td>9000</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Sabrina</td>
        <td>8500</td>
    </tr>-->
    </tbody>
</table>
<?php

echo $this->footer;

?>