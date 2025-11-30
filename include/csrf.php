<?php
/**
 * CSRF Protection Helper Functions
 * Include this file and call csrf_start() at the beginning of pages with forms
 */

/**
 * Initialize CSRF protection - must be called after session_start()
 */
function csrf_init() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
}

/**
 * Get the current CSRF token
 * @return string The CSRF token
 */
function csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        csrf_init();
    }
    return $_SESSION['csrf_token'];
}

/**
 * Generate a hidden input field with the CSRF token
 * @return string HTML hidden input element
 */
function csrf_field() {
    return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars(csrf_token()) . '">';
}

/**
 * Verify the CSRF token from a form submission
 * @param string $token The token to verify (defaults to $_POST['csrf_token'])
 * @return bool True if valid, false otherwise
 */
function csrf_verify($token = null) {
    if ($token === null) {
        $token = $_POST['csrf_token'] ?? '';
    }
    
    if (empty($_SESSION['csrf_token']) || empty($token)) {
        return false;
    }
    
    return hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Verify CSRF token and die with error if invalid
 * @param string $redirect_url Optional URL to redirect to on failure
 */
function csrf_check($redirect_url = null) {
    if (!csrf_verify()) {
        if ($redirect_url) {
            echo "<script>alert('Invalid request. Please try again.');window.location.href='$redirect_url'</script>";
        } else {
            die('Invalid CSRF token. Please refresh the page and try again.');
        }
        exit;
    }
}

/**
 * Regenerate the CSRF token (call after successful form submission for extra security)
 */
function csrf_regenerate() {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

