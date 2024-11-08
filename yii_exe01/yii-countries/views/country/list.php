<?php
    use app\models\Country;
    /** @var Country[] $countries */
?>

<h1>Country list</h1>

<p>Here we will have the countries</p>

<?php
foreach ($countries as $country) {
    print "{$country->name} ({$country->code}) - {$country->population} <br>";
}
?>
