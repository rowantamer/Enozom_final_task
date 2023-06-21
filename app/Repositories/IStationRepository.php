<?php
namespace App\Repositories;


interface IStationRepository{
    public function getFromStationIdByStationName($from);
    public function getToStationIdByStationName($to);
}
