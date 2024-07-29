<?php
// Reverse sentence
$sentence = "My name is khan";
// Initialize variables
$word = '';
$reversed_sentence = '';
$length = strlen($sentence);
// Iterate over the sentence character by character
for ($i = 0; $i < $length; $i++) {
    $char = $sentence[$i];
    // Check if the character is a space or end of sentence
    if ($char === ' ') {
        // If it's a space, add the word to the beginning of the reversed sentence
        $reversed_sentence = $word . ' ' . $reversed_sentence;
        // Reset the word for the next iteration
        $word = '';
    } else {
        // If it's not a space, add the character to the current word
        $word .= $char;
    }
}
// Add the last word to the reversed sentence
$reversed_sentence = $word . ' ' . $reversed_sentence;
// Output the reversed sentence
echo "Original sentence: " . $sentence . "<br>";
echo "Reversed sentence: " . $reversed_sentence;
?>
