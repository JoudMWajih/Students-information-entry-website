function toggleStatus(id) {
    let formData = new FormData();
    formData.append("id", id);

    fetch("toggle.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("status-" + id).innerText = data;
    });
}
