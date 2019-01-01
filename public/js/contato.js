function contato(){
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("contato-search-input");
  filter = input.value.toUpperCase();
  table = document.getElementById("contato-search-table");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

$('#deletar-contato').on('show.bs.modal', function(e) {
    $(this).find('#deleteForm').attr('action', $(e.relatedTarget).data('href'));
});
