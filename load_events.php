<?php
include "connection.php";

$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 6;

$result = Database::search("SELECT * FROM `events` WHERE `evt_state`='1' LIMIT $limit OFFSET $offset ");

function limitWords($desc, $limit)
{
    $words = explode(" ", $desc);

    if (count($words) <= $limit) {
        return $desc;
    }
    return implode(' ', array_slice($words, 0, $limit)) . "...";
}

$index = 0;


while ($row = $result->fetch_assoc()) {

    $dateObj = new DateTime($row['date']);

    $date = $dateObj->format("Y M d");

    $timeObj = new DateTime($row['time']);
    $time = $timeObj->format("h:i A");


    $ImgRs2 =   Database::search("SELECT * FROM `event_images` WHERE `events_evt_id`='" . $row['evt_id'] . "'");

    $imgData2 = $ImgRs2->fetch_assoc();
    $description2 =  limitWords($row["description"], 20);

?>

    <div class="row align-items-center my-5">
        <?php if ($index % 2 == 0): ?>
            <!-- Image Left, Text Right -->
            <div class="col-md-6">
                <img src="<?php echo ($imgData2["eimg_path"]) ?>" class="img-fluid rounded-4 shadow" alt="Event Image">
            </div>
            <div class="col-md-6 ">
                <h3 class="fw-bold text-warning mt-3"><?php echo ($row["title"]) ?></h3>
                <p class="text-dark"><?php echo ($description2) ?></p>
                <ul class="list-unstyled">
                    <li class="text-primary"><i class="bi bi-calendar2-week-fill text-info me-2"></i> On <?php echo($date)?></li>
                    <li class="text-primary"><i class="bi bi-geo-alt-fill text-info me-2"></i> From <?php echo($time)?></li>
                    <li class="text-primary"><i class="bi bi-stopwatch text-info me-2"></i> At <?php echo($row['venue'])?></li>
                </ul>
                <button class="btn btn-light text-dark rounded-pill" onclick="sendEvtId(<?php echo ($row['evt_id']) ?>);">View More...</button>
            </div>
        <?php else: ?>
            <!-- Text Left, Image Right -->
            <div class="col-md-6 order-md-2">
                <img src="<?php echo ($imgData2['eimg_path']) ?>" class="img-fluid rounded-4 shadow" alt="Event Image">
            </div>
            <div class="col-md-6 order-md-1 ">
                <h3 class="fw-bold text-warning mt-3"><?php echo ($row["title"]) ?></h3>
                <p class="text-dark"><?php echo ($description2) ?></p>
                <ul class="list-unstyled">
                    <li class="text-primary"><i class="bi bi-calendar2-week-fill text-info me-2"></i> On <?php echo($date)?></li>
                    <li class="text-primary"><i class="bi bi-geo-alt-fill text-info me-2"></i> From <?php echo($time)?></li>
                    <li class="text-primary"><i class="bi bi-stopwatch text-info me-2"></i> At <?php echo($row['venue'])?></li>
                </ul>
                <button class="btn btn-light text-dark rounded-pill" onclick="sendEvtId(<?php echo ($row['evt_id']) ?>);">View More...</button>
            </div>
        <?php endif; ?>
    </div>

<?php


    $index++;
}
?>