<?php 
$names = array ('true', 'false', '1', '0', '-1', '"1"', 'null', '"php"');

$array = array (true, false, 1, 0, -1, '1', null, 'php');

for ($i = 0; $i <= 7; $i++) {
    $test0[$i] = ($array[0] == $array[$i]) ? 'true' : 'false';
    $test1[$i] = ($array[1] == $array[$i])  ? 'true' : 'false';
    $test2[$i] = ($array[2] == $array[$i])  ? 'true' : 'false';
    $test3[$i] = ($array[3] == $array[$i])  ? 'true' : 'false';
    $test4[$i] = ($array[4] == $array[$i])  ? 'true' : 'false';
    $test5[$i] = ($array[5] == $array[$i])  ? 'true' : 'false';
    $test6[$i] = ($array[6] == $array[$i])  ? 'true' : 'false';
    $test7[$i] = ($array[7] == $array[$i])  ? 'true' : 'false';
}

?>


<div class="table-responsive text-center w-75">
    <caption>Гибкое сравнение в PHP</caption>
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th> </th>
                <th> <?php echo $names[0] ?> </th>
                <th> <?php echo $names[1] ?> </th>
                <th> <?php echo $names[2] ?> </th>
                <th> <?php echo $names[3] ?> </th>
                <th> <?php echo $names[4] ?> </th>
                <th> <?php echo $names[5] ?> </th>
                <th> <?php echo $names[6] ?> </th>
                <th> <?php echo $names[7] ?> </th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="table-light" >
                    <th scope="row"> <?php echo $names[0] ?> </th>
                    <td> <?php echo $test0[0]?> </td>
                    <td> <?php echo $test0[1]?> </td>
                    <td> <?php echo $test0[2]?> </td>
                    <td> <?php echo $test0[3]?> </td>
                    <td> <?php echo $test0[4]?> </td>
                    <td> <?php echo $test0[5]?> </td>
                    <td> <?php echo $test0[6]?> </td>
                    <td> <?php echo $test0[7]?> </td>
                </tr>
                <tr class="table-light">
                    <th scope="row"> <?php echo $names[1] ?> </th>
                    <td> <?php echo $test1[0]?> </td>
                    <td> <?php echo $test1[1]?> </td>
                    <td> <?php echo $test1[2]?> </td>
                    <td> <?php echo $test1[3]?> </td>
                    <td> <?php echo $test1[4]?> </td>
                    <td> <?php echo $test1[5]?> </td>
                    <td> <?php echo $test1[6]?> </td>
                    <td> <?php echo $test1[7]?> </td>
                </tr>
                <tr class="table-light">
                    <th scope="row"> <?php echo $names[2] ?> </th>
                    <td> <?php echo $test2[0]?> </td>
                    <td> <?php echo $test2[1]?> </td>
                    <td> <?php echo $test2[2]?> </td>
                    <td> <?php echo $test2[3]?> </td>
                    <td> <?php echo $test2[4]?> </td>
                    <td> <?php echo $test2[5]?> </td>
                    <td> <?php echo $test2[6]?> </td>
                    <td> <?php echo $test2[7]?> </td>
                </tr>
                <tr class="table-light">
                    <th scope="row"> <?php echo $names[3] ?> </th>
                    <td> <?php echo $test3[0]?> </td>
                    <td> <?php echo $test3[1]?> </td>
                    <td> <?php echo $test3[2]?> </td>
                    <td> <?php echo $test3[3]?> </td>
                    <td> <?php echo $test3[4]?> </td>
                    <td> <?php echo $test3[5]?> </td>
                    <td> <?php echo $test3[6]?> </td>
                    <td> <?php echo $test3[7]?> </td>
                </tr>
                <tr class="table-light">
                    <th scope="row"> <?php echo $names[4] ?> </th>
                    <td> <?php echo $test4[0]?> </td>
                    <td> <?php echo $test4[1]?> </td>
                    <td> <?php echo $test4[2]?> </td>
                    <td> <?php echo $test4[3]?> </td>
                    <td> <?php echo $test4[4]?> </td>
                    <td> <?php echo $test4[5]?> </td>
                    <td> <?php echo $test4[6]?> </td>
                    <td> <?php echo $test4[7]?> </td>
                </tr>
                <tr class="table-light">
                    <th scope="row"> <?php echo $names[5] ?> </th>
                    <td> <?php echo $test5[0]?> </td>
                    <td> <?php echo $test5[1]?> </td>
                    <td> <?php echo $test5[2]?> </td>
                    <td> <?php echo $test5[3]?> </td>
                    <td> <?php echo $test5[4]?> </td>
                    <td> <?php echo $test5[5]?> </td>
                    <td> <?php echo $test5[6]?> </td>
                    <td> <?php echo $test5[7]?> </td>
                </tr>
                <tr class="table-light">
                    <th scope="row"> <?php echo $names[6] ?> </th>
                    <td> <?php echo $test6[0]?> </td>
                    <td> <?php echo $test6[1]?> </td>
                    <td> <?php echo $test6[2]?> </td>
                    <td> <?php echo $test6[3]?> </td>
                    <td> <?php echo $test6[4]?> </td>
                    <td> <?php echo $test6[5]?> </td>
                    <td> <?php echo $test6[6]?> </td>
                    <td> <?php echo $test6[7]?> </td>
                </tr>
                <tr class="table-light">
                    <th scope="row"> <?php echo $names[7] ?> </th>
                    <td> <?php echo $test7[0]?> </td>
                    <td> <?php echo $test7[1]?> </td>
                    <td> <?php echo $test7[2]?> </td>
                    <td> <?php echo $test7[3]?> </td>
                    <td> <?php echo $test7[4]?> </td>
                    <td> <?php echo $test7[5]?> </td>
                    <td> <?php echo $test7[6]?> </td>
                    <td> <?php echo $test7[7]?> </td>
                </tr>
            </tbody>
            <tfoot>
                
            </tfoot>
    </table>
</div>



