
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("chamado");
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const dataTable = document.getElementById("dataTable").getElementsByTagName("tbody")[0];

    form.addEventListener("submit", function(event) {
        event.preventDefault();
        addData(nameInput.value, emailInput.value);
        form.reset();
    });

    function addData(name, email) {
        const newRow = dataTable.insertRow();

        const nameCell = newRow.insertCell(0);
        const emailCell = newRow.insertCell(1);
        const actionsCell = newRow.insertCell(2);

        nameCell.textContent = name;
        emailCell.textContent = email;

        const editButton = document.createElement("button");
        editButton.textContent = "Editar";
        editButton.addEventListener("click", function() {
            editData(newRow, name, email);
        });

        const deleteButton = document.createElement("button");
        deleteButton.textContent = "Excluir";
        deleteButton.addEventListener("click", function() {
            deleteData(newRow);
        });

        actionsCell.appendChild(editButton);
        actionsCell.appendChild(deleteButton);
    }

    function editData(row, name, email) {
        const newName = prompt("Editar nome:", name);
        const newEmail = prompt("Editar email:", email);

        if (newName !== null) {
            row.cells[0].textContent = newName;
        }
        if (newEmail !== null) {
            row.cells[1].textContent = newEmail;
        }
    }

    function deleteData(row) {
        dataTable.removeChild(row);
    }
});
