$(document).ready(function(){
    $('#data_table').DataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,  
        "searching": false
    });

    $('#data_table').Tabledit({
        deleteButton: true,
        saveButton: true,
        editButton: false,
        columns: {
            identifier: [0, 'Record'],
            editable: [[1, 'Column1'], [2, 'Column2'], [3, 'Column3'], [4, 'Column4'], [5, 'Column5'],
        [6, 'Column6'], [7, 'Column7'], [8, 'Column8'], [9, 'Column9'], [10, 'Column10'], [11, 'Column11'],
        [11, 'Column12'], [12, 'Column13'], [13, 'Column14'], [14, 'Column15'],
        [15, 'Column16'], [16, 'Column17'], [17, 'Column18'], [18, 'Column19'], [19, 'Column20'],
        [20, 'Column21'], [21, 'Column22'], [22, 'Column23'], [23, 'Column24']]
        },
        hideIdentifier: true,
        url: 'live_edit.php'
    });
}); 