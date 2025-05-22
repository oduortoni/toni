<?php

declare(strict_types=1);

namespace Ukumbi\Space\Domain;

use Ukumbi\Shared\Domain\ValueObjects\Uuid;
use DateTimeImmutable;

final class Space
{
    private function __construct(
        private Uuid $id,
        private string $name,
        private string $description,
        private bool $isTemporary,
        private ?DateTimeImmutable $expiresAt,
        private bool $isActive,
        private DateTimeImmutable $createdAt,
        private ?DateTimeImmutable $updatedAt
    ) {
    }

    public static function create(
        string $name,
        string $description,
        bool $isTemporary = false,
        ?DateTimeImmutable $expiresAt = null
    ): self {
        return new self(
            Uuid::random(),
            $name,
            $description,
            $isTemporary,
            $expiresAt,
            false, // spaces start as inactive until email verification
            new DateTimeImmutable(),
            null
        );
    }

    public function activate(): void
    {
        $this->isActive = true;
        $this->updatedAt = new DateTimeImmutable();
    }

    public function deactivate(): void
    {
        $this->isActive = false;
        $this->updatedAt = new DateTimeImmutable();
    }

    public function id(): Uuid
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function isTemporary(): bool
    {
        return $this->isTemporary;
    }

    public function expiresAt(): ?DateTimeImmutable
    {
        return $this->expiresAt;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function createdAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function updatedAt(): ?DateTimeImmutable
    {
        return $this->updatedAt;
    }
} 