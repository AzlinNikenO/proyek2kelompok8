<?php

namespace App\Mail;

use App\Models\Pengajuan;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StatusPengajuanMail extends Mailable
{
    use SerializesModels;

    public $pengajuan;

    public function __construct(Pengajuan $pengajuan)
    {
        $this->pengajuan = $pengajuan;
    }

    public function build()
    {
        return $this->subject('Status Pengajuan Anda')
            ->view('emails.status_pengajuan');
    }
}
