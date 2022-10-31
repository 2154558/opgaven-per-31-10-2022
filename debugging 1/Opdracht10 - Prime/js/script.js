//priemgetal

//start with empty array
var numbers = [];

function getRandomNumber(min, max){
    getal = Math.floor(Math.random() * (max - min) + min);
    return getal;
}

function fillArrayWithRandomNumbers(min, max){
    for (let i = 0; i <= 9; i++) {
        randomGetal = getRandomNumber(min, max); 
        if (!numbers.includes(randomGetal)) {
            numbers.push(randomGetal);
        }
        else{
            console.error("number already in array: " + randomGetal + " | skipping...")
        }
    }
    console.log(numbers);
}

function zoekPriemgetallen(){
    console.clear();
    //get input values
    inputVan = Number(Math.abs(document.querySelector("#inputVan").value));
    inputTot = Number(Math.abs(document.querySelector("#inputTot").value));
    fillArrayWithRandomNumbers(inputVan, inputTot);
    calculatePrimes();
    //clear array
    // numbers = [];
}

function calculatePrimes(){
    primeNumberArray = [];
    for (let i = 0; i < numbers.length; i++){
        dividableByArray = [];
        possiblePrime = numbers[i];
        for (let j = 1; j <= 6; j++){
            result = possiblePrime / j
            if(result == Math.floor(result)){
                dividableByArray.push(result);
            }
        }
        console.log(numbers);
        console.log(dividableByArray)
        if (dividableByArray.length == 2){
            //prime number found!
            primeNumberArray.push(possiblePrime);
            console.warn("Getal " + possiblePrime + " is alleen deelbaar door " + dividableByArray[0] + " en " + dividableByArray[1] + " en is dus geen PRIEMgetal!" );
        }
        else{
            console.log("Getal " + possiblePrime + " is deelbaar door " + dividableByArray.toString() + " en is dus een priemgetal!" );
        }   
    }
    console.log(primeNumberArray.length + " primes found: (" + primeNumberArray + ")");
}