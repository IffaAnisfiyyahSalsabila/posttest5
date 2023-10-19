<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POSTTEST 2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">

</head>
<body class="lightmode">
    <div class="menu">
        <a href="#1" class="button">Frame</a>
        <a href="#2" class="button">Contact Lens</a>
        <a href="#3" class="button">Lensa</a>
        <a href="#6" class="button">About Me</a>
        <a id="dark-mode" href="#" onclick="toggleDarkMode()" class="fas fa-moon"></a>
        <br><br>
    </div>
    <h1 align="center">FYSWEARS</h1>
    <table align="center" border="1">
        <tr>
            <td colspan="2" bgcolor="#fff000"><img src="./img/abcd.jpeg.jpg" width="325px" height="200px" border="2"></td>
        </tr>
        <tr align="center">
            <td>wa : 09123456789</td>
            <td>IG : @fys.wears</td>
        </tr>
    </table>
    <h2 id="1">Frame Glasses</h2>
    <div class="center-content">
        <table>
            <tr>
                <td width="1%">Cat eye</td>
            </tr>
            <tr>
                <td width="1%">Butterfly</td>
            </tr>
            <tr>
                <td width="1%">square</td>
            </tr>
            <tr>
                <td width="1%">round</td>
            </tr>
        </table>
    </div>

    <h2 id="2">Contact Lens</h2>
    <div class="center-content">
        <table>
            <tr>
                <td width="1%">softlens warna</td>
            </tr>
            <tr>
                <td width="1%">softlens bening minus</td>
            </tr>
            <tr>
                <td width="1%">softlens warna minus</td>
            </tr>
        </table>
    </div>

    <h2 id="3">Lensa</h2>
    <div class="center-content">
        <table>
            <tr>
                <td width="1%">Minus</td>
            </tr>
            <tr>
                <td width="1%">Anti Radiasi</td>
            </tr>
            <tr>
                <td width="1%">Photocromic</td>
            </tr>
        </table>
    </div>

    <h2 id="6">About Me</h2>
    <div class="about-me">
        <div class="personal-info">
            <p>Nama: Iffa Anisfiyyah Salsabila</p>
            <p>TTL: Bontang, 10 Maret 2005</p>
            <p>NIM: 2209106109</p>
        </div>
        <div class="additional-info">
            <p>Passionate about eyewear fashion</p>
            <p>Follow me on Instagram: @iffa.eyewear</p>
        </div>
    </div>

    <form>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>

        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur" min="1" placeholder="Masukkan umur Anda" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>

        <button type="submit">Submit</button>
    </form>

    </section>
    

    
    <?php include 'input.php'?>

    <footer>
        <p class="footer-text"> © 2023 FYSWEARS</p>
    </footer>

    <script src="fys.js"></script>
</body>
</html>