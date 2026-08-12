<?php
/**
 * Contact form mail handler
 * Called via fetch() POST from assets/js/script.js
 */
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// ── Collect & sanitise fields ─────────────────────────────────────────────────
$firstName = trim(strip_tags($_POST['firstName'] ?? ''));
$lastName  = trim(strip_tags($_POST['lastName']  ?? ''));
$email     = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone     = trim(strip_tags($_POST['phone']  ?? ''));
$subject   = trim(strip_tags($_POST['subject'] ?? ''));
$message   = trim(strip_tags($_POST['message'] ?? ''));

// ── Basic validation ──────────────────────────────────────────────────────────
if (!$firstName || !$lastName || !$email || !$message) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Required fields are missing.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

// ── Build email ───────────────────────────────────────────────────────────────
$to      = 'aiagent@adhiraninfotech.com';
$subjectLine = 'Website Enquiry: ' . ($subject ?: 'General') . ' — ' . $firstName . ' ' . $lastName;

$body  = "You have received a new enquiry from the Adhiran Infotech website.\r\n\r\n";
$body .= "Name    : {$firstName} {$lastName}\r\n";
$body .= "Email   : {$email}\r\n";
$body .= "Phone   : {$phone}\r\n";
$body .= "Subject : {$subject}\r\n\r\n";
$body .= "Message:\r\n{$message}\r\n";

$headers  = "From: website@adhiraninfotech.com\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// ── Send ──────────────────────────────────────────────────────────────────────
$sent = mail($to, $subjectLine, $body, $headers);

if ($sent) {
    echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to send. Please email us directly at aiagent@adhiraninfotech.com']);
}
