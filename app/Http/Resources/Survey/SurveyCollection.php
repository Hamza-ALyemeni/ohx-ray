<?php

namespace App\Http\Resources\Survey;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SurveyCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    private $pagination;

    public function __construct($resource)
    {
        $this->pagination = [
            "current_page"=>$resource->currentPage(),
            "last_page"=>$resource->lastPage(),
            "next_page_url"=>$resource->nextPageUrl(),
            "path"=>$resource->path(),
            "per_page"=>$resource->perPage(),
            "prev_page_url"=>$resource->previousPageUrl(),
            "total"=>$resource->total(),
            'count' => $resource->count(),
        ];

        $resource = $resource->getCollection();

        parent::__construct($resource);
    }

    public function toArray($request)
    {
        return [
            'success' => 1,
            'data' => $this->collection,
            'pagination' => $this->pagination
        ];
    }
}
