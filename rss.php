<?php

    $rss = '<?xml version="1.0" encoding="UTF-8"?>';
    $rss .= '<rss version="2.0">';
    $rss .= '<channel>';

    $connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820841") or die (mysqli_error($connect));
    $sql = "SELECT * FROM tbl_shoes ORDER BY shoe_ID ASC;";
    $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
    while($records= mysqli_fetch_assoc($query)) {
        extract ($records);

        $rss .= '<shoes>';
        $shoe_Name1 .= '<name>' . $shoe_Name . '</name>';
        $shoe_Brand1 .= '<brand>' . $shoe_Brand . '</brand>';
        $shoe_Type1 .= '<type>' . $shoe_Type . '</type>';
        $shoe_Cost1 .= '<cost>' . $shoe_Cost . '</cost>';
        $rss .= '</shoes>';
    }

    $rss .= '</channel>';
    $rss .= '</rss>';

    echo $rss;
?>

    

