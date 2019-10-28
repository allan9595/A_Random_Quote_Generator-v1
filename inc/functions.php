<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
    $quotes = [
        [
            'quote' => 'Your most unhappy customers are your greatest source of learning.',
            'source' => 'Bill Gates'
        ],
        [
            'quote' => 'Commenting your code is like cleaning your bathroom — you never want to do it, but it really does create a more pleasant experience for you and your guests.',
            'source' => 'Ryan Campbell'
        ],
        [
            'quote' => 'Before man reaches the moon, mail will be delivered within hours from New York to California, to Britain, to India or Australia.',
            'source' => 'Arthur Summerfield',
            'citation' =>  'United States Post',
            'year' =>  1959
        ],
        [
            'quote' => 'The best way to predict the future is to implement it.',
            'source' => 'David Heinemeier Hansson'
        ],
        [
            'quote' => 'In a room full of top software designers, if two agree on the same thing, that’s a majority.',
            'source' => 'Bill Curtis'
        ],
        [
            'quote' => "Don't cry because it's over, smile because it happened.",
            'source' => 'Dr. Seuss',
            'tags' => '#cry, crying, experience, happiness, joy, life, misattributed-dr-seuss, optimism, sadness, smile, smiling'
        ]
    ];
    
    // Create the getRandomQuuote function and name it getRandomQuote
    function getRandomQuote($quotes){
        return $quotes[random_int(0,5)];
    }    
    
    
    function printQuote($quotes){
        $selectedQuote = getRandomQuote($quotes); 
        //var_dump(getRandomQuote($quotes));
        echo "<p class='quote'>" . $selectedQuote['quote'] . '</p>';
        echo "<p class='source'>" . $selectedQuote['source'] ;

        if(isset($selectedQuote['citation'])){
            echo "<span class='citation'>" . $selectedQuote['citation'] . "</span>";
        }

        if(isset($selectedQuote['year'])){
            echo "<span class='year'>" . $selectedQuote['year'] . "</span>";
        }

        if(isset($selectedQuote['tags'])){
            echo "<span class='tags'>" . $selectedQuote['tags'] . "</span>";
        }
        echo "</p>";
    }
    // Create the printQuote funtion and name it printQuote
?>


