<?php

namespace App\Models\Traits;

use DateTime;
use Illuminate\Contracts\Database\Eloquent\Builder;

trait AccountCanBeBlocked
{
    public function initializeAccountCanBeBlocked()
    {
        $this->mergeCasts([
            $this->getBlockedAtColumn() => 'datetime',
        ]);
    }

    public function getBlockedAtColumn(): string
    {
        return 'blocked_at';
    }

    public function setBlockedStatusTo(?DateTime $value): self
    {
        return $this->forceFill([$this->getBlockedAtColumn() => $value]);
    }

    public function isAccountBlocked(): bool
    {
        return ! is_null($this->{$this->getBlockedAtColumn()});
    }

    public function scopeIsNotBlocked(Builder $query)
    {
        $query->whereNull($this->getBlockedAtColumn());
    }
}
