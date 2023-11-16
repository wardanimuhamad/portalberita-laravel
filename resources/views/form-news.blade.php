<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Input Berita</title>
</head>

<body>
    <h1>Formulir Pengisian Berita</h1>
    <form>
        <table>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                    <select name="kategori">
                        <option value="cerbung">Cerbung</option>
                        <option value="cerpen">Cerpen</option>
                        <option value="horor">Horor</option>
                        <option value="puisi">Puisi</option>
                        <option value="roman">Roman</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="fjudul">Judul</label></td>
                <td>:</td>
                <td><input type="text" id="fjudul" maxlength="100" style="width: 100;" name="judul"></td>
            </tr>
            <tr>
                <td>Isi Berita</td>
                <td>:</td>
                <td>
                    <textarea name="isiberita" style="width: 300px; height: 50px;"></textarea>
                </td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="file" name="foto"></td>
            </tr>
            <tr>
                <td>Prioritas</td>
                <td>:</td>
                <td>
                    <input type="radio" name="prioritas" value="1">Rendah<br>
                    <input type="radio" name="prioritas" value="2">Sedang<br>
                    <input type="radio" name="prioritas" value="3">Tinggi
                </td>
            </tr>
            <tr>
                <td>Feedback</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="feedback1" value="rating">Rating<br>
                    <input type="checkbox" name="feedback2" value="komentar">Komentar
                </td>
            </tr>
            <tr>
                <td>Secret key</td>
                <td>:</td>
                <td>
                    <input type="password" name="secretkey">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
