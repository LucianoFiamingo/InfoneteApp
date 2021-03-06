{{> header}}

<div class="w3-container">

        <div class="container w3-col">


            <h3><b>Publicaciones</b></h3>
            <hr>

            <div class="w3-display-container" style="height:60px;">
                <div class="w3-display-left">
                    <h5><b>Gestión de mis publicaciones</b></h5>
                </div>
                <div class="w3-display-right">
                    <a href="./publicacion/crearPublicacion"
                       class="w3-button w3-blue w3-hover-orange w3-small">Crear Publicacion </a></div>
            </div>

            <table class="w3-table-all w3-bordered w3-small w3-hoverable">
                <tr class="w3-medium">
                    <th>Título</th>
                    <th>Fecha</th>
                    <th>Sección</th>
                    <th class="w3-center">Autorizada</th>
                    <th>Acción</th>
                </tr>
                {{#publicaciones}}
                <tr>
                    <td>{{titulo}}</td>
                    <td>{{fecha}}</td>
                    <td>{{descripcion}}</td>

                    <td class="w3-center">
                        {{#autorizada}}
                            Si
                        {{/autorizada}}
                        {{^autorizada}}
                            No
                        {{/autorizada}}
                    </td>

                    <td>
                        <a href="./publicacion/editarPublicacion?id_publicacion={{id_publicacion}}"
                           class="w3-button w3-blue w3-hover-orange">Editar</a>
                    </td>
                </tr>
                {{/publicaciones}}
            </table>




        </div>

</div>


{{> footer}}