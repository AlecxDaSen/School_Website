<?php

require "connection.php";

// echo($_GET["st"]);
// echo($_GET["search"]);

if (isset($_GET["st"]) && isset($_GET["search"])) {
    $sort = $_GET["st"];
    $search = $_GET["search"];
}

$query = "SELECT * FROM `news` INNER JOIN `news_images` ON `news`.`news_id`=`news_images`.`news_news_id` ";

if (!empty($search)) {

    $query .= " WHERE `title` LIKE '%" . $search . "%' ";
}

if ($sort == 1  && !empty($search)) {

    $query .= " AND  `status_sid`= '1' ";
} else if ($sort == 2 && !empty($search)) {
    $query .= " AND `status_sid`= '2' ";
} else if ($sort == 1 && empty($search)) {
    $query .= " WHERE `status_sid`= '1' ";
} else if ($sort == 2 && empty($search)) {
    $query .= " WHERE `status_sid`= '2' ";
} else if ($sort == 3) {

    $query .= " ORDER BY `datetime` DESC ";
} else if ($sort == 4) {
    $query .= " ORDER BY `datetime` ASC ";
}

$rs = Database::search($query);

// echo($query);


function limitWords($desc, $limit)
{
    $words = explode(" ", $desc);

    if (count($words) <= $limit) {
        return $desc;
    }
    return implode(' ', array_slice($words, 0, $limit)) . "...";
}

if ($rs->num_rows != 0) {
    for ($s = 0; $s < $rs->num_rows; $s++) {

        $rsData = $rs->fetch_assoc();

        $news = new stdClass();
        $news->news_id = $rsData['news_id'];
        $news->title = $rsData['title'];
        $news->description = $rsData['description'];
        $news->date = $rsData['datetime'];
        $news->img = $rsData['nimg_path'];

        $jsonNews = json_encode($news);

        $nTitle = limitWords($rsData["title"],5);


?>
        <tr>
            <td class="d-none d-md-table-cell">#<?php echo ($s + 1) ?></td>
            <td><?php echo ($nTitle) ?></td>
            <td>
                <?php

                if ($rsData["status_sid"] == 1) {
                ?>
                    <span class="badge bg-success">Published</span>
                <?php

                } else {

                ?>
                    <span class="badge bg-secondary">Draft</span>
                <?php

                }
                ?>


            </td>
            <td><?php echo ($rsData["datetime"]) ?></td>
            <td class="text-center"><a href="#" class="btn btn-light rounded-pill" onclick="deleteNews(<?php echo ($rsData['news_id']) ?>)"> <i class="bi bi-trash3 text-danger"></i></a>

                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="btn btn-light rounded-pill" onclick="showNewsUpdateModel(this);" data-news='<?php echo htmlspecialchars($jsonNews, ENT_QUOTES, "UTF-8"); ?>'><i class="bi bi-pencil-square text-success"></i></a>
            </td>
        </tr>
    <?php

    }
} else {
    ?>
    <tr>
        <td>No news found ?</td>
    </tr>

<?php
}

?>