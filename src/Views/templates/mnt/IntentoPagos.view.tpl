 <h1>Intento de Pagos </h1>
<hr>
<table>
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Monto</th>
            <th>fecha Vencimiento</th>
            <th>Estado</th>
         <td><a href="index.php?page=mnt.IntentoPagos.IntentoPago&mode=INS&ipid=0">Nuevo</a></td>
      </tr>
    </thead>
    <tbody>
    {{foreach intentopagos}}
        <tr>   
            <td scope="row">{{ipid}}</td>
            <td>{{fecha}}</td>
            <td><a href="index.php?page=mnt.IntentoPagos.IntentoPago&mode=DSP&ipid={{ipid}}">{{cliente}}</a></td>
            <td>{{monto}}</td>
            <td>{{fecha_vencimiento}}</td>
             <td>{{estado}}</td>
            <td >
                <a type="button"  href="index.php?page=mnt.IntentoPagos.IntentoPago&mode=UPD&ipid={{ipid}}">Editar</a>
                 &nbsp;
                <a type="button" href="index.php?page=mnt.IntentoPagos.IntentoPago&mode=DEL&ipid={{ipid}}">Eliminar</a>
            </td>
        </tr>
    {{endfor intentopagos}}
    </tbody>
</table>
           