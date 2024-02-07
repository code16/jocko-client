<?php

namespace Code16\JockoClient\Eloquent;

use Code16\JockoClient\Database\Factories\MediaFactory;
use Code16\JockoClient\Support\Thumbnail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Media extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'medias';

    protected static function newFactory()
    {
        return new MediaFactory();
    }

    public function model(): MorphTo
    {
        return $this->morphTo('model');
    }

    public function thumbnail(int $width = null, int $height = null): ?string
    {
        return (new Thumbnail($this))
            ->setAppendTimestamp()
            ->make($width, $height);
    }
}
