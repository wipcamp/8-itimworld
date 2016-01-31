<?php
namespace App\Http\Controllers;
use Validator;
use Redirect;
use Theme;
use App\Models\Wip8_document;
use Input;
use App\Repositories\DocumentRepositoryInterface;

class DocumentController extends ITIMController
{
    protected $DocumentRepository;

    public function __construct(DocumentRepositoryInterface $DocumentRepository){
        parent::__construct();
        $this->DocumentRepository = $DocumentRepository;
    }

    public function getIndex(){
        $data = $this->DocumentRepository->get(80001);                    //getdata
        return $this->theme->scope('document',$data)->render();
    }
    public function getCreate($wip_id){
        $data = array('wip_id' => $wip_id );;
        $this->DocumentRepository->create($data);
    }

    public function postIndex(){
        $data =  $this->DocumentRepository->get(80001);                     //getdata
        if (Input::hasFile('schooldoc')) {
            $rules = array(
            'schooldoc' => 'required|mimes:jpg,jpeg,png',
            );
            $messages = array(
                'schooldoc.required' => 'กรุณาเลือกไฟล์',
                'schooldoc.mimes' => 'ชนิดของไฟล์เป็น jpg ,jpeg หรือ png'
                );

            $validator = Validator::make(Input::all(), $rules, $messages);
            if ($validator->fails())
            {   echo "error";
                // return Redirect::back()
                //         ->withErrors($validator)
                //         ->withInput();
                
            }
            else
            {
                $wip_id = array_get($data,'wip_id');                                             
                $Path = 'upload/'.$wip_id;
                $file = Input::file('schooldoc');
                $exten = explode(".", $file->getClientOriginalName());  
                $ext = $exten[1];                      
                $name = 'schooldoc.'.$ext;
                $file->move($Path, $name);
                $this->DocumentRepository->update($data,array('schooldoc'=>2,'schooldoc_type'=>$ext));
            }
        }
        if (Input::hasFile('parentdoc')) {
            $rules = array(
            'parentdoc' => 'required|mimes:jpg,jpeg,png',
            );
            $messages = array(
                'parentdoc.required' => 'กรุณาเลือกไฟล์',
                'parentdoc.mimes' => 'ชนิดของไฟล์เป็น jpg ,jpeg หรือ png'
                );

            $validator = Validator::make(Input::all(), $rules, $messages);
            if ($validator->fails())
            {   echo "error";
                // return Redirect::back()
                //         ->withErrors($validator)
                //         ->withInput();
                
            }
            else
            {
                $wip_id = array_get($data,'wip_id');                                             
                $Path = 'upload/'.$wip_id;
                $file = Input::file('parentdoc');
                $exten = explode(".", $file->getClientOriginalName());  
                $ext = $exten[1];                      
                $name = 'parentdoc.'.$ext;
                $file->move($Path, $name);
                $this->DocumentRepository->update($data,array('parentdoc'=>2,'parentdoc_type'=>$ext));
            }
        }
        $data =  $this->DocumentRepository->get(80001);                         //getafa
        return $this->theme->scope('document',$data)->render();
        
    }



}
