<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 12/18/17
 * Time: 5:18 PM
 */

namespace App\Services;


use App\Bridge;
use App\SectionType;

class SectionGroupService
{
    public function create(Bridge $bridge, SectionType $type)
    {
        return CreateSectionGroup::create(['bridge_id'=>$bridge->id,
                                'section_type_id'=>$type->id]);
    }
}