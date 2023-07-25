const url = "https://sudoku-api.vercel.app/api/dosuku";

const query = "{newboard(limit:1){grids{value,solution,difficulty}}}";
try {
  const response = await fetch(`${url}?query=${query}`);
  const result = await response.json();
  console.log(result);
} catch (error) {
  console.error(error);
}
