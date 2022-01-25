<?php
namespace App\Helper;

use DateTimeInterface;

class DateHelper
{
	public static function getDuration(DateTimeInterface $start, DateTimeInterface $end = null)
	{
        if (is_null($end)) {
            return sprintf('Depuis %s', $start->format('Y'));
        }

        if ($start->format('Y') === $end->format('Y')) {
            return $start->format('Y');
        }

        return sprintf('%s - %s', $start->format('Y'), $end->format('Y'));
	}
}
