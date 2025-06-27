<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/hrccbadgeicon.png">
    <title>Event Update </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

</head>

<?php

require "connection.php";

session_start();

if (isset($_SESSION["au"])) {


    $eid = $_GET["eid"];

    $eventSearch2  = Database::search("SELECT * FROM `events` WHERE `evt_id`='" . $eid . "'");
    $evtImageSearch = Database::search("SELECT * FROM `event_images` WHERE `events_evt_id`='" . $eid . "'");

    if ($eventSearch2->num_rows == 1) {
        $evtData2 = $eventSearch2->fetch_assoc();
    }


?>


    <body style="background-color:rgba(161, 161, 161, 0.7);">
        <div class="container-fluid">
            <div class="col-lg-10 offset-lg-1 col-sm-12 offset-sm-0 p-5">
                <!-- Event Update Modal -->
                <div>
                    <div class="">
                        <div class=" border-0 bg-body rounded-4 shadow-lg">
                            <div class="p-5">
                                <h4 class="mb-4 text-warning d-flex align-items-center gap-2">
                                    <i class="bi bi-calendar-plus"></i> Save / Update Event
                                </h4>


                                <input type="hidden" id="event_Uid" value="<?php echo ($eid) ?>">

                                <!-- Title -->
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="eventUTitle" name="title" placeholder="Event Title" value="<?php echo ($evtData2['title']) ?>" required>
                                    <label for="eventUTitle"><i class="bi bi-type"></i> Event Title</label>
                                    <div class="invalid-feedback">Please enter an event title.</div>
                                </div>

                                <!-- Description -->
                                <div class="form-floating mb-4">
                                    <textarea class="form-control" placeholder="Describe the event here..." id="eventUDescription" name="eventUDescription" style="height: 150px;" required><?php echo ($evtData2['description']) ?></textarea>
                                    <label for="eventUDescription"><i class="bi bi-card-text"></i> Description</label>
                                    <div class="invalid-feedback">Please provide event details.</div>
                                </div>

                                <!-- Date -->
                                <div class="form-floating mb-4">
                                    <input type="date" class="form-control" id="eventUDate" name="date" value="<?php echo ($evtData2['date']) ?>" required>
                                    <label for="eventUDate"><i class="bi bi-calendar-date"></i> Event Date</label>
                                    <div class="invalid-feedback">Please select an event date.</div>
                                </div>

                                <!-- Time -->
                                <div class="form-floating mb-4">
                                    <input type="time" class="form-control" id="eventUTime" name="eventUTime" value="<?php echo ($evtData2['time']) ?>" required>
                                    <label for="eventUTime"><i class="bi bi-clock"></i> Event Time</label>
                                    <div class="invalid-feedback">Please select a time.</div>
                                </div>

                                <!-- Location -->
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="eventULocation" name="location" placeholder="Location" value="<?php echo ($evtData2['venue']) ?>" required>
                                    <label for="eventULocation"><i class="bi bi-geo-alt"></i> Location</label>
                                    <div class="invalid-feedback">Please enter the location.</div>
                                </div>

                                <!-- Links -->
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="eventULinks" name="links" value="<?php echo ($evtData2['links']) ?>" placeholder="Location" required>
                                    <label for="eventULinks"><i class="bi bi-link-45deg"></i> Links (Optional)</label>
                                    <div class="invalid-feedback">Please enter the location.</div>
                                </div>

                                <!-- state -->
                                <div class="form-floating mb-4">
                                    <select class="form-select " id="eventUState">
                                        <?php
                                        if ($evtData2['evt_state'] == 0) {
                                        ?>
                                            <option value="0" selected>Up Coming</option>
                                            <option value="1">On Going</option>
                                        <?php
                                        } else {
                                        ?>
                                            <option value="0">Up Coming</option>
                                            <option value="1" selected>On Going</option>
                                        <?php
                                        }

                                        ?>

                                    </select>
                                    <label for="eventUState"><i class="bi bi-bookmark"></i> Event State</label>
                                </div>
                                <!-- Image Upload -->
                                <div class="mb-4">
                                    <label for="eventUImage" class="form-label text-secondary"><i class="bi bi-image"></i> Upload Event Poster</label>
                                    <label class="custum-file-upload w-100 p-4 border rounded-3 text-center" for="eventUImage" style="cursor:pointer;" onclick="previewUEventImages()">


                                        <div id="previewUContainer">

                                        </div>
                                        <div id="eUdivHide">
                                            <?php
                                            if ($evtImageSearch->num_rows != 0) {
                                                for ($u = 0; $u < $evtImageSearch->num_rows; $u++) {
                                                    $imgPath = $evtImageSearch->fetch_assoc();
                                            ?>
                                                    <img src="<?php echo ($imgPath["eimg_path"]) ?>" style="height: auto;width: 100px;margin: 3px;">
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <div>
                                                    <h2>No Image Found ?</h2>
                                                </div>
                                            <?php
                                            }


                                            ?>
                                        </div>
                                        <!-- <div class="text d-none" id="divuPop">
                                                <i class="bi bi-cloud-arrow-up fs-1"></i>
                                                <span class="d-block">Click to upload image</span>
                                                <small class="text-muted">Supported: JPG, PNG, GIF</small>
                                            </div> -->
                                        <input class="d-none" type="file" id="eventUImage" name="eventUImage" accept="image/*" multiple>
                                    </label>
                                </div>

                                <!-- Status Toggle -->
                                <!-- <div class="form-check form-switch form-check-lg mb-4">
                                <input class="form-check-input" type="checkbox" id="highlightEvent" name="highlighted">
                                <label class="form-check-label fw-medium" for="highlightEvent">Highlight this event</label>
                            </div> -->

                                <!-- Action Buttons -->
                                <div class="d-flex justify-content-end gap-2 pt-3">

                                    <a href="adminPanel.php#events" class="btn btn-dark rounded-pill px-4">
                                        <i class="bi bi-arrow-left"></i> Go Back
                                    </a>
                                    <button class="btn btn-warning rounded-pill px-4" onclick="updateEvent(1)">
                                        <i class="bi bi-upload"></i> Update
                                    </button>
                                    <button class="btn btn-primary rounded-pill px-4" onclick="updateEvent(0)">
                                        <i class="bi bi-save2"></i> Draft
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- events Update model -->
            </div>
        </div>

        <script src="js/script.js"></script>
    </body>

</html>

<?php

} else {
?>
    <div class="col-lg-10 col-sm-12 offset-lg-1 offset-sm-0 bg-dark mt-5 mb-5 p-4 text-center">
        <h4 class="text-white">Please Sign in first</h4>
        <a href="adminSignIn.php" class="btn btn-primary rounded-pill">Log In </a>
    </div>
<?php
}
