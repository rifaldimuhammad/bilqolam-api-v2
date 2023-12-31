<?php

namespace App\Http\Resources;

use App\Models\lembagaModel;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class guruResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama_guru' => $this->nama_guru,
            'nama_ayah' => $this->nama_ayah,
            'no_hp' => $this->no_hp,
            'email' => $this->email,
            'ttl' => $this->ttl,
            'alamat' => $this->alamat,
            'syahadah' => $this->syahadah,
            'pendidikan' => $this->pendidikan,
            'lembaga' => lembagaModel::find($this->id_lembaga)->nama,
            'sertifikat_training' => $this->sertifikat_training,
            'kode_provinsi' => $this->kode_provinsi,
            'kode_kabupaten' => $this->kode_kabupaten,
            'kode_kecamatan' => $this->kode_kecamatan,
            'kode_kelurahan' => $this->kode_kelurahan,
            'provinsi' => $this->provinsi->nama_wilayah,
            'kabupaten' => $this->kabupaten->nama_wilayah,
            'kecamatan' => $this->kecamatan->nama_wilayah,
            'kelurahan' => $this->kelurahan->nama_wilayah,
        ];
    }
}
