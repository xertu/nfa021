<?php

require '../source/foundation.php';
require '../source/calendar/Month.php';
require '../source/calendar/Events.php';
$pdo = get_pdo();
$events = new Calendar\Events($pdo);

$month = new Calendar\Month($_GET['month'] ?? null, $_GET['year'] ?? null);

$start = $month->getStartingDay();

$start = $start->format('N') === '1' ? $start : $month->getStartingDay()->modify('last monday');

$weeks = $month->getWeeks();


$end = (clone $start)->modify( '+' . (6 + 7 * ($weeks -1)) . ' days');



$events = $events->getEventsBetweenByDay($start, $end);

require '../../views/header/header-calendar.php';
require '../../views/header/nav-calendar.php';


?> 

<div class="calendar">

	<?php if (isset($_GET['success'])): ?>
		<p>l'evenement a bien ete enregistre</p>
	<?php endif; ?>


	<div>
		<h1><?= $month->toString(); ?></h1>
		<div>
			<a href="/nfa021/calendrier-rdv/public/calendrier.php?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year; ?>" class=""> <- </a>
			<a href="/nfa021/calendrier-rdv/public/calendrier.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>" class=""> -> </a>
		</div>
	</div>
	<div class="calendar_table">
		<table class="table">

			<?php 

			for ($i=0; $i < $weeks; $i++):
				?>
				<tr>
					<?php foreach($month->days as $k => $day): 
						$date = (clone $start)->modify("+" . ($k + $i * 7) . "days");
						$eventsForDay = $events[$date->format('Y-m-d')] ?? [];
						?>
						<td class="<?= $month->withinMonth($date) ? '' : 'calendar_othermonth'; ?>">
							<?php if ($i === 0): ?>

								<div class="calendar_weekday">
									<?= $day; ?>
								</div>
							<?php endif; ?>
							<div class="calendar_day"><?= $date->format('d'); ?></div>
							<?php foreach ($eventsForDay as $event): ?> 
								<div class="calendar_event">
									<?= (new DateTime($event['start']))->format('H:i') ?> -<a href="../public/event.php?id=<?= $event['id']; ?>"> <?= h($event['name']); ?>	</a>
								</div>
							<?php endforeach; ?>
						</td>
					<?php endforeach; ?>
				</tr>
			<?php endfor; ?>


		</table>

		<a class="button" href="add.php">ajouter</a>


	</div>
</div>
<script src="../../node_modules/jquery/dist/jquery.js"></script>
<script src="../../node_modules/what-input/dist/what-input.js"></script>
<script src="../../node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="../../js/app.js"></script>

<?php require '../../views/footer.php'; ?>

