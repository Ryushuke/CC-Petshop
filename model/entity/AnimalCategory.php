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
			default => null,
		};
	}

	public function getIcon(): string
	{
		return match ($this) {
			self::CAT => '🐱',
			self::DOG => '🐶',
			self::BIRD => '🐦',
			self::FISH => '🐟',
			self::REPTILE => '🦎',
			self::RODENT => '🐭',
			self::OTHER => '🐾',
		};
	}
}