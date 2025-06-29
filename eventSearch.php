<?php

require "connection.php";

// echo($_GET["st"]);
// echo($_GET["search"]);

if (isset($_GET["st"]) && isset($_GET["search"])) {
    $sort = $_GET["st"];
    $search = $_GET["search"];
}

$query = "SELECT * FROM `events` ";

if (!empty($search)) {

    $query .= " WHERE `title` LIKE '%" . $search . "%' ";
}

if (stripos($query, 'WHERE') && $sort != 0) {
    $query .= " AND";
} else if (!stripos($query, 'WHERE') && $sort != 0) {
    $query .= " WHERE";
}



if ($sort == 1) {
    $query .= " `status_sid`= '1' ";
} else if ($sort == 2) {
    $query .= " `status_sid`= '2' ";
} else if ($sort == 3) {
    $query .= " `evt_state`= '0' ";
} else if ($sort == 4) {
    $query .= " `evt_state`= '1' ";
}

$query .= " ORDER BY `date` DESC ";

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

        $newTitle = limitWords($rsData["title"],5);

?>
        <tr>
            <td class="d-none d-md-table-cell">#<?php echo ($s + 1) ?></td>
            <td><?php echo ($newTitle) ?></td>
            <td><?php echo ($rsData["date"]) ?></td>
            <td><?php echo ($rsData["venue"]) ?></td>
            <td> <?php
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
            <td>
                <?php
                if ($rsData["evt_state"] == 1) {
                ?>
                    <span class="badge bg-success">On-going</span>


                <?php
                } else {
                ?>
                    <span class="badge bg-secondary">Up-coming</span>
                <?php
                }


                ?>

            </td>
            <td class="text-center">
                <a href="#" class="btn btn-light rounded-pill" onclick="deleteEvent(<?php echo ($rsData['evt_id']) ?>);"> <i class="bi bi-trash3 text-danger"></i></a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="btn btn-light rounded-pill" onclick="sendEvtId(<?php echo ($rsData['evt_id']) ?>)"><i class="bi bi-pencil-square text-success"></i></a>
            </td>
        </tr>
    <?php

    }
} else {
    ?>
    <tr>
        <td>No event found ?</td>
    </tr>

<?php
}

?>