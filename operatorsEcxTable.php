<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Func Table</title>
    <style>
        * {
            margin: 0;
            padding: 0;

        }

        body {
            font-size: 20px;
            padding: 30px 60px;
            margin: 0;
            box-sizing: border-box;
        }

        h2 {
            font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
        }

        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            border-radius: 10px 10px 0 0;
        }

        .styled-table thead tr {
            background-color: #980089;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 20px;
            max-width: 600px;
        }

        .styled-table td {
            border: 1px solid #dddddd;
        }

        .styled-table th:nth-child(1) {
            border-radius: 10px 0 0 0;
        }

        .styled-table th:nth-child(2) {
            border-radius: 0 10px 0 0;
        }

        /* .styled-table tbody tr {
			 border-bottom: 1px solid #dddddd;
		} */

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #980089;
        }
    </style>
</head>

<body>
    <!-- TABLE -->
    <table class="styled-table">
        <thead>
            <tr>
                <th>
                    <h2>Task</h2>
                </th>
                <th>
                    <h2>Output</h2>
                </th>
            </tr>
        <tbody>
            <!-- ROW -->
            <tr>
                <td>Check if year is a leap year or not</td>
                <td>
                    <?php
                    function yearCheck($year)
                    {
                        if ($year % 400 == 0)
                            echo ($year . " is a leap year");
                        if ($year % 4 == 0)
                            echo ($year . " is a leap year");
                        else if ($year % 100 == 0)
                            echo ($year . " is not a leap year");
                        else
                            echo ($year . " is not a leap year");
                    }
                    yearCheck(2020);
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Tell the season based on the temp</td>
                <td>
                    <?php
                    function tempCheck($temp)
                    {
                        if ($temp < 20) {
                            echo ("The Temp is $temp, It is Winter");
                        } else {
                            echo ("The Temp is $temp, It is Summer");
                        }
                    }
                    tempCheck(30);
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Sum up two integers and *3 if they are equal</td>
                <td>
                    <?php
                    function sumUp($no1, $no2)
                    {
                        if ($no1 === $no2) {
                            echo ($no1 * 3);
                        } else {
                            echo ($no1 + $no2);
                        }
                    }
                    sumUp(20, 20);
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Get the absolute difference & If it is > 100, return 3* the difference</td>
                <td>
                    <?php
                    function absoluteDiff($number)
                    {
                        if ($number > 100) {
                            echo ($number - 100) * 3;
                        } else {
                            echo (100 - $number);
                        }
                    }
                    absoluteDiff(220);
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Check two integers, and return true if 30 is one of them or its their sum</td>
                <td>
                    <?php
                    function func1($no1, $no2)
                    {
                        if ($no1 == 30 || $no2 == 30 || ($no1 + $no2) == 30) {
                            echo 'TRUE';
                        } else {
                            echo 'FALSE';
                        }
                    }
                    func1(60, 65);
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Check The String</td>
                <td>
                    <?php
                    function test($x)
                    {
                        if (abs($x - 100) <= 10 || abs($x - 200) <= 10) {
                            echo "TRUE";
                        } else {
                            echo "FALSE";
                        }
                    }

                    test(103);
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Check if the given number is a multiple of 3 or 7</td>
                <td>
                    <?php
                    function examine($x)
                    {
                        if (($x % 3) == 0 && ($x % 7) == 0) {
                            echo $x . " is a multiple of 3 & 7";
                        } elseif (($x % 3) == 0) {
                            echo $x . " is a multiple of 3";
                        } elseif (($x % 7) == 0) {
                            echo $x . " is a multiple of 7";
                        } else {
                            echo $x . " is not a multiple of 3 nor 7";
                        }
                    }

                    examine(21);
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Check wheather "if" is in the string, if not add it to the string</td>
                <td>
                    <?php
                    $orginalString = "the weather is hot";
                    // Test if string contains the word 
                    if (strpos($orginalString, "7") !== false/*Note that the use of !== false is deliberate (neither != false nor === true will return the desired result); strpos() returns either the offset at which the needle string begins in the haystack string*/) {
                        echo "$orginalString";
                    } else {
                        $newstr = substr_replace($orginalString, "<b>if </b> ", 0, 0);
                        echo $newstr;
                    }
                    // $orginalString = "the weather is hot";
                    // $newstr = substr_replace($orginalString, "<b>if</b> ", 0, 0);
                    // echo $newstr;
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Remove the character in a specific position from a string</td>
                <td>
                    <?php
                    $url1 = "www.example.com/public_html/index.php";
                    $removedChar = substr($url1, 5, 1);
                    $newstr1 = str_replace($removedChar, "", $url1);
                    echo $newstr1;
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Check if either integers are in a certain range</td>
                <td>
                    <?php
                    function checkInt($num1, $num2)
                    {
                        if ($num1 >= 100 && $num1 <= 200 /*range("100", "200")-aparently range is for arrays*/ || $num2 >= 100 && $num2 <= 200 /*range("100", "200")-aparently range is for arrays*/) {
                            echo "One or both the numbers are in range";
                        } else {
                            echo "none of the numbers are in range";
                        }
                    }
                    checkInt(30, 50)
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Get the biggest number of three integers</td>
                <td>
                    <?php
                    function test1($x, $y, $z)
                    {
                        $max = max($x, max($y, $z));
                        echo $max;
                    }
                    echo test1(5, 3, 9) . " Is the largest of the three integers";
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Closest number to 100</td>
                <td>
                    <?php
                    function test2($x, $y)
                    {
                        $n = 100;
                        $val = abs($x - $n);
                        $val2 = abs($y - $n);
                        if ($val == $val2) {
                            echo "0";
                        } elseif ($val < $val2) {
                            echo $x;
                        } else {
                            echo $y;
                        }
                    }
                    test2(5500, 2260)
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Take in 2 int & return true if one of them
                    is 5, their sum, or difference between them is 5.</td>
                <td>
                    <?php
                    function test3($x, $y)
                    {
                        // $n = 100;
                        // $val = abs($x - $n);
                        // $val2 = abs($y - $n);
                        if ($x == 5 || $y == 5 || ($x + $y) == 5 || abs($x - $y) == 5) {
                            echo "True";
                        } else {
                            echo "False";
                        }
                    }
                    test3(0, 200)
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
        </tbody>
    </table>
</body>

</html>