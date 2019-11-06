<?php
namespace App\Listener;

use App\Entity\Property;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class PropertyListener
{
    public function preUpdate($property)
    {
        dd($property);
        // ... do something to notify the changes
//        $property->lifecycleFileUpload();

    }

}