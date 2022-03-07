<?php

const FLASH = 'FLASH_MESSAGES';

const FLASH_ERROR = 'error';
const FLASH_WARNING = 'warning';
const FLASH_INFO = 'info';
const FLASH_SUCCESS = 'success';

/**
 * Create a flash message
 *
 * @param string $name
 * @param string $message
 * @param string $type
 * @return void
 */
function create_flash_message(string $name, string $message, string $type): void
{
  // remove existing message with the name
  if (isset($_SESSION[FLASH][$name])) {
    unset($_SESSION[FLASH][$name]);
  }
  // add the message to the session
  $_SESSION[FLASH][$name] = ['message' => $message, 'type' => $type];
}


/**
 * Format a flash message
 *
 * @param array $flash_message
 * @return string
 */
function format_flash_message(array $flash_message): string
{
  
  return sprintf(
    '<div id="myModalTiket" class="modal" style="display:%s;">
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>Some text in the Modal..</p>
      </div>
    </div>',
      'block'
    );
}

/**
 * Display a flash message
 *
 * @param string $name
 * @return void
 */
function display_flash_message(string $name): void
{
  if (!isset($_SESSION[FLASH][$name])) {
    return;
  }

  // get message from the session
  $flash_message = $_SESSION[FLASH][$name];

  // delete the flash message
  unset($_SESSION[FLASH][$name]);

  // display the flash message
  echo format_flash_message($flash_message);
}

/**
 * Flash a message
 *
 * @param string $name
 * @param string $message
 * @param string $type (error, warning, info, success)
 * @return void
 */
function flash(string $name = '', string $message = '', string $type = ''): void
{
  if ($name !== '' && $message !== '' && $type !== '') {
    // create a flash message
    create_flash_message($name, $message, $type);
  } elseif ($name !== '' && $message === '' && $type === '') {
    // display a flash message
    display_flash_message($name);
  }
}
