var table = document.getElementById("Tabla_consulta");
var rows = table.getElementsByTagName("tr");
for (i = 2; i < rows.length; i++) {
    row = table.rows[i];
    row.onclick = function () {
        var Id = this.getElementsByTagName("td")[1].innerHTML;
        document.getElementById("Id").value = Id;

        var Codigo = this.getElementsByTagName("td")[1].innerHTML;
        document.getElementById("Codigo").value = Codigo;

        var Tipo_Identificacion = this.getElementsByTagName("td")[0].innerHTML;
        switch (Tipo_Identificacion) {
            case 'CC' :
                document.querySelector('#1').selected;
                break;
            case 'CE' :
                document.querySelector('#2').selected;
                break;
        }
        document.getElementById("Id_Tipo_Identificacion").value = Tipo_Identificacion;

        var Numero_Documento = this.getElementsByTagName("td")[1].innerHTML;
        document.getElementById("nombre").value = Numero_Documento;

        var Id_Tipo_Usuario = this.getElementsByTagName("td")[3].innerHTML;
        document.getElementById("usernombre").value = Id_Tipo_Usuario;

        var Nombres = this.getElementsByTagName("td")[5].innerHTML;
        document.getElementById("selectdocumento").value = Nombres;

        var Apellidos = this.getElementsByTagName("td")[6].innerHTML;
        document.getElementById("documento").value = Apellidos;

        var Sexo = this.getElementsByTagName("td")[7].innerHTML;
        document.getElementById("selectformacion").value = Sexo;

        var Direccion = this.getElementsByTagName("td")[8].innerHTML;
        document.getElementById("titulo").value = Direccion;

        var Telefono = this.getElementsByTagName("td")[9].innerHTML;
        document.getElementById("Institucion").value = Telefono;

        var Celular1 = this.getElementsByTagName("td")[10].innerHTML;
        document.getElementById("Anualidad").value = Celular1;

        var Celular2 = this.getElementsByTagName("td")[11].innerHTML;
        document.getElementById("Tel").value = Celular2;

        var Correo_Electronico = this.getElementsByTagName("td")[12].innerHTML;
        document.getElementById("correo").value = Correo_Electronico;

        var Clave = this.getElementsByTagName("td")[13].innerHTML;
        document.getElementById("direccion").value = Clave;
    };
}