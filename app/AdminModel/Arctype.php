<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Arctype extends Model
{
    //
    protected $fillable = [
        'reid',
        'topid',
        'sortrank',
        'typename',
        'typedir',
        'title',
        'description',
        'keywords',
        'isextend',
        'is_write',
        'litpic',
        'contents',
        'dirposition',
        'real_path',
        'mid',
        'typeimages',
    ];
    public function setFillable($fillable)
    {
        $this->fillable = $fillable;
    }
    /**
     * Eloquent ORM 关联定义
     * @param
     *
     * @return arraydatas
     */
    protected function articles()
    {
        return $this->hasMany('App\AdminModel\Archive','typeid');
    }
    protected function addonarticle()
    {
        return $this->hasMany('App\AdminModel\Addonarticle','typeid');
    }
}
