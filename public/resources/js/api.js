// // const url = 'https://sudoku-generator3.p.rapidapi.com/generate';
// // const url = 'https://sudoku-api.vercel.app/api/dosuku';
// const url = 'https://sudoku-api.vercel.app/api/dosuku?query={newboard(limit:5){grids{value,solution,difficulty},results,message}}';
// const options = {
// 	method: 'POST',
// 	headers: {
// 		'content-type': 'application/json',
// 		'X-RapidAPI-Key': 'SIGN-UP-FOR-KEY',
// 		'X-RapidAPI-Host': 'sudoku-generator3.p.rapidapi.com'
// 	},
// 	body: {
// 		difficulty: 'easy',
// 		spaces: '.',
// 		candidates: true,
// 		list: false,
// 		grid: true
// 	}
// };

// try {
// 	// const response = await fetch(url, options);
// 	const response = await fetch(url);
// 	const result = await response.json();
// 	console.log(result);
// } catch (error) {
// 	console.error(error);
// }