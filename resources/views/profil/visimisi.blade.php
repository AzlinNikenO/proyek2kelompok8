@extends('layouts.app')

@section('content')

<br>

<div style="
    max-width:1200px;
    margin:40px auto;
    padding:20px;
    display:flex;
    gap:30px;
    align-items:flex-start;
">

    <div style="
        flex:2;
        background:#ffffff;
        padding:40px;
        border-radius:10px;
        box-shadow:0 6px 15px rgba(0,0,0,0.15);
        text-align:justify;
        line-height:1.7;
    ">

        <h1 style="font-size:28px;font-weight:bold;text-align:center;margin-bottom:30px;">
            Visi Misi Desa Lohbener
        </h1>

        <b>VISI</b>
        <ol style="padding-left:20px; margin-top:10px;">

                Mewujudkan Desa Lohbener yang Maju, Mandiri, Sejahtera, dan Berbudaya Berlandaskan Gotong Royong
        </ol>

        <b>MISI</b>
        <ol style="padding-left:20px; margin-top:10px;">
            <li>Peningkatan Pelayanan Dasar:
                Meningkatkan akses dan kualitas pelayanan kesehatan, pendidikan, serta infrastruktur desa yang memadai.</li>
            <li>Pemberdayaan Sektor Pertanian:
                Membangun pertanian produktif dan meningkatkan kesejahteraan petani sebagai tulang punggung ekonomi desa.</li>
            <li>Tata Kelola Pemerintahan yang Baik:
                Menyelenggarakan pemerintahan yang transparan, akuntabel, partisipatif, dan responsif.</li>
            <li>Pengembangan Sumber Daya Manusia (SDM):
                Meningkatkan kualitas SDM melalui pendidikan berbasis IPTEK dan berwawasan global.</li>
            <li>Penciptaan Lingkungan Kondusif:
                Membangun lingkungan yang agamis, sehat, dengan sarana peribadatan yang memadai.</li>
            <li>Penguatan Gotong Royong:
                Mempererat persatuan dan kesatuan warga melalui semangat gotong royong untuk pembangunan bersama. </li>
        </ol>

    </div>

    <div style="
        flex:1;
        background:#ffffff;
        padding:20px;
        border-radius:10px;
        box-shadow:0 6px 15px rgba(0,0,0,0.15);
        text-align:center;
    ">

        <h1 style="font-size:24px;font-weight:bold;margin-bottom:20px;">
            Peta Desa Lohbener
        </h1>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9601998713106!2d108.28125547355704!3d-6.399130362583848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb8628cbecf77%3A0x1ada0c29ffe9a792!2sKantor%20Kuwu%20Lohbener!5e0!3m2!1sen!2sid!4v1765877692319!5m2!1sen!2sid"
            width="100%"
            height="300"
            style="border:0;border-radius:8px;"
            allowfullscreen=""
            loading="lazy">
        </iframe>

    </div>


</div>

@endsection
