const page = Math.ceil(5/4);
console.log(typeof([...Array(page).keys()]))
const thanh =[5, 6, 10 , 'thanh'];
const iterator = thanh.keys()
console.log(typeof(iterator))
// for (let key of iterator) {
//     console.log(key);
// }