<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Facility
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * 
 * @method static \Illuminate\Database\Eloquent\Builder|Facility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facility query()
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereUpdatedAt($value)
 * @method static \Database\Factories\FacilityFactory factory($count = null, $state = [])
 * 
 * @mixin \Eloquent
 */
class Facility extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facilities';

    /**
     * Get the facility icon based on the name.
     *
     * @return string
     */
    public function getFacilityIcon()
    {
        $name = strtolower($this->name);
        
        if (str_contains($name, 'lab') || str_contains($name, 'laboratorium')) {
            if (str_contains($name, 'komputer')) return '💻';
            if (str_contains($name, 'bahasa')) return '🗣️';
            return '🔬';
        }
        
        if (str_contains($name, 'perpustakaan') || str_contains($name, 'library')) return '📚';
        if (str_contains($name, 'olahraga') || str_contains($name, 'sport')) return '⚽';
        if (str_contains($name, 'aula') || str_contains($name, 'hall')) return '🏛️';
        if (str_contains($name, 'kantin') || str_contains($name, 'cafeteria')) return '🍽️';
        if (str_contains($name, 'masjid') || str_contains($name, 'mushola')) return '🕌';
        if (str_contains($name, 'workshop') || str_contains($name, 'bengkel')) return '🔧';
        if (str_contains($name, 'kelas') || str_contains($name, 'ruang')) return '🏫';
        if (str_contains($name, 'parkir') || str_contains($name, 'parking')) return '🅿️';
        
        return '🏢';
    }
}