function showIdProofTextBox() {
    var idProofSelect = document.getElementById("id_proof");
    var idProofTextBox = document.getElementById("id_proof_textbox");
    var idProofNumberInput = document.getElementById("id_proof_number");

    if (idProofSelect.value === "none") {
        idProofTextBox.style.display = "none";
        idProofNumberInput.value = "";
    } else {
        idProofTextBox.style.display = "block";
    }
}