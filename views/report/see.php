<h2>Usuarios Registrados</h2>


<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE PROPIETARIO</th>
        <th>NOMBRE CONDUCTOR</th>
        <th>PLACA</th>
        <th>MARCA</th>
    </tr>
    <?php while($report= $view_report->fetch_object()):?>
        <tr>
            <td><?=$report->Id;?></td>
            <td><?=$report->Fullname_p;?></td>
            <td><?=$report->Fullname_c;?></td>
            <td><?=$report->Placa;?></td>
            <td><?=$report->Marca;?></td>
        </tr>
    <?php endwhile;?>
</table>