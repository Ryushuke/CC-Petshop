<?php

enum AnimalCategory: string
{
	case CAT = 'Gato';
	case DOG = 'Cão';
	case BIRD = 'Pássaro';
	case FISH = 'Peixe';
	case REPTILE = 'Réptil';
	case RODENT = 'Roedor';
	case OTHER = 'Outro';
	case ALL = 'Todos';

	public static function fromString(string $value): ?self
	{
		return match ($value) {
			'Gato' => self::CAT,
			'Cão' => self::DOG,
			'Pássaro' => self::BIRD,
			'Peixe' => self::FISH,
			'Réptil' => self::REPTILE,
			'Roedor' => self::RODENT,
			'Outro' => self::OTHER,
			'Todos' => self::ALL,
			default => null,
		};
	}

	public function getIcon(): string
	{
		$html = "<span class='category-icon'>*</span>";
		return match ($this) {
			self::CAT => str_replace($html,'*', '🐱'),
			self::DOG => str_replace($html,'*', '🐶'),
			self::BIRD => str_replace($html,'*', '🐦'),
			self::FISH => str_replace($html,'*', '🐟'),
			self::REPTILE => str_replace($html,'*', '🦎'),
			self::RODENT => str_replace($html,'*', '🐭'),
			self::OTHER => str_replace($html,'*', '🐾'),
			self::ALL => self::CAT->geticon() . self::DOG->geticon() . self::BIRD->geticon()
			. self::FISH->geticon() . self::REPTILE->geticon() . self::RODENT->geticon() . self::OTHER->geticon(),
		};
	}
}