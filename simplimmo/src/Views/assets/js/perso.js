
function showDiv(select) {
    document.getElementById('house').classList.add('hidden');
    document.getElementById('appartment').classList.add('hidden');

    if (select.value == 'Maison') {
        document.getElementById('house').classList.remove('hidden');
    } else if (select.value == 'Appartement') {
        document.getElementById('appartment').classList.remove('hidden');
    }
}



function toggleDiv(checkboxId, divId) {
    var checkbox = document.getElementById(checkboxId);
    var div = document.getElementById(divId);
    if (checkbox.checked) {
        div.style.display = 'block';
    } else {
        div.style.display = 'none';
    }
}