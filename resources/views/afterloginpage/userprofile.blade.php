<!DOCTYPE html>
<html lang="en">

<!-- header start -->

<head>
    @include('layouts.header')
</head>
<!-- header end  -->

<body>
    <div class="container-xxl position-relative p-0">
        @include('layouts.navbar')
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Your Profile</h1>
            </div>
        </div>



        <div class="bg-white p-4 mt-5 shadow-sm rounded">
            <div class="text-center">
                <div class="col-md-12 align-items-center justify-content-center">
                    <img src="/img/team-1.jpg" alt=".." class="img-fluid" style="border-radius:50px;">
                </div>
                <h2 class="fw-bold">Marvin McKinney</h2>
                <div class="mt-4">
                    <h5>Bio</h5>
                    <p>Here its me sandesh love sharing my recipes and my known cooking ectasies .</p>
                </div>
                <p>
                    <i class="bi bi-envelope-fill"></i>sandehpahari@gmail.com<br>
                    <i class="fas fa-map-marker-alt"></i> Pokhara,Nepal<br>
                    <i class="fas fa-birthday-cake"></i> August 7, 1990<br>
                    <i class="fas fa-phone"></i> 9862144787
                </p>
                <div class="d-flex justify-content-center mt-3 mb-4">
                    <a href="#" class="text-secondary mx-2"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-secondary mx-2"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="text-secondary mx-2"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
                <!-- Modal trigger button -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalId">
                    Edit Profile
                </button>
                <div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary">
                            log out
                        </button>
                        <!-- <input type="submit" name="logout"> -->
                    </form>
                </div>

                <!-- Modal Body -->
                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">
                                    Edit Profile
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container mt-8">
                                    <div class="bg-white p-4 shadow-sm rounded">
                                        <div class="text-center">
                                            <form>
                                                <div class="form-group mb-4">
                                                    <label class="fw-bold fs-5 text-primary" for="profilePicture">Profile Picture</label><br>
                                                    <img src="/img/menu-1.jpg" class="rounded-circle mt-3 mb-3" alt="Profile Image" style="width: 150px; height: 150px; border: 5px solid #ddd;"><br>
                                                    <label for="profilePicture" class="btn btn-light">
                                                        <i class="fas fa-upload"></i>
                                                    </label>
                                                    <input type="file" class="form-control-file" id="profilePicture" style="display: none;">
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label class="fw-bold fs-5 text-primary" for="fullName">Full Name</label>
                                                    <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="fw-bold fs-5 text-primary" for="bio">Bio</label>
                                                    <textarea class="form-control" id="bio" rows="3" placeholder="Enter your bio"></textarea>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="fw-bold fs-5 text-primary" for="address">Address</label>
                                                    <input type="text" class="form-control" id="address" placeholder="Enter your address">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="fw-bold fs-5 text-primary" for="dob">Date of Birth</label>
                                                    <input type="date" class="form-control" id="dob">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="fw-bold fs-5 text-primary" for="phone">Phone Number</label>
                                                    <input type="text" class="form-control" id="phone" placeholder="Enter your phone number">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="fw-bold fs-5 text-primary" for="facebook">Facebook</label>
                                                    <input type="url" class="form-control" id="facebook" placeholder="Enter your Facebook URL">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="fw-bold fs-5 text-primary" for="twitter">Twitter</label>
                                                    <input type="url" class="form-control" id="twitter" placeholder="Enter your Twitter URL">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="fw-bold fs-5 text-primary" for="instagram">Instagram</label>
                                                    <input type="url" class="form-control" id="instagram" placeholder="Enter your Instagram URL">
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label class="fw-bold fs-5 text-primary" for="current-password">Current Password</label>
                                                    <input type="password" class="form-control" id="current-password" placeholder="Enter current password">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="fw-bold fs-5 text-primary" for="new-password">New Password</label>
                                                    <input type="password" class="form-control" id="new-password" placeholder="Enter new password">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="fw-bold fs-5 text-primary" for="confirm-password">Confirm New Password</label>
                                                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirm new password">
                                                </div>


                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Optional: Place to the bottom of scripts -->
                    <script>
                        const myModal = new bootstrap.Modal(
                            document.getElementById("modalId"),
                            options,
                        );
                    </script>
                </div>


            </div>
        </div>

        @include('layouts.footer')
    </div>


</body>