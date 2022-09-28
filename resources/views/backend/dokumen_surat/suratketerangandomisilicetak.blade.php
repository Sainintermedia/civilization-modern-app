<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>surat tidak mampu</title>
</head>
        <table border="1" align="center"> 
            <tr>
        <td><img src="{{('image/kab1.jpg')}}"></td>
        <td align="center"><font size="4" >PEMERINTAH KABUPATEN TANGERANG</font><BR>
            <font size="4">KECAMATAN JAYANTI</font><BR>
            <font size="5" >DESA SUMURBANDUNG</font><BR>
            <font size="2"><i>Jl. Raya Serang KM. 32 Desa. Sumurbandung Kec. Jayanti Kab. Tangerang Kode Pos: 15610</i></font><BR>
            <font size="2"><i>WEB : www.desaku.com EMAIL:desaku@gmail.com</i></font><BR>
            </td>
        </tr>
        <tr>
            <td colspan="2"><hr></td>
        </tr>
        <tr>
            <td colspan="3" align="center"><font size="3"><u>SURAT KETERANGAN TIDAK MAMPU</u></font></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td colspan="2">Yang bertanda tangan di bawah ini, Kepala Desa Sumurbandung Kecamatan Jayanti Kabupaten Tangerang,<br> menerangkan bahwa</td>
        </tr>
        </table>
        <table align="center" border="1">
            <tr>
                <td width="100"><font size="2">Nama</font></td>
                <td width="400"><font size="2"> : {{ $familycards->nama }}</font></td>
            </tr>
            <tr>
                <td  width="100"><font size="2">Tempat, Tgl Lahir</font></td>
                <td width="100"><font size="2"> : {{ $familycards->tempat_lahir }} / {{ $familycards->tgl_lahir }}</font></font></td>
            </tr>
            <tr>
                <td><font size="2">Status Perkawinan</font></td>
                <td width="100"><font size="2"> : {{ $familycards->status_perkawinan }}</font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Jenis Kelamin</font></td>
                <td width="100"><font size="2"> : {{ $familycards->jenis_kelamin }}</font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Pekerjaan</font></td>
                <td width="100"><font size="2"> : {{ $familycards->jenis_kelamin }} </font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Alamat</font></td>
                <td width="100"><font size="2"> : {{ $familycards->alamat }} </font></td>
            </tr>
            <tr>
                <td height="20" colspan="2"><font size="2">Anak Dari Seorang Ayah :</td>
            </tr>
            <tr>
                <td width="100"><font size="2">Nama</font></td>
                <td width="100"><font size="2"> :</font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Tempat, Tgl Lahir</font></td>
                <td width="100"><font size="2"> :</font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Status Perkawinan</font></td>
                <td width="100"><font size="2"> :</font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Jenis Kelamin</font></td>
                <td width="100"><font size="2"> : </font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Pekerjaan</font></td>
                <td width="100"><font size="2"> :</font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Alamat</font></td>
                <td width="100"><font size="2"> :</font></td>
            </tr>
            <tr>
                <td height="20" colspan="2">Dengan seorang Ibu :</td>
            </tr>
            <tr>
                <td width="100"><font size="2">Nama</font></td>
                <td width="100"><font size="2"> :</font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Tempat, Tgl Lahir</font></td>
                <td width="100"><font size="2"> :</font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Status Perkawinan</font></td>
                <td width="100"><font size="2"> :</font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Jenis Kelamin</font></td>
                <td width="100"><font size="2"> :</font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Pekerjaan</font></td>
                <td width="100"><font size="2"> :</font></td>
            </tr>
            <tr>
                <td width="100"><font size="2">Alamat</font></td>
                <td width="100"><font size="2"> :</font></td>
            </tr>
            {{-- <tr>
                <td colspan="2" align="justify">Dengan ini Disampaikan bahwa pada hari senin akan dilaksanakan, upacara di halaman kantor
                   <br> desa sumurbandung pemberitahuan ini sekian terimakasih</td>
            </tr> --}}
        </table>
        <table align="center" border="1" > 
        <tr>
            <td width="500"><font size="2" align="justify">Nama tersebut diatas benar-benar warga Desa Sumurbandung, Kecamatan Jayanti, Kabupaten Tangerang, <br>dan menurut pengamatan kami dan data yang ada sampai saat ini termasuk keluarga yang tidak mampu / <br> dibawah garis kemiskinan.</td>
        </tr>
        <tr>
            <td width="400" colspan="2"><font size="2" align="justify">Demikian surat keterangan ini dibuat dengan sebenarnya, untuk dapat dipergunakan sebagaimana mestinya.</td>
        </tr>
        <tr>
            <td colspan="2" align="right" width="400"><font size="2">Tangerang,...........................................</td>
        </tr>
        <tr>
            <td  height="10" colspan="2"></td>
        </tr>
        <tr>
            <td colspan="2" align="right" width="400"><font size="2">Kepala Desa Sumurbandung</font></td>
        </tr>
        <tr>
            <td height="30" colspan="2"></td>
        </tr>
        <tr>
            <td colspan="2" width="500" align="right">Ahmad Jajuli,SE</font></td>
        </tr>
        </table>
<body>
</body>
</html>