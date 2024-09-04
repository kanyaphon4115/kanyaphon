const num = n =>
   [...`${n}`]
   .map(i => parseInt(i));
console.log(num(123));
console.log(num(1230));
