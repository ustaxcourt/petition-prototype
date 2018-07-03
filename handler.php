<?php

/*
 * Define the directory where we'll store petitions. 
 */
$petitions_dir = 'petitions/';

/*
 * Bring the petition in from the POSTed content.
 * 
 * This would be a terrible approach in production. We wouldn't actually want to store all of the
 * contents of $_POST, and we'd need to sanitize it.
 */
$petition = $_POST;

/*
 * Generate a unique identifier for this petition submission.
 */
$petition['id'] = uniqid(TRUE);

/*
 * JSON encode the petition.
 */
$petition_json = json_encode($petition);

/*
 * Display it in the browser.
 */
echo $petition_json;

/*
 * Write the JSON to the filesystem.
 * 
 * I'd like to emphasize how terrible this would be in production.
 */
$petition_file = $petitions_dir . $petition['id'] . '.json';
file_put_contents($petition_file, $petition_json);

echo '<p>Stored as <tt>' . $petition_file . '</tt></p>';
