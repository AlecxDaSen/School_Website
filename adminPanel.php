<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/hrccbadgeicon.png">
    <title>Dashboard | HRCC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            background-color: #212529;
            height: 100vh;
            padding-top: 20px;
            position: sticky;
            top: 0;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #dee2e6;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s;
            cursor: pointer;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #343a40;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        .offcanvas-body {
            background-color: #212529;
            overflow-y: auto;
        }

        .offcanvas {
            backdrop-filter: blur(8px);
        }

        .card {
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-3px);
        }


        @media (max-width: 992px) {
            .sidebar {
                display: none;
            }
        }
    </style>
</head>
<?php

session_start();

require "connection.php";


if (isset($_SESSION["au"])) {

?>

    <body style="background-color: #eff2f1;">

        <!-- Navbar -->
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#">HRCC Admin</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar"
                    aria-controls="mobileSidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- Sidebar (Large Screens) -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 sidebar d-none d-lg-block">
                    <a class="sidebar-link active" data-target="home"><i class="bi bi-house"></i> Home</a>
                    <a class="sidebar-link" data-target="news"><i class="bi bi-newspaper"></i> News</a>
                    <a class="sidebar-link" data-target="events"><i class="bi bi-calendar-plus"></i> Events</a>
                    <a class="sidebar-link" data-target="clubs"><i class="bi bi-houses"></i> Clubs & Societies</a>
                    <a class="sidebar-link" data-target="academic"><i class="bi bi-file-text"></i> Academic</a>
                    <a class="sidebar-link" data-target="gallery"><i class="bi bi-file-earmark-image"></i> Gallery</a>
                    <a class="sidebar-link" data-target="about"><i class="bi bi-chat-right-text"></i> About Us</a>
                    <a class="sidebar-link" data-target="donation"><i class="bi bi-cash-coin"></i> Donations</a>
                </div>

                <!-- Main Content -->
                <div class="col-lg-10 p-4">
                    <div id="home" class="content-section active">
                        <h2>Home&nbsp;&nbsp;<i class="bi bi-house-door"></i></h2>
                        <p>Welcome to the homepage!</p>


                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <!-- Student/Teacher Counters -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#counterSection" aria-expanded="true" aria-controls="counterSection">
                                        <i class="bi bi-person-fill-gear text-primary fs-2"></i>&nbsp;&nbsp;Update Student/Teacher Counter
                                    </button>
                                </h2>
                                <div id="counterSection" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <!-- Student Counter -->
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <input type="number" oninput="this.value = Math.abs(this.value)" class="form-control" id="student_count" placeholder="Student Counter">
                                                    <button type="submit" name="update_student_counter" class="btn btn-outline-secondary" onclick="updateStuCount()"><i class="bi bi-save2"></i> Update</button>
                                                </div>
                                            </div>
                                            <!-- Teacher Counter -->
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <input type="number" oninput="this.value = Math.abs(this.value)" class="form-control" id="teacher_count" placeholder="Teacher Counter">
                                                    <button type="submit" name="update_teacher_counter" class="btn btn-outline-secondary" onclick="updateTeaCount()"><i class="bi bi-save2"></i> Update</button>
                                                </div>
                                            </div>
                                            <!-- O/L Results Counter -->
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <input type="number" oninput="this.value = Math.abs(this.value)" class="form-control" id="OL_count" placeholder="O/L Results Counter">
                                                    <button type="submit" name="update_ol_results_counter" class="btn btn-outline-secondary" onclick="updateOLCount()"><i class="bi bi-save2"></i> Update</button>
                                                </div>
                                            </div>
                                            <!-- University Students Counter -->
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <input type="number" oninput="this.value = Math.abs(this.value)" class="form-control" id="UNI_count" placeholder="University Students Counter">
                                                    <button type="submit" name="update_university_students_counter" class="btn btn-outline-secondary" onclick="updateUniCount()"><i class="bi bi-save2"></i> Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Principal Message -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#principalMsgSection" aria-expanded="false" aria-controls="principalMsgSection">
                                        <i class="bi bi-chat-left-text text-success fs-2"></i>&nbsp;&nbsp;Update Principal's Message
                                    </button>
                                </h2>
                                <div id="principalMsgSection" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div class="form-floating mb-2">
                                            <textarea class="form-control" id="principalMsgTextarea" name="principal_message" placeholder="Add principal message..." style="height: 150px;" required></textarea>
                                            <label for="principalMsgTextarea"><i class="bi bi-chat-left-text"></i> Principal Message</label>
                                            <div class="invalid-feedback">Please enter the principal's message.</div>
                                        </div>
                                        <div class="text-end mb-2">
                                            <button type="submit" name="update_principal_message" class="btn btn-outline-secondary" onclick="updateMessage()"><i class="bi bi-save2"></i> Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Clubs Summary -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#clubsSummarySection" aria-expanded="false" aria-controls="clubsSummarySection">
                                        <i class="bi bi-house-gear-fill text-primary fs-2"></i>&nbsp;&nbsp;Update Clubs Summary
                                    </button>
                                </h2>
                                <div id="clubsSummarySection" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="clubSelector" name="club">
                                                <option selected disabled>Select a club</option>
                                                <option value="club1">Club One</option>
                                                <option value="club2">Club Two</option>
                                                <option value="club3">Club Three</option>
                                            </select>
                                            <label for="clubSelector">Select Club</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <textarea class="form-control" id="clubSummaryTextarea" name="club_summary" placeholder="Add club summary..." style="height: 150px;" required></textarea>
                                            <label for="clubSummaryTextarea"><i class="bi bi-chat-left-text"></i> Club Summary</label>
                                            <div class="invalid-feedback">Please enter the club summary.</div>
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" name="update_club_summary" class="btn btn-outline-secondary"><i class="bi bi-save2"></i> Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Student Applications -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#studentAppSection" aria-expanded="false" aria-controls="studentAppSection">
                                        <i class="bi bi-file-text text-success fs-2"></i>&nbsp;&nbsp;Update Student Applications
                                    </button>
                                </h2>
                                <div id="studentAppSection" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <!-- Application File 1 -->
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="studentAppFile1" name="student_app_file_1">
                                                    <button class="btn btn-outline-secondary" type="button">Upload</button>
                                                </div>
                                            </div>
                                            <!-- Application File 2 -->
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="studentAppFile2" name="student_app_file_2">
                                                    <button class="btn btn-outline-secondary" type="button">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div id="news" class="content-section">

                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>News&nbsp;&nbsp;<i class="bi bi-newspaper"></i></h2>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Create News&nbsp;&nbsp;<i class="bi bi-plus-circle ms-1"></i>
                                </button>



                            </div>
                        </div>


                        <div class="card shadow-sm border-0 rounded-4 p-4 my-4">
                            <h4 class="mb-3"><i class="bi bi-clock-history"></i>&nbsp;News History</h4>

                            <div class="row bg-light m-1 justify-content-end p-lg-2 just">
                                <div class="col-lg-3 col-sm-12 pt-2">
                                    <select class="form-select rounded-pill" id="sortNews">
                                        <option value="0">Sort By</option>
                                        <option value="1">Published</option>
                                        <option value="2">Draft</option>
                                        <option value="3">Newest</option>
                                        <option value="4">Oldest</option>
                                    </select>
                                </div>

                                <div class="col-lg-5 col-sm-12 pt-2">
                                    <div class="input-group">
                                        <input type="text" id="newsSearch" class="form-control rounded-pill" placeholder="Search" aria-label="Recipient’s username" aria-describedby="button-addon2">
                                        <button class="btn btn-info rounded-pill" type="button" id="button-addon2" onclick="searchNews();">Search</button>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="d-none d-md-table-cell">ID</th>
                                            <th>News Title</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th class="text-center"><i class="bi bi-gear"></i></i></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newsResult">

                                        <?php

                                        function limitWords($desc, $limit)
                                        {
                                            $words = explode(" ", $desc);

                                            if (count($words) <= $limit) {
                                                return $desc;
                                            }
                                            return implode(' ', array_slice($words, 0, $limit)) . "...";
                                        }

                                        $search = Database::search("SELECT * FROM `news` 
                                        INNER JOIN `news_images` ON `news`.`news_id`=`news_images`.`news_news_id` ORDER BY `datetime` ASC");

                                        if ($search->num_rows != 0) {
                                            for ($n = 0; $n < $search->num_rows; $n++) {
                                                $newsData = $search->fetch_assoc();

                                                $newsTitle =  limitWords($newsData['title'], 5);

                                                $news = new stdClass();
                                                $news->news_id = $newsData['news_id'];
                                                $news->title = $newsData['title'];
                                                $news->description = $newsData['description'];
                                                $news->date = $newsData['datetime'];
                                                $news->img = $newsData['nimg_path'];

                                                $jsonNews = json_encode($news);

                                        ?>
                                                <tr>
                                                    <td class="d-none d-md-table-cell">#<?php echo ($n + 1) ?></td>
                                                    <td><?php echo ($newsTitle) ?></td>
                                                    <td>
                                                        <?php

                                                        if ($newsData["status_sid"] == 1) {
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
                                                    <td><?php echo ($newsData["datetime"]) ?></td>
                                                    <td class="text-center"><a href="#" class="btn btn-light rounded-pill" onclick="deleteNews(<?php echo ($newsData['news_id']) ?>)"> <i class="bi bi-trash3 text-danger"></i></a>

                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="#" class="btn btn-light rounded-pill" onclick="showNewsUpdateModel(this);" data-news='<?php echo htmlspecialchars($jsonNews, ENT_QUOTES, "UTF-8"); ?>'><i class="bi bi-pencil-square text-success"></i></a>
                                                    </td>
                                                </tr>


                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td>No news Scheduled yet ?</td>
                                            </tr>
                                        <?php

                                        }

                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>



                        <!-- News Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content border-0 rounded-4 shadow-lg">
                                    <div class="modal-body p-5">
                                        <h4 class="mb-4 text-primary d-flex align-items-center gap-2">
                                            <i class="bi bi-pencil-square"></i> Create / Publish News
                                        </h4>

                                        <form id="myform">

                                            <input type="hidden" name="news_id" value="">

                                            <!-- Title -->
                                            <div class="form-floating mb-4">
                                                <input type="text" class="form-control" id="newsTitle" name="title" placeholder="News Title" required>
                                                <label for="newsTitle"><i class="bi bi-type"></i> News Title</label>
                                                <div class="invalid-feedback">Please enter a news title.</div>
                                            </div>

                                            <!-- Description -->
                                            <div class="form-floating mb-4">
                                                <textarea class="form-control" placeholder="Write the news details here..." id="newsDescription" name="description" style="height: 150px;" required></textarea>
                                                <label for="newsDescription"><i class="bi bi-file-text"></i> Description</label>
                                                <div class="invalid-feedback">Please enter the news description.</div>
                                            </div>

                                            <!-- Date -->
                                            <div class="form-floating mb-4">
                                                <input type="date" class="form-control" id="newsDate" name="date" required>
                                                <label for="newsDate"><i class="bi bi-calendar-event"></i> Publish Date</label>
                                                <div class="invalid-feedback">Please choose a publish date.</div>
                                            </div>

                                            <!-- Image Upload -->
                                            <div class="mb-4">
                                                <label for="newsImg" class="form-label text-secondary"><i class="bi bi-image"></i> Upload News Image</label>
                                                <label class="custum-file-upload w-100 p-4 border rounded-3 text-center" for="newsImg" style="cursor:pointer; transition: all 0.3s;" onclick="loadImg();">
                                                    <div id="img_container"></div>

                                                    <div class="text " id="ndivHide">
                                                        <div class="icon mb-2 text-primary">
                                                            <i class="bi bi-cloud-arrow-up fs-1"></i>
                                                        </div>
                                                        <span class="d-block">Click to upload image</span>
                                                        <small class="text-muted">Supported: JPG, PNG , JPEG , SVG</small>
                                                    </div>
                                                    <input class="d-none" type="file" id="newsImg" name="newsImg" accept="image/*" multiple>
                                                </label>
                                            </div>

                                        </form>
                                        <!-- Important Toggle -->
                                        <!-- <div class="form-check form-switch form-check-lg mb-4">
                                        <input class="form-check-input" type="checkbox" id="switchCheckDefault" name="important">
                                        <label class="form-check-label fw-medium" for="switchCheckDefault">Mark as Important News</label>
                                    </div> -->

                                        <!-- Buttons -->
                                        <div class="d-flex justify-content-end gap-2 pt-3">
                                            <button type="reset" class="btn btn-outline-secondary rounded-pill px-4" onclick="reset();">
                                                <i class="bi bi-x-circle"></i> Reset
                                            </button>
                                            <button class="btn btn-success rounded-pill px-4" onclick="publishNews(1);">
                                                <i class="bi bi-upload"></i> Publish
                                            </button>
                                            <button class="btn btn-primary rounded-pill px-4" onclick="publishNews(0);">
                                                <i class="bi bi-save2"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- news model -->





                        <!-- News update Modal -->
                        <div class="modal fade" id="newsUpdateModal" tabindex="-1" aria-labelledby="newsUpdateModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content border-0 rounded-4 shadow-lg">
                                    <div class="modal-body p-5">
                                        <h4 class="mb-4 text-secondary d-flex align-items-center gap-2">
                                            <i class="bi bi-pencil-square"></i> Update / Publish News
                                        </h4>

                                        <form id="myform2">

                                            <input type="hidden" id="news_id" value="">

                                            <!-- Title -->
                                            <div class="form-floating mb-4">
                                                <input type="text" class="form-control" id="newsuTitle" name="title" placeholder="News Title" required>
                                                <label for="newsuTitle"><i class="bi bi-type"></i> News Title</label>
                                                <div class="invalid-feedback">Please enter a news title.</div>
                                            </div>

                                            <!-- Description -->
                                            <div class="form-floating mb-4">
                                                <textarea class="form-control" placeholder="Write the news details here..." id="newsuDescription" name="description" style="height: 150px;" required></textarea>
                                                <label for="newsuDescription"><i class="bi bi-file-text"></i> Description</label>
                                                <div class="invalid-feedback">Please enter the news description.</div>
                                            </div>

                                            <!-- Date -->
                                            <div class="form-floating mb-4">
                                                <input type="date" class="form-control" id="newsuDate" name="date" required>
                                                <label for="newsuDate"><i class="bi bi-calendar-event"></i> Publish Date</label>
                                                <div class="invalid-feedback">Please choose a publish date.</div>
                                            </div>

                                            <!-- Image Upload -->
                                            <div class="mb-4">
                                                <label for="newImg" class="form-label text-secondary"><i class="bi bi-image"></i> Upload News Image</label>
                                                <label class="custum-file-upload w-100 p-4 border rounded-3 text-center" for="newImg" style="cursor:pointer; transition: all 0.3s;" onclick="loadUpImg();">
                                                    <div id="updateImgContainer">
                                                        <img src="#" class="mt-1 mb-1 rounded shadow" style="height: 150px;width:auto;" id="upimg" alt="">
                                                    </div>

                                                    <input class="d-none" type="file" id="newImg" name="newImg" accept="image/*">
                                                </label>
                                            </div>

                                        </form>
                                        <!-- Important Toggle -->
                                        <!-- <div class="form-check form-switch form-check-lg mb-4">
                                        <input class="form-check-input" type="checkbox" id="switchCheckDefault" name="important">
                                        <label class="form-check-label fw-medium" for="switchCheckDefault">Mark as Important News</label>
                                    </div> -->

                                        <!-- Buttons -->
                                        <div class="d-flex justify-content-end gap-2 pt-3">

                                            <button class="btn btn-success rounded-pill px-4" onclick="updateNews(1);">
                                                <i class="bi bi-upload"></i> Update
                                            </button>
                                            <button class="btn btn-primary rounded-pill px-4" onclick="updateNews(0);">
                                                <i class="bi bi-save2"></i> Draft
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- news Update model -->




                    </div>


                    <div id="events" class="content-section">
                        <!-- events model -->
                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Events <i class="bi bi-calendar2-week"></i></h2>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eventModal">
                                    Create Event <i class="bi bi-plus-circle ms-1"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card shadow-sm border-0 rounded-4 p-4 my-4">
                            <h4 class="mb-3"><i class="bi bi-clock-history"></i> Event History</h4>

                            <div class="row bg-light m-1 p-2 justify-content-end">
                                <div class="col-lg-3 col-sm-12 pt-sm-2">
                                    <select class="form-select rounded-pill" id="sortEvents">
                                        <option value="0">Sort By</option>
                                        <option value="1">Published</option>
                                        <option value="2">Draft</option>
                                        <option value="3">Up-coming</option>
                                        <option value="4">On-going</option>
                                    </select>
                                </div>

                                <div class="col-lg-5 col-sm-12 pt-sm-2">
                                    <div class="input-group">
                                        <input type="text" id="eventSearch" class="form-control rounded-pill" placeholder="Search" aria-label="Recipient’s username" aria-describedby="button-addon2">
                                        <button class="btn btn-info rounded-pill" type="button" id="button-addon2" onclick="searchEvents();">Search</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="d-none d-md-table-cell">ID</th>
                                            <th>Event Title</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                            <th>type</th>
                                            <th class="text-center"><i class="bi bi-gear"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody id="eventResult">

                                        <?php

                                        $eventSearch = Database::search("SELECT * FROM `events` ORDER BY `date` ASC");

                                        if ($eventSearch->num_rows != 0) {

                                            for ($e = 0; $e < $eventSearch->num_rows; $e++) {
                                                $eventData = $eventSearch->fetch_assoc();

                                                $evtTitle = limitWords($eventData["title"], 5);

                                        ?>
                                                <tr>
                                                    <td class="d-none d-md-table-cell">#<?php echo ($e + 1) ?></td>
                                                    <td><?php echo ($evtTitle) ?></td>
                                                    <td><?php echo ($eventData["date"]) ?></td>
                                                    <td><?php echo ($eventData["venue"]) ?></td>
                                                    <td>
                                                        <?php
                                                        if ($eventData["status_sid"] == 1) {
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
                                                        if ($eventData["evt_state"] == 1) {
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
                                                        <a href="#" class="btn btn-light rounded-pill" onclick="deleteEvent(<?php echo ($eventData['evt_id']) ?>);"> <i class="bi bi-trash3 text-danger"></i></a>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="#" class="btn btn-light rounded-pill" onclick="sendEvtIdUpdate(<?php echo ($eventData['evt_id']) ?>)"><i class="bi bi-pencil-square text-success"></i></a>
                                                    </td>
                                                </tr>

                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td>No events Scheduled yet ?</td>
                                            </tr>
                                        <?php
                                        }

                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Event Modal -->
                        <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content border-0 rounded-4 shadow-lg">
                                    <div class="modal-body p-5">
                                        <h4 class="mb-4 text-primary d-flex align-items-center gap-2">
                                            <i class="bi bi-calendar-plus"></i> Create / Publish Event
                                        </h4>

                                        <input type="hidden" name="event_id" value="">

                                        <!-- Title -->
                                        <div class="form-floating mb-4">
                                            <input type="text" class="form-control" id="eventTitle" name="title" placeholder="Event Title" required>
                                            <label for="eventTitle"><i class="bi bi-type"></i> Event Title</label>
                                            <div class="invalid-feedback">Please enter an event title.</div>
                                        </div>

                                        <!-- Description -->
                                        <div class="form-floating mb-4">
                                            <textarea class="form-control" placeholder="Describe the event here..." id="eventDescription" name="description" style="height: 150px;" required></textarea>
                                            <label for="eventDescription"><i class="bi bi-card-text"></i> Description</label>
                                            <div class="invalid-feedback">Please provide event details.</div>
                                        </div>

                                        <!-- Date -->
                                        <div class="form-floating mb-4">
                                            <input type="date" class="form-control" id="eventDate" name="date" required>
                                            <label for="eventDate"><i class="bi bi-calendar-date"></i> Event Date</label>
                                            <div class="invalid-feedback">Please select an event date.</div>
                                        </div>

                                        <!-- Time -->
                                        <div class="form-floating mb-4">
                                            <input type="time" class="form-control" id="eventTime" name="time" required>
                                            <label for="eventTime"><i class="bi bi-clock"></i> Event Time</label>
                                            <div class="invalid-feedback">Please select a time.</div>
                                        </div>

                                        <!-- Location -->
                                        <div class="form-floating mb-4">
                                            <input type="text" class="form-control" id="eventLocation" name="location" placeholder="Location" required>
                                            <label for="eventLocation"><i class="bi bi-geo-alt"></i> Location</label>
                                            <div class="invalid-feedback">Please enter the location.</div>
                                        </div>

                                        <!-- Links -->
                                        <div class="form-floating mb-4">
                                            <input type="text" class="form-control" id="eventLinks" name="links" placeholder="Location" required>
                                            <label for="eventLinks"><i class="bi bi-link-45deg"></i> Links (Optional)</label>
                                            <div class="invalid-feedback">Please enter the location.</div>
                                        </div>

                                        <!-- state -->
                                        <div class="form-floating mb-4">
                                            <select class="form-select " id="eventState">
                                                <option value="0">Up Coming</option>
                                                <option value="1">On Going</option>
                                            </select>
                                            <label for="eventState"><i class="bi bi-bookmark"></i> Event State</label>
                                        </div>

                                        <!-- Image Upload -->
                                        <div class="mb-4">
                                            <label for="eventImage" class="form-label text-secondary"><i class="bi bi-image"></i> Upload Event Poster</label>
                                            <label class="custum-file-upload w-100 p-4 border rounded-3 text-center" for="eventImage" style="cursor:pointer;" onclick="previewEventImages()">
                                                <div id="previewContainer">

                                                </div>

                                                <div class="text" id="edivHide">
                                                    <i class="bi bi-cloud-arrow-up fs-1"></i>
                                                    <span class="d-block">Click to upload image</span>
                                                    <small class="text-muted">Supported: JPG, PNG, GIF</small>
                                                </div>
                                                <input class="d-none" type="file" id="eventImage" name="eventImage" accept="image/*" multiple>
                                            </label>
                                        </div>

                                        <!-- Status Toggle -->
                                        <div class="form-check form-switch form-check-lg mb-4">
                                            <input class="form-check-input" type="checkbox" id="highlightEvent" name="highlighted">
                                            <label class="form-check-label fw-medium" for="highlightEvent">Highlight this event</label>
                                        </div>

                                        <!-- Action Buttons -->
                                        <div class="d-flex justify-content-end gap-2 pt-3">
                                            <button class="btn btn-outline-secondary rounded-pill px-4" onclick="rest2()">
                                                <i class="bi bi-x-circle"></i> Reset
                                            </button>
                                            <button class="btn btn-success rounded-pill px-4" onclick="addEvent(1)">
                                                <i class="bi bi-upload"></i> Publish
                                            </button>
                                            <button class="btn btn-primary rounded-pill px-4" onclick="addEvent(0)">
                                                <i class="bi bi-save2"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- events model -->




                    </div>


                    <div id="clubs" class="content-section">
                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Clubs & Societies&nbsp;&nbsp;<i class="bi bi-houses"></i></h2>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#clubsModal">
                                    Create new club <i class="bi bi-plus-circle ms-1"></i>
                                </button>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow-sm border-0 rounded-4 p-3 text-center">
                <h6 class="text-muted">Total Users</h6>
                <h3 class="fw-bold">1,245</h3>
                <i class="bi bi-people-fill fs-2 text-primary"></i>
            </div>
          </div> -->
                        <div class="row g-3 mt-4">
                            <div class="col-md-6 col-lg-3">
                                <div class="card text-center p-3 shadow-sm border-0 rounded-4">
                                    <i class="bi bi-person-fill-gear text-primary fs-1"></i>
                                    <p class="mt-2 mb-0">Cadets</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card text-center p-3 shadow-sm border-0 rounded-4">
                                    <i class="bi bi-chat-left-text text-success fs-1"></i>
                                    <p class="mt-2 mb-0">scouts</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card text-center p-3 shadow-sm border-0 rounded-4">
                                    <i class="bi bi-house-gear-fill text-primary fs-1"></i>
                                    <p class="mt-2 mb-0">Photography</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card text-center p-3 shadow-sm border-0 rounded-4">
                                    <i class="bi bi-file-text text-success fs-1"></i>
                                    <p class="mt-2 mb-0">Nature club</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card text-center p-3 shadow-sm border-0 rounded-4">
                                    <i class="bi bi-file-text text-success fs-1"></i>
                                    <p class="mt-2 mb-0">Eco socity</p>
                                </div>
                            </div>
                        </div>


                        <!-- Add Club Modal -->
                        <div class="modal fade" id="clubsModal" tabindex="-1" aria-labelledby="clubsModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content border-0 rounded-4 shadow-lg">
                                    <div class="modal-body p-5">
                                        <h4 class="mb-4 text-primary d-flex align-items-center gap-2">
                                            <i class="bi bi-people-fill"></i> Add New Club
                                        </h4>

                                        <form action="submit-club.php" method="POST" enctype="multipart/form-data" novalidate>
                                            <input type="hidden" name="club_id" value="">

                                            <!-- Club Name -->
                                            <div class="form-floating mb-4">
                                                <input type="text" class="form-control" id="clubName" name="club_name" placeholder="Club Name" required>
                                                <label for="clubName"><i class="bi bi-type"></i> Club Name</label>
                                                <div class="invalid-feedback">Please enter the club name.</div>
                                            </div>

                                            <!-- Club Description -->
                                            <div class="form-floating mb-4">
                                                <textarea class="form-control" placeholder="Write about the club..." id="clubDescription" name="description" style="height: 150px;" required></textarea>
                                                <label for="clubDescription"><i class="bi bi-info-circle"></i> Description</label>
                                                <div class="invalid-feedback">Please enter a description.</div>
                                            </div>

                                            <!-- Club Leader -->
                                            <!-- <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="clubLeader" name="leader" placeholder="Club Leader Name" required>
                        <label for="clubLeader"><i class="bi bi-person-badge"></i> Club Leader</label>
                        <div class="invalid-feedback">Please enter the club leader's name.</div>
                    </div> -->

                                            <!-- Establishment Date -->
                                            <div class="form-floating mb-4">
                                                <input type="date" class="form-control" id="establishedDate" name="established_date" required>
                                                <label for="establishedDate"><i class="bi bi-calendar-check"></i> Established Date</label>
                                                <div class="invalid-feedback">Please provide the establishment date.</div>
                                            </div>

                                            <!-- Upload Club Logo -->
                                            <div class="mb-4">
                                                <label for="clubLogo" class="form-label text-secondary"><i class="bi bi-image"></i> Upload Club Logo</label>
                                                <label class="custum-file-upload w-100 p-4 border rounded-3 text-center" for="clubLogo" style="cursor:pointer; transition: all 0.3s;">
                                                    <div class="icon mb-2 text-primary">
                                                        <i class="bi bi-cloud-arrow-up fs-1"></i>
                                                    </div>
                                                    <div class="text">
                                                        <span class="d-block">Click to upload logo</span>
                                                        <small class="text-muted">Supported: JPG, PNG, SVG</small>
                                                    </div>
                                                    <input class="d-none" type="file" id="clubLogo" name="logo" accept="image/*">
                                                </label>
                                            </div>


                                            <!-- Upload Club imags -->
                                            <div class="mb-4">
                                                <label for="clubimages" class="form-label text-secondary"><i class="bi bi-image"></i> Upload Club Images</label>
                                                <label class="custum-file-upload w-100 p-4 border rounded-3 text-center" for="clubimages" style="cursor:pointer; transition: all 0.3s;">
                                                    <div class="icon mb-2 text-primary">
                                                        <i class="bi bi-cloud-arrow-up fs-1"></i>
                                                    </div>
                                                    <div class="text">
                                                        <span class="d-block">Click to upload Image</span>
                                                        <small class="text-muted">Supported: JPG, PNG, SVG</small>
                                                    </div>
                                                    <input class="d-none" type="file" id="clubLogo" name="logo" accept="image/*">
                                                </label>
                                            </div>

                                            <!-- Active Status -->
                                            <div class="form-check form-switch form-check-lg mb-4">
                                                <input class="form-check-input" type="checkbox" id="activeSwitch" name="is_active" checked>
                                                <label class="form-check-label fw-medium" for="activeSwitch">Active Club</label>
                                            </div>

                                            <!-- Buttons -->
                                            <div class="d-flex justify-content-end gap-2 pt-3">
                                                <button type="reset" class="btn btn-outline-secondary rounded-pill px-4">
                                                    <i class="bi bi-x-circle"></i> Reset
                                                </button>
                                                <button type="submit" class="btn btn-success rounded-pill px-4">
                                                    <i class="bi bi-check-circle"></i> Add Club
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div id="academic" class="content-section">
                        <h2>Academic&nbsp;&nbsp;</h2>
                    </div>



                    <div id="gallery" class="content-section">
                        <h2>Gallery&nbsp;&nbsp;<i class="bi bi-images"></i></h2>
                        <div class="scrollblock container fade-in2">
                            <div class="container-fluid pt-5">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 col-md-12">
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mt-5 mb-4">

                                            <!-- Gallery Item -->
                                            <div class="col">
                                                <div class="card card-hover h-100 shadow-sm border-0 position-relative">
                                                    <form action="delete-image.php" method="POST" class="position-absolute top-0 end-0 m-2">
                                                        <input type="hidden" name="image_path" value="images/gallery1.jpg">
                                                        <button type="submit" class="btn btn-sm btn-danger rounded-circle" onclick="return confirm('Delete this image?')">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="images/gallery1.jpg" data-caption="Image 1">
                                                        <img src="images/gallery1.jpg" class="gallery-img img-fluid rounded" alt="Gallery Image 1" />
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Repeat for other images -->
                                            <div class="col">
                                                <div class="card card-hover h-100 shadow-sm border-0 position-relative">
                                                    <form action="delete-image.php" method="POST" class="position-absolute top-0 end-0 m-2">
                                                        <input type="hidden" name="image_path" value="images/gallery2.jpg">
                                                        <button type="submit" class="btn btn-sm btn-danger rounded-circle" onclick="return confirm('Delete this image?')">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                    <a href="index.html">
                                                        <img src="images/gallery2.jpg" class="gallery-img img-fluid rounded" alt="Gallery Image 2" />
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div id="about" class="content-section">
                        <h2>About Us&nbsp;&nbsp;<i class="bi bi-chat-right-text"></i></h2>
                        <form action="update-about.php" method="POST" enctype="multipart/form-data" novalidate class="p-4 bg-light rounded shadow-sm">

                            <input type="hidden" name="event_id" value="">

                            <!-- ========== History Section ========== -->
                            <h4 class="text-dark mb-3"><i class="bi bi-journal-text"></i> History Section</h4>
                            <hr class="mb-4">

                            <!-- History Summary -->
                            <div class="form-floating mb-4">
                                <textarea class="form-control" id="historySum" name="history_summary" placeholder="Add summary..." style="height: 150px;" required></textarea>
                                <label for="historySum"><i class="bi bi-card-text"></i> History Summary</label>
                                <div class="invalid-feedback">Please add a summary description.</div>
                            </div>
                            <div class="text-end mb-5">
                                <button type="submit" name="update_summary" class="btn btn-outline-primary px-4"><i class="bi bi-save2"></i> Update Summary</button>
                            </div>

                            <!-- Full History -->
                            <div class="form-floating mb-4">
                                <textarea class="form-control" id="history" name="full_history" placeholder="Add full history..." style="height: 150px;" required></textarea>
                                <label for="history"><i class="bi bi-book"></i> Full History</label>
                                <div class="invalid-feedback">Please add the full history description.</div>
                            </div>
                            <div class="text-end mb-5">
                                <button type="submit" name="update_history" class="btn btn-outline-primary px-4"><i class="bi bi-save2"></i> Update History</button>
                            </div>

                            <!-- ========== Add New Principal ========== -->
                            <h4 class="text-dark mb-3"><i class="bi bi-person-plus-fill"></i> Add New Principal</h4>
                            <hr class="mb-4">

                            <!-- Principal Name -->
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="newPrincipalName" name="new_principal_name" placeholder="Principal Name" required>
                                <label for="newPrincipalName"><i class="bi bi-person"></i> Principal Name</label>
                                <div class="invalid-feedback">Please enter the principal's name.</div>
                            </div>

                            <!-- Principal Image -->
                            <div class="mb-4">
                                <label for="newPrincipalImage" class="form-label"><i class="bi bi-image"></i> Upload Principal Photo</label>
                                <input type="file" class="form-control" id="newPrincipalImage" name="new_principal_image" accept="image/*" required>
                                <div class="invalid-feedback">Please upload a photo.</div>
                            </div>

                            <!-- Principal Message -->
                            <div class="form-floating mb-4">
                                <textarea class="form-control" id="newPrincipalMsg" name="new_principal_message" placeholder="Add principal message..." style="height: 150px;" required></textarea>
                                <label for="newPrincipalMsg"><i class="bi bi-chat-left-text"></i> Principal Message</label>
                                <div class="invalid-feedback">Please enter the principal's message.</div>
                            </div>

                            <!-- Submit -->
                            <div class="text-end">
                                <button type="submit" name="add_principal" class="btn btn-success px-4"><i class="bi bi-plus-circle"></i> Add Principal</button>
                            </div>

                        </form>

                    </div>


                    <div id="donation" class="content-section">
                        <h2>Donation History&nbsp;&nbsp;<i class="bi bi-cash-coin"></i></h2>
                        <div class="scrollblock container fade-in2">
                            <div class="container-fluid pt-5" >

                                <div class="card shadow-sm border-0 rounded-4 p-4 my-2">
                                    <h4 class="mb-3"><i class="bi bi-clock-history"></i>&nbsp;Donation History</h4>

                                    <div class="table-responsive" style="overflow-y: scroll;">
                                        <table class="table table-striped">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th class="d-none d-md-table-cell">ID</th>
                                                    <th>Donator Name</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                $donation  = Database::search("SELECT * FROM `donations` ORDER BY `date` DESC");

                                                if ($donation->num_rows != 0) {

                                                    for ($i = 0; $i < $donation->num_rows; $i++) {
                                                        $donationData = $donation->fetch_assoc();

                                                ?>
                                                        <tr>
                                                            <td class="d-none d-md-table-cell">#<?php echo ($i + 1) ?></td>
                                                            <td><?php echo ($donationData["name"]) ?></td>
                                                            <td><?php    echo ($donationData["email"]) ?> </td>
                                                            <td><?php  echo ($donationData["mobile"]) ?></td>
                                                            <td>Rs. <?php  echo (htmlspecialchars(number_format($donationData["amount"], 2))) ?></td>
                          
                                                        </tr>


                                                    <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <tr>
                                                        <td>No Donations yet ?</td>
                                                    </tr>
                                                <?php

                                                }

                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>





                </div>

            </div>
        </div>
        </div>

        <!-- Offcanvas Sidebar (Small Screens) -->
        <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="mobileSidebar"
            aria-labelledby="mobileSidebarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="mobileSidebarLabel">Navigation</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div class="d-flex flex-column">
                    <a class="sidebar-link d-flex align-items-center px-4 py-3 text-white text-decoration-none"
                        data-bs-dismiss="offcanvas" data-target="home">
                        <i class="bi bi-house me-2"></i> Home
                    </a>
                    <a class="sidebar-link d-flex align-items-center px-4 py-3 text-white text-decoration-none"
                        data-bs-dismiss="offcanvas" data-target="news">
                        <i class="bi bi-newspaper me-2"></i> News
                    </a>
                    <a class="sidebar-link d-flex align-items-center px-4 py-3 text-white text-decoration-none"
                        data-bs-dismiss="offcanvas" data-target="events">
                        <i class="bi bi-calendar-plus me-2"></i> Events
                    </a>
                    <a class="sidebar-link d-flex align-items-center px-4 py-3 text-white text-decoration-none"
                        data-bs-dismiss="offcanvas" data-target="clubs">
                        <i class="bi bi-houses me-2"></i> Clubs & Societies
                    </a>
                    <a class="sidebar-link d-flex align-items-center px-4 py-3 text-white text-decoration-none"
                        data-bs-dismiss="offcanvas" data-target="academic">
                        <i class="bi bi-file-text me-2"></i> Academic
                    </a>
                    <a class="sidebar-link d-flex align-items-center px-4 py-3 text-white text-decoration-none"
                        data-bs-dismiss="offcanvas" data-target="gallery">
                        <i class="bi bi-file-earmark-image me-2"></i> Gallery
                    </a>
                    <a class="sidebar-link d-flex align-items-center px-4 py-3 text-white text-decoration-none"
                        data-bs-dismiss="offcanvas" data-target="about">
                        <i class="bi bi-chat-right-text me-2"></i> About Us
                    </a>
                    <a class="sidebar-link d-flex align-items-center px-4 py-3 text-white text-decoration-none"
                        data-bs-dismiss="offcanvas" data-target="donation">
                        <i class="bi bi-cash-coin me-2"></i> Donation
                    </a>
                </div>
            </div>

        </div>

        <script>
            const sidebarLinks = document.querySelectorAll('.sidebar-link');
            const contentSections = document.querySelectorAll('.content-section');

            sidebarLinks.forEach(link => {
                link.addEventListener('click', () => {
                    // Remove active class from all links
                    sidebarLinks.forEach(l => l.classList.remove('active'));

                    // Hide all content sections
                    contentSections.forEach(section => section.classList.remove('active'));

                    // Add active class to clicked link
                    link.classList.add('active');

                    // Show the target section
                    const targetId = link.getAttribute('data-target');
                    document.getElementById(targetId).classList.add('active');
                });
            });

            const ctx = document.getElementById('salesChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                    datasets: [{
                        label: 'Sales',
                        data: [500, 750, 1000, 750, 1250],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        <script src="js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

?>