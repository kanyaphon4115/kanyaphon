const matches = (obj, source) =>
Object.keys(source).every(key => obj.hasOwnProperty(key) && obj[key] === source[key]);
console.log(matches({ age: 20, hair: 'short', arms: true }, { hair: 'short', arms: true })); 
console.log(matches({ hair: 'short', arms: true }, { age: 20, hair: 'short', arms: true })); 
console.log(matches({ hair: 'short', arms: true }, { age: 13, hair: 'short', arms: true })); 
