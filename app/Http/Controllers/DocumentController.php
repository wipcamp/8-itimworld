<?php
namespace App\Http\Controllers;
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
        $wip_id = $this->user->wip_id;
        $data = $this->DocumentRepository->get($wip_id);                    //get wip id
        return $this->theme->scope('upload.upload',$data)->layout('profile')->render();
    }
    public function getCreate($wip_id){
        $data = array('wip_id' => $wip_id );;
        $this->DocumentRepository->create($data);
    }

    public function postIndex(){
        $wip_id = $this->user->wip_id;
        $data = $this->DocumentRepository->get($wip_id);                    //get wip id
        if (Input::hasFile('schooldoc')) {
            $file = Input::file('schooldoc');
            
            $rules = array(
                'schooldoc' => 'mimes:jpeg,png,jpeg,pdf',
                );
            $messages = array();

            $validator = Validator::make($file, $rules, $messages);
            if ($validator->fails()) {
                $this->DocumentRepository->update($data,array('schooldoc_case'=>'กรุณาอัพโหลดไฟล์ png jpg jpeg หรือ pdf'));
                $data = $this->DocumentRepository->get($wip_id); 
                return $this->theme->scope('upload.upload',$data)->layout('profile')->render();
            }else{
                $exten = explode(".", $file->getClientOriginalName());
                $ext = $exten[1];
                $name = 'schooldoc.'.$ext;
                $wip_id = array_get($data,'wip_id');
                $Path = 'upload/'.$wip_id;
                $file->move($Path, $name);
                $this->DocumentRepository->update($data,array('schooldoc'=>2,'schooldoc_type'=>$ext,'schooldoc_case'=>'รอการตรวจสอบเอกสาร'));
            }
        }
        if (Input::hasFile('parentdoc')) {
            $file = Input::file('parentdoc');
            $rules = array(
                'parentdoc' => 'mimes:jpeg,png,jpeg,pdf',
                );
            $messages = array();
            $validator = Validator::make($file, $rules, $messages);
            if ($validator->fails()) {
                $this->DocumentRepository->update($data,array('parentdoc_case'=>'กรุณาอัพโหลดไฟล์ png jpg jpeg หรือ pdf'));
                $data = $this->DocumentRepository->get($wip_id); 
                return $this->theme->scope('upload.upload',$data)->layout('profile')->render();
            }else{
                $wip_id = array_get($data,'wip_id');
                $Path = 'upload/'.$wip_id;
                $exten = explode(".", $file->getClientOriginalName());
                $ext = $exten[1];
                $name = 'parentdoc.'.$ext;
                $file->move($Path, $name);
                $this->DocumentRepository->update($data,array('parentdoc'=>2,'parentdoc_type'=>$ext,'parentdoc_case'=>'รอการตรวจสอบเอกสาร'));
            }
        }
        $data = $this->DocumentRepository->get($wip_id); 
        return $this->theme->scope('upload.upload',$data)->layout('profile')->render();

    }



}
