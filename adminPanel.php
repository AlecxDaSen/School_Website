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

<body style="background-color: #eff2f1;">

<?php require "connection.php";?>

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
                                        <input type="text" class="form-control" placeholder="Student Counter">
                                        <button type="submit" name="update_student_counter" class="btn btn-outline-secondary"><i class="bi bi-save2"></i> Update</button>
                                    </div>
                                </div>
                                <!-- Teacher Counter -->
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Teacher Counter">
                                        <button type="submit" name="update_teacher_counter" class="btn btn-outline-secondary"><i class="bi bi-save2"></i> Update</button>
                                    </div>
                                </div>
                                <!-- O/L Results Counter -->
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="O/L Results Counter">
                                        <button type="submit" name="update_ol_results_counter" class="btn btn-outline-secondary"><i class="bi bi-save2"></i> Update</button>
                                    </div>
                                </div>
                                <!-- University Students Counter -->
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="University Students Counter">
                                        <button type="submit" name="update_university_students_counter" class="btn btn-outline-secondary"><i class="bi bi-save2"></i> Update</button>
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
                                <button type="submit" name="update_principal_message" class="btn btn-outline-secondary"><i class="bi bi-save2"></i> Update</button>
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
            <div class="table-responsive">
                <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                    <th class="d-none d-md-table-cell">ID</th>
                    <th>News Title</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th><i class="bi bi-gear"></i></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="d-none d-md-table-cell">#0012</td>
                    <td>Sports Meet</td>
                    <td><span class="badge bg-success">Published</span></td>
                    <td>2025/06/22</td>
                    <td><i class="bi bi-trash3 text-danger"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-pencil-square text-success"></i></td>
                    </tr>
                    <tr>
                    <td class="d-none d-md-table-cell">#0012</td>
                    <td>Sports Meet</td>
                    <td><span class="badge bg-secondary">draft</span></td>
                    <td>2025/06/22</td>
                    <td><i class="bi bi-trash3 text-danger"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-pencil-square text-success"></i></td>
                    </tr>
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

                    <form action="submit-news.php" method="POST" enctype="multipart/form-data" novalidate>
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
                        <label for="file" class="form-label text-secondary"><i class="bi bi-image"></i> Upload News Image</label>
                        <label class="custum-file-upload w-100 p-4 border rounded-3 text-center" for="file" style="cursor:pointer; transition: all 0.3s;">
                        <div class="icon mb-2 text-primary">
                            <i class="bi bi-cloud-arrow-up fs-1"></i>
                        </div>
                        <div class="text">
                            <span class="d-block">Click to upload image</span>
                            <small class="text-muted">Supported: JPG, PNG, GIF</small>
                        </div>
                        <input class="d-none" type="file" id="file" name="image" accept="image/*">
                        </label>
                    </div>

                    <!-- Important Toggle -->
                    <div class="form-check form-switch form-check-lg mb-4">
                        <input class="form-check-input" type="checkbox" id="switchCheckDefault" name="important">
                        <label class="form-check-label fw-medium" for="switchCheckDefault">Mark as Important News</label>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-end gap-2 pt-3">
                        <button type="reset" class="btn btn-outline-secondary rounded-pill px-4">
                        <i class="bi bi-x-circle"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-success rounded-pill px-4">
                        <i class="bi bi-upload"></i> Publish
                        </button>
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                        <i class="bi bi-save2"></i> Save
                        </button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>


            <!-- news model -->
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
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th class="d-none d-md-table-cell">ID</th>
                            <th>Event Title</th>
                            <th>Date</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th><i class="bi bi-gear"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="d-none d-md-table-cell">#0023</td>
                            <td>Science Exhibition</td>
                            <td>2025/07/10</td>
                            <td>Main Hall</td>
                            <td><span class="badge bg-success">Scheduled</span></td>
                            <td>
                                <i class="bi bi-trash3 text-danger me-3"></i>
                                <i class="bi bi-pencil-square text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="d-none d-md-table-cell">#0024</td>
                            <td>Teachers' Day</td>
                            <td>2025/09/05</td>
                            <td>Auditorium</td>
                            <td><span class="badge bg-secondary">Draft</span></td>
                            <td>
                                <i class="bi bi-trash3 text-danger me-3"></i>
                                <i class="bi bi-pencil-square text-success"></i>
                            </td>
                        </tr>
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

                        <form action="submit-event.php" method="POST" enctype="multipart/form-data" novalidate>
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

                            <!-- Image Upload -->
                            <div class="mb-4">
                                <label for="eventImage" class="form-label text-secondary"><i class="bi bi-image"></i> Upload Event Poster</label>
                                <label class="custum-file-upload w-100 p-4 border rounded-3 text-center" for="eventImage" style="cursor:pointer;">
                                    <div class="icon mb-2 text-primary">
                                        <i class="bi bi-cloud-arrow-up fs-1"></i>
                                    </div>
                                    <div class="text">
                                        <span class="d-block">Click to upload image</span>
                                        <small class="text-muted">Supported: JPG, PNG, GIF</small>
                                    </div>
                                    <input class="d-none" type="file" id="eventImage" name="image" accept="image/*">
                                </label>
                            </div>

                            <!-- Status Toggle -->
                            <div class="form-check form-switch form-check-lg mb-4">
                                <input class="form-check-input" type="checkbox" id="highlightEvent" name="highlighted">
                                <label class="form-check-label fw-medium" for="highlightEvent">Highlight this event</label>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex justify-content-end gap-2 pt-3">
                                <button type="reset" class="btn btn-outline-secondary rounded-pill px-4">
                                    <i class="bi bi-x-circle"></i> Reset
                                </button>
                                <button type="submit" name="publish" class="btn btn-success rounded-pill px-4">
                                    <i class="bi bi-upload"></i> Publish
                                </button>
                                <button type="submit" name="save" class="btn btn-primary rounded-pill px-4">
                                    <i class="bi bi-save2"></i> Save
                                </button>
                            </div>
                        </form>
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
                              
            <div class="row g-3 mt-4">
            <?php
            $club_rs = Database::search("SELECT * FROM `clubs`");
            $club_num = $club_rs->num_rows;

            for ($z = 0; $z < $club_num; $z++) {
                $club_data = $club_rs->fetch_assoc();
                $club_id = $club_data["club_id"];
                $modal_id = "clubsUpdateModal_" . $club_id;
            ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center p-3 shadow-sm border-0 rounded-4" data-bs-toggle="modal" data-bs-target="#<?php echo $modal_id; ?>">
                        <i class="bi bi-house-gear-fill text-primary fs-1"></i>
                        <p class="mt-2 mb-0"><?php echo $club_data["title"]; ?></p>
                    </div>

                    <!-- Update Club Modal -->
                    <div class="modal fade" id="<?php echo $modal_id; ?>" tabindex="-1" aria-labelledby="<?php echo $modal_id; ?>Label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content border-0 rounded-4 shadow-lg">
                                <div class="modal-body p-5">
                                    <h4 class="mb-4 text-primary d-flex align-items-center gap-2">
                                        <i class="bi bi-people-fill"></i> Update Club
                                    </h4>

                                    <form action="submit-club.php" method="POST" enctype="multipart/form-data" novalidate>
                                        <input type="hidden" name="club_id" value="<?php echo $club_id; ?>">

                                        <!-- Club Name -->
                                        <div class="form-floating mb-4">
                                            <input type="text" class="form-control" name="club_name" value="<?php echo $club_data["title"]; ?>" id="title_<?php echo $club_id; ?>" placeholder="Club Name" required>
                                            <label for="title_<?php echo $club_id; ?>"><i class="bi bi-type"></i> Club Name</label>
                                            <div class="invalid-feedback">Please enter the club name.</div>
                                        </div>

                                        <!-- Club Description -->
                                        <div class="form-floating mb-4">
                                            <textarea class="form-control" id="description_<?php echo $club_id; ?>" name="description" placeholder="Write about the club..." style="height: 150px;" required><?php echo $club_data["description"]; ?></textarea>
                                            <label for="description_<?php echo $club_id; ?>"><i class="bi bi-info-circle"></i> Description</label>
                                            <div class="invalid-feedback">Please enter a description.</div>
                                        </div>

                                        <!-- Upload Club Logo -->
                                        <div class="mb-4">
                                            <label for="clubLogo_<?php echo $club_id; ?>" class="form-label text-secondary"><i class="bi bi-image"></i> Upload Club Logo</label>
                                            <label class="custum-file-upload w-100 p-4 border rounded-3 text-center" for="clubLogo_<?php echo $club_id; ?>" style="cursor:pointer;">
                                                <div class="icon mb-2 text-primary">
                                                    <i class="bi bi-cloud-arrow-up fs-1"></i>
                                                </div>
                                                <div class="text">
                                                    <span class="d-block">Click to upload logo</span>
                                                    <small class="text-muted">Supported: JPG, PNG, SVG</small>
                                                </div>
                                                <input class="d-none" type="file" id="clubLogo_<?php echo $club_id; ?>" name="logo" accept="image/*">
                                            </label>
                                        </div>

                                        <!-- Upload Club Images -->
                                        <div class="mb-4">
                                            <label for="clubImages_<?php echo $club_id; ?>" class="form-label text-secondary"><i class="bi bi-image"></i> Upload Club Images</label>
                                            <label class="custum-file-upload w-100 p-4 border rounded-3 text-center" for="clubImages_<?php echo $club_id; ?>" style="cursor:pointer;">
                                                <div class="icon mb-2 text-primary">
                                                    <i class="bi bi-cloud-arrow-up fs-1"></i>
                                                </div>
                                                <div class="text">
                                                    <span class="d-block">Click to upload image</span>
                                                    <small class="text-muted">Supported: JPG, PNG, SVG</small>
                                                </div>
                                                <input class="d-none" type="file" id="clubImages_<?php echo $club_id; ?>" name="images[]" accept="image/*" multiple>
                                            </label>
                                        </div>

                                        <!-- Active Status Switch -->
                                        <div class="form-check form-switch form-check-lg mb-4">
                                            <!-- Hidden input ensures value is sent even if unchecked -->
                                            <input type="hidden" name="is_active" value="2">
                                            <input class="form-check-input" type="checkbox" id="activeSwitch_<?php echo $club_id; ?>" name="is_active" value="1" <?php echo ($club_data["status_sid"] == '1') ? 'checked' : ''; ?>>
                                            <label class="form-check-label fw-medium" for="activeSwitch_<?php echo $club_id; ?>">Active Club</label>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="d-flex justify-content-end gap-2 pt-3">
                                        <button type="button" class="btn btn-success rounded-pill px-4" onclick="updateClub(<?php echo $club_id; ?>)">
                                            <i class="bi bi-check-circle"></i> Update Club
                                        </button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>



            </div>


            <!-- Add Club Modal -->
            <div class="modal fade" id="clubsModal" tabindex="-1" aria-labelledby="clubsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 rounded-4 shadow-lg">
                <div class="modal-body p-5">
                    <h4 class="mb-4 text-primary d-flex align-items-center gap-2">
                    <i class="bi bi-people-fill"></i> Add New Club
                    </h4>

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
                        <label for="clubimage" class="form-label text-secondary"><i class="bi bi-image"></i> Upload Club Images</label>
                        <label class="custum-file-upload w-100 p-4 border rounded-3 text-center" for="clubimages" style="cursor:pointer; transition: all 0.3s;">
                        <div class="icon mb-2 text-primary">
                            <i class="bi bi-cloud-arrow-up fs-1"></i>
                        </div>
                        <div class="text">
                            <span class="d-block">Click to upload Image</span>
                            <small class="text-muted">Supported: JPG, PNG, SVG</small>
                        </div>
                        <input class="d-none" type="file" id="clubimage" name="logo" accept="image/*">
                        </label>
                    </div>


                    <!-- Buttons -->
                    <div class="d-flex justify-content-end gap-2 pt-3">
                        <button type="submit" class="btn btn-success rounded-pill px-4" onclick="addClub()">
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

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Update Results
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="save-science-results.php" method="POST" class="p-4 bg-light rounded shadow-sm">

                                

                        </form>

                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Add/Update Past Papers
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="upload-past-paper.php" method="POST" enctype="multipart/form-data" class="p-4 bg-light rounded shadow-sm">
                                <h4 class="mb-4 text-primary"><i class="bi bi-journal-arrow-up"></i> Add / Update Past Papers</h4>

                                <!-- GRADE -->
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="gradeSelectPaper" required onchange="handleGradeChange('Paper')">
                                    <option value="" disabled selected>Select Grade</option>
                                    </select>
                                    <label for="gradeSelectPaper">Grade</label>
                                </div>

                                <!-- STREAM -->
                                <div class="form-floating mb-3" id="streamContainerPaper" style="display: none;">
                                    <select class="form-select" id="streamSelectPaper" onchange="handleStreamChange('Paper')">
                                    <option value="" disabled selected>Select Stream</option>
                                    </select>
                                    <label for="streamSelectPaper">Stream</label>
                                </div>

                                <!-- SUBJECT -->
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="subjectSelectPaper" required>
                                    <option value="" disabled selected>Select Subject</option>
                                    </select>
                                    <label for="subjectSelectPaper">Subject</label>
                                </div>

                                <!-- Year -->
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="year" name="year" placeholder="Exam Year" min="2000" max="2099" required>
                                    <label for="year"><i class="bi bi-calendar3"></i> Year</label>
                                </div>

                                <!-- Term -->
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="term" name="term" required>
                                        <option value="0" disabled selected>Select Term</option>
                                        <option value="1">1st term</option>
                                        <option value="2">2nd term</option>
                                        <option value="3">3rd term</option>
                                    </select>
                                    <label for="term"><i class="bi bi-tags"></i> Term</label>
                                </div>

                                <!-- Upload PDF -->
                                <div class="mb-4">
                                    <label for="paper" class="form-label"><i class="bi bi-file-earmark-pdf"></i> Upload Paper (PDF)</label>
                                    <input type="file" class="form-control" id="paper" name="paper_file" accept="application/pdf" required>
                                </div>

                                <!-- Submit -->
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary px-4"><i class="bi bi-upload"></i> Upload Paper</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <!-- Accordion: Add/Update Videos -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Add/Update Videos
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="upload-video.php" method="POST" enctype="multipart/form-data" class="p-4 bg-light rounded shadow-sm">
                                <h4 class="mb-4 text-dark"><i class="bi bi-camera-video"></i> Add / Update Educational Videos</h4>

                                 <!-- GRADE -->
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="gradeSelectVideo" required onchange="handleGradeChange('Video')">
                                    <option value="" disabled selected>Select Grade</option>
                                    </select>
                                    <label for="gradeSelectVideo">Grade</label>
                                </div>

                                <!-- STREAM -->
                                <div class="form-floating mb-3" id="streamContainerVideo" style="display: none;">
                                    <select class="form-select" id="streamSelectVideo" onchange="handleStreamChange('Video')">
                                    <option value="" disabled selected>Select Stream</option>
                                    </select>
                                    <label for="streamSelectVideo">Stream</label>
                                </div>

                                <!-- SUBJECT -->
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="subjectSelectVideo" required>
                                    <option value="" disabled selected>Select Subject</option>
                                    </select>
                                    <label for="subjectSelectVideo">Subject</label>
                                </div>

                                <!-- Title -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="videoTitle" name="video_title" placeholder="Video Title" required>
                                    <label for="videoTitle"><i class="bi bi-type"></i> Video Title</label>
                                </div>

                                <!-- Upload Video -->
                                <div class="mb-4">
                                    <label for="videoFile" class="form-label"><i class="bi bi-cloud-upload"></i> Upload Video File</label>
                                    <input type="file" class="form-control" id="videoFile" name="video_file" accept="video/*" required>
                                </div>

                                <!-- Submit -->
                                <div class="text-end">
                                    <button type="submit" class="btn btn-dark px-4"><i class="bi bi-upload"></i> Upload Video</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>

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

        <?php
        $json = file_get_contents("about-data.json");
        $data = json_decode($json, true);
        ?>


        <div id="about" class="content-section">
        <h2>About Us&nbsp;&nbsp;<i class="bi bi-chat-right-text"></i></h2>

        <form id="aboutForm" action="update-about.php" method="POST" enctype="multipart/form-data" novalidate class="p-4 bg-light rounded shadow-sm">

            <!-- ========== Hidden Event ID (if needed) ========== -->
            <input type="hidden" name="event_id" value="">

            <!-- ========== History Section ========== -->
            <h4 class="text-dark mb-3"><i class="bi bi-journal-text"></i> History Section</h4>
            <hr class="mb-4">

            <!-- History Summary -->
            <div class="form-floating mb-4">
                <textarea class="form-control" id="historySum" name="history_summary" placeholder="Add summary..." style="height: 150px;" required><?php echo htmlspecialchars($data["history_summary"] ?? ""); ?></textarea>
                <label for="historySum"><i class="bi bi-card-text"></i> History Summary</label>
            </div>

            <div class="text-end mb-5">
            <button type="button" class="btn btn-outline-primary px-4" onclick="submitSummary()">
                <i class="bi bi-save2"></i> Update Summary
            </button>
            </div>

            <!-- Full History -->
            <div class="form-floating mb-4">
                <textarea class="form-control" id="history" name="full_history" placeholder="Add full history..." style="height: 150px;" required><?php echo htmlspecialchars($data["full_history"] ?? ""); ?></textarea>
                <label for="history"><i class="bi bi-book"></i> Full History</label>
            </div>
            <div class="text-end mb-5">
            <button type="button" class="btn btn-outline-primary px-4" onclick="submitHistory()">
                <i class="bi bi-save2"></i> Update History
            </button>
            </div>

            <!-- ========== Add New Principal ========== -->
            <h4 class="text-dark mb-3"><i class="bi bi-person-plus-fill"></i> Add New Principal</h4>
            <hr class="mb-4">

            <!-- Principal Name -->
            <div class="form-floating mb-4">
            <input type="text" class="form-control" id="newPrincipalName" name="new_principal_name" value="<?php echo $data["principal"]["name"]; ?>" placeholder="Principal Name" required>
            <label for="newPrincipalName"><i class="bi bi-person"></i> Principal Name</label>
            <div class="invalid-feedback">Please enter the principal's name.</div>
            </div>
            <img src="<?php echo $data["principal"]["image"]; ?>" width="150" class="mb-3">
            <!-- Principal Image -->
            <div class="mb-4">
            <label for="newPrincipalImage" class="form-label"><i class="bi bi-image"></i> Upload Principal Photo</label>
            <input type="file" class="form-control" id="newPrincipalImage" name="new_principal_image" accept="image/*" required>
            <div class="invalid-feedback">Please upload a photo.</div>
            </div>

            <!-- Principal Message -->
            <div class="form-floating mb-4">
                <textarea class="form-control" id="newPrincipalMsg" name="new_principal_message" placeholder="Add principal message..." style="height: 150px;" required><?php echo htmlspecialchars($data["principal"]["message"] ?? ""); ?></textarea>
                <label for="newPrincipalMsg"><i class="bi bi-chat-left-text"></i> Principal Message</label>
            </div>

            <!-- Submit -->
            <div class="text-end">
            <button type="button" class="btn btn-success px-4" onclick="submitPrincipal()">
                <i class="bi bi-plus-circle"></i> Add Principal
            </button>
            </div>
        </form>
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
        legend: { display: false }
        },
        scales: {
        y: { beginAtZero: true }
        }
    }
    });
  </script>

    <script>
    const subjectData = {
        "Grade 10": {
        "All": ["Mathematics", "Science", "Sinhala", "English", "History"]
        },
        "Grade 11": {
        "All": ["Mathematics", "Science", "Sinhala", "English", "History"]
        },
        "A/L": {
        "Science": ["Physics", "Chemistry", "Biology", "Combined Maths"],
        "Commerce": ["Accounting", "Business Studies", "Economics"],
        "Arts": ["Sinhala", "Political Science", "Geography", "Logic"],
        "Technology": ["Engineering Tech", "ICT", "Science for Tech"]
        }
    };

    // On page load, populate grade dropdowns
    window.onload = () => {
        ['Paper', 'Video'].forEach(type => {
        const gradeSelect = document.getElementById(`gradeSelect${type}`);
        Object.keys(subjectData).forEach(grade => {
            const opt = document.createElement("option");
            opt.value = grade;
            opt.textContent = grade;
            gradeSelect.appendChild(opt);
        });
        });
    };

    function handleGradeChange(type) {
        const gradeSelect = document.getElementById(`gradeSelect${type}`);
        const streamContainer = document.getElementById(`streamContainer${type}`);
        const streamSelect = document.getElementById(`streamSelect${type}`);
        const subjectSelect = document.getElementById(`subjectSelect${type}`);

        const grade = gradeSelect.value;

        // Reset
        subjectSelect.innerHTML = `<option disabled selected>Select Subject</option>`;
        streamSelect.innerHTML = `<option disabled selected>Select Stream</option>`;
        streamContainer.style.display = "none";

        if (grade === "A/L") {
        streamContainer.style.display = "block";
        Object.keys(subjectData["A/L"]).forEach(stream => {
            const opt = document.createElement("option");
            opt.value = stream;
            opt.textContent = stream;
            streamSelect.appendChild(opt);
        });
        } else {
        const subjects = subjectData[grade]["All"];
        subjects.forEach(sub => {
            const opt = document.createElement("option");
            opt.value = sub;
            opt.textContent = sub;
            subjectSelect.appendChild(opt);
        });
        }
    }

    function handleStreamChange(type) {
        const streamSelect = document.getElementById(`streamSelect${type}`);
        const subjectSelect = document.getElementById(`subjectSelect${type}`);
        const stream = streamSelect.value;

        subjectSelect.innerHTML = `<option disabled selected>Select Subject</option>`;

        const subjects = subjectData["A/L"][stream] || [];
        subjects.forEach(sub => {
        const opt = document.createElement("option");
        opt.value = sub;
        opt.textContent = sub;
        subjectSelect.appendChild(opt);
        });
    }
    </script>

  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
