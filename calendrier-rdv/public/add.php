<?php

require '../source/foundation.php';
require '../source/calendar/EventValidator.php';

require '../source/calendar/Event.php';
require '../source/calendar/Events.php';
require '../source/calendar/Month.php';
require '../../views/header/header-calendar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$data = $_POST;
	$errors = [];
	$validator = new Calendar\EventValidator();
	$errors = $validator->validates($_POST);
	if (empty($errors)) {
		$events = new \Calendar\Event();
		$event->setName($data['name']);
		$event->setDescription($data['description']);
		$event->setStart(DateTime::createFromFormat('Y-m-d H:i', $data['date'] . ' ' . $data['start'])->format('Y-m-d H:i:s'));
		$event->setEnd(DateTime::createFromFormat('Y-m-d H:i', $data['date'] . ' ' . $data['end'])->format('Y-m-d H:i:s'));
		$events = new \Calendar\Events(get_pdo());
		$events->create($event);
		exit();
		
	}
	
}
?>
<a href="calendrier.php" class="button">retour au calendrier</a>
<div class="container">
	<h1>ajouter un evenement</h1>
	<form action="add.php" method="POST" class="form">
		<div class="form-groupe">
			<label for="name">titre</label>
			<input id="name" type="text" required class="form-control" name="name" value="">
			<?php if (isset($errors['name'])): ?>
				<?= $errors['name']; ?>
			<?php endif; ?>
	
			<label for="date">date</label>
			<input id="date" type="date" required class="form-control" name="date" value="">
			<?php if (isset($errors['date'])): ?>
				<?= $errors['date']; ?>
			<?php endif; ?>
			<label for="start">debut</label>
			<input id="start" type="time" required class="form-control" name="start" placeholder="HH:MM" value="">
			<?php if (isset($errors['start'])): ?>
				<?= $errors['start']; ?>
			<?php endif; ?>
			<label for="end">fin</label>
			<input id="end" type="time" required class="form-control" name="end" placeholder="HH:MM" value="">
			<label for="description">description</label>
			<textarea name="description" id="description" class="form-control"></textarea>
		</div>
		<div class="form-groupe">
			<button class="button">ajouter</button>
		</div>
	</form>
</div>

