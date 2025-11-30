<?php
include('include/header.php');
include('include/phone-validator.php');

// Handle registration
$registration_success = false;
$errors = [];
$old_values = [];

if(isset($_POST['registration']))
{
  $fname = trim($_POST['fname'] ?? '');
  $reg_no = $_POST['reg_no'] ?? '';
  $status = $_POST['status'] ?? 'InActive';
  $lname = trim($_POST['lname'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $phone = trim($_POST['phone'] ?? '');
  $dob = $_POST['dob'] ?? '';
  $language = $_POST['language'] ?? '';
  $applyfor = $_POST['applyfor'] ?? '';
  $password = $_POST['password'] ?? '';

  // Store old values for form repopulation
  $old_values = [
    'fname' => $fname,
    'lname' => $lname,
    'email' => $email,
    'phone' => $phone,
    'dob' => $dob,
    'language' => $language,
    'applyfor' => $applyfor
  ];

  // Validation
  if(empty($fname)) {
    $errors['fname'] = 'First Name is required.';
  }
  if(empty($lname)) {
    $errors['lname'] = 'Last Name is required.';
  }
  if(empty($email)) {
    $errors['email'] = 'Email Address is required.';
  } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
  } else {
    // Check if email already exists
    $check_email = mysqli_query($link, "SELECT id FROM register WHERE email = '".mysqli_real_escape_string($link, $email)."'");
    if(mysqli_num_rows($check_email) > 0) {
      $errors['email'] = 'This email is already registered.';
    }
  }

  // Validate Indian phone number using libphonenumber
  $phoneValidation = validateIndianPhone($phone, true); // true = mobile only
  if(!$phoneValidation['valid']) {
    $errors['phone'] = $phoneValidation['error'];
  }
  if(empty($dob)) {
    $errors['dob'] = 'Date of Birth is required.';
  } elseif(!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dob)) {
    $errors['dob'] = 'Please enter a valid date format (YYYY-MM-DD).';
  }
  if(empty($language) || $language == '---Select---') {
    $errors['language'] = 'Please select a preferred language.';
  }
  if(empty($applyfor) || $applyfor == '---Select---') {
    $errors['applyfor'] = 'Please select what you are applying for.';
  }
  if(empty($password)) {
    $errors['password'] = 'Password is required.';
  } elseif(strlen($password) < 6) {
    $errors['password'] = 'Password must be at least 6 characters.';
  }

  // If no errors, proceed with registration
  if(empty($errors)) {
    $fname_safe = mysqli_real_escape_string($link, $fname);
    $lname_safe = mysqli_real_escape_string($link, $lname);
    $email_safe = mysqli_real_escape_string($link, $email);
    $phone_safe = mysqli_real_escape_string($link, $phone);
    $dob_safe = mysqli_real_escape_string($link, $dob);
    $language_safe = mysqli_real_escape_string($link, $language);
    $applyfor_safe = mysqli_real_escape_string($link, $applyfor);
    // Hash password securely using password_hash
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    $reg_no_safe = mysqli_real_escape_string($link, $reg_no);

    $insrtreg = "INSERT INTO `register`(`registration_number`, `first_name`, `last_name`, `email`, `phone`, `dob`, `language`, `apply_for`, `status`, `password`) VALUES ('$reg_no_safe','$fname_safe','$lname_safe','$email_safe','$phone_safe','$dob_safe','$language_safe','$applyfor_safe','$status','$password_hashed')";
    if(mysqli_query($link,$insrtreg))
    {
      $registration_success = true;
      $registered_name = $fname . ' ' . $lname;
      $registered_email = $email;
    }else{
      $errors['general'] = 'Registration failed. Please try again. Error: ' . mysqli_error($link);
    }
  }
}
?>
<!-- start  bread crumb section --->
 <section class="bgcbread">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="brsdss">
                    <li><a href="#">Home</a></li>
                    <li>/</li>
                    <li class="brtextclr">Register</li>
                </ul>
            </div>
        </div>
    </div>
 </section>
 <!-- end breadcrumb section --->



 <section class="py-50 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="confrmbgc">

                    <?php if($registration_success): ?>
                    <!-- Success Message -->
                    <div class="row">
                        <div class="col-12 text-center py-5">
                            <!-- Lottie Animation -->
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player
                                src="assets/lottie/success.json"
                                background="transparent"
                                speed="1"
                                style="width: 150px; height: 150px; margin: 0 auto;"
                                autoplay>
                            </lottie-player>
                            <h2 class="text-success mt-3 mb-3">Registration Successful!</h2>
                            <p class="lead mb-2">Thank you, <strong><?= htmlspecialchars($registered_name); ?></strong></p>
                            <p class="mb-3">Your registration has been completed successfully and the registration details sent to your email (<strong><?= htmlspecialchars($registered_email); ?></strong>).</p>
                        </div>
                    </div>

                    <?php else: ?>
                    <!-- Toast Notification -->
                    <?php if(!empty($errors)): ?>
                    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">
                        <div id="errorToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header bg-danger text-white">
                                <i class="fa fa-exclamation-circle me-2"></i>
                                <strong class="me-auto">Registration Error</strong>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                <ul class="mb-0 ps-3">
                                    <?php foreach($errors as $error): ?>
                                    <li><?= htmlspecialchars($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Registration Form -->
                    <div class="row">
                        <div class="col-lg-12 text-center registesss">
                            <h3>Registration</h3>
                        </div>
                        <div class="col-lg-12 contsssd">
                            <p>Fields with (*) are mandatory.</p>
                        </div>
                        <div class="col-lg-12 fntsssdn">

                         <?php
                        $random10 = random_int(1000000000, 9999999999);
                         ?>

                            <form method="POST" class="row" id="registrationForm">
                                <div class="mb-3 mt-2 col-lg-12">
                                    <label class="form-label">First Name<span>*</span></label>
                                    <input type="text" class="form-control <?= isset($errors['fname']) ? 'is-invalid' : ''; ?>" required name="fname" value="<?= htmlspecialchars($old_values['fname'] ?? ''); ?>">
                                    <?php if(isset($errors['fname'])): ?>
                                    <div class="invalid-feedback"><?= htmlspecialchars($errors['fname']); ?></div>
                                    <?php endif; ?>
                                    <input type="hidden" name="reg_no" value="GNI<?= $random10;?>">
                                    <input type="hidden" name="status" value="InActive">
                                </div>
                                <div class="mb-3 mt-2 col-lg-12">
                                    <label class="form-label">Last Name<span>*</span></label>
                                    <input type="text" class="form-control <?= isset($errors['lname']) ? 'is-invalid' : ''; ?>" required name="lname" value="<?= htmlspecialchars($old_values['lname'] ?? ''); ?>">
                                    <?php if(isset($errors['lname'])): ?>
                                    <div class="invalid-feedback"><?= htmlspecialchars($errors['lname']); ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label">Email Address <span>*</span></label>
                                    <input type="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''; ?>" required name="email" value="<?= htmlspecialchars($old_values['email'] ?? ''); ?>">
                                    <?php if(isset($errors['email'])): ?>
                                    <div class="invalid-feedback"><?= htmlspecialchars($errors['email']); ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label">Mobile Number (Whatsapp Number Only) <span>*</span></label>
                                    <input type="tel" class="form-control <?= isset($errors['phone']) ? 'is-invalid' : ''; ?>" name="phone" maxlength="15" pattern="[0-9+\-\s]{10,15}" oninput="this.value = this.value.replace(/[^0-9+\-\s]/g, '');" placeholder="e.g., 9876543210" required value="<?= htmlspecialchars($old_values['phone'] ?? ''); ?>">
                                    <small class="text-muted">Enter 10-digit Indian mobile number (starting with 6, 7, 8, or 9)</small>
                                    <?php if(isset($errors['phone'])): ?>
                                    <div class="invalid-feedback"><?= htmlspecialchars($errors['phone']); ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label">Date Of Birth <span>*</span></label>
                                    <input type="date" class="form-control <?= isset($errors['dob']) ? 'is-invalid' : ''; ?>" required name="dob" value="<?= htmlspecialchars($old_values['dob'] ?? ''); ?>">
                                    <?php if(isset($errors['dob'])): ?>
                                    <div class="invalid-feedback"><?= htmlspecialchars($errors['dob']); ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-2 selecreg col-lg-12">
                                    <label class="form-label">Preferred Language <span>*</span></label>
                                    <select class="form-select <?= isset($errors['language']) ? 'is-invalid' : ''; ?>" name="language">
                                        <option>---Select---</option>
                                        <option value="English" <?= ($old_values['language'] ?? '') == 'English' ? 'selected' : ''; ?>>English</option>
                                        <option value="Hindi" <?= ($old_values['language'] ?? '') == 'Hindi' ? 'selected' : ''; ?>>Hindi</option>
                                        <option value="Bengali" <?= ($old_values['language'] ?? '') == 'Bengali' ? 'selected' : ''; ?>>Bengali</option>
                                        <option value="Marathi" <?= ($old_values['language'] ?? '') == 'Marathi' ? 'selected' : ''; ?>>Marathi</option>
                                        <option value="Tamil" <?= ($old_values['language'] ?? '') == 'Tamil' ? 'selected' : ''; ?>>Tamil</option>
                                        <option value="Telugu" <?= ($old_values['language'] ?? '') == 'Telugu' ? 'selected' : ''; ?>>Telugu</option>
                                        <option value="Gujarati" <?= ($old_values['language'] ?? '') == 'Gujarati' ? 'selected' : ''; ?>>Gujarati</option>
                                        <option value="Kannada" <?= ($old_values['language'] ?? '') == 'Kannada' ? 'selected' : ''; ?>>Kannada</option>
                                        <option value="Odia" <?= ($old_values['language'] ?? '') == 'Odia' ? 'selected' : ''; ?>>Odia</option>
                                        <option value="Malayalam" <?= ($old_values['language'] ?? '') == 'Malayalam' ? 'selected' : ''; ?>>Malayalam</option>
                                        <option value="Assamese" <?= ($old_values['language'] ?? '') == 'Assamese' ? 'selected' : ''; ?>>Assamese</option>
                                    </select>
                                    <?php if(isset($errors['language'])): ?>
                                    <div class="invalid-feedback"><?= htmlspecialchars($errors['language']); ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-2 selecreg col-lg-12">
                                    <label class="form-label">Apply For <span>*</span></label>
                                    <select class="form-select <?= isset($errors['applyfor']) ? 'is-invalid' : ''; ?>" name="applyfor">
                                        <option>---Select---</option>
                                        <option value="CSA Application" <?= ($old_values['applyfor'] ?? '') == 'CSA Application' ? 'selected' : ''; ?>>CSA Application</option>
                                        <option value="Housekeeping Application" <?= ($old_values['applyfor'] ?? '') == 'Housekeeping Application' ? 'selected' : ''; ?>>Housekeeping Application</option>
                                    </select>
                                    <?php if(isset($errors['applyfor'])): ?>
                                    <div class="invalid-feedback"><?= htmlspecialchars($errors['applyfor']); ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label">Password <span>*</span></label>
                                    <div class="input-group has-validation">
                                        <input type="password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : ''; ?>" required name="password" id="password">
                                        <span class="input-group-text" onclick="togglePassword()" style="cursor: pointer;">
                                            <i class="fa fa-eye" id="toggleIcon" aria-hidden="true"></i>
                                        </span>
                                        <?php if(isset($errors['password'])): ?>
                                        <div class="invalid-feedback"><?= htmlspecialchars($errors['password']); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                               <div class="col-lg-12 mb-2">
                                <button type="submit" name="registration" class="btn btn-btnsss">Register</button>
                               </div>
                               <div class="col-lg-12 mb-2 abuttexts text-right">
                                <p><a href="login.php">Already have an account ?</a></p>
                               </div>
                            </form>
                        </div>
                    </div>
                    <?php endif; ?>


                    </div>
                    
                </div>
            </div>
            

        </div>
    </div>
</section>

<script>
function togglePassword() {
    var passwordInput = document.getElementById("password");
    var toggleIcon = document.getElementById("toggleIcon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    }
}

// Auto-dismiss toast after 5 seconds
document.addEventListener('DOMContentLoaded', function() {
    var toastEl = document.getElementById('errorToast');
    if(toastEl) {
        setTimeout(function() {
            toastEl.classList.remove('show');
            toastEl.classList.add('hide');
        }, 5000);
    }
});
</script>

<?php
include('include/footer.php');
?>