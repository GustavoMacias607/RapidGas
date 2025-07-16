
function opcion(op) {

    let url = "";
    let json = "";
    var funcion;
    switch (op) {
        case "usuarios":
            url = "Usuarios/addUsuariosFrm.php";
            //ncion = GetUsuario;
            break;
        default: alert("Opción incorrecta"); return;
    }

    $.post(url, json, (responseText, status) => {
        try {
            console.log(responseText);

            if (status == "success") {
                document.getElementById("mainContent").innerHTML = responseText;
                rowsPerPage = 10;
                EstatusEntidades();
                funcion();

            } else {
                throw e = status;
            }
        } catch (error) {
            console.log("Error: " + error);
        }
    });
}

