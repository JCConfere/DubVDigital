$(document).ready(function() {

// Select color input
let colorInput = $('#colorPicker');
// Select size input
let inputWidth = $('#input_width');
let inputHeight = $('#input_height');
// Select table
let table = document.getElementById('pixel_canvas');

// When size is submitted by the user, call makeGrid()
$('#sizePicker').on('submit', function makeGrid() {
    // Remove all children of the old table
    while (table.firstChild)
        table.removeChild(table.firstChild);

    // Add cells to table
    for (let i = 0; i < inputHeight.val(); i++) {
        let row = document.createElement('tr');
        for (let j = 0; j < inputWidth.val(); j++) {
            let cell = document.createElement('td');
            row.appendChild(cell);
        }
        table.appendChild(row);
    }

    // Don't reload the page
    return false;
});

// When a cell is clicked, call colorCell
$('#pixel_canvas').on('click', 'td', function colorCell(evt) {
    let background = (evt.target).style.backgroundColor;
    let isWhiteBackground = !background || background === "white" || background === "rgb(255, 255, 255)" ||
        background === "#fff" || background ==="#fffff";
    let color =   colorInput.val() ;
    $(evt.target).css("background-color", color);
});

});
