<?php 

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController{

    private $mahasiswa;

    public function __construct(){
        $this->mahasiswa = new MahasiswaModel();
    }

    public function index(): string{
        $data = ['mahasiswa' => $this->mahasiswa->findAll()];
        return view('Mahasiswa/dataMhs', $data);
    }
    
    public function formMahasiswa(){
        return view('mahasiswa/formMhs');
    }

    public function simpanMahasiswa(){
        $post = $this->request->getPost(['nim', 'nama', 'program_studi', 'konsentrasi']);
        
        if(!$this->validateData($post, [
            'nim' => 'required',
            'nama' => 'required',
            'program_studi' => 'required',
            'konsentrasi' => 'required'
        ])){
            return view('mahasiswa/formMhs', [
                'errors' => $this->validator->getErrors()
            ]);
        }else{
            $this->mahasiswa->insert([
                'nim' =>$post['nim'],
                'nama' =>$post['nama'],
                'program_studi' =>$post['program_studi'],
                'konsentrasi' =>$post['konsentrasi']
            ]);
        }

        return view('Mahasiswa/dataMhs', [
            'sukses' => 'Data Berhasil Di Tambah :)',
            'mahasiswa' => $this->mahasiswa->findAll()]);
    }

}

?>