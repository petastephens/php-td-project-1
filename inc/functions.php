<?php
// Array to hold quotes 
$quotes = [
    1 => [
        'quote' => "I feel the need... the need for speed.",
        'source' => "Maverick and Goose",
        'citation' => "Top Gun",
        'year' => 1986
    ],
    2 => [
        'quote' => "I restore myself when I'm alone. A career is born in public — talent in privacy.",
        'source' => "Marilyn Monroe",
        'citation' => "Ms. magazine",
        'year' => 1972
    ],
    3 => [
        'quote' => "You're off to great places. Today is your day! Your mountain is waiting. So... get on your way.",
        'source' => "Dr. Seuss",
        'citation' => "Oh, the Places You'll Go!",
        'year' => 1990
    ],
    4 => [
        'quote' => "He who has a Why? in life can tolerate almost any How?",
        'source' => "Friedrich Nietzsche",
        'citation' => "Twilight of the Idols",
        'year' => 1888
    ],
    5 => [
        'quote' => "In every job that must be done, there is an element of fun. You find the fun and snap! The job's a game.",
        'source' => "Mary Poppins",
        'year' => 1964
    ],
    6 => [
        'quote' => "Life is what happens while you are busy making other plans.",
        'source' => "John Lennon",
    ]
];

// Function to return a random array element
function getRandomQuote($array)
{
    $randNumber = rand(1, count($array));
    return $array[$randNumber];
}

// Function to get a random quote then format for display
function printQuote($array)
{
    $quote = getRandomQuote($array);
    $quoteDisplay = "";
    foreach ($quote as $key => $value) {
        if ($key === 'quote') {
            $this_quote = $value;
            $quoteDisplay = "<p class=\"quote\">$this_quote</p>";
        }
        if ($key === 'source') {
            $this_source = $value;
            $quoteDisplay .= "<p class=\"source\">$this_source";
        }
        if ($key === 'citation') {
            $this_citation = $value;
            $quoteDisplay .= "<span class=\"citation\">$this_citation</span>";
        }
        if ($key === 'year') {
            $this_year = $value;
            $quoteDisplay .= "<span class=\"citation\">$this_year</span>";
        }
    }
    $quoteDisplay .= "</p>";
    echo $quoteDisplay;
}
