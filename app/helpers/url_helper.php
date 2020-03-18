<?php

function redirect($page) {
  return header('location: ?url=' . $page);
}