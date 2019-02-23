<?php

namespace Calendar;

class Event {

	private $id;

	private $name;

	private $description;

	private $start;

	private $end;

	public function getId (): int {
		return $this->id;
	}

	public function getName (): string {
		return $this->name;
	}

	public function getDescription (): string {
		return $this->Description ?? '';
	}

	public function getStart (): \DateTime {
		return new \DateTime($this->start);
	}

	public function getEnd (): \DateTime {
		return new \DateTime($this->end);
	}

	public function create (Event $event): bool {
		$statement = $this->pdo->prepare('INSERT INTO events (name, description, start, end) VALUES (?, ?, ?, ?)');
		return $statement->execute([
			$event->getName(),
			$event->getDescription(),
			$event->getStart()->format('Y-m-d H:i:s'),
			$event->getEnd()->format('Y-m-d H:i:s'),
		]);
	}

	public function setName (string $name) {
		$this->name = $name;
	}
	public function setDescription (string $description) {
		$this->description = $description;
	}
	public function setStart (string $start) {
		$this->start = $start;
	}
	public function setEnd (string $end) {
		$this->end = $end;
	}
}