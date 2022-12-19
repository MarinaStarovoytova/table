<?php

    $truthTable_A = array (0, 0, 1, 1);
    $truthTable_B = array (0, 1, 0, 1);

    for ($i = 0; $i <= 3; $i++) {
        // логическое отрицание
        $negation_A[$i] = (!$truthTable_A[$i]) ? '1' : '0';
        // логическое ИЛИ
        $or[$i] = ($truthTable_A[$i] || $truthTable_B[$i]) ? '1' : '0';
        // логическое И
        $and[$i] = ($truthTable_A[$i] && $truthTable_B[$i]) ? '1' : '0';
        // исключающее или
        $exclusiveOr[$i] = ($truthTable_A[$i] xor $truthTable_B[$i]) ? '1' : '0';
    }

?>



 <div class="table-responsive text-center w-75">
        <caption>Таблица истинности PHP</caption>
        <table class="table table-bordered table-hover">
            <thead class="table-light ">
                <tr>
                    <th>A</th>
                    <th>B</th>
                    <th>!A</th>
                    <th>A || B</th>
                    <th>A && B</th>
                    <th>A xor B</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr class="table-light" >
                        <td> <?php echo $truthTable_A[0] ?> </td>
                        <td> <?php echo $truthTable_B[0] ?> </td>
                        <td> <?php echo $negation_A[0] ?> </td>
                        <td> <?php echo $or[0] ?> </td>
                        <td> <?php echo $and[0] ?> </td>
                        <td> <?php echo $exclusiveOr[0] ?> </td>
                    </tr>
                    <tr class="table-light">
                        <td> <?php echo $truthTable_A[1] ?> </td>
                        <td> <?php echo $truthTable_B[1] ?> </td>
                        <td> <?php echo $negation_A[1] ?> </td>
                        <td> <?php echo $or[1] ?> </td>
                        <td> <?php echo $and[1] ?> </td>
                        <td> <?php echo $exclusiveOr[1] ?> </td>
                    </tr>
                    <tr class="table-light">
                        <td> <?php echo $truthTable_A[2] ?> </td>
                        <td> <?php echo $truthTable_B[2] ?> </td>
                        <td> <?php echo $negation_A[2] ?> </td>
                        <td> <?php echo $or[2] ?> </td>
                        <td> <?php echo $and[2] ?> </td>
                        <td> <?php echo $exclusiveOr[2] ?> </td>
                    </tr>
                    <tr class="table-light">
                        <td> <?php echo $truthTable_A[3] ?> </td>
                        <td> <?php echo $truthTable_B[3] ?> </td>
                        <td> <?php echo $negation_A[3] ?> </td>
                        <td> <?php echo $or[3] ?> </td>
                        <td> <?php echo $and[3] ?> </td>
                        <td> <?php echo $exclusiveOr[3] ?> </td>
                    </tr>
                </tbody>
                <tfoot></tfoot>
        </table>
    </div>