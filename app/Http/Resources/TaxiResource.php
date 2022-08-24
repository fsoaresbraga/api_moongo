<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaxiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            /*
            'id' => $this->id,
            'name' => $this->name,
            'small_description' => $this->small_description,
            'description' => $this->description,
            'workload' => $this->workload,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'free' => $this->free,
            'free_label' => $this->freeOptions[$this->free],
            'price' =>$this->price,
            //'course_link' =>$this->course_link,
            'qr_code' => $this->qr_code,
            'image' => $this->image,
            'status' => $this->status,
            'status_label' => $this->statusOptions[$this->status],
            'slug' => $this->slug,
            'trail' => new TrailsResource($this->whenLoaded('trail')),
            'place' => new PlaceResource($this->whenLoaded('place')),
            'inclusions' =>  CourseInclusionResource::collection($this->whenLoaded('inclusions')),
            'evaluation' => new QuestionsEvaluationsResource($this->whenLoaded('questions_evaluation')),
            'instructors' => InstructorResource::collection($this->whenLoaded('instructors'))
            */
        ];
    }
}
