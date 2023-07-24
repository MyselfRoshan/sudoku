const board = document.querySelector(".sudoku-board");
const rows = document.querySelectorAll(".sudoku-board .row");
const cells = document.querySelectorAll(".sudoku-board .cell");

cells.forEach((cell, key) => {
  const aciveCellIndex = key % rows.length;
  const activeRowCells = cell.parentElement.children;

  function addActiveLowClass(array) {
    for (let index = 0; index < array.length; index++) {
      const element = array[index];
      const crossCells = element.children[aciveCellIndex] ?? element;
      if (!crossCells.getAttribute("class").includes("active"))
        crossCells.classList.add("active-low");
    }
  }

  cell.addEventListener("click", () => {
    cells.forEach((activeCell) => {
      activeCell.classList.remove("active");
      activeCell.classList.remove("active-low");
    });
    cell.classList.toggle("active");
    addActiveLowClass(activeRowCells);
    addActiveLowClass(rows);
  });
});
