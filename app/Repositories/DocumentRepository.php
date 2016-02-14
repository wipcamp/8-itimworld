<?php
namespace App\Repositories;

use App\Models\Wip8_document;
use Input;
class DocumentRepository implements DocumentRepositoryInterface{
  protected $document;

  public function __construct(){
    $this->document = new wip8_document();
  }

  public function create($data){
    $this->document->wip_id = array_get($data,'wip_id');
    $this->document->save();
  }
  public function get($param){
    $data = $this->document->where('wip_id',$param)->get();;
        $result = json_decode($data , true);
        return $result[0];
  }

  public function update($data,$update){
    $this->document->where('wip_id', array_get($data,'wip_id'))
                                    ->update($update);
  }
  public function find($param){
    $result = $this->document->where('wip_id',$param)->get();
    return $result;
    }

}
