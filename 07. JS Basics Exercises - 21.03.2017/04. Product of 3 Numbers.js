function solve(arr){
    let a = Number(arr[0]);
    let b = Number(arr[1]);
    let c = Number(arr[2]);
    let counter = 0;

    if (a < 0) {
        counter++;
    }
    if (b < 0) {
        counter++;
    }
    if (c < 0) {
        counter++;
    }
    if (a === 0 || b === 0 || c === 0 || counter === 2 || counter === 0) {
        console.log("Positive");
    }
    else
    {
        console.log('Negative')
    }
}