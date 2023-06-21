<?php
namespace App\Repositories;


interface ITripStationRepository{
    public function getListOfTrainsAndTrips($fromId, $toId);
}
