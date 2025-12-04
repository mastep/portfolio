<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QA extends Model
{
    protected $table = 'qa';
    
    protected $fillable = [
        'question',
        'answer',
    ];

    /**
     * Поиск ответа на вопрос
     */
    public static function findAnswer(string $question): ?string
    {
        $normalizedQuestion = mb_strtolower(trim($question));
        
        $qa = self::whereRaw('LOWER(question) LIKE ?', ['%' . $normalizedQuestion . '%'])
            ->first();
            
        return $qa ? $qa->answer : null;
    }
}

