<?php namespace Sigesadmin;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable = ['title','body','published_at'];

    protected $dates = ['published_at'];

    /**
     * Recibe un dato antes de que se ingrese a la base de datos
     * o se reciba y lo transforma en este caso le da formato
     * a la fecha.
     *
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }


    /**
     * Devuelve las publicaciones proximas a publicar
     * @param $query
     */
    public function scopeUnpublished($query)
    {
        $query->where('publised_at'.'>=', Carbon::now());
    }

    //Scope
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }




}
