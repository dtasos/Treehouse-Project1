<?php // PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

//Creating a multidimensional array with one quote
$quotes = array(
    array("quote" => "If we did the things we are capable of, we would astound ourselves.",
            "source" => "Thomas Edison",
            "citation" => "Times",
            "year" => "1856",
            "tags" => array("engineer", "personal","human capabilities"))    
);

//Adding five quotes in the array
$quotes[] = array("quote" => "There is no man living that can not do more than he thinks he can.", 
                    "source" => "Henry Ford",
                    "tags" => array("entrepreneur"));

$quotes[] = array("quote" => "Never give up on something that you can’t go a day without thinking about.",
                    "source" => "Winston Churchill",
                    "tags" => "politician", 
                    "tags" => array("personal", "everyday", "motivational"));

$quotes[] = array("quote" => "It is never too late to be what you might have been.", 
                    "source" => "George Eliot");
$quotes[] = array("quote" => "All our dreams can come true–if we have the courage to pursue them.", 
                    "source" => "Walt Disney");
$quotes[] = array("quote" => "Your time is limited, so don’t waste it living someone else’s life.",
                    "source" => "Steve Jobs",
                    "citation" => "Apple.com",
                    "year" => "2013");


//Select a random quote and return it
function getRandomQuote($array) {
    //Count the elements in the array
    $counter = count($array);
    //Making a random number from 0-5
    $randomizer = rand(1,$counter)-1;
    //Return a random quote
    return $array[$randomizer];

}


//Get a random quote and print the HTML result
function printQuote($array) {
    //Store a random quote in a variable
    $randomArr = getRandomQuote($array);
    $result = '<p class="quote">' . $randomArr["quote"] . '</p>' ;
    $result .= '<p class="source">' . $randomArr["source"] ;
    if(isset($randomArr["citation"])){
        $result .= '<span class="citation">' . $randomArr["citation"] . '</span>';
    }
    if(isset($randomArr["year"])){
            $result .= '<span class="year">' . $randomArr["year"] . '</span>';
    }

    if(isset($randomArr["tags"])){
        foreach ($randomArr["tags"] as  $tag){
            
            $result .= '<p class="tags">' . $tag . '</p>';
        }
    }
    $result .= '</p>';

    //Print the result
    echo $result;
}


?>