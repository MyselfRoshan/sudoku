const btnShowSolution = document.querySelector("#show-solution");
const cellInputs = document.querySelectorAll(".sudoku-board input");
const emptyCellInputs = document.querySelectorAll(
  ".sudoku-board .cell-input-empty"
);
emptyCellInputs.forEach((emptyCellInput) => {
  emptyCellInput.addEventListener("click", () => {
    cellInputs.forEach((prevActiveCellInput) => {
      prevActiveCellInput.classList.remove("active");
      prevActiveCellInput.classList.remove("active-cross");
    });
    const activeRow = emptyCellInput.getAttribute("data-row");
    const activeCol = emptyCellInput.getAttribute("data-col");
    cellInputs.forEach((activeCrossInput) => {
      activeCrossInput.getAttribute("data-row") === activeRow ||
      activeCrossInput.getAttribute("data-col") === activeCol
        ? activeCrossInput.classList.toggle("active-cross")
        : null;
    });
    emptyCellInput.classList.remove("active-cross");
    emptyCellInput.classList.toggle("active");
  });
});

function onlyNumber(e) {
  let ASCIICode = e.which ?? e.keyCode;
  // Only number from 1 - 9 is allowed
  if (ASCIICode < 49 || ASCIICode > 58) return false;
  return true;
}
btnShowSolution.addEventListener("click", () => {
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "board", true);
  xmlhttp.send();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
    }
  };
});
