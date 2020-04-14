
<?php  
// Store Api Data
// Store Api Data
$data = file_get_contents('https://coronavirus-19-api.herokuapp.com/countries') ;
// Decode Json Data
$coronaData = json_decode($data);

// Show Data By Looping
for ($i=0; $i <=219; $i++) { 
echo "Country: ".$coronaData[$i]->country . '<br>' ;
echo "Total Cases: ".$coronaData[$i]->cases . '<br>' ;
echo "Today Cases: ".$coronaData[$i]->todayCases . '<br>' ;
echo "Total Deaths: ".$coronaData[$i]->deaths . '<br>' ;
echo "Today Deaths: ".$coronaData[$i]->todayDeaths . '<br>' ;
echo "Recovered: ".$coronaData[$i]->recovered . '<br>' ;
echo "Active Cases: ".$coronaData[$i]->active . '<br>' ;
echo "Critical Condition ".$coronaData[$i]->critical . '<br>' ;
echo "Cases Per Million: ".$coronaData[$i]->casesPerOneMillion . '<br>' ;
echo "Deaths Per Million: ".$coronaData[$i]->deathsPerOneMillion . '<br>' ;
echo "Total Tests: ".$coronaData[$i]->totalTests . '<br>' ;
echo "Tests Per Million: ".$coronaData[$i]->testsPerOneMillion . '<br><br><br>' ;
}

echo "<pre>";
print_r($coronaData);

?>