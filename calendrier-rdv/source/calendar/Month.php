<?php


namespace calendar;


class Month
{

	public $days = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

	private $months = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre'];

	public $month;
	public $year;

	/**
	*Month constructor
	*@param int $month Le mois compris entre 1 et 12
	*@param int $year l'année
	*@throws \exception
	*/


	public function __construct(?int $month = null, ?int $year = null)
	{

		if ($month === null || $month < 1 || $month > 12) {
			$month = intval(date('m'));
		}

		if ($year === null) {
			$year = intval(date('Y'));
		}

		$this->month = $month;
		$this->year = $year;
	}

/**
* renvoie le premier jour du mois
*@return \DateTime
*/



public function getStartingDay () : \DateTime {
	return new \DateTime("{$this->year}-{$this->month}-01");
}



	/**
	*retourne le mois en toutes lettres
	*@return string
	*/



	public function toString (): string {

		return $this->months[$this->month - 1] . ' ' . $this->year;

	}


	public function getWeeks (): int{
		$start = new \DateTime("{$this->year}-{$this->month}-01");

		$end = (clone $start)->modify('+1 month -1 day');
		

		$weeks = intval($end->format('W')) - intval($start->format('W')) + 1;

		if ($weeks < 0) {
			$weeks = intval($end->format('W'));
		}
		return $weeks;
	}

	/**
	*est ce que le jour est dans le mois en cours
	*@param \DateTime $date
	*@return bool
	*/

	public function withinMonth (\DateTime $date): bool {

		return $this->getStartingDay()->format('Y-m') === $date->format('Y-m');
	}


	/**
	*renvoi le mois suivant
	*@return month 
	*/

	public function nextMonth(): Month
	{
		$month = $this->month + 1;
		$year = $this->year;
		if ($month > 12)
		{
			$month = 1;
			$year += 1;
		}
		return new Month($month, $year);
	}

	/**
	* renvoie le mois precedent
	*@param month
	*/

	public function previousMonth(): Month
	{
		$month = $this->month - 1;
		$year = $this->year;
		if ($month < 1) {
			$month = 12;
			$year -= 1;
		}
		return new Month($month, $year);
	}

	
}
