<?php

namespace App\Http\Livewire;

use App\Models\Datek;
use App\Models\User;
use Livewire\Component;

class Laporan extends Component
{
    public $assign;
    public $nama;

    public $site_id;
    public $sn_ap;
    public $sn_ont;

    public function render()
    {
        return view('livewire.laporan');
    }

    public function updated()
    {
        $this->nama = User::where('assign', $this->assign)->first();
        if(!empty($this->nama)){
            $this->nama = $this->nama->name;
        }

        if(!empty($this->sn_ap)){
            $this->site_id = Datek::where('sn', $this->sn_ap)->first();
            if(!empty($this->site_id)){
                $this->site_id = $this->site_id->log;
            }

            $this->sn_ont = Datek::where('sn', $this->sn_ap)->first();
            if(!empty($this->sn_ont)){
                $this->sn_ont = $this->sn_ont->ont;
            }
        }

    }
}
