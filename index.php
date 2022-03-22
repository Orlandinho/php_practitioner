<?php

$query = require 'bootstrap.php';
require 'functions.php';
require 'Task.php';

$tasks = $query->selectAll('todos');

require 'template.php';