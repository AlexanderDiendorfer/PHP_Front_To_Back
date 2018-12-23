<?php
    #substr()
    # Return a portion of a string
    // $output = substr('Hello', 1, 3);
    // $output = substr('Hello', -2);
    // echo $output;

    # strlen()
    # Returns the length of a string
    // $output = strlen('Hello World');
    // echo $output;

    # strpos()
    # Finds the position of the first occurence of a sub string
    // $output = strpos('Hello World', 'o');
    // echo $output;

    # strrpos()
    # Finds the position of the last occurence of a sub string
    // $output = strrpos('Hello World', 'o');
    // echo $output;

    # trim()
    # Strips whitespace
    // $text = 'Hello World               ';
    // var_dump($text);

    // $trimmed = trim($text);
    // var_dump($trimmed);

    # strtoupper
    # Makes everything uppercase
    // $output = strtoupper('Hello World');
    // echo $output;

    # strtolower
    # Makes everything lowercase
    // $output = strtolower('Hello World');
    // echo $output;

    # ucwords()
    # Capatalize every word
    // $output = ucwords('hello world');
    // echo $output;

    # str_replace()
    # Replace all occurences of a search string with a replacement
    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    # is_string()
    # Check if string
    // $val = '22';
    // $output = is_string($val);
    // echo $output;

    // $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

    // foreach ($values as $value) {
    //     if (is_string($value)) {
    //         echo "{$value} is a string<br>";
    //     } else {
    //         echo "{$value} is not a string<br>";
    //     }
    // }

    # gzcompress()
    # Compress a string

    // $string = 
    // "Lorem ipsum dolor sit amet consectetur
    // adipiscing elit aenean diam, eros tincidunt 
    // maecenas nunc habitasse natoque elementum bibendum.
    //  Fusce ultricies sed volutpat egestas mauris mollis 
    //  sociosqu semper interdum habitant venenatis, 
    //  dignissim lacus orci aliquet a nunc et iaculis 
    //  molestie convallis id, placerat leo feugiat nisi 
    //  torquent rutrum dictumst posuere mus hac. 
    //  Mus cursus tincidunt lacinia sociis ante nostra 
    //  aliquam vivamus, nisi parturient class netus venenatis 
    //  bibendum curabitur, viverra etiam tristique neque inceptos odio sodales.

    // Lectus facilisis metus potenti ultrices tempus vulputate a,
    // sem quam dis ultricies natoque nisl vehicula, nisi rutrum
    // enim platea praesent ad. Vulputate odio erat suspendisse 
    // leo etiam quisque semper, tempus torquent justo platea 
    // accumsan auctor ac eros, quam dui viverra iaculis varius dictumst.
    // Enim aliquet porta lacus class congue eleifend luctus,
    // proin curae rhoncus interdum tellus cum fusce,
    // senectus torquent magnis ultrices in urna.";

    // $compressed = gzcompress($string);
    // echo $compressed;

    // $original = gzuncompress($compressed);
    // echo $original;
?>