<?php

function speakers_preprocess_webform_confirmation (&$variables, $hook) {
  // Override empty confirmation message variable.
  if (!isset($variables['confirmation_message']) || $variables['confirmation_message'] == '') {
    $variables['confirmation_message'] = t('Thank you! We have received your speaker registration.');
  }

  // Additional variables to change "Go back to the form." link message.
  $variables['link_url'] = url('node/'. $variables['node']->nid);
  $variables['link_title'] = t('Register another speaker');
  $variables['link_tip'] = t('Click here to register another speaker');
}

function speakers_webform_mail_headers($variables) {
  $headers = array(
    'X-Mailer' => 'Drupal Webform (PHP/' . phpversion() . ')',
  );

  // Add BCC on registrant email.
  if ($variables['email']['eid'] == '1') {
    $headers['bcc'] = 'admin@example.com';
  }

  return $headers;
}
