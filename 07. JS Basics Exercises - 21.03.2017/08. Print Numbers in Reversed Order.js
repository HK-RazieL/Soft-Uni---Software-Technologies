function numbers(array){
    let b = [];
    for (let i = 0; i < array.length; i++){
        let a = Number(array[i]);
        b[i] = a;
    }
    b.reverse();
    for(let j = 0; j < b.length; j++) {
        console.log(b[j])
    }
}