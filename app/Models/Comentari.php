<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Comentari extends Model
{
    use Notifiable;

    //taula
    protected $table = 'comentaris';

    protected $fillable = [
        'descripcio', 'valoracio'
    ];

    //mètodes
    //un comentari un usuari
    public function user()
    {
        return $this->belongsTo("App\Models\User", "id_usuari");
    }

    //un comentari un producte
    public function producte()
    {
        return $this->belongsTo("App\Models\Producte", "id_producte");
    }
}
