<?php

echo "<h2>Yahallo!</h2>";

// ============================================
// ============================================

echo "<hr>";

$age = 21.0;
if (is_int($age))
    echo "$age is an integer.";
else
    echo "$age is not an integer.";

// ============================================
// ============================================

echo "<hr>";

if ($age < 18)
    echo "Access denied.";
else
    echo "Registration successfully completed.";

// ============================================
// ============================================

echo "<hr>";

for ($i = 50; $i > 0; $i--)
    echo $i . " ";

// ============================================
// ============================================

echo "<hr>";

function welcome(): void {
    echo "Welcome to the PHP world.";
}

welcome();

// ============================================
// ============================================

echo "<hr>";

function randomNumbersGenerator(): array {
    $numbers = array();
    for ($i = 0; $i < 10; $i++)
        $numbers[$i] = rand(1, 100);
    return $numbers;
}

$randomNumbers = randomNumbersGenerator();

echo "The ten generated random numbers are: ";
for ($i = 0; $i < 10; $i++)
    echo $randomNumbers[$i] . " ";
echo "<br>";
echo "The maximum of these is: " . max($randomNumbers) . ".";
echo "<br>";
echo "The minimum of these is: " . min($randomNumbers) . ".";

// ============================================
// ============================================

echo "<hr>";

function operate(float $first, float $second, $operator) : float {
    return match ($operator) {
        '+' => $first + $second,
        '-' => $first - $second,
        '*' => $first * $second,
        '/' => $first / $second,
        '%' => $first % $second,
        default => throw new \http\Exception\InvalidArgumentException(),
    };
}

echo "11 + 2 = " . operate(11, 2, "+") . "<br>";
echo "11 - 2 = " . operate(11, 2, "-") . "<br>";
echo "11 * 2 = " . operate(11, 2, "*") . "<br>";
echo "11 / 2 = " . operate(11, 2, "/") . "<br>";
echo "11 % 2 = " . operate(11, 2, "%") . "<br>";
//echo "11 % 2 = " . operate(11, 2, "a") . "<br>";

// ============================================
// ============================================

echo "<hr>";

$colors = array(
    1 => "red",
    2 => "green",
    3 => "blue",
    4 => "gray",
    5 => "yellow"
);

echo "Available colors";
//echo "<ul>";
//for ($i = 1; $i < 6; $i++)
//    echo "<li>$colors[$i]</li>";
//echo "</ul>";

echo "<ul>";
foreach ($colors as $color)
    echo "<li>$color</li>";
echo "</ul>";

// ============================================
// ============================================

echo "<hr>";

$randomNumber = rand(1,5);

echo "
    <style>
        body { 
            font-family: Arial,serif;
            background-color: $colors[$randomNumber];
        }
    </style>
";

echo "Refresh to change the background color randomly.";