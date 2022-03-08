<html>
    <head>

    </head>
    <body>
        
        <th>id</th>
        <th>nama</th>
        <th>email</th>
        <th>pass</th>

        <?php foreach ($data_tes->result_array() as $row){ ?>    
        <tr>
            <td> Nama : <?php echo $row['vFullName'] ?></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <?php } ?>
    </body>
</html>