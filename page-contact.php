<?php
/**
 * Template Name: Contact
 * A contact page with a working contact form (wp_mail + nonce).
 *
 * @package OceanAlliance
 */

get_header();
$uri = get_template_directory_uri();

// --- Handle form submission ---
$contact_sent = false;
$contact_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['oan_contact'])) {
    // Verify nonce
    if (!isset($_POST['oan_contact_nonce']) || !wp_verify_nonce($_POST['oan_contact_nonce'], 'oan_contact_form')) {
        $contact_error = 'Security check failed. Please refresh and try again.';
    } else {
        $name    = sanitize_text_field($_POST['contact_name'] ?? '');
        $email   = sanitize_email($_POST['contact_email'] ?? '');
        $subject = sanitize_text_field($_POST['contact_subject'] ?? '');
        $message = sanitize_textarea_field($_POST['contact_message'] ?? '');

        if (empty($name) || empty($email) || empty($message)) {
            $contact_error = 'Please fill in your name, email, and message.';
        } elseif (!is_email($email)) {
            $contact_error = 'Please enter a valid email address.';
        } else {
            $to      = 'ana@oceanalliancenetwork.org';
            $subj    = '[OAN Contact] ' . $subject;
            $body    = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message\n";
            $headers = array(
                'Reply-To: ' . $name . ' <' . $email . '>',
                'Content-Type: text/plain; charset=UTF-8',
            );

            $sent = wp_mail($to, $subj, $body, $headers);
            if ($sent) {
                $contact_sent = true;
            } else {
                $contact_error = 'Something went wrong sending your message. Please email us directly at ana@oceanalliancenetwork.org';
            }
        }
    }
}
?>

<!-- PAGE HERO (compact — no video) -->
<section class="page-hero page-hero--compact">
    <div class="container narrow center">
        <span class="eyebrow reveal">Contact</span>
        <h1 class="reveal">Let's <em>connect.</em></h1>
        <p class="lead reveal">Questions about partnership, the ambassador program, media coverage, or just want to say hello? We'd love to hear from you.</p>
    </div>
</section>

<!-- CONTACT FORM -->
<section class="section depth-sunlight" style="padding-bottom:40px">
    <div class="container">
        <div class="contact-layout">

            <!-- Left: contact info -->
            <div class="contact-info reveal">
                <h3>Reach out</h3>
                <p class="contact-desc">Ocean Alliance Network is a fiscally sponsored initiative under the Sustain OC Foundation, a 501(c)(3) nonprofit (EIN: 27-4353381).</p>

                <div class="contact-method">
                    <span class="contact-label">Email</span>
                    <a href="mailto:ana@oceanalliancenetwork.org">ana@oceanalliancenetwork.org</a>
                </div>

                <div class="contact-method">
                    <span class="contact-label">Follow</span>
                    <div class="contact-social">
                        <a href="https://www.instagram.com/oceanalliancenetwork/" target="_blank" rel="noopener" aria-label="Instagram">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                        </a>
                        <a href="#" aria-label="YouTube">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M21.6 7.2s-.2-1.4-.8-2c-.8-.8-1.7-.8-2.1-.9C15.9 4 12 4 12 4s-3.9 0-6.7.3c-.4 0-1.3.1-2.1.9-.6.6-.8 2-.8 2S2 8.8 2 10.5v1.6c0 1.7.2 3.3.2 3.3s.2 1.4.8 2c.8.8 1.9.8 2.4.9 1.7.2 6.6.3 6.6.3s3.9 0 6.7-.3c.4 0 1.3-.1 2.1-.9.6-.6.8-2 .8-2s.2-1.6.2-3.3v-1.6c0-1.7-.2-3.3-.2-3.3zM9.8 14.4V8l5.2 3.2-5.2 3.2z"/></svg>
                        </a>
                        <a href="#" aria-label="LinkedIn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"/></svg>
                        </a>
                    </div>
                </div>

                <div class="contact-method">
                    <span class="contact-label">Tax ID (EIN)</span>
                    <span class="contact-value">27-4353381</span>
                </div>
            </div>

            <!-- Right: form -->
            <div class="contact-form-wrap reveal">
                <?php if ($contact_sent) { ?>
                    <div class="contact-success">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 12l3 3 5-6"/></svg>
                        <h3>Message sent!</h3>
                        <p>Thanks for reaching out. We'll get back to you soon.</p>
                    </div>
                <?php } else { ?>
                    <?php if ($contact_error) { ?>
                        <div class="contact-error"><?php echo esc_html($contact_error); ?></div>
                    <?php } ?>
                    <form method="post" class="contact-form">
                        <?php wp_nonce_field('oan_contact_form', 'oan_contact_nonce'); ?>
                        <input type="hidden" name="oan_contact" value="1" />
                        <div class="form-row">
                            <label for="contact-name">Name *</label>
                            <input type="text" id="contact-name" name="contact_name" required value="<?php echo esc_attr($_POST['contact_name'] ?? ''); ?>" />
                        </div>
                        <div class="form-row">
                            <label for="contact-email">Email *</label>
                            <input type="email" id="contact-email" name="contact_email" required value="<?php echo esc_attr($_POST['contact_email'] ?? ''); ?>" />
                        </div>
                        <div class="form-row">
                            <label for="contact-subject">Subject</label>
                            <input type="text" id="contact-subject" name="contact_subject" value="<?php echo esc_attr($_POST['contact_subject'] ?? ''); ?>" placeholder="Partnership, media, ambassador program..." />
                        </div>
                        <div class="form-row">
                            <label for="contact-message">Message *</label>
                            <textarea id="contact-message" name="contact_message" rows="6" required placeholder="Tell us how we can help..."><?php echo esc_textarea($_POST['contact_message'] ?? ''); ?></textarea>
                        </div>
                        <button type="submit" class="btn btn--primary">Send message</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
