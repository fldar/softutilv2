function consulta(){
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("consulta-search-input");
  filter = input.value.toUpperCase();
  table = document.getElementById("consulta-search-table");
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

$('#deletar-consulta').on('show.bs.modal', function(e) {
    $(this).find('#deleteForm').attr('action', $(e.relatedTarget).data('href'));
});


function copyTextToClipboard(text) {
  var textArea = document.createElement("textarea");

  textArea.style.position = 'fixed';
  textArea.style.top = 0;
  textArea.style.left = 0;
  textArea.style.width = '2em';
  textArea.style.height = '2em';
  textArea.style.padding = 0;
  textArea.style.border = 'none';
  textArea.style.outline = 'none';
  textArea.style.boxShadow = 'none';
  textArea.style.background = 'transparent';
  textArea.value = text;

  document.body.appendChild(textArea);
  textArea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
  } catch (err) {
    console.log('Oops, unable to copy');
    window.prompt("Copie para área de transferência: Ctrl+C e tecle Enter", text);
  }

  document.body.removeChild(textArea);
}

// Teste
var copyTest = document.querySelector('.copiar');
copyTest.addEventListener('click', function(event) {

  copyTextToClipboard('Goku é ladrão e vacilão');
});
