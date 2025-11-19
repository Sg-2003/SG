const numbers = [1, 2, 3, 4, 5];

const result = numbers.reduce((accumulator, current) => {
 return accumulator + (current % 2 === 0 ? current : 0);
}, 0);

console.log(result);