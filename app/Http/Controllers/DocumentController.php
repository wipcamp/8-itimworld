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
        $data = $this->DocumentRepository->get(80001);                    //get wip id
        return $this->theme->scope('upload.upload',$data)->layout('profile')->render();
    }
    public function getCreate($wip_id){
        $data = array('wip_id' => $wip_id );;
        $this->DocumentRepository->create($data);
    }

    public function postIndex(){
        $data =  $this->DocumentRepository->get(80001);                     //get wip id
        if (Input::hasFile('schooldoc')) {
            $file = Input::file('schooldoc');
            $exten = explode(".", $file->getClientOriginalName());
            $ext = $exten[1];
            $name = 'schooldoc.'.$ext;
            $wip_id = array_get($data,'wip_id');
            if (strcmp($ext,"pdf")==0 || strcmp($ext,"jpg")!==0  or strcmp($ext,"jpeg")!==0  or strcmp($ext,"png")==0 )
            {
                $Path = 'upload/'.$wip_id;

                $file->move($Path, $name);
                $this->DocumentRepository->update($data,array('schooldoc'=>2,'schooldoc_type'=>$ext,'schooldoc_case'=>'รอการตรวจสอบเอกสาร'));
            }
            else
            {
                $this->DocumentRepository->update($data,array('schooldoc_case'=>'กรุณาอัพโหลดไฟล์ png jpg jpeg หรือ pdf'));
            }
        }
        if (Input::hasFile('parentdoc')) {
            $file = Input::file('parentdoc');
            $exten = explode(".", $file->getClientOriginalName());
            $ext = $exten[1];
            $name = 'schooldoc.'.$ext;
            $wip_id = array_get($data,'wip_id');
            if (strcmp($ext,"pdf")==0 || strcmp($ext,"jpg")==0 || strcmp($ext,"jpeg")==0 || strcmp($ext,"png")==0 )
            {
                $wip_id = array_get($data,'wip_id');
                $Path = 'upload/'.$wip_id;
                $exten = explode(".", $file->getClientOriginalName());
                $ext = $exten[1];
                $name = 'parentdoc.'.$ext;
                $file->move($Path, $name);
                $this->DocumentRepository->update($data,array('parentdoc'=>2,'parentdoc_type'=>$ext,'parentdoc_case'=>'รอการตรวจสอบเอกสาร'));
            }
            else
            {
                $this->DocumentRepository->update($data,array('parentdoc_case'=>'กรุณาอัพโหลดไฟล์ png jpg jpeg หรือ pdf'));
            }
        }
         return $this->theme->scope('upload.upload',$data)->render();

    }



}
