<?php

namespace App\controllers;
use App\Models\ApprenantModel;
class Apprenant extends BaseController{
    public function index()
    $model = new Apprenantmodel();
    
    $data=[
        'apprenant'=> $model->getApprenant(),
        'title'=>'Liste des apprenants',
    ];
    rturn view('templates/header',$data)
    .view('apprenant/index')
    .view('templates/footer');
    public function view($id =null){
        $model= model(ApprenantModel::class);
        $data =[
            'apprenant'=> $model->getApprenant($id),
            'title'=>'fiche de l\'apprenant',
        ];
        return view('templates/header',$data)
        .view('apprenant/view')
        .view('templates/footer');
    }
}