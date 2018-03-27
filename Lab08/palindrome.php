<?php
//declare variables to store the string to be checked and the message to be displayed.
$string = $message = "";

//retrieve the string to be checked and then strip any invalid characters
if(filter_has_var(INPUT_GET, "string")) {
    $string = trim(filter_input(INPUT_GET,'string', FILTER_DEFAULT));
    
    //remove all non-alphanumeric characters and then convert all characcters to lower cases
    $string_stripped = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $string));
}

if ($string != "") {
    $result = is_palindrome($string_stripped);

    if ($result)
        $message = "\"" . $string . "\" is a palindrome.";
    else
        $message = "\"" . $string . "\" is NOT a palindrome.";
}

/* This function checks whether a string is a palindrome. It checks
 * whether the first character is the same as the last character. If so,
 * it checks whether the second character is the same as the second-to-last
 * character. This process continues until a mismatch is found (return false)
 * or all the characters are checked except for the middle character if the
 * string has an odd number of characters (return true); 
 * PLEASE NOTE: SOLUTIONS USING RECURSION, REGULAR EXPRESSIONS, AND STRREV 
 * BUILT-IN FUNCTION ARE NOT ACCEPTABLE.
 */
function is_palindrome($str) {
    //put your code here

    // create Array of letters
    $letterArr = explode("", $str);

    // create new array that loops through letterArr back to front
    // and appends to new array

    // join reversed array and compare to $str
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Checking Palindromes</title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <h2>Checking Palindromes</h2>
        <p>Enter a string and then click the <strong>Check</strong> button to see the result.</p>
        <form action="palindrome.php" method="get" enctype="text/plain">
            <table>
                <tr>
                    <th>Enter a string: </th>
                    <td><input type="text" name="string" size="20" value="<?php echo $string ?>" required /></td>
                </tr>
                <tr>
                    <th>Result: </th>
                    <td><?php echo $message ?></td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Check" />
        </form>
    </body>
</html>